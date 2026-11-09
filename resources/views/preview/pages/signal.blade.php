<x-preview.page :title='"Signal"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Signal</h1>

                  <div class="text-secondary mt-1">Signals show a level, such as priority or strength, as a small row of stepped bars.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/signal" target="_blank" rel="noopener" class="link-secondary">
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
                      <h2 class="card-title">By priority</h2>
                      <p class="card-subtitle">The number of lit bars carries the level, the color only supports it.</p>
                      <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                          <span class="signal signal-orange" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar active"></span></span>
                          Urgent
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <span class="signal signal-blue" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                          Normal
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <span class="signal signal-green" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar"></span><span class="signal-bar"></span></span>
                          Low
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <span class="signal" aria-hidden="true"><span class="signal-bar"></span><span class="signal-bar"></span><span class="signal-bar"></span></span>
                          None
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Number of bars</h2>
                      <p class="card-subtitle">Use from two to five <code>.signal-bar</code> elements; the steps stay even.</p>
                      <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                          <span class="signal signal-primary" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                          1 of 2
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <span class="signal signal-primary" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                          2 of 3
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <span class="signal signal-primary" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                          3 of 4
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <span class="signal signal-primary" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                          4 of 5
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Sizes</h2>
                      <p class="card-subtitle">A signal is a <code>1.25rem</code> square, like an extra small avatar. Set <code>--tblr-signal-size</code> to resize it.</p>
                      <div class="d-flex align-items-end gap-4">
                        <span class="signal signal-primary" role="img" aria-label="2 of 3" style="--tblr-signal-size: 1rem"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                        ><span class="signal signal-primary" role="img" aria-label="2 of 3" style="--tblr-signal-size: 1.25rem"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                        ><span class="signal signal-primary" role="img" aria-label="2 of 3" style="--tblr-signal-size: 1.5rem"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                        ><span class="signal signal-primary" role="img" aria-label="2 of 3" style="--tblr-signal-size: 2rem"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                        ><span class="signal signal-primary" role="img" aria-label="2 of 3" style="--tblr-signal-size: 2.5rem"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Colors</h2>
                      <p class="card-subtitle">Add <code>.signal-&#123;color&#125;</code> to color the bars.</p>
                      <div class="d-flex flex-column gap-3">
                        <div>
                          <div class="subheader mb-2">Semantic colors</div>
                          <div class="d-flex flex-wrap gap-3">
                            <span class="signal signal-primary" role="img" aria-label="2 of 3, primary"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-secondary" role="img" aria-label="2 of 3, secondary"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-success" role="img" aria-label="2 of 3, success"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-info" role="img" aria-label="2 of 3, info"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-warning" role="img" aria-label="2 of 3, warning"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-danger" role="img" aria-label="2 of 3, danger"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-dark" role="img" aria-label="2 of 3, dark"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-muted" role="img" aria-label="2 of 3, muted"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                          </div>
                        </div>
                        <div>
                          <div class="subheader mb-2">Extra colors</div>
                          <div class="d-flex flex-wrap gap-3">
                            <span class="signal signal-blue" role="img" aria-label="2 of 3, blue"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-azure" role="img" aria-label="2 of 3, azure"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-indigo" role="img" aria-label="2 of 3, indigo"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-purple" role="img" aria-label="2 of 3, purple"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-pink" role="img" aria-label="2 of 3, pink"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-red" role="img" aria-label="2 of 3, red"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-orange" role="img" aria-label="2 of 3, orange"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-yellow" role="img" aria-label="2 of 3, yellow"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-lime" role="img" aria-label="2 of 3, lime"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-green" role="img" aria-label="2 of 3, green"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-teal" role="img" aria-label="2 of 3, teal"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span
                            ><span class="signal signal-cyan" role="img" aria-label="2 of 3, cyan"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table">
                        <thead>
                          <tr>
                            <th>Task</th>
                            <th>Priority</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Payment page returns 500 on submit</td>
                            <td class="text-nowrap">
                              <span class="signal signal-red me-1" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar active"></span></span> Urgent
                            </td>
                          </tr>
                          <tr>
                            <td>Update the onboarding copy</td>
                            <td class="text-nowrap">
                              <span class="signal signal-blue me-1" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span> Normal
                            </td>
                          </tr>
                          <tr>
                            <td>Export invoices to CSV</td>
                            <td class="text-nowrap">
                              <span class="signal signal-blue me-1" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span> Normal
                            </td>
                          </tr>
                          <tr>
                            <td>Refresh the team page photos</td>
                            <td class="text-nowrap">
                              <span class="signal signal-green me-1" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar"></span><span class="signal-bar"></span></span> Low
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
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
