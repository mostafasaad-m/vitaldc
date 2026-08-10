<?php
/**
 * Standalone Admin Page: Projects Started
 * Displays and organizes WooCommerce orders generated via the VitalDC Start Step Onboarding Form.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'admin_menu', 'vitaldc_register_projects_started_admin_menu' );

function vitaldc_register_projects_started_admin_menu() {
    // Primary Sidebar Menu Item
    add_menu_page(
        __( 'Projects Started', 'vitaldc' ),
        __( 'Projects Started', 'vitaldc' ),
        'manage_options',
        'vitaldc-projects-started',
        'vitaldc_render_projects_started_page',
        'dashicons-rocket',
        30
    );

    // Submenu under WooCommerce
    if ( class_exists( 'WooCommerce' ) ) {
        add_submenu_page(
            'woocommerce',
            __( 'Projects Started', 'vitaldc' ),
            __( 'Projects Started', 'vitaldc' ),
            'manage_options',
            'vitaldc-projects-started',
            'vitaldc_render_projects_started_page'
        );
    }
}

/**
 * Render Projects Started Page
 */
function vitaldc_render_projects_started_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( esc_html__( 'You do not have sufficient permissions to access this page.', 'vitaldc' ) );
    }

    // Sanitize filters
    $search_query   = isset( $_GET['s'] ) ? sanitize_text_field( wp_unslash( $_GET['s'] ) ) : '';
    $filter_step    = isset( $_GET['step_filter'] ) ? sanitize_text_field( wp_unslash( $_GET['step_filter'] ) ) : '';
    $filter_package = isset( $_GET['package_filter'] ) ? sanitize_text_field( wp_unslash( $_GET['package_filter'] ) ) : '';
    $filter_status  = isset( $_GET['status_filter'] ) ? sanitize_text_field( wp_unslash( $_GET['status_filter'] ) ) : '';

    // Fetch all WC orders that have onboarding data or created via onboarding flow
    $all_orders = array();
    if ( function_exists( 'wc_get_orders' ) ) {
        $query_args = array(
            'limit'    => -1,
            'orderby'  => 'date',
            'order'    => 'DESC',
            'return'   => 'objects',
        );

        if ( ! empty( $filter_status ) ) {
            $query_args['status'] = array( $filter_status );
        }

        $all_orders = wc_get_orders( $query_args );
    }

    // Process & Filter Orders for Onboarding Data
    $onboarding_orders = array();
    $total_projects     = 0;
    $completed_step4    = 0;
    $in_progress        = 0;
    $package_counts     = array();

    foreach ( $all_orders as $order ) {
        $current_step = $order->get_meta( '_onboarding_current_step', true );
        $package      = $order->get_meta( '_onboarding_package', true );
        $step_1_data  = $order->get_meta( '_onboarding_step_1_data', true );
        $flow_data    = $order->get_meta( '_onboarding_flow', true );

        // Consider order an onboarding order if it has onboarding meta keys
        $is_onboarding = ! empty( $current_step ) || ! empty( $package ) || ! empty( $step_1_data ) || ! empty( $flow_data );

        if ( ! $is_onboarding ) {
            continue;
        }

        $total_projects++;

        if ( 'step-4' === $current_step || 'completed' === $order->get_status() ) {
            $completed_step4++;
        } else {
            $in_progress++;
        }

        if ( $package ) {
            $package_counts[ $package ] = ( $package_counts[ $package ] ?? 0 ) + 1;
        }

        // Apply Search Filter
        if ( ! empty( $search_query ) ) {
            $search_haystack = strtolower( implode( ' ', array(
                $order->get_id(),
                $order->get_billing_first_name() . ' ' . $order->get_billing_last_name(),
                $order->get_billing_company(),
                $order->get_billing_email(),
                $order->get_billing_phone(),
                $package,
            ) ) );

            if ( false === strpos( $search_haystack, strtolower( $search_query ) ) ) {
                continue;
            }
        }

        // Apply Step Filter
        if ( ! empty( $filter_step ) && $current_step !== $filter_step ) {
            continue;
        }

        // Apply Package Filter
        if ( ! empty( $filter_package ) && $package !== $filter_package ) {
            continue;
        }

        $onboarding_orders[] = $order;
    }

    arsort( $package_counts );
    $top_package = ! empty( $package_counts ) ? array_key_first( $package_counts ) : 'N/A';
    ?>

    <style>
        .vdc-admin-wrap {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            margin: 20px 20px 0 0;
            color: #1e293b;
        }
        .vdc-header-hero {
            background: linear-gradient(135deg, #00161f 0%, #002b3d 100%);
            color: #ffffff;
            padding: 28px 32px;
            border-radius: 12px;
            margin-bottom: 24px;
            box-shadow: 0 10px 25px -5px rgba(0, 22, 31, 0.3);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }
        .vdc-header-hero h1 {
            color: #ffffff;
            font-size: 26px;
            font-weight: 800;
            margin: 0 0 6px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .vdc-header-hero p {
            margin: 0;
            color: #94a3b8;
            font-size: 14px;
        }
        .vdc-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }
        .vdc-stat-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .vdc-stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.05);
        }
        .vdc-stat-label {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
            margin-bottom: 8px;
        }
        .vdc-stat-value {
            font-size: 28px;
            font-weight: 800;
            color: #0f172a;
        }
        .vdc-stat-sub {
            font-size: 12px;
            color: #0284c7;
            margin-top: 4px;
            font-weight: 600;
        }
        .vdc-filter-bar {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 16px 20px;
            margin-bottom: 20px;
            display: flex;
            gap: 12px;
            align-items: center;
            flex-wrap: wrap;
        }
        .vdc-filter-bar input[type="text"],
        .vdc-filter-bar select {
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 8px 12px;
            font-size: 13px;
            outline: none;
            background-color: #f8fafc;
        }
        .vdc-filter-bar input[type="text"]:focus,
        .vdc-filter-bar select:focus {
            border-color: #ff6600;
            box-shadow: 0 0 0 2px rgba(255, 102, 0, 0.15);
        }
        .vdc-btn-primary {
            background: #ff6600 !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 6px !important;
            padding: 8px 18px !important;
            font-weight: 600 !important;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .vdc-btn-primary:hover {
            background: #e05500 !important;
        }
        .vdc-btn-secondary {
            background: #f1f5f9 !important;
            color: #334155 !important;
            border: 1px solid #cbd5e1 !important;
            border-radius: 6px !important;
            padding: 7px 14px !important;
            font-weight: 600 !important;
            cursor: pointer;
            text-decoration: none;
            font-size: 13px;
        }
        .vdc-btn-secondary:hover {
            background: #e2e8f0 !important;
        }
        .vdc-table-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }
        .vdc-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 13px;
        }
        .vdc-table th {
            background: #f8fafc;
            padding: 14px 16px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #475569;
            border-bottom: 1px solid #e2e8f0;
        }
        .vdc-table td {
            padding: 16px;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }
        .vdc-table tr:hover td {
            background-color: #f8fafc;
        }
        .vdc-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 4px 10px;
            border-radius: 9999px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }
        .vdc-badge-step-1 { background: #e0f2fe; color: #0369a1; }
        .vdc-badge-step-2 { background: #fef3c7; color: #b45309; }
        .vdc-badge-step-3 { background: #f3e8ff; color: #6b21a8; }
        .vdc-badge-step-4 { background: #dcfce7; color: #15803d; }
        .vdc-badge-addon {
            background: #f1f5f9;
            color: #334155;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 600;
            margin: 2px;
            display: inline-block;
        }
        /* Modal Styles */
        .vdc-modal-overlay {
            display: none;
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(4px);
            z-index: 99999;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .vdc-modal-overlay.active {
            display: flex;
        }
        .vdc-modal-box {
            background: #ffffff;
            border-radius: 12px;
            width: 100%;
            max-width: 750px;
            max-height: 85vh;
            overflow-y: auto;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            position: relative;
        }
        .vdc-modal-header {
            background: #00161f;
            color: #ffffff;
            padding: 20px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .vdc-modal-header h3 {
            margin: 0;
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
        }
        .vdc-modal-close {
            background: transparent;
            border: none;
            color: #94a3b8;
            font-size: 24px;
            cursor: pointer;
            line-height: 1;
        }
        .vdc-modal-close:hover { color: #ffffff; }
        .vdc-modal-body {
            padding: 24px;
        }
        .vdc-detail-section {
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid #f1f5f9;
        }
        .vdc-detail-section h4 {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
            margin: 0 0 12px 0;
            font-weight: 700;
        }
        .vdc-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }
        .vdc-info-block {
            background: #f8fafc;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
        }
        .vdc-info-label {
            font-size: 11px;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
        }
        .vdc-info-val {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
            margin-top: 2px;
        }
    </style>

    <div class="vdc-admin-wrap">
        <!-- Header Hero -->
        <div class="vdc-header-hero">
            <div>
                <h1><span class="dashicons dashicons-rocket" style="font-size: 28px; width:28px; height:28px;"></span> <?php esc_html_e( 'Projects Started Overview', 'vitaldc' ); ?></h1>
                <p><?php esc_html_e( 'Manage and review all incoming digital project onboarding submissions captured from the 4-step wizard.', 'vitaldc' ); ?></p>
            </div>
            <div>
                <a href="<?php echo esc_url( admin_url( 'admin.php?page=vitaldc-projects-started' ) ); ?>" class="vdc-btn-primary">
                    <span class="dashicons dashicons-update"></span> <?php esc_html_e( 'Refresh Records', 'vitaldc' ); ?>
                </a>
            </div>
        </div>

        <!-- KPI Metrics Widget -->
        <div class="vdc-stats-grid">
            <div class="vdc-stat-card">
                <div class="vdc-stat-label"><?php esc_html_e( 'Total Projects Started', 'vitaldc' ); ?></div>
                <div class="vdc-stat-value"><?php echo esc_html( $total_projects ); ?></div>
                <div class="vdc-stat-sub"><?php esc_html_e( 'All time onboarding submissions', 'vitaldc' ); ?></div>
            </div>
            <div class="vdc-stat-card">
                <div class="vdc-stat-label"><?php esc_html_e( 'Finalized (Step 4)', 'vitaldc' ); ?></div>
                <div class="vdc-stat-value" style="color:#16a34a;"><?php echo esc_html( $completed_step4 ); ?></div>
                <div class="vdc-stat-sub"><?php esc_html_e( 'Confirmed onboarding agreements', 'vitaldc' ); ?></div>
            </div>
            <div class="vdc-stat-card">
                <div class="vdc-stat-label"><?php esc_html_e( 'In Progress', 'vitaldc' ); ?></div>
                <div class="vdc-stat-value" style="color:#eab308;"><?php echo esc_html( $in_progress ); ?></div>
                <div class="vdc-stat-sub"><?php esc_html_e( 'Steps 1 - 3 pending review', 'vitaldc' ); ?></div>
            </div>
            <div class="vdc-stat-card">
                <div class="vdc-stat-label"><?php esc_html_e( 'Top Selected Package', 'vitaldc' ); ?></div>
                <div class="vdc-stat-value" style="font-size:18px; line-height: 1.3; color:#0284c7;"><?php echo esc_html( $top_package ); ?></div>
                <div class="vdc-stat-sub"><?php esc_html_e( 'Most popular choice', 'vitaldc' ); ?></div>
            </div>
        </div>

        <!-- Filter & Search Bar -->
        <form method="GET" class="vdc-filter-bar">
            <input type="hidden" name="page" value="vitaldc-projects-started" />

            <input type="text" name="s" value="<?php echo esc_attr( $search_query ); ?>" placeholder="<?php esc_attr_e( 'Search by name, email, company...', 'vitaldc' ); ?>" style="min-width: 250px;" />

            <select name="step_filter">
                <option value=""><?php esc_html_e( 'All Onboarding Steps', 'vitaldc' ); ?></option>
                <option value="step-1" <?php selected( $filter_step, 'step-1' ); ?>><?php esc_html_e( 'Step 1: Contact & Info', 'vitaldc' ); ?></option>
                <option value="step-2" <?php selected( $filter_step, 'step-2' ); ?>><?php esc_html_e( 'Step 2: Tier Selection', 'vitaldc' ); ?></option>
                <option value="step-3" <?php selected( $filter_step, 'step-3' ); ?>><?php esc_html_e( 'Step 3: Add-on Features', 'vitaldc' ); ?></option>
                <option value="step-4" <?php selected( $filter_step, 'step-4' ); ?>><?php esc_html_e( 'Step 4: Finalized Review', 'vitaldc' ); ?></option>
            </select>

            <select name="status_filter">
                <option value=""><?php esc_html_e( 'All Order Statuses', 'vitaldc' ); ?></option>
                <option value="pending" <?php selected( $filter_status, 'pending' ); ?>><?php esc_html_e( 'Pending', 'vitaldc' ); ?></option>
                <option value="processing" <?php selected( $filter_status, 'processing' ); ?>><?php esc_html_e( 'Processing', 'vitaldc' ); ?></option>
                <option value="completed" <?php selected( $filter_status, 'completed' ); ?>><?php esc_html_e( 'Completed', 'vitaldc' ); ?></option>
                <option value="on-hold" <?php selected( $filter_status, 'on-hold' ); ?>><?php esc_html_e( 'On Hold', 'vitaldc' ); ?></option>
            </select>

            <button type="submit" class="vdc-btn-secondary">
                <span class="dashicons dashicons-filter" style="font-size: 16px; margin-top:2px;"></span> <?php esc_html_e( 'Filter', 'vitaldc' ); ?>
            </button>

            <?php if ( ! empty( $search_query ) || ! empty( $filter_step ) || ! empty( $filter_status ) ) : ?>
                <a href="<?php echo esc_url( admin_url( 'admin.php?page=vitaldc-projects-started' ) ); ?>" class="vdc-btn-secondary" style="color: #ef4444 !important;">
                    <?php esc_html_e( 'Clear Filters', 'vitaldc' ); ?>
                </a>
            <?php endif; ?>
        </form>

        <!-- Orders Table Card -->
        <div class="vdc-table-card">
            <table class="vdc-table">
                <thead>
                    <tr>
                        <th><?php esc_html_e( 'Order ID / Date', 'vitaldc' ); ?></th>
                        <th><?php esc_html_e( 'Client / Company', 'vitaldc' ); ?></th>
                        <th><?php esc_html_e( 'Contact Info', 'vitaldc' ); ?></th>
                        <th><?php esc_html_e( 'Selected Package', 'vitaldc' ); ?></th>
                        <th><?php esc_html_e( 'Selected Add-ons', 'vitaldc' ); ?></th>
                        <th><?php esc_html_e( 'Progress Step', 'vitaldc' ); ?></th>
                        <th><?php esc_html_e( 'Status', 'vitaldc' ); ?></th>
                        <th><?php esc_html_e( 'Actions', 'vitaldc' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ( ! empty( $onboarding_orders ) ) : ?>
                        <?php foreach ( $onboarding_orders as $order ) :
                            $order_id       = $order->get_id();
                            $date_created   = $order->get_date_created() ? $order->get_date_created()->date_i18n( 'M j, Y - g:i a' ) : '';
                            $first_name     = $order->get_billing_first_name();
                            $company        = $order->get_billing_company();
                            $email          = $order->get_billing_email();
                            $phone          = $order->get_billing_phone();
                            $package        = $order->get_meta( '_onboarding_package', true );
                            $addons         = (array) $order->get_meta( '_onboarding_addons', true );
                            $agreements     = (array) $order->get_meta( '_onboarding_agreements', true );
                            $current_step   = $order->get_meta( '_onboarding_current_step', true );
                            $step_1_data    = $order->get_meta( '_onboarding_step_1_data', true );
                            $flow_data      = $order->get_meta( '_onboarding_flow', true );

                            $provider       = $order->get_meta( '_current_provider', true );
                            $crm_status     = $order->get_meta( '_crm_status', true );
                            $website        = $order->get_meta( '_website_url', true );
                            $pain_points    = $order->get_meta( '_pain_points', true );
                            $notes          = $order->get_meta( '_additional_info', true );

                            if ( empty( $first_name ) && ! empty( $step_1_data['full_name'] ) ) {
                                $first_name = $step_1_data['full_name'];
                            }
                            if ( empty( $company ) && ! empty( $step_1_data['company_name'] ) ) {
                                $company = $step_1_data['company_name'];
                            }
                            if ( empty( $phone ) && ! empty( $step_1_data['phone'] ) ) {
                                $phone = $step_1_data['phone'];
                            }
                            if ( empty( $email ) && ! empty( $step_1_data['email'] ) ) {
                                $email = $step_1_data['email'];
                            }

                            $step_badge_class = 'vdc-badge-step-1';
                            $step_label       = __( 'Step 1: Intake', 'vitaldc' );

                            if ( 'step-2' === $current_step ) {
                                $step_badge_class = 'vdc-badge-step-2';
                                $step_label       = __( 'Step 2: Tier', 'vitaldc' );
                            } elseif ( 'step-3' === $current_step ) {
                                $step_badge_class = 'vdc-badge-step-3';
                                $step_label       = __( 'Step 3: Add-ons', 'vitaldc' );
                            } elseif ( 'step-4' === $current_step ) {
                                $step_badge_class = 'vdc-badge-step-4';
                                $step_label       = __( 'Step 4: Finalized', 'vitaldc' );
                            }

                            $wc_edit_url = function_exists( 'wc_get_order' ) && method_exists( $order, 'get_edit_order_url' ) ? $order->get_edit_order_url() : admin_url( 'post.php?post=' . $order_id . '&action=edit' );
                        ?>
                            <tr>
                                <td>
                                    <strong>#<?php echo esc_html( $order_id ); ?></strong>
                                    <div style="font-size:11px; color:#64748b; margin-top:2px;"><?php echo esc_html( $date_created ); ?></div>
                                </td>
                                <td>
                                    <div style="font-weight: 700; color:#0f172a;"><?php echo esc_html( $first_name ? $first_name : 'N/A' ); ?></div>
                                    <div style="font-size:12px; color:#64748b;"><?php echo esc_html( $company ? $company : '—' ); ?></div>
                                </td>
                                <td>
                                    <div><a href="mailto:<?php echo esc_attr( $email ); ?>" style="color:#0284c7; text-decoration:none;"><?php echo esc_html( $email ? $email : '—' ); ?></a></div>
                                    <div style="font-size:11px; color:#64748b; margin-top:2px;"><?php echo esc_html( $phone ? $phone : '—' ); ?></div>
                                </td>
                                <td>
                                    <strong><?php echo esc_html( $package ? $package : 'Standard Package' ); ?></strong>
                                </td>
                                <td>
                                    <?php if ( ! empty( $addons ) ) : ?>
                                        <?php foreach ( $addons as $addon ) : ?>
                                            <span class="vdc-badge-addon"><?php echo esc_html( $addon ); ?></span>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <span style="color:#94a3b8;">None selected</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <span class="vdc-badge <?php echo esc_attr( $step_badge_class ); ?>">
                                        <?php echo esc_html( $step_label ); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="vdc-badge" style="background:#f1f5f9; color:#475569; border:1px solid #cbd5e1;">
                                        <?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>
                                    </span>
                                </td>
                                <td>
                                    <div style="display:flex; gap:6px;">
                                        <button type="button" class="vdc-btn-secondary" onclick='openVdcModal(<?php echo wp_json_encode( array(
                                            'order_id'     => $order_id,
                                            'date'         => $date_created,
                                            'client_name'  => $first_name,
                                            'company'      => $company,
                                            'email'        => $email,
                                            'phone'        => $phone,
                                            'package'      => $package,
                                            'addons'       => $addons,
                                            'agreements'   => $agreements,
                                            'step'         => $current_step,
                                            'provider'     => $provider,
                                            'crm_status'   => $crm_status,
                                            'website'      => $website,
                                            'pain_points'  => $pain_points,
                                            'notes'        => $notes,
                                            'step_1_data'  => $step_1_data,
                                            'wc_edit_url'  => $wc_edit_url,
                                        ) ); ?>)'>
                                            <?php esc_html_e( 'View Details', 'vitaldc' ); ?>
                                        </button>
                                        <a href="<?php echo esc_url( $wc_edit_url ); ?>" class="vdc-btn-secondary" target="_blank" title="<?php esc_attr_e( 'Open WooCommerce Order', 'vitaldc' ); ?>">
                                            <span class="dashicons dashicons-external" style="font-size:14px; margin-top:2px;"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="8" style="text-align: center; padding: 40px; color: #64748b;">
                                <span class="dashicons dashicons-info" style="font-size: 32px; width:32px; height:32px; margin-bottom: 8px;"></span>
                                <div><?php esc_html_e( 'No onboarding project requests found matching your filters.', 'vitaldc' ); ?></div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Drawer for Viewing Full Order Data -->
    <div id="vdc-details-modal" class="vdc-modal-overlay">
        <div class="vdc-modal-box">
            <div class="vdc-modal-header">
                <h3 id="modal-order-title"><?php esc_html_e( 'Project Details', 'vitaldc' ); ?></h3>
                <button type="button" class="vdc-modal-close" onclick="closeVdcModal()">&times;</button>
            </div>
            <div class="vdc-modal-body">
                <!-- Section 1: Client Overview -->
                <div class="vdc-detail-section">
                    <h4><?php esc_html_e( 'Client & Contact Profile', 'vitaldc' ); ?></h4>
                    <div class="vdc-grid-2">
                        <div class="vdc-info-block">
                            <div class="vdc-info-label"><?php esc_html_e( 'Client Name', 'vitaldc' ); ?></div>
                            <div id="modal-client-name" class="vdc-info-val">—</div>
                        </div>
                        <div class="vdc-info-block">
                            <div class="vdc-info-label"><?php esc_html_e( 'Company Name', 'vitaldc' ); ?></div>
                            <div id="modal-company" class="vdc-info-val">—</div>
                        </div>
                        <div class="vdc-info-block">
                            <div class="vdc-info-label"><?php esc_html_e( 'Email Address', 'vitaldc' ); ?></div>
                            <div id="modal-email" class="vdc-info-val">—</div>
                        </div>
                        <div class="vdc-info-block">
                            <div class="vdc-info-label"><?php esc_html_e( 'Phone Number', 'vitaldc' ); ?></div>
                            <div id="modal-phone" class="vdc-info-val">—</div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Selected Package & Add-ons -->
                <div class="vdc-detail-section">
                    <h4><?php esc_html_e( 'Package & Selected Add-ons', 'vitaldc' ); ?></h4>
                    <div class="vdc-grid-2" style="margin-bottom: 12px;">
                        <div class="vdc-info-block">
                            <div class="vdc-info-label"><?php esc_html_e( 'Selected Package', 'vitaldc' ); ?></div>
                            <div id="modal-package" class="vdc-info-val">—</div>
                        </div>
                        <div class="vdc-info-block">
                            <div class="vdc-info-label"><?php esc_html_e( 'Progress Step', 'vitaldc' ); ?></div>
                            <div id="modal-step" class="vdc-info-val">—</div>
                        </div>
                    </div>
                    <div class="vdc-info-block">
                        <div class="vdc-info-label"><?php esc_html_e( 'Selected Add-on Features', 'vitaldc' ); ?></div>
                        <div id="modal-addons" style="margin-top: 6px;">—</div>
                    </div>
                </div>

                <!-- Section 3: Technical Intake Questionnaire -->
                <div class="vdc-detail-section">
                    <h4><?php esc_html_e( 'Technical Intake & Requirements', 'vitaldc' ); ?></h4>
                    <div class="vdc-grid-2" style="margin-bottom:12px;">
                        <div class="vdc-info-block">
                            <div class="vdc-info-label"><?php esc_html_e( 'Current Provider', 'vitaldc' ); ?></div>
                            <div id="modal-provider" class="vdc-info-val">—</div>
                        </div>
                        <div class="vdc-info-block">
                            <div class="vdc-info-label"><?php esc_html_e( 'CRM Status', 'vitaldc' ); ?></div>
                            <div id="modal-crm" class="vdc-info-val">—</div>
                        </div>
                    </div>
                    <div class="vdc-info-block" style="margin-bottom:12px;">
                        <div class="vdc-info-label"><?php esc_html_e( 'Website URL', 'vitaldc' ); ?></div>
                        <div id="modal-website" class="vdc-info-val">—</div>
                    </div>
                    <div class="vdc-info-block" style="margin-bottom:12px;">
                        <div class="vdc-info-label"><?php esc_html_e( 'Pain Points / Challenges', 'vitaldc' ); ?></div>
                        <div id="modal-painpoints" class="vdc-info-val">—</div>
                    </div>
                    <div class="vdc-info-block">
                        <div class="vdc-info-label"><?php esc_html_e( 'Additional Notes', 'vitaldc' ); ?></div>
                        <div id="modal-notes" class="vdc-info-val">—</div>
                    </div>
                </div>

                <!-- Section 4: Terms & Agreements -->
                <div class="vdc-detail-section">
                    <h4><?php esc_html_e( 'Accepted Terms & Agreements', 'vitaldc' ); ?></h4>
                    <div id="modal-agreements" class="vdc-info-block">—</div>
                </div>

                <div style="display:flex; justify-content: space-between; align-items: center; margin-top:20px;">
                    <a id="modal-edit-link" href="#" target="_blank" class="vdc-btn-primary">
                        <span class="dashicons dashicons-edit"></span> <?php esc_html_e( 'Open Full WooCommerce Order', 'vitaldc' ); ?>
                    </a>
                    <button type="button" class="vdc-btn-secondary" onclick="closeVdcModal()"><?php esc_html_e( 'Close Window', 'vitaldc' ); ?></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openVdcModal(data) {
            document.getElementById('modal-order-title').textContent = 'Project Order #' + data.order_id + ' (' + (data.date || '') + ')';
            document.getElementById('modal-client-name').textContent = data.client_name || '—';
            document.getElementById('modal-company').textContent = data.company || '—';
            document.getElementById('modal-email').textContent = data.email || '—';
            document.getElementById('modal-phone').textContent = data.phone || '—';

            document.getElementById('modal-package').textContent = data.package || 'Standard Package';
            document.getElementById('modal-step').textContent = (data.step || 'step-1').toUpperCase();

            // Addons
            const addonsContainer = document.getElementById('modal-addons');
            if (Array.isArray(data.addons) && data.addons.length > 0) {
                addonsContainer.innerHTML = data.addons.map(a => '<span class="vdc-badge-addon">' + a + '</span>').join(' ');
            } else {
                addonsContainer.textContent = 'None selected';
            }

            // Technical details
            document.getElementById('modal-provider').textContent = data.provider || (data.step_1_data && data.step_1_data.provider) || '—';
            document.getElementById('modal-crm').textContent = data.crm_status || (data.step_1_data && data.step_1_data.crm_status) || '—';

            const websiteVal = data.website || (data.step_1_data && data.step_1_data.website) || '';
            document.getElementById('modal-website').innerHTML = websiteVal ? '<a href="' + websiteVal + '" target="_blank" style="color:#0284c7;">' + websiteVal + '</a>' : '—';

            document.getElementById('modal-painpoints').textContent = Array.isArray(data.pain_points) ? data.pain_points.join(', ') : (data.pain_points || '—');
            document.getElementById('modal-notes').textContent = data.notes || '—';

            // Agreements
            const agreementsContainer = document.getElementById('modal-agreements');
            if (Array.isArray(data.agreements) && data.agreements.length > 0) {
                agreementsContainer.innerHTML = data.agreements.map(a => '<div>✓ ' + a + '</div>').join('');
            } else {
                agreementsContainer.textContent = 'None recorded';
            }

            // Edit Link
            document.getElementById('modal-edit-link').href = data.wc_edit_url || '#';

            document.getElementById('vdc-details-modal').classList.add('active');
        }

        function closeVdcModal() {
            document.getElementById('vdc-details-modal').classList.remove('active');
        }

        // Close modal when clicking background overlay
        document.getElementById('vdc-details-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeVdcModal();
            }
        });
    </script>
    <?php
}
