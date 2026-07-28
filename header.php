<!DOCTYPE html>

<html class="dark" lang="en">
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
                      "primary": "#c1c5dc",
"background": "#0b1020",
"background-alone": "#131315",
"error-container": "#93000a",
"error": "#ffb4ab",
"inverse-on-surface": "#313032",
"inverse-primary": "#595e71",
"inverse-surface": "#e5e2e3",
"on-background": "#e5e2e3",
"on-error-container": "#ffdad6",
"on-error": "#690005",
"on-primary-container": "#777c90",
"on-primary-fixed-variant": "#414658",
"on-primary-fixed": "#161b2b",
"on-primary": "#2b3041",
"on-secondary-container": "#002661",
"on-secondary-fixed-variant": "#00429c",
"on-secondary-fixed": "#001945",
"on-secondary": "#002d6f",
"on-surface-variant": "#c7c6cd",
"on-surface": "#e5e2e3",
"on-tertiary-container": "#8c5ef8",
"on-tertiary-fixed-variant": "#5516be",
"on-tertiary-fixed": "#23005c",
"on-tertiary": "#3c0091",
"outline-variant": "#46464c",
"outline": "#909097",
"primary-container": "#0b1020",
"primary-fixed-dim": "#c1c5dc",
"primary-fixed": "#dee1f9",
"secondary-container": "#568dff",
"secondary-fixed-dim": "#b0c6ff",
"secondary-fixed": "#d9e2ff",
"secondary": "#b0c6ff",
"surface-bright": "#39393a",
"surface-container-high": "#2a2a2b",
"surface-container-highest": "#353436",
"surface-container-low": "#1c1b1d",
"surface-container-lowest": "#0e0e0f",
"surface-container": "#201f21",
"surface-dim": "#131315",
"surface-tint": "#c1c5dc",
"surface-variant": "#353436",
"surface": "#131315",
"tertiary-container": "#160040",
"tertiary-fixed-dim": "#d0bcff",
"tertiary-fixed": "#e9ddff",
"tertiary": "#d0bcff"
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
<nav class="fixed top-0 w-full backdrop-blur-md bg-surface/80 border-b border-white/10 shadow-xl shadow-background/50 z-50" >
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
        class="hidden md:hidden bg-surface/95 backdrop-blur-md border-t border-white/10">

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

<style>
.required-field::after {
    content: " *";
    color: #ef4444; /* Tailwind red-500 */
    font-weight: 700;
}

</style>