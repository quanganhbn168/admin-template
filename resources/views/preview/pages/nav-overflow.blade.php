<x-preview.page :title='"Nav overflow"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Nav overflow</h1>

                  <div class="text-secondary mt-1">Nav overflow moves nav items that do not fit into a More dropdown.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/nav-overflow" target="_blank" rel="noopener" class="link-secondary">
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
                      <h2 class="card-title">Pills</h2>
                      <p class="card-subtitle">Wrap a <code>.nav</code> in <code>.nav-overflow</code> with <code>data-bs-toggle="nav-overflow"</code>.</p>
                      <div class="nav-overflow" data-bs-toggle="nav-overflow">
                        <ul class="nav nav-pills">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"> Home </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Dashboard </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Products </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Services </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Analytics </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Reports </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Settings </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Help </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Tabs</h2>
                      <p class="card-subtitle">Works with <code>.nav-tabs</code> and keeps <code>.active</code> and <code>.disabled</code> in the menu.</p>
                      <div class="nav-overflow" data-bs-toggle="nav-overflow">
                        <ul class="nav nav-tabs">
                          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Overview</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Details</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">History</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Activity</a></li>
                          <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Comments</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Attachments</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Keep items visible</h2>
                      <p class="card-subtitle">Add <code>.nav-overflow-keep</code> to items that must never move to the menu.</p>
                      <div class="nav-overflow" data-bs-toggle="nav-overflow">
                        <ul class="nav nav-underline">
                          <li class="nav-item nav-overflow-keep"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
                          <li class="nav-item nav-overflow-keep"><a class="nav-link" href="#">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With dropdowns</h2>
                      <p class="card-subtitle">A nav item with a dropdown becomes a nested dropdown in the menu.</p>
                      <div class="nav-overflow" data-bs-toggle="nav-overflow">
                        <ul class="nav nav-pills">
                          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Products</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Laptops</a>
                              <a class="dropdown-item" href="#">Phones</a>
                              <a class="dropdown-item" href="#">Tablets</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Company</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">About</a>
                              <a class="dropdown-item" href="#">Careers</a>
                              <a class="dropdown-item" href="#">Press</a>
                            </div>
                          </li>
                          <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Icon-only toggle</h2>
                      <p class="card-subtitle">Set <code>data-bs-more-text="false"</code> to show only the icon.</p>
                      <div class="nav-overflow" data-bs-toggle="nav-overflow" data-bs-more-text="false">
                        <ul class="nav nav-pills">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"> Home </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Dashboard </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Products </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Services </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Analytics </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Reports </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Settings </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"> Help </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">In a navbar</h2>
                      <p class="card-subtitle">Wrap the <code>.navbar-nav</code> of a navbar in <code>.nav-overflow</code>.</p>
                      <div class="navbar navbar-expand rounded border">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Brand</a>
                          <nav class="nav-overflow" data-bs-toggle="nav-overflow" aria-label="Demo">
                            <ul class="navbar-nav">
                              <li class="nav-item active">
                                <a class="nav-link" href="#" aria-current="page">
                                  <span class="nav-link-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                  </span>
                                  <span class="nav-link-title">Home</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="nav-link-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/chart-bar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M3 13a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -6" />
                                      <path d="M15 9a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -10" />
                                      <path d="M9 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -14" />
                                      <path d="M4 20h14" />
                                    </svg>
                                  </span>
                                  <span class="nav-link-title">Analytics</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="nav-link-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/package -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                      <path d="M12 12l8 -4.5" />
                                      <path d="M12 12l0 9" />
                                      <path d="M12 12l-8 -4.5" />
                                      <path d="M16 5.25l-8 4.5" />
                                    </svg>
                                  </span>
                                  <span class="nav-link-title">Products</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="nav-link-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/users -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                    </svg>
                                  </span>
                                  <span class="nav-link-title">Customers</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="nav-link-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/file-text -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                      <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
                                      <path d="M9 9l1 0" />
                                      <path d="M9 13l6 0" />
                                      <path d="M9 17l6 0" />
                                    </svg>
                                  </span>
                                  <span class="nav-link-title">Reports</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="nav-link-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path
                                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                                      />
                                      <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    </svg>
                                  </span>
                                  <span class="nav-link-title">Settings</span>
                                </a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                  <span class="nav-link-icon">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/help -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                      <path d="M12 17l0 .01" />
                                      <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" />
                                    </svg>
                                  </span>
                                  <span class="nav-link-title">Help</span>
                                </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Documentation</a>
                                  <a class="dropdown-item" href="#">Changelog</a>
                                  <a class="dropdown-item" href="#">Support</a>
                                </div>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Colored navbar</h2>
                      <p class="card-subtitle">The overflow menu follows the theme of the navbar, here <code>data-bs-theme="dark"</code>.</p>
                      <div class="navbar navbar-expand rounded bg-primary" data-bs-theme="dark">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Brand</a>
                          <nav class="nav-overflow" data-bs-toggle="nav-overflow" aria-label="Colored demo">
                            <ul class="navbar-nav">
                              <li class="nav-item active">
                                <a class="nav-link" href="#" aria-current="page">
                                  <span class="nav-link-title">Home</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="nav-link-title">Analytics</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="nav-link-title">Products</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="nav-link-title">Customers</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="nav-link-title">Reports</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="nav-link-title">Settings</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
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
