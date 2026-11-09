<x-preview.page :title='"Mockup browser"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Mockup browser</h1>

                  <div class="text-secondary mt-1">The mockup browser shows a page preview or a screenshot inside a frame that looks like a browser window.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/mockup-browser" target="_blank" rel="noopener" class="link-secondary">
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
                      <h2 class="card-title">Basic</h2>
                      <p class="card-subtitle">A screenshot in a <code>.mockup-browser</code> frame, with the window dots and an address bar.</p>
                      <div class="mockup-browser">
                        <div class="mockup-browser-toolbar">
                          <span class="mockup-browser-controls"></span>
                          <div class="mockup-browser-url">
                            <span>preview.tabler.io</span>
                          </div>
                        </div>
                        <div class="mockup-browser-body">
                          <div class="ratio ratio-16x9">
                            <div class="d-flex align-items-center justify-content-center text-secondary">Your page goes here</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Secure address</h2>
                      <p class="card-subtitle">Put a lock icon before the address to show a secure page.</p>
                      <div class="mockup-browser">
                        <div class="mockup-browser-toolbar">
                          <span class="mockup-browser-controls"></span>
                          <div class="mockup-browser-url">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                              <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                              <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            </svg>
                            <span>https://preview.tabler.io</span>
                          </div>
                        </div>
                        <div class="mockup-browser-body">
                          <div class="ratio ratio-16x9">
                            <div class="d-flex align-items-center justify-content-center text-secondary">Your page goes here</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Without an address bar</h2>
                      <p class="card-subtitle">Leave out <code>.mockup-browser-url</code> for a plain window frame.</p>
                      <div class="mockup-browser">
                        <div class="mockup-browser-toolbar">
                          <span class="mockup-browser-controls"></span>
                        </div>
                        <div class="mockup-browser-body">
                          <div class="ratio ratio-16x9">
                            <div class="d-flex align-items-center justify-content-center text-secondary">Your page goes here</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Sizes</h2>
                      <p class="card-subtitle">Add <code>.mockup-browser-sm</code> for a 24px toolbar with smaller dots and text, for thumbnails and cards.</p>
                      <div class="row g-3 align-items-start">
                        <div class="col-md-7">
                          <div class="mockup-browser">
                            <div class="mockup-browser-toolbar">
                              <span class="mockup-browser-controls"></span>
                              <div class="mockup-browser-url">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                                  <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                  <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                </svg>
                                <span>preview.tabler.io</span>
                              </div>
                            </div>
                            <div class="mockup-browser-body">
                              <div class="ratio ratio-16x9">
                                <div class="d-flex align-items-center justify-content-center text-secondary">Your page goes here</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="mockup-browser mockup-browser-sm">
                            <div class="mockup-browser-toolbar">
                              <span class="mockup-browser-controls"></span>
                              <div class="mockup-browser-url">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                                  <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                  <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                </svg>
                                <span>preview.tabler.io</span>
                              </div>
                            </div>
                            <div class="mockup-browser-body">
                              <div class="ratio ratio-16x9">
                                <div class="d-flex align-items-center justify-content-center text-secondary">Your page goes here</div>
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
                    <div class="card-body">
                      <h2 class="card-title">Any content</h2>
                      <p class="card-subtitle">The body takes any markup, not only an image, so a component can be shown as a page.</p>
                      <div class="mockup-browser">
                        <div class="mockup-browser-toolbar">
                          <span class="mockup-browser-controls"></span>
                          <div class="mockup-browser-url">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                              <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                              <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            </svg>
                            <span>example.com/signup</span>
                          </div>
                        </div>
                        <div class="mockup-browser-body p-4">
                          <h3 class="card-title">Create an account</h3>
                          <div class="mb-3">
                            <label class="form-label" for="mockup-browser-email">Email</label>
                            <input type="email" class="form-control" id="mockup-browser-email" placeholder="you@example.com" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="mockup-browser-password">Password</label>
                            <input type="password" class="form-control" id="mockup-browser-password" placeholder="Password" />
                          </div>
                          <button type="button" class="btn btn-primary w-100">Sign up</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Custom look</h2>
                      <p class="card-subtitle">Set the <code>--tblr-mockup-browser-*</code> variables for a dark toolbar, other window dot colors or no shadow.</p>
                      <div class="mockup-browser" style="--tblr-mockup-browser-toolbar-bg: var(--tblr-gray-900); --tblr-mockup-browser-toolbar-color: var(--tblr-gray-400); --tblr-mockup-browser-border-color: var(--tblr-gray-900); --tblr-mockup-browser-box-shadow: none">
                        <div class="mockup-browser-toolbar">
                          <span class="mockup-browser-controls"></span>
                          <div class="mockup-browser-url">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                              <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                              <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            </svg>
                            <span>preview.tabler.io</span>
                          </div>
                        </div>
                        <div class="mockup-browser-body">
                          <div class="ratio ratio-16x9">
                            <div class="d-flex align-items-center justify-content-center text-secondary">Your page goes here</div>
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
