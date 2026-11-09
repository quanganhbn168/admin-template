<x-preview.page :title='"Legend"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Legend</h1>

                  <div class="text-secondary mt-1">Legends label the series of a chart or a progress bar with a colored marker, a name and an optional value.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/legend" target="_blank" rel="noopener" class="link-secondary">
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
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Basic</h2>
                      <p class="card-subtitle">A <code>Legend</code> is a marker and a label. Set the series color with <code>color</code>.</p>
                      <div class="legend-list">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          This year</span
                        >
                        <span class="legend legend-secondary">
                          <span class="legend-dot"></span>
                          Last year</span
                        >
                        <span class="legend">
                          <span class="legend-dot"></span>
                          Forecast</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With values</h2>
                      <p class="card-subtitle">Add <code>value</code> to show a number next to the label.</p>
                      <div class="legend-list">
                        <span class="legend legend-blue">
                          <span class="legend-dot"></span>
                          Allowed<span class="legend-value"> 339.0k </span></span
                        ><span class="legend legend-red">
                          <span class="legend-dot"></span>
                          Denied<span class="legend-value"> 1.2k </span></span
                        ><span class="legend legend-orange">
                          <span class="legend-dot"></span>
                          Challenged<span class="legend-value"> 815 </span></span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">States</h2>
                      <p class="card-subtitle">Links and buttons get a tinted background on hover. Use <code>active</code> to keep it and <code>off</code> for a hidden series.</p>
                      <div class="legend-list">
                        <button type="button" class="legend legend-blue">
                          <span class="legend-dot"></span>
                          Default
                        </button>
                        <button type="button" class="legend legend-purple active">
                          <span class="legend-dot"></span>
                          Active
                        </button>
                        <button type="button" class="legend legend-teal legend-off">
                          <span class="legend-dot"></span>
                          Off
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Colors</h2>
                      <p class="card-subtitle">Every palette color works with <code>legend-{color}</code>.</p>
                      <div class="legend-list">
                        <span class="legend legend-blue">
                          <span class="legend-dot"></span>
                          Blue</span
                        ><span class="legend legend-azure">
                          <span class="legend-dot"></span>
                          Azure</span
                        ><span class="legend legend-indigo">
                          <span class="legend-dot"></span>
                          Indigo</span
                        ><span class="legend legend-purple">
                          <span class="legend-dot"></span>
                          Purple</span
                        ><span class="legend legend-pink">
                          <span class="legend-dot"></span>
                          Pink</span
                        ><span class="legend legend-red">
                          <span class="legend-dot"></span>
                          Red</span
                        ><span class="legend legend-orange">
                          <span class="legend-dot"></span>
                          Orange</span
                        ><span class="legend legend-yellow">
                          <span class="legend-dot"></span>
                          Yellow</span
                        ><span class="legend legend-lime">
                          <span class="legend-dot"></span>
                          Lime</span
                        ><span class="legend legend-green">
                          <span class="legend-dot"></span>
                          Green</span
                        ><span class="legend legend-teal">
                          <span class="legend-dot"></span>
                          Teal</span
                        ><span class="legend legend-cyan">
                          <span class="legend-dot"></span>
                          Cyan</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Vertical</h2>
                      <p class="card-subtitle">Add <code>vertical</code> to the list to stack the items.</p>
                      <div class="legend-list legend-list-vertical">
                        <span class="legend legend-azure">
                          <span class="legend-dot"></span>
                          Organic search<span class="legend-value"> 38% </span></span
                        ><span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Direct<span class="legend-value"> 27% </span></span
                        ><span class="legend legend-purple">
                          <span class="legend-dot"></span>
                          Social media<span class="legend-value"> 18% </span></span
                        ><span class="legend legend-orange">
                          <span class="legend-dot"></span>
                          Referral<span class="legend-value"> 12% </span></span
                        ><span class="legend legend-green">
                          <span class="legend-dot"></span>
                          Email<span class="legend-value"> 5% </span></span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Marker only</h2>
                      <p class="card-subtitle">Use a bare <code>legend-dot</code> when the label lives elsewhere.</p>
                      <div class="d-flex align-items-center gap-2">
                        <span class="legend-dot legend-blue"></span><span class="legend-dot legend-azure"></span><span class="legend-dot legend-indigo"></span><span class="legend-dot legend-purple"></span><span class="legend-dot legend-pink"></span><span class="legend-dot legend-red"></span
                        ><span class="legend-dot legend-orange"></span><span class="legend-dot legend-yellow"></span><span class="legend-dot legend-lime"></span><span class="legend-dot legend-green"></span><span class="legend-dot legend-teal"></span><span class="legend-dot legend-cyan"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Large</h2>
                      <p class="card-subtitle">Set <code>size="lg"</code> to put a big value under the label. Add <code>unit</code> for the unit and <code>divided</code> on the list for the lines.</p>
                      <div class="legend-list legend-list-divided">
                        <span class="legend legend-lg legend-primary">
                          <span class="legend-dot"></span>
                          P99<span class="legend-value">
                            124
                            <span class="legend-unit">ms</span>
                          </span></span
                        >
                        <span class="legend legend-lg legend-azure">
                          <span class="legend-dot"></span>
                          P95<span class="legend-value">
                            76
                            <span class="legend-unit">ms</span>
                          </span></span
                        >
                        <span class="legend legend-lg legend-green">
                          <span class="legend-dot"></span>
                          P75<span class="legend-value">
                            32
                            <span class="legend-unit">ms</span>
                          </span></span
                        >
                        <span class="legend legend-lg legend-yellow legend-off">
                          <span class="legend-dot"></span>
                          Requests<span class="legend-value"> 1,234 </span></span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Under a stat</h2>
                      <p class="card-subtitle">A legend row explains the split behind a single number.</p>
                      <div class="subheader">Requests</div>
                      <div class="h1 mb-3">341.0k</div>
                      <div class="legend-list border-top pt-3">
                        <span class="legend legend-blue">
                          <span class="legend-dot"></span>
                          Allowed<span class="legend-value"> 339.0k </span></span
                        ><span class="legend legend-red">
                          <span class="legend-dot"></span>
                          Denied<span class="legend-value"> 1.2k </span></span
                        ><span class="legend legend-orange">
                          <span class="legend-dot"></span>
                          Challenged<span class="legend-value"> 815 </span></span
                        ><span class="legend legend-purple">
                          <span class="legend-dot"></span>
                          Logged<span class="legend-value"> - </span></span
                        ><span class="legend legend-teal">
                          <span class="legend-dot"></span>
                          Rate limited<span class="legend-value"> - </span></span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Above a chart</h2>
                      <p class="card-subtitle">Large items show the latest value of each series, so the chart needs no legend of its own.</p>
                      <div class="legend-list legend-list-divided mb-3">
                        <span class="legend legend-lg legend-primary">
                          <span class="legend-dot"></span>
                          P99<span class="legend-value">
                            124
                            <span class="legend-unit">ms</span>
                          </span></span
                        ><span class="legend legend-lg legend-azure">
                          <span class="legend-dot"></span>
                          P95<span class="legend-value">
                            76
                            <span class="legend-unit">ms</span>
                          </span></span
                        ><span class="legend legend-lg legend-green">
                          <span class="legend-dot"></span>
                          P75<span class="legend-value">
                            32
                            <span class="legend-unit">ms</span>
                          </span></span
                        ><span class="legend legend-lg legend-yellow">
                          <span class="legend-dot"></span>
                          P50<span class="legend-value">
                            10
                            <span class="legend-unit">ms</span>
                          </span></span
                        >
                      </div>

                      <div id="chart-legend-latency" class="position-relative" role="img" aria-label="Read latency by percentile"></div>
                      <style>
                        :root {
                          --chart-legend-latency-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-legend-latency-color-1: color-mix(in srgb, transparent, var(--tblr-azure) 100%);
                          --chart-legend-latency-color-2: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                          --chart-legend-latency-color-3: color-mix(in srgb, transparent, var(--tblr-yellow) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Large vertical</h2>
                      <p class="card-subtitle">Combine <code>size="lg"</code> with a <code>vertical</code> list for a side panel.</p>
                      <div class="legend-list legend-list-vertical">
                        <span class="legend legend-lg legend-primary">
                          <span class="legend-dot"></span>
                          Documents<span class="legend-value">
                            3.5
                            <span class="legend-unit">GB</span>
                          </span></span
                        ><span class="legend legend-lg legend-info">
                          <span class="legend-dot"></span>
                          Media<span class="legend-value">
                            1.5
                            <span class="legend-unit">GB</span>
                          </span></span
                        ><span class="legend legend-lg legend-success">
                          <span class="legend-dot"></span>
                          Shared<span class="legend-value">
                            0.7
                            <span class="legend-unit">GB</span>
                          </span></span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Large links</h2>
                      <p class="card-subtitle">Large items work as links and buttons too. Mark the current one with <code>active</code> and a hidden series with <code>off</code>.</p>
                      <div class="legend-list legend-list-divided">
                        <a href="#" class="legend legend-lg legend-green active">
                          <span class="legend-dot"></span>
                          Passed<span class="legend-value"> 128 </span></a
                        >
                        <a href="#" class="legend legend-lg legend-red">
                          <span class="legend-dot"></span>
                          Failed<span class="legend-value"> 4 </span></a
                        >
                        <a href="#" class="legend legend-lg legend-yellow">
                          <span class="legend-dot"></span>
                          Skipped<span class="legend-value"> 12 </span></a
                        >
                        <a href="#" class="legend legend-lg legend-secondary legend-off">
                          <span class="legend-dot"></span>
                          Pending<span class="legend-value"> 3 </span></a
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With units</h2>
                      <p class="card-subtitle">Add <code>unit</code> to a regular item to show the unit after the value.</p>
                      <div class="legend-list">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          P99<span class="legend-value">
                            124
                            <span class="legend-unit">ms</span>
                          </span></span
                        ><span class="legend legend-azure">
                          <span class="legend-dot"></span>
                          P95<span class="legend-value">
                            76
                            <span class="legend-unit">ms</span>
                          </span></span
                        ><span class="legend legend-green">
                          <span class="legend-dot"></span>
                          P75<span class="legend-value">
                            32
                            <span class="legend-unit">ms</span>
                          </span></span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Without lines</h2>
                      <p class="card-subtitle">Leave out <code>divided</code> when the items sit in a tight space or wrap to more rows.</p>
                      <div class="legend-list">
                        <span class="legend legend-lg legend-azure">
                          <span class="legend-dot"></span>
                          Organic search<span class="legend-value"> 38% </span></span
                        ><span class="legend legend-lg legend-primary">
                          <span class="legend-dot"></span>
                          Direct<span class="legend-value"> 27% </span></span
                        ><span class="legend legend-lg legend-purple">
                          <span class="legend-dot"></span>
                          Social media<span class="legend-value"> 18% </span></span
                        ><span class="legend legend-lg legend-orange">
                          <span class="legend-dot"></span>
                          Referral<span class="legend-value"> 12% </span></span
                        ><span class="legend legend-lg legend-green">
                          <span class="legend-dot"></span>
                          Email<span class="legend-value"> 5% </span></span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Loading</h2>
                      <p class="card-subtitle">Use <code>placeholder</code> blocks for the label and the value while the data loads.</p>
                      <div class="legend-list legend-list-divided placeholder-glow" aria-hidden="true">
                        <span class="legend legend-lg">
                          <span class="legend-dot"></span>
                          <span class="placeholder col-9"></span>
                          <span class="legend-value">
                            <span class="placeholder col-6"></span>
                          </span> </span
                        ><span class="legend legend-lg">
                          <span class="legend-dot"></span>
                          <span class="placeholder col-9"></span>
                          <span class="legend-value">
                            <span class="placeholder col-6"></span>
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Interactive legend</h2>

                      <div class="legend-list ms-auto" id="legend-page-list">
                        <button type="button" data-series="Total visits" class="legend legend-yellow">
                          <span class="legend-dot"></span>
                          Total visits<span class="legend-value"> 63.0k </span>
                        </button>
                        <button type="button" data-series="Unique visitors" class="legend legend-green">
                          <span class="legend-dot"></span>
                          Unique visitors<span class="legend-value"> 43.0k </span>
                        </button>
                        <button type="button" data-series="New users" class="legend legend-primary">
                          <span class="legend-dot"></span>
                          New users<span class="legend-value"> 13.5k </span>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <p class="card-subtitle">Button items call <code>toggleSeries()</code> on the chart and toggle <code>legend-off</code>.</p>

                      <div id="chart-legend-page-chart" class="position-relative" role="img" aria-label="Site traffic"></div>
                      <style>
                        :root {
                          --chart-legend-page-chart-color-0: color-mix(in srgb, transparent, var(--tblr-yellow) 100%);
                          --chart-legend-page-chart-color-1: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                          --chart-legend-page-chart-color-2: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Next to a donut</h2>
                      <p class="card-subtitle">A vertical list beside a chart with its own legend hidden.</p>
                      <div class="d-flex align-items-center gap-4">
                        <div class="w-50">
                          <div id="chart-legend-donut" class="position-relative" role="img" aria-label="Traffic sources"></div>
                          <style>
                            :root {
                              --chart-legend-donut-color-0: color-mix(in srgb, transparent, var(--tblr-azure) 100%);
                              --chart-legend-donut-color-1: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                              --chart-legend-donut-color-2: color-mix(in srgb, transparent, var(--tblr-purple) 100%);
                              --chart-legend-donut-color-3: color-mix(in srgb, transparent, var(--tblr-orange) 100%);
                              --chart-legend-donut-color-4: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                            }
                          </style>
                        </div>
                        <div class="legend-list legend-list-vertical">
                          <span class="legend legend-azure">
                            <span class="legend-dot"></span>
                            Organic search<span class="legend-value"> 38% </span></span
                          ><span class="legend legend-primary">
                            <span class="legend-dot"></span>
                            Direct<span class="legend-value"> 27% </span></span
                          ><span class="legend legend-purple">
                            <span class="legend-dot"></span>
                            Social media<span class="legend-value"> 18% </span></span
                          ><span class="legend legend-orange">
                            <span class="legend-dot"></span>
                            Referral<span class="legend-value"> 12% </span></span
                          ><span class="legend legend-green">
                            <span class="legend-dot"></span>
                            Email<span class="legend-value"> 5% </span></span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With a progress bar</h2>
                      <p class="card-subtitle">Label the segments of a <code>progress-separated</code> bar.</p>
                      <p class="mb-3">Using <strong>5.7 GB</strong> of 8 GB</p>
                      <div class="progress progress-separated mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-label="Documents"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 19%" aria-label="Media"></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 9%" aria-label="Shared"></div>
                      </div>
                      <div class="legend-list">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Documents<span class="legend-value"> 3.5 GB </span></span
                        ><span class="legend legend-info">
                          <span class="legend-dot"></span>
                          Media<span class="legend-value"> 1.5 GB </span></span
                        ><span class="legend legend-success">
                          <span class="legend-dot"></span>
                          Shared<span class="legend-value"> 0.7 GB </span></span
                        ><span class="legend">
                          <span class="legend-dot"></span>
                          Free<span class="legend-value"> 2.3 GB </span></span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Filter links</h2>
                      <p class="card-subtitle">Link items with <code>href</code> work as filters. Mark the current one with <code>active</code>.</p>
                      <div class="legend-list">
                        <a href="#" class="legend legend-green active">
                          <span class="legend-dot"></span>
                          Passed<span class="legend-value"> 128 </span></a
                        >
                        <a href="#" class="legend legend-red">
                          <span class="legend-dot"></span>
                          Failed<span class="legend-value"> 4 </span></a
                        >
                        <a href="#" class="legend legend-yellow">
                          <span class="legend-dot"></span>
                          Skipped<span class="legend-value"> 12 </span></a
                        >
                        <a href="#" class="legend legend-secondary">
                          <span class="legend-dot"></span>
                          Pending<span class="legend-value"> 3 </span></a
                        >
                      </div>
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
        const chartKey = 'chart-legend-latency'
        const elementId = 'chart-legend-latency'
        const config = {
          chart: { id: 'legend-latency', type: 'line', fontFamily: 'inherit', height: 192, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'P99', data: [96, 88, 102, 131, 148, 139, 127, 124] },
            { name: 'P95', data: [61, 57, 66, 82, 91, 85, 79, 76] },
            { name: 'P75', data: [27, 25, 29, 35, 38, 36, 33, 32] },
            { name: 'P50', data: [9, 8, 9, 11, 12, 11, 10, 10] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['00:00', '03:00', '06:00', '09:00', '12:00', '15:00', '18:00', '21:00'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-legend-latency-color-0)', 'var(--chart-legend-latency-color-1)', 'var(--chart-legend-latency-color-2)', 'var(--chart-legend-latency-color-3)'],
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
        const chartKey = 'chart-legend-page-chart'
        const elementId = 'chart-legend-page-chart'
        const config = {
          chart: { id: 'legend-page-chart', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'straight' },
          series: [
            { name: 'Total visits', data: [1329, 1228, 1995, 2217, 2276, 2166, 2047, 1373, 1314, 2286, 2401, 2327, 2405, 2171, 1568, 1453, 2399, 3181, 2856, 2539, 2359, 1624, 1574, 2515, 2681, 2654, 2505, 2304, 1631, 1662] },
            { name: 'Unique visitors', data: [887, 843, 1367, 1471, 1596, 1498, 1392, 965, 875, 1529, 1629, 1543, 1639, 1482, 1090, 997, 1618, 2166, 1955, 1773, 1594, 1119, 1113, 1668, 1903, 1803, 1711, 1527, 1097, 1104] },
            { name: 'New users', data: [291, 255, 374, 409, 449, 532, 498, 286, 261, 493, 520, 445, 489, 440, 318, 348, 580, 732, 535, 570, 530, 348, 348, 556, 655, 595, 488, 518, 335, 343] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2020-06-20',
            '2020-06-21',
            '2020-06-22',
            '2020-06-23',
            '2020-06-24',
            '2020-06-25',
            '2020-06-26',
            '2020-06-27',
            '2020-06-28',
            '2020-06-29',
            '2020-06-30',
            '2020-07-01',
            '2020-07-02',
            '2020-07-03',
            '2020-07-04',
            '2020-07-05',
            '2020-07-06',
            '2020-07-07',
            '2020-07-08',
            '2020-07-09',
            '2020-07-10',
            '2020-07-11',
            '2020-07-12',
            '2020-07-13',
            '2020-07-14',
            '2020-07-15',
            '2020-07-16',
            '2020-07-17',
            '2020-07-18',
            '2020-07-19',
          ],
          colors: ['var(--chart-legend-page-chart-color-0)', 'var(--chart-legend-page-chart-color-1)', 'var(--chart-legend-page-chart-color-2)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = 'thousands'

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
      /*
              Toggles a chart series when its legend item is clicked.
              The chart is exposed by the demo Chart component as window.tabler_chart['chart-legend-page-chart'].
              */
      document.querySelectorAll('#legend-page-list .legend').forEach((item) => {
        item.addEventListener('click', () => {
          const chart = window.tabler_chart && window.tabler_chart['chart-legend-page-chart']
          if (!chart) return
          chart.toggleSeries(item.dataset.series)
          item.classList.toggle('legend-off')
        })
      })
    </script>
<script>
      ;(function () {
        const chartKey = 'chart-legend-donut'
        const elementId = 'chart-legend-donut'
        const config = {
          chart: { id: 'legend-donut', type: 'donut', fontFamily: 'inherit', height: 160, sparkline: { enabled: true }, animations: { enabled: false } },
          series: [38, 27, 18, 12, 5],
          labels: ['Organic search', 'Direct', 'Social media', 'Referral', 'Email'],
          grid: { strokeDashArray: 4 },
          colors: ['var(--chart-legend-donut-color-0)', 'var(--chart-legend-donut-color-1)', 'var(--chart-legend-donut-color-2)', 'var(--chart-legend-donut-color-3)', 'var(--chart-legend-donut-color-4)'],
          legend: { show: false },
          tooltip: { fillSeriesColor: false },
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
