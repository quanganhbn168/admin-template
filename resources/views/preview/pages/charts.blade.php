<x-preview.page :title='"Charts"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Charts</h1>
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
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <h2 class="card-title">Active users</h2>
                        <div class="ms-auto">
                          <div class="dropdown">
                            <button type="button" class="dropdown-toggle text-secondary border-0 bg-transparent p-0" id="active-users-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Select time range for active users">Last 7 days</button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="active-users-dropdown">
                              <button type="button" class="dropdown-item active" aria-current="true">Last 7 days</button>
                              <button type="button" class="dropdown-item">Last 30 days</button>
                              <button type="button" class="dropdown-item">Last 3 months</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div id="chart-active-users-2" class="position-relative" role="img" aria-label="Active users"></div>
                          <style>
                            :root {
                              --chart-active-users-2-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                              --chart-active-users-2-color-1: color-mix(in srgb, transparent, var(--tblr-azure) 100%);
                              --chart-active-users-2-color-2: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                            }
                          </style>
                        </div>
                        <div class="col-md-auto">
                          <div class="divide-y divide-y-fill">
                            <div class="px-3">
                              <div class="text-secondary"><span class="status-dot bg-primary"></span> Mobile</div>
                              <div class="h2">10,601</div>
                            </div>
                            <div class="px-3">
                              <div class="text-secondary"><span class="status-dot bg-azure"></span> Desktop</div>
                              <div class="h2">6,109</div>
                            </div>
                            <div class="px-3">
                              <div class="text-secondary"><span class="status-dot bg-green"></span> Tablet</div>
                              <div class="h2">2,260</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Chart with legend</h2>
                    </div>
                    <div class="card-body">
                      <div class="legend-list legend-list-divided mb-3" id="legend-demo-list">
                        <button type="button" data-series="Total visits" class="legend legend-lg legend-yellow">
                          <span class="legend-dot"></span>
                          Total visits<span class="legend-value"> 63.0k </span>
                        </button>
                        <button type="button" data-series="Unique visitors" class="legend legend-lg legend-green">
                          <span class="legend-dot"></span>
                          Unique visitors<span class="legend-value"> 43.0k </span>
                        </button>
                        <button type="button" data-series="New users" class="legend legend-lg legend-primary">
                          <span class="legend-dot"></span>
                          New users<span class="legend-value"> 13.5k </span>
                        </button>
                      </div>

                      <div id="chart-legend-demo" class="position-relative" role="img" aria-label="Site traffic"></div>
                      <style>
                        :root {
                          --chart-legend-demo-color-0: color-mix(in srgb, transparent, var(--tblr-yellow) 100%);
                          --chart-legend-demo-color-1: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                          --chart-legend-demo-color-2: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <h2 class="card-title">Social referrals</h2>
                        <div class="ms-auto">
                          <div class="dropdown">
                            <button type="button" class="dropdown-toggle text-secondary border-0 bg-transparent p-0" id="social-referrals-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Select time range for sales data">Last 7 days</button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="social-referrals-dropdown">
                              <button type="button" class="dropdown-item active" aria-current="true">Last 7 days</button>
                              <button type="button" class="dropdown-item">Last 30 days</button>
                              <button type="button" class="dropdown-item">Last 3 months</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div id="chart-social-referrals" class="position-relative" role="img" aria-label="Social referrals"></div>
                      <style>
                        :root {
                          --chart-social-referrals-color-0: color-mix(in srgb, transparent, var(--tblr-facebook) 100%);
                          --chart-social-referrals-color-1: color-mix(in srgb, transparent, var(--tblr-twitter) 100%);
                          --chart-social-referrals-color-2: color-mix(in srgb, transparent, var(--tblr-dribbble) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Sprint velocity</h2>
                    </div>
                    <div class="card-body">
                      <div id="chart-tasks-overview" class="position-relative" role="img" aria-label="Story points completed per sprint"></div>
                      <style>
                        :root {
                          --chart-tasks-overview-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <h2 class="page-section-title">Line charts</h2>
                  <p class="page-section-description">Trends over time, where the change between points matters more than single values.</p>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Line chart</h3>
                        <p class="card-subtitle">Tickets solved per day with a smooth curve, the default.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-completion-tasks-2" class="position-relative" role="img" aria-label="Line chart"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-2-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Straight line</h3>
                        <p class="card-subtitle">The same tickets drawn with straight segments.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-completion-tasks-4" class="position-relative" role="img" aria-label="Straight line"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-4-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Stepped line</h3>
                        <p class="card-subtitle">A stepped line for values that change in jumps.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-completion-tasks-5" class="position-relative" role="img" aria-label="Stepped line"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-5-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Data labels</h3>
                        <p class="card-subtitle">Tickets solved per day, labeled with values.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-completion-tasks-7" class="position-relative" role="img" aria-label="Data labels"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-7-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Issue activity</h3>
                        <p class="card-subtitle">Issues opened, closed and reopened per day over the last 17 days.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Opened</span
                        ><span class="legend legend-lime">
                          <span class="legend-dot"></span>
                          Closed</span
                        ><span class="legend legend-orange">
                          <span class="legend-dot"></span>
                          Reopened</span
                        >
                      </div>
                      <div id="chart-tasks" class="position-relative" role="img" aria-label="Issue activity"></div>
                      <style>
                        :root {
                          --chart-tasks-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-tasks-color-1: color-mix(in srgb, transparent, var(--tblr-lime) 100%);
                          --chart-tasks-color-2: color-mix(in srgb, transparent, var(--tblr-orange) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Revenue by plan</h3>
                        <p class="card-subtitle">Monthly revenue of each plan, January to June.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-orange">
                          <span class="legend-dot"></span>
                          Starter</span
                        ><span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Pro</span
                        ><span class="legend legend-green">
                          <span class="legend-dot"></span>
                          Enterprise</span
                        >
                      </div>
                      <div id="chart-line" class="position-relative" role="img" aria-label="Revenue by plan"></div>
                      <style>
                        :root {
                          --chart-line-color-0: color-mix(in srgb, transparent, var(--tblr-orange) 100%);
                          --chart-line-color-1: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-line-color-2: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Signups by channel</h3>
                        <p class="card-subtitle">Monthly signups, dashed for paid and referral.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Organic</span
                        ><span class="legend legend-orange">
                          <span class="legend-dot"></span>
                          Paid</span
                        ><span class="legend legend-green">
                          <span class="legend-dot"></span>
                          Referral</span
                        >
                      </div>
                      <div id="chart-line-stroke" class="position-relative" role="img" aria-label="Signups by channel"></div>
                      <style>
                        :root {
                          --chart-line-stroke-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-line-stroke-color-1: color-mix(in srgb, transparent, var(--tblr-orange) 100%);
                          --chart-line-stroke-color-2: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">CPU load</h3>
                        <p class="card-subtitle">CPU load of web servers and workers in one day.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Web servers</span
                        ><span class="legend legend-green">
                          <span class="legend-dot"></span>
                          Workers</span
                        >
                      </div>
                      <div id="chart-spline" class="position-relative" role="img" aria-label="CPU load"></div>
                      <style>
                        :root {
                          --chart-spline-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-spline-color-1: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Average temperature</h3>
                        <p class="card-subtitle">Monthly average temperature in Tokyo and London.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Tokyo</span
                        ><span class="legend legend-green">
                          <span class="legend-dot"></span>
                          London</span
                        >
                      </div>
                      <div id="chart-temperature" class="position-relative" role="img" aria-label="Average temperature"></div>
                      <style>
                        :root {
                          --chart-temperature-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-temperature-color-1: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Running instances</h3>
                        <p class="card-subtitle">Number of running instances during the day.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-stepline" class="position-relative" role="img" aria-label="Running instances"></div>
                      <style>
                        :root {
                          --chart-stepline-color-0: color-mix(in srgb, transparent, var(--tblr-orange) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <h2 class="page-section-title">Area charts</h2>
                  <p class="page-section-description">Lines with a filled area, to stress volume or to show how parts add up to a total.</p>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Area chart</h3>
                        <p class="card-subtitle">Tickets solved per day as a filled area.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-completion-tasks-3" class="position-relative" role="img" aria-label="Area chart"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-3-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                          --chart-completion-tasks-3-fill-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 16%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Two areas</h3>
                        <p class="card-subtitle">Solved and reopened tickets as two overlapping areas.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Solved</span
                        ><span class="legend legend-red">
                          <span class="legend-dot"></span>
                          Reopened</span
                        >
                      </div>
                      <div id="chart-completion-tasks-10" class="position-relative" role="img" aria-label="Two areas"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-10-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                          --chart-completion-tasks-10-fill-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 16%);
                          --chart-completion-tasks-10-color-1: color-mix(in srgb, transparent, var(--tblr-red) 100%);
                          --chart-completion-tasks-10-fill-1: color-mix(in srgb, transparent, var(--tblr-red) 16%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Stacked areas</h3>
                        <p class="card-subtitle">Solved and reopened tickets stacked on top of each other.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Solved</span
                        ><span class="legend legend-red">
                          <span class="legend-dot"></span>
                          Reopened</span
                        >
                      </div>
                      <div id="chart-completion-tasks-11" class="position-relative" role="img" aria-label="Stacked areas"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-11-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                          --chart-completion-tasks-11-fill-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 16%);
                          --chart-completion-tasks-11-color-1: color-mix(in srgb, transparent, var(--tblr-red) 100%);
                          --chart-completion-tasks-11-fill-1: color-mix(in srgb, transparent, var(--tblr-red) 16%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Sessions by device</h3>
                        <p class="card-subtitle">Monthly sessions on mobile and desktop.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Mobile</span
                        ><span class="legend legend-pink">
                          <span class="legend-dot"></span>
                          Desktop</span
                        >
                      </div>
                      <div id="chart-area" class="position-relative" role="img" aria-label="Sessions by device"></div>
                      <style>
                        :root {
                          --chart-area-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-area-fill-0: color-mix(in srgb, transparent, var(--tblr-primary) 16%);
                          --chart-area-color-1: color-mix(in srgb, transparent, var(--tblr-pink) 100%);
                          --chart-area-fill-1: color-mix(in srgb, transparent, var(--tblr-pink) 16%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Bandwidth usage</h3>
                        <p class="card-subtitle">Monthly egress and ingress traffic.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Egress</span
                        ><span class="legend legend-pink">
                          <span class="legend-dot"></span>
                          Ingress</span
                        >
                      </div>
                      <div id="chart-area-spline" class="position-relative" role="img" aria-label="Bandwidth usage"></div>
                      <style>
                        :root {
                          --chart-area-spline-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-area-spline-fill-0: color-mix(in srgb, transparent, var(--tblr-primary) 16%);
                          --chart-area-spline-color-1: color-mix(in srgb, transparent, var(--tblr-pink) 100%);
                          --chart-area-spline-fill-1: color-mix(in srgb, transparent, var(--tblr-pink) 16%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Storage by bucket</h3>
                        <p class="card-subtitle">Storage used by media and backups, stacked.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Media</span
                        ><span class="legend legend-pink">
                          <span class="legend-dot"></span>
                          Backups</span
                        >
                      </div>
                      <div id="chart-area-spline-stacked" class="position-relative" role="img" aria-label="Storage by bucket"></div>
                      <style>
                        :root {
                          --chart-area-spline-stacked-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-area-spline-stacked-fill-0: color-mix(in srgb, transparent, var(--tblr-primary) 16%);
                          --chart-area-spline-stacked-color-1: color-mix(in srgb, transparent, var(--tblr-pink) 100%);
                          --chart-area-spline-stacked-fill-1: color-mix(in srgb, transparent, var(--tblr-pink) 16%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <h2 class="page-section-title">Bar charts</h2>
                  <p class="page-section-description">Comparison of separate categories, side by side or stacked.</p>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Bar chart</h3>
                        <p class="card-subtitle">Tickets solved per day, last week.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-completion-tasks" class="position-relative" role="img" aria-label="Bar chart"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Horizontal bars</h3>
                        <p class="card-subtitle">The same tickets as horizontal bars.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-completion-tasks-6" class="position-relative" role="img" aria-label="Horizontal bars"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-6-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Grouped bars</h3>
                        <p class="card-subtitle">Solved and reopened tickets side by side.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Solved</span
                        ><span class="legend legend-red">
                          <span class="legend-dot"></span>
                          Reopened</span
                        >
                      </div>
                      <div id="chart-completion-tasks-8" class="position-relative" role="img" aria-label="Grouped bars"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-8-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                          --chart-completion-tasks-8-color-1: color-mix(in srgb, transparent, var(--tblr-red) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Stacked bars</h3>
                        <p class="card-subtitle">Solved and reopened tickets in one stacked bar per day.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Solved</span
                        ><span class="legend legend-red">
                          <span class="legend-dot"></span>
                          Reopened</span
                        >
                      </div>
                      <div id="chart-completion-tasks-9" class="position-relative" role="img" aria-label="Stacked bars"></div>
                      <style>
                        :root {
                          --chart-completion-tasks-9-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                          --chart-completion-tasks-9-color-1: color-mix(in srgb, transparent, var(--tblr-red) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Semantic colors</h3>
                        <p class="card-subtitle">Cache status of requests per day, colored by meaning.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-cache-status" class="position-relative" role="img" aria-label="Semantic colors"></div>
                      <style>
                        :root {
                          --chart-cache-status-color-0: color-mix(in srgb, transparent, var(--tblr-success) 100%);
                          --chart-cache-status-color-1: color-mix(in srgb, transparent, var(--tblr-danger) 100%);
                          --chart-cache-status-color-2: color-mix(in srgb, transparent, var(--tblr-info) 40%);
                          --chart-cache-status-color-3: color-mix(in srgb, transparent, var(--tblr-warning) 100%);
                          --chart-cache-status-color-4: color-mix(in srgb, transparent, var(--tblr-gray-300) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Signup funnel</h3>
                        <p class="card-subtitle">Visitors left at each step from first visit to customer.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-funnel" class="position-relative" role="img" aria-label="Signup funnel"></div>
                      <style>
                        :root {
                          --chart-funnel-color-0: color-mix(in srgb, transparent, var(--tblr-chart-1) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <h2 class="page-section-title">Circular charts</h2>
                  <p class="page-section-description">Parts of a whole and progress toward a goal, best with a few values.</p>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Traffic sources</h3>
                        <p class="card-subtitle">Share of visits by source.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-demo-pie" class="position-relative" role="img" aria-label="Traffic sources"></div>
                      <style>
                        :root {
                          --chart-demo-pie-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-demo-pie-color-1: color-mix(in srgb, transparent, var(--tblr-primary) 80%);
                          --chart-demo-pie-color-2: color-mix(in srgb, transparent, var(--tblr-primary) 60%);
                          --chart-demo-pie-color-3: color-mix(in srgb, transparent, var(--tblr-gray-300) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Email campaign</h3>
                        <p class="card-subtitle">Delivery, open and click rates of one campaign.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-campaigns" class="position-relative" role="img" aria-label="Email campaign"></div>
                      <style>
                        :root {
                          --chart-campaigns-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-campaigns-color-1: color-mix(in srgb, transparent, var(--tblr-primary) 80%);
                          --chart-campaigns-color-2: color-mix(in srgb, transparent, var(--tblr-primary) 60%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Sales by region</h3>
                        <p class="card-subtitle">Sales volume of each region.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-polar-area" class="position-relative" role="img" aria-label="Sales by region"></div>
                      <style>
                        :root {
                          --chart-polar-area-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-polar-area-color-1: color-mix(in srgb, transparent, var(--tblr-primary) 80%);
                          --chart-polar-area-color-2: color-mix(in srgb, transparent, var(--tblr-primary) 60%);
                          --chart-polar-area-color-3: color-mix(in srgb, transparent, var(--tblr-primary) 40%);
                          --chart-polar-area-color-4: color-mix(in srgb, transparent, var(--tblr-primary) 20%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <h2 class="page-section-title">Other charts</h2>
                  <p class="page-section-description">Mixed series, distributions, schedules and hierarchies.</p>
                </div>
                <div class="col-lg-8">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Spend and leads</h3>
                        <p class="card-subtitle">Monthly spend as columns with leads and trials as lines.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Paid spend</span
                        ><span class="legend legend-azure">
                          <span class="legend-dot"></span>
                          Content spend</span
                        ><span class="legend legend-green">
                          <span class="legend-dot"></span>
                          Leads</span
                        ><span class="legend legend-pink">
                          <span class="legend-dot"></span>
                          Trials</span
                        >
                      </div>
                      <div id="chart-combination" class="position-relative" role="img" aria-label="Spend and leads"></div>
                      <style>
                        :root {
                          --chart-combination-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-combination-color-1: color-mix(in srgb, transparent, var(--tblr-azure) 100%);
                          --chart-combination-color-2: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                          --chart-combination-color-3: color-mix(in srgb, transparent, var(--tblr-pink) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Plan comparison</h3>
                        <p class="card-subtitle">Pro and Enterprise plans rated in six areas.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-radar" class="position-relative" role="img" aria-label="Plan comparison"></div>
                      <style>
                        :root {
                          --chart-radar-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-radar-color-1: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Page load time</h3>
                        <p class="card-subtitle">Page load time samples on desktop and mobile.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Desktop</span
                        ><span class="legend legend-pink">
                          <span class="legend-dot"></span>
                          Mobile</span
                        >
                      </div>
                      <div id="chart-scatter" class="position-relative" role="img" aria-label="Page load time"></div>
                      <style>
                        :root {
                          --chart-scatter-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-scatter-color-1: color-mix(in srgb, transparent, var(--tblr-pink) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Release roadmap</h3>
                        <p class="card-subtitle">Planned duration of each release phase.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-timeline" class="position-relative" role="img" aria-label="Release roadmap"></div>
                      <style>
                        :root {
                          --chart-timeline-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Campaign performance</h3>
                        <p class="card-subtitle">Search and social campaigns on three metrics.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="legend-list justify-content-end mb-3">
                        <span class="legend legend-primary">
                          <span class="legend-dot"></span>
                          Search</span
                        ><span class="legend legend-green">
                          <span class="legend-dot"></span>
                          Social</span
                        >
                      </div>
                      <div id="chart-bubble" class="position-relative" role="img" aria-label="Campaign performance"></div>
                      <style>
                        :root {
                          --chart-bubble-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-bubble-color-1: color-mix(in srgb, transparent, var(--tblr-green) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Storage by folder</h3>
                        <p class="card-subtitle">Disk space taken by each folder.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-treemap" class="position-relative" role="img" aria-label="Storage by folder"></div>
                      <style>
                        :root {
                          --chart-treemap-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">API response times</h3>
                        <p class="card-subtitle">Spread of API response times in each month.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="chart-box-plot" class="position-relative" role="img" aria-label="API response times"></div>
                      <style>
                        :root {
                          --chart-box-plot-color-0: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-box-plot-box-upper: color-mix(in srgb, transparent, var(--tblr-primary) 100%);
                          --chart-box-plot-box-lower: color-mix(in srgb, transparent, var(--tblr-primary) 40%);
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
        const chartKey = 'chart-active-users-2'
        const elementId = 'chart-active-users-2'
        const config = {
          chart: { id: 'active-users-2', type: 'line', fontFamily: 'inherit', height: 288, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'straight' },
          series: [
            { name: 'Mobile', data: [10113, 9996, 9273, 9891, 9497, 9420, 10154, 10168, 10183, 9879, 10079, 10354, 10583, 10611, 10819, 10774, 10680, 12059, 11914, 10686, 10486, 11667, 10919, 10421, 10592, 11153, 10723, 11524, 11583, 11830] },
            { name: 'Desktop', data: [3813, 3597, 6934, 6985, 7484, 7383, 6554, 3857, 3570, 6991, 7402, 7379, 7493, 6487, 3767, 3798, 7319, 9043, 8040, 7468, 6584, 3834, 3614, 7252, 7660, 7374, 7268, 6658, 3974, 3675] },
            { name: 'Tablet', data: [2696, 2696, 1941, 1834, 1967, 2077, 2003, 2480, 2570, 2031, 1918, 1910, 2090, 2063, 2758, 2742, 1872, 1950, 1900, 1992, 2296, 2644, 2937, 2018, 1908, 2023, 2207, 2321, 2899, 3061] },
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
          colors: ['var(--chart-active-users-2-color-0)', 'var(--chart-active-users-2-color-1)', 'var(--chart-active-users-2-color-2)'],
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
      ;(function () {
        const chartKey = 'chart-legend-demo'
        const elementId = 'chart-legend-demo'
        const config = {
          chart: { id: 'legend-demo', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
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
          colors: ['var(--chart-legend-demo-color-0)', 'var(--chart-legend-demo-color-1)', 'var(--chart-legend-demo-color-2)'],
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
              The chart is exposed by the demo Chart component as window.tabler_chart['chart-legend-demo'].
              */
      document.querySelectorAll('#legend-demo-list .legend').forEach((item) => {
        item.addEventListener('click', () => {
          const chart = window.tabler_chart && window.tabler_chart['chart-legend-demo']
          if (!chart) return
          chart.toggleSeries(item.dataset.series)
          item.classList.toggle('legend-off')
        })
      })
    </script>
<script>
      ;(function () {
        const chartKey = 'chart-social-referrals'
        const elementId = 'chart-social-referrals'
        const config = {
          chart: { id: 'social-referrals', type: 'line', fontFamily: 'inherit', height: 288, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            {
              name: 'Facebook',
              data: [
                13281, 8521, 15038, 9983, 15417, 8888, 7052, 14270, 5214, 9587, 5950, 16852, 17836, 12217, 17406, 12262, 9147, 14961, 18292, 15230, 13435, 10649, 5140, 13680, 4508, 13271, 13413, 5543, 18727, 18238, 18175, 6246, 5864, 17847, 9170, 6445, 12945, 8142, 8980, 10422, 15535, 11569, 10114, 17621, 16138, 13046,
                6652, 9906, 14100, 16495, 6749,
              ],
            },
            {
              name: 'Twitter',
              data: [
                3680, 1862, 3070, 2252, 5348, 3091, 3000, 3984, 5176, 5325, 2420, 5474, 3098, 1893, 3748, 2879, 4197, 5186, 4213, 4334, 2807, 1594, 4863, 2030, 3752, 4856, 5341, 3954, 3461, 3097, 3404, 4949, 2283, 3227, 3630, 2360, 3477, 4675, 1901, 2252, 3347, 2954, 5029, 2079, 2830, 3292, 4578, 3401, 4104, 3749,
                4457, 3734,
              ],
            },
            {
              name: 'Dribbble',
              data: [722, 1866, 961, 1108, 1110, 561, 1753, 1815, 1985, 776, 859, 547, 1488, 766, 702, 621, 1599, 1372, 1620, 963, 759, 764, 739, 789, 1696, 1454, 1842, 734, 551, 1689, 1924, 1875, 908, 1675, 1541, 1953, 534, 502, 1524, 1867, 719, 1472, 1608, 1025, 889, 1150, 654, 1695, 1662, 1285, 1787],
            },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4, xaxis: { lines: { show: true } } },
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
            '2020-07-20',
            '2020-07-21',
            '2020-07-22',
            '2020-07-23',
            '2020-07-24',
            '2020-07-25',
            '2020-07-26',
            '2020-07-27',
            '2020-07-28',
            '2020-07-29',
            '2020-07-30',
            '2020-07-31',
            '2020-08-01',
            '2020-08-02',
            '2020-08-03',
            '2020-08-04',
            '2020-08-05',
            '2020-08-06',
            '2020-08-07',
            '2020-08-08',
            '2020-08-09',
          ],
          colors: ['var(--chart-social-referrals-color-0)', 'var(--chart-social-referrals-color-1)', 'var(--chart-social-referrals-color-2)'],
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
        const chartKey = 'chart-tasks-overview'
        const elementId = 'chart-tasks-overview'
        const config = {
          chart: { id: 'tasks-overview', type: 'bar', fontFamily: 'inherit', height: 320, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          plotOptions: { bar: { columnWidth: '50%' } },
          dataLabels: { enabled: false },
          series: [{ name: 'Story points', data: [44, 32, 48, 72, 60, 16, 44, 32, 78, 50, 68, 34, 26, 48, 72, 60, 84, 64, 74, 52, 62, 50, 32, 22] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: {
            labels: { padding: 0 },
            tooltip: { enabled: false },
            axisBorder: { show: false },
            categories: [
              'Sprint 1',
              'Sprint 2',
              'Sprint 3',
              'Sprint 4',
              'Sprint 5',
              'Sprint 6',
              'Sprint 7',
              'Sprint 8',
              'Sprint 9',
              'Sprint 10',
              'Sprint 11',
              'Sprint 12',
              'Sprint 13',
              'Sprint 14',
              'Sprint 15',
              'Sprint 16',
              'Sprint 17',
              'Sprint 18',
              'Sprint 19',
              'Sprint 20',
              'Sprint 21',
              'Sprint 22',
              'Sprint 23',
              'Sprint 24',
            ],
          },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-tasks-overview-color-0)'],
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
        const chartKey = 'chart-completion-tasks-2'
        const elementId = 'chart-completion-tasks-2'
        const config = {
          chart: { id: 'completion-tasks-2', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [{ name: 'Tickets solved', data: [38, 44, 41, 52, 47, 21, 17] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-2-color-0)'],
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
        const chartKey = 'chart-completion-tasks-4'
        const elementId = 'chart-completion-tasks-4'
        const config = {
          chart: { id: 'completion-tasks-4', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'straight' },
          series: [{ name: 'Tickets solved', data: [38, 44, 41, 52, 47, 21, 17] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-4-color-0)'],
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
        const chartKey = 'chart-completion-tasks-5'
        const elementId = 'chart-completion-tasks-5'
        const config = {
          chart: { id: 'completion-tasks-5', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'stepline' },
          series: [{ name: 'Tickets solved', data: [38, 44, 41, 52, 47, 21, 17] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-5-color-0)'],
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
        const chartKey = 'chart-completion-tasks-7'
        const elementId = 'chart-completion-tasks-7'
        const config = {
          chart: { id: 'completion-tasks-7', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [{ name: 'Tickets solved', data: [38, 44, 41, 52, 47, 21, 17] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-7-color-0)'],
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
        const chartKey = 'chart-tasks'
        const elementId = 'chart-tasks'
        const config = {
          chart: { id: 'tasks', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'Opened', data: [12, 15, 9, 18, 24, 6, 4, 14, 31, 22, 17, 19, 8, 5, 16, 21, 13] },
            { name: 'Closed', data: [8, 11, 12, 14, 19, 4, 3, 9, 26, 18, 21, 15, 6, 4, 12, 17, 15] },
            { name: 'Reopened', data: [1, 2, 0, 3, 2, 0, 0, 1, 4, 2, 1, 3, 0, 1, 2, 1, 0] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-tasks-color-0)', 'var(--chart-tasks-color-1)', 'var(--chart-tasks-color-2)'],
          legend: { show: false },
          tooltip: { enabled: false },
          markers: { size: 0, hover: { sizeOffset: 0 } },
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
        const chartKey = 'chart-line'
        const elementId = 'chart-line'
        const config = {
          chart: { id: 'line', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'straight' },
          series: [
            { name: 'Starter', data: [12, 14, 15, 17, 18, 21] },
            { name: 'Pro', data: [31, 34, 38, 41, 45, 52] },
            { name: 'Enterprise', data: [48, 52, 51, 58, 64, 71] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-line-color-0)', 'var(--chart-line-color-1)', 'var(--chart-line-color-2)'],
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
        const chartKey = 'chart-line-stroke'
        const elementId = 'chart-line-stroke'
        const config = {
          chart: { id: 'line-stroke', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, dashArray: [0, 4, 4], lineCap: 'round', curve: 'straight' },
          series: [
            { name: 'Organic', data: [120, 138, 152, 149, 167, 181, 192] },
            { name: 'Paid', data: [80, 92, 88, 101, 96, 110, 118] },
            { name: 'Referral', data: [35, 41, 38, 47, 52, 49, 58] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-line-stroke-color-0)', 'var(--chart-line-stroke-color-1)', 'var(--chart-line-stroke-color-2)'],
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
        const chartKey = 'chart-spline'
        const elementId = 'chart-spline'
        const config = {
          chart: { id: 'spline', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'Web servers', data: [18, 14, 21, 46, 62, 58, 41, 27] },
            { name: 'Workers', data: [34, 29, 26, 38, 51, 47, 39, 36] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['00:00', '03:00', '06:00', '09:00', '12:00', '15:00', '18:00', '21:00'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-spline-color-0)', 'var(--chart-spline-color-1)'],
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
        const chartKey = 'chart-temperature'
        const elementId = 'chart-temperature'
        const config = {
          chart: { id: 'temperature', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'Tokyo', data: [5.8, 6.5, 9.7, 14.8, 19.2, 22.4, 26.1, 27.6, 24.3, 18.7, 13.4, 8.6] },
            { name: 'London', data: [5.2, 5.4, 7.3, 9.8, 13.1, 16.2, 18.7, 18.4, 15.9, 12.3, 8.4, 5.9] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          dataLabels: { enabled: true },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-temperature-color-0)', 'var(--chart-temperature-color-1)'],
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
        const chartKey = 'chart-stepline'
        const elementId = 'chart-stepline'
        const config = {
          chart: { id: 'stepline', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: 2, lineCap: 'round', curve: 'stepline' },
          series: [{ name: 'Instances', data: [2, 2, 3, 5, 5, 4, 6, 8, 8, 6, 5] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['00:00', '02:00', '04:00', '06:00', '08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-stepline-color-0)'],
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
        const chartKey = 'chart-completion-tasks-3'
        const elementId = 'chart-completion-tasks-3'
        const config = {
          chart: { id: 'completion-tasks-3', type: 'area', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-completion-tasks-3-fill-0)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [{ name: 'Tickets solved', data: [38, 44, 41, 52, 47, 21, 17] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-3-color-0)'],
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
        const chartKey = 'chart-completion-tasks-10'
        const elementId = 'chart-completion-tasks-10'
        const config = {
          chart: { id: 'completion-tasks-10', type: 'area', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-completion-tasks-10-fill-0)', 'var(--chart-completion-tasks-10-fill-1)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'Solved', data: [38, 44, 41, 52, 47, 21, 17] },
            { name: 'Reopened', data: [5, 7, 4, 9, 6, 3, 2] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-10-color-0)', 'var(--chart-completion-tasks-10-color-1)'],
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
        const chartKey = 'chart-completion-tasks-11'
        const elementId = 'chart-completion-tasks-11'
        const config = {
          chart: { id: 'completion-tasks-11', type: 'area', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false }, stacked: true },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-completion-tasks-11-fill-0)', 'var(--chart-completion-tasks-11-fill-1)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'Solved', data: [38, 44, 41, 52, 47, 21, 17] },
            { name: 'Reopened', data: [5, 7, 4, 9, 6, 3, 2] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-11-color-0)', 'var(--chart-completion-tasks-11-color-1)'],
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
        const chartKey = 'chart-area'
        const elementId = 'chart-area'
        const config = {
          chart: { id: 'area', type: 'area', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-area-fill-0)', 'var(--chart-area-fill-1)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'straight' },
          series: [
            { name: 'Mobile', data: [5100, 5400, 5900, 6300, 6800, 7200] },
            { name: 'Desktop', data: [4200, 4100, 3900, 4000, 3800, 3700] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-area-color-0)', 'var(--chart-area-color-1)'],
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
        const chartKey = 'chart-area-spline'
        const elementId = 'chart-area-spline'
        const config = {
          chart: { id: 'area-spline', type: 'area', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-area-spline-fill-0)', 'var(--chart-area-spline-fill-1)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'Egress', data: [12, 15, 14, 18, 21, 24] },
            { name: 'Ingress', data: [7, 8, 9, 9, 11, 13] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-area-spline-color-0)', 'var(--chart-area-spline-color-1)'],
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
        const chartKey = 'chart-area-spline-stacked'
        const elementId = 'chart-area-spline-stacked'
        const config = {
          chart: { id: 'area-spline-stacked', type: 'area', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false }, stacked: true },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-area-spline-stacked-fill-0)', 'var(--chart-area-spline-stacked-fill-1)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'Media', data: [140, 152, 161, 170, 182, 195] },
            { name: 'Backups', data: [90, 95, 101, 110, 118, 126] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-area-spline-stacked-color-0)', 'var(--chart-area-spline-stacked-color-1)'],
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
        const chartKey = 'chart-completion-tasks'
        const elementId = 'chart-completion-tasks'
        const config = {
          chart: { id: 'completion-tasks', type: 'bar', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          plotOptions: { bar: { columnWidth: '50%' } },
          dataLabels: { enabled: false },
          series: [{ name: 'Tickets solved', data: [38, 44, 41, 52, 47, 21, 17] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-color-0)'],
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
        const chartKey = 'chart-completion-tasks-6'
        const elementId = 'chart-completion-tasks-6'
        const config = {
          chart: { id: 'completion-tasks-6', type: 'bar', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          plotOptions: { bar: { barHeight: '50%', horizontal: true } },
          dataLabels: { enabled: false },
          series: [{ name: 'Tickets solved', data: [38, 44, 41, 52, 47, 21, 17] }],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-6-color-0)'],
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
        const chartKey = 'chart-completion-tasks-8'
        const elementId = 'chart-completion-tasks-8'
        const config = {
          chart: { id: 'completion-tasks-8', type: 'bar', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          plotOptions: { bar: { columnWidth: '50%' } },
          dataLabels: { enabled: false },
          series: [
            { name: 'Solved', data: [38, 44, 41, 52, 47, 21, 17] },
            { name: 'Reopened', data: [5, 7, 4, 9, 6, 3, 2] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-8-color-0)', 'var(--chart-completion-tasks-8-color-1)'],
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
        const chartKey = 'chart-completion-tasks-9'
        const elementId = 'chart-completion-tasks-9'
        const config = {
          chart: { id: 'completion-tasks-9', type: 'bar', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false }, stacked: true },
          plotOptions: { bar: { columnWidth: '50%' } },
          dataLabels: { enabled: false },
          series: [
            { name: 'Solved', data: [38, 44, 41, 52, 47, 21, 17] },
            { name: 'Reopened', data: [5, 7, 4, 9, 6, 3, 2] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-completion-tasks-9-color-0)', 'var(--chart-completion-tasks-9-color-1)'],
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
        const chartKey = 'chart-cache-status'
        const elementId = 'chart-cache-status'
        const config = {
          chart: { id: 'cache-status', type: 'bar', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false }, stacked: true },
          plotOptions: { bar: { columnWidth: '50%' } },
          dataLabels: { enabled: false },
          series: [
            { name: 'Hit', data: [18000, 19200, 21000, 20300, 22000, 16600, 15000] },
            { name: 'Error', data: [4300, 4700, 5000, 5000, 5300, 4000, 3700] },
            { name: 'Revalidated', data: [2700, 3000, 3200, 3100, 3400, 2500, 2300] },
            { name: 'Expired', data: [1300, 1500, 1600, 1600, 1700, 1200, 1100] },
            { name: 'Bypass', data: [700, 800, 900, 800, 900, 700, 600] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-cache-status-color-0)', 'var(--chart-cache-status-color-1)', 'var(--chart-cache-status-color-2)', 'var(--chart-cache-status-color-3)', 'var(--chart-cache-status-color-4)'],
          legend: { show: true, position: 'bottom', offsetY: 12, markers: { size: 5, strokeWidth: 0, shape: 'circle' }, itemMargin: { horizontal: 8, vertical: 8 } },
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
      ;(function () {
        const chartKey = 'chart-funnel'
        const elementId = 'chart-funnel'
        const config = {
          chart: { id: 'funnel', type: 'bar', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          plotOptions: { bar: { horizontal: true, barHeight: '80%', isFunnel: true, isFunnel3d: false, distributed: true } },
          dataLabels: { enabled: true },
          series: [{ name: 'Pipeline', data: [1380, 920, 610, 380, 190] }],
          grid: { strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, categories: ['Visitors', 'Sign-ups', 'Trials', 'Demos', 'Customers'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--tblr-primary)', 'var(--tblr-azure)', 'var(--tblr-cyan)', 'var(--tblr-teal)', 'var(--tblr-green)'],
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
        const chartKey = 'chart-demo-pie'
        const elementId = 'chart-demo-pie'
        const config = {
          chart: { id: 'demo-pie', type: 'donut', fontFamily: 'inherit', height: 240, sparkline: { enabled: true }, animations: { enabled: false } },
          series: [46, 38, 19, 11],
          labels: ['Organic search', 'Direct', 'Referral', 'Social'],
          grid: { strokeDashArray: 4 },
          colors: ['var(--chart-demo-pie-color-0)', 'var(--chart-demo-pie-color-1)', 'var(--chart-demo-pie-color-2)', 'var(--chart-demo-pie-color-3)'],
          legend: { show: true, position: 'bottom', offsetY: 12, markers: { size: 5, strokeWidth: 0, shape: 'circle' }, itemMargin: { horizontal: 8, vertical: 8 } },
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
<script>
      ;(function () {
        const chartKey = 'chart-campaigns'
        const elementId = 'chart-campaigns'
        const config = {
          chart: { id: 'campaigns', type: 'radialBar', fontFamily: 'inherit', height: 240, sparkline: { enabled: true }, animations: { enabled: false } },
          plotOptions: { radialBar: { startAngle: -120, endAngle: 120, hollow: { margin: 16, size: '50%' }, dataLabels: { show: true, name: { show: false, offsetY: 0, fontSize: '16px', color: 'inherit' }, value: { offsetY: -8, fontSize: '24px', fontWeight: 600 } } } },
          series: [96, 48, 14],
          labels: ['Delivered', 'Opened', 'Clicked'],
          grid: { strokeDashArray: 4 },
          colors: ['var(--chart-campaigns-color-0)', 'var(--chart-campaigns-color-1)', 'var(--chart-campaigns-color-2)'],
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
        const chartKey = 'chart-polar-area'
        const elementId = 'chart-polar-area'
        const config = {
          chart: { id: 'polar-area', type: 'polarArea', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          plotOptions: { polarArea: { rings: { strokeColor: 'var(--apx-grid)' }, spokes: { connectorColors: 'var(--apx-grid)' } } },
          series: [42, 33, 21, 14, 9],
          labels: ['North America', 'Europe', 'Asia', 'South America', 'Africa'],
          grid: { strokeDashArray: 4 },
          colors: ['var(--chart-polar-area-color-0)', 'var(--chart-polar-area-color-1)', 'var(--chart-polar-area-color-2)', 'var(--chart-polar-area-color-3)', 'var(--chart-polar-area-color-4)'],
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
        const chartKey = 'chart-combination'
        const elementId = 'chart-combination'
        const config = {
          chart: { id: 'combination', type: 'line', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          stroke: { width: [0, 0, 2, 2], lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'Paid spend', type: 'column', data: [120, 140, 130, 160, 175, 190] },
            { name: 'Content spend', type: 'column', data: [60, 70, 65, 80, 90, 100] },
            { name: 'Leads', type: 'line', data: [200, 230, 215, 260, 290, 310] },
            { name: 'Trials', type: 'line', data: [90, 105, 98, 120, 135, 150] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-combination-color-0)', 'var(--chart-combination-color-1)', 'var(--chart-combination-color-2)', 'var(--chart-combination-color-3)'],
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
        const chartKey = 'chart-radar'
        const elementId = 'chart-radar'
        const config = {
          chart: { id: 'radar', type: 'radar', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          plotOptions: { radar: { polygons: { strokeColors: 'var(--apx-grid)', connectorColors: 'var(--apx-grid)', fill: { colors: ['transparent', 'transparent'] } } } },
          markers: { size: 3 },
          fill: { opacity: 0.15 },
          series: [
            { name: 'Pro', data: [70, 60, 80, 50, 65, 90] },
            { name: 'Enterprise', data: [95, 90, 85, 100, 90, 40] },
          ],
          grid: { strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Support', 'Security', 'Speed', 'Storage', 'Integrations', 'Price'] },
          yaxis: { show: false },
          colors: ['var(--chart-radar-color-0)', 'var(--chart-radar-color-1)'],
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
        const chartKey = 'chart-scatter'
        const elementId = 'chart-scatter'
        const config = {
          chart: { id: 'scatter', type: 'scatter', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          series: [
            { name: 'Desktop', data: [1.8, 1.9, 1.6, 1.5, 1.4, 1.3] },
            { name: 'Mobile', data: [3.4, 3.2, 3.3, 2.9, 2.8, 2.6] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'] },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-scatter-color-0)', 'var(--chart-scatter-color-1)'],
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
        const chartKey = 'chart-timeline'
        const elementId = 'chart-timeline'
        const config = {
          chart: { id: 'timeline', type: 'rangeBar', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          plotOptions: { bar: { barHeight: '50%', horizontal: true } },
          series: [
            {
              name: 'Roadmap',
              data: [
                { x: 'Research', y: [1767571200000, 1770681600000] },
                { x: 'Design', y: [1769904000000, 1773532800000] },
                { x: 'Development', y: [1772323200000, 1779235200000] },
                { x: 'Testing', y: [1777593600000, 1781049600000] },
                { x: 'Launch', y: [1780272000000, 1782345600000] },
              ],
            },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [],
          colors: ['var(--chart-timeline-color-0)'],
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
        const chartKey = 'chart-bubble'
        const elementId = 'chart-bubble'
        const config = {
          chart: { id: 'bubble', type: 'bubble', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          fill: { opacity: 0.8 },
          dataLabels: { enabled: false },
          series: [
            {
              name: 'Search',
              data: [
                { x: 12, y: 86, z: 24 },
                { x: 28, y: 132, z: 38 },
                { x: 45, y: 118, z: 19 },
                { x: 63, y: 174, z: 31 },
              ],
            },
            {
              name: 'Social',
              data: [
                { x: 9, y: 54, z: 29 },
                { x: 21, y: 71, z: 14 },
                { x: 38, y: 96, z: 41 },
                { x: 52, y: 83, z: 22 },
              ],
            },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false } },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-bubble-color-0)', 'var(--chart-bubble-color-1)'],
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
        const chartKey = 'chart-treemap'
        const elementId = 'chart-treemap'
        const config = {
          chart: { id: 'treemap', type: 'treemap', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          plotOptions: { treemap: { distributed: false, enableShades: true, shadeIntensity: 0.4 } },
          dataLabels: { enabled: true },
          series: [
            {
              name: 'Storage',
              data: [
                { x: 'Documents', y: 218 },
                { x: 'Photos', y: 149 },
                { x: 'Videos', y: 184 },
                { x: 'Backups', y: 55 },
                { x: 'Music', y: 84 },
                { x: 'Archives', y: 31 },
                { x: 'Other', y: 70 },
              ],
            },
          ],
          grid: { strokeDashArray: 4 },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-treemap-color-0)'],
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
        const chartKey = 'chart-box-plot'
        const elementId = 'chart-box-plot'
        const config = {
          chart: { id: 'box-plot', type: 'boxPlot', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false } },
          plotOptions: { boxPlot: { colors: { upper: 'var(--chart-box-plot-box-upper)', lower: 'var(--chart-box-plot-box-lower)' } } },
          stroke: { colors: ['var(--tblr-secondary)'] },
          series: [
            {
              name: 'Response time',
              data: [
                { x: 'Jan', y: [54, 66, 69, 75, 88] },
                { x: 'Feb', y: [43, 65, 69, 76, 81] },
                { x: 'Mar', y: [31, 39, 45, 51, 59] },
                { x: 'Apr', y: [39, 46, 55, 65, 71] },
                { x: 'May', y: [29, 31, 35, 39, 44] },
                { x: 'Jun', y: [41, 49, 58, 61, 67] },
              ],
            },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false } },
          yaxis: { labels: { padding: 4 } },
          colors: ['var(--chart-box-plot-color-0)'],
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
