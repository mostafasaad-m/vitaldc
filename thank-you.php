<?php
/**
 * Template Name: VitalDC Thank You
 */

get_header('start');

if ( session_id() === '' ) {
    session_start();
}

unset( $_SESSION['vitaldc_onboarding_order_id'] );
unset( $_SESSION['vitaldc_onboarding_current_step'] );

$order_id = isset( $_GET['order_id'] ) ? absint( wp_unslash( $_GET['order_id'] ) ) : 0;
$order = $order_id ? wc_get_order( $order_id ) : false;

$customer_name = '';
$company_name = '';
$email = '';

if ( $order ) {
    $customer_name = $order->get_billing_first_name() ?: 'Valued Client';
    $company_name = $order->get_billing_company() ?: 'Your Company';
    $email = $order->get_billing_email() ?: '';
}
?>

<main class="relative min-h-screen flex flex-col items-center justify-center py-stack-lg px-margin-mobile md:px-margin-desktop bg-surface text-on-surface">
    <div class="w-full max-w-3xl bg-white text-surface-deep rounded-2xl border border-white/10 shadow-2xl overflow-hidden">
        <div class="p-10 md:p-14">
            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-export-orange/10 text-export-orange font-label-caps text-label-caps uppercase mb-6">
                <span class="material-symbols-outlined">check_circle</span>
                Order Received
            </div>
            <h1 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-surface-deep tracking-tight mb-4">
                Thank you, <?php echo esc_html( $customer_name ); ?>.
            </h1>
            <p class="font-body-lg text-body-lg text-surface-variant mb-8">
                Your onboarding request has been captured successfully. We will review your configuration and follow up shortly.
            </p>

            <div class="grid gap-4 md:grid-cols-2">
                <div class="p-5 rounded-lg border border-surface-container-low bg-surface-container-lowest/40">
                    <p class="font-label-caps text-[10px] text-outline-variant uppercase mb-2">Order Reference</p>
                    <p class="font-headline-md text-headline-md text-surface-deep">#<?php echo esc_html( $order ? $order->get_id() : 'PENDING' ); ?></p>
                </div>
                <div class="p-5 rounded-lg border border-surface-container-low bg-surface-container-lowest/40">
                    <p class="font-label-caps text-[10px] text-outline-variant uppercase mb-2">Company</p>
                    <p class="font-headline-md text-headline-md text-surface-deep"><?php echo esc_html( $company_name ); ?></p>
                </div>
            </div>

            <?php if ( $email ) : ?>
                <p class="mt-8 text-sm text-surface-variant">
                    A confirmation has been sent to <span class="font-semibold text-surface-deep"><?php echo esc_html( $email ); ?></span>.
                </p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer('start'); ?>
</body>
</html>
