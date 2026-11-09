<x-preview.page :title='"Segmented control"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Segmented control</h1>

                  <div class="text-secondary mt-1">A segmented control lets users pick one option from a small, always-visible set.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/segmented-control" target="_blank" rel="noopener" class="link-secondary">
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
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Basic</h2>
                      <p class="card-subtitle">A <code>nav-segmented</code> with text <code>nav-link</code> items is enough for a plain control.</p>
                      <nav class="nav nav-segmented" role="tablist">
                        <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">1</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">2</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">3</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">4</button>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Any content</h2>
                      <p class="card-subtitle">Items can be any short text, including emoji.</p>
                      <nav class="nav nav-segmented" role="tablist">
                        <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">👦</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">👦🏿</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">👦🏾</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">👦🏽</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">👦🏼</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">👦🏻</button>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Icons only</h2>
                      <p class="card-subtitle">Put only an icon in each <code>nav-link</code> for an icon-only control.</p>
                      <nav class="nav nav-segmented" role="tablist">
                        <button role="tab" data-bs-toggle="tab" aria-selected="true" aria-label="Home" class="nav-link active">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Star" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Clock" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 7v5l3 3" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Ghost" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/ghost -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                            <path d="M10 10l.01 0" />
                            <path d="M14 10l.01 0" />
                            <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Bold" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/bold -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6l0 -7" />
                            <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Italic" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/italic -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M11 5l6 0" />
                            <path d="M7 19l6 0" />
                            <path d="M14 5l-4 14" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Underline" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/underline -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M7 5v5a5 5 0 0 0 10 0v-5" />
                            <path d="M5 19h14" />
                          </svg>
                        </button>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With icons</h2>
                      <p class="card-subtitle">Combine an icon and text in each <code>nav-link</code> to label each option.</p>
                      <nav class="nav nav-segmented" role="tablist">
                        <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M9 6l11 0" />
                            <path d="M9 12l11 0" />
                            <path d="M9 18l11 0" />
                            <path d="M5 6l0 .01" />
                            <path d="M5 12l0 .01" />
                            <path d="M5 18l0 .01" /></svg
                          >List
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M4 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -1" />
                            <path d="M4 15a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -3" />
                            <path d="M14 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -12" /></svg
                          >Kanban
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M11 15h1" />
                            <path d="M12 15v3" /></svg
                          >Calendar
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2" />
                            <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" /></svg
                          >Files
                        </button>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Vertical</h2>
                      <p class="card-subtitle">Add <code>nav-segmented-vertical</code> to stack the options in a column.</p>
                      <nav class="nav nav-segmented nav-segmented-vertical" role="tablist" aria-orientation="vertical">
                        <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M9 6l11 0" />
                            <path d="M9 12l11 0" />
                            <path d="M9 18l11 0" />
                            <path d="M5 6l0 .01" />
                            <path d="M5 12l0 .01" />
                            <path d="M5 18l0 .01" /></svg
                          >List
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M4 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -1" />
                            <path d="M4 15a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -3" />
                            <path d="M14 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -12" /></svg
                          >Kanban
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M11 15h1" />
                            <path d="M12 15v3" /></svg
                          >Calendar
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2" />
                            <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" /></svg
                          >Files
                        </button>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Vertical with disabled items</h2>
                      <p class="card-subtitle">Add <code>disabled</code> to a <code>nav-link</code> to make that option unselectable.</p>
                      <nav class="nav nav-segmented nav-segmented-vertical" role="tablist" aria-orientation="vertical">
                        <button role="tab" data-bs-toggle="tab" aria-selected="true" aria-label="Home" class="nav-link active">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Star" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" aria-label="Clock" class="nav-link disabled">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 7v5l3 3" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Ghost" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/ghost -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                            <path d="M10 10l.01 0" />
                            <path d="M14 10l.01 0" />
                            <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Bold" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/bold -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6l0 -7" />
                            <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Italic" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/italic -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M11 5l6 0" />
                            <path d="M7 19l6 0" />
                            <path d="M14 5l-4 14" />
                          </svg>
                        </button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Underline" class="nav-link">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/underline -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                            <path d="M7 5v5a5 5 0 0 0 10 0v-5" />
                            <path d="M5 19h14" />
                          </svg>
                        </button>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Disabled items</h2>
                      <p class="card-subtitle">Disabled options stay visible but can't be selected.</p>
                      <nav class="nav nav-segmented" role="tablist">
                        <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">Daily</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Weekly</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Monthly</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" class="nav-link disabled">Quarterly</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" class="nav-link disabled">Yearly</button>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Vertical, no icons</h2>
                      <p class="card-subtitle">A vertical control also works with text-only items.</p>
                      <nav class="nav nav-segmented nav-segmented-vertical" role="tablist" aria-orientation="vertical">
                        <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">Daily</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Weekly</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Monthly</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Quarterly</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Yearly</button>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Independent group</h2>
                      <p class="card-subtitle">Use radio inputs with a unique <code>name</code> so this control doesn't share selection state with others using the same items.</p>
                      <nav class="nav nav-segmented">
                        <input type="radio" class="nav-link-input" name="checkbox" id="segmented-checkbox-1" checked /><label for="segmented-checkbox-1" class="nav-link">Daily</label> <input type="radio" class="nav-link-input" name="checkbox" id="segmented-checkbox-2" /><label
                          for="segmented-checkbox-2"
                          class="nav-link"
                          >Weekly</label
                        >
                        <input type="radio" class="nav-link-input" name="checkbox" id="segmented-checkbox-3" /><label for="segmented-checkbox-3" class="nav-link">Monthly</label> <input type="radio" class="nav-link-input" name="checkbox" id="segmented-checkbox-4" /><label for="segmented-checkbox-4" class="nav-link"
                          >Quarterly</label
                        >
                        <input type="radio" class="nav-link-input" name="checkbox" id="segmented-checkbox-5" /><label for="segmented-checkbox-5" class="nav-link">Yearly</label>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Full width</h2>
                      <p class="card-subtitle">Add <code>w-100</code> to stretch the control across its container.</p>
                      <nav class="nav nav-segmented w-100" role="tablist">
                        <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">Daily</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Weekly</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Monthly</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Quarterly</button>
                        <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Yearly</button>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Full width, stacked</h2>
                      <p class="card-subtitle">Multiple full-width controls, one above the other.</p>
                      <div class="space-y">
                        <div>
                          <nav class="nav nav-segmented w-100" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">Overview</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Analytics</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Reports</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Notifications</button>
                          </nav>
                        </div>
                        <div>
                          <nav class="nav nav-segmented w-100" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">Account</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Password</button>
                          </nav>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Sizes</h2>
                      <p class="card-subtitle">Add <code>nav-sm</code> or <code>nav-lg</code> to change the size — with text, icons, or both.</p>
                      <div class="space-y">
                        <div>
                          <nav class="nav nav-segmented nav-sm" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">List</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Kanban</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" class="nav-link disabled">Calendar</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Files</button>
                          </nav>
                        </div>
                        <div>
                          <nav class="nav nav-segmented" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">List</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Kanban</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" class="nav-link disabled">Calendar</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Files</button>
                          </nav>
                        </div>
                        <div>
                          <nav class="nav nav-segmented nav-lg" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">List</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Kanban</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" class="nav-link disabled">Calendar</button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">Files</button>
                          </nav>
                        </div>

                        <div>
                          <nav class="nav nav-segmented nav-sm" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M9 6l11 0" />
                                <path d="M9 12l11 0" />
                                <path d="M9 18l11 0" />
                                <path d="M5 6l0 .01" />
                                <path d="M5 12l0 .01" />
                                <path d="M5 18l0 .01" /></svg
                              >List
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -1" />
                                <path d="M4 15a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -3" />
                                <path d="M14 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -12" /></svg
                              >Kanban
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" class="nav-link disabled">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" /></svg
                              >Calendar
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2" />
                                <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" /></svg
                              >Files
                            </button>
                          </nav>
                        </div>
                        <div>
                          <nav class="nav nav-segmented" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M9 6l11 0" />
                                <path d="M9 12l11 0" />
                                <path d="M9 18l11 0" />
                                <path d="M5 6l0 .01" />
                                <path d="M5 12l0 .01" />
                                <path d="M5 18l0 .01" /></svg
                              >List
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -1" />
                                <path d="M4 15a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -3" />
                                <path d="M14 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -12" /></svg
                              >Kanban
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" class="nav-link disabled">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" /></svg
                              >Calendar
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2" />
                                <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" /></svg
                              >Files
                            </button>
                          </nav>
                        </div>
                        <div>
                          <nav class="nav nav-segmented nav-lg" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" class="nav-link active">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M9 6l11 0" />
                                <path d="M9 12l11 0" />
                                <path d="M9 18l11 0" />
                                <path d="M5 6l0 .01" />
                                <path d="M5 12l0 .01" />
                                <path d="M5 18l0 .01" /></svg
                              >List
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -1" />
                                <path d="M4 15a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -3" />
                                <path d="M14 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -12" /></svg
                              >Kanban
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" class="nav-link disabled">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" /></svg
                              >Calendar
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2" />
                                <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" /></svg
                              >Files
                            </button>
                          </nav>
                        </div>

                        <div>
                          <nav class="nav nav-segmented nav-sm" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" aria-label="List" class="nav-link active">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M9 6l11 0" />
                                <path d="M9 12l11 0" />
                                <path d="M9 18l11 0" />
                                <path d="M5 6l0 .01" />
                                <path d="M5 12l0 .01" />
                                <path d="M5 18l0 .01" />
                              </svg>
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Layout" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -1" />
                                <path d="M4 15a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -3" />
                                <path d="M14 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -12" />
                              </svg>
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" aria-label="Calendar" class="nav-link disabled">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Files" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2" />
                                <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                              </svg>
                            </button>
                          </nav>
                        </div>
                        <div>
                          <nav class="nav nav-segmented" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" aria-label="List" class="nav-link active">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M9 6l11 0" />
                                <path d="M9 12l11 0" />
                                <path d="M9 18l11 0" />
                                <path d="M5 6l0 .01" />
                                <path d="M5 12l0 .01" />
                                <path d="M5 18l0 .01" />
                              </svg>
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Layout" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -1" />
                                <path d="M4 15a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -3" />
                                <path d="M14 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -12" />
                              </svg>
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" aria-label="Calendar" class="nav-link disabled">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Files" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2" />
                                <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                              </svg>
                            </button>
                          </nav>
                        </div>
                        <div>
                          <nav class="nav nav-segmented nav-lg" role="tablist">
                            <button role="tab" data-bs-toggle="tab" aria-selected="true" aria-label="List" class="nav-link active">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/list -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M9 6l11 0" />
                                <path d="M9 12l11 0" />
                                <path d="M9 18l11 0" />
                                <path d="M5 6l0 .01" />
                                <path d="M5 12l0 .01" />
                                <path d="M5 18l0 .01" />
                              </svg>
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Layout" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/layout -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -1" />
                                <path d="M4 15a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -3" />
                                <path d="M14 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -12" />
                              </svg>
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-disabled="true" aria-label="Calendar" class="nav-link disabled">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                            </button>
                            <button role="tab" data-bs-toggle="tab" aria-selected="false" aria-label="Files" class="nav-link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/files -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon nav-link-icon">
                                <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2" />
                                <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                              </svg>
                            </button>
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
