document.addEventListener('DOMContentLoaded', () => {
    const shell = document.querySelector('.login-container');

    if (!shell) {
        return;
    }

    const cards = Array.from(document.querySelectorAll('.auth-card'));

    const setActiveCard = (targetMode) => {
        const mode = targetMode === 'signup' ? 'signup' : 'login';

        shell.classList.toggle('signup-mode', mode === 'signup');
        shell.classList.toggle('is-signup', mode === 'signup');

        cards.forEach((card) => {
            const isActive = card.dataset.authCard === mode;

            card.classList.toggle('is-active', isActive);
            card.setAttribute('aria-hidden', String(!isActive));
        });

        if (window.history && window.history.replaceState) {
            const url = new URL(window.location.href);

            if (mode === 'signup') {
                url.searchParams.set('mode', 'signup');
            } else {
                url.searchParams.delete('mode');
            }

            window.history.replaceState({}, '', url);
        }
    };

    const toggleButtons = document.querySelectorAll('[data-auth-toggle]');

    toggleButtons.forEach((button) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const nextMode = button.dataset.authToggle === 'signup' ? 'signup' : 'login';
            setActiveCard(nextMode);
        });
    });

    const passwordButtons = document.querySelectorAll('[data-password-toggle]');

    passwordButtons.forEach((button) => {
        const fieldId = button.dataset.passwordToggle;
        const input = document.getElementById(fieldId);

        if (!input) {
            return;
        }

        const updateButtonState = (showPassword) => {
            button.setAttribute('aria-label', showPassword ? 'Hide password' : 'Show password');
            button.classList.toggle('is-visible', showPassword);
        };

        button.addEventListener('click', () => {
            const shouldShowPassword = input.type === 'password';

            input.type = shouldShowPassword ? 'text' : 'password';
            updateButtonState(shouldShowPassword);
        });

        updateButtonState(input.type === 'text');
    });

    const activeCard = document.querySelector('.auth-card.is-active');

    if (activeCard) {
        setActiveCard(activeCard.dataset.authCard || 'login');
    }

    const loadingForms = document.querySelectorAll('[data-loading-form]');

    loadingForms.forEach((form) => {
        form.addEventListener('submit', () => {
            const modal = document.getElementById('loadingModal');
            const statusText = document.getElementById('loadingText');

            if (!modal || !statusText) {
                return;
            }

            statusText.textContent = form.dataset.loadingText || 'Loading...';
            modal.classList.add('is-visible');
            modal.setAttribute('aria-hidden', 'false');
        });
    });
});
