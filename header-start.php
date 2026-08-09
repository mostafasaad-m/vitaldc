<?php
/**
 * Header Start template for the VitalDC theme.
 */

$current_path = rtrim( parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ), '/' );
if ( '' === $current_path ) {
    $current_path = '/';
}
$current_path = '/start' === $current_path ? '/start' : $current_path;

$current_lang = vitaldc_get_current_language();
$next_lang = 'ar' === $current_lang ? 'en' : 'ar';
$toggle_label = 'ar' === $current_lang ? 'EN' : 'AR';
$current_url = remove_query_arg( array( 'lang', 'l', 'ar', 'en' ) );
$toggle_url = add_query_arg( 'lang', $next_lang, $current_url );

$step_progress = array(
    '/start' => array(
        'step_code' => 'STEP_01',
        'title' => vitaldc_t( 'Setup Your Business Account', 'إعداد حساب عملك' ),
        'label' => vitaldc_t( 'Step 01: Company Details', 'الخطوة 01: تفاصيل الشركة' ),
        'path' => vitaldc_t( 'Setup Progress: 25%', 'تقدم الإعداد: 25%' ),
        'active_index' => 1,
    ),
    '/start/tiers' => array(
        'step_code' => 'STEP_02',
        'title' => vitaldc_t( 'Choose Your Growth Package', 'اختر باقة النمو المناسبة' ),
        'label' => vitaldc_t( 'Step 02: Service Package', 'الخطوة 02: باقة الخدمات' ),
        'path' => vitaldc_t( 'Setup Progress: 50%', 'تقدم الإعداد: 50%' ),
        'active_index' => 2,
    ),
    '/start/package-addons' => array(
        'step_code' => 'STEP_03',
        'title' => vitaldc_t( 'Select Optional Add-ons', 'اختر الميزات الإضافية' ),
        'label' => vitaldc_t( 'Step 03: Feature Add-ons', 'الخطوة 03: الميزات الإضافية' ),
        'path' => vitaldc_t( 'Setup Progress: 75%', 'تقدم الإعداد: 75%' ),
        'active_index' => 3,
    ),
    '/start/review' => array(
        'step_code' => 'STEP_04',
        'title' => vitaldc_t( 'Review Your Order & Confirm', 'مراجعة وتأكيد الطلب' ),
        'label' => vitaldc_t( 'Step 04: Review & Submit', 'الخطوة 04: المراجعة والتأكيد' ),
        'path' => vitaldc_t( 'Setup Progress: 100%', 'تقدم الإعداد: 100%' ),
        'active_index' => 4,
    ),
);

$active_progress = $step_progress[ $current_path ] ?? $step_progress['/start'];
$progress_steps = array(1, 2, 3, 4);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark" lang="<?php echo esc_attr( $current_lang ); ?>" dir="<?php echo 'ar' === $current_lang ? 'rtl' : 'ltr'; ?>">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php bloginfo( 'name' ); ?> | Initialize Infrastructure</title>
<?php wp_head(); ?>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@400;500;700&amp;family=Geist:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        html, body {
            margin: 0;
            padding: 0;
        }
        .grid-pattern {
            background-image: linear-gradient(to right, rgba(142, 202, 230, 0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(142, 202, 230, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .form-glow:focus-within {
            box-shadow: 0 0 20px rgba(33, 158, 188, 0.15);
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-tertiary-fixed-variant": "#5e4100",
                      "on-tertiary-fixed": "#271900",
                      "surface-deep": "#011B29",
                      "surface-container-highest": "#003a4c",
                      "secondary-container": "#209dbb",
                      "tertiary": "#ffba27",
                      "on-error-container": "#ffdad6",
                      "surface-container-low": "#001f2a",
                      "secondary": "#69d4f4",
                      "surface-dim": "#00161f",
                      "error": "#ffb4ab",
                      "inverse-on-surface": "#003546",
                      "tertiary-container": "#3d2900",
                      "primary-fixed": "#c8e6ff",
                      "error-container": "#93000a",
                      "on-primary": "#07344b",
                      "secondary-fixed-dim": "#69d4f4",
                      "outline-variant": "#42474d",
                      "on-primary-fixed": "#001e2f",
                      "inverse-primary": "#3e627b",
                      "on-secondary-fixed": "#001f27",
                      "on-secondary-fixed-variant": "#004e5f",
                      "on-background": "#bde9ff",
                      "on-surface": "#bde9ff",
                      "on-primary-container": "#7498b4",
                      "surface-container": "#00232f",
                      "primary": "#a6cbe8",
                      "inverse-surface": "#bde9ff",
                      "on-surface-variant": "#c2c7cd",
                      "surface-tint": "#a6cbe8",
                      "on-primary-fixed-variant": "#254a63",
                      "primary-container": "#023047",
                      "surface-container-lowest": "#001018",
                      "on-tertiary": "#422c00",
                      "on-error": "#690005",
                      "on-secondary": "#003642",
                      "tertiary-fixed-dim": "#ffba27",
                      "primary-fixed-dim": "#a6cbe8",
                      "surface-container-high": "#002e3d",
                      "on-tertiary-container": "#c18a00",
                      "background": "#00161f",
                      "outline": "#8c9197",
                      "surface": "#00161f",
                      "on-secondary-container": "#002e39",
                      "export-yellow": "#FFB703",
                      "export-orange": "#FB8500",
                      "surface-bright": "#003e52",
                      "secondary-fixed": "#b2ebff",
                      "tertiary-fixed": "#ffdea9",
                      "border-glass": "rgba(142, 202, 230, 0.15)",
                      "surface-variant": "#003a4c"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "margin-mobile": "16px",
                      "margin-desktop": "64px",
                      "stack-md": "24px",
                      "gutter": "24px",
                      "container-max": "1280px",
                      "stack-sm": "8px",
                      "stack-lg": "48px",
                      "section-gap": "120px"
              },
              "fontFamily": {
                      "headline-md": ["Geist"],
                      "label-sm": ["Inter"],
                      "body-md": ["Inter"],
                      "label-caps": ["JetBrains Mono"],
                      "body-lg": ["Inter"],
                      "headline-lg": ["Geist"],
                      "headline-lg-mobile": ["Geist"],
                      "display-lg": ["Geist"]
              },
              "fontSize": {
                      "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "500"}],
                      "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                      "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "label-caps": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.1em", "fontWeight": "500"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "headline-lg": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                      "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "600"}],
                      "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}]
              }
            }
          }
        }
    </script>
</head>
<body <?php body_class( 'bg-surface text-on-surface font-body-md overflow-x-hidden selection:bg-export-orange selection:text-white' . ( 'ar' === $current_lang ? ' rtl' : '' ) ); ?>>
<?php wp_body_open(); ?>
<!-- Background Layer -->
<div class="fixed inset-0 grid-pattern pointer-events-none opacity-40"></div>
<div class="fixed top-0 left-0 w-full h-full bg-gradient-to-br from-surface-deep via-surface to-surface-dim -z-10"></div>
<main class="relative min-h-screen flex flex-col items-center justify-center py-stack-lg px-margin-mobile md:px-margin-desktop">
<!-- Top Identity & Progress Indicator -->
<div class="w-full max-w-4xl mb-stack-lg">
<div class="flex flex-col md:flex-row justify-between items-baseline mb-stack-md gap-4">
<div class="flex flex-col">
<span class="font-label-caps text-label-caps text-secondary mb-1"><?php echo vitaldc_t( 'DIGITAL ONBOARDING', 'الانطلاق الرقمي' ); ?> // <?php echo esc_html( $active_progress['step_code'] ); ?></span>
<h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-white tracking-tight">
                        <?php echo esc_html( $active_progress['title'] ); ?>
                    </h1>
</div>
<div class="flex items-center gap-4">
<a href="<?php echo esc_url( $toggle_url ); ?>" class="font-label-caps text-label-caps text-on-surface-variant cursor-pointer transition-colors duration-300 hover:text-export-yellow"><?php echo $toggle_label; ?></a>
<span class="font-label-caps text-label-sm text-on-surface-variant">VITALDC</span>
<div class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></div>
</div>
</div>
<!-- Progress Bar Tracker -->
<div class="w-full grid grid-cols-4 gap-2 h-1 mb-2">
<?php foreach ( $progress_steps as $index ) : ?>
<div class="rounded-full <?php echo $index <= $active_progress['active_index'] ? 'bg-export-orange' : 'bg-surface-container-highest'; ?>"></div>
<?php endforeach; ?>
</div>
<div class="flex justify-between items-center">
<span class="font-label-caps text-xs text-export-orange font-bold uppercase"><?php echo esc_html( $active_progress['label'] ); ?></span>
<span class="font-label-caps text-xs text-on-surface-variant uppercase"><?php echo esc_html( $active_progress['path'] ); ?></span>
</div>
</div>
<!-- Main Form Section -->
<section class="w-full max-w-4xl bg-white text-surface-deep rounded-lg overflow-hidden border border-white/10 shadow-2xl relative">
<!-- Form Grid Lines Decoration -->
<div class="absolute top-0 right-0 p-stack-md opacity-10 pointer-events-none">
<span class="material-symbols-outlined text-[120px]" style="font-variation-settings: 'FILL' 0;">database</span>
</div>