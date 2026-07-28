<?php

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
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'woodmart-style' ), woodmart_get_theme_info( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010 );


add_action(
    'wp_ajax_create_draft_architecture_order',
    'create_draft_architecture_order'
);

add_action(
    'wp_ajax_nopriv_create_draft_architecture_order',
    'create_draft_architecture_order'
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

        $order->set_billing_first_name(
            sanitize_text_field(
                $_POST['billing_first_name'] ?? ''
            )
        );

        $order->set_billing_company(
            sanitize_text_field(
                $_POST['billing_company'] ?? ''
            )
        );

        $order->set_billing_phone(
            sanitize_text_field(
                $_POST['billing_phone'] ?? ''
            )
        );

        $order->set_billing_email(
            sanitize_email(
                $_POST['billing_mail'] ?? ''
            )
        );

        $order->update_meta_data(
            '_current_provider',
            sanitize_text_field(
                $_POST['current_provider'] ?? ''
            )
        );

        $order->update_meta_data(
            '_crm_status',
            sanitize_text_field(
                $_POST['crm_status'] ?? ''
            )
        );

        $order->update_meta_data(
            '_website_url',
            esc_url_raw(
                $_POST['website_url'] ?? ''
            )
        );
  $order->update_meta_data(
            '_additional_info',
            sanitize_text_field(
                $_POST['additional_info'] ?? ''
            )
        );

        if ( ! empty( $_POST['pain_points'] ) ) {

            $order->update_meta_data(
                '_pain_points',
                array_map(
                    'sanitize_text_field',
                    (array) $_POST['pain_points']
                )
            );
        }

        $order->set_status( 'pending' );

        $order->save();

        wp_send_json_success(
            array(
                'order_id' => $order->get_id()
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