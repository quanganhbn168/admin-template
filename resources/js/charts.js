// Loaded on demand (see app.js) only on pages that contain a <x-chart>.
// Charts read their configuration from the data-chart attribute (JSON built by the component).
import ApexCharts from 'apexcharts';

const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const isObject = (v) => v && typeof v === 'object' && !Array.isArray(v);
const merge = (base, extra) => {
    const out = { ...base };
    for (const [key, value] of Object.entries(extra ?? {})) {
        out[key] = isObject(value) && isObject(base[key]) ? merge(base[key], value) : value;
    }
    return out;
};

// Look and feel of Tabler's own charts: inherited font, thin lines, dashed grid, no toolbar.
const defaults = {
    chart: { fontFamily: 'inherit', toolbar: { show: false }, animations: { enabled: !reduceMotion } },
    grid: { strokeDashArray: 4 },
    dataLabels: { enabled: false },
    legend: { show: false },
    tooltip: { theme: 'light' },
};

window.tablerCharts ??= {};

document.querySelectorAll('[data-chart]').forEach((el) => {
    const config = merge(defaults, JSON.parse(el.dataset.chart));
    const chart = new ApexCharts(el, config);
    chart.render();
    window.tablerCharts[el.id || `chart-${Object.keys(window.tablerCharts).length}`] = chart;
});
