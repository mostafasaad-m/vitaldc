<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VitalDC | Digital Infrastructure for Egyptian Exporters</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&amp;family=Inter:wght@400;500&amp;family=JetBrains+Mono:wght@400;500&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;family=JetBrains+Mono:wght@100..900&amp;display=swap" rel="stylesheet"/>
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
            background: linear-gradient(90deg, transparent, #219EBC, transparent);
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
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
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
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "container-max": "1280px",
                      "section-gap": "120px",
                      "margin-mobile": "16px",
                      "stack-lg": "48px",
                      "margin-desktop": "64px",
                      "stack-sm": "8px",
                      "stack-md": "24px",
                      "gutter": "24px"
              },
              "fontFamily": {
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
        }
    </script>


<?php wp_head(); ?>

</head>
<nav class="glass-panel fixed top-0 w-full backdrop-blur-md bg-surface/80 border-b border-white/10 shadow-xl shadow-background/50 z-50" >
    <div class="flex justify-between items-center px-gutter py-md max-w-container-max mx-auto">

        <!-- Logo -->
        <a href="/">
            <div class="font-display-lg text-display-lg tracking-tighter text-on-surface">
                VitalDC
            </div>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-md" id="main-menu">
            <a class="font-body-md text-body-md text-secondary border-b-2 border-secondary pb-1 transition-colors duration-300"
                href="/">Digital Assets</a>

            <a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary transition-colors duration-300"
                href="/marketing">Marketing</a>

            <a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary transition-colors duration-300"
                href="/automation">Automation & AI</a>

            <a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary transition-colors duration-300"
                href="/careers">Careers</a>
        </div>

        <!-- Right Side -->
        <div class="flex items-center gap-sm">

            <button id="theme-toggle" type="button" class="theme-toggle relative inline-flex items-center justify-between rounded-full border border-white/18 bg-[rgba(255,255,255,0.08)] px-4 py-2 text-on-surface transition duration-300 hover:bg-[rgba(255,255,255,0.14)] focus:outline-none focus:ring-2 focus:ring-secondary/40" aria-pressed="false">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-2xl" id="theme-toggle-icon">dark_mode</span>
                    <span class="theme-toggle-label">Dark</span>
                </div>
                <span class="theme-toggle-knob"></span>
            </button>

            <a href="/start" class="hidden md:block">
                <button
                    class="bg-secondary-container text-on-secondary-container px-md py-xs font-label-caps text-label-caps rounded-lg active:scale-95 duration-200 uppercase tracking-widest">
                    Start Project
                </button>
            </a>

            <!-- Mobile Hamburger -->
            <button id="menu-toggle" class="md:hidden text-on-surface">
                <span class="material-symbols-outlined text-3xl">
                    menu
                </span>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="hidden absolute left-0 top-full w-full z-40 bg-surface/95 backdrop-blur-md border-t border-white/10">

        <div class="flex flex-col px-gutter py-md gap-md">

            <a href="/" class="text-secondary">Digital Assets</a>

            <a href="/marketing"
                class="text-on-surface-variant hover:text-secondary">
                Marketing
            </a>

            <a href="/automation"
                class="text-on-surface-variant hover:text-secondary">
                Automation & AI
            </a>

            <a href="/careers"
                class="text-on-surface-variant hover:text-secondary">
                Careers
            </a>

            <a href="/start">
                <button
                    class="w-full bg-secondary-container text-on-secondary-container px-md py-sm rounded-lg uppercase tracking-widest">
                    Start Project
                </button>
            </a>

        </div>
    </div>
</nav>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');

        const icon = toggle.querySelector('.material-symbols-outlined');
        icon.textContent = menu.classList.contains('hidden')
            ? 'menu'
            : 'close';
    });
});
</script>
 

<script>
document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-toggle-icon');

    const applyTheme = (theme) => {
        const useDark = theme !== 'light';
        const themeName = useDark ? 'dark' : 'light';
        document.documentElement.dataset.theme = themeName;
        document.documentElement.classList.toggle('dark', useDark);
        document.documentElement.classList.toggle('light', !useDark);
        document.body.dataset.theme = themeName;
        themeToggle?.classList.toggle('light-mode', !useDark);
        themeToggle?.classList.toggle('dark-mode', useDark);
        localStorage.setItem('site-theme', themeName);
        themeIcon.textContent = useDark ? 'dark_mode' : 'light_mode';
        themeToggle?.setAttribute('aria-label', useDark ? 'Switch to light mode' : 'Switch to dark mode');
        themeToggle?.setAttribute('aria-pressed', String(!useDark));
        const label = themeToggle?.querySelector('.theme-toggle-label');
        if (label) {
            label.textContent = useDark ? 'Dark' : 'Light';
        }
    };

    const savedTheme = localStorage.getItem('site-theme');
    applyTheme(savedTheme || 'dark');

    themeToggle?.addEventListener('click', () => {
        applyTheme(document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark');
    });
});
</script>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<style>
.required-field::after {
    content: " *";
    color: #ef4444; /* Tailwind red-500 */
    font-weight: 700;
}

</style>