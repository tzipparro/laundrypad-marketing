
import './style.scss';

document.addEventListener('DOMContentLoaded', () => {
    initMobileNavigation();
    initPricingToggle();
    initFaqAccordion();
    updateCopyrightYear();
});

function initMobileNavigation() {
    const toggleButton = document.querySelector('.mobile-menu-toggle button');
    const drawer = document.getElementById('primary-navigation-drawer');
    if (!toggleButton || !drawer) {
        return;
    }

    const closeButton = drawer.querySelector('.drawer-close button');
    const focusableSelectors = 'a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])';
    const focusableElements = () => Array.from(drawer.querySelectorAll(focusableSelectors));

    const openDrawer = () => {
        drawer.hidden = false;
        drawer.setAttribute('aria-hidden', 'false');
        toggleButton.setAttribute('aria-expanded', 'true');
        document.body.classList.add('nav-open');
        const first = focusableElements()[0];
        if (first) {
            first.focus();
        }
        document.addEventListener('keydown', handleKeydown);
    };

    const closeDrawer = () => {
        drawer.hidden = true;
        drawer.setAttribute('aria-hidden', 'true');
        toggleButton.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('nav-open');
        toggleButton.focus();
        document.removeEventListener('keydown', handleKeydown);
    };

    const handleKeydown = (event) => {
        if (event.key === 'Escape') {
            event.preventDefault();
            closeDrawer();
            return;
        }

        if (event.key === 'Tab') {
            const focusables = focusableElements();
            if (!focusables.length) {
                return;
            }

            const first = focusables[0];
            const last = focusables[focusables.length - 1];
            if (event.shiftKey && document.activeElement === first) {
                event.preventDefault();
                last.focus();
            } else if (!event.shiftKey && document.activeElement === last) {
                event.preventDefault();
                first.focus();
            }
        }
    };

    toggleButton.addEventListener('click', () => {
        if (drawer.hidden) {
            openDrawer();
        } else {
            closeDrawer();
        }
    });

    closeButton?.addEventListener('click', closeDrawer);
    drawer.addEventListener('click', (event) => {
        if (event.target === drawer) {
            closeDrawer();
        }
    });
}

function initPricingToggle() {
    const toggle = document.querySelector('[data-pricing-toggle]');
    if (!toggle) {
        return;
    }

    const pricingCards = document.querySelectorAll('[data-plan-price]');

    const updatePricing = (plan) => {
        pricingCards.forEach((card) => {
            const priceEl = card.querySelector('.price-value');
            if (!priceEl) {
                return;
            }
            const price = card.dataset[`${plan}Price`];
            if (price) {
                priceEl.textContent = price;
            }
            const frequencyEl = card.querySelector('.price-frequency');
            const frequency = card.dataset[`${plan}Frequency`];
            if (frequencyEl && frequency) {
                frequencyEl.textContent = frequency;
            }
        });
    };

    toggle.addEventListener('click', (event) => {
        const button = event.target.closest('.toggle-option');
        if (!button) {
            return;
        }
        const plan = button.dataset.plan;
        if (!plan) {
            return;
        }
        toggle.dataset.pricingToggle = plan;
        updateActiveToggle(toggle, button);
        updatePricing(plan);
    });

    updatePricing(toggle.dataset.pricingToggle || 'monthly');
}

function updateActiveToggle(toggle, activeButton) {
    const buttons = toggle.querySelectorAll('.toggle-option');
    buttons.forEach((btn) => {
        btn.classList.toggle('is-active', btn === activeButton);
    });
}

function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');
    if (!faqItems.length) {
        return;
    }

    faqItems.forEach((details) => {
        details.addEventListener('toggle', () => {
            if (details.open) {
                faqItems.forEach((other) => {
                    if (other !== details) {
                        other.open = false;
                    }
                });
            }
        });
    });
}

function updateCopyrightYear() {
    const yearEl = document.querySelector('.copyright-year');
    if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }
}
