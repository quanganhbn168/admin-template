<x-preview.page :title='"Tracking"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Tracking</h1>

                  <div class="text-secondary mt-1">Tracking blocks show an uptime or activity history as a row of colored bars.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/tracking" target="_blank" rel="noopener" class="link-secondary">
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
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Basic example</h2>
                      <p class="card-subtitle">Hover a block to see its status.</p>
                      <div class="tracking">
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Downtime"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Big load"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Downtime"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block" data-bs-toggle="tooltip" data-bs-placement="top" title="No data"></div>
                        <div class="tracking-block" data-bs-toggle="tooltip" data-bs-placement="top" title="No data"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="subheader">Status monitoring</div>
                        <div class="ms-auto lh-1">
                          <div class="dropdown">
                            <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Current month </a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item active" href="#">Current month</a>
                              <a class="dropdown-item" href="#">Last month</a>
                              <a class="dropdown-item" href="#">Last 3 months</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-baseline">
                        <div class="h1 mb-3 me-2">99.5%</div>
                        <div class="me-auto">
                          <span class="text-green d-inline-flex align-items-center lh-1">
                            <span class="visually-hidden">Increased by </span>2%
                            <!-- Download SVG icon from http://tabler.io/icons/icon/arrow-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon ms-0 icon-sm">
                              <path d="M12 5l0 14" />
                              <path d="M18 11l-6 -6" />
                              <path d="M6 11l6 -6" />
                            </svg>
                          </span>
                        </div>
                      </div>
                      <div class="mt-2">
                        <div class="tracking">
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Downtime"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Big load"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Downtime"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block" data-bs-toggle="tooltip" data-bs-placement="top" title="No data"></div>
                          <div class="tracking-block" data-bs-toggle="tooltip" data-bs-placement="top" title="No data"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                          <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Squares variant</h2>
                      <p class="card-subtitle">Add <code>.tracking-squares</code> for square, evenly spaced blocks.</p>
                      <div class="tracking tracking-squares">
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Downtime"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Big load"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Downtime"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block" data-bs-toggle="tooltip" data-bs-placement="top" title="No data"></div>
                        <div class="tracking-block" data-bs-toggle="tooltip" data-bs-placement="top" title="No data"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                        <div class="tracking-block bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Operational"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
