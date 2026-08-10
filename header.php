<?php
/**
 * Header template for the VitalDC theme.
 */
$current_lang = vitaldc_get_current_language();
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark" lang="<?php echo esc_attr( $current_lang ); ?>" dir="<?php echo 'ar' === $current_lang ? 'rtl' : 'ltr'; ?>">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>
<?php wp_head(); ?>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&amp;family=Inter:wght@400;500&amp;family=Poppins:wght@400;500&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
<style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
    }
    .glass-card {
        background: rgba(1, 27, 41, 0.6);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(142, 202, 230, 0.15);
    }
    .light-glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(0, 31, 42, 0.1);
    }
    .grid-mesh {
        background-image:
            linear-gradient(to right, rgba(142, 202, 230, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(142, 202, 230, 0.05) 1px, transparent 1px);
        background-size: 40px 40px;
    }
    .grid-mesh-light {
        background-image:
            linear-gradient(to right, rgba(0, 31, 42, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(0, 31, 42, 0.05) 1px, transparent 1px);
        background-size: 40px 40px;
    }
    .glow-line {
        height: 1px;
        background: linear-gradient(90deg, transparent, #FB8500, transparent);
    }
    .glow-line-dark {
        height: 1px;
        background: linear-gradient(90deg, transparent, #023047, transparent);
    }
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.3; }
        50% { opacity: 0.6; }
    }
    .animate-pulse-slow {
        animation: pulse-slow 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    .language-switching [data-i18n] {
        opacity: 0.25;
        transform: translateY(-6px);
    }
    [data-i18n] {
        transition: opacity 0.2s ease, transform 0.2s ease;
    }
    .rtl {
        direction: rtl;
        text-align: right;
    }
</style>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "tertiary-fixed": "#ffdea9",
            "border-glass": "rgba(142, 202, 230, 0.15)",
            "on-tertiary-container": "#c18a00",
            "on-tertiary-fixed": "#271900",
            "surface-container": "#00232f",
            "on-primary-fixed-variant": "#254a63",
            "on-secondary-fixed-variant": "#004e5f",
            "on-tertiary": "#422c00",
            "surface-container-low": "#001f2a",
            "primary": "#a6cbe8",
            "surface-bright": "#003e52",
            "outline-variant": "#42474d",
            "error-container": "#93000a",
            "on-primary-container": "#7498b4",
            "surface-container-lowest": "#001018",
            "secondary": "#69d4f4",
            "on-secondary-container": "#002e39",
            "surface": "#00161f",
            "inverse-on-surface": "#003546",
            "secondary-container": "#209dbb",
            "on-surface": "#bde9ff",
            "on-error": "#690005",
            "on-tertiary-fixed-variant": "#5e4100",
            "primary-fixed": "#c8e6ff",
            "on-error-container": "#ffdad6",
            "error": "#ffb4ab",
            "surface-variant": "#003a4c",
            "tertiary": "#ffba27",
            "on-secondary": "#003642",
            "export-orange": "#FB8500",
            "export-yellow": "#FFB703",
            "surface-dim": "#00161f",
            "inverse-primary": "#3e627b",
            "on-secondary-fixed": "#001f27",
            "primary-container": "#023047",
            "on-primary-fixed": "#001e2f",
            "surface-deep": "#011B29",
            "on-surface-variant": "#c2c7cd",
            "tertiary-fixed-dim": "#ffba27",
            "secondary-fixed": "#b2ebff",
            "surface-container-highest": "#003a4c",
            "tertiary-container": "#3d2900",
            "on-primary": "#07344b",
            "surface-container-high": "#002e3d",
            "outline": "#8c9197",
            "background": "#00161f",
            "secondary-fixed-dim": "#69d4f4",
            "on-background": "#bde9ff",
            "surface-tint": "#a6cbe8",
            "inverse-surface": "#bde9ff",
            "primary-fixed-dim": "#a6cbe8",
            "light-surface": "#F5F9FC",
            "light-on-surface": "#001F2A",
            "light-on-surface-variant": "#42474D",
            "light-border": "rgba(0, 31, 42, 0.1)"
          },
          borderRadius: {
            DEFAULT: "0.125rem",
            lg: "0.25rem",
            xl: "0.5rem",
            full: "0.75rem"
          },
          spacing: {
            "container-max": "1280px",
            "section-gap": "120px",
            "margin-mobile": "16px",
            "stack-lg": "48px",
            "margin-desktop": "64px",
            "stack-sm": "8px",
            "stack-md": "24px",
            gutter: "24px"
          },
          fontFamily: {
            "display-lg": ["Geist"],
            "headline-lg": ["Geist"],
            "headline-md": ["Geist"],
            "label-caps": ["Poppins"],
            "body-lg": ["Inter"],
            "body-md": ["Inter"],
            "label-sm": ["Inter"]
          }
        }
      }
    };
</script>
</head>
<body <?php body_class('bg-background text-on-surface selection:bg-export-orange/30' . ('ar' === $current_lang ? ' rtl' : '')); ?>>
<?php wp_body_open(); ?>
<?php
$next_lang = 'ar' === $current_lang ? 'en' : 'ar';
$toggle_label = 'ar' === $current_lang ? 'EN' : 'AR';
$current_url = remove_query_arg( array( 'lang', 'l', 'ar', 'en' ) );
$toggle_url = add_query_arg( 'lang', $next_lang, $current_url );
?>
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-xl border-b border-glass flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-full transition-all duration-300">
    <div class="flex items-center gap-stack-lg">
        <a class="font-display-lg text-headline-md font-bold tracking-tighter text-on-surface flex items-center" style="font-size:50px;" href="<?php echo esc_url(home_url('/')); ?>">
            <span class="text-export-orange"><?php echo vitaldc_t('VitalDC', 'فيتال دي سي'); ?></span>
        </a>
        <div class="hidden md:flex gap-6 items-center">
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/"><?php echo vitaldc_t('Digital Foundation', 'الأساس الرقمي'); ?></a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/marketing"><?php echo vitaldc_t('Modern Marketing', 'التسويق الحديث'); ?></a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/automation"><?php echo vitaldc_t('AI Automation', 'أتمتة الذكاء الاصطناعي'); ?></a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/careers"><?php echo vitaldc_t('Careers', 'الوظائف'); ?></a>
        </div>
    </div>
    <div class="flex items-center gap-4">
        <a id="language-switcher" href="<?php echo esc_url( $toggle_url ); ?>" class="hidden md:inline font-label-caps text-label-caps text-on-surface-variant cursor-pointer transition-colors duration-300 hover:text-export-yellow" role="button"><?php echo $toggle_label; ?></a>
        <a class="bg-export-orange text-white px-6 py-2 font-label-caps text-label-caps font-bold transition-all hover:brightness-110 active:opacity-80" href="/start"><?php echo vitaldc_t('Start Project', 'ابدأ مشروع'); ?></a>
        <button id="mobile-menu-toggle" type="button" class="md:hidden flex items-center justify-center p-2 rounded-lg text-on-surface hover:text-export-yellow hover:bg-surface-container/50 focus:outline-none transition-colors duration-200" aria-label="<?php echo esc_attr(vitaldc_t('Toggle navigation menu', 'تبديل قائمة التنقل')); ?>" aria-expanded="false" aria-controls="mobile-menu">
            <span id="mobile-menu-icon" class="material-symbols-outlined text-2xl select-none">menu</span>
        </button>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-surface/95 backdrop-blur-2xl border-b border-glass p-6 md:hidden shadow-2xl transition-all duration-300 flex-col gap-5">
        <div class="flex flex-col gap-3">
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300 py-2.5 border-b border-glass/40 flex items-center justify-between" href="/">
                <span><?php echo vitaldc_t('Digital Foundation', 'الأساس الرقمي'); ?></span>
            </a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300 py-2.5 border-b border-glass/40 flex items-center justify-between" href="/marketing">
                <span><?php echo vitaldc_t('Modern Marketing', 'التسويق الحديث'); ?></span>
            </a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300 py-2.5 border-b border-glass/40 flex items-center justify-between" href="/automation">
                <span><?php echo vitaldc_t('AI Automation', 'أتمتة الذكاء الاصطناعي'); ?></span>
            </a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300 py-2.5 border-b border-glass/40 flex items-center justify-between" href="/careers">
                <span><?php echo vitaldc_t('Careers', 'الوظائف'); ?></span>
            </a>
        </div>
        <div class="pt-3 flex items-center justify-between gap-4 border-t border-glass">
            <a id="mobile-language-switcher" href="<?php echo esc_url( $toggle_url ); ?>" class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300 flex items-center gap-2 py-2" role="button">
                <span class="material-symbols-outlined text-lg">language</span>
                <span><?php echo 'ar' === $current_lang ? 'English (EN)' : 'العربية (AR)'; ?></span>
            </a>
            <a class="bg-export-orange text-white px-5 py-2 font-label-caps text-label-caps font-bold transition-all hover:brightness-110 active:opacity-80 text-center" href="/start">
                <?php echo vitaldc_t('Start Project', 'ابدأ مشروع'); ?>
            </a>
        </div>
    </div>
</nav>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('mobile-menu-icon');

    if (toggleBtn && mobileMenu && menuIcon) {
        function toggleMenu() {
            const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
            toggleBtn.setAttribute('aria-expanded', !isExpanded);
            if (isExpanded) {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                menuIcon.textContent = 'menu';
            } else {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('flex');
                menuIcon.textContent = 'close';
            }
        }

        toggleBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMenu();
        });

        document.addEventListener('click', function(e) {
            if (!mobileMenu.contains(e.target) && !toggleBtn.contains(e.target)) {
                if (toggleBtn.getAttribute('aria-expanded') === 'true') {
                    toggleMenu();
                }
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && toggleBtn.getAttribute('aria-expanded') === 'true') {
                toggleMenu();
            }
        });

        const navLinks = mobileMenu.querySelectorAll('a');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                if (toggleBtn.getAttribute('aria-expanded') === 'true') {
                    toggleMenu();
                }
            });
        });
    }
});
</script>
<main class="relative">