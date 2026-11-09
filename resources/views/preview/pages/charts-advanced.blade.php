<x-preview.page :title='"Charts advanced"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Charts advanced</h1>

                  <div class="text-secondary mt-1">Charts that go past a single series: two scales in one plot, threshold and marker lines, a brush to zoom with, and a group of charts that move together.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/chart" target="_blank" rel="noopener" class="link-secondary">
                    Docs
                    <!-- Download SVG icon from http://tabler.io/icons/icon/external-link -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-sm icon-inline">
                      <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                      <path d="M11 13l9 -9" />
                      <path d="M15 4h5v5" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="row row-cards">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Two y-axes</h2>
                      <p class="card-subtitle">Plot values with different units together. Bind each axis to a series with the <code>yaxis.seriesName</code> chart option and move the second one to the right with <code>opposite</code>.</p>

                      <div id="chart-revenue-vs-orders" class="position-relative" role="img" aria-label="Revenue in dollars and order count per month"></div>
                      <style>
                        :root {
                          --chart-revenue-vs-orders-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-revenue-vs-orders-color-1: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Threshold line</h2>
                      <p class="card-subtitle">Draw a target or a limit across the plot with <code>annotations.yaxis</code>, so a reader sees at a glance which points miss it.</p>

                      <div id="chart-uptime-sla" class="position-relative" role="img" aria-label="Monthly uptime against the 99.9 percent service level target"></div>
                      <style>
                        :root {
                          --chart-uptime-sla-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Marker lines</h2>
                      <p class="card-subtitle">Mark the moment something happened with <code>annotations.xaxis</code> — a release, a campaign, an incident.</p>

                      <div id="chart-sales-with-markers" class="position-relative" role="img" aria-label="Monthly sales with campaign start markers"></div>
                      <style>
                        :root {
                          --chart-sales-with-markers-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-sales-with-markers-fill-0: color-mix(in srgb, transparent, var(--tblr-primary) 16%);
                        }
                      </style>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Brush and zoom</h2>
                      <p class="card-subtitle">The small chart below picks the range shown above. Point it at the main chart id with <code>chart.brush</code> and render the main chart first.</p>

                      <div id="chart-traffic-zoom" class="position-relative" role="img" aria-label="Sessions over 90 days, zoomed to the selected range"></div>
                      <style>
                        :root {
                          --chart-traffic-zoom-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-traffic-zoom-fill-0: color-mix(in srgb, transparent, var(--tblr-primary) 16%);
                        }
                      </style>

                      <div id="chart-traffic-brush" class="position-relative" role="img" aria-label="Range selector for the sessions chart"></div>
                      <style>
                        :root {
                          --chart-traffic-brush-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Synced charts</h2>
                      <p class="card-subtitle">Charts that share a <code>chart.group</code> name follow one another — hover or zoom on one and the rest do the same.</p>

                      <div id="chart-synced-visits" class="position-relative" role="img" aria-label="Daily visits"></div>
                      <style>
                        :root {
                          --chart-synced-visits-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-synced-visits-fill-0: color-mix(in srgb, transparent, var(--tblr-primary) 16%);
                        }
                      </style>

                      <div id="chart-synced-signups" class="position-relative" role="img" aria-label="Daily sign-ups"></div>
                      <style>
                        :root {
                          --chart-synced-signups-color-0: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                        }
                      </style>

                      <div id="chart-synced-revenue" class="position-relative" role="img" aria-label="Daily revenue"></div>
                      <style>
                        :root {
                          --chart-synced-revenue-color-0: color-mix(in srgb, transparent, var(--tblr-azure) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
<x-slot:scripts>
@verbatim
<script src="/tabler/libs/apexcharts/dist/apexcharts.min.js" defer></script>
<script>
      ;(function () {
        const chartKey = 'chart-revenue-vs-orders'
        const elementId = 'chart-revenue-vs-orders'
        const config = {
          chart: { id: 'revenue-vs-orders', type: 'line', fontFamily: 'inherit', height: 256, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: [0, 2], lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'Revenue', type: 'column', data: [12400, 14100, 13200, 16800, 18300, 17600, 19400, 21200, 20100, 23400, 25100, 27800] },
            { name: 'Orders', type: 'line', data: [186, 204, 197, 242, 261, 253, 274, 298, 286, 321, 340, 372] },
          ],
          grid: { strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] },
          yaxis: [
            { seriesName: 'Revenue', title: { text: 'Revenue ($)', offsetX: -8, style: { fontSize: '11px', fontWeight: 500, fontFamily: 'inherit' } }, labels: { padding: 4 } },
            { seriesName: 'Orders', opposite: true, title: { text: 'Orders', offsetX: 8, style: { fontSize: '11px', fontWeight: 500, fontFamily: 'inherit' } }, labels: { padding: 4 } },
          ],
          colors: ['var(--chart-revenue-vs-orders-color-0)', 'var(--chart-revenue-vs-orders-color-1)'],
          legend: { show: true, position: 'bottom', offsetY: 12, markers: { size: 5, strokeWidth: 0, shape: 'circle' }, itemMargin: { horizontal: 8, vertical: 8 } },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const isEmpty = (val) => val == null || Number.isNaN(val)

        const formatters = {
          'thousands': (val) => (isEmpty(val) ? '' : val.toLocaleString('en-US')),
          'suffix-k': (val) => (isEmpty(val) ? '' : val + 'K'),
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            config.chart = { ...config.chart, animations: { enabled: false } }
          }

          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const chartKey = 'chart-uptime-sla'
        const elementId = 'chart-uptime-sla'
        const config = {
          chart: { id: 'uptime-sla', type: 'line', fontFamily: 'inherit', height: 256, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'straight' },
          series: [{ name: 'Uptime', data: [99.98, 99.95, 99.87, 99.99, 100, 99.92, 99.76, 99.94, 99.97, 99.99, 99.91, 99.96] }],
          annotations: { yaxis: [{ y: 99.9, strokeDashArray: 4, borderColor: 'var(--tblr-red)', label: { text: 'SLA 99.9%', borderWidth: 0, position: 'left', textAnchor: 'start', offsetX: 8, style: { background: 'var(--tblr-red)', color: 'var(--tblr-white)', fontSize: '11px', fontFamily: 'inherit' } } }] },
          grid: { strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] },
          yaxis: [{ min: 99, max: 100, title: { text: 'Uptime (%)', offsetX: -8, style: { fontSize: '11px', fontWeight: 500, fontFamily: 'inherit' } }, labels: { padding: 4 } }],
          colors: ['var(--chart-uptime-sla-color-0)'],
          legend: { show: false },
          markers: { size: 2 },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const isEmpty = (val) => val == null || Number.isNaN(val)

        const formatters = {
          'thousands': (val) => (isEmpty(val) ? '' : val.toLocaleString('en-US')),
          'suffix-k': (val) => (isEmpty(val) ? '' : val + 'K'),
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            config.chart = { ...config.chart, animations: { enabled: false } }
          }

          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const chartKey = 'chart-sales-with-markers'
        const elementId = 'chart-sales-with-markers'
        const config = {
          chart: { id: 'sales-with-markers', type: 'area', fontFamily: 'inherit', height: 256, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-sales-with-markers-fill-0)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [{ name: 'Sales', data: [128, 141, 137, 189, 232, 214, 198, 205, 264, 301, 288, 312] }],
          annotations: {
            xaxis: [
              { x: 'Apr', strokeDashArray: 4, borderColor: 'var(--tblr-azure)', label: { text: 'Spring campaign', borderWidth: 0, position: 'top', textAnchor: 'middle', offsetX: 0, style: { background: 'var(--tblr-azure)', color: 'var(--tblr-white)', fontSize: '11px', fontFamily: 'inherit' } } },
              { x: 'Sep', strokeDashArray: 4, borderColor: 'var(--tblr-purple)', label: { text: 'Relaunch', borderWidth: 0, position: 'top', textAnchor: 'middle', offsetX: 0, style: { background: 'var(--tblr-purple)', color: 'var(--tblr-white)', fontSize: '11px', fontFamily: 'inherit' } } },
            ],
          },
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-sales-with-markers-color-0)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const isEmpty = (val) => val == null || Number.isNaN(val)

        const formatters = {
          'thousands': (val) => (isEmpty(val) ? '' : val.toLocaleString('en-US')),
          'suffix-k': (val) => (isEmpty(val) ? '' : val + 'K'),
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            config.chart = { ...config.chart, animations: { enabled: false } }
          }

          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const chartKey = 'chart-traffic-zoom'
        const elementId = 'chart-traffic-zoom'
        const config = {
          chart: { id: 'traffic-zoom', type: 'area', fontFamily: 'inherit', height: 176, parentHeightOffset: 0, toolbar: { show: true }, animations: { enabled: false } },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-traffic-zoom-fill-0)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            {
              name: 'Sessions',
              data: [
                1847, 1768, 1792, 2003, 2081, 2099, 2261, 2441, 2268, 2483, 2367, 2245, 2458, 2278, 2236, 2044, 1871, 1950, 2134, 2270, 2377, 2200, 2255, 2260, 2141, 2312, 2137, 2270, 2128, 1935, 2032, 2138, 2297, 2436, 2583, 2691, 2502, 2441, 2300, 2373, 2329, 2251, 2379, 2307, 2470, 2500, 2380, 2370, 2408, 2378,
                2299, 2448, 2496, 2441, 2538, 2581, 2544, 2581, 2477, 2309, 2354, 2370, 2357, 2277, 2263, 2092, 2212, 2093, 1940, 2093, 2143, 2198, 2385, 2286, 2284, 2245, 2306, 2388, 2281, 2158, 2213, 2009, 1924, 2047, 2164, 2142, 2092, 2102, 2005, 1923,
              ],
            },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2026-01-01',
            '2026-01-02',
            '2026-01-03',
            '2026-01-04',
            '2026-01-05',
            '2026-01-06',
            '2026-01-07',
            '2026-01-08',
            '2026-01-09',
            '2026-01-10',
            '2026-01-11',
            '2026-01-12',
            '2026-01-13',
            '2026-01-14',
            '2026-01-15',
            '2026-01-16',
            '2026-01-17',
            '2026-01-18',
            '2026-01-19',
            '2026-01-20',
            '2026-01-21',
            '2026-01-22',
            '2026-01-23',
            '2026-01-24',
            '2026-01-25',
            '2026-01-26',
            '2026-01-27',
            '2026-01-28',
            '2026-01-29',
            '2026-01-30',
            '2026-01-31',
            '2026-02-01',
            '2026-02-02',
            '2026-02-03',
            '2026-02-04',
            '2026-02-05',
            '2026-02-06',
            '2026-02-07',
            '2026-02-08',
            '2026-02-09',
            '2026-02-10',
            '2026-02-11',
            '2026-02-12',
            '2026-02-13',
            '2026-02-14',
            '2026-02-15',
            '2026-02-16',
            '2026-02-17',
            '2026-02-18',
            '2026-02-19',
            '2026-02-20',
            '2026-02-21',
            '2026-02-22',
            '2026-02-23',
            '2026-02-24',
            '2026-02-25',
            '2026-02-26',
            '2026-02-27',
            '2026-02-28',
            '2026-03-01',
            '2026-03-02',
            '2026-03-03',
            '2026-03-04',
            '2026-03-05',
            '2026-03-06',
            '2026-03-07',
            '2026-03-08',
            '2026-03-09',
            '2026-03-10',
            '2026-03-11',
            '2026-03-12',
            '2026-03-13',
            '2026-03-14',
            '2026-03-15',
            '2026-03-16',
            '2026-03-17',
            '2026-03-18',
            '2026-03-19',
            '2026-03-20',
            '2026-03-21',
            '2026-03-22',
            '2026-03-23',
            '2026-03-24',
            '2026-03-25',
            '2026-03-26',
            '2026-03-27',
            '2026-03-28',
            '2026-03-29',
            '2026-03-30',
            '2026-03-31',
          ],
          colors: ['var(--chart-traffic-zoom-color-0)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const isEmpty = (val) => val == null || Number.isNaN(val)

        const formatters = {
          'thousands': (val) => (isEmpty(val) ? '' : val.toLocaleString('en-US')),
          'suffix-k': (val) => (isEmpty(val) ? '' : val + 'K'),
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            config.chart = { ...config.chart, animations: { enabled: false } }
          }

          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const chartKey = 'chart-traffic-brush'
        const elementId = 'chart-traffic-brush'
        const config = {
          chart: {
            id: 'traffic-brush',
            type: 'line',
            fontFamily: 'inherit',
            height: 80,
            parentHeightOffset: 0,
            toolbar: { show: false },
            animations: { enabled: false },
            brush: { enabled: true, target: 'traffic-zoom' },
            selection: { enabled: true, xaxis: { min: 1770681600000, max: 1773273600000 }, fill: { color: 'var(--tblr-primary)', opacity: 0.16 }, stroke: { color: 'var(--tblr-primary)', width: 1, opacity: 1, dashArray: 0 } },
          },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            {
              name: 'Sessions',
              data: [
                1847, 1768, 1792, 2003, 2081, 2099, 2261, 2441, 2268, 2483, 2367, 2245, 2458, 2278, 2236, 2044, 1871, 1950, 2134, 2270, 2377, 2200, 2255, 2260, 2141, 2312, 2137, 2270, 2128, 1935, 2032, 2138, 2297, 2436, 2583, 2691, 2502, 2441, 2300, 2373, 2329, 2251, 2379, 2307, 2470, 2500, 2380, 2370, 2408, 2378,
                2299, 2448, 2496, 2441, 2538, 2581, 2544, 2581, 2477, 2309, 2354, 2370, 2357, 2277, 2263, 2092, 2212, 2093, 1940, 2093, 2143, 2198, 2385, 2286, 2284, 2245, 2306, 2388, 2281, 2158, 2213, 2009, 1924, 2047, 2164, 2142, 2092, 2102, 2005, 1923,
              ],
            },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2026-01-01',
            '2026-01-02',
            '2026-01-03',
            '2026-01-04',
            '2026-01-05',
            '2026-01-06',
            '2026-01-07',
            '2026-01-08',
            '2026-01-09',
            '2026-01-10',
            '2026-01-11',
            '2026-01-12',
            '2026-01-13',
            '2026-01-14',
            '2026-01-15',
            '2026-01-16',
            '2026-01-17',
            '2026-01-18',
            '2026-01-19',
            '2026-01-20',
            '2026-01-21',
            '2026-01-22',
            '2026-01-23',
            '2026-01-24',
            '2026-01-25',
            '2026-01-26',
            '2026-01-27',
            '2026-01-28',
            '2026-01-29',
            '2026-01-30',
            '2026-01-31',
            '2026-02-01',
            '2026-02-02',
            '2026-02-03',
            '2026-02-04',
            '2026-02-05',
            '2026-02-06',
            '2026-02-07',
            '2026-02-08',
            '2026-02-09',
            '2026-02-10',
            '2026-02-11',
            '2026-02-12',
            '2026-02-13',
            '2026-02-14',
            '2026-02-15',
            '2026-02-16',
            '2026-02-17',
            '2026-02-18',
            '2026-02-19',
            '2026-02-20',
            '2026-02-21',
            '2026-02-22',
            '2026-02-23',
            '2026-02-24',
            '2026-02-25',
            '2026-02-26',
            '2026-02-27',
            '2026-02-28',
            '2026-03-01',
            '2026-03-02',
            '2026-03-03',
            '2026-03-04',
            '2026-03-05',
            '2026-03-06',
            '2026-03-07',
            '2026-03-08',
            '2026-03-09',
            '2026-03-10',
            '2026-03-11',
            '2026-03-12',
            '2026-03-13',
            '2026-03-14',
            '2026-03-15',
            '2026-03-16',
            '2026-03-17',
            '2026-03-18',
            '2026-03-19',
            '2026-03-20',
            '2026-03-21',
            '2026-03-22',
            '2026-03-23',
            '2026-03-24',
            '2026-03-25',
            '2026-03-26',
            '2026-03-27',
            '2026-03-28',
            '2026-03-29',
            '2026-03-30',
            '2026-03-31',
          ],
          colors: ['var(--chart-traffic-brush-color-0)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const isEmpty = (val) => val == null || Number.isNaN(val)

        const formatters = {
          'thousands': (val) => (isEmpty(val) ? '' : val.toLocaleString('en-US')),
          'suffix-k': (val) => (isEmpty(val) ? '' : val + 'K'),
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            config.chart = { ...config.chart, animations: { enabled: false } }
          }

          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const chartKey = 'chart-synced-visits'
        const elementId = 'chart-synced-visits'
        const config = {
          chart: { id: 'synced-visits', type: 'area', fontFamily: 'inherit', height: 128, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false }, group: 'traffic' },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-synced-visits-fill-0)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [{ name: 'Visits', data: [4255, 4019, 4307, 4606, 4506, 4306, 4249, 4435, 4453, 4262, 4336, 4765, 4977, 4764, 4718, 4468, 4395, 4584, 4689, 4792, 4565, 4863, 4547, 4930, 5310, 4890, 5352, 5716, 5599, 5718] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2026-06-01',
            '2026-06-02',
            '2026-06-03',
            '2026-06-04',
            '2026-06-05',
            '2026-06-06',
            '2026-06-07',
            '2026-06-08',
            '2026-06-09',
            '2026-06-10',
            '2026-06-11',
            '2026-06-12',
            '2026-06-13',
            '2026-06-14',
            '2026-06-15',
            '2026-06-16',
            '2026-06-17',
            '2026-06-18',
            '2026-06-19',
            '2026-06-20',
            '2026-06-21',
            '2026-06-22',
            '2026-06-23',
            '2026-06-24',
            '2026-06-25',
            '2026-06-26',
            '2026-06-27',
            '2026-06-28',
            '2026-06-29',
            '2026-06-30',
          ],
          colors: ['var(--chart-synced-visits-color-0)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const isEmpty = (val) => val == null || Number.isNaN(val)

        const formatters = {
          'thousands': (val) => (isEmpty(val) ? '' : val.toLocaleString('en-US')),
          'suffix-k': (val) => (isEmpty(val) ? '' : val + 'K'),
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            config.chart = { ...config.chart, animations: { enabled: false } }
          }

          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const chartKey = 'chart-synced-signups'
        const elementId = 'chart-synced-signups'
        const config = {
          chart: { id: 'synced-signups', type: 'line', fontFamily: 'inherit', height: 128, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false }, group: 'traffic' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [{ name: 'Sign-ups', data: [191, 185, 207, 197, 192, 204, 224, 238, 214, 223, 243, 235, 255, 232, 249, 258, 231, 259, 257, 283, 302, 308, 297, 303, 312, 316, 319, 308, 292, 309] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2026-06-01',
            '2026-06-02',
            '2026-06-03',
            '2026-06-04',
            '2026-06-05',
            '2026-06-06',
            '2026-06-07',
            '2026-06-08',
            '2026-06-09',
            '2026-06-10',
            '2026-06-11',
            '2026-06-12',
            '2026-06-13',
            '2026-06-14',
            '2026-06-15',
            '2026-06-16',
            '2026-06-17',
            '2026-06-18',
            '2026-06-19',
            '2026-06-20',
            '2026-06-21',
            '2026-06-22',
            '2026-06-23',
            '2026-06-24',
            '2026-06-25',
            '2026-06-26',
            '2026-06-27',
            '2026-06-28',
            '2026-06-29',
            '2026-06-30',
          ],
          colors: ['var(--chart-synced-signups-color-0)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const isEmpty = (val) => val == null || Number.isNaN(val)

        const formatters = {
          'thousands': (val) => (isEmpty(val) ? '' : val.toLocaleString('en-US')),
          'suffix-k': (val) => (isEmpty(val) ? '' : val + 'K'),
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            config.chart = { ...config.chart, animations: { enabled: false } }
          }

          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const chartKey = 'chart-synced-revenue'
        const elementId = 'chart-synced-revenue'
        const config = {
          chart: { id: 'synced-revenue', type: 'bar', fontFamily: 'inherit', height: 128, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false }, group: 'traffic' },
          plotOptions: { bar: { columnWidth: '50%' } },
          dataLabels: { enabled: false },
          series: [{ name: 'Revenue', data: [991, 1032, 951, 841, 834, 957, 1027, 990, 944, 1016, 1023, 956, 864, 765, 686, 807, 791, 715, 720, 793, 778, 759, 827, 889, 783, 883, 915, 1028, 1164, 1090] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2026-06-01',
            '2026-06-02',
            '2026-06-03',
            '2026-06-04',
            '2026-06-05',
            '2026-06-06',
            '2026-06-07',
            '2026-06-08',
            '2026-06-09',
            '2026-06-10',
            '2026-06-11',
            '2026-06-12',
            '2026-06-13',
            '2026-06-14',
            '2026-06-15',
            '2026-06-16',
            '2026-06-17',
            '2026-06-18',
            '2026-06-19',
            '2026-06-20',
            '2026-06-21',
            '2026-06-22',
            '2026-06-23',
            '2026-06-24',
            '2026-06-25',
            '2026-06-26',
            '2026-06-27',
            '2026-06-28',
            '2026-06-29',
            '2026-06-30',
          ],
          colors: ['var(--chart-synced-revenue-color-0)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const isEmpty = (val) => val == null || Number.isNaN(val)

        const formatters = {
          'thousands': (val) => (isEmpty(val) ? '' : val.toLocaleString('en-US')),
          'suffix-k': (val) => (isEmpty(val) ? '' : val + 'K'),
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            config.chart = { ...config.chart, animations: { enabled: false } }
          }

          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
