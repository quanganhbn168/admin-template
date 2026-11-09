<x-preview.page :title='"Plans"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Account Settings</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="card">
                <div class="row g-0">
                  <!-- BEGIN SETTINGS NAV -->
                  <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
                      <h2 class="subheader">Business settings</h2>

                      <nav aria-label="Business settings" class="list-group list-group-transparent">
                        <a href="/preview/settings" class="list-group-item list-group-item-action d-flex align-items-center">My Account</a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">My Notifications</a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Connected Apps</a>
                        <a href="/preview/settings-plan" class="list-group-item list-group-item-action active d-flex align-items-center">Plans</a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Billing & Invoices</a>
                      </nav>

                      <h2 class="subheader mt-4">Experience</h2>

                      <nav aria-label="Experience" class="list-group list-group-transparent">
                        <a href="#" class="list-group-item list-group-item-action">Give Feedback</a>
                      </nav>
                    </div>
                  </div>
                  <!-- END SETTINGS NAV -->
                  <div class="col-12 col-md-9 d-flex flex-column">
                    <div class="card-body">
                      <h2 class="mb-4">Plans</h2>

                      <p class="text-secondary mb-4">This workspace’s Basic Plan is set to $34 per month and will renew on June 19, 2022.</p>

                      <div class="mb-4">
                        <label class="form-label" for="plan-users"> Users </label>

                        <input type="text" class="form-control" data-bs-toggle="number-input" id="plan-users" value="10" min="1" max="100" />

                        <div id="plan-users-hint" class="form-text">Each plan is billed per user. Pick how many people need access.</div>
                      </div>

                      <div class="row row-cards">
                        <div class="col-lg-4">
                          <div class="card card-md">
                            <div class="card-body text-center">
                              <div class="text-uppercase text-secondary fw-medium">Free</div>

                              <div class="display-5 fw-bold my-3">$0</div>

                              <ul class="list-icon align-items-center">
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/users -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                  </svg>
                                  <span><strong>3</strong> Users</span>
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-success"><path d="M5 12l5 5l10 -10" /></svg>Sharing
                                  Tools
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-danger">
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" /></svg
                                  >Design Tools
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-danger">
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" /></svg
                                  >Private Messages
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-danger">
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" /></svg
                                  >Twitter API
                                </li>
                              </ul>

                              <div class="text-center mt-4">
                                <a href="#" class="btn w-100">Choose plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="card card-md">
                            <div class="ribbon ribbon-top ribbon-bookmark bg-green">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </div>

                            <div class="card-body text-center">
                              <div class="text-uppercase text-secondary fw-medium">Premium</div>

                              <div class="display-5 fw-bold my-3">$49</div>

                              <ul class="list-icon align-items-center">
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/users -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                  </svg>
                                  <span><strong>10</strong> Users</span>
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-success"><path d="M5 12l5 5l10 -10" /></svg>Sharing
                                  Tools
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-success"><path d="M5 12l5 5l10 -10" /></svg>Design
                                  Tools
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-danger">
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" /></svg
                                  >Private Messages
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-danger">
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" /></svg
                                  >Twitter API
                                </li>
                              </ul>

                              <div class="text-center mt-4">
                                <a href="#" class="btn btn-green w-100">Choose plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="card card-md">
                            <div class="card-body text-center">
                              <div class="text-uppercase text-secondary fw-medium">Enterprise</div>

                              <div class="display-5 fw-bold my-3">$99</div>

                              <ul class="list-icon align-items-center">
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/users -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                  </svg>
                                  <span><strong>100</strong> Users</span>
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-success"><path d="M5 12l5 5l10 -10" /></svg>Sharing
                                  Tools
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-success"><path d="M5 12l5 5l10 -10" /></svg>Design
                                  Tools
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-success"><path d="M5 12l5 5l10 -10" /></svg>Private
                                  Messages
                                </li>
                                <li>
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-danger">
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" /></svg
                                  >Twitter API
                                </li>
                              </ul>

                              <div class="text-center mt-4">
                                <a href="#" class="btn w-100">Choose plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="card card-md">
                            <div class="card-body">
                              <div class="row align-items-center">
                                <div class="col">
                                  <h2 class="h3">Enterprise-ready. Reach out for a custom quote.</h2>
                                  <p class="m-0 text-secondary">Tabler is designed to work great for large enterprises. Take a look at our feature comparison.</p>
                                </div>
                                <div class="col-auto">
                                  <button type="button" class="btn">Book a demo</button>
                                </div>
                              </div>
                            </div>
                          </div>
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
</x-preview.page>
