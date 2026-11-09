<x-preview.page :title='"Form elements"' :html-attrs='"lang=\"en\""'>
<x-slot:head>
@verbatim
<link href="/tabler/libs/nouislider/dist/nouislider.min.css" rel="stylesheet" />
<link href="/tabler/libs/tom-select/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet" />
@endverbatim
</x-slot:head>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Form elements</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/forms/elements" target="_blank" rel="noopener" class="link-secondary">
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
                  <form action="https://httpbin.org/post" method="post" class="card">
                    <div class="card-header">
                      <h2 class="card-title">Form elements</h2>
                    </div>
                    <div class="card-body">
                      <div class="row g-5">
                        <div class="col-xl-4">
                          <div class="row">
                            <div class="col-md-6 col-xl-12">
                              <div class="mb-3">
                                <div class="form-label">Static</div>

                                <div class="form-control-plaintext">Input value</div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe1-text"> Text </label>

                                <input type="text" class="form-control" id="fe1-text" name="example-text-input" placeholder="Input placeholder" />
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe1-password"> Password </label>

                                <input type="password" class="form-control" id="fe1-password" name="example-password-input" placeholder="Input placeholder" autocomplete="current-password" />
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe1-disabled"> Disabled </label>

                                <input type="text" class="form-control" id="fe1-disabled" name="example-disabled-input" placeholder="Disabled..." value="Well, she turned me into a newt." disabled />
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="fe1-readonly"> Readonly </label>

                                <input type="text" class="form-control" id="fe1-readonly" name="example-disabled-input" placeholder="Readonly..." value="Well, how'd you become king, then?" readonly />
                              </div>
                              <div class="mb-3">
                                <label class="form-label required" for="fe1-required">
                                  Required
                                  <span class="visually-hidden"> (required)</span>
                                </label>

                                <input type="text" class="form-control" id="fe1-required" name="example-required-input" placeholder="Required..." aria-required="true" />
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="fe1-textarea">
                                  Textarea

                                  <span class="form-label-description">56/100</span>
                                </label>

                                <textarea class="form-control" id="fe1-textarea" name="example-textarea-input" rows="6" placeholder="Content..">
Oh! Come and see the violence inherent in the system! Help, help, I'm being repressed! We shall say 'Ni' again to you, if you do not appease us. I'm not a witch. I'm not a witch. Camelot!</textarea>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Select</div>
                                <select class="form-select" aria-label="Select">
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Select multiple</div>
                                <select class="form-select" multiple aria-label="Select multiple">
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Select multiple states</div>
                                <select class="form-select" id="select-states" value="" multiple aria-label="Select multiple states">
                                  <option value="AL">Alabama</option>
                                  <option value="AK">Alaska</option>
                                  <option value="AZ" selected>Arizona</option>
                                  <option value="AR">Arkansas</option>
                                  <option value="CA">California</option>
                                  <option value="CO">Colorado</option>
                                  <option value="CT">Connecticut</option>
                                  <option value="DE">Delaware</option>
                                  <option value="DC">District of Columbia</option>
                                  <option value="FL">Florida</option>
                                  <option value="GA">Georgia</option>
                                  <option value="HI">Hawaii</option>
                                  <option value="ID">Idaho</option>
                                  <option value="IL">Illinois</option>
                                  <option value="IN">Indiana</option>
                                  <option value="IA">Iowa</option>
                                  <option value="KS">Kansas</option>
                                  <option value="KY">Kentucky</option>
                                  <option value="LA">Louisiana</option>
                                  <option value="ME">Maine</option>
                                  <option value="MD">Maryland</option>
                                  <option value="MA">Massachusetts</option>
                                  <option value="MI">Michigan</option>
                                  <option value="MN">Minnesota</option>
                                  <option value="MS">Mississippi</option>
                                  <option value="MO">Missouri</option>
                                  <option value="MT">Montana</option>
                                  <option value="NE">Nebraska</option>
                                  <option value="NV">Nevada</option>
                                  <option value="NH">New Hampshire</option>
                                  <option value="NJ">New Jersey</option>
                                  <option value="NM">New Mexico</option>
                                  <option value="NY">New York</option>
                                  <option value="NC">North Carolina</option>
                                  <option value="ND">North Dakota</option>
                                  <option value="OH">Ohio</option>
                                  <option value="OK">Oklahoma</option>
                                  <option value="OR">Oregon</option>
                                  <option value="PA">Pennsylvania</option>
                                  <option value="RI">Rhode Island</option>
                                  <option value="SC" selected>South Carolina</option>
                                  <option value="SD">South Dakota</option>
                                  <option value="TN">Tennessee</option>
                                  <option value="TX">Texas</option>
                                  <option value="UT">Utah</option>
                                  <option value="VT">Vermont</option>
                                  <option value="VA">Virginia</option>
                                  <option value="WA">Washington</option>
                                  <option value="WV">West Virginia</option>
                                  <option value="WI">Wisconsin</option>
                                  <option value="WY" selected>Wyoming</option>
                                </select>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Input group</div>

                                <div class="input-group mb-2">
                                  <input type="text" class="form-control" placeholder="Search for…" />
                                  <button class="btn" type="button">Go!</button>
                                </div>
                                <div class="input-group">
                                  <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"> Action </a>
                                    <a class="dropdown-item" href="#"> Another action </a>
                                  </div>
                                  <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                                </div>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="fe1-input-group-buttons"> Input group buttons </label>

                                <div class="input-group">
                                  <input type="text" class="form-control" id="fe1-input-group-buttons" />
                                  <button type="button" class="btn">Action</button>
                                  <button data-bs-toggle="dropdown" type="button" class="btn dropdown-toggle dropdown-toggle-split" aria-label="Toggle dropdown"></button>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#"> Action </a>
                                    <a class="dropdown-item" href="#"> Another action </a>
                                  </div>
                                </div>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Icon input</div>

                                <div class="input-icon mb-3">
                                  <input type="text" value="" class="form-control" placeholder="Search…" />
                                  <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                      <path d="M21 21l-6 -6" />
                                    </svg>
                                  </span>
                                </div>
                                <div class="input-icon mb-3">
                                  <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                      <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    </svg>
                                  </span>
                                  <input type="text" value="" class="form-control" placeholder="Username" />
                                </div>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Loader input</div>

                                <div class="input-icon mb-3">
                                  <input type="text" value="" class="form-control" placeholder="Loading…" />
                                  <span class="input-icon-addon">
                                    <div class="spinner-border spinner-border-sm text-secondary" role="status"></div>
                                  </span>
                                </div>
                                <div class="input-icon mb-3">
                                  <span class="input-icon-addon">
                                    <div class="spinner-border spinner-border-sm text-secondary" role="status"></div>
                                  </span>
                                  <input type="text" value="" class="form-control" placeholder="Loading…" />
                                </div>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="fe1-separated-input"> Separated inputs </label>

                                <div class="row g-2">
                                  <div class="col">
                                    <input type="text" class="form-control" id="fe1-separated-input" placeholder="Search for…" />
                                  </div>
                                  <div class="col-auto">
                                    <a href="#" class="btn btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                        <path d="M21 21l-6 -6" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe1-help-icon-input"> Input with help icon </label>

                                <div class="row g-2">
                                  <div class="col">
                                    <input type="text" class="form-control" id="fe1-help-icon-input" placeholder="Search for…" />
                                  </div>
                                  <div class="col-auto align-self-center">
                                    <button
                                      type="button"
                                      class="form-help"
                                      data-bs-toggle="popover"
                                      data-bs-placement="top"
                                      data-bs-content="&lt;p&gt;ZIP Code must be US or CDN format. You can use an extended ZIP+4 code to determine address more accurately.&lt;/p&gt;&lt;p class='mb-0'&gt;&lt;a href='#'&gt;USP ZIP codes lookup tools&lt;/a&gt;&lt;/p&gt;"
                                      data-bs-html="true"
                                      aria-label="Help"
                                    >
                                      ?
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-xl-12">
                              <div class="mb-3">
                                <div class="form-label">Form control rounded</div>

                                <input type="text" class="form-control form-control-rounded mb-2" name="Form control rounded" placeholder="Text.." />

                                <div class="input-icon">
                                  <input type="text" value="" class="form-control form-control-rounded" placeholder="Search…" />
                                  <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                      <path d="M21 21l-6 -6" />
                                    </svg>
                                  </span>
                                </div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe2-form-control-flush"> Form control flush </label>

                                <input type="text" class="form-control form-control-flush" id="fe2-form-control-flush" name="Form control flush" placeholder="Text.." />
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Input group</div>

                                <div class="input-group mb-2">
                                  <span class="input-group-text">@</span>
                                  <input type="text" class="form-control" placeholder="username" autocomplete="off" />
                                </div>

                                <div class="input-group mb-2">
                                  <input type="text" class="form-control" placeholder="subdomain" autocomplete="off" />
                                  <span class="input-group-text">.tabler.io</span>
                                </div>

                                <div class="input-group">
                                  <span class="input-group-text">https://</span>
                                  <input type="text" class="form-control" placeholder="subdomain" autocomplete="off" />
                                  <span class="input-group-text">.tabler.io</span>
                                </div>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Input with checkbox or radios</div>

                                <div class="input-group mb-2">
                                  <span class="input-group-text">
                                    <input class="form-check-input m-0" type="checkbox" aria-label="Enable input" checked />
                                  </span>
                                  <input type="text" class="form-control" autocomplete="off" />
                                </div>

                                <div class="input-group">
                                  <input type="text" class="form-control" autocomplete="off" />
                                  <span class="input-group-text">
                                    <input class="form-check-input m-0" type="radio" aria-label="Enable input" checked />
                                  </span>
                                </div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe2-prepended-text"> Input with prepended text </label>

                                <div class="input-group input-group-flat">
                                  <span class="input-group-text">https://tabler.io/users/</span>
                                  <input type="text" class="form-control ps-0" id="fe2-prepended-text" value="yourfancyusername" autocomplete="off" />
                                </div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe2-appended-text"> Input with appended text </label>

                                <div class="input-group input-group-flat">
                                  <input type="text" class="form-control text-end pe-0" id="fe2-appended-text" value="yourfancydomain" autocomplete="off" />
                                  <span class="input-group-text">.tabler.io</span>
                                </div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe2-appended-link"> Input with appended link </label>

                                <div class="input-group input-group-flat">
                                  <input type="password" class="form-control" value="ultrastrongpassword" autocomplete="current-password" id="fe2-appended-link" />

                                  <span class="input-group-text">
                                    <button type="button" class="link-secondary input-group-link border-0 bg-transparent p-0" title="Show password" aria-label="Show password" aria-pressed="false" data-bs-toggle="tooltip" data-password-toggle="fe2-appended-link">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-toggle-show">
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                      </svg>
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/eye-off -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-toggle-hide d-none">
                                        <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                        <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                        <path d="M3 3l18 18" />
                                      </svg>
                                    </button>
                                  </span>
                                </div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe2-appended-kbd"> Input with appended kbd </label>

                                <div class="input-group input-group-flat">
                                  <input type="text" class="form-control" id="fe2-appended-kbd" autocomplete="off" />
                                  <span class="input-group-text">
                                    <kbd class="kbd-group"><kbd>⌘</kbd><kbd>K</kbd></kbd>
                                  </span>
                                </div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe2-appended-icon-links"> Input with appended icon links </label>

                                <div class="input-group input-group-flat">
                                  <input type="text" class="form-control" id="fe2-appended-icon-links" autocomplete="off" />
                                  <span class="input-group-text">
                                    <button type="button" class="link-secondary border-0 bg-transparent p-0" title="Clear search" aria-label="Clear search" data-bs-toggle="tooltip">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M18 6l-12 12" />
                                        <path d="M6 6l12 12" />
                                      </svg>
                                    </button>
                                    <button type="button" class="link-secondary ms-2 border-0 bg-transparent p-0" title="Search settings" aria-label="Search settings" data-bs-toggle="tooltip">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/adjustments -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M6 4v4" />
                                        <path d="M6 12v8" />
                                        <path d="M10 16a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M12 4v10" />
                                        <path d="M12 18v2" />
                                        <path d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M18 4v1" />
                                        <path d="M18 9v11" />
                                      </svg>
                                    </button>
                                    <button type="button" class="link-secondary ms-2 border-0 bg-transparent p-0" title="Add notification" aria-label="Add notification" data-bs-toggle="tooltip" disabled>
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                        <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                      </svg>
                                    </button>
                                  </span>
                                </div>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Floating inputs</div>

                                <div class="form-floating mb-3">
                                  <input type="email" class="form-control" id="floating-input" value="name@example.com" autocomplete="off" />
                                  <label for="floating-input">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="password" class="form-control" id="floating-password" value="Password" autocomplete="current-password" />
                                  <label for="floating-password">Password</label>
                                </div>
                                <div class="form-floating">
                                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                  <label for="floatingSelect">Select</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="row">
                            <div class="col-md-6 col-xl-12">
                              <div class="mb-3">
                                <div class="form-label">Image Check</div>

                                <fieldset>
                                  <legend class="visually-hidden">Image Check</legend>
                                  <div class="row g-2">
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck" type="checkbox" value="1" class="form-imagecheck-input" />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg" alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck" type="checkbox" value="2" class="form-imagecheck-input" checked />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/brainstorming-session-with-creative-designers.jpg" alt="Brainstorming session with creative designers" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck" type="checkbox" value="3" class="form-imagecheck-input" />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg" alt="Finances - US Dollars and Bitcoins - Currency - Money" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck" type="checkbox" value="4" class="form-imagecheck-input" checked />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg" alt="Group of people brainstorming and taking notes" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck" type="checkbox" value="5" class="form-imagecheck-input" />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg" alt="Blue sofa with pillows in a designer living room interior" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck" type="checkbox" value="6" class="form-imagecheck-input" />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg" alt="Home office desk with Macbook, iPhone, calendar, watch &amp; organizer" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Image Check Radio</div>

                                <fieldset>
                                  <legend class="visually-hidden">Image Check Radio</legend>
                                  <div class="row g-2">
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck-radio" type="radio" value="1" class="form-imagecheck-input" />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/group-of-people-sightseeing-in-the-city.jpg" alt="Group of people sightseeing in the city" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck-radio" type="radio" value="2" class="form-imagecheck-input" checked />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/color-palette-guide-sample-colors-catalog-.jpg" alt="Color Palette Guide. Sample Colors Catalog." class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck-radio" type="radio" value="3" class="form-imagecheck-input" />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/stylish-workplace-with-computer-at-home.jpg" alt="Stylish workplace with computer at home" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck-radio" type="radio" value="4" class="form-imagecheck-input" />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/pink-desk-in-the-home-office.jpg" alt="Pink desk in the home office" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck-radio" type="radio" value="5" class="form-imagecheck-input" />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg" alt="Young woman sitting on the sofa and working on her laptop" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                      <label class="form-imagecheck mb-2">
                                        <input name="form-imagecheck-radio" type="radio" value="6" class="form-imagecheck-input" />
                                        <span class="form-imagecheck-figure">
                                          <img src="/tabler/static/photos/coffee-on-a-table-with-other-items.jpg" alt="Coffee on a table with other items" class="form-imagecheck-image" />
                                        </span>
                                      </label>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Color Input Check</div>

                                <fieldset>
                                  <legend class="visually-hidden">Color Input Check</legend>
                                  <div class="row g-2">
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="dark" class="form-colorinput-input" aria-label="dark" />
                                        <span class="form-colorinput-color bg-dark"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput form-colorinput-light">
                                        <input name="color" type="checkbox" value="white" class="form-colorinput-input" checked aria-label="white" />
                                        <span class="form-colorinput-color bg-white"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="blue" class="form-colorinput-input" aria-label="blue" />
                                        <span class="form-colorinput-color bg-blue"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="azure" class="form-colorinput-input" aria-label="azure" />
                                        <span class="form-colorinput-color bg-azure"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="indigo" class="form-colorinput-input" aria-label="indigo" />
                                        <span class="form-colorinput-color bg-indigo"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="purple" class="form-colorinput-input" aria-label="purple" />
                                        <span class="form-colorinput-color bg-purple"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="pink" class="form-colorinput-input" aria-label="pink" />
                                        <span class="form-colorinput-color bg-pink"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="red" class="form-colorinput-input" aria-label="red" />
                                        <span class="form-colorinput-color bg-red"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="orange" class="form-colorinput-input" aria-label="orange" />
                                        <span class="form-colorinput-color bg-orange"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="yellow" class="form-colorinput-input" aria-label="yellow" />
                                        <span class="form-colorinput-color bg-yellow"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="lime" class="form-colorinput-input" aria-label="lime" />
                                        <span class="form-colorinput-color bg-lime"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color" type="checkbox" value="green" class="form-colorinput-input" aria-label="green" />
                                        <span class="form-colorinput-color bg-green"></span>
                                      </label>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>
                              <div class="mb-3">
                                <div class="form-label">Color Input Radio</div>

                                <fieldset>
                                  <legend class="visually-hidden">Color Input Radio</legend>
                                  <div class="row g-2">
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="dark" class="form-colorinput-input" aria-label="dark" />
                                        <span class="form-colorinput-color bg-dark rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput form-colorinput-light">
                                        <input name="color-rounded" type="radio" value="white" class="form-colorinput-input" checked aria-label="white" />
                                        <span class="form-colorinput-color bg-white rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="blue" class="form-colorinput-input" aria-label="blue" />
                                        <span class="form-colorinput-color bg-blue rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="azure" class="form-colorinput-input" aria-label="azure" />
                                        <span class="form-colorinput-color bg-azure rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="indigo" class="form-colorinput-input" aria-label="indigo" />
                                        <span class="form-colorinput-color bg-indigo rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="purple" class="form-colorinput-input" aria-label="purple" />
                                        <span class="form-colorinput-color bg-purple rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="pink" class="form-colorinput-input" aria-label="pink" />
                                        <span class="form-colorinput-color bg-pink rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="red" class="form-colorinput-input" aria-label="red" />
                                        <span class="form-colorinput-color bg-red rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="orange" class="form-colorinput-input" aria-label="orange" />
                                        <span class="form-colorinput-color bg-orange rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="yellow" class="form-colorinput-input" aria-label="yellow" />
                                        <span class="form-colorinput-color bg-yellow rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="lime" class="form-colorinput-input" aria-label="lime" />
                                        <span class="form-colorinput-color bg-lime rounded-circle"></span>
                                      </label>
                                    </div>
                                    <div class="col-auto">
                                      <label class="form-colorinput">
                                        <input name="color-rounded" type="radio" value="green" class="form-colorinput-input" aria-label="green" />
                                        <span class="form-colorinput-color bg-green rounded-circle"></span>
                                      </label>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe3-color-picker"> Color picker </label>

                                <input type="color" id="fe3-color-picker" class="form-control form-control-color" value="#066fd1" title="Choose your color" />
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Validation States</div>

                                <input type="text" class="form-control is-valid mb-2" placeholder="Valid State.." aria-invalid="false" />
                                <input type="text" class="form-control is-invalid" placeholder="Invalid State.." aria-label="Invalid state" aria-invalid="true" aria-describedby="validation-invalid-feedback" />
                                <div class="invalid-feedback" id="validation-invalid-feedback">Invalid feedback</div>
                              </div>
                              <div class="mb-3">
                                <div class="form-label">Validation States (lite)</div>

                                <input type="text" class="form-control is-valid is-valid-lite mb-2" placeholder="Valid State.." aria-invalid="false" />
                                <input type="text" class="form-control is-invalid is-invalid-lite" placeholder="Invalid State.." aria-label="Invalid state" aria-invalid="true" />
                              </div>

                              <label class="form-label">Form fieldset</label>
                              <fieldset class="form-fieldset">
                                <div class="mb-3">
                                  <label class="form-label required" for="fe3-fieldset-name">
                                    Full name
                                    <span class="visually-hidden"> (required)</span>
                                  </label>

                                  <input type="text" id="fe3-fieldset-name" class="form-control" autocomplete="name" aria-required="true" />
                                </div>
                                <div class="mb-3">
                                  <label class="form-label required" for="fe3-fieldset-company">
                                    Company
                                    <span class="visually-hidden"> (required)</span>
                                  </label>

                                  <input type="text" id="fe3-fieldset-company" class="form-control" autocomplete="organization" aria-required="true" />
                                </div>
                                <div class="mb-3">
                                  <label class="form-label required" for="fe3-fieldset-email">
                                    Email
                                    <span class="visually-hidden"> (required)</span>
                                  </label>

                                  <input type="email" id="fe3-fieldset-email" class="form-control" autocomplete="email" aria-required="true" />
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="fe3-fieldset-phone"> Phone number </label>

                                  <input type="tel" id="fe3-fieldset-phone" class="form-control" autocomplete="tel" />
                                </div>
                                <label class="form-check">
                                  <input type="checkbox" class="form-check-input" />
                                  <span class="form-check-label required">I agree to the Terms & Conditions</span>
                                </label>
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-xl-12">
                              <div class="mb-3">
                                <div class="form-label">Simple selectgroup</div>

                                <fieldset>
                                  <legend class="visually-hidden">Simple selectgroup</legend>
                                  <div class="form-selectgroup">
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="HTML" class="form-selectgroup-input" checked />
                                      <span class="form-selectgroup-label">HTML</span>
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="CSS" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label">CSS</span>
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="PHP" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label">PHP</span>
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="JavaScript" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label">JavaScript</span>
                                    </label>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Icon input</div>

                                <fieldset>
                                  <legend class="visually-hidden">Icon input</legend>
                                  <div class="form-selectgroup">
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="sun" class="form-selectgroup-input" checked />
                                      <span class="form-selectgroup-label"
                                        ><!-- Download SVG icon from http://tabler.io/icons/icon/sun -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                          <path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                          <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg
                                      ></span>
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="moon" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label"
                                        ><!-- Download SVG icon from http://tabler.io/icons/icon/moon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                          <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454l0 .008" /></svg
                                      ></span>
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="cloud-rain" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label"
                                        ><!-- Download SVG icon from http://tabler.io/icons/icon/cloud-rain -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                          <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7" />
                                          <path d="M11 13v2m0 3v2m4 -5v2m0 3v2" /></svg
                                      ></span>
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="cloud" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label"
                                        ><!-- Download SVG icon from http://tabler.io/icons/icon/cloud -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                          <path d="M6.657 18c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878" /></svg
                                      ></span>
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="Other" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label">Other</span>
                                    </label>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Selectgroup with icons and text</div>

                                <fieldset>
                                  <legend class="visually-hidden">Selectgroup with icons and text</legend>
                                  <div class="form-selectgroup">
                                    <label class="form-selectgroup-item">
                                      <input type="radio" name="icons" value="home" class="form-selectgroup-input" checked />
                                      <span class="form-selectgroup-label"
                                        ><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1">
                                          <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                          <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                          <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                        Home</span
                                      >
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="radio" name="icons" value="user" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label"
                                        ><!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1">
                                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        User</span
                                      >
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="radio" name="icons" value="circle" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label"
                                        ><!-- Download SVG icon from http://tabler.io/icons/icon/circle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1">
                                          <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        </svg>
                                        Circle</span
                                      >
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="radio" name="icons" value="square" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label"
                                        ><!-- Download SVG icon from http://tabler.io/icons/icon/square -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1">
                                          <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14" />
                                        </svg>
                                        Square</span
                                      >
                                    </label>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Different style</div>

                                <fieldset>
                                  <legend class="visually-hidden">Different style</legend>
                                  <div class="form-selectgroup form-selectgroup-pills">
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="HTML" class="form-selectgroup-input" checked />
                                      <span class="form-selectgroup-label">HTML</span>
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="CSS" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label">CSS</span>
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="PHP" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label">PHP</span>
                                    </label>
                                    <label class="form-selectgroup-item">
                                      <input type="checkbox" name="name" value="JavaScript" class="form-selectgroup-input" />
                                      <span class="form-selectgroup-label">JavaScript</span>
                                    </label>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Payment method</div>

                                <fieldset>
                                  <legend class="visually-hidden">Payment method</legend>
                                  <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                                    <label class="form-selectgroup-item flex-fill">
                                      <input type="radio" name="form-payment" value="visa" class="form-selectgroup-input" />
                                      <div class="form-selectgroup-label d-flex align-items-center p-3">
                                        <div class="me-3">
                                          <span class="form-selectgroup-check"></span>
                                        </div>
                                        <div>
                                          <span class="payment payment-provider-visa payment-xs me-2"></span>
                                          ending in <strong>7998</strong>
                                        </div>
                                      </div>
                                    </label>
                                    <label class="form-selectgroup-item flex-fill">
                                      <input type="radio" name="form-payment" value="mastercard" class="form-selectgroup-input" checked />
                                      <div class="form-selectgroup-label d-flex align-items-center p-3">
                                        <div class="me-3">
                                          <span class="form-selectgroup-check"></span>
                                        </div>
                                        <div>
                                          <span class="payment payment-provider-mastercard payment-xs me-2"></span>
                                          ending in <strong>1000</strong>
                                        </div>
                                      </div>
                                    </label>
                                    <label class="form-selectgroup-item flex-fill">
                                      <input type="radio" name="form-payment" value="paypal" class="form-selectgroup-input" />
                                      <div class="form-selectgroup-label d-flex align-items-center p-3">
                                        <div class="me-3">
                                          <span class="form-selectgroup-check"></span>
                                        </div>
                                        <div>
                                          <span class="payment payment-provider-paypal payment-xs me-2"></span>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Project Manager</div>

                                <fieldset>
                                  <legend class="visually-hidden">Project Manager</legend>
                                  <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                                    <label class="form-selectgroup-item flex-fill">
                                      <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input" />
                                      <div class="form-selectgroup-label d-flex align-items-center p-3">
                                        <div class="me-3">
                                          <span class="form-selectgroup-check"></span>
                                        </div>
                                        <div class="form-selectgroup-label-content d-flex align-items-center">
                                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar me-3"></span>
                                          <div>
                                            <div class="fw-medium">Paweł Kuna</div>
                                            <div class="text-secondary">UI Designer</div>
                                          </div>
                                        </div>
                                      </div>
                                    </label>
                                    <label class="form-selectgroup-item flex-fill">
                                      <input type="checkbox" name="form-project-manager[]" value="2" class="form-selectgroup-input" checked />
                                      <div class="form-selectgroup-label d-flex align-items-center p-3">
                                        <div class="me-3">
                                          <span class="form-selectgroup-check"></span>
                                        </div>
                                        <div class="form-selectgroup-label-content d-flex align-items-center">
                                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar me-3"></span>
                                          <div>
                                            <div class="fw-medium">Jeffie Lewzey</div>
                                            <div class="text-secondary">Chemical Engineer</div>
                                          </div>
                                        </div>
                                      </div>
                                    </label>
                                    <label class="form-selectgroup-item flex-fill">
                                      <input type="checkbox" name="form-project-manager[]" value="3" class="form-selectgroup-input" />
                                      <div class="form-selectgroup-label d-flex align-items-center p-3">
                                        <div class="me-3">
                                          <span class="form-selectgroup-check"></span>
                                        </div>
                                        <div class="form-selectgroup-label-content d-flex align-items-center">
                                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar me-3"></span>
                                          <div>
                                            <div class="fw-medium">Mallory Hulme</div>
                                            <div class="text-secondary">Geologist IV</div>
                                          </div>
                                        </div>
                                      </div>
                                    </label>
                                    <label class="form-selectgroup-item flex-fill">
                                      <input type="checkbox" name="form-project-manager[]" value="4" class="form-selectgroup-input" />
                                      <div class="form-selectgroup-label d-flex align-items-center p-3">
                                        <div class="me-3">
                                          <span class="form-selectgroup-check"></span>
                                        </div>
                                        <div class="form-selectgroup-label-content d-flex align-items-center">
                                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar me-3"></span>
                                          <div>
                                            <div class="fw-medium">Dunn Slane</div>
                                            <div class="text-secondary">Research Nurse</div>
                                          </div>
                                        </div>
                                      </div>
                                    </label>
                                    <label class="form-selectgroup-item flex-fill">
                                      <input type="checkbox" name="form-project-manager[]" value="5" class="form-selectgroup-input" />
                                      <div class="form-selectgroup-label d-flex align-items-center p-3">
                                        <div class="me-3">
                                          <span class="form-selectgroup-check"></span>
                                        </div>
                                        <div class="form-selectgroup-label-content d-flex align-items-center">
                                          <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar me-3"></span>
                                          <div>
                                            <div class="fw-medium">Emmy Levet</div>
                                            <div class="text-secondary">VP Product Management</div>
                                          </div>
                                        </div>
                                      </div>
                                    </label>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Buttons group</div>

                                <fieldset>
                                  <legend class="visually-hidden">Buttons group</legend>
                                  <div class="btn-group w-100" role="group">
                                    <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-1" autocomplete="off" checked />
                                    <label for="btn-radio-basic-1" class="btn">1 min</label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-2" autocomplete="off" />
                                    <label for="btn-radio-basic-2" class="btn">5 min</label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-3" autocomplete="off" />
                                    <label for="btn-radio-basic-3" class="btn">10 min</label>
                                    <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-4" autocomplete="off" />
                                    <label for="btn-radio-basic-4" class="btn">30 min</label>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Buttons group with dropdown</div>

                                <fieldset>
                                  <legend class="visually-hidden">Buttons group with dropdown</legend>
                                  <div class="btn-group w-100" role="group">
                                    <input type="radio" class="btn-check" name="btn-radio-dropdown" id="btn-radio-dropdown-1" autocomplete="off" checked />
                                    <label for="btn-radio-dropdown-1" class="btn">Option 1</label>
                                    <input type="radio" class="btn-check" name="btn-radio-dropdown" id="btn-radio-dropdown-2" autocomplete="off" />
                                    <label for="btn-radio-dropdown-2" class="btn">Option 2</label>
                                    <div class="btn-group" role="group">
                                      <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other</button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"> Action </a>
                                        <a class="dropdown-item" href="#"> Another action </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"> Option 4 </a>
                                        <a class="dropdown-item" href="#"> Option 5 </a>
                                        <a class="dropdown-item" href="#"> Option 6 </a>
                                      </div>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                    <div class="form-label">Vertical buttons group</div>

                                    <fieldset>
                                      <legend class="visually-hidden">Vertical buttons group</legend>
                                      <div class="btn-group-vertical w-100" role="group">
                                        <input type="radio" class="btn-check" name="btn-radio-vertical" id="btn-radio-vertical-1" autocomplete="off" checked />
                                        <label for="btn-radio-vertical-1" class="btn">Button 1</label>
                                        <input type="radio" class="btn-check" name="btn-radio-vertical" id="btn-radio-vertical-2" autocomplete="off" />
                                        <label for="btn-radio-vertical-2" class="btn">Button 2</label>
                                        <input type="radio" class="btn-check" name="btn-radio-vertical" id="btn-radio-vertical-3" autocomplete="off" />
                                        <label for="btn-radio-vertical-3" class="btn">Button 3</label>
                                        <input type="radio" class="btn-check" name="btn-radio-vertical" id="btn-radio-vertical-4" autocomplete="off" />
                                        <label for="btn-radio-vertical-4" class="btn">Button 4</label>
                                        <input type="radio" class="btn-check" name="btn-radio-vertical" id="btn-radio-vertical-5" autocomplete="off" />
                                        <label for="btn-radio-vertical-5" class="btn">Button 5</label>
                                      </div>
                                    </fieldset>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="mb-3">
                                    <div class="form-label">Vertical with dropdown</div>

                                    <fieldset>
                                      <legend class="visually-hidden">Vertical with dropdown</legend>
                                      <div class="btn-group-vertical w-100" role="group">
                                        <input type="radio" class="btn-check" name="btn-radio-vertical-dropdown" id="btn-radio-vertical-dropdown-1" autocomplete="off" checked />
                                        <label for="btn-radio-vertical-dropdown-1" class="btn">Button 1</label>
                                        <input type="radio" class="btn-check" name="btn-radio-vertical-dropdown" id="btn-radio-vertical-dropdown-2" autocomplete="off" />
                                        <label for="btn-radio-vertical-dropdown-2" class="btn">Button 2</label>
                                        <input type="radio" class="btn-check" name="btn-radio-vertical-dropdown" id="btn-radio-vertical-dropdown-3" autocomplete="off" />
                                        <label for="btn-radio-vertical-dropdown-3" class="btn">Button 3</label>
                                        <input type="radio" class="btn-check" name="btn-radio-vertical-dropdown" id="btn-radio-vertical-dropdown-4" autocomplete="off" />
                                        <label for="btn-radio-vertical-dropdown-4" class="btn">Button 4</label>
                                        <div class="btn-group" role="group">
                                          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other</button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"> Action </a>
                                            <a class="dropdown-item" href="#"> Another action </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"> Option 4 </a>
                                            <a class="dropdown-item" href="#"> Option 5 </a>
                                            <a class="dropdown-item" href="#"> Option 6 </a>
                                          </div>
                                        </div>
                                      </div>
                                    </fieldset>
                                  </div>
                                </div>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Toolbar</div>

                                <fieldset>
                                  <legend class="visually-hidden">Toolbar</legend>
                                  <div class="btn-group w-100" role="group">
                                    <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-1" autocomplete="off" checked />
                                    <label for="btn-radio-toolbar-1" class="btn btn-icon"
                                      ><!-- Download SVG icon from http://tabler.io/icons/icon/bold -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6l0 -7" />
                                        <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" /></svg
                                    ></label>
                                    <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-2" autocomplete="off" />
                                    <label for="btn-radio-toolbar-2" class="btn btn-icon"
                                      ><!-- Download SVG icon from http://tabler.io/icons/icon/italic -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M11 5l6 0" />
                                        <path d="M7 19l6 0" />
                                        <path d="M14 5l-4 14" /></svg
                                    ></label>
                                    <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-3" autocomplete="off" />
                                    <label for="btn-radio-toolbar-3" class="btn btn-icon"
                                      ><!-- Download SVG icon from http://tabler.io/icons/icon/underline -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M7 5v5a5 5 0 0 0 10 0v-5" />
                                        <path d="M5 19h14" /></svg
                                    ></label>
                                    <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-4" autocomplete="off" />
                                    <label for="btn-radio-toolbar-4" class="btn btn-icon"
                                      ><!-- Download SVG icon from http://tabler.io/icons/icon/copy -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M7 9.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667l0 -8.666" />
                                        <path d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" /></svg
                                    ></label>
                                    <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-5" autocomplete="off" />
                                    <label for="btn-radio-toolbar-5" class="btn btn-icon"
                                      ><!-- Download SVG icon from http://tabler.io/icons/icon/scissors -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M3 7a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        <path d="M3 17a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        <path d="M8.6 8.6l10.4 10.4" />
                                        <path d="M8.6 15.4l10.4 -10.4" /></svg
                                    ></label>
                                    <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-6" autocomplete="off" />
                                    <label for="btn-radio-toolbar-6" class="btn btn-icon"
                                      ><!-- Download SVG icon from http://tabler.io/icons/icon/file-plus -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
                                        <path d="M12 11l0 6" />
                                        <path d="M9 14l6 0" /></svg
                                    ></label>
                                    <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-7" autocomplete="off" />
                                    <label for="btn-radio-toolbar-7" class="btn btn-icon"
                                      ><!-- Download SVG icon from http://tabler.io/icons/icon/file-minus -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
                                        <path d="M9 14l6 0" /></svg
                                    ></label>
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="row">
                            <div class="col-md-6 col-xl-12">
                              <div class="mb-3">
                                <div class="form-label">Radios</div>
                                <fieldset>
                                  <legend class="visually-hidden">Radios</legend>
                                  <label class="form-check">
                                    <input class="form-check-input" type="radio" name="radios" checked />
                                    <span class="form-check-label">Option 1</span>
                                  </label>
                                  <label class="form-check">
                                    <input class="form-check-input" type="radio" name="radios" />
                                    <span class="form-check-label">Option 2</span>
                                  </label>
                                  <label class="form-check">
                                    <input class="form-check-input" type="radio" disabled />
                                    <span class="form-check-label">Option 3</span>
                                  </label>
                                  <label class="form-check">
                                    <input class="form-check-input" type="radio" checked disabled />
                                    <span class="form-check-label">Option 4</span>
                                  </label>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Inline Radios</div>
                                <fieldset>
                                  <legend class="visually-hidden">Inline Radios</legend>
                                  <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="radios-inline" checked />
                                    <span class="form-check-label">Option 1</span>
                                  </label>
                                  <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="radios-inline" />
                                    <span class="form-check-label">Option 2</span>
                                  </label>
                                  <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="radios-inline" disabled />
                                    <span class="form-check-label">Option 3</span>
                                  </label>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Checkboxes</div>
                                <fieldset>
                                  <legend class="visually-hidden">Checkboxes</legend>
                                  <label class="form-check">
                                    <input class="form-check-input" type="checkbox" />
                                    <span class="form-check-label">Checkbox input</span>
                                  </label>
                                  <label class="form-check">
                                    <input class="form-check-input" type="checkbox" disabled />
                                    <span class="form-check-label">Disabled checkbox input</span>
                                  </label>
                                  <label class="form-check">
                                    <input class="form-check-input" type="checkbox" checked />
                                    <span class="form-check-label">Checked checkbox input</span>
                                  </label>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Inline Checkboxes</div>
                                <fieldset>
                                  <legend class="visually-hidden">Inline Checkboxes</legend>
                                  <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" />
                                    <span class="form-check-label">Option 1</span>
                                  </label>
                                  <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" disabled />
                                    <span class="form-check-label">Option 2</span>
                                  </label>
                                  <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" checked />
                                    <span class="form-check-label">Option 3</span>
                                  </label>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Checkboxes with description</div>

                                <fieldset>
                                  <legend class="visually-hidden">Checkboxes with description</legend>
                                  <label class="form-check">
                                    <input class="form-check-input" type="checkbox" />
                                    <span class="form-check-label"> Default checkbox </span>
                                    <span class="form-check-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                  </label>
                                  <label class="form-check">
                                    <input class="form-check-input" type="checkbox" />
                                    <span class="form-check-label"> Longer checkbox item that wraps on to two separate lines </span>
                                    <span class="form-check-description"> Ab alias aut, consequuntur cumque esse eveniet incidunt laborum minus molestiae. </span>
                                  </label>
                                  <label class="form-check">
                                    <input class="form-check-input" type="checkbox" />
                                    <span class="form-check-label"> Default checkbox without description </span>
                                  </label>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Toggle switches</div>
                                <fieldset>
                                  <legend class="visually-hidden">Toggle switches</legend>
                                  <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" checked />
                                    <span class="form-check-label">Option 1</span>
                                  </label>
                                  <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" />
                                    <span class="form-check-label">Option 2</span>
                                  </label>
                                  <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" />
                                    <span class="form-check-label">Option 3</span>
                                  </label>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Single switch</div>
                                <label class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" />
                                  <span class="form-check-label">I agree with terms and conditions</span>
                                </label>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Notification</div>

                                <fieldset>
                                  <legend class="visually-hidden">Notification</legend>
                                  <div class="divide-y">
                                    <div>
                                      <label class="row">
                                        <span class="col">Push Notifications</span>
                                        <span class="col-auto">
                                          <span class="form-check form-check-single form-switch">
                                            <input class="form-check-input" type="checkbox" checked />
                                          </span>
                                        </span>
                                      </label>
                                    </div>
                                    <div>
                                      <label class="row">
                                        <span class="col">SMS Notifications</span>
                                        <span class="col-auto">
                                          <span class="form-check form-check-single form-switch">
                                            <input class="form-check-input" type="checkbox" />
                                          </span>
                                        </span>
                                      </label>
                                    </div>
                                    <div>
                                      <label class="row">
                                        <span class="col">Email Notifications</span>
                                        <span class="col-auto">
                                          <span class="form-check form-check-single form-switch">
                                            <input class="form-check-input" type="checkbox" checked />
                                          </span>
                                        </span>
                                      </label>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Custom File Input</div>
                                <input type="file" class="form-control" />
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Date of birth</div>

                                <div class="row g-2">
                                  <div class="col-5">
                                    <select name="user[month]" class="form-select" aria-label="Month">
                                      <option value="">Month</option>
                                      <option value="1">January</option>
                                      <option value="2">February</option>
                                      <option value="3">March</option>
                                      <option value="4">April</option>
                                      <option value="5">May</option>
                                      <option selected="selected" value="6">June</option>
                                      <option value="7">July</option>
                                      <option value="8">August</option>
                                      <option value="9">September</option>
                                      <option value="10">October</option>
                                      <option value="11">November</option>
                                      <option value="12">December</option>
                                    </select>
                                  </div>
                                  <div class="col-3">
                                    <select name="user[day]" class="form-select" aria-label="Day">
                                      <option value="">Day</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                      <option value="13">13</option>
                                      <option value="14">14</option>
                                      <option value="15">15</option>
                                      <option value="16">16</option>
                                      <option value="17">17</option>
                                      <option value="18">18</option>
                                      <option value="19">19</option>
                                      <option value="20" selected>20</option>
                                      <option value="21">21</option>
                                      <option value="22">22</option>
                                      <option value="23">23</option>
                                      <option value="24">24</option>
                                      <option value="25">25</option>
                                      <option value="26">26</option>
                                      <option value="27">27</option>
                                      <option value="28">28</option>
                                      <option value="29">29</option>
                                      <option value="30">30</option>
                                      <option value="31">31</option>
                                    </select>
                                  </div>
                                  <div class="col-4">
                                    <select name="user[year]" class="form-select" aria-label="Year">
                                      <option value="">Year</option>
                                      <option value="2014">2014</option>
                                      <option value="2013">2013</option>
                                      <option value="2012">2012</option>
                                      <option value="2011">2011</option>
                                      <option value="2010">2010</option>
                                      <option value="2009">2009</option>
                                      <option value="2008">2008</option>
                                      <option value="2007">2007</option>
                                      <option value="2006">2006</option>
                                      <option value="2005">2005</option>
                                      <option value="2004">2004</option>
                                      <option value="2003">2003</option>
                                      <option value="2002">2002</option>
                                      <option value="2001">2001</option>
                                      <option value="2000">2000</option>
                                      <option value="1999">1999</option>
                                      <option value="1998">1998</option>
                                      <option value="1997">1997</option>
                                      <option value="1996">1996</option>
                                      <option value="1995">1995</option>
                                      <option value="1994">1994</option>
                                      <option value="1993">1993</option>
                                      <option value="1992">1992</option>
                                      <option value="1991">1991</option>
                                      <option value="1990">1990</option>
                                      <option value="1989" selected>1989</option>
                                      <option value="1988">1988</option>
                                      <option value="1987">1987</option>
                                      <option value="1986">1986</option>
                                      <option value="1985">1985</option>
                                      <option value="1984">1984</option>
                                      <option value="1983">1983</option>
                                      <option value="1982">1982</option>
                                      <option value="1981">1981</option>
                                      <option value="1980">1980</option>
                                      <option value="1979">1979</option>
                                      <option value="1978">1978</option>
                                      <option value="1977">1977</option>
                                      <option value="1976">1976</option>
                                      <option value="1975">1975</option>
                                      <option value="1974">1974</option>
                                      <option value="1973">1973</option>
                                      <option value="1972">1972</option>
                                      <option value="1971">1971</option>
                                      <option value="1970">1970</option>
                                      <option value="1969">1969</option>
                                      <option value="1968">1968</option>
                                      <option value="1967">1967</option>
                                      <option value="1966">1966</option>
                                      <option value="1965">1965</option>
                                      <option value="1964">1964</option>
                                      <option value="1963">1963</option>
                                      <option value="1962">1962</option>
                                      <option value="1961">1961</option>
                                      <option value="1960">1960</option>
                                      <option value="1959">1959</option>
                                      <option value="1958">1958</option>
                                      <option value="1957">1957</option>
                                      <option value="1956">1956</option>
                                      <option value="1955">1955</option>
                                      <option value="1954">1954</option>
                                      <option value="1953">1953</option>
                                      <option value="1952">1952</option>
                                      <option value="1951">1951</option>
                                      <option value="1950">1950</option>
                                      <option value="1949">1949</option>
                                      <option value="1948">1948</option>
                                      <option value="1947">1947</option>
                                      <option value="1946">1946</option>
                                      <option value="1945">1945</option>
                                      <option value="1944">1944</option>
                                      <option value="1943">1943</option>
                                      <option value="1942">1942</option>
                                      <option value="1941">1941</option>
                                      <option value="1940">1940</option>
                                      <option value="1939">1939</option>
                                      <option value="1938">1938</option>
                                      <option value="1937">1937</option>
                                      <option value="1936">1936</option>
                                      <option value="1935">1935</option>
                                      <option value="1934">1934</option>
                                      <option value="1933">1933</option>
                                      <option value="1932">1932</option>
                                      <option value="1931">1931</option>
                                      <option value="1930">1930</option>
                                      <option value="1929">1929</option>
                                      <option value="1928">1928</option>
                                      <option value="1927">1927</option>
                                      <option value="1926">1926</option>
                                      <option value="1925">1925</option>
                                      <option value="1924">1924</option>
                                      <option value="1923">1923</option>
                                      <option value="1922">1922</option>
                                      <option value="1921">1921</option>
                                      <option value="1920">1920</option>
                                      <option value="1919">1919</option>
                                      <option value="1918">1918</option>
                                      <option value="1917">1917</option>
                                      <option value="1916">1916</option>
                                      <option value="1915">1915</option>
                                      <option value="1914">1914</option>
                                      <option value="1913">1913</option>
                                      <option value="1912">1912</option>
                                      <option value="1911">1911</option>
                                      <option value="1910">1910</option>
                                      <option value="1909">1909</option>
                                      <option value="1908">1908</option>
                                      <option value="1907">1907</option>
                                      <option value="1906">1906</option>
                                      <option value="1905">1905</option>
                                      <option value="1904">1904</option>
                                      <option value="1903">1903</option>
                                      <option value="1902">1902</option>
                                      <option value="1901">1901</option>
                                      <option value="1900">1900</option>
                                      <option value="1899">1899</option>
                                      <option value="1898">1898</option>
                                      <option value="1897">1897</option>
                                    </select>
                                  </div>
                                </div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe5-input-mask-date"> Text mask </label>

                                <input type="text" name="input-mask" id="fe5-input-mask-date" class="form-control" data-mask="00/00/0000" data-mask-visible="true" placeholder="00/00/0000" autocomplete="off" />
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="fe5-input-mask-tel"> Telephone mask </label>

                                <input type="text" name="input-mask" id="fe5-input-mask-tel" class="form-control" data-mask="(00) 0000-0000" data-mask-visible="true" placeholder="(00) 0000-0000" autocomplete="off" />
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe5-password-strength"> Password strength </label>

                                <input type="password" id="fe5-password-strength" class="form-control" placeholder="Type a password…" autocomplete="new-password" />
                                <div class="strength" data-bs-strength aria-label="Password strength"><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span></div>
                                <div class="strength-text"></div>

                                <div id="fe5-password-strength-hint" class="form-text">The meter rates the password as the user types. It is a hint, not a validation.</div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe5-clipboard-key"> API key </label>

                                <div class="input-group">
                                  <input type="text" id="fe5-clipboard-key" class="form-control" value="tblr_live_8f2c41d0a7" readonly />
                                  <button type="button" class="btn" data-bs-toggle="clipboard" data-bs-target="#fe5-clipboard-key">
                                    <span class="clipboard-label">Copy</span>
                                    <span class="clipboard-feedback">Copied</span>
                                  </button>
                                </div>

                                <div id="fe5-clipboard-key-hint" class="form-text">The copy button reads the value of the field next to it.</div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="fe5-textarea-autosize"> Autosize textarea </label>

                                <textarea class="form-control" id="fe5-textarea-autosize" data-bs-toggle="autosize" placeholder="Type something…"></textarea>
                              </div>
                            </div>
                            <div class="col-md-6 col-xl-12">
                              <div class="mb-3">
                                <label class="form-label" for="fe6-datalist"> Datalist example </label>

                                <input class="form-control" id="fe6-datalist" list="datalistOptions" placeholder="Type to search..." />
                                <datalist id="datalistOptions">
                                  <option value="Abkhazia"></option>
                                  <option value="Afghanistan"></option>
                                  <option value="African Union"></option>
                                  <option value="Åland Islands"></option>
                                  <option value="Albania"></option>
                                  <option value="Algeria"></option>
                                  <option value="American Samoa"></option>
                                  <option value="Andorra"></option>
                                  <option value="Angola"></option>
                                  <option value="Anguilla"></option>
                                </datalist>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Range input</div>

                                <input type="range" class="form-range mb-2" aria-label="Default range" value="40" min="0" max="100" step="10" />

                                <div class="form-range mb-2" id="range-simple"></div>

                                <div class="form-range mb-2" id="range-connect"></div>

                                <div class="form-range mb-2 text-green" id="range-color"></div>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Datepicker</div>

                                <input type="text" class="form-control mb-2" id="datepicker-default" value="2020-06-20" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                                <div class="input-icon mb-2">
                                  <input type="text" class="form-control" id="datepicker-icon" value="2020-06-20" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                                  <span class="input-icon-addon"
                                    ><!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                      <path d="M16 3v4" />
                                      <path d="M8 3v4" />
                                      <path d="M4 11h16" />
                                      <path d="M11 15h1" />
                                      <path d="M12 15v3" /></svg
                                  ></span>
                                </div>
                                <div class="input-icon">
                                  <span class="input-icon-addon"
                                    ><!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                      <path d="M16 3v4" />
                                      <path d="M8 3v4" />
                                      <path d="M4 11h16" />
                                      <path d="M11 15h1" />
                                      <path d="M12 15v3" /></svg
                                  ></span>
                                  <input type="text" class="form-control" id="datepicker-icon-prepend" value="2020-06-20" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                                </div>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Inline datepicker</div>

                                <div id="datepicker-inline" data-bs-toggle="datepicker" data-bs-inline="true"></div>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Progress</div>

                                <div class="progress mb-2">
                                  <div class="progress-bar" style="width: 38%" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" aria-label="38% Complete">
                                    <span class="visually-hidden">38% Complete</span>
                                  </div>
                                </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-indeterminate bg-green"></div>
                                </div>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Form buttons</div>

                                <div class="row">
                                  <div class="col">
                                    <button type="button" class="btn w-100">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/brand-github -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path
                                          d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"
                                        /></svg
                                      >Login with Github
                                    </button>
                                  </div>
                                  <div class="col">
                                    <button type="button" class="btn w-100">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/brand-x -->
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M4 4l11.733 16h4.267l-11.733 -16l-4.267 0" />
                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg
                                      >Login with X
                                    </button>
                                  </div>
                                </div>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="select-fe6-tags"> Tags input </label>

                                <select class="form-select" data-placeholder="Select tags" aria-label="Tags input" id="select-fe6-tags" multiple>
                                  <option value="HTML" selected>HTML</option>
                                  <option value="JavaScript" selected>JavaScript</option>
                                  <option value="CSS">CSS</option>
                                  <option value="jQuery">jQuery</option>
                                  <option value="Bootstrap" selected>Bootstrap</option>
                                  <option value="Ruby">Ruby</option>
                                  <option value="Python">Python</option>
                                </select>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="select-fe6-advanced-select"> Advanced select </label>

                                <select class="form-select" aria-label="Advanced select" id="select-fe6-advanced-select">
                                  <option value="1">Chuck Tesla</option>
                                  <option value="2">Elon Musk</option>
                                  <option value="3" selected>Paweł Kuna</option>
                                  <option value="4">Nikola Tesla</option>
                                </select>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="select-fe6-select-optgroup"> Advanced select with optgroup </label>

                                <select class="form-select" aria-label="Advanced select with optgroup" id="select-fe6-select-optgroup">
                                  <optgroup label="Tags">
                                    <option value="HTML">HTML</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="CSS">CSS</option>
                                    <option value="jQuery">jQuery</option>
                                    <option value="Bootstrap">Bootstrap</option>
                                    <option value="Ruby">Ruby</option>
                                    <option value="Python">Python</option>
                                  </optgroup>
                                  <optgroup label="People">
                                    <option value="Chuck Tesla">Chuck Tesla</option>
                                    <option value="Elon Musk">Elon Musk</option>
                                    <option value="Paweł Kuna">Paweł Kuna</option>
                                    <option value="Nikola Tesla">Nikola Tesla</option>
                                  </optgroup>
                                </select>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="select-fe6-select-avatars"> Select with avatars </label>

                                <select class="form-select" aria-label="Select with avatars" id="select-fe6-select-avatars">
                                  <option value="1" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/000m.jpg)"></span>'>Paweł Kuna</option>
                                  <option value="2" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/052f.jpg)"></span>'>Jeffie Lewzey</option>
                                  <option value="3" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/002m.jpg)"></span>'>Mallory Hulme</option>
                                  <option value="4" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/003m.jpg)"></span>' selected>Dunn Slane</option>
                                  <option value="5" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/000f.jpg)"></span>'>Emmy Levet</option>
                                  <option value="6" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/001f.jpg)"></span>'>Maryjo Lebarree</option>
                                  <option value="7" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/004m.jpg)"></span>'>Egan Poetz</option>
                                  <option value="8" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/002f.jpg)"></span>'>Kellie Skingley</option>
                                  <option value="9" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/003f.jpg)"></span>'>Christabel Charlwood</option>
                                  <option value="10" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/063m.jpg)"></span>'>Haskel Shelper</option>
                                  <option value="11" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/006m.jpg)"></span>'>Lorry Mion</option>
                                  <option value="12" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/004f.jpg)"></span>'>Leesa Beaty</option>
                                  <option value="13" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/007m.jpg)"></span>'>Perren Keemar</option>
                                  <option value="14" data-custom-properties='<span class="avatar avatar-xs">SA</span>'>Sunny Airey</option>
                                  <option value="15" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/009m.jpg)"></span>'>Geoffry Flaunders</option>
                                  <option value="16" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/010m.jpg)"></span>'>Thatcher Keel</option>
                                  <option value="17" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/005f.jpg)"></span>'>Dyann Escala</option>
                                  <option value="18" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/006f.jpg)"></span>'>Avivah Mugleston</option>
                                  <option value="19" data-custom-properties='<span class="avatar avatar-xs">AA</span>'>Arlie Armstead</option>
                                  <option value="20" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/008f.jpg)"></span>'>Tessie Curzon</option>
                                </select>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="select-fe6-select-flags"> Select with flags </label>

                                <select class="form-select" aria-label="Select with flags" id="select-fe6-select-flags">
                                  <option value="pl" data-custom-properties='<span class="flag flag-xs flag-country-pl"></span>' selected>Poland</option>
                                  <option value="de" data-custom-properties='<span class="flag flag-xs flag-country-de"></span>'>Germany</option>
                                  <option value="cz" data-custom-properties='<span class="flag flag-xs flag-country-cz"></span>'>Czech Republic</option>
                                  <option value="br" data-custom-properties='<span class="flag flag-xs flag-country-br"></span>'>Brazil</option>
                                </select>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="select-fe6-select-labels"> Select with labels </label>

                                <select class="form-select" aria-label="Select with labels" id="select-fe6-select-labels">
                                  <option value="copy" data-custom-properties='<span class="badge bg-primary-lt">cmd + C</span>'>Copy</option>
                                  <option value="paste" data-custom-properties='<span class="badge bg-primary-lt">cmd + V</span>' selected>Paste</option>
                                  <option value="cut" data-custom-properties='<span class="badge bg-primary-lt">cmd + X</span>'>Cut</option>
                                </select>
                              </div>

                              <div class="mb-3">
                                <label class="form-label" for="select-fe6-select-priority"> Select with priority </label>

                                <select class="form-select" aria-label="Select with priority" id="select-fe6-select-priority">
                                  <option value="urgent" data-custom-properties='<span class="signal signal-orange" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar active"></span></span>'>Urgent</option>
                                  <option value="normal" data-custom-properties='<span class="signal signal-blue" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>' selected>Normal</option>
                                  <option value="low" data-custom-properties='<span class="signal signal-green" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar"></span><span class="signal-bar"></span></span>'>Low</option>
                                  <option value="none" data-custom-properties='<span class="signal" aria-hidden="true"><span class="signal-bar"></span><span class="signal-bar"></span><span class="signal-bar"></span></span>'>No priority</option>
                                </select>
                              </div>

                              <div class="mb-3">
                                <div class="form-label">Advanced select with validation state</div>

                                <select class="form-select mb-3 is-valid" aria-label="Country (valid)" id="select-countries-valid">
                                  <option value="pl" selected>Poland</option>
                                  <option value="de">Germany</option>
                                  <option value="cz">Czech Republic</option>
                                  <option value="br">Brazil</option>
                                </select>

                                <select class="form-select is-invalid" aria-label="Country (invalid)" id="select-countries-invalid">
                                  <option value="pl" selected>Poland</option>
                                  <option value="de">Germany</option>
                                  <option value="cz">Czech Republic</option>
                                  <option value="br">Brazil</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <div class="d-flex">
                        <a href="#" class="btn btn-link">Cancel</a>
                        <button type="submit" class="btn btn-primary ms-auto">Send data</button>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <h2 class="card-title">Project ID</h2>
                      <p class="card-subtitle">Used when interacting with the API.</p>
                      <div class="input-icon">
                        <input type="text" value="prj_5ae74426fe935327a8fa178b07d84ad9" class="form-control" placeholder="Search…" readonly />
                        <span class="input-icon-addon"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/files -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2" />
                            <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" /></svg
                        ></span>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="row align-items-center">
                        <div class="col">Learn more about <a href="#">Project ID</a></div>
                        <div class="col-auto"><button type="button" class="btn btn-primary">Save</button></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Node.js Version</h2>
                      <p class="card-subtitle">The version of Node.js that is used in the Build Step and for Serverless Functions. A new Deployment is required for your changes to take effect.</p>
                      <select class="form-select" aria-label="Node.js version">
                        <option>14.x</option>
                        <option>12.x</option>
                      </select>
                    </div>
                    <div class="card-footer">Learn more about <a href="#">Node.js Version</a></div>
                  </div>
                </div>

                <div class="col-12 col-lg-4">
                  <form class="card h-100">
                    <div class="card-header">
                      <h2 class="card-title">Basic form</h2>
                    </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label required" for="form-layout-email">Email address</label>
                        <div>
                          <input type="email" id="form-layout-email" class="form-control" aria-describedby="form-layout-email-hint" aria-required="true" placeholder="Enter email" autocomplete="email" />
                          <div id="form-layout-email-hint" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label required" for="form-layout-password">Password</label>
                        <div>
                          <input type="password" id="form-layout-password" class="form-control" aria-describedby="form-layout-password-hint" aria-required="true" placeholder="Password" autocomplete="new-password" />
                          <div id="form-layout-password-hint" class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="form-layout-select">Select</label>
                        <div>
                          <select class="form-select" id="form-layout-select">
                            <option>Option 1</option>
                            <optgroup label="Optgroup 1">
                              <option>Option 1</option>
                              <option>Option 2</option>
                            </optgroup>
                            <option>Option 2</option>
                            <optgroup label="Optgroup 2">
                              <option>Option 1</option>
                              <option>Option 2</option>
                            </optgroup>
                            <optgroup label="Optgroup 3">
                              <option>Option 1</option>
                              <option>Option 2</option>
                            </optgroup>
                            <option>Option 3</option>
                            <option>Option 4</option>
                          </select>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Checkboxes</label>
                        <fieldset>
                          <legend class="visually-hidden">Checkboxes</legend>
                          <label class="form-check">
                            <input class="form-check-input" type="checkbox" checked />
                            <span class="form-check-label">Option 1</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="checkbox" />
                            <span class="form-check-label">Option 2</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="checkbox" disabled />
                            <span class="form-check-label">Option 3</span>
                          </label>
                        </fieldset>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="col-lg-8">
                  <div class="row row-cards">
                    <div class="col-12 col-lg-6">
                      <div class="card">
                        <div class="card-header">
                          <h2 class="card-title">Input mask</h2>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> Date </span>
                              <input type="text" name="input-mask" class="form-control" data-mask="00/00/0000" data-mask-visible="true" placeholder="00/00/0000" autocomplete="off" />
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> Hour </span>
                              <input type="text" name="input-mask" class="form-control" data-mask="00:00:00" data-mask-visible="true" placeholder="00:00:00" autocomplete="off" />
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> Date &amp; Hour </span>
                              <input type="text" name="input-mask" class="form-control" data-mask="00/00/0000 00:00:00" data-mask-visible="true" placeholder="00/00/0000 00:00:00" autocomplete="off" />
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> ZIP Code </span>
                              <input type="text" name="input-mask" class="form-control" data-mask="00000-000" data-mask-visible="true" placeholder="00000-000" autocomplete="off" />
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> Money </span>
                              <input type="text" name="input-mask" class="form-control" data-mask="000.000.000.000.000,00" data-mask-visible="true" placeholder="000.000.000.000.000,00" data-mask-reverse="true" autocomplete="off" />
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> Telephone </span>
                              <input type="text" name="input-mask" class="form-control" data-mask="0000-0000" data-mask-visible="true" placeholder="0000-0000" autocomplete="off" />
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> Telephone with Code Area </span>
                              <input type="text" name="input-mask" class="form-control" data-mask="(00) 0000-0000" data-mask-visible="true" placeholder="(00) 0000-0000" autocomplete="off" />
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> IP Address </span>
                              <input type="text" name="input-mask" class="form-control" data-mask="099.099.099.099" data-mask-visible="true" placeholder="000.000.000.000" autocomplete="off" />
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="card">
                        <div class="card-header">
                          <h2 class="card-title">OTP input</h2>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label" for="otp-basic"> Basic </label>

                            <div class="otp" data-bs-toggle="otp" data-bs-length="6">
                              <input type="text" id="otp-basic" maxlength="6" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Sizes</div>

                            <div class="space-y">
                              <div class="otp otp-sm" data-bs-toggle="otp" data-bs-length="4">
                                <input type="text" id="otp-sm" maxlength="4" aria-label="Sizes small" />
                              </div>
                              <div class="otp otp-lg" data-bs-toggle="otp" data-bs-length="4">
                                <input type="text" id="otp-lg" maxlength="4" aria-label="Sizes large" />
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="otp-groups"> Groups &amp; separator </label>

                            <div class="otp" data-bs-toggle="otp" data-bs-length="6" data-bs-groups="[3,3]">
                              <input type="text" id="otp-groups" maxlength="6" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="otp-alphanumeric"> Alphanumeric &amp; masked </label>

                            <div class="otp" data-bs-toggle="otp" data-bs-length="6" data-bs-type="alphanumeric" data-bs-mask="true">
                              <input type="text" id="otp-alphanumeric" maxlength="6" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="otp-connected"> Connected </label>

                            <div class="otp otp-connected" data-bs-toggle="otp" data-bs-length="6">
                              <input type="text" id="otp-connected" maxlength="6" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="otp-disabled"> Disabled </label>

                            <div class="otp" data-bs-toggle="otp" data-bs-length="6">
                              <input type="text" id="otp-disabled" value="123456" maxlength="6" disabled />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="card">
                        <div class="card-header">
                          <h2 class="card-title">Number input</h2>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label" for="number-input-basic"> Quantity </label>

                            <input type="text" class="form-control" data-bs-toggle="number-input" id="number-input-basic" value="1" min="1" max="99" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="number-input-decimal"> Step of 0.25 </label>

                            <input type="text" class="form-control" data-bs-toggle="number-input" id="number-input-decimal" value="1.5" min="0" max="10" step="0.25" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="number-input-unbounded"> Without bounds </label>

                            <input type="text" class="form-control" data-bs-toggle="number-input" id="number-input-unbounded" value="0" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="number-input-number"> Native number input </label>

                            <input type="number" class="form-control" data-bs-toggle="number-input" id="number-input-number" value="5" min="0" max="10" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="number-input-disabled"> Disabled </label>

                            <input type="text" class="form-control" data-bs-toggle="number-input" id="number-input-disabled" value="3" disabled />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6">
                      <form class="card h-100">
                        <div class="card-header">
                          <h2 class="card-title">My Profile</h2>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <div class="row">
                              <div class="col-auto"><span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-md"></span></div>
                              <div class="col">
                                <div class="mb-3">
                                  <label class="d-block">
                                    <span class="form-label"> Email-Address </span>

                                    <input class="form-control" placeholder="your-email@domain.com" />
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> Bio </span>

                              <textarea class="form-control" rows="5">Big belly rude boy, million dollar hustler. Unemployed.</textarea>
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> Email-Address </span>

                              <input class="form-control" placeholder="your-email@domain.com" />
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="d-block">
                              <span class="form-label"> Password </span>

                              <input type="password" class="form-control" value="password" autocomplete="current-password" />
                            </label>
                          </div>
                        </div>
                        <div class="card-footer text-end">
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="row row-cards">
                    <div class="col-12 col-lg-6">
                      <form class="card">
                        <div class="card-body">
                          <h2 class="card-title">Edit Profile</h2>
                          <div class="row row-cards">
                            <div class="col-md-5">
                              <div class="mb-3">
                                <label class="d-block">
                                  <span class="form-label"> Company </span>
                                  <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc." />
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="mb-3">
                                <label class="d-block">
                                  <span class="form-label"> Username </span>
                                  <input type="text" class="form-control" placeholder="Username" value="michael23" />
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                              <div class="mb-3">
                                <label class="d-block">
                                  <span class="form-label"> Email address </span>
                                  <input type="email" class="form-control" placeholder="Email" />
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                              <div class="mb-3">
                                <label class="d-block">
                                  <span class="form-label"> First Name </span>
                                  <input type="text" class="form-control" placeholder="Company" value="Chet" />
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                              <div class="mb-3">
                                <label class="d-block">
                                  <span class="form-label"> Last Name </span>
                                  <input type="text" class="form-control" placeholder="Last Name" value="Faker" />
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-3">
                                <label class="d-block">
                                  <span class="form-label"> Address </span>
                                  <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia" />
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                              <div class="mb-3">
                                <label class="d-block">
                                  <span class="form-label"> City </span>
                                  <input type="text" class="form-control" placeholder="City" value="Melbourne" />
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="mb-3">
                                <label class="d-block">
                                  <span class="form-label"> Postal Code </span>
                                  <input type="text" class="form-control" placeholder="ZIP Code" />
                                </label>
                              </div>
                            </div>
                            <div class="col-md-5">
                              <div class="mb-3">
                                <label class="d-block">
                                  <span class="form-label"> Country </span>
                                  <select class="form-control form-select" aria-label="Country">
                                    <option value="">Germany</option>
                                  </select>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-3 mb-0">
                                <label class="d-block">
                                  <span class="form-label"> About Me </span>

                                  <textarea rows="5" class="form-control" placeholder="Here can be your description">Oh so, your weak rhyme You doubt I'll bother, reading into it I'll probably won't, left to my own devices But that's the difference in our opinions.</textarea>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer text-end">
                          <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                      </form>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="card h-100">
                        <div class="card-header">
                          <h2 class="card-title">HTTP Request</h2>
                        </div>
                        <div class="card-body">
                          <div class="row row-cards">
                            <div class="mb-3 col-sm-4 col-md-2">
                              <label class="d-block">
                                <span class="form-label required">
                                  Method
                                  <span class="visually-hidden"> (required)</span>
                                </span>

                                <select class="form-select" aria-label="Method">
                                  <option value="GET">GET</option>
                                  <option value="POST">POST</option>
                                  <option value="PUT">PUT</option>
                                  <option value="HEAD">HEAD</option>
                                  <option value="DELETE">DELETE</option>
                                  <option value="PATCH">PATCH</option>
                                </select>
                              </label>
                            </div>
                            <div class="mb-3 col-sm-8 col-md-10">
                              <label class="d-block">
                                <span class="form-label required">
                                  URL
                                  <span class="visually-hidden"> (required)</span>
                                </span>

                                <input name="url" type="text" class="form-control" value="https://content.googleapis.com/discovery/v1/apis/surveys/v2/rest" />
                              </label>
                            </div>
                          </div>
                          <div class="form-label">Assertions</div>
                          <div class="table-responsive">
                            <table class="table mb-0">
                              <thead>
                                <tr>
                                  <th>Source</th>
                                  <th>Property</th>
                                  <th>Comparison</th>
                                  <th>Target</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <select class="form-select" aria-label="Source">
                                      <option value="STATUS_CODE" selected>Status code</option>
                                      <option value="JSON_BODY">JSON body</option>
                                      <option value="HEADERS">Headers</option>
                                      <option value="TEXT_BODY">Text body</option>
                                      <option value="RESPONSE_TIME">Response time</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" aria-label="Property" />
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Comparison">
                                      <option value="EQUALS" selected>Equals</option>
                                      <option value="NOT_EQUALS">Not equals</option>
                                      <option value="HAS_KEY">Has key</option>
                                      <option value="NOT_HAS_KEY">Not has key</option>
                                      <option value="HAS_VALUE">Has value</option>
                                      <option value="NOT_HAS_VALUE">Not has value</option>
                                      <option value="IS_EMPTY">Is empty</option>
                                      <option value="NOT_EMPTY">Is not empty</option>
                                      <option value="GREATER_THAN">Greater than</option>
                                      <option value="LESS_THAN">Less than</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" aria-label="Target" value="200" />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-select" aria-label="Source">
                                      <option value="STATUS_CODE">Status code</option>
                                      <option value="JSON_BODY" selected>JSON body</option>
                                      <option value="HEADERS">Headers</option>
                                      <option value="TEXT_BODY">Text body</option>
                                      <option value="RESPONSE_TIME">Response time</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" aria-label="Property" value="parameters.alt.type" />
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Comparison">
                                      <option value="EQUALS">Equals</option>
                                      <option value="NOT_EQUALS">Not equals</option>
                                      <option value="HAS_KEY">Has key</option>
                                      <option value="NOT_HAS_KEY">Not has key</option>
                                      <option value="HAS_VALUE" selected>Has value</option>
                                      <option value="NOT_HAS_VALUE">Not has value</option>
                                      <option value="IS_EMPTY">Is empty</option>
                                      <option value="NOT_EMPTY">Is not empty</option>
                                      <option value="GREATER_THAN">Greater than</option>
                                      <option value="LESS_THAN">Less than</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" aria-label="Target" value="string" />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-select" aria-label="Source">
                                      <option value="STATUS_CODE">Status code</option>
                                      <option value="JSON_BODY">JSON body</option>
                                      <option value="HEADERS">Headers</option>
                                      <option value="TEXT_BODY">Text body</option>
                                      <option value="RESPONSE_TIME" selected>Response time</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" aria-label="Property" />
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Comparison">
                                      <option value="EQUALS">Equals</option>
                                      <option value="NOT_EQUALS">Not equals</option>
                                      <option value="HAS_KEY">Has key</option>
                                      <option value="NOT_HAS_KEY">Not has key</option>
                                      <option value="HAS_VALUE">Has value</option>
                                      <option value="NOT_HAS_VALUE">Not has value</option>
                                      <option value="IS_EMPTY">Is empty</option>
                                      <option value="NOT_EMPTY">Is not empty</option>
                                      <option value="GREATER_THAN">Greater than</option>
                                      <option value="LESS_THAN" selected>Less than</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" aria-label="Target" value="500" />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-select" aria-label="Source">
                                      <option value="STATUS_CODE">Status code</option>
                                      <option value="JSON_BODY">JSON body</option>
                                      <option value="HEADERS" selected>Headers</option>
                                      <option value="TEXT_BODY">Text body</option>
                                      <option value="RESPONSE_TIME">Response time</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" aria-label="Property" value="content-type" />
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Comparison">
                                      <option value="EQUALS" selected>Equals</option>
                                      <option value="NOT_EQUALS">Not equals</option>
                                      <option value="HAS_KEY">Has key</option>
                                      <option value="NOT_HAS_KEY">Not has key</option>
                                      <option value="HAS_VALUE">Has value</option>
                                      <option value="NOT_HAS_VALUE">Not has value</option>
                                      <option value="IS_EMPTY">Is empty</option>
                                      <option value="NOT_EMPTY">Is not empty</option>
                                      <option value="GREATER_THAN">Greater than</option>
                                      <option value="LESS_THAN">Less than</option>
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" aria-label="Target" value="application/json; charset=UTF-8" />
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="card-footer text-end">
                          <button type="submit" class="btn btn-primary">Make request</button>
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
<script src="/tabler/libs/imask/dist/imask.min.js" defer></script>
<script src="/tabler/libs/nouislider/dist/nouislider.min.js" defer></script>
<script src="/tabler/libs/vanilla-calendar-pro/index.js" defer></script>
<script src="/tabler/libs/tom-select/dist/js/tom-select.base.min.js" defer></script>
<script>
      function initSelectStates() {
        window.tabler_select ??= {}

        const renderOption = (data, escape) => {
          if (data.customProperties) {
            return `<div class="dropdown-item"><span class="dropdown-item-indicator">${data.customProperties}</span>${escape(data.text)}</div>`
          }
          return `<div>${escape(data.text)}</div>`
        }

        window.TomSelect &&
          (window.tabler_select['select-states'] = new TomSelect(document.getElementById('select-states'), {
            copyClassesToDropdown: false,
            dropdownParent: 'body',
            controlInput: '<input>',
            render: {
              item: renderOption,
              option: renderOption,
            },
          }))
      }

      document.readyState !== 'loading' ? initSelectStates() : document.addEventListener('DOMContentLoaded', initSelectStates, { once: true })
    </script>
<script>
      if (!window.__tablerPasswordToggleInit) {
        window.__tablerPasswordToggleInit = true
        document.addEventListener('click', (e) => {
          const btn = e.target.closest('[data-password-toggle]')
          if (!btn) return
          const input = document.getElementById(btn.getAttribute('data-password-toggle'))
          if (!input) return
          const showing = input.type === 'password'
          input.type = showing ? 'text' : 'password'
          const label = showing ? 'Hide password' : 'Show password'
          btn.setAttribute('aria-pressed', showing ? 'true' : 'false')
          btn.setAttribute('aria-label', label)
          btn.setAttribute('title', label)
          btn.setAttribute('data-bs-original-title', label)
          btn.querySelector('.icon-toggle-show')?.classList.toggle('d-none', showing)
          btn.querySelector('.icon-toggle-hide')?.classList.toggle('d-none', !showing)
        })
      }
    </script>
<script>
      ;(function () {
        const rangeId = 'range-simple'
        const startValue = 20
        const connectValue = [true, false]
        const step = 10
        const min = 0
        const max = 100
        const handleLabels = ['Connected range']

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
<script>
      ;(function () {
        const rangeId = 'range-connect'
        const startValue = [60, 90]
        const connectValue = [false, true, false]
        const step = 10
        const min = 0
        const max = 100
        const handleLabels = ['Price range minimum', 'Price range maximum']

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
<script>
      ;(function () {
        const rangeId = 'range-color'
        const startValue = 40
        const connectValue = [true, false]
        const step = 10
        const min = 0
        const max = 100
        const handleLabels = ['Colored range']

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
<script>
      ;(function () {
        const selectId = 'select-fe6-tags'

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
        const selectId = 'select-fe6-advanced-select'

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
        const selectId = 'select-fe6-select-optgroup'

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
        const selectId = 'select-fe6-select-avatars'

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
        const selectId = 'select-fe6-select-flags'

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
        const selectId = 'select-fe6-select-labels'

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
        const selectId = 'select-fe6-select-priority'

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
        const selectId = 'select-countries-valid'

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
        const selectId = 'select-countries-invalid'

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
@endverbatim
</x-slot:scripts>
</x-preview.page>
