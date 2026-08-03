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
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-xl border-b border-glass flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-full">
    <div class="flex items-center gap-stack-lg">
        <a class="font-display-lg text-headline-md font-bold tracking-tighter text-on-surface flex items-center" style="font-size:50px;" href="<?php echo esc_url(home_url('/')); ?>">
            <span class="text-export-orange">Vital</span>DC
        </a>
        <div class="hidden md:flex gap-6 items-center">
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/">Digital Foundation</a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/marketing">Modern Marketing</a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/automation">AI Automation</a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-export-yellow transition-colors duration-300" href="/careers">Careers</a>
        </div>
    </div>
    <div class="flex items-center gap-4">
        <span id="language-switcher" class="hidden md:inline font-label-caps text-label-caps text-on-surface-variant cursor-pointer">EN/AR</span>
        <a class="bg-export-orange text-white px-6 py-2 font-label-caps text-label-caps font-bold transition-all hover:brightness-110 active:opacity-80" href="/start">Start Project</a>
    </div>
</nav>
<main class="relative">
