<x-preview.page :title='"Dropdowns"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Dropdowns</h1>

                  <div class="text-secondary mt-1">Dropdown menus for actions, filters, and selections, always shown open here for reference.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/dropdown" target="_blank" rel="noopener" class="link-secondary">
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
              <div class="row">
                <div class="col-sm-6 col-lg-3">
                  <div class="dropdown-menu dropdown-menu-demo">
                    <span class="dropdown-header">Dropdown header</span>
                    <button type="button" class="dropdown-item">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/activity -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon"><path d="M3 12h4l3 8l4 -16l3 8h4" /></svg> Item
                      1
                    </button>
                    <button type="button" class="dropdown-item">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/edit -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" />
                        <path d="M16 5l3 3" />
                      </svg>
                      Item 2
                    </button>

                    <div class="dropdown-item">
                      <button type="button" class="text-reset border-0 bg-transparent p-0">My profile</button>
                      <label class="form-check m-0 ms-auto">
                        <input type="checkbox" class="form-check-input" />
                        Public
                      </label>
                    </div>
                    <label class="dropdown-item"><input class="form-check-input m-0 me-2" type="radio" name="dropdown-menu-all-radio" /> Radio input</label>
                    <label class="dropdown-item"><input class="form-check-input m-0 me-2" type="checkbox" /> Checkbox input</label>
                    <label class="dropdown-item form-switch"><input class="form-check-input m-0 me-2" type="checkbox" /> Checkbox input</label>

                    <div class="dropdown-divider"></div>

                    <button type="button" class="dropdown-item">Dropdown item 1</button>
                    <button type="button" class="dropdown-item">Dropdown item 2</button>
                    <button type="button" class="dropdown-item disabled" disabled>Dropdown disabled</button>
                    <button type="button" class="dropdown-item active">Dropdown active</button>

                    <div class="dropdown-divider"></div>

                    <button type="button" class="dropdown-item"><span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar avatar-xs rounded me-2"></span> Paweł Kuna</button
                    ><button type="button" class="dropdown-item"><span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar avatar-xs rounded me-2"></span> Jeffie Lewzey</button
                    ><button type="button" class="dropdown-item"><span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs rounded me-2"></span> Mallory Hulme</button>

                    <div class="dropdown-divider"></div>

                    <button type="button" class="dropdown-item">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/logout -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M9 12h12l-3 -3" />
                        <path d="M18 15l3 -3" />
                      </svg>
                      Logout
                    </button>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>

                    <div class="dropdown-divider"></div>
                    <button type="button" class="dropdown-item">Separated link</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>
                    <button type="button" class="dropdown-item active">Active action</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>

                    <button type="button" class="dropdown-item disabled" disabled>Disabled action</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <span class="dropdown-header">Dropdown header</span>
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <span class="dropdown-header">Dropdown header</span>
                    <button type="button" class="dropdown-item">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                        <path
                          d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                        />
                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                      </svg>

                      Action
                    </button>
                    <button type="button" class="dropdown-item">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/edit -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" />
                        <path d="M16 5l3 3" />
                      </svg>

                      Another action
                    </button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo dropdown-menu-arrow">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>

                    <div class="dropdown-divider"></div>
                    <button type="button" class="dropdown-item">Separated link</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>
                    <button type="button" class="dropdown-item active">Active action</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>

                    <button type="button" class="dropdown-item disabled" disabled>Disabled action</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <span class="dropdown-header">Dropdown header</span>
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                        <path
                          d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                        />
                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                      </svg>

                      Action
                    </button>
                    <button type="button" class="dropdown-item">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/edit -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" />
                        <path d="M16 5l3 3" />
                      </svg>

                      Another action
                    </button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item">
                      Action
                      <span class="badge bg-primary text-primary-fg ms-auto">12</span>
                    </button>
                    <button type="button" class="dropdown-item">
                      Another action
                      <span class="badge bg-green ms-auto"></span>
                    </button>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="dropdown-menu dropdown-menu-demo" data-bs-theme="dark">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo" data-bs-theme="dark">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>

                    <div class="dropdown-divider"></div>
                    <button type="button" class="dropdown-item">Separated link</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-demo dropdown-menu-arrow" data-bs-theme="dark">
                    <button type="button" class="dropdown-item">Action</button>
                    <button type="button" class="dropdown-item">Another action</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-demo dropdown-menu-arrow" data-bs-theme="dark">
                    <button type="button" class="dropdown-item">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                        <path
                          d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                        />
                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                      </svg>

                      Action
                    </button>
                    <button type="button" class="dropdown-item">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/edit -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" />
                        <path d="M16 5l3 3" />
                      </svg>

                      Another action
                    </button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <label class="dropdown-item"> <input class="form-check-input m-0 me-2" type="checkbox" /> Option 1 </label><label class="dropdown-item"> <input class="form-check-input m-0 me-2" type="checkbox" /> Option 2 </label
                    ><label class="dropdown-item"> <input class="form-check-input m-0 me-2" type="checkbox" /> Option 3 </label>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <label class="dropdown-item"> <input class="form-check-input m-0 me-2" type="radio" name="dropdown-menu-radio" /> Option 1 </label><label class="dropdown-item"> <input class="form-check-input m-0 me-2" type="radio" name="dropdown-menu-radio" /> Option 2 </label
                    ><label class="dropdown-item"> <input class="form-check-input m-0 me-2" type="radio" name="dropdown-menu-radio" /> Option 3 </label>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item"><span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar avatar-xs"></span> Paweł Kuna</button
                    ><button type="button" class="dropdown-item"><span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar avatar-xs"></span> Jeffie Lewzey</button
                    ><button type="button" class="dropdown-item"><span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs"></span> Mallory Hulme</button
                    ><button type="button" class="dropdown-item"><span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar avatar-xs"></span> Dunn Slane</button
                    ><button type="button" class="dropdown-item"><span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs"></span> Emmy Levet</button>
                  </div>
                  <div class="dropdown-menu dropdown-menu-demo">
                    <button type="button" class="dropdown-item"><span class="flag flag-xs flag-country-us"></span> United States</button><button type="button" class="dropdown-item"><span class="flag flag-xs flag-country-gb"></span> United Kingdom</button
                    ><button type="button" class="dropdown-item"><span class="flag flag-xs flag-country-de"></span> Germany</button><button type="button" class="dropdown-item"><span class="flag flag-xs flag-country-fr"></span> France</button
                    ><button type="button" class="dropdown-item"><span class="flag flag-xs flag-country-pl"></span> Poland</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
