<x-preview.page :title='"Alerts"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Alerts</h1>

                  <div class="text-secondary mt-1">Alert messages inform users about the status of an action, in success, info, warning, or danger states.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/alert" target="_blank" rel="noopener" class="link-secondary">
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
                      <h2 class="card-title">Basic</h2>
                      <p class="card-subtitle">A title and a color are enough to show the status of an action.</p>
                      <div class="alert alert-danger" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>

                        An error occurred!
                      </div>
                      <div class="alert alert-warning" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M12 9v4" />
                            <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>

                        Some information is missing!
                      </div>
                      <div class="alert alert-success" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon"><path d="M5 12l5 5l10 -10" /></svg>
                        </div>

                        Completed successfully!
                      </div>
                      <div class="alert alert-info" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                          </svg>
                        </div>

                        Just a quick note!
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With action</h2>
                      <p class="card-subtitle">Add an <code>alert-action</code> link to give users something to do next.</p>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>

                        An error occurred!
                        <a href="#" class="alert-action"> Link </a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-warning alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M12 9v4" />
                            <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>

                        Some information is missing!
                        <a href="#" class="alert-action"> Link </a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon"><path d="M5 12l5 5l10 -10" /></svg>
                        </div>

                        Completed successfully!
                        <a href="#" class="alert-action"> Link </a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-info alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                          </svg>
                        </div>

                        Just a quick note!
                        <a href="#" class="alert-action"> Link </a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Dismissible</h2>
                      <p class="card-subtitle">Add <code>alert-dismissible</code> and a <code>btn-close</code> button to let users close the alert.</p>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>

                        An error occurred!

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-warning alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M12 9v4" />
                            <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>

                        Some information is missing!

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon"><path d="M5 12l5 5l10 -10" /></svg>
                        </div>

                        Completed successfully!

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-info alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                          </svg>
                        </div>

                        Just a quick note!

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With a description</h2>
                      <p class="card-subtitle">Add an <code>alert-description</code> or an <code>alert-list</code> when the title alone isn't enough context.</p>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">Password does not meet requirements:</h3>
                          <div class="alert-description">
                            <ul class="alert-list">
                              <li>Minimum 8 characters</li>
                              <li>Include a special character</li>
                            </ul>
                          </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-warning alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M12 9v4" />
                            <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">Some information is missing!</h3>
                          <div class="alert-description">This is a custom alert box with a description.</div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon"><path d="M5 12l5 5l10 -10" /></svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">Completed successfully!</h3>
                          <div class="alert-description">This is a custom alert box with a description.</div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-info alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                          </svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">Just a quick note!</h3>
                          <div class="alert-description">This is a custom alert box with a description.</div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Important</h2>
                      <p class="card-subtitle">Add <code>alert-important</code> for a bolder style that stands out from the rest of the page.</p>
                      <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">Password does not meet requirements:</h3>
                          <div class="alert-description">
                            <ul class="alert-list">
                              <li>Minimum 8 characters</li>
                              <li>Include a special character</li>
                            </ul>
                          </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-important alert-success alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon"><path d="M5 12l5 5l10 -10" /></svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">This is a custom alert box!</h3>
                          <div class="alert-description">This is a custom alert box with a description.</div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-important alert-warning alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M12 9v4" />
                            <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">This is a custom alert box!</h3>
                          <div class="alert-description">This is a custom alert box with a description.</div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-important alert-info alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                          </svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">This is a custom alert box!</h3>
                          <div class="alert-description">This is a custom alert box with a description.</div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>

                        An error occurred!
                        <a href="#" class="alert-action"> Link </a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-important alert-info alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                          </svg>
                        </div>

                        Just a quick note!
                        <a href="#" class="alert-link"> Link </a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Minor</h2>
                      <p class="card-subtitle">Add <code>alert-minor</code> for a quieter style that fits inline with other content.</p>
                      <div class="alert alert-minor alert-danger alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">Password does not meet requirements:</h3>
                          <div class="alert-description">
                            <ul class="alert-list">
                              <li>Minimum 8 characters</li>
                              <li>Include a special character</li>
                            </ul>
                          </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-minor alert-success alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon"><path d="M5 12l5 5l10 -10" /></svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">This is a custom alert box!</h3>
                          <div class="alert-description">This is a custom alert box with a description.</div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-minor alert-warning alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M12 9v4" />
                            <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">This is a custom alert box!</h3>
                          <div class="alert-description">This is a custom alert box with a description.</div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                      <div class="alert alert-minor alert-info alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                          </svg>
                        </div>
                        <div>
                          <h3 class="alert-heading">This is a custom alert box!</h3>
                          <div class="alert-description">This is a custom alert box with a description.</div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
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
