<x-preview.page :title='"Billing"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Billing</h1>

                  <div class="text-secondary mt-1">Manage your plan, payment methods, and invoices.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <button type="button" slot="page-header-actions" class="btn btn-primary">
                    <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path
                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                      />
                      <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg
                    >Manage subscription
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="row row-cards">
                <div class="col-lg-8">
                  <div class="row row-cards">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header flex-wrap gap-3">
                          <div>
                            <h2 class="card-title">
                              Pro plan
                              <span class="badge bg-success-lt ms-1">Active</span>
                            </h2>
                            <p class="card-subtitle">Renews on September 18, 2026</p>
                          </div>
                          <div class="card-actions d-flex align-items-center gap-3">
                            <div class="d-flex align-items-baseline">
                              <span class="h1 m-0">$49</span>
                              <span class="text-secondary">/month</span>
                            </div>
                            <button type="button" class="btn btn-sm">Change plan</button>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <div class="fw-medium">Monthly requests</div>
                            <div>
                              <strong>7,420</strong>
                              <span class="text-secondary">/ 10,000</span>
                            </div>
                          </div>
                          <div class="progress progress-sm mb-2">
                            <div class="progress-bar bg-primary" style="width: 74%" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" aria-label="74% Complete">
                              <span class="visually-hidden">74% Complete</span>
                            </div>
                          </div>
                          <div class="text-secondary">74% of the included usage. The counter resets at the start of each billing period.</div>
                        </div>
                        <div class="card-body">
                          <div class="datagrid">
                            <div class="datagrid-item">
                              <div class="datagrid-title">Billing period</div>
                              <div class="datagrid-content">Monthly</div>
                            </div>
                            <div class="datagrid-item">
                              <div class="datagrid-title">Next invoice</div>
                              <div class="datagrid-content">September 18, 2026</div>
                            </div>
                            <div class="datagrid-item">
                              <div class="datagrid-title">Seats</div>
                              <div class="datagrid-content">
                                <div class="d-flex align-items-center gap-2">
                                  <input type="text" class="form-control form-control-sm" data-bs-toggle="number-input" value="10" min="8" max="100" aria-label="Seats in the plan" />
                                  <span class="text-secondary">8 used</span>
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
                          <div>
                            <h2 class="card-title">Invoices</h2>
                            <p class="card-subtitle">Invoices are issued on the 18th of each month.</p>
                          </div>
                          <div class="card-actions">
                            <a href="/preview/invoice" class="btn btn-sm">View all</a>
                          </div>
                        </div>
                        <div class="list-group list-group-hoverable card-list-group">
                          <div class="list-group-item">
                            <div class="row align-items-center g-3">
                              <div class="col-12 col-sm">
                                <div class="fw-medium">Sep 18, 2026</div>
                                <div class="text-secondary">INV-2026-0089</div>
                              </div>
                              <div class="col-auto fw-medium">$49.00</div>
                              <div class="col-auto">
                                <span class="badge bg-warning-lt">Open</span>
                              </div>
                              <div class="col-auto ms-auto ms-sm-0">
                                <div class="btn-list">
                                  <button type="button" class="btn btn-primary btn-sm">Pay now</button
                                  ><button type="button" aria-label="Download invoice INV-2026-0089" class="btn btn-sm btn-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/download -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                      <path d="M7 11l5 5l5 -5" />
                                      <path d="M12 4l0 12" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center g-3">
                              <div class="col-12 col-sm">
                                <div class="fw-medium">Aug 18, 2026</div>
                                <div class="text-secondary">INV-2026-0081</div>
                              </div>
                              <div class="col-auto fw-medium">$49.00</div>
                              <div class="col-auto">
                                <span class="badge bg-success-lt">Paid</span>
                              </div>
                              <div class="col-auto ms-auto ms-sm-0">
                                <div class="btn-list">
                                  <button type="button" aria-label="Download invoice INV-2026-0081" class="btn btn-sm btn-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/download -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                      <path d="M7 11l5 5l5 -5" />
                                      <path d="M12 4l0 12" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center g-3">
                              <div class="col-12 col-sm">
                                <div class="fw-medium">Jul 18, 2026</div>
                                <div class="text-secondary">INV-2026-0074</div>
                              </div>
                              <div class="col-auto fw-medium">$49.00</div>
                              <div class="col-auto">
                                <span class="badge bg-success-lt">Paid</span>
                              </div>
                              <div class="col-auto ms-auto ms-sm-0">
                                <div class="btn-list">
                                  <button type="button" aria-label="Download invoice INV-2026-0074" class="btn btn-sm btn-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/download -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                      <path d="M7 11l5 5l5 -5" />
                                      <path d="M12 4l0 12" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list-group-item">
                            <div class="row align-items-center g-3">
                              <div class="col-12 col-sm">
                                <div class="fw-medium">Jun 18, 2026</div>
                                <div class="text-secondary">INV-2026-0066</div>
                              </div>
                              <div class="col-auto fw-medium">$49.00</div>
                              <div class="col-auto">
                                <span class="badge bg-success-lt">Paid</span>
                              </div>
                              <div class="col-auto ms-auto ms-sm-0">
                                <div class="btn-list">
                                  <button type="button" aria-label="Download invoice INV-2026-0066" class="btn btn-sm btn-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/download -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                      <path d="M7 11l5 5l5 -5" />
                                      <path d="M12 4l0 12" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="row row-cards">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div>
                            <h2 class="card-title">Payment method</h2>
                            <p class="card-subtitle">The default method is charged on every invoice.</p>
                          </div>
                          <div class="card-actions">
                            <button type="button" class="btn btn-sm">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" /></svg
                              >Add method
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                            <div class="form-selectgroup-item flex-fill">
                              <input type="radio" id="payment-method-visa" name="payment-method" value="visa" class="form-selectgroup-input" checked />
                              <div class="form-selectgroup-label d-flex align-items-center p-3">
                                <label for="payment-method-visa" class="d-flex align-items-center flex-fill mb-0">
                                  <div class="me-3">
                                    <span class="form-selectgroup-check"></span>
                                  </div>
                                  <span class="payment payment-sm payment-provider-visa me-3"></span>
                                  <div class="me-auto">
                                    <div class="fw-medium">Visa ending in 4242</div>
                                    <div class="text-secondary">Expires 09/2028</div>
                                  </div>
                                  <span class="badge bg-primary-lt me-2">Default</span>
                                </label>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-action btn-sm" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Actions for Visa ending in 4242">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      <path d="M11 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      <path d="M11 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    </svg>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <button type="button" class="dropdown-item">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/pencil -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                      </svg>
                                      Edit
                                    </button>
                                    <button type="button" class="dropdown-item text-danger">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                      </svg>
                                      Remove
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-selectgroup-item flex-fill">
                              <input type="radio" id="payment-method-mastercard" name="payment-method" value="mastercard" class="form-selectgroup-input" />
                              <div class="form-selectgroup-label d-flex align-items-center p-3">
                                <label for="payment-method-mastercard" class="d-flex align-items-center flex-fill mb-0">
                                  <div class="me-3">
                                    <span class="form-selectgroup-check"></span>
                                  </div>
                                  <span class="payment payment-sm payment-provider-mastercard me-3"></span>
                                  <div class="me-auto">
                                    <div class="fw-medium">Mastercard ending in 5512</div>
                                    <div class="text-secondary">Expires 03/2027</div>
                                  </div>
                                </label>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-action btn-sm" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Actions for Mastercard ending in 5512">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      <path d="M11 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      <path d="M11 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    </svg>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <button type="button" class="dropdown-item">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                      </svg>
                                      Set as default
                                    </button>
                                    <button type="button" class="dropdown-item">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/pencil -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                      </svg>
                                      Edit
                                    </button>
                                    <button type="button" class="dropdown-item text-danger">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                      </svg>
                                      Remove
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-selectgroup-item flex-fill">
                              <input type="radio" id="payment-method-paypal" name="payment-method" value="paypal" class="form-selectgroup-input" />
                              <div class="form-selectgroup-label d-flex align-items-center p-3">
                                <label for="payment-method-paypal" class="d-flex align-items-center flex-fill mb-0">
                                  <div class="me-3">
                                    <span class="form-selectgroup-check"></span>
                                  </div>
                                  <span class="payment payment-sm payment-provider-paypal me-3"></span>
                                  <div class="me-auto">
                                    <div class="fw-medium">PayPal</div>
                                    <div class="text-secondary"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4b6bdb8b8bdbab394a0b5b6b8b1a6fabdbb">[email&#160;protected]</a></div>
                                  </div>
                                </label>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-action btn-sm" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Actions for PayPal">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      <path d="M11 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      <path d="M11 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    </svg>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <button type="button" class="dropdown-item">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                      </svg>
                                      Set as default
                                    </button>
                                    <button type="button" class="dropdown-item">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/pencil -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                      </svg>
                                      Edit
                                    </button>
                                    <button type="button" class="dropdown-item text-danger">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                      </svg>
                                      Remove
                                    </button>
                                  </div>
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
                          <div>
                            <h2 class="card-title">Billing details</h2>
                            <p class="card-subtitle">Shown on every invoice and receipt.</p>
                          </div>
                          <div class="card-actions">
                            <button type="button" class="btn btn-sm">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/pencil -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                <path d="M13.5 6.5l4 4" /></svg
                              >Edit
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="datagrid">
                            <div class="datagrid-item">
                              <div class="datagrid-title">Company</div>
                              <div class="datagrid-content">Tabler Ltd.</div>
                            </div>
                            <div class="datagrid-item">
                              <div class="datagrid-title">Billing email</div>
                              <div class="datagrid-content"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6103080d0d080f06211500030d04134f080e">[email&#160;protected]</a></div>
                            </div>
                            <div class="datagrid-item">
                              <div class="datagrid-title">Tax ID</div>
                              <div class="datagrid-content">EU123456789</div>
                            </div>
                            <div class="datagrid-item">
                              <div class="datagrid-title">Address</div>
                              <div class="datagrid-content">44 Harbor Street, Portland, OR 97209, United States</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <h2 class="card-title">Cancel subscription</h2>
                          <p class="card-subtitle">Your plan stays active until the end of the current billing period. After that the workspace switches to the free plan and API access is paused.</p>
                          <button type="button" class="btn btn-ghost-danger btn-sm">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M18 6l-12 12" />
                              <path d="M6 6l12 12" /></svg
                            >Cancel subscription
                          </button>
                        </div>
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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
