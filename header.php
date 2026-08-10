<?php
/**
 * Header template for the VitalDC theme.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>
<?php wp_head(); ?>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&amp;family=Inter:wght@400;500&amp;family=JetBrains+Mono:wght@400;500&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
            "label-caps": ["JetBrains Mono"],
            "body-lg": ["Inter"],
            "body-md": ["Inter"],
            "label-sm": ["Inter"]
          }
        }
      }
    };
</script>
</head>
<body <?php body_class('bg-background text-on-surface selection:bg-export-orange/30'); ?>>
<?php wp_body_open(); ?>
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-xl border-b border-glass flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-full transition-all duration-300">
    <div class="flex items-center gap-stack-lg">
        <a class="font-display-lg text-3xl md:text-[50px] font-bold tracking-tighter text-on-surface flex items-center" href="<?php echo esc_url(home_url('/')); ?>">
            <span class="text-export-orange" data-i18n="1" data-en="VitalDC" data-ar="فيتال دي سي">VitalDC</span>
        </a>
        <div class="hidden md:flex gap-6 items-center">
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/" data-i18n="2" data-en="Digital Foundation" data-ar="الأساس الرقمي">Digital Foundation</a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/marketing" data-i18n="3" data-en="Modern Marketing" data-ar="التسويق الحديث">Modern Marketing</a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/automation" data-i18n="4" data-en="AI Automation" data-ar="أتمتة الذكاء الاصطناعي">AI Automation</a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/careers" data-i18n="5" data-en="Careers" data-ar="الوظائف">Careers</a>
        </div>
    </div>
    <div class="flex items-center gap-3 md:gap-4">
        <span id="language-switcher" class="hidden md:inline font-label-caps text-label-caps text-on-surface-variant cursor-pointer transition-colors duration-300 hover:text-export-yellow" role="button" tabindex="0" aria-live="polite" data-i18n="7" data-en="EN" data-ar="AR">EN</span>
        <a class="bg-export-orange text-white px-4 py-2 sm:px-6 sm:py-2 text-xs sm:text-sm font-label-caps text-label-caps font-bold transition-all hover:brightness-110 active:opacity-80 rounded" href="/start" data-i18n="6" data-en="Start Project" data-ar="ابدأ مشروع">Start Project</a>
        <button id="mobile-menu-btn" type="button" class="md:hidden flex items-center justify-center p-2 rounded-lg border border-glass bg-surface-container/80 text-on-surface hover:text-export-orange hover:border-export-orange/50 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-export-orange/50" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobile-menu">
            <span id="mobile-menu-icon" class="material-symbols-outlined text-2xl transition-transform duration-300">menu</span>
        </button>
    </div>
</nav>

<!-- Mobile Navigation Drawer Overlay -->
<div id="mobile-menu-backdrop" class="fixed inset-0 z-40 bg-surface-deep/80 backdrop-blur-md opacity-0 pointer-events-none transition-opacity duration-300 md:hidden" aria-hidden="true"></div>

<div id="mobile-menu" class="fixed top-[73px] left-0 right-0 z-40 bg-surface/95 backdrop-blur-2xl border-b border-glass transform -translate-y-full opacity-0 pointer-events-none transition-all duration-300 ease-out md:hidden max-h-[calc(100vh-73px)] overflow-y-auto flex flex-col justify-between p-6 shadow-2xl">
    <div class="space-y-3 py-2">
        <div class="font-label-caps text-[11px] text-export-yellow tracking-widest uppercase mb-3 flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-export-yellow animate-pulse"></span>
            <span data-i18n="nav_menu_label" data-en="SYSTEM NAVIGATION" data-ar="قائمة التنقل">SYSTEM NAVIGATION</span>
        </div>

        <a class="mobile-nav-link group flex items-center justify-between p-3.5 rounded-xl border border-glass/40 bg-surface-container-low/40 hover:bg-surface-container/80 hover:border-export-yellow/40 transition-all duration-200" href="/">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-export-orange group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-xl">dataset</span>
                </div>
                <div>
                    <div class="font-label-caps text-sm font-semibold text-on-surface group-hover:text-export-yellow transition-colors" data-i18n="2" data-en="Digital Foundation" data-ar="الأساس الرقمي">Digital Foundation</div>
                    <div class="text-xs text-on-surface-variant/70" data-i18n="2_desc" data-en="Core Infrastructure & Web Architecture" data-ar="البنية التحتية وهندسة الويب">Core Infrastructure & Web Architecture</div>
                </div>
            </div>
            <span class="material-symbols-outlined text-on-surface-variant group-hover:text-export-yellow group-hover:translate-x-1 rtl:group-hover:-translate-x-1 transition-transform">arrow_forward</span>
        </a>

        <a class="mobile-nav-link group flex items-center justify-between p-3.5 rounded-xl border border-glass/40 bg-surface-container-low/40 hover:bg-surface-container/80 hover:border-export-yellow/40 transition-all duration-200" href="/marketing">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-export-yellow group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-xl">campaign</span>
                </div>
                <div>
                    <div class="font-label-caps text-sm font-semibold text-on-surface group-hover:text-export-yellow transition-colors" data-i18n="3" data-en="Modern Marketing" data-ar="التسويق الحديث">Modern Marketing</div>
                    <div class="text-xs text-on-surface-variant/70" data-i18n="3_desc" data-en="Global Export & Brand Expansion" data-ar="التصدير العالمي والتوسع">Global Export & Brand Expansion</div>
                </div>
            </div>
            <span class="material-symbols-outlined text-on-surface-variant group-hover:text-export-yellow group-hover:translate-x-1 rtl:group-hover:-translate-x-1 transition-transform">arrow_forward</span>
        </a>

        <a class="mobile-nav-link group flex items-center justify-between p-3.5 rounded-xl border border-glass/40 bg-surface-container-low/40 hover:bg-surface-container/80 hover:border-export-yellow/40 transition-all duration-200" href="/automation">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-secondary group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-xl">smart_toy</span>
                </div>
                <div>
                    <div class="font-label-caps text-sm font-semibold text-on-surface group-hover:text-export-yellow transition-colors" data-i18n="4" data-en="AI Automation" data-ar="أتمتة الذكاء الاصطناعي">AI Automation</div>
                    <div class="text-xs text-on-surface-variant/70" data-i18n="4_desc" data-en="Autonomous Workflows & Intelligence" data-ar="أتمتة سير العمل والذكاء الاصطناعي">Autonomous Workflows & Intelligence</div>
                </div>
            </div>
            <span class="material-symbols-outlined text-on-surface-variant group-hover:text-export-yellow group-hover:translate-x-1 rtl:group-hover:-translate-x-1 transition-transform">arrow_forward</span>
        </a>

        <a class="mobile-nav-link group flex items-center justify-between p-3.5 rounded-xl border border-glass/40 bg-surface-container-low/40 hover:bg-surface-container/80 hover:border-export-yellow/40 transition-all duration-200" href="/careers">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-tertiary group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-xl">work</span>
                </div>
                <div>
                    <div class="font-label-caps text-sm font-semibold text-on-surface group-hover:text-export-yellow transition-colors" data-i18n="5" data-en="Careers" data-ar="الوظائف">Careers</div>
                    <div class="text-xs text-on-surface-variant/70" data-i18n="5_desc" data-en="Join Our High-Performance Team" data-ar="انضم إلى فريقنا المتميز">Join Our High-Performance Team</div>
                </div>
            </div>
            <span class="material-symbols-outlined text-on-surface-variant group-hover:text-export-yellow group-hover:translate-x-1 rtl:group-hover:-translate-x-1 transition-transform">arrow_forward</span>
        </a>
    </div>

    <!-- Mobile Drawer Footer Actions -->
    <div class="pt-5 mt-4 border-t border-glass/60 space-y-4">
        <!-- Mobile Language Selector & Info -->
        <div class="flex items-center justify-between px-1">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                <span class="font-label-caps text-xs text-on-surface-variant" data-i18n="lang_select" data-en="Language:" data-ar="اللغة:">Language:</span>
            </div>
            <button id="mobile-language-switcher" type="button" class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-glass bg-surface-container text-xs font-label-caps text-export-yellow font-bold hover:bg-surface-bright transition-colors" role="button" aria-live="polite" data-i18n="7" data-en="EN" data-ar="AR">
                <span class="material-symbols-outlined text-sm">language</span>
                <span class="lang-text">EN</span>
            </button>
        </div>

        <!-- Primary Mobile CTA -->
        <a class="mobile-nav-link flex items-center justify-center gap-2 bg-gradient-to-r from-export-orange to-amber-500 text-white w-full py-3.5 px-6 font-label-caps text-sm font-bold tracking-wide rounded-xl shadow-[0_0_20px_rgba(251,133,0,0.3)] hover:brightness-110 active:scale-[0.99] transition-all" href="/start">
            <span data-i18n="6" data-en="Start Project" data-ar="ابدأ مشروع">Start Project</span>
            <span class="material-symbols-outlined text-lg">rocket_launch</span>
        </a>

        <!-- System Branding Footer -->
        <div class="text-center font-label-caps text-[10px] text-on-surface-variant/50 pt-1">
            VITALDC // GLOBAL DIGITAL FRAMEWORK
        </div>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const switcher = document.getElementById('language-switcher');
        const mobileSwitcher = document.getElementById('mobile-language-switcher');
        const menuBtn = document.getElementById('mobile-menu-btn');
        const menuIcon = document.getElementById('mobile-menu-icon');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileBackdrop = document.getElementById('mobile-menu-backdrop');
        const navLinks = document.querySelectorAll('.mobile-nav-link');
        const duration = 220;

        function setLanguage(lang) {
            const translatable = Array.from(document.querySelectorAll('[data-i18n]'));
            translatable.forEach(function(node) {
                const localized = node.dataset[lang];
                if (localized != null) {
                    const langTextNode = node.querySelector('.lang-text');
                    if (langTextNode) {
                        langTextNode.textContent = localized;
                    } else {
                        node.textContent = localized;
                    }
                }
            });
            document.documentElement.lang = lang === 'ar' ? 'ar' : 'en';
            document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';
            document.body.classList.toggle('rtl', lang === 'ar');

            [switcher, mobileSwitcher].forEach(function(el) {
                if (el) {
                    el.dataset.language = lang;
                    const langTextNode = el.querySelector('.lang-text');
                    const targetText = el.dataset[lang] || (lang === 'ar' ? 'AR' : 'EN');
                    if (langTextNode) {
                        langTextNode.textContent = targetText;
                    } else {
                        el.textContent = targetText;
                    }
                }
            });
        }

        function toggleLanguage() {
            const currentLanguage = (switcher && switcher.dataset.language) || (mobileSwitcher && mobileSwitcher.dataset.language) || 'en';
            const next = currentLanguage === 'ar' ? 'en' : 'ar';
            document.documentElement.classList.add('language-switching');
            setTimeout(function() {
                setLanguage(next);
                document.documentElement.classList.remove('language-switching');
            }, duration);
        }

        [switcher, mobileSwitcher].forEach(function(el) {
            if (el) {
                el.addEventListener('click', toggleLanguage);
                el.addEventListener('keydown', function(event) {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        toggleLanguage();
                    }
                });
            }
        });

        let isMenuOpen = false;

        function openMenu() {
            isMenuOpen = true;
            if (menuBtn) menuBtn.setAttribute('aria-expanded', 'true');
            if (menuIcon) menuIcon.textContent = 'close';
            
            if (mobileBackdrop) {
                mobileBackdrop.classList.remove('opacity-0', 'pointer-events-none');
                mobileBackdrop.classList.add('opacity-100');
            }

            if (mobileMenu) {
                mobileMenu.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
                mobileMenu.classList.add('translate-y-0', 'opacity-100');
            }

            document.body.classList.add('overflow-hidden');
        }

        function closeMenu() {
            isMenuOpen = false;
            if (menuBtn) menuBtn.setAttribute('aria-expanded', 'false');
            if (menuIcon) menuIcon.textContent = 'menu';

            if (mobileBackdrop) {
                mobileBackdrop.classList.remove('opacity-100');
                mobileBackdrop.classList.add('opacity-0', 'pointer-events-none');
            }

            if (mobileMenu) {
                mobileMenu.classList.remove('translate-y-0', 'opacity-100');
                mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
            }

            document.body.classList.remove('overflow-hidden');
        }

        function toggleMenu() {
            if (isMenuOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        }

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', toggleMenu);

            if (mobileBackdrop) {
                mobileBackdrop.addEventListener('click', closeMenu);
            }

            navLinks.forEach(function(link) {
                link.addEventListener('click', closeMenu);
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && isMenuOpen) {
                    closeMenu();
                }
            });

            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768 && isMenuOpen) {
                    closeMenu();
                }
            });
        }

        setLanguage('en');
    });
</script>
<main class="relative">
