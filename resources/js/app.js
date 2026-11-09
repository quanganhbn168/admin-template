import { Toast } from '@tabler/core';

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

// <x-toast> renders with data-auto-show: display it as soon as the page is ready.
document.querySelectorAll('.toast[data-auto-show]').forEach((el) => Toast.getOrCreateInstance(el).show());

// <x-form.select search> -> TomSelect (library loaded by <x-lib name="select">).
document.querySelectorAll('select[data-tom-select]').forEach((el) => {
    window.TomSelect && new window.TomSelect(el, { copyClassesToDropdown: false, dropdownParent: 'body', controlInput: '<input>' });
});

// <x-form.slider> -> noUiSlider (library loaded by <x-lib name="slider">); value goes into a hidden input.
document.querySelectorAll('[data-slider]').forEach((el) => {
    if (!window.noUiSlider) return;
    const { min, max, step, start, target } = el.dataset;
    window.noUiSlider.create(el, { start: Number(start), step: Number(step), connect: [true, false], range: { min: Number(min), max: Number(max) } });
    el.noUiSlider.on('update', (values) => {
        const value = Math.round(values[0] * 100) / 100;
        document.getElementById(target).value = value;
        document.querySelector(`[data-slider-output="${target}"]`).textContent = value;
    });
});

// <x-chart> renders [data-chart]: load ApexCharts only on pages that need it.
if (document.querySelector('[data-chart]')) {
    import('./charts.js');
}

// <x-map> renders [data-vector-map]: same idea for the world map.
if (document.querySelector('[data-vector-map]')) {
    import('./map.js');
}
