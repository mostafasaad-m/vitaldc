<?php

function vitaldc_enforce_onboarding_flow() {
    if ( ! isset( $_SESSION['vitaldc_onboarding_order_id'] ) ) {
        return;
    }

    $request_path = rtrim( parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ), '/' );
    if ( '' === $request_path ) {
        $request_path = '/';
    }

    $flow_map = array(
        '/start' => 'step-1',
        '/start/tiers' => 'step-2',
        '/start/package-addons' => 'step-3',
        '/start/review' => 'step-4',
    );

    if ( '/start' === $request_path ) {
        return;
    }

    $target_step = $flow_map[ $request_path ] ?? null;
    if ( ! $target_step ) {
        return;
    }

    $current_step = $_SESSION['vitaldc_onboarding_current_step'] ?? '';
    $current_index = array_search( $current_step, array( 'step-1', 'step-2', 'step-3', 'step-4' ), true );
    $target_index = array_search( $target_step, array( 'step-1', 'step-2', 'step-3', 'step-4' ), true );

    if ( false === $current_index || false === $target_index ) {
        return;
    }

    if ( $target_index === $current_index ) {
        return;
    }

    if ( $target_index === $current_index + 1 || $target_index === $current_index - 1 ) {
        return;
    }

    if ( 'step-3' === $current_step && 'step-4' === $target_step ) {
        return;
    }

    if ( 'step-4' === $current_step && 'step-3' === $target_step ) {
        return;
    }

    $redirect_path = '/start';
    if ( 'step-2' === $current_step ) {
        $redirect_path = '/start/tiers';
    } elseif ( 'step-3' === $current_step ) {
        $redirect_path = '/start/package-addons';
    } elseif ( 'step-4' === $current_step ) {
        $redirect_path = '/start/review';
    }

    wp_safe_redirect( $redirect_path );
    exit;
}
add_action( 'template_redirect', 'vitaldc_enforce_onboarding_flow' );

add_action('woocommerce_admin_order_data_after_billing_address', function($order) {

    if (!$order instanceof WC_Order) {
        return;
    }

    /* ---------------------------------
       PRODUCTS
    ----------------------------------*/
    $products = $order->get_meta('_quotation_products');

    echo '<h3 style="margin-top:15px;">Quotation Products</h3>';

    if (!empty($products) && is_array($products)) {

        echo '<ul style="margin:0 0 15px 0; padding-left:18px;">';

        foreach ($products as $p) {

            $name  = esc_html($p['name'] ?? '');
            $grade = esc_html($p['grade'] ?? '');
            $qty   = esc_html($p['qty'] ?? '');

            echo "<li><strong>{$name}</strong> - {$grade} - {$qty} MT</li>";
        }

        echo '</ul>';

    } else {
        echo '<p><em>No products found</em></p>';
    }

    /* ---------------------------------
       INCOTERM
    ----------------------------------*/
    $incoterm = $order->get_meta('_quotation_incoterm');

    echo '<h3>Incoterm</h3>';

    if (!empty($incoterm)) {
        echo '<p><strong>' . esc_html($incoterm) . '</strong></p>';
    } else {
        echo '<p><em>No incoterm selected</em></p>';
    }

    /* ---------------------------------
       HANDLING
    ----------------------------------*/
    $handling = $order->get_meta('_quotation_handling');

    echo '<h3>Special Handling</h3>';

    if (!empty($handling) && is_array($handling)) {

        echo '<ul style="margin:0 0 15px 0; padding-left:18px;">';

        foreach ($handling as $h) {
            echo '<li>' . esc_html($h) . '</li>';
        }

        echo '</ul>';

    } else {
        echo '<p><em>No special handling selected</em></p>';
    }

}, 10, 1);

function woodmart_child_enqueue_styles() {
	wp_enqueue_style(
		'woodmart-child-style',
		get_stylesheet_uri(),
		array( 'woodmart-style' ),
		filemtime( get_stylesheet_directory() . '/style.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010 );


add_action( 'init', 'vitaldc_start_onboarding_session' );
function vitaldc_start_onboarding_session() {
    if ( ! session_id() ) {
        session_start();
    }
}

add_action(
    'wp_ajax_create_draft_architecture_order',
    'create_draft_architecture_order'
);

add_action(
    'wp_ajax_nopriv_create_draft_architecture_order',
    'create_draft_architecture_order'
);

add_action(
    'wp_ajax_save_onboarding_step_data',
    'save_onboarding_step_data'
);

add_action(
    'wp_ajax_nopriv_save_onboarding_step_data',
    'save_onboarding_step_data'
);

function create_draft_architecture_order() {

    if ( ! function_exists( 'wc_create_order' ) ) {

        wp_send_json_error(
            array(
                'message' => 'WooCommerce not loaded'
            )
        );
    }

    try {

        $order = wc_create_order();
        $payload = isset( $_POST['payload'] ) ? json_decode( wp_unslash( $_POST['payload'] ), true ) : array();

        if ( ! is_array( $payload ) ) {
            $payload = array();
        }

        $full_name = sanitize_text_field( $payload['full_name'] ?? $_POST['full_name'] ?? '' );
        $company_name = sanitize_text_field( $payload['company_name'] ?? $_POST['company_name'] ?? '' );
        $phone = sanitize_text_field( $payload['phone'] ?? $_POST['phone'] ?? '' );
        $email = sanitize_email( $payload['email'] ?? $_POST['email'] ?? '' );
        $website = esc_url_raw( $payload['website'] ?? $_POST['website'] ?? '' );

        $order->set_billing_first_name( $full_name );
        $order->set_billing_company( $company_name );
        $order->set_billing_phone( $phone );
        $order->set_billing_email( $email );

        $order->update_meta_data( '_onboarding_step_1_data', array(
            'full_name' => $full_name,
            'company_name' => $company_name,
            'phone' => $phone,
            'email' => $email,
            'website' => $website,
        ) );

        $order->update_meta_data( '_onboarding_current_step', 'step-1' );
        $order->update_meta_data( '_onboarding_flow', array( 'step-1' => array(
            'full_name' => $full_name,
            'company_name' => $company_name,
            'phone' => $phone,
            'email' => $email,
            'website' => $website,
        ) ) );

        $order->set_status( 'pending' );
        $order->save();

        $_SESSION['vitaldc_onboarding_order_id'] = $order->get_id();
        $_SESSION['vitaldc_onboarding_current_step'] = 'step-1';

        wp_send_json_success(
            array(
                'order_id' => $order->get_id(),
                'redirect' => '/start/tiers/'
            )
        );

    } catch ( Exception $e ) {

        wp_send_json_error(
            array(
                'message' => $e->getMessage()
            )
        );
    }
}

function save_onboarding_step_data() {

    if ( ! function_exists( 'wc_get_order' ) ) {
        wp_send_json_error( array( 'message' => 'WooCommerce not loaded' ) );
    }

    if ( ! session_id() ) {
        session_start();
    }

    $order_id = absint( $_POST['order_id'] ?? $_SESSION['vitaldc_onboarding_order_id'] ?? 0 );

    if ( ! $order_id ) {
        wp_send_json_error( array( 'message' => 'No onboarding order found' ) );
    }

    $order = wc_get_order( $order_id );

    if ( ! $order ) {
        wp_send_json_error( array( 'message' => 'Order not found' ) );
    }

    $step = sanitize_key( $_POST['step'] ?? 'step-2' );
    $payload = isset( $_POST['payload'] ) ? json_decode( wp_unslash( $_POST['payload'] ), true ) : array();

    if ( ! is_array( $payload ) ) {
        $payload = array();
    }

    $flow = $order->get_meta( '_onboarding_flow', true );

    if ( ! is_array( $flow ) ) {
        $flow = array();
    }

    $flow[ $step ] = $payload;
    $order->update_meta_data( '_onboarding_flow', $flow );
    $order->update_meta_data( '_onboarding_current_step', $step );

    switch ( $step ) {
        case 'step-2':
            $order->update_meta_data( '_onboarding_package', sanitize_text_field( $payload['package'] ?? '' ) );
            break;
        case 'step-3':
            $addons = array_map( 'sanitize_text_field', (array) ( $payload['addons'] ?? array() ) );
            $order->update_meta_data( '_onboarding_addons', $addons );
            break;
        case 'step-4':
            $agreements = array_map( 'sanitize_text_field', (array) ( $payload['agreed_terms'] ?? array() ) );
            $order->update_meta_data( '_onboarding_agreements', $agreements );
            break;
    }

    $order->save();

    $_SESSION['vitaldc_onboarding_order_id'] = $order_id;
    $_SESSION['vitaldc_onboarding_current_step'] = $step;

    wp_send_json_success(
        array(
            'order_id' => $order_id,
            'step' => $step
        )
    );
}

add_action(
    'woocommerce_admin_order_data_after_billing_address',
    'display_architecture_intake_fields_in_admin',
    10,
    1
);

function display_architecture_intake_fields_in_admin( $order ) {

    $provider   = $order->get_meta('_current_provider');
    $crm_status = $order->get_meta('_crm_status');
    $website    = $order->get_meta('_website_url');
    $pain_points = $order->get_meta('_pain_points');
	$additional_info = $order->get_meta('_additional_info');
    $package = $order->get_meta('_onboarding_package');
    $addons = $order->get_meta('_onboarding_addons');
    $agreements = $order->get_meta('_onboarding_agreements');

    echo '<div style="margin-top:15px;">';
    echo '<h4>Architecture Intake</h4>';
	if ($additional_info){
	echo 
		'<p><strong>Additional Info</strong>' . 
		esc_html($additional_info) .
		'</p>';


}
    if ( $provider ) {
        echo '<p><strong>Current Provider:</strong> ' .
             esc_html( $provider ) .
             '</p>';
    }

    if ( $crm_status ) {
        echo '<p><strong>CRM Status:</strong> ' .
             esc_html( $crm_status ) .
             '</p>';
    }

    if ( $website ) {
        echo '<p><strong>Website:</strong> ';
        echo '<a href="' . esc_url( $website ) . '" target="_blank">';
        echo esc_html( $website );
        echo '</a></p>';
    }

    if ( ! empty( $pain_points ) ) {

        if ( is_array( $pain_points ) ) {

            echo '<p><strong>Pain Points:</strong><br>';
            echo esc_html( implode( ', ', $pain_points ) );
            echo '</p>';

        } else {

            echo '<p><strong>Pain Points:</strong> ' .
                 esc_html( $pain_points ) .
                 '</p>';
        }
    }

    if ( $package ) {
        echo '<p><strong>Selected Package:</strong> ' . esc_html( $package ) . '</p>';
    }

    if ( ! empty( $addons ) ) {
        if ( is_array( $addons ) ) {
            echo '<p><strong>Selected Add-ons:</strong><br>';
            echo esc_html( implode( ', ', array_map( 'strval', $addons ) ) );
            echo '</p>';
        } else {
            echo '<p><strong>Selected Add-ons:</strong> ' . esc_html( $addons ) . '</p>';
        }
    }

    if ( ! empty( $agreements ) ) {
        if ( is_array( $agreements ) ) {
            echo '<p><strong>Accepted Agreements:</strong><br>';
            echo esc_html( implode( ', ', array_map( 'strval', $agreements ) ) );
            echo '</p>';
        } else {
            echo '<p><strong>Accepted Agreements:</strong> ' . esc_html( $agreements ) . '</p>';
        }
    }

    echo '</div>';
}


add_action('woocommerce_admin_order_data_after_order_details', function ($order) {

    $payment_type = $order->get_meta('_quotation_payment_type');
    $tt_percent   = $order->get_meta('_quotation_hybrid_tt_percentage');
    $lc_percent   = $order->get_meta('_quotation_hybrid_lc_percentage');
    $metric_tons  = $order->get_meta('_quotation_total_metric_tons');

    echo '<div style="margin-top:20px;">';
    echo '<h3>Quotation Details</h3>';

    echo '<p><strong>Total Metric Tons:</strong> ' . esc_html($metric_tons) . '</p>';
    echo '<p><strong>Payment Method:</strong> ' . esc_html(strtoupper($payment_type)) . '</p>';

    if ($payment_type === 'hybrid') {
        echo '<p><strong>Hybrid Split:</strong> '
            . esc_html($tt_percent) . '% T/T / '
            . esc_html($lc_percent) . '% L/C</p>';
    }

    echo '</div>';
});

/**
 * Register page templates located inside custom subdirectories.
 */
add_filter('theme_page_templates', 'register_custom_directory_page_templates', 10, 4);
function register_custom_directory_page_templates($post_templates, $theme, $post, $post_type) {
    // List of directories relative to the stylesheet directory
    $dirs = array('jana-form', 'main-pages');

    foreach ($dirs as $dir) {
        $absolute_path = get_stylesheet_directory() . '/' . $dir;

        // Check if the directory exists
        if (!is_dir($absolute_path)) {
            continue;
        }

        // Scan directory for .php files
        $files = scandir($absolute_path);

        foreach ($files as $file) {
            // Skip non-PHP files and parent pointers
            if ($file === '.' || $file === '..' || pathinfo($file, PATHINFO_EXTENSION) !== 'php') {
                continue;
            }

            // Extract the "Template Name" header
            $headers = get_file_data($absolute_path . '/' . $file, array('Name' => 'Template Name'));

            // Register template path relative to theme root
            if (!empty($headers['Name'])) {
                $post_templates[$dir . '/' . $file] = $headers['Name'];
            }
        }
    }

    return $post_templates;
}