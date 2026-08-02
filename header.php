<!DOCTYPE html>

<html lang="en" data-theme="dark">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VitalDC | Digital Infrastructure</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@400;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "primary-fixed": "#d8e2ff",
"primary-container": "#4d8eff",
"surface-container-high": "#f1f5f9",
"surface-tint": "#005ac2",
"surface-bright": "#ffffff",
"secondary-fixed-dim": "#d0bcff",
"outline-variant": "#e2e8f0",
"on-primary-fixed": "#001a42",
"on-primary-fixed-variant": "#004395",
"surface-container-low": "#f8fafc",
"error-container": "#ffdad6",
"surface-container-highest": "#e2e8f0",
"secondary-fixed": "#e9ddff",
"on-secondary-fixed": "#23005c",
"inverse-primary": "#adc6ff",
"on-tertiary-fixed": "#1c1b1c",
"primary-fixed-dim": "#adc6ff",
"on-secondary-fixed-variant": "#5516be",
"on-surface": "#0f172a",
"surface-variant": "#f1f5f9",
"primary": "#005ac2",
"on-tertiary-fixed-variant": "#474647",
"background": "#f8fafc",
"tertiary-container": "#e2e2e2",
"error": "#ba1a1a",
"inverse-surface": "#101415",
"on-surface-variant": "#475569",
"surface-dim": "#cbd5e1",
"on-error": "#ffffff",
"on-tertiary": "#ffffff",
"outline": "#94a3b8",
"on-error-container": "#410002",
"inverse-on-surface": "#f8fafc",
"on-background": "#0f172a",
"surface": "#f8fafc",
"on-secondary-container": "#21005d",
"surface-container": "#f1f5f9",
"secondary-container": "#d0bcff",
"tertiary-fixed": "#e5e2e3",
"secondary": "#6750a4",
"on-primary-container": "#ffffff",
"tertiary": "#5d5e5f",
"on-tertiary-container": "#1a1c1e",
"surface-container-lowest": "#ffffff",
"on-secondary": "#ffffff",
"tertiary-fixed-dim": "#c8c6c7",
"on-primary": "#ffffff"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "xl": "4rem",
                      "gutter": "24px",
                      "base": "4px",
                      "md": "1.5rem",
                      "lg": "2rem",
                      "sm": "1rem",
                      "xs": "0.5rem",
                      "container-max": "1440px"
              },
              "fontFamily": {
                      "body-md": ["Inter"],
                      "body-sm": ["Inter"],
                      "label-caps": ["Geist"],
                      "code-snippet": ["Geist"],
                      "headline-md": ["Geist"],
                      "display-lg": ["Geist"],
                      "title-sm": ["Geist"],
                      "display-lg-mobile": ["Geist"]
              },
              "fontSize": {
                      "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                      "label-caps": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                      "code-snippet": ["14px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                      "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "title-sm": ["18px", {"lineHeight": "1.4", "fontWeight": "600"}],
                      "display-lg-mobile": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}]
              }
            },
          },
        }
      </script>


<?php wp_head(); ?>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const currentPath = window.location.pathname.replace(/\/$/, '') || '/';

    document.querySelectorAll('#main-menu a').forEach(link => {
        const linkPath = new URL(link.href).pathname.replace(/\/$/, '') || '/';

        if (linkPath === currentPath) {
            link.classList.remove('text-on-surface-variant');
            link.classList.add(
                'text-secondary',
                'border-b-2',
                'border-secondary',
                'pb-1'
            );
        } else {
            link.classList.remove(
                'text-secondary',
                'border-b-2',
                'border-secondary',
                'pb-1'
            );
            link.classList.add('text-on-surface-variant');
        }
    });
});
</script>

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
 
<style>
.required-field::after {
    content: " *";
    color: #ef4444; /* Tailwind red-500 */
    font-weight: 700;
}

</style>