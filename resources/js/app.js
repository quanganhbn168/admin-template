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

// <x-form.editor> -> HugeRTE rich text editor (library loaded by <x-lib name="editor">).
document.querySelectorAll('textarea[data-editor]').forEach((el) => {
    if (!window.hugeRTE) return;

    const options = {
        selector: `#${el.id}`,
        height: Number(el.dataset.height) || 300,
        menubar: false,
        statusbar: false,
        plugins: ['advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen', 'table', 'wordcount'],
        toolbar: 'undo redo | blocks | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link table | code fullscreen',
        content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; font-size: 14px; }',
    };

    if (document.documentElement.getAttribute('data-bs-theme') === 'dark') {
        options.skin = 'oxide-dark';
        options.content_css = 'dark';
    }

    window.hugeRTE.init(options);
});

// <x-calendar> -> FullCalendar (library loaded by <x-lib name="fullcalendar">).
document.querySelectorAll('[data-calendar]').forEach((el) => {
    if (!window.FullCalendar) return;

    new window.FullCalendar.Calendar(el, {
        initialView: el.dataset.view || 'dayGridMonth',
        locale: document.documentElement.lang || 'en',
        firstDay: 1,
        height: 'auto',
        headerToolbar: { left: 'prev,next today', center: 'title', right: 'dayGridMonth,timeGridWeek,listWeek' },
        buttonText: { ...JSON.parse(el.dataset.buttons || '{}') },
        events: JSON.parse(el.dataset.events || '[]'),
    }).render();
});

// <x-dropzone> -> Dropzone uploader (library loaded by <x-lib name="dropzone">).
if (window.Dropzone) {
    window.Dropzone.autoDiscover = false;

    document.querySelectorAll('form[data-dropzone]').forEach((el) => {
        const dropzone = new window.Dropzone(el, {
            url: el.dataset.url,
            paramName: 'file',
            maxFilesize: Number(el.dataset.maxSize) || 5,
            acceptedFiles: el.dataset.accepted || null,
            headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '', Accept: 'application/json' },
            ...JSON.parse(el.dataset.dict || '{}'),
        });

        // Show the server's validation message instead of a bare status code.
        dropzone.on('error', (file, response) => {
            const message = typeof response === 'string' ? response : response?.errors?.file?.[0] ?? response?.message;
            const target = file.previewElement?.querySelector('[data-dz-errormessage]');
            if (message && target) target.textContent = message;
        });

        dropzone.on('success', (file, response) => el.dispatchEvent(new CustomEvent('dropzone:uploaded', { detail: response, bubbles: true })));
    });
}

// <x-chart> renders [data-chart]: load ApexCharts only on pages that need it.
if (document.querySelector('[data-chart]')) {
    import('./charts.js');
}

// <x-map> renders [data-vector-map]: same idea for the world map.
if (document.querySelector('[data-vector-map]')) {
    import('./map.js');
}
