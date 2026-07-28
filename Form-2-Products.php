<?php 
/**
 * Template Name: Form-2-Products
 */

 ?>

<?php

if (isset($_POST['save_products'])) {

 $order_id = absint($_GET['quote_id'] ?? 0);

$order = wc_get_order($order_id);

if (!$order) {
    wp_die('Order not found');
}

    $products = $_POST['products'] ?? [];
    $order_products = [];
    $total_metric_tons = 0;

    foreach ($products as $product) {

        if (empty($product['name']) && empty($product['qty'])) {
            continue;
        }

        $qty = floatval($product['qty'] ?? 0);

        $order_products[] = [
            'name'  => sanitize_text_field($product['name'] ?? ''),
            'grade' => sanitize_text_field($product['grade'] ?? ''),
            'qty'   => $qty,
        ];

        $total_metric_tons += $qty;
    }

    $order->update_meta_data('_quotation_products', $order_products);
    $order->update_meta_data('_quotation_total_metric_tons', $total_metric_tons);

    $order->save();


  wp_safe_redirect(
    add_query_arg(
        [
            'quote_id' => $order_id,
        ],
        site_url('/quotation/shipping-terms/')
    )
);
exit;

   
}




 ?>
 
 <!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Geist:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        .stat-border {
            border-left: 4px solid #fe8f14;
        }
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #f1edec;
        }
        ::-webkit-scrollbar-thumb {
            background: #c2c8c2;
            border-radius: 10px;
        }
        .selection-card.selected {
            box-shadow: 0 0 0 3px rgba(254, 143, 20, 0.18);
            border-color: #fe8f14;
            transform: translateY(-1px);
        }
        .selection-card .selection-check {
            display: none;
        }
        .selection-card.selected .selection-check {
            display: flex;
        }
        .selected-item-row {
            transition: transform 0.2s ease, opacity 0.2s ease;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "primary": "#000000",
                      "surface-tint": "#496454",
                      "secondary-fixed-dim": "#ffb77c",
                      "tertiary-container": "#1c1c18",
                      "primary-fixed-dim": "#afceba",
                      "surface-container-low": "#f7f2f2",
                      "on-background": "#1c1b1b",
                      "on-error-container": "#93000a",
                      "secondary-fixed": "#ffdcc2",
                      "on-primary-container": "#6e8a79",
                      "inverse-on-surface": "#f4f0ef",
                      "on-secondary-container": "#633300",
                      "error": "#ba1a1a",
                      "surface-container-highest": "#e6e1e1",
                      "on-primary-fixed-variant": "#324c3d",
                      "on-primary-fixed": "#052014",
                      "surface-bright": "#fdf8f8",
                      "inverse-primary": "#afceba",
                      "surface-variant": "#e6e1e1",
                      "background": "#fdf8f8",
                      "on-error": "#ffffff",
                      "surface-container": "#f1edec",
                      "outline": "#727973",
                      "on-tertiary-fixed": "#1c1c18",
                      "surface-container-lowest": "#ffffff",
                      "on-primary": "#ffffff",
                      "secondary-container": "#fe8f14",
                      "primary-container": "#052014",
                      "glass-white": "rgba(255, 255, 255, 0.03)",
                      "on-surface-variant": "#424844",
                      "outline-variant": "#c2c8c2",
                      "on-secondary-fixed-variant": "#6d3900",
                      "on-surface": "#1c1b1b",
                      "on-tertiary-container": "#85847e",
                      "tertiary": "#000000",
                      "on-tertiary-fixed-variant": "#484742",
                      "inverse-surface": "#313030",
                      "on-secondary": "#ffffff",
                      "map-glow": "rgba(254, 143, 20, 0.4)",
                      "surface-container-high": "#ece7e7",
                      "surface": "#fdf8f8",
                      "tertiary-fixed-dim": "#c9c6bf",
                      "on-tertiary": "#ffffff",
                      "primary-fixed": "#cbead5",
                      "surface-dim": "#ddd9d8",
                      "secondary": "#904d00",
                      "on-secondary-fixed": "#2e1500",
                      "tertiary-fixed": "#e5e2db",
                      "error-container": "#ffdad6"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "stack-sm": "32px",
                      "margin-desktop": "80px",
                      "container-max": "1440px",
                      "unit": "8px",
                      "margin-mobile": "24px",
                      "gutter": "32px",
                      "stack-lg": "120px",
                      "stack-md": "64px",
                      "margin-tablet": "40px"
              },
              "fontFamily": {
                      "body-lg": ["Inter"],
                      "label-sm": ["Geist"],
                      "headline-lg": ["Inter"],
                      "body-md": ["Inter"],
                      "headline-md": ["Inter"],
                      "display-lg": ["Inter"],
                      "display-lg-mobile": ["Inter"],
                      "label-md": ["Geist"]
              },
              "fontSize": {
                      "body-lg": ["20px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "label-sm": ["12px", {"lineHeight": "1.4", "letterSpacing": "0.1em", "fontWeight": "600"}],
                      "headline-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "500"}],
                      "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "500"}],
                      "display-lg": ["72px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "600"}],
                      "display-lg-mobile": ["40px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                      "label-md": ["14px", {"lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "500"}]
              }
            },
          },
        }
    </script>
</head>

<body class="body bg-surface text-on-surface font-body-md selection:bg-secondary-container selection:text-on-secondary-container">
<!-- TopNavBar -->

<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md shadow-sm border-b border-outline-variant/30">
<div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="cursor-pointer transition-all duration-200 active:scale-95">
<img alt="JANA FRESH" class="h-10 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn8kBDd576Ww8axOYFh8cgq_meB4uyzhye4Xpo9xDdOfi_i4laA-bE8eZzZQ_VOSI74-sZhsfeDPdgl1v5Fnc6gT2GOLOwWSDkv9SdvIvF-QJEtva5Mxyk0yjovtQKczj25La1k8ukwuvSRc-jZDEAeL5xCyVgpuRItMSx9HChCqGLeQAeNyMauM1mrdohrTG43DarTjFW3TsAm4G4o4MW773hfLFYlFBJDJolL1rCfzNUWLDpxi4sUyp21l6WDIIMySDaaVRc-wj_"/>
</div>

<button class="bg-primary text-on-primary px-6 py-3 rounded font-label-md text-label-md hover:opacity-90 transition-opacity duration-300 active:scale-95">
            Step 2
        </button>
</div>
</nav>
<div class="flex flex-1 pt-20">
<!-- SideNavBar (Quote Builder) -->
<aside class="fixed left-0 top-20 bottom-0 flex flex-col py-stack-sm bg-surface-container dark:bg-surface-container-high shadow-sm w-80 z-40">
<div class="px-8 pb-8 border-b border-outline-variant/10">
<div class="flex items-center gap-4 mb-2">
<div class="w-10 h-10 bg-secondary-container flex items-center justify-center">
<span class="material-symbols-outlined text-on-secondary-container">inventory_2</span>
</div>
<div>
<h3 class="font-label-md text-label-md text-primary font-bold">Quote Progress</h3>
<p class="font-label-sm text-label-sm text-on-surface-variant opacity-70">Step 1 of 5</p>
</div>
</div>
</div>
<nav class="flex-1 mt-6 space-y-1">
<!-- Step 2 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Personal Details</span>
</div>

<div class="flex items-center gap-4 px-8 py-4 text-primary font-bold border-l-4 border-secondary bg-surface-bright pl-4 font-label-md text-label-md">
<span class="material-symbols-outlined text-secondary">Nutrition</span>
<span>Select Products</span>
</div>

<!-- Step 3 (Active) -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md hover:bg-surface-container-highest transition-all">
<span class="material-symbols-outlined">delivery_truck_speed</span>
<span>Incoterms</span>
</div>

<!-- Step 4 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md hover:bg-surface-container-highest transition-all">
<span class="material-symbols-outlined">Payments</span>
<span>Payment Terms</span>
</div>
<!-- Step 5 -->
<div class="flex items-center gap-4 px-8 py-4 text-on-surface-variant pl-4 opacity-60 font-label-md text-label-md hover:bg-surface-container-highest transition-all">
<span class="material-symbols-outlined">fact_check</span>
<span>Review</span>
</div>
</nav>
<div class="px-8 mt-auto">
<button class="w-full py-4 border border-outline font-label-md text-label-md hover:bg-surface-container-highest transition-all">
                    Next Step
                </button>
</div>
</aside>
<!-- Main Content Area -->
<main class="ml-80 flex-1 px-margin-desktop py-stack-sm max-w-[1440px] mx-auto">
<header class="mb-stack-md">
<h1 class="font-display-lg text-display-lg text-primary mb-4">Product Selection</h1>
 <div class="flex flex-col gap-2 mb-4">
        <h2 class="font-headline-md text-headline-md text-primary">Select one or many</h2>
        <p class="font-label-md text-on-surface-variant max-w-2xl">Click any product image below to add it to your configuration. Selected items appear automatically in the selection box.</p>
    </div>
</header>
<section class="mb-stack-sm">
   
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
        <button type="button" class="selection-card group relative overflow-hidden rounded-2xl border border-outline-variant bg-surface-container-high p-1 aspect-square" data-item-id="vegetables" data-category="Lemon" data-variety="Grade A, Grade B, Grade C">
            <img alt="Lemon" class="w-full h-full object-cover rounded-2xl" src="/wp-content/uploads/2026/06/Lemon.png"/>
            <div class="absolute inset-0 bg-black/10 transition-opacity duration-200"></div>
            <div class="absolute inset-x-0 bottom-0 p-3 bg-gradient-to-t from-black/80 to-transparent rounded-b-2xl">
               
                <p class="font-body-md text-white font-semibold">Lemons</p>
            </div>
            <div class="selection-check absolute right-3 top-3 h-9 w-9 rounded-full bg-white flex items-center justify-center text-secondary-container shadow-md">
                <span class="material-symbols-outlined">check</span>
            </div>
        </button>
        <button type="button" class="selection-card group relative overflow-hidden rounded-2xl border border-outline-variant bg-surface-container-high p-1 aspect-square" data-item-id="Oranges" data-category="Oranges" data-variety="Grade A, Grade B, Grade C">
            <img alt="Oranges" class="w-full h-full object-cover rounded-2xl" src="/wp-content/uploads/2026/06/Orange.png"/>
            <div class="absolute inset-0 bg-black/10 transition-opacity duration-200"></div>
            <div class="absolute inset-x-0 bottom-0 p-3 bg-gradient-to-t from-black/80 to-transparent rounded-b-2xl">
                <p class="font-body-md text-white font-semibold">Oranges</p>
            </div>
            <div class="selection-check absolute right-3 top-3 h-9 w-9 rounded-full bg-white flex items-center justify-center text-secondary-container shadow-md">
                <span class="material-symbols-outlined">check</span>
            </div>
        </button>
        <button type="button" class="selection-card group relative overflow-hidden rounded-2xl border border-outline-variant bg-surface-container-high p-1 aspect-square" data-item-id="stone-fruits" data-category="Bell Pepper" data-variety="Grade A, Grade B, Grade C">
            <img alt="Freestone"  class="w-full h-full object-cover rounded-2xl" src="/wp-content/uploads/2026/06/Bell-Pepper.png"
/>
            <div class="absolute inset-0 bg-black/10 transition-opacity duration-200"></div>
            <div class="absolute inset-x-0 bottom-0 p-3 bg-gradient-to-t from-black/80 to-transparent rounded-b-2xl">
                <p class="font-body-md text-white font-semibold">Bell Pepper</p>
            </div>
            <div class="selection-check absolute right-3 top-3 h-9 w-9 rounded-full bg-white flex items-center justify-center text-secondary-container shadow-md">
                <span class="material-symbols-outlined">check</span>
            </div>
        </button>
        <button type="button" class="selection-card group relative overflow-hidden rounded-2xl border border-outline-variant bg-surface-container-high p-1 aspect-square" data-item-id="grains" data-category="Mandarin" data-variety="Grade A, Grade B, Grade C">
            <img alt="Premium Wheat" class="w-full h-full object-cover rounded-2xl" src="/wp-content/uploads/2026/06/Mandarin.png"/>
            <div class="absolute inset-0 bg-black/10 transition-opacity duration-200"></div>
            <div class="absolute inset-x-0 bottom-0 p-3 bg-gradient-to-t from-black/80 to-transparent rounded-b-2xl">
                <p class="font-body-md text-white font-semibold">Mandarin</p>
            </div>
            <div class="selection-check absolute right-3 top-3 h-9 w-9 rounded-full bg-white flex items-center justify-center text-secondary-container shadow-md">
                <span class="material-symbols-outlined">check</span>
            </div>
        </button>
        <button type="button" class="selection-card group relative overflow-hidden rounded-2xl border border-outline-variant bg-surface-container-high p-1 aspect-square" data-item-id="herbs" data-category="Water Melons" data-variety="Grade A, Grade B, Grade C">
            <img alt="Fresh Basil" class="w-full h-full object-cover rounded-2xl" src="https://vitaldc.com/wp-content/uploads/2026/06/Untitled-design-10-1.png"/>
            <div class="absolute inset-0 bg-black/10 transition-opacity duration-200"></div>
            <div class="absolute inset-x-0 bottom-0 p-3 bg-gradient-to-t from-black/80 to-transparent rounded-b-2xl">
                <p class="font-body-md text-white font-semibold">Water Melons</p>
            </div>
            <div class="selection-check absolute right-3 top-3 h-9 w-9 rounded-full bg-white flex items-center justify-center text-secondary-container shadow-md">
                <span class="material-symbols-outlined">check</span>
            </div>
        </button>
        <button type="button" class="selection-card group relative overflow-hidden rounded-2xl border border-outline-variant bg-surface-container-high p-1 aspect-square" data-item-id="nuts" data-category="Pomegranate" data-variety="Grade A, Grade B, Grade C">
            <img alt="Pomegranate" class="w-full h-full object-cover rounded-2xl" src="/wp-content/uploads/2026/06/Pomegranate.png"/>
            <div class="absolute inset-0 bg-black/10 transition-opacity duration-200"></div>
            <div class="absolute inset-x-0 bottom-0 p-3 bg-gradient-to-t from-black/80 to-transparent rounded-b-2xl">
                <p class="font-body-md text-white font-semibold">Pomegranate</p>
            </div>
            <div class="selection-check absolute right-3 top-3 h-9 w-9 rounded-full bg-white flex items-center justify-center text-secondary-container shadow-md">
                <span class="material-symbols-outlined">check</span>
            </div>
        </button>
    </div>
</section>
<!-- Product Categories Grid -->

<!-- Product Selection Interface -->
<section class="bg-surface-container-low p-stack-md mb-stack-lg border border-outline-variant/10">
<div class="flex justify-between items-end mb-stack-md border-b border-outline-variant/20 pb-stack-sm">
<div>
<h2 class="font-headline-md text-headline-md text-primary">Configure Selection</h2>
<p class="font-label-md text-on-surface-variant mt-1">Specify variety and weight requirements in metric tons.</p>
</div>

</div>
<!-- Form Rows -->
<form method="post">

<div id="selected-items-list" class="space-y-stack-sm">
<div id="selected-items-placeholder" class="bg-surface p-gutter rounded-2xl border border-dashed border-outline-variant text-on-surface-variant">
                        No products selected yet. Click an image above or click “Add another item” to start your configuration.
                    </div>

</div>

</section>

<button type="button" id="add-another-item-btn" class="flex items-center gap-unit text-label-md font-bold text-secondary-container hover:text-secondary transition-all">
<span class="material-symbols-outlined">add_circle</span>
                        ADD A CUSTOM ITEM
                    </button>

<!-- Bottom Navigation -->
<div class="flex justify-between items-center mt-stack-lg pt-stack-sm border-t border-outline-variant/10">
<button class="flex items-center gap-unit font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all group">
<span class="material-symbols-outlined group-hover:-translate-x-1 transition-transform">arrow_back</span>
                    CANCEL QUOTE
                </button>
<div class="flex gap-gutter">
<button class="px-gutter py-3 text-label-md font-bold text-on-surface-variant border border-outline-variant/30 hover:bg-surface-container transition-all active:scale-95">SAVE AS TEMPLATE</button>
<button name="save_products" class="bg-primary text-on-primary px-stack-md py-4 text-label-md font-bold flex items-center gap-stack-sm transition-all active:scale-95 hover:bg-on-surface-variant">
                        NEXT: LOGISTICS
                        <span class="material-symbols-outlined">arrow_forward</span>
</button>
</form>
</div>
</div>
</main>
</div>
<!-- Footer -->
<footer class="w-full py-stack-sm px-margin-desktop bg-surface-dim flex justify-between items-center mt-auto border-t border-outline-variant/20">
<div class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant/60">
            © 2026 Jana Fresh All Rights Reserved. Crafted by <a href="https://vitaldc.com">VitalDC</a>
        </div>
<div class="flex gap-stack-sm">
<a class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant/60 hover:text-secondary transition-colors" href="#">Privacy Policy</a>
<a class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant/60 hover:text-secondary transition-colors" href="#">Terms of Service</a>
<a class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant/60 hover:text-secondary transition-colors" href="#">Global Trade Compliance</a>
</div>
</footer>
<!-- Interactive script for product rows -->
<script>
        document.addEventListener('DOMContentLoaded', () => {
            const selectionCards = document.querySelectorAll('.selection-card');
            const selectedItemsList = document.getElementById('selected-items-list');
            const placeholder = document.getElementById('selected-items-placeholder');
            const addAnotherItemButton = document.getElementById('add-another-item-btn');

            const selectedItems = new Map();

            function updatePlaceholder() {
                if (selectedItemsList.children.length === 0) {
                    selectedItemsList.appendChild(placeholder);
                } else if (selectedItemsList.contains(placeholder) && selectedItemsList.children.length > 1) {
                    placeholder.remove();
                }
            }

            function createItemRow({ itemId, category, variety, custom = false }) {
const rowKey = Date.now() + Math.floor(Math.random() * 10000);                
const row = document.createElement('div');
                row.className = 'grid grid-cols-12 gap-gutter items-end bg-surface p-gutter border border-outline-variant/10 stat-border selected-item-row';
                row.dataset.itemId = itemId || '';

                const categoryHtml = custom
    ? `<input
            name="products[${rowKey}][name]"
            class="w-full bg-surface border-outline-variant text-body-md py-3 px-4"
            placeholder="Product name"
       >`
    : `<input
            name="products[${rowKey}][name]"
            readonly
            class="w-full bg-surface border-outline-variant text-body-md py-3 px-4"
            value="${category}"
       >`;

               const varietyValues = (variety || '')
    .split(',')
    .map(v => v.trim())
    .filter(Boolean);

const varietyHtml = custom
    ? `<input
            name="products[${rowKey}][grade]"
            class="w-full bg-surface border-outline-variant text-body-md py-3 px-4"
            placeholder="Grade"
       >`
    : varietyValues.length > 1
        ? `<select
                name="products[${rowKey}][grade]"
                class="w-full bg-surface border-outline-variant text-body-md py-3 px-4"
           >
              ${varietyValues.map(v =>
                    `<option value="${v}">${v}</option>`
                ).join('')}
           </select>`
        : `<input
                name="products[${rowKey}][grade]"
                readonly
                class="w-full bg-surface border-outline-variant text-body-md py-3 px-4"
                value="${varietyValues[0] || ''}"
           />`;
                row.innerHTML = `
                    <div class="col-span-4">
                        <label class="block font-label-sm text-label-sm mb-unit text-on-surface-variant">Product Name</label>
                        ${categoryHtml}
                    </div>
                    <div class="col-span-4">
                        <label class="block font-label-sm text-label-sm mb-unit text-on-surface-variant">Grade</label>
                        ${varietyHtml}
                    </div>
                    <div class="col-span-3">
                        <label class="block font-label-sm text-label-sm mb-unit text-on-surface-variant">QUANTITY (TONS)</label>
                        <div class="relative">
                           <input
    name="products[${rowKey}][qty]"
    class="w-full bg-surface border-outline-variant text-body-md py-3 px-4 focus:ring-secondary-container focus:border-secondary-container"
    placeholder="0.00"
    type="number"
    step="0.01"
/>
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 font-label-sm text-on-surface-variant/40">MT</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <button type="button" class="material-symbols-outlined text-outline hover:text-error transition-colors p-2">delete</button>
                    </div>
                `;

                const deleteButton = row.querySelector('button');
                deleteButton.addEventListener('click', () => {
                    if (itemId && selectedItems.has(itemId)) {
                        selectedItems.delete(itemId);
                        const card = document.querySelector(`.selection-card[data-item-id="${itemId}"]`);
                        if (card) card.classList.remove('selected');
                    }
                    row.style.opacity = '0';
                    row.style.transform = 'translateY(10px)';
                    setTimeout(() => row.remove(), 200);
                    setTimeout(updatePlaceholder, 210);
                });

                selectedItemsList.appendChild(row);
                if (placeholder.parentElement) placeholder.remove();
                return row;
            }

            function toggleSelection(card) {
                const itemId = card.dataset.itemId;
                const category = card.dataset.category;
                const variety = card.dataset.variety;
                const isSelected = selectedItems.has(itemId);

                if (isSelected) {
                    selectedItems.delete(itemId);
                    card.classList.remove('selected');
                    const existingRow = selectedItemsList.querySelector(`[data-item-id="${itemId}"]`);
                    if (existingRow) existingRow.remove();
                } else {
                    selectedItems.set(itemId, { category, variety });
                    card.classList.add('selected');
                    createItemRow({ itemId, category, variety });
                }
                updatePlaceholder();
            }

            selectionCards.forEach(card => {
                card.addEventListener('click', () => toggleSelection(card));
            });

            addAnotherItemButton.addEventListener('click', () => {
                createItemRow({ category: 'Custom', variety: '', custom: true });
                updatePlaceholder();
            });

            updatePlaceholder();
        });
    </script>

</body></html>
