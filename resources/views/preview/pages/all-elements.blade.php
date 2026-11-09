<x-preview.page :title='"All Elements - Kitchen Sink"' :html-attrs='"lang=\"en\""'>
<x-slot:head>
@verbatim
<link href="/tabler/libs/nouislider/dist/nouislider.min.css" rel="stylesheet" />
<link href="/tabler/libs/tom-select/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet" />
<link href="/tabler/libs/star-rating.js/dist/star-rating.min.css" rel="stylesheet" />
@endverbatim
</x-slot:head>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">All Elements</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="row row-cards">
                <!-- Typography Section -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Typography</h2>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="h1">Heading 1</div>
                          <div class="h2">Heading 2</div>
                          <div class="h3">Heading 3</div>
                          <div class="h4">Heading 4</div>
                          <div class="h5">Heading 5</div>
                          <div class="h6">Heading 6</div>
                        </div>
                        <div class="col-md-6">
                          <p class="lead">This is a lead paragraph with larger text.</p>
                          <p>This is a regular paragraph with <strong>bold text</strong>, <em>italic text</em>, and <u>underlined text</u>.</p>
                          <p><small class="text-muted">This is small muted text.</small></p>
                          <p class="text-primary">Primary text color</p>
                          <p class="text-success">Success text color</p>
                          <p class="text-danger">Danger text color</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Buttons Section -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Buttons</h2>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <h3 class="h4">Standard Buttons</h3>
                          <div class="btn-list mb-3">
                            <button type="button" class="btn">Default</button>
                            <button type="button" class="btn btn-primary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" /></svg
                              >Primary
                            </button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-success">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Success
                            </button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-danger">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M18 6l-12 12" />
                                <path d="M6 6l12 12" /></svg
                              >Danger
                            </button>
                            <button type="button" class="btn btn-info">Info</button>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h3 class="h4">Button Sizes</h3>
                          <div class="btn-list mb-3 align-items-start">
                            <button type="button" class="btn btn-sm">Small</button>
                            <button type="button" class="btn">Default</button>
                            <button type="button" class="btn btn-lg">Large</button>
                          </div>

                          <h3 class="h4">Icon Buttons</h3>
                          <div class="btn-list mb-3 align-items-start">
                            <button type="button" aria-label="Heart" class="btn btn-icon">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                              </svg>
                            </button>
                            <button type="button" aria-label="Star" class="btn btn-icon">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </button>
                            <button type="button" aria-label="Check" class="btn btn-icon">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Cards Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Simple Card</h2>
                    </div>
                    <div class="card-body">
                      <p>This is a simple card with header and body content.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Card with Footer</h2>
                    </div>
                    <div class="card-body">
                      <p>This card includes a footer section.</p>
                    </div>
                    <div class="card-footer">
                      <div class="d-flex">
                        <button type="button" class="btn btn-link">Cancel</button>
                        <button type="button" class="btn btn-primary ms-auto">Save</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Alerts Section -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Alerts</h2>
                    </div>
                    <div class="card-body">
                      <div class="alert alert-info" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                          </svg>
                        </div>

                        This is a primary alert with an icon.
                      </div>
                      <div class="alert alert-success" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon"><path d="M5 12l5 5l10 -10" /></svg>
                        </div>

                        This is a success alert message.
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

                        This is a warning alert message.
                      </div>
                      <div class="alert alert-danger" role="alert">
                        <div class="alert-icon">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon alert-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                          </svg>
                        </div>

                        This is a danger alert message.
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Badges Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Badges</h2>
                    </div>
                    <div class="card-body">
                      <div class="space-y">
                        <div class="badge-list">
                          <span class="badge">Default</span>
                          <span class="badge bg-primary text-primary-fg">Primary</span>
                          <span class="badge bg-secondary text-secondary-fg">Secondary</span>
                          <span class="badge bg-success text-success-fg">Success</span>
                          <span class="badge bg-warning text-warning-fg">Warning</span>
                          <span class="badge bg-danger text-danger-fg">Danger</span>
                        </div>
                        <div class="badge-list">
                          <span class="badge bg-primary text-primary-fg"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" /></svg
                            >With Icon</span
                          >
                          <span class="badge bg-primary-lt">Light Badge</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Progress Bars Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Progress Bars</h2>
                    </div>
                    <div class="card-body">
                      <div class="space-y">
                        <div>
                          <div class="progress">
                            <div class="progress-bar" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" aria-label="25% Complete">
                              <span class="visually-hidden">25% Complete</span>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-success" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" aria-label="50% Complete">
                              <span class="visually-hidden">50% Complete</span>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                              <span class="visually-hidden">75% Complete</span>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 90%" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" aria-label="90% Complete">90%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Form Elements Section -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Form Elements</h2>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label" for="all-elements-text-input"> Text Input </label>

                            <input type="text" class="form-control" id="all-elements-text-input" placeholder="Enter text" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="all-elements-email-input"> Email Input </label>

                            <input type="email" class="form-control" id="all-elements-email-input" placeholder="Enter email" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="all-elements-password-input"> Password Input </label>

                            <input type="password" class="form-control" id="all-elements-password-input" placeholder="Enter password" autocomplete="current-password" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="select-demo-select"> Select Dropdown </label>

                            <select class="form-select" aria-label="Select Dropdown" id="select-demo-select">
                              <option value="Option 1">Option 1</option>
                              <option value="Option 2">Option 2</option>
                              <option value="Option 3">Option 3</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label" for="all-elements-textarea"> Textarea </label>

                            <textarea class="form-control" id="all-elements-textarea" rows="3" placeholder="Enter message"></textarea>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Checkboxes</div>

                            <label class="form-check">
                              <input class="form-check-input" type="checkbox" />
                              <span class="form-check-label">Option 1</span>
                            </label>
                            <label class="form-check">
                              <input class="form-check-input" type="checkbox" checked />
                              <span class="form-check-label">Option 2</span>
                            </label>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Radio Buttons</div>

                            <label class="form-check">
                              <input class="form-check-input" type="radio" name="radio-demo" />
                              <span class="form-check-label">Option 1</span>
                            </label>
                            <label class="form-check">
                              <input class="form-check-input" type="radio" name="radio-demo" checked />
                              <span class="form-check-label">Option 2</span>
                            </label>
                          </div>

                          <div class="mb-3">
                            <div class="form-label">Switch</div>

                            <label class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" />
                              <span class="form-check-label">Enable notifications</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Navigation Elements -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Navigation Elements</h2>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <h3 class="h4">Tabs</h3>
                          <div class="mb-3">
                            <ul class="nav nav-tabs mb-4">
                              <li class="nav-item">
                                <a class="nav-link active" href="#"> Active </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                  </svg>
                                  Link
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> Disabled </a>
                              </li>
                              <li class="nav-item ms-auto">
                                <a class="nav-link" href="#" aria-label="Settings">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path
                                      d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                                    />
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                  </svg>
                                </a>
                              </li>
                            </ul>
                          </div>

                          <h3 class="h4">Pills Navigation</h3>
                          <div class="mb-3">
                            <ul class="nav nav-pills mb-4">
                              <li class="nav-item">
                                <a class="nav-link active" href="#"> Active </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                  </svg>
                                  Link
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> Disabled </a>
                              </li>
                              <li class="nav-item ms-auto">
                                <a class="nav-link" href="#" aria-label="Settings">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path
                                      d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                                    />
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                  </svg>
                                </a>
                              </li>
                            </ul>
                          </div>

                          <h3 class="h4">Breadcrumb</h3>
                          <!-- BEGIN BREADCRUMB -->
                          <nav aria-label="Breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                <a href="#" aria-label="Home">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                  </svg>
                                </a>
                              </li>
                              <li class="breadcrumb-item">
                                <a href="#">Library</a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                          </nav>
                          <!-- END BREADCRUMB -->
                        </div>
                        <div class="col-md-6">
                          <h3 class="h4">Pagination</h3>
                          <!-- BEGIN PAGINATION -->
                          <nav aria-label="Numbered pagination">
                            <ul class="pagination mb-4">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true" aria-label="Previous page">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M15 6l-6 6l6 6" /></svg>
                                </a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Page 1"> 1 </a>
                              </li>
                              <li class="page-item active">
                                <a class="page-link" href="#" aria-label="Page 2" aria-current="page"> 2 </a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Page 3"> 3 </a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Page 4"> 4 </a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Page 5"> 5 </a>
                              </li>

                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next page">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M9 6l6 6l-6 6" /></svg>
                                </a>
                              </li>
                            </ul>
                          </nav>
                          <!-- END PAGINATION -->

                          <h3 class="h4">Pagination with Text</h3>
                          <!-- BEGIN PAGINATION -->
                          <nav aria-label="Pagination with text">
                            <ul class="pagination">
                              <li class="page-item disabled">
                                <a class="page-link page-text" href="#" tabindex="-1" aria-disabled="true"> Previous </a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Page 1"> 1 </a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Page 2"> 2 </a>
                              </li>
                              <li class="page-item active">
                                <a class="page-link" href="#" aria-label="Page 3" aria-current="page"> 3 </a>
                              </li>

                              <li class="page-item">
                                <a class="page-link page-text" href="#"> Next </a>
                              </li>
                            </ul>
                          </nav>
                          <!-- END PAGINATION -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Lists Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Lists</h2>
                    </div>
                    <div class="card-body">
                      <h3 class="h4">Unordered List</h3>
                      <ul>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>Third item</li>
                      </ul>

                      <h3 class="h4">Ordered List</h3>
                      <ol>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>Third item</li>
                      </ol>
                    </div>
                  </div>
                </div>

                <!-- Table Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Table</h2>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-vcenter">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>John Doe</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f252027210f2a372e223f232a612c2022">[email&#160;protected]</a></td>
                              <td><span class="badge bg-success text-success-fg">Active</span></td>
                            </tr>
                            <tr>
                              <td>Jane Smith</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="741e151a1134110c15190418115a171b19">[email&#160;protected]</a></td>
                              <td><span class="badge bg-warning text-warning-fg">Pending</span></td>
                            </tr>
                            <tr>
                              <td>Bob Johnson</td>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9bf9f4f9dbfee3faf6ebf7feb5f8f4f6">[email&#160;protected]</a></td>
                              <td><span class="badge bg-danger text-danger-fg">Inactive</span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Avatars Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Avatars</h2>
                    </div>
                    <div class="card-body">
                      <div class="space-y">
                        <div class="avatar-list">
                          <span class="avatar avatar-sm">JD</span>
                          <span class="avatar">JS</span>
                          <span class="avatar avatar-lg">BJ</span>
                          <span class="avatar avatar-xl">AB</span>
                        </div>
                        <div class="avatar-list">
                          <span class="avatar avatar-rounded">RD</span>
                          <span class="avatar avatar-rounded bg-primary-lt">PR</span>
                          <span class="avatar avatar-rounded bg-success-lt">SC</span>
                        </div>
                        <div class="avatar-list">
                          <span class="avatar"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg
                          ></span>
                          <span class="avatar bg-warning-lt"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" /></svg
                          ></span>
                          <span class="avatar"><span class="badge bg-success" role="img" aria-label="Online"></span>ST</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Icons Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Icons</h2>
                    </div>
                    <div class="card-body">
                      <div class="space-y">
                        <div>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path
                              d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                            />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                            <path d="M3 7l9 6l9 -6" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/phone -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M11 15h1" />
                            <path d="M12 15v3" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 7v5l3 3" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/camera -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                            <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/minus -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l14 0" /></svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/edit -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" />
                            <path d="M16 5l3 3" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/download -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                            <path d="M7 11l5 5l5 -5" />
                            <path d="M12 4l0 12" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/upload -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                            <path d="M7 9l5 -5l5 5" />
                            <path d="M12 4l0 12" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/filter -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/refresh -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                            <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/share -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M3 12a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M15 6a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M15 18a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M8.7 10.7l6.6 -3.4" />
                            <path d="M8.7 13.3l6.6 3.4" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/copy -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M7 9.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667l0 -8.666" />
                            <path d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/external-link -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                            <path d="M11 13l9 -9" />
                            <path d="M15 4h5v5" />
                          </svg>
                        </div>
                        <div>
                          <span class="text-primary"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg
                          ></span>
                          <span class="text-success"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/circle-check -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                              <path d="M9 12l2 2l4 -4" /></svg
                          ></span>
                          <span class="text-warning"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M12 9v4" />
                              <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                              <path d="M12 16h.01" /></svg
                          ></span>
                          <span class="text-danger"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                              <path d="M12 8v4" />
                              <path d="M12 16h.01" /></svg
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Dropdowns Section -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Dropdowns</h2>
                    </div>
                    <div class="card-body">
                      <div class="btn-list">
                        <div class="dropdown">
                          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary Dropdown</button>
                          <div class="dropdown-menu"><button type="button" class="dropdown-item">Action</button><button type="button" class="dropdown-item">Another action</button><button type="button" class="dropdown-item">Something else here</button></div>
                        </div>
                        <div class="dropdown">
                          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary Dropdown</button>
                          <div class="dropdown-menu"><button type="button" class="dropdown-item">Edit</button><button type="button" class="dropdown-item">Copy</button><button type="button" class="dropdown-item">Delete</button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Interactive Elements Section -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Interactive Elements</h2>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <h3 class="h4">Accordion</h3>
                          <div class="mb-4">
                            <div class="accordion" id="accordion-demo-accordion">
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button id="accordion-button-1-demo-accordion" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-demo-accordion" aria-expanded="true" aria-controls="collapse-1-demo-accordion">
                                    What makes Tabler different from other UI frameworks?

                                    <span class="accordion-button-toggle">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                                    </span>
                                  </button>
                                </h2>
                                <div id="collapse-1-demo-accordion" class="accordion-collapse collapse show" data-bs-parent="#accordion-demo-accordion" role="region" aria-labelledby="accordion-button-1-demo-accordion">
                                  <div class="accordion-body">Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease of use and flexibility.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button id="accordion-button-2-demo-accordion" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-demo-accordion" aria-expanded="false" aria-controls="collapse-2-demo-accordion">
                                    How can I customize Tabler components to fit my design needs?

                                    <span class="accordion-button-toggle">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                                    </span>
                                  </button>
                                </h2>
                                <div id="collapse-2-demo-accordion" class="accordion-collapse collapse" data-bs-parent="#accordion-demo-accordion" role="region" aria-labelledby="accordion-button-2-demo-accordion">
                                  <div class="accordion-body">You can customize Tabler components using CSS variables, SCSS, and utility classes to match your design preferences.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button id="accordion-button-3-demo-accordion" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3-demo-accordion" aria-expanded="false" aria-controls="collapse-3-demo-accordion">
                                    Is Tabler optimized for performance and fast loading times?

                                    <span class="accordion-button-toggle">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                                    </span>
                                  </button>
                                </h2>
                                <div id="collapse-3-demo-accordion" class="accordion-collapse collapse" data-bs-parent="#accordion-demo-accordion" role="region" aria-labelledby="accordion-button-3-demo-accordion">
                                  <div class="accordion-body">Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast loading and efficiency.</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h3 class="h4">Spinners</h3>
                          <div class="mb-3">
                            <div class="d-flex flex-wrap gap-2">
                              <div class="spinner-border text-primary" role="status"></div>
                              <div class="spinner-border text-success spinner-border-sm" role="status"></div>
                              <div class="spinner-grow text-warning" role="status"></div>
                              <div class="spinner-grow text-danger spinner-grow-sm" role="status"></div>
                            </div>
                          </div>

                          <h3 class="h4">Rating</h3>
                          <div class="mb-3">
                            <select id="rating-demo-rating" aria-label="Rating">
                              <option value="">Select a rating</option>
                              <option value="5">Excellent</option>
                              <option value="4" selected>Very Good</option>
                              <option value="3">Average</option>
                              <option value="2">Poor</option>
                              <option value="1">Terrible</option>
                            </select>
                          </div>

                          <h3 class="h4">Steps</h3>
                          <div class="mb-3">
                            <ol class="steps" aria-label="Progress">
                              <li class="step-item">
                                <a href="#">
                                  <span class="visually-hidden">Step 1 (completed)</span>
                                </a>
                              </li>
                              <li class="step-item active">
                                <a href="#" aria-current="step">
                                  <span class="visually-hidden">Step 2 (current)</span>
                                </a>
                              </li>
                              <li class="step-item">
                                <span>
                                  <span class="visually-hidden">Step 3</span>
                                </span>
                              </li>
                              <li class="step-item">
                                <span>
                                  <span class="visually-hidden">Step 4</span>
                                </span>
                              </li>
                            </ol>
                          </div>
                          <div class="mb-3">
                            <ol class="steps steps-counter" aria-label="Progress">
                              <li class="step-item">
                                <a href="#">
                                  <span class="visually-hidden">Step 1 (completed)</span>
                                </a>
                              </li>
                              <li class="step-item">
                                <a href="#">
                                  <span class="visually-hidden">Step 2 (completed)</span>
                                </a>
                              </li>
                              <li class="step-item active">
                                <a href="#" aria-current="step">
                                  <span class="visually-hidden">Step 3 (current)</span>
                                </a>
                              </li>
                              <li class="step-item">
                                <span>
                                  <span class="visually-hidden">Step 4</span>
                                </span>
                              </li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Status & Feedback Elements -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Status Elements</h2>
                    </div>
                    <div class="card-body">
                      <h3 class="h4">Status Dots</h3>
                      <div class="mb-3">
                        <span class="status-dot status-success"><span class="visually-hidden">Success</span></span>
                        <span class="status-dot status-warning"><span class="visually-hidden">Warning</span></span>
                        <span class="status-dot status-danger"><span class="visually-hidden">Danger</span></span>
                        <span class="status-dot status-info status-dot-animated"><span class="visually-hidden">Info</span></span>
                      </div>

                      <h3 class="h4">Toast Notifications</h3>
                      <div class="mb-3">
                        <div class="toast show" id="toast-demo-toast" role="status" aria-live="polite" aria-atomic="true" data-bs-autohide="false">
                          <div class="toast-header">
                            <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs me-2"></span>
                            <strong class="me-auto">Mallory Hulme</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                          </div>
                          <div class="toast-body">This is a sample toast message!</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Enhanced Form Elements -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Enhanced Forms</h2>
                    </div>
                    <div class="card-body">
                      <h3 class="h4">Input with Icons</h3>
                      <div class="mb-3">
                        <div class="input-icon">
                          <input type="text" value class="form-control" placeholder="Search..." />
                          <span class="input-icon-addon"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                              <path d="M21 21l-6 -6" /></svg
                          ></span>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="input-icon">
                          <input type="text" value class="form-control" placeholder="Loading..." />
                          <span class="input-icon-addon"><span class="spinner-border spinner-border-sm text-secondary" role="status"></span></span>
                        </div>
                      </div>

                      <h3 class="h4">Input Groups</h3>
                      <div class="mb-3">
                        <div class="input-group">
                          <span class="input-group-text">@</span>
                          <input type="text" class="form-control" placeholder="Username" />
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="input-group">
                          <span class="input-group-text">$</span>
                          <input type="text" class="form-control" placeholder="Price" />
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>

                      <h3 class="h4">Range Slider</h3>
                      <div class="mb-3">
                        <div class="form-range mb-2" id="range-demo-range"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Tags & Labels -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Tags &amp; Labels</h2>
                    </div>
                    <div class="card-body">
                      <h3 class="h4">Tags</h3>
                      <div class="tag-list mb-3">
                        <span class="tag">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon tag-icon icon-sm">
                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                          </svg>
                          Primary Tag

                          <button type="button" class="btn-close" aria-label="Remove Primary Tag"></button>
                        </span>
                        <span class="tag">
                          <span class="badge bg-success text-success-fg badge-dot"></span>
                          Success Tag

                          <button type="button" class="btn-close" aria-label="Remove Success Tag"></button>
                        </span>
                        <span class="tag">
                          <span class="badge bg-warning text-warning-fg badge-dot"></span>
                          Warning Tag

                          <button type="button" class="btn-close" aria-label="Remove Warning Tag"></button>
                        </span>
                      </div>

                      <h3 class="h4">Ribbons</h3>
                      <div class="position-relative mb-4" style="height: 100px; background-color: var(--tblr-bg-surface-secondary); border-radius: 8px">
                        <div class="ribbon bg-success">New</div>
                      </div>
                      <div class="position-relative mb-3" style="height: 100px; background: var(--tblr-bg-surface-secondary); border-radius: 8px">
                        <div class="ribbon ribbon-top bg-danger">Sale</div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Media Elements -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Media Elements</h2>
                    </div>
                    <div class="card-body">
                      <h3 class="h4">Flags</h3>
                      <div class="mb-3">
                        <div class="d-flex flex-wrap gap-2">
                          <span class="flag flag-country-us" role="img" aria-label="United States"></span>
                          <span class="flag flag-country-gb" role="img" aria-label="United Kingdom"></span>
                          <span class="flag flag-country-de" role="img" aria-label="Germany"></span>
                          <span class="flag flag-country-fr" role="img" aria-label="France"></span>
                          <span class="flag flag-country-pl" role="img" aria-label="Poland"></span>
                          <span class="flag flag-country-es" role="img" aria-label="Spain"></span>
                          <span class="flag flag-country-it" role="img" aria-label="Italy"></span>
                          <span class="flag flag-country-nl" role="img" aria-label="Netherlands"></span>
                          <span class="flag flag-country-ca" role="img" aria-label="Canada"></span>
                          <span class="flag flag-country-au" role="img" aria-label="Australia"></span>
                        </div>
                      </div>

                      <h3 class="h4">Payment Icons</h3>
                      <div class="mb-3">
                        <div class="d-flex flex-wrap gap-2">
                          <span class="payment payment-provider-visa hide-theme-dark" role="img" aria-label="Visa"></span>
                          <span class="payment payment-provider-visa-dark hide-theme-light" role="img" aria-label="Visa"></span>

                          <span class="payment payment-provider-mastercard hide-theme-dark" role="img" aria-label="Mastercard"></span>
                          <span class="payment payment-provider-mastercard-dark hide-theme-light" role="img" aria-label="Mastercard"></span>

                          <span class="payment payment-provider-paypal hide-theme-dark" role="img" aria-label="PayPal"></span>
                          <span class="payment payment-provider-paypal-dark hide-theme-light" role="img" aria-label="PayPal"></span>

                          <span class="payment payment-provider-americanexpress hide-theme-dark" role="img" aria-label="American Express"></span>
                          <span class="payment payment-provider-americanexpress-dark hide-theme-light" role="img" aria-label="American Express"></span>

                          <span class="payment payment-provider-applepay hide-theme-dark" role="img" aria-label="Apple Pay"></span>
                          <span class="payment payment-provider-applepay-dark hide-theme-light" role="img" aria-label="Apple Pay"></span>

                          <span class="payment payment-provider-google-pay hide-theme-dark" role="img" aria-label="Google Pay"></span>
                          <span class="payment payment-provider-google-pay-dark hide-theme-light" role="img" aria-label="Google Pay"></span>

                          <span class="payment payment-provider-stripe hide-theme-dark" role="img" aria-label="Stripe"></span>
                          <span class="payment payment-provider-stripe-dark hide-theme-light" role="img" aria-label="Stripe"></span>

                          <span class="payment payment-provider-discover hide-theme-dark" role="img" aria-label="Discover"></span>
                          <span class="payment payment-provider-discover-dark hide-theme-light" role="img" aria-label="Discover"></span>

                          <span class="payment payment-provider-jcb hide-theme-dark" role="img" aria-label="JCB"></span>
                          <span class="payment payment-provider-jcb-dark hide-theme-light" role="img" aria-label="JCB"></span>

                          <span class="payment payment-provider-maestro hide-theme-dark" role="img" aria-label="Maestro"></span>
                          <span class="payment payment-provider-maestro-dark hide-theme-light" role="img" aria-label="Maestro"></span>

                          <span class="payment payment-provider-dinersclub hide-theme-dark" role="img" aria-label="Diners Club"></span>
                          <span class="payment payment-provider-dinersclub-dark hide-theme-light" role="img" aria-label="Diners Club"></span>

                          <span class="payment payment-provider-bitcoin hide-theme-dark" role="img" aria-label="Bitcoin"></span>
                          <span class="payment payment-provider-bitcoin-dark hide-theme-light" role="img" aria-label="Bitcoin"></span>

                          <span class="payment payment-provider-ethereum hide-theme-dark" role="img" aria-label="Ethereum"></span>
                          <span class="payment payment-provider-ethereum-dark hide-theme-light" role="img" aria-label="Ethereum"></span>

                          <span class="payment payment-provider-klarna hide-theme-dark" role="img" aria-label="Klarna"></span>
                          <span class="payment payment-provider-klarna-dark hide-theme-light" role="img" aria-label="Klarna"></span>

                          <span class="payment payment-provider-venmo hide-theme-dark" role="img" aria-label="Venmo"></span>
                          <span class="payment payment-provider-venmo-dark hide-theme-light" role="img" aria-label="Venmo"></span>

                          <span class="payment payment-provider-square hide-theme-dark" role="img" aria-label="Square"></span>
                          <span class="payment payment-provider-square-dark hide-theme-light" role="img" aria-label="Square"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Timeline Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Timeline</h2>
                    </div>
                    <div class="card-body">
                      <ul class="timeline">
                        <li class="timeline-event">
                          <div class="timeline-event-icon bg-x text-x-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/brand-x -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M4 4l11.733 16h4.267l-11.733 -16l-4.267 0" />
                              <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                            </svg>
                          </div>
                          <div class="card timeline-event-card">
                            <div class="card-body">
                              <div class="text-secondary float-end">10 hrs ago</div>
                              <h3 class="h4">+1150 Followers</h3>
                              <p class="text-secondary">You’re getting more and more followers, keep it up!</p>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-event">
                          <div class="timeline-event-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/briefcase -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M3 9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2l0 -9" />
                              <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                              <path d="M12 12l0 .01" />
                              <path d="M3 13a20 20 0 0 0 18 0" />
                            </svg>
                          </div>
                          <div class="card timeline-event-card">
                            <div class="card-body">
                              <div class="text-secondary float-end">2 hrs ago</div>
                              <h3 class="h4">+3 New Products were added!</h3>
                              <p class="text-secondary">Congratulations!</p>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-event">
                          <div class="timeline-event-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>
                          </div>
                          <div class="card timeline-event-card">
                            <div class="card-body">
                              <div class="text-secondary float-end">1 day ago</div>
                              <h3 class="h4">Database backup completed!</h3>
                              <p class="text-secondary">Download the <a href="#">latest backup</a>.</p>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-event">
                          <div class="timeline-event-icon bg-facebook text-facebook-fg">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/brand-facebook -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                          </div>
                          <div class="card timeline-event-card">
                            <div class="card-body">
                              <div class="text-secondary float-end">1 day ago</div>
                              <h3 class="h4">+290 Page Likes</h3>
                              <p class="text-secondary">This is great, keep it up!</p>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-event">
                          <div class="timeline-event-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/user-plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M16 19h6" />
                              <path d="M19 16v6" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                            </svg>
                          </div>
                          <div class="card timeline-event-card">
                            <div class="card-body">
                              <div class="text-secondary float-end">2 days ago</div>
                              <h3 class="h4">+3 Friend Requests</h3>
                              <div class="avatar-list mt-3">
                                <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar"><span class="badge bg-success" role="img" aria-label="Online"></span></span
                                ><span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar"><span class="badge bg-success" role="img" aria-label="Online"></span></span
                                ><span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar"><span class="badge bg-success" role="img" aria-label="Online"></span></span>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-event">
                          <div class="timeline-event-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/photo -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M15 8h.01" />
                              <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12" />
                              <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                              <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                            </svg>
                          </div>
                          <div class="card timeline-event-card">
                            <div class="card-body">
                              <div class="text-secondary float-end">3 days ago</div>
                              <h3 class="h4">+3 New photos</h3>
                              <div class="mt-3">
                                <div class="row g-2">
                                  <div class="col-4">
                                    <!-- Photo -->
                                    <img src="/tabler/static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg" class="rounded" alt="Blue sofa with pillows in a designer living room interior" />
                                  </div>
                                  <div class="col-4">
                                    <!-- Photo -->
                                    <img src="/tabler/static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg" class="rounded" alt="Home office desk with Macbook, iPhone, calendar, watch &amp; organizer" />
                                  </div>
                                  <div class="col-4">
                                    <!-- Photo -->
                                    <img src="/tabler/static/photos/young-woman-working-in-a-cafe.jpg" class="rounded" alt="Young woman working in a cafe" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-event">
                          <div class="timeline-event-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                              />
                              <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            </svg>
                          </div>
                          <div class="card timeline-event-card">
                            <div class="card-body">
                              <div class="text-secondary float-end">2 weeks ago</div>
                              <h3 class="h4">System updated to v2.02</h3>
                              <p class="text-secondary">Check the complete changelog at the <a href="#">activity page</a>.</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Empty State Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Empty State</h2>
                    </div>
                    <div class="card-body">
                      <div class="empty">
                        <div class="empty-img">
                          <!-- BEGIN ILLUSTRATION -->
                          <svg xmlns="http://www.w3.org/2000/svg" height="256" fill="none" viewBox="0 0 800 600">
                            <style>
                              :where(.theme-dark, [data-bs-theme='dark']) .tblr-illustrations-boy-girl-a {
                                fill: black;
                                opacity: 0.07;
                              }
                              :where(.theme-dark, [data-bs-theme='dark']) .tblr-illustrations-boy-girl-b {
                                fill: #1a2030;
                              }
                              :where(.theme-dark, [data-bs-theme='dark']) .tblr-illustrations-boy-girl-c {
                                fill: #454c5e;
                              }
                              @media (prefers-color-scheme: dark) {
                                .tblr-illustrations-boy-girl-a {
                                  fill: black;
                                  opacity: 0.07;
                                }
                                .tblr-illustrations-boy-girl-b {
                                  fill: #1a2030;
                                }
                                .tblr-illustrations-boy-girl-c {
                                  fill: #454c5e;
                                }
                              }
                            </style>
                            <path
                              d="M658.744 282.266C658.744 325.973 612.535 357.656 592.114 392.937C571.053 429.346 565.991 484.976 529.581 506.037C494.299 526.458 444.065 503.618 400.367 503.618C356.669 503.618 306.435 526.458 271.153 506.037C234.753 484.976 229.681 429.346 208.62 392.937C188.209 357.656 142 325.953 142 282.266C142 238.579 188.209 206.865 208.62 171.584C229.681 135.185 234.753 79.5143 271.153 58.4839C306.435 38.0736 356.669 60.9031 400.367 60.9031C444.065 60.9031 494.299 38.0736 529.581 58.4839C565.991 79.5448 571.053 135.185 592.114 171.584C612.535 206.865 658.744 238.568 658.744 282.266Z"
                              fill="#F7F8FC"
                              class="tblr-illustrations-boy-girl-a"
                            />
                            <path d="M397.248 550C534.459 550 645.689 545.836 645.689 540.7C645.689 535.564 534.459 531.401 397.248 531.401C260.038 531.401 148.808 535.564 148.808 540.7C148.808 545.836 260.038 550 397.248 550Z" fill="#A6A9B3" class="tblr-illustrations-boy-girl-b" />
                            <path
                              d="M479.179 238.829C475.497 244.691 456.146 274.402 421.211 280.161C408.559 282.198 395.593 280.84 383.637 276.225C376.963 273.704 370.647 270.322 364.85 266.164L373.304 245.592C374.244 246.41 375.7 247.659 377.607 249.049C384.182 253.84 395.868 260.321 407.863 256.273C414.608 254.009 419.323 249.697 428.36 240.849C436.25 233.084 443.39 224.592 449.683 215.486C455.319 205.153 466.977 202.626 474.943 209.512C482.598 215.974 484.609 229.097 479.179 238.829Z"
                              fill="#FFCB9D"
                              style="fill: #ffcb9d; fill: var(--tblr-illustrations-skin, #ffcb9d)"
                            />
                            <path d="M383.666 276.159C376.992 273.638 370.676 270.256 364.879 266.098L373.333 245.526C374.272 246.344 375.728 247.593 377.635 248.983C377.119 253.445 376.818 260.697 379.035 266.568C380.328 269.88 381.876 273.087 383.666 276.159Z" fill="black" opacity="0.15" />
                            <path d="M324.054 160.289C332.183 175.733 345.737 187.624 362.107 193.674L307.502 198.718C313.026 185.906 318.543 173.096 324.054 160.289Z" fill="#232B41" class="tblr-illustrations-boy-girl-c" />
                            <path d="M302.083 425.902L299.434 457.398L295.601 503.211H291.872L282.206 455.679L278.073 435.333L302.083 425.902ZM355.701 425.902L353.221 455.548L349.229 503.211H345.5L336.153 457.314L331.682 435.333L355.701 425.902Z" fill="#DADBE0" />
                            <path d="M278.063 435.333L302.083 425.939L299.434 457.436C293.46 457.051 287.692 456.496 282.206 455.717L278.063 435.333ZM355.701 425.902L353.212 455.548C347.782 456.318 342.071 456.91 336.153 457.314L331.682 435.333L355.701 425.902Z" fill="black" opacity="0.15" />
                            <path
                              d="M318.108 202.692C302.571 204.392 285.231 199.874 278.063 195.017C276.833 194.294 275.8 193.278 275.057 192.058C274.278 190.508 273.592 188.902 272.916 187.202C271.976 184.872 271.169 182.449 270.445 180.025C268.518 173.72 267.17 167.252 266.415 160.703C266.415 160.167 266.218 158.57 266.021 156.72C265.345 148.425 265.006 141.69 264.809 137.069C265.204 137.745 267.139 140.901 268.886 140.61C270.765 140.225 272.333 136.092 271.901 130.174H307.136L321.847 142.893C321.847 142.893 322.279 144.931 323.199 148.031C324.69 153.477 326.558 158.813 328.789 164C330.667 168.321 332.912 172.304 335.364 174.727C343.49 182.468 336.745 200.747 318.108 202.692Z"
                              fill="#FFCB9D"
                              style="fill: #ffcb9d; fill: var(--tblr-illustrations-skin, #ffcb9d)"
                            />
                            <path
                              d="M328.788 164C315.373 168.775 300.746 168.931 287.231 164.441C283.781 164.927 280.531 166.354 277.838 168.565C273.855 171.919 273.958 175.018 270.755 179.584L270.464 180.025C268.537 173.72 267.188 167.252 266.434 160.703C266.434 160.167 266.237 158.57 266.039 156.72C265.363 148.425 265.025 141.69 264.828 137.069C265.222 137.745 267.157 140.901 268.904 140.61C270.783 140.225 272.352 136.092 271.92 130.174H307.155L321.865 142.893C321.865 142.893 322.297 144.931 323.218 148.031C324.703 153.476 326.564 158.812 328.788 164Z"
                              fill="black"
                              opacity="0.1"
                            />
                            <path
                              d="M353.502 268.466C356.893 286.755 359.298 300.197 360.951 309.666C361.045 310.192 361.13 310.718 361.224 311.244C363.196 322.244 365.225 333.253 367.198 344.272C330.2 344.935 293.193 345.649 256.176 346.413C256.232 343.868 256.27 341.238 256.335 338.673V338.542C255.228 310.418 255.658 282.255 257.622 254.178C257.763 252.102 257.913 250.045 258.083 247.978L252.54 260.923L230.334 247.772C231.132 244.258 233.922 233.681 242.132 226.448C242.132 226.448 249.581 219.967 257.895 218.792C258.667 218.721 259.432 218.596 260.187 218.417C260.319 218.382 260.454 218.357 260.591 218.342C265.334 217.665 269.928 217.055 274.249 216.726C284.754 215.813 295.312 215.656 305.839 216.256C315.93 216.869 325.952 218.314 335.805 220.577C338.285 221.169 340.868 221.845 343.32 222.653L345.405 223.358C345.668 223.442 345.922 223.517 346.166 223.611L347.537 224.109C349.097 224.71 364.606 229.229 368.006 230.271C371.821 231.512 375.321 233.566 378.264 236.293L364.089 275.464L353.502 268.466Z"
                              fill="#0455A4"
                              style="fill: #0455a4; fill: var(--tblr-illustrations-primary, var(--tblr-primary, #0455a4))"
                            />
                            <path
                              d="M271.554 222.127C271.554 233.832 285.644 243.3 303.069 243.3C320.494 243.3 334.519 233.832 334.519 222.127C334.52 221.496 334.457 220.867 334.331 220.249C324.476 217.949 314.441 216.504 304.337 215.927C293.815 215.329 283.263 215.495 272.765 216.425C271.953 218.216 271.539 220.161 271.554 222.127Z"
                              fill="#FFCB9D"
                              style="fill: #ffcb9d; fill: var(--tblr-illustrations-skin, #ffcb9d)"
                            />
                            <path
                              d="M337.524 142.451C335.044 147.89 329.361 151.845 328.591 152.361C312.133 163.511 287.334 150.849 280.684 147.063C279.03 151.572 274.756 154.973 274.221 157.744C274.08 158.57 273.939 159.397 273.836 160.167C273.671 161.504 273.593 162.85 273.601 164.197C273.65 166.483 273.908 168.759 274.371 170.998C275.188 174.887 278.664 185.22 284.347 198.681C276.388 199.207 268.422 199.742 260.45 200.287L241.108 201.583C238.404 192.37 237.788 182.669 239.305 173.187C239.446 172.341 239.671 171.101 240.009 169.551C240.72 166.396 241.662 163.297 242.827 160.28C243.034 159.754 243.26 159.209 243.485 158.664C245.146 154.767 247.194 151.047 249.6 147.561C255.842 138.551 264.069 131.095 273.648 125.768C276.945 124.04 298.071 113.19 319.563 120.808C324.908 122.687 337.618 127.262 338.689 136.148C338.907 138.317 338.503 140.503 337.524 142.451ZM291.204 514.539C285.803 516.324 285.718 525.182 285.718 525.182L284.253 534.219L294.68 536.68L297.658 529.578L316.905 536.68C312.885 527.38 296.615 512.764 291.204 514.539ZM368.72 536.68C364.69 527.38 348.42 512.764 343.019 514.539C337.618 516.315 337.524 525.182 337.524 525.182L336.068 534.219L346.476 536.68L349.454 529.578L368.72 536.68Z"
                              fill="#232B41"
                              class="tblr-illustrations-boy-girl-c"
                            />
                            <path
                              d="M337.524 142.451C335.044 147.89 329.371 151.845 328.591 152.352C312.133 163.521 287.335 150.849 280.684 147.063C278.366 144.912 276.281 142.523 274.465 139.934C283.982 145.468 294.71 148.587 305.711 149.018C316.712 149.448 327.651 147.178 337.571 142.404L337.524 142.451Z"
                              fill="black"
                              opacity="0.3"
                            />
                            <path d="M373.051 435.333H258.947L256.956 371.738L256.176 346.423L367.199 344.262L371.942 418.002L373.051 435.333Z" fill="#A6A9B3" />
                            <path
                              d="M373.05 435.333H258.947L257.632 345.615L313.392 345.249C292.67 386.214 286.602 401.469 288.274 402.85C290.566 404.729 306.121 379.122 314.003 383.527C316.868 385.134 317.168 389.849 317.985 393.005C320.531 402.756 332.226 413.455 371.942 418.002L373.05 435.333Z"
                              fill="black"
                              opacity="0.1"
                            />
                            <path
                              d="M346.241 223.63H346.194L345.433 223.386C342.371 236.997 324.552 247.48 303.087 247.48C279.425 247.48 260.177 234.799 260.177 219.225V218.436C259.454 218.548 258.693 218.67 257.904 218.821C257.895 218.955 257.895 219.09 257.904 219.225C257.904 236.283 278.166 250.223 303.087 250.223C325.51 250.223 344.156 238.951 347.603 224.194L346.241 223.63Z"
                              fill="#E1E1E1"
                            />
                            <path d="M307.502 263.853C309.411 263.853 310.959 262.011 310.959 259.739C310.959 257.467 309.411 255.625 307.502 255.625C305.593 255.625 304.045 257.467 304.045 259.739C304.045 262.011 305.593 263.853 307.502 263.853Z" fill="#E1E1E1" />
                            <path
                              d="M260.404 200.315L241.063 201.612C238.358 192.398 237.742 182.697 239.259 173.215C239.4 172.37 239.625 171.13 239.964 169.58L242.782 160.308C242.988 159.782 243.214 159.237 243.439 158.693C245.1 154.796 247.148 151.076 249.554 147.589C248.615 159.989 248.474 177.273 253.744 188.263C255.706 192.418 257.931 196.443 260.404 200.315Z"
                              fill="black"
                              opacity="0.3"
                            />
                            <path d="M367.199 344.272C330.201 344.935 293.193 345.649 256.176 346.413C256.233 343.868 256.27 341.238 256.336 338.673V338.542C315.929 341.501 350.957 319.557 361.224 311.244C363.197 322.244 365.264 333.253 367.199 344.272Z" fill="black" opacity="0.1" />
                            <path
                              d="M280.017 380.052C274.531 389.041 263.503 391.437 255.35 384.965C250.399 380.597 225.45 357.564 220.594 316.006C218.13 294.148 221.708 272.032 230.936 252.064C231.509 250.843 232.007 249.829 232.429 249.002L249.723 259.119C249.103 260.124 248.173 261.674 247.13 263.637C243.063 271.34 237.267 285.609 240.743 300.272C242.621 308.276 246.266 313.912 253.706 324.695C259.993 333.807 267.133 342.299 275.029 350.058C283.671 356.662 285.804 370.564 280.017 380.052Z"
                              fill="#FFCB9D"
                              style="fill: #ffcb9d; fill: var(--tblr-illustrations-skin, #ffcb9d)"
                            />
                            <path d="M249.723 259.119C249.103 260.124 248.173 261.674 247.13 263.637C242.33 260.274 234.862 255.005 230.926 252.064C231.499 250.843 231.997 249.829 232.42 249.002L249.723 259.119Z" fill="black" opacity="0.15" />
                            <path
                              d="M304.337 215.899C293.815 215.301 283.264 215.467 272.766 216.397C271.949 218.196 271.536 220.152 271.554 222.127C271.554 233.832 285.644 243.3 303.069 243.3C320.494 243.3 334.519 233.832 334.519 222.127C334.52 221.496 334.457 220.867 334.331 220.248C324.477 217.94 314.442 216.485 304.337 215.899Z"
                              fill="black"
                              opacity="0.07"
                            />
                            <path
                              d="M445.325 188.01C446.283 199.188 447.25 210.351 448.227 221.498L453.863 286.182C455.329 302.909 456.785 319.645 458.231 336.39H543.713C545.372 319.639 547.038 302.902 548.71 286.182C549.668 276.701 550.608 267.223 551.528 257.748C553.852 234.489 556.162 211.243 558.461 188.01H445.325Z"
                              fill="#DADBE0"
                            />
                            <path
                              d="M555.464 217.844C547.072 224.328 539.267 231.538 532.14 239.393C515.429 257.766 513.109 267.62 505.171 271.03C495.956 274.994 479.809 269.997 449.542 228.045L453.995 288.474H454.042C455.445 304.443 456.835 320.412 458.213 336.381H543.694C545.354 319.642 547.019 302.909 548.692 286.182H549.058L555.464 217.844Z"
                              fill="black"
                              opacity="0.1"
                            />
                            <path
                              d="M420.385 276.76C422.47 282.504 425.273 287.961 428.727 293.002C429.744 294.46 430.829 295.871 431.977 297.229C436.998 303.248 443.375 307.99 450.585 311.065C454.275 312.632 458.128 313.779 462.074 314.485C467.561 315.468 473.147 315.784 478.71 315.424C479.17 315.424 479.649 315.377 480.072 315.34C480.247 315.35 480.423 315.35 480.598 315.34L481.631 315.255L482.12 315.208H482.458C486.709 314.762 490.926 314.037 495.083 313.038H495.148C498.827 312.155 502.453 311.064 506.007 309.769C507.604 309.215 509.145 308.604 510.62 307.956C512.674 307.067 514.615 306.128 516.444 305.138C519.749 303.381 522.934 301.407 525.978 299.23C527.35 298.243 528.608 297.294 529.736 296.411C522.502 293.161 515.26 289.892 508.018 286.661C503.784 284.782 499.557 282.882 495.336 280.959C493.604 282.328 491.712 283.479 489.7 284.388C488.168 285.069 486.55 285.537 484.891 285.778C483.818 285.965 482.727 286.028 481.64 285.966C478.4 285.778 475.347 284.181 472.51 281.617C472.363 281.502 472.225 281.376 472.097 281.241C470.798 280.007 469.592 278.679 468.489 277.267C456.841 262.407 449.702 233.681 449.702 233.681C452.924 222.879 453.119 211.399 450.266 200.494C449.097 196.178 447.436 192.011 445.316 188.076C440.947 188.898 436.792 190.601 433.104 193.082C431.175 194.4 429.398 195.928 427.806 197.638C412.607 213.861 410.268 249.528 420.385 276.76Z"
                              fill="#DADBE0"
                            />
                            <path
                              d="M445.325 188.01C438.625 189.246 432.498 192.598 427.844 197.572C412.607 213.861 410.268 249.528 420.385 276.76C422.47 282.504 425.273 287.961 428.727 293.002C429.744 294.46 430.828 295.871 431.977 297.229C436.998 303.248 443.375 307.99 450.585 311.065C452.425 311.844 454.306 312.518 456.221 313.085L458.26 336.39H543.741C545.401 319.639 547.067 302.902 548.739 286.182C549.697 276.694 550.636 267.216 551.557 257.748C553.861 234.489 556.163 211.243 558.461 188.01H445.325Z"
                              fill="black"
                              opacity="0.05"
                            />
                            <path
                              d="M540.181 104.661C540.002 109.282 539.636 116.055 538.95 124.387C538.762 126.266 538.621 127.816 538.584 128.37C537.518 137.473 535.309 146.404 532.008 154.954C531.322 156.654 530.637 158.251 529.857 159.81C526.973 165.578 505.434 172.529 486.703 170.472C467.972 168.415 461.256 150.201 469.353 142.413C471.824 139.99 474.116 136.007 475.994 131.667C478.228 126.463 480.092 121.108 481.574 115.642C482.513 112.533 482.946 110.475 482.946 110.475L497.712 97.7471H533.041C532.628 103.703 534.187 107.817 536.057 108.183C537.926 108.55 539.767 105.346 540.181 104.661Z"
                              fill="#FFCB9D"
                              style="fill: #ffcb9d; fill: var(--tblr-illustrations-skin, #ffcb9d)"
                            />
                            <path
                              d="M540.181 104.661C540.002 109.282 539.636 116.055 538.95 124.387C538.762 126.266 538.621 127.816 538.584 128.37C537.519 137.473 535.309 146.404 532.008 154.954C529.719 154.235 527.589 153.083 525.734 151.563C523.719 149.859 522.057 147.779 520.839 145.438C519.612 142.93 518.785 140.246 518.388 137.482C518.04 135.703 517.795 133.906 517.655 132.099C504.109 136.607 489.444 136.455 475.995 131.667C478.228 126.463 480.092 121.108 481.574 115.642C482.514 112.533 482.946 110.475 482.946 110.475L497.713 97.7471H533.042C532.628 103.703 534.188 107.817 536.057 108.183C537.926 108.55 539.768 105.346 540.181 104.661Z"
                              fill="black"
                              opacity="0.1"
                            />
                            <path
                              d="M544.53 112.213C544.324 119.897 540.998 127.365 536.32 131.846C535.242 132.734 534.228 133.698 533.286 134.73C530.89 137.732 529.277 141.283 528.589 145.062C526.945 143.089 525.93 140.668 525.677 138.111C525.433 134.213 527.105 127.027 527.19 126.022C527.19 126.022 527.19 125.749 527.274 125.43C527.274 124.876 527.359 124.65 527.434 123.786C527.564 121.91 527.564 120.026 527.434 118.15C527.455 118.06 527.455 117.967 527.434 117.877C518.491 123.326 493.007 136.599 475.854 123.514C473.188 121.482 470.828 119.078 468.846 116.375C468.641 116.159 468.473 115.912 468.349 115.642C467.865 114.969 467.426 114.267 467.033 113.538C466.996 113.476 466.955 113.416 466.911 113.359V113.312C465.865 111.449 465.141 109.423 464.77 107.319L464.638 106.492C464.561 105.555 464.561 104.612 464.638 103.674C465.122 100.035 466.851 96.6762 469.532 94.1681C474.501 89.2271 481.838 86.2963 485.698 84.7746C500.728 78.7345 523.489 77.2597 536.424 90.8616C539.662 94.4155 542.023 98.678 543.319 103.308C544.136 106.205 544.544 109.203 544.53 112.213Z"
                              fill="#232B41"
                              class="tblr-illustrations-boy-girl-c"
                            />
                            <path
                              d="M527.378 117.887C518.435 123.335 492.95 136.608 475.798 123.523C473.131 121.492 470.771 119.087 468.79 116.384C468.585 116.169 468.417 115.921 468.292 115.651C467.809 114.979 467.37 114.276 466.977 113.547C466.94 113.485 466.899 113.426 466.855 113.369V113.322C465.828 111.452 465.123 109.423 464.77 107.319C468.771 111.224 473.388 114.442 478.437 116.844C503.452 128.586 529.679 113.951 533.859 111.621L534.179 111.433C532.074 113.75 529.801 115.907 527.378 117.887Z"
                              fill="black"
                              opacity="0.3"
                            />
                            <path d="M543.657 336.39L536.311 514.22H521.873L501.893 376.83L488.178 514.22H477.479L458.213 336.39H543.657Z" fill="#0455A4" style="fill: #0455a4; fill: var(--tblr-illustrations-primary, var(--tblr-primary, #0455a4))" />
                            <path
                              d="M505.697 538.906L537.926 535.318C537.926 535.318 539.091 526.967 534.037 524.046C528.984 521.124 510.967 531.081 505.697 538.906ZM458.26 538.906L490.479 535.318C490.479 535.318 491.644 526.967 486.6 524.046C481.556 521.124 463.473 531.081 458.26 538.906ZM420.385 276.76C422.47 282.504 425.272 287.961 428.726 293.002C434.133 300.991 441.72 307.26 450.585 311.065C451.487 303.348 449.862 295.547 445.954 288.831C439.472 277.634 428.754 272.852 420.385 276.76Z"
                              fill="#232B41"
                              class="tblr-illustrations-boy-girl-c"
                            />
                            <path d="M513.447 185.699C505.434 193.674 497.788 196.624 491.964 197.694L491.024 197.864L478.165 187.756L513.447 185.699Z" fill="#E1E1E1" />
                            <path
                              d="M450.867 241.44C454.744 254.128 458.629 266.812 462.525 279.494C469.157 287.839 476.911 295.226 485.567 301.446C499.357 311.235 521.995 322.187 542.238 321.474C552.74 321.126 562.594 317.632 570.231 309.262C576.534 302.32 579.559 294.054 582.555 282.518C583.298 279.653 584.049 276.6 584.838 273.303C586.999 264.379 593.424 236.546 584.575 211.588C581.353 202.523 577.69 198.211 575.651 196.154C573.275 193.74 570.476 191.782 567.394 190.377C564.57 189.104 561.548 188.323 558.461 188.066C558.301 188.93 558.085 190.18 557.841 191.683C557.08 196.379 556.592 200.362 556.282 203.105C556.188 203.979 556.037 205.35 555.887 207.013C555.53 210.77 555.27 214.393 555.107 217.881C555.029 225.279 553.997 232.635 552.036 239.768C550.243 246.356 547.577 252.675 544.108 258.555C535.992 262.148 527.347 264.4 518.51 265.225C486.168 268.165 461.285 250.148 450.867 241.44Z"
                              fill="#DADBE0"
                            />
                            <path d="M542.238 321.492C552.74 321.145 562.594 317.65 570.231 309.281C576.534 302.339 579.558 294.073 582.555 282.537C575.547 283.683 567.469 287.741 559.898 294.458C550.861 302.433 544.586 312.475 542.238 321.492Z" fill="#232B41" class="tblr-illustrations-boy-girl-c" />
                            <path d="M488.178 514.22L501.893 376.83L495.778 336.39H458.213L477.479 514.22H488.178Z" fill="black" opacity="0.22" />
                            <path d="M494.801 195.468L473.956 180.495L469.194 185.539L483.359 206.694L494.801 195.468ZM495.778 195.318L527.368 175.629L534.582 182.261L513.118 210.075L495.778 195.318Z" fill="#0455A4" style="fill: #0455a4; fill: var(--tblr-illustrations-primary, var(--tblr-primary, #0455a4))" />
                            <path d="M494.801 195.468L473.956 180.495L469.194 185.539L483.359 206.694L494.801 195.468Z" fill="black" opacity="0.22" />
                          </svg>
                          <!-- END ILLUSTRATION -->
                        </div>

                        <p class="empty-title">No data found</p>
                        <p class="empty-subtitle text-secondary">Try adjusting your search or filter to find what you're looking for.</p>
                        <div class="empty-action">
                          <a href="." class="btn btn-primary"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M12 5l0 14" />
                              <path d="M5 12l14 0" /></svg
                            >Add new item</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal Section -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Modals</h2>
                    </div>
                    <div class="card-body">
                      <div class="btn-list">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#modal-demo">Open Modal</button>
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#modal-success">Success Modal</button>
                      </div>

                      <div class="modal modal-blur fade" id="modal-demo" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h2 class="modal-title">Modal Title</h2>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>This is a sample modal dialog. You can put any content here.</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-body text-center py-4">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/circle-check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon mb-2 text-success icon-lg">
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M9 12l2 2l4 -4" />
                              </svg>
                              <h3>Success!</h3>
                              <div class="text-secondary">Your action was completed successfully.</div>
                            </div>
                            <div class="modal-footer">
                              <div class="w-100">
                                <div class="row">
                                  <div class="col">
                                    <button class="btn w-100" data-bs-dismiss="modal">Cancel</button>
                                  </div>
                                  <div class="col">
                                    <button class="btn btn-success w-100" data-bs-dismiss="modal">OK</button>
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

                <!-- Button Groups Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Button Groups</h2>
                    </div>
                    <div class="card-body">
                      <h3 class="h4">Basic Button Group</h3>
                      <div class="btn-group mb-3" role="group">
                        <button type="button" class="btn">Left</button>
                        <button type="button" class="btn">Middle</button>
                        <button type="button" class="btn">Right</button>
                      </div>

                      <h3 class="h4">Button Toolbar</h3>
                      <div class="btn-toolbar mb-3" role="toolbar">
                        <div class="btn-group me-2" role="group">
                          <button type="button" class="btn">1</button>
                          <button type="button" class="btn">2</button>
                          <button type="button" class="btn">3</button>
                        </div>
                        <div class="btn-group" role="group">
                          <button type="button" class="btn">4</button>
                          <button type="button" class="btn">5</button>
                        </div>
                      </div>

                      <h3 class="h4">Vertical Button Group</h3>
                      <div class="btn-group-vertical" role="group">
                        <button type="button" class="btn">Top</button>
                        <button type="button" class="btn">Middle</button>
                        <button type="button" class="btn">Bottom</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Segmented Navigation Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Segmented Navigation</h2>
                    </div>
                    <div class="card-body">
                      <h3 class="h4">Basic Segmented</h3>
                      <div class="mb-3">
                        <nav class="nav nav-segmented" role="tablist">
                          <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">Home</button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Profile</button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Settings</button>
                        </nav>
                      </div>

                      <h3 class="h4">With Icons</h3>
                      <div class="mb-3">
                        <nav class="nav nav-segmented" role="tablist">
                          <button role="tab" data-bs-toggle="tab" aria-selected="true" aria-label="Home" class="nav-link active">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                              <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                          </button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="User" class="nav-link">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                          </button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Settings" class="nav-link">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                              <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                              />
                              <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            </svg>
                          </button>
                        </nav>
                      </div>

                      <h3 class="h4">With Emojis</h3>
                      <div class="mb-3">
                        <nav class="nav nav-segmented" role="tablist">
                          <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">👦</button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">👦🏿</button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">👦🏾</button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">👦🏽</button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">👦🏼</button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">👦🏻</button>
                        </nav>
                      </div>

                      <h3 class="h4">With Icons and Text</h3>
                      <div class="mb-3">
                        <nav class="nav nav-segmented" role="tablist">
                          <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                              <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg
                            >Home
                          </button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg
                            >Profile
                          </button>
                          <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                              <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                              />
                              <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg
                            >Settings
                          </button>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Collapse Section -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Collapse</h2>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <h3 class="h4">Basic Collapse</h3>
                          <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample">Toggle Collapse</button>
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body">This is collapsed content that can be toggled. It's hidden by default and shown when the button is clicked.</div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h3 class="h4">Multiple Targets</h3>
                          <div class="btn-list">
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1">Toggle First</button>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2">Toggle Second</button>
                          </div>
                          <div class="collapse" id="multiCollapseExample1">
                            <div class="card card-body mb-2">First collapsible content.</div>
                          </div>
                          <div class="collapse" id="multiCollapseExample2">
                            <div class="card card-body">Second collapsible content.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Tooltips & Popovers Section -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Tooltips &amp; Popovers</h2>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <h3 class="h4">Tooltips</h3>
                          <div class="btn-list">
                            <button class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Top</button>
                            <button class="btn" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Right</button>
                            <button class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Bottom</button>
                            <button class="btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">Left</button>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h3 class="h4">Popovers</h3>
                          <div class="btn-list">
                            <button class="btn" data-bs-toggle="popover" data-bs-placement="top" title="Popover Title" data-bs-content="This is popover content on top">Top Popover</button>
                            <button class="btn" data-bs-toggle="popover" data-bs-placement="right" title="Popover Title" data-bs-content="This is popover content on right">Right Popover</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- List Groups Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">List Groups</h2>
                    </div>
                    <div class="card-body p-0">
                      <div class="list-group list-group-flush">
                        <div class="list-group-item">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2 icon-inline">
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                          </svg>
                          Home
                        </div>
                        <div class="list-group-item active">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2 icon-inline">
                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                          </svg>
                          Active item
                        </div>
                        <div class="list-group-item">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2 icon-inline">
                            <path
                              d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                            />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                          </svg>
                          Settings
                        </div>
                        <div class="list-group-item">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2 icon-inline">
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                          </svg>
                          Profile
                        </div>
                        <div aria-disabled="true" class="list-group-item disabled">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2 icon-inline">
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                          </svg>
                          Disabled item
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Content Elements Section -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Content Elements</h2>
                    </div>
                    <div class="card-body">
                      <h3 class="h4">Blockquote</h3>
                      <blockquote class="blockquote mb-4">
                        <p>This is a blockquote example with some sample text to demonstrate the styling.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                      </blockquote>

                      <h3 class="h4">Code Block</h3>
                      <pre class="mb-3"><code>// JavaScript example
function greetUser(name) {
   console.log(`Hello, ${name}!`);
   return true;
}</code></pre>

                      <h3 class="h4">Inline Elements</h3>
                      <p>This paragraph contains <code>inline code</code>, <kbd>Ctrl + S</kbd> keyboard shortcut, and <mark>highlighted text</mark>.</p>
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
<script src="/tabler/libs/nouislider/dist/nouislider.min.js" defer></script>
<script src="/tabler/libs/tom-select/dist/js/tom-select.base.min.js" defer></script>
<script src="/tabler/libs/star-rating.js/dist/star-rating.min.js" defer></script>
<script>
      ;(function () {
        const selectId = 'select-demo-select'

        function initSelect() {
          window.tabler_select ??= {}

          const renderOption = (data, escape) => {
            if (data.customProperties) {
              return `<div class="dropdown-item"><span class="dropdown-item-indicator">${data.customProperties}</span>${escape(data.text)}</div>`
            }
            return `<div>${escape(data.text)}</div>`
          }

          window.TomSelect &&
            (window.tabler_select[selectId] = new TomSelect(document.getElementById(selectId), {
              copyClassesToDropdown: false,
              dropdownParent: 'body',
              render: {
                item: renderOption,
                option: renderOption,
              },
            }))
        }

        document.readyState !== 'loading' ? initSelect() : document.addEventListener('DOMContentLoaded', initSelect, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-demo-rating'
        const ratingKey = 'rating-demo-rating'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full">\u003cpath d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const rangeId = 'range-demo-range'
        const startValue = 50
        const connectValue = undefined
        const step = 10
        const min = 0
        const max = 100
        const handleLabels = ['Demo range']

        function initRange() {
          window.noUiSlider &&
            noUiSlider.create(document.getElementById(rangeId), {
              start: startValue,
              ...(connectValue ? { connect: connectValue } : {}),
              step,
              range: { min, max },
              ...(handleLabels ? { handleAttributes: handleLabels.map((label) => ({ 'aria-label': label })) } : {}),
            })
        }

        document.readyState !== 'loading' ? initRange() : document.addEventListener('DOMContentLoaded', initRange, { once: true })
      })()
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
