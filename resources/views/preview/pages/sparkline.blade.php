<x-preview.page :title='"Sparkline"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Sparkline</h1>

                  <div class="text-secondary mt-1">Sparklines are tiny inline SVG charts rendered from data attributes, with no chart library needed.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/sparkline" target="_blank" rel="noopener" class="link-secondary">
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
                      <h2 class="card-title">Line</h2>
                      <p class="card-subtitle">Add <code>data-bs-toggle="sparkline"</code> and a comma-separated <code>data-bs-values</code> list.</p>
                      <span class="sparkline text-primary" data-bs-toggle="sparkline" data-bs-values="3,4,2,6,5,8,7" role="img" aria-label="Weekly trend"></span>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Area with spot</h2>
                      <p class="card-subtitle">Use <code>data-bs-fill="auto"</code> for a tinted area and <code>data-bs-spot</code> to mark the <code>last</code>, <code>min</code> or <code>max</code> value.</p>
                      <div class="d-flex align-items-center gap-3">
                        <span class="sparkline text-success" data-bs-toggle="sparkline" data-bs-values="12,14,9,18,16,22,20" data-bs-fill="auto" data-bs-spot="last" role="img" aria-label="Last value"></span>
                        <span class="sparkline text-danger" data-bs-toggle="sparkline" data-bs-values="12,14,9,18,16,22,20" data-bs-fill="auto" data-bs-spot="min" role="img" aria-label="Lowest value"></span>
                        <span class="sparkline text-azure" data-bs-toggle="sparkline" data-bs-values="12,14,9,18,16,22,20" data-bs-fill="auto" data-bs-spot="max" role="img" aria-label="Highest value"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Bars</h2>
                      <p class="card-subtitle">Set <code>data-bs-type="bar"</code>. Tune the gap and rounding with <code>data-bs-bar-gap</code> and <code>data-bs-bar-radius</code>.</p>
                      <div class="d-flex align-items-center gap-3">
                        <span class="sparkline text-warning" data-bs-toggle="sparkline" data-bs-type="bar" data-bs-values="1,2,3,2,4,3,5" role="img" aria-label="Daily activity"></span>
                        <span class="sparkline text-purple" data-bs-toggle="sparkline" data-bs-type="bar" data-bs-values="1,2,3,2,4,3,5" data-bs-bar-gap="4" data-bs-bar-radius="0" role="img" aria-label="Daily activity, square bars"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Signed bars</h2>
                      <p class="card-subtitle">Negative values hang below a zero line in <code>--tblr-sparkline-negative</code>, red by default; the line uses <code>--tblr-sparkline-zero</code>.</p>
                      <div class="d-flex flex-wrap align-items-center gap-3">
                        <span class="sparkline text-success" data-bs-toggle="sparkline" data-bs-type="bar" data-bs-values="3,-1,4,-2,5,-3,2,-1" role="img" aria-label="Daily change"></span>
                        <span class="sparkline text-primary" data-bs-toggle="sparkline" data-bs-type="bar" data-bs-values="-2,4,-3,1,-1,5,-4,2" role="img" aria-label="Daily change, orange negatives" style="--tblr-sparkline-negative: var(--tblr-orange)"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Win/loss</h2>
                      <p class="card-subtitle">Set <code>data-bs-type="tristate"</code>: every value is a full bar up, down or a tick on the zero line, whatever its size.</p>
                      <div class="d-flex flex-wrap align-items-center gap-3">
                        <span class="sparkline text-green" data-bs-toggle="sparkline" data-bs-type="tristate" data-bs-values="1,1,-1,1,0,-1,1,1,-1,1" role="img" aria-label="Match results"></span>
                        <span class="sparkline sparkline-lg text-primary" data-bs-toggle="sparkline" data-bs-type="tristate" data-bs-values="3,-2,0,5,1,-1,-4,2,0,1,6,-3" data-bs-bar-gap="3" role="img" aria-label="Deployments, large"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Threshold</h2>
                      <p class="card-subtitle">Set <code>data-bs-threshold</code> to draw a guide line at a value. Bars below it take the negative color.</p>
                      <div class="d-flex flex-wrap align-items-center gap-3">
                        <span class="sparkline text-primary" data-bs-toggle="sparkline" data-bs-values="62,71,68,84,79,88,92,75" data-bs-fill="auto" data-bs-threshold="80" role="img" aria-label="CPU usage, 80% limit"></span>
                        <span class="sparkline text-green" data-bs-toggle="sparkline" data-bs-type="bar" data-bs-values="99.9,99.7,99.2,99.8,99.4,99.95,99.6" data-bs-min="98" data-bs-max="100" data-bs-threshold="99.5" role="img" aria-label="Uptime, 99.5% target"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Circle</h2>
                      <p class="card-subtitle">Use <code>data-bs-type="circle"</code> with a single value as a share of <code>data-bs-max</code>, <code>sparkline-square</code> for a round box and <code>data-bs-label="auto"</code> for the percentage in the middle.</p>
                      <div class="d-flex flex-wrap align-items-center gap-3">
                        <span class="sparkline sparkline-square text-danger" data-bs-toggle="sparkline" data-bs-type="circle" data-bs-values="10" data-bs-width="40" data-bs-height="40" role="img" aria-label="Completion 10%"></span
                        ><span class="sparkline sparkline-square text-warning" data-bs-toggle="sparkline" data-bs-type="circle" data-bs-values="50" data-bs-width="40" data-bs-height="40" role="img" aria-label="Completion 50%"></span
                        ><span class="sparkline sparkline-square text-primary" data-bs-toggle="sparkline" data-bs-type="circle" data-bs-values="72" data-bs-width="40" data-bs-height="40" role="img" aria-label="Completion 72%"></span
                        ><span class="sparkline sparkline-square text-success" data-bs-toggle="sparkline" data-bs-type="circle" data-bs-values="100" data-bs-width="40" data-bs-height="40" role="img" aria-label="Completion 100%"></span>
                        <span class="sparkline sparkline-lg sparkline-square text-danger" data-bs-toggle="sparkline" data-bs-type="circle" data-bs-values="10" data-bs-label="auto" data-bs-width="40" data-bs-height="40" role="img" aria-label="Completion 10%" style="--tblr-sparkline-stroke-width: 3"></span
                        ><span class="sparkline sparkline-lg sparkline-square text-warning" data-bs-toggle="sparkline" data-bs-type="circle" data-bs-values="50" data-bs-label="auto" data-bs-width="40" data-bs-height="40" role="img" aria-label="Completion 50%" style="--tblr-sparkline-stroke-width: 3"></span
                        ><span class="sparkline sparkline-lg sparkline-square text-primary" data-bs-toggle="sparkline" data-bs-type="circle" data-bs-values="72" data-bs-label="auto" data-bs-width="40" data-bs-height="40" role="img" aria-label="Completion 72%" style="--tblr-sparkline-stroke-width: 3"></span
                        ><span class="sparkline sparkline-lg sparkline-square text-success" data-bs-toggle="sparkline" data-bs-type="circle" data-bs-values="100" data-bs-label="auto" data-bs-width="40" data-bs-height="40" role="img" aria-label="Completion 100%" style="--tblr-sparkline-stroke-width: 3"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Disabled</h2>
                      <p class="card-subtitle">Add <code>sparkline-disabled</code> to grey out a chart, for a series that is off or data that is stale.</p>
                      <div class="d-flex flex-wrap align-items-center gap-3">
                        <span class="sparkline sparkline-disabled text-primary" data-bs-toggle="sparkline" data-bs-values="12,14,9,18,16,22,20" data-bs-fill="auto" data-bs-spot="last" role="img" aria-label="Trend, disabled"></span>
                        <span class="sparkline sparkline-disabled text-warning" data-bs-toggle="sparkline" data-bs-type="bar" data-bs-values="3,-1,4,-2,5,-3,2" role="img" aria-label="Daily change, disabled"></span>
                        <span
                          class="sparkline sparkline-lg sparkline-square sparkline-disabled text-green"
                          data-bs-toggle="sparkline"
                          data-bs-type="circle"
                          data-bs-values="72"
                          data-bs-label="auto"
                          data-bs-width="40"
                          data-bs-height="40"
                          role="img"
                          aria-label="Completion 72%, disabled"
                          style="--tblr-sparkline-stroke-width: 3"
                        ></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Colors</h2>
                      <p class="card-subtitle">The chart uses <code>currentColor</code>, so any <code>text-{color}</code> utility themes it.</p>
                      <div class="d-flex flex-wrap align-items-center gap-3">
                        <span class="sparkline text-blue" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Blue"></span
                        ><span class="sparkline text-azure" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Azure"></span
                        ><span class="sparkline text-indigo" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Indigo"></span
                        ><span class="sparkline text-purple" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Purple"></span
                        ><span class="sparkline text-pink" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Pink"></span><span class="sparkline text-red" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Red"></span
                        ><span class="sparkline text-orange" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Orange"></span
                        ><span class="sparkline text-yellow" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Yellow"></span
                        ><span class="sparkline text-lime" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Lime"></span
                        ><span class="sparkline text-green" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Green"></span
                        ><span class="sparkline text-teal" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Teal"></span
                        ><span class="sparkline text-cyan" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" data-bs-fill="auto" role="img" aria-label="Cyan"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Fixed range</h2>
                      <p class="card-subtitle">Set <code>data-bs-min</code> and <code>data-bs-max</code> so several charts share the same scale.</p>
                      <div class="d-flex align-items-center gap-3">
                        <span class="sparkline text-primary" data-bs-toggle="sparkline" data-bs-values="10,20,35,30,45,60,55" data-bs-min="0" data-bs-max="100" role="img" aria-label="Series A, 0 to 100"></span>
                        <span class="sparkline text-danger" data-bs-toggle="sparkline" data-bs-values="5,15,25,40,70,65,80" data-bs-min="0" data-bs-max="100" role="img" aria-label="Series B, 0 to 100"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Sizes</h2>
                      <p class="card-subtitle">Add <code>sparkline-sm</code> or <code>sparkline-lg</code>; for a custom box override <code>--tblr-sparkline-width</code> and <code>--tblr-sparkline-height</code>.</p>
                      <div class="d-flex flex-wrap align-items-center gap-3">
                        <span class="sparkline sparkline-sm text-info" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" role="img" aria-label="Small"></span>
                        <span class="sparkline text-info" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" role="img" aria-label="Default"></span>
                        <span class="sparkline sparkline-lg text-info" data-bs-toggle="sparkline" data-bs-values="2,3,2,4,3,5,4" role="img" aria-label="Large"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Stroke width</h2>
                      <p class="card-subtitle">Change <code>--tblr-sparkline-stroke-width</code> and <code>--tblr-sparkline-spot-size</code> in SVG units.</p>
                      <div class="d-flex align-items-center gap-3">
                        <span class="sparkline text-primary" data-bs-toggle="sparkline" data-bs-values="3,4,2,6,5,8,7" data-bs-spot="last" role="img" aria-label="Thin" style="--tblr-sparkline-stroke-width: 1; --tblr-sparkline-spot-size: 1.5"></span>
                        <span class="sparkline text-primary" data-bs-toggle="sparkline" data-bs-values="3,4,2,6,5,8,7" data-bs-spot="last" role="img" aria-label="Default"></span>
                        <span class="sparkline text-primary" data-bs-toggle="sparkline" data-bs-values="3,4,2,6,5,8,7" data-bs-spot="last" role="img" aria-label="Thick" style="--tblr-sparkline-stroke-width: 4; --tblr-sparkline-spot-size: 3"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Update from JavaScript</h2>
                      <p class="card-subtitle">Call <code>update(values)</code> on the instance. It writes <code>data-bs-values</code> back, tweens the chart for <code>data-bs-animation</code> milliseconds and fires <code>updated.bs.sparkline</code>.</p>
                      <div class="d-flex align-items-center gap-3">
                        <span class="sparkline sparkline-lg text-primary" data-bs-toggle="sparkline" data-bs-values="3,4,2,6,5,8,7,9,6,8" data-bs-fill="auto" data-bs-spot="last" role="img" aria-label="Orders" id="sparkline-orders"></span>
                        <button id="sparkline-update" type="button" class="btn btn-sm btn-outline-primary">Randomize</button>
                        <span class="badge bg-secondary-lt" id="sparkline-updates">0 updates</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">In a table</h2>
                      <p class="card-subtitle">A sparkline sits inline with text, so it works in table cells and stat rows.</p>
                      <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                          <thead>
                            <tr>
                              <th>Metric</th>
                              <th class="text-end">Value</th>
                              <th class="text-end">Trend</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Revenue</td>
                              <td class="text-end">$12.4k</td>
                              <td class="text-end">
                                <span class="sparkline text-success" data-bs-toggle="sparkline" data-bs-values="5,6,7,6,8,9,10" data-bs-fill="auto" role="img" aria-label="Revenue trend"></span>
                              </td>
                            </tr>
                            <tr>
                              <td>Orders</td>
                              <td class="text-end">1,352</td>
                              <td class="text-end">
                                <span class="sparkline text-primary" data-bs-toggle="sparkline" data-bs-type="bar" data-bs-values="3,4,2,6,5,8,7" role="img" aria-label="Orders trend"></span>
                              </td>
                            </tr>
                            <tr>
                              <td>Errors</td>
                              <td class="text-end">31</td>
                              <td class="text-end">
                                <span class="sparkline text-danger" data-bs-toggle="sparkline" data-bs-type="bar" data-bs-values="2,3,5,4,8,13,21" role="img" aria-label="Errors trend"></span>
                              </td>
                            </tr>
                            <tr>
                              <td>CPU usage</td>
                              <td class="text-end">72%</td>
                              <td class="text-end">
                                <span class="sparkline text-info" data-bs-toggle="sparkline" data-bs-values="40,55,50,70,65,80,72" role="img" aria-label="CPU usage trend"></span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
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
<script>
      /*
              Pushes random data into a sparkline and counts the updated.bs.sparkline events.
              tabler.js is deferred, so the instance is looked up once the DOM is ready.
              */
      document.addEventListener('DOMContentLoaded', () => {
        const element = document.getElementById('sparkline-orders')
        const sparkline = tabler.Sparkline.getOrCreateInstance(element)
        let updates = 0

        document.getElementById('sparkline-update').addEventListener('click', () => {
          sparkline.update(Array.from({ length: 10 }, () => Math.floor(Math.random() * 30)))
        })

        element.addEventListener('updated.bs.sparkline', () => {
          updates += 1
          document.getElementById('sparkline-updates').textContent = `${updates} update${updates === 1 ? '' : 's'}`
        })
      })
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
