<x-preview.page :title='"Data grid"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Data grid</h1>

                  <div class="text-secondary mt-1">A data grid lays out label/value pairs in a compact, aligned grid.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/datagrid" target="_blank" rel="noopener" class="link-secondary">
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
                    <div class="card-header">
                      <h2 class="card-title">Base info</h2>
                    </div>
                    <div class="card-body">
                      <div class="datagrid">
                        <div class="datagrid-item">
                          <div class="datagrid-title">Registrar</div>
                          <div class="datagrid-content">Third Party</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Nameservers</div>
                          <div class="datagrid-content">Third Party</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Port number</div>
                          <div class="datagrid-content">3306</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Expiration date</div>
                          <div class="datagrid-content">–</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Creator</div>
                          <div class="datagrid-content">
                            <div class="d-flex align-items-center">
                              <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar avatar-xs me-2"></span>
                              Paweł Kuna
                            </div>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Age</div>
                          <div class="datagrid-content">15 days</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Edge network</div>
                          <div class="datagrid-content">
                            <span class="status status-green"> Active </span>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Avatars list</div>
                          <div class="datagrid-content">
                            <div class="avatar-list avatar-list-stacked avatar-list-xs">
                              <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar avatar-xs"></span><span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar avatar-xs"></span><span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs"></span
                              ><span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar avatar-xs"></span><span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs"></span><span class="avatar avatar-xs">+3</span>
                            </div>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Checkbox</div>
                          <div class="datagrid-content">
                            <label class="form-check">
                              <input class="form-check-input" type="checkbox" checked />
                              <span class="form-check-label">Click me</span>
                            </label>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Icon</div>
                          <div class="datagrid-content">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green icon-inline"><path d="M5 12l5 5l10 -10" /></svg>
                            Checked
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Form control</div>
                          <div class="datagrid-content">
                            <input type="text" class="form-control form-control-flush" placeholder="Input placeholder" />
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Longer description</div>
                          <div class="datagrid-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Basic</h2>
                      <p class="card-subtitle">A <code>.datagrid</code> with plain text values.</p>
                      <div class="datagrid">
                        <div class="datagrid-item">
                          <div class="datagrid-title">Plan</div>
                          <div class="datagrid-content">Business</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Billing period</div>
                          <div class="datagrid-content">Monthly</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Next invoice</div>
                          <div class="datagrid-content">October 18, 2026</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Seats</div>
                          <div class="datagrid-content">8 of 10 used</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Description list</h2>
                      <p class="card-subtitle">Use <code>dl</code>, <code>dt</code> and <code>dd</code> so screen readers announce the pairs.</p>
                      <dl class="datagrid">
                        <div class="datagrid-item">
                          <dt class="datagrid-title">Company</dt>
                          <dd class="datagrid-content">Tabler Ltd.</dd>
                        </div>
                        <div class="datagrid-item">
                          <dt class="datagrid-title">Tax ID</dt>
                          <dd class="datagrid-content">EU123456789</dd>
                        </div>
                        <div class="datagrid-item">
                          <dt class="datagrid-title">Billing email</dt>
                          <dd class="datagrid-content"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="46242f2a2a2f2821063227242a2334682f29">[email&#160;protected]</a></dd>
                        </div>
                        <div class="datagrid-item">
                          <dt class="datagrid-title">Country</dt>
                          <dd class="datagrid-content">Poland</dd>
                        </div>
                      </dl>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Narrow columns</h2>
                      <p class="card-subtitle">Lower <code>--tblr-datagrid-item-width</code> to fit more columns in a row.</p>
                      <div style="--tblr-datagrid-item-width: 7rem" class="datagrid">
                        <div class="datagrid-item">
                          <div class="datagrid-title">CPU</div>
                          <div class="datagrid-content">8 cores</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Memory</div>
                          <div class="datagrid-content">32 GB</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Storage</div>
                          <div class="datagrid-content">512 GB</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Region</div>
                          <div class="datagrid-content">eu-central</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Uptime</div>
                          <div class="datagrid-content">99.98%</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Backups</div>
                          <div class="datagrid-content">Daily</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">IPv6</div>
                          <div class="datagrid-content">Enabled</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Port</div>
                          <div class="datagrid-content">3306</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Compact gap</h2>
                      <p class="card-subtitle">Lower <code>--tblr-datagrid-padding</code> to bring the items closer together.</p>
                      <div style="--tblr-datagrid-item-width: 7rem; --tblr-datagrid-padding: 0.75rem" class="datagrid">
                        <div class="datagrid-item">
                          <div class="datagrid-title">CPU</div>
                          <div class="datagrid-content">8 cores</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Memory</div>
                          <div class="datagrid-content">32 GB</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Storage</div>
                          <div class="datagrid-content">512 GB</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Region</div>
                          <div class="datagrid-content">eu-central</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Uptime</div>
                          <div class="datagrid-content">99.98%</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Backups</div>
                          <div class="datagrid-content">Daily</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">IPv6</div>
                          <div class="datagrid-content">Enabled</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Port</div>
                          <div class="datagrid-content">3306</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Horizontal</h2>
                      <p class="card-subtitle">Add <code>.datagrid-horizontal</code> to put the label beside the value.</p>
                      <div style="--tblr-datagrid-padding: 1rem" class="datagrid datagrid-horizontal">
                        <div class="datagrid-item">
                          <div class="datagrid-title">Plan</div>
                          <div class="datagrid-content">Business</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Status</div>
                          <div class="datagrid-content">
                            <span class="status status-green">Active</span>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Next invoice</div>
                          <div class="datagrid-content">October 18, 2026</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Address</div>
                          <div class="datagrid-content">44 Harbor Street, Portland, OR 97209, United States</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Horizontal in columns</h2>
                      <p class="card-subtitle">Add <code>.datagrid-cols-2</code> and lower <code>--tblr-datagrid-title-width</code> to fit two pairs in a row.</p>
                      <div style="--tblr-datagrid-padding: 1rem; --tblr-datagrid-title-width: 5rem" class="datagrid datagrid-horizontal datagrid-cols-2">
                        <div class="datagrid-item">
                          <div class="datagrid-title">CPU</div>
                          <div class="datagrid-content">8 cores</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Memory</div>
                          <div class="datagrid-content">32 GB</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Storage</div>
                          <div class="datagrid-content">512 GB</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Region</div>
                          <div class="datagrid-content">eu-central</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Uptime</div>
                          <div class="datagrid-content">99.98%</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Backups</div>
                          <div class="datagrid-content">Daily</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Single column</h2>
                      <p class="card-subtitle">Add <code>.datagrid-cols-1</code> to stack the items.</p>
                      <div style="--tblr-datagrid-padding: 1rem" class="datagrid datagrid-cols-1">
                        <div class="datagrid-item">
                          <div class="datagrid-title">Customer</div>
                          <div class="datagrid-content">
                            <div class="d-flex align-items-center">
                              <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs me-2"></span>
                              Mallory Hulme
                            </div>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Email</div>
                          <div class="datagrid-content">
                            <a href="#"><span class="__cf_email__" data-cfemail="761b1e031a1b13443612191b171f181b17041d13025815191b">[email&#160;protected]</span></a>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Shipping address</div>
                          <div class="datagrid-content">44 Harbor Street, Portland, OR 97209, United States</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Notes</div>
                          <div class="datagrid-content">
                            <span class="text-secondary">Not set</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Two columns</h2>
                      <p class="card-subtitle">Add <code>.datagrid-cols-2</code> to keep two columns at any width.</p>
                      <div style="--tblr-datagrid-padding: 1rem" class="datagrid datagrid-cols-2">
                        <div class="datagrid-item">
                          <div class="datagrid-title">Order</div>
                          <div class="datagrid-content">#48213</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Status</div>
                          <div class="datagrid-content">
                            <span class="badge bg-green-lt">Paid</span>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Placed</div>
                          <div class="datagrid-content">September 12, 2026</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Delivery</div>
                          <div class="datagrid-content">September 16, 2026</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Items</div>
                          <div class="datagrid-content">3</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Total</div>
                          <div class="datagrid-content">
                            <strong>$248.00</strong>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Payment</div>
                          <div class="datagrid-content">Visa ending 4242</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Carrier</div>
                          <div class="datagrid-content">DHL Express</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Statuses and progress</h2>
                      <p class="card-subtitle">A value can hold a status, a badge or a progress bar.</p>
                      <div style="--tblr-datagrid-padding: 1rem" class="datagrid datagrid-cols-2">
                        <div class="datagrid-item">
                          <div class="datagrid-title">State</div>
                          <div class="datagrid-content">
                            <span class="status status-green">Running</span>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Health</div>
                          <div class="datagrid-content">
                            <span class="status status-yellow">Degraded</span>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Environment</div>
                          <div class="datagrid-content">
                            <span class="badge bg-blue-lt">Production</span>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Version</div>
                          <div class="datagrid-content">
                            <code>v1.6.1</code>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Disk usage</div>
                          <div class="datagrid-content">
                            <div class="mb-1">68%</div>
                            <div class="progress progress-sm">
                              <div class="progress-bar" style="width: 68%" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" aria-label="68% Complete">
                                <span class="visually-hidden">68% Complete</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Memory usage</div>
                          <div class="datagrid-content">
                            <div class="mb-1">41%</div>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-green" style="width: 41%" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" aria-label="41% Complete">
                                <span class="visually-hidden">41% Complete</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Domain details</h2>

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
                      <div style="--tblr-datagrid-item-width: 12rem" class="datagrid">
                        <div class="datagrid-item">
                          <div class="datagrid-title">Domain</div>
                          <div class="datagrid-content">
                            <a href="#"
                              >tabler.io
                              <!-- Download SVG icon from http://tabler.io/icons/icon/external-link -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                <path d="M11 13l9 -9" />
                                <path d="M15 4h5v5" /></svg
                            ></a>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Registrar</div>
                          <div class="datagrid-content">Third Party</div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">SSL certificate</div>
                          <div class="datagrid-content">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green icon-inline">
                              <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                              <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                              <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            </svg>
                            Valid until May 2, 2027
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Auto renew</div>
                          <div class="datagrid-content">
                            <label class="form-check form-switch mb-0">
                              <input class="form-check-input" type="checkbox" checked />
                              <span class="form-check-label">Enabled</span>
                            </label>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Owner</div>
                          <div class="datagrid-content">
                            <div class="d-flex align-items-center">
                              <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs me-2"></span>
                              Emmy Levet
                            </div>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Expiration date</div>
                          <div class="datagrid-content">–</div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="btn-list justify-content-end">
                        <button type="button" class="btn btn-ghost-secondary">Transfer</button>
                        <button type="button" class="btn btn-primary">Renew domain</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">API credentials</h2>
                    </div>
                    <div class="card-body">
                      <p class="card-subtitle">Add a <code>data-bs-toggle="clipboard"</code> button to let users copy a value.</p>
                      <div style="--tblr-datagrid-padding: 1rem" class="datagrid datagrid-cols-1">
                        <div class="datagrid-item">
                          <div class="datagrid-title">Client ID</div>
                          <div class="datagrid-content">
                            <div class="d-flex align-items-center gap-2">
                              <code id="datagrid-client-id" class="text-truncate">tblr_live_8f3a2c91d7e4</code>
                              <button type="button" class="btn btn-sm btn-icon btn-action" data-bs-toggle="clipboard" data-bs-target="#datagrid-client-id" aria-label="Copy the client ID">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/clipboard -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon clipboard-label">
                                  <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                  <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                                </svg>
                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon clipboard-feedback text-green">
                                  <path d="M5 12l5 5l10 -10" />
                                </svg>
                                <span class="clipboard-feedback visually-hidden">Copied</span>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Webhook URL</div>
                          <div class="datagrid-content">
                            <div class="d-flex align-items-center gap-2">
                              <code id="datagrid-webhook-url" class="text-truncate">https://example.com/hooks/tabler</code>
                              <button type="button" class="btn btn-sm btn-icon btn-action" data-bs-toggle="clipboard" data-bs-target="#datagrid-webhook-url" aria-label="Copy the webhook URL">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/clipboard -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon clipboard-label">
                                  <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                  <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                                </svg>
                                <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon clipboard-feedback text-green">
                                  <path d="M5 12l5 5l10 -10" />
                                </svg>
                                <span class="clipboard-feedback visually-hidden">Copied</span>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="datagrid-item">
                          <div class="datagrid-title">Last used</div>
                          <div class="datagrid-content">2 hours ago</div>
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
