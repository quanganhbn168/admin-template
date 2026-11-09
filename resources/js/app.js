import '@tabler/core/dist/js/tabler.min.js';

// Show / hide password: any <a data-toggle-password> inside an .input-group
document.addEventListener('click', (event) => {
    const toggle = event.target.closest('[data-toggle-password]');
    if (!toggle) return;

    event.preventDefault();

    const input = toggle.closest('.input-group').querySelector('input');
    const show = input.type === 'password';

    input.type = show ? 'text' : 'password';
    toggle.title = toggle.ariaLabel = show ? 'Hide password' : 'Show password';
    toggle.querySelector('i').className = `ti ${show ? 'ti-eye-off' : 'ti-eye'} fs-2`;
});
