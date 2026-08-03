<?php
$current_path = rtrim( parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ), '/' );
if ( '' === $current_path ) {
    $current_path = '/';
}

$step_config = array(
    '/start' => array(
        'step' => 'step-1',
        'prev' => null,
        'next' => '/start/tiers/',
        'prev_label' => 'Back to Start',
        'next_label' => 'Continue to Step 02',
    ),
    '/start/tiers' => array(
        'step' => 'step-2',
        'prev' => '/start',
        'next' => '/start/package-addons',
        'prev_label' => 'Return to Step 01',
        'next_label' => 'Continue to Step 03',
    ),
    '/start/package-addons' => array(
        'step' => 'step-3',
        'prev' => '/start/tiers/',
        'next' => '/start/review',
        'prev_label' => 'Return to Step 02',
        'next_label' => 'Continue to Step 04',
    ),
    '/start/review' => array(
        'step' => 'step-4',
        'prev' => '/start/package-addons',
        'next' => null,
        'prev_label' => 'Return to Step 03',
        'next_label' => 'Finalize Protocol',
    ),
);

$active_step = $step_config[ $current_path ] ?? $step_config['/start'];
?>

<!-- Bottom Action Bar (Shared Component: BottomNavBar Logic) -->
<footer class="fixed inset-x-0 bottom-0 z-50 w-full bg-surface-deep shadow-2xl border-t border-white/10">
<div class="w-full max-w-container-max mx-auto h-20 px-gutter flex justify-between items-center gap-4">
<button id="onboarding-prev" class="flex items-center gap-3 group disabled:opacity-40 disabled:pointer-events-none" type="button" <?php echo null === $active_step['prev'] ? 'disabled' : ''; ?>>
<div class="w-10 h-10 border border-outline-variant flex items-center justify-center group-hover:border-primary transition-colors">
<span class="material-symbols-outlined text-outline-variant group-hover:text-primary">arrow_back</span>
</div>
<div class="flex flex-col items-start">
<span class="font-label-caps text-[10px] text-outline uppercase">Previous Stage</span>
<span class="font-label-caps text-label-caps text-white group-hover:text-primary transition-colors uppercase"><?php echo esc_html( $active_step['prev_label'] ); ?></span>
</div>
</button>
<div class="hidden md:flex items-center gap-stack-lg border-x border-glass px-12 h-full">
<div class="text-center">
<span class="font-label-caps text-[10px] text-outline uppercase block mb-1">Protocol Timer</span>
<span id="onboarding-stopwatch" class="font-label-caps text-label-caps text-white">00:00:00</span>
</div>
</div>
<button id="onboarding-next" class="bg-export-orange hover:bg-white text-on-primary-fixed font-label-caps text-label-caps font-bold px-8 py-3 flex items-center gap-4 transition-all active:scale-95 disabled:opacity-70" type="button">
<span id="next-label" class="uppercase tracking-widest"><?php echo esc_html( $active_step['next_label'] ); ?></span>
<span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
</footer>

<script>
(function () {
    const currentPath = window.location.pathname.replace(/\/+$/, '') || '/';
    const stepConfig = {
        '/start': { step: 'step-1', prev: null, next: '/start/tiers/' },
        '/start/tiers': { step: 'step-2', prev: '/start', next: '/start/package-addons' },
        '/start/package-addons': { step: 'step-3', prev: '/start/tiers/', next: '/start/review' },
        '/start/review': { step: 'step-4', prev: '/start/package-addons', next: null }
    };
    const currentStep = stepConfig[currentPath] || stepConfig['/start'];

    const prevBtn = document.getElementById('onboarding-prev');
    const nextBtn = document.getElementById('onboarding-next');
    const nextLabel = document.getElementById('next-label');
    const stopwatch = document.getElementById('onboarding-stopwatch');

    if (prevBtn && currentStep.prev) {
        prevBtn.addEventListener('click', function () {
            window.location.href = currentStep.prev;
        });
    }

    const orderedSteps = ['step-1', 'step-2', 'step-3', 'step-4'];
    const completedStep = Number(localStorage.getItem('vitaldc_onboarding_step') || 0);
    const orderId = localStorage.getItem('vitaldc_onboarding_order_id');
    const currentIndex = orderedSteps.indexOf(currentStep.step);

    if (currentIndex > 0 && (!orderId || completedStep < currentIndex)) {
        if (currentStep.step === 'step-2') {
            window.location.href = '/start';
            return;
        }
        if (currentStep.step === 'step-3') {
            window.location.href = '/start/tiers/';
            return;
        }
        if (currentStep.step === 'step-4') {
            window.location.href = '/start/package-addons';
            return;
        }
    }

    if (stopwatch) {
        const startedAt = Number(sessionStorage.getItem('vitaldc_onboarding_timer_started') || Date.now());
        if (!sessionStorage.getItem('vitaldc_onboarding_timer_started')) {
            sessionStorage.setItem('vitaldc_onboarding_timer_started', String(startedAt));
        }

        const formatTime = function (seconds) {
            const hrs = String(Math.floor(seconds / 3600)).padStart(2, '0');
            const mins = String(Math.floor((seconds % 3600) / 60)).padStart(2, '0');
            const secs = String(seconds % 60).padStart(2, '0');
            return `${hrs}:${mins}:${secs}`;
        };

        const tick = function () {
            const now = Math.floor((Date.now() - startedAt) / 1000);
            if (stopwatch) {
                stopwatch.textContent = formatTime(now);
            }
        };

        tick();
        setInterval(tick, 1000);
    }

    const collectPayload = function () {
        if (currentStep.step === 'step-1') {
            const form = document.querySelector('form');
            const payload = {};
            if (form) {
                form.querySelectorAll('input').forEach(function (input) {
                    if (input.name) {
                        payload[input.name] = input.value;
                    }
                });
            }
            return payload;
        }

        if (currentStep.step === 'step-2') {
            const activeCard = document.querySelector('.package-card.active-package');
            const packageName = activeCard ? (activeCard.querySelector('h3')?.textContent || '').trim() : '';
            return { package: packageName };
        }

        if (currentStep.step === 'step-3') {
            const addons = Array.from(document.querySelectorAll('.group[data-selected="true"]')).map(function (card) {
                return (card.querySelector('h3')?.textContent || '').trim();
            }).filter(Boolean);
            return { addons: addons };
        }

        if (currentStep.step === 'step-4') {
            const agreedTerms = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(function (input) {
                return (input.closest('label')?.querySelector('p')?.textContent || '').trim();
            }).filter(Boolean);
            return { agreed_terms: agreedTerms };
        }

        return {};
    };

    const saveStep = async function () {
        const payload = collectPayload();

        if (nextBtn) {
            nextBtn.disabled = true;
            if (nextLabel) {
                nextLabel.textContent = 'Preparing...';
            }
        }

        try {
            const response = await fetch('<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                },
                body: new URLSearchParams({
                    action: currentStep.step === 'step-1' ? 'create_draft_architecture_order' : 'save_onboarding_step_data',
                    step: currentStep.step,
                    payload: JSON.stringify(payload),
                    order_id: orderId || ''
                })
            });

            const result = await response.json();

            if (!result || !result.success) {
                throw new Error(result && result.data && result.data.message ? result.data.message : 'Unable to continue');
            }

            if (result.data && result.data.order_id) {
                localStorage.setItem('vitaldc_onboarding_order_id', String(result.data.order_id));
            }

            if (currentStep.step === 'step-1') {
                localStorage.setItem('vitaldc_onboarding_step', '1');
            } else {
                localStorage.setItem('vitaldc_onboarding_step', String(currentIndex + 1));
            }

            if (currentStep.step === 'step-4') {
                const orderIdForThankYou = localStorage.getItem('vitaldc_onboarding_order_id');
                const thankYouUrl = orderIdForThankYou ? '/thank-you/?order_id=' + encodeURIComponent(orderIdForThankYou) : '/thank-you/';
                window.location.href = thankYouUrl;
                return;
            }

            window.location.href = currentStep.next;
        } catch (error) {
            nextBtn.disabled = false;
            if (nextLabel) {
                nextLabel.textContent = 'Retry Flow';
            }
            console.error(error);
        }
    };

    if (nextBtn) {
        nextBtn.addEventListener('click', function (event) {
            event.preventDefault();
            saveStep();
        });
    }
})();
</script>