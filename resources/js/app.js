import '@tabler/core/dist/js/tabler.min.js';

// Show / hide password: any <a data-toggle-password> inside an .input-group.
// Labels come from data-show-label / data-hide-label so they stay translatable.
document.addEventListener('click', (event) => {
    const toggle = event.target.closest('[data-toggle-password]');
    if (!toggle) return;

    event.preventDefault();

    const input = toggle.closest('.input-group').querySelector('input');
    const show = input.type === 'password';
    const label = show ? toggle.dataset.hideLabel : toggle.dataset.showLabel;

    input.type = show ? 'text' : 'password';
    toggle.title = label;
    toggle.setAttribute('aria-label', label);
    toggle.querySelector('i').className = `ti ${show ? 'ti-eye-off' : 'ti-eye'} fs-2`;
});
