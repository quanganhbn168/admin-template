<x-preview.page :title='"Switch icons"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Switch icons</h1>

                  <div class="text-secondary mt-1">Switch icons animate the change between two icons, for likes, favorites and other on/off actions.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/switch-icon" target="_blank" rel="noopener" class="link-secondary">
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
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Basic</h2>
                      <p class="card-subtitle">A <code>SwitchIcon</code> swaps the outline icon for the filled one in <code>activeColor</code>.</p>
                      <div class="btn-list">
                        <button type="button" class="switch-icon" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Like">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Add to favorites">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-yellow">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Bookmark">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bookmark -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M18 7v14l-6 -4l-6 4v-14a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-primary">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bookmark -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M18 7v14l-6 -4l-6 4v-14a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Notify me">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-orange">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Vote up">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/thumb-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-blue">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/thumb-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                            </svg>
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Animations</h2>
                      <p class="card-subtitle">Pick a transition with <code>variant</code>: fade, scale, flip or one of the slides.</p>
                      <div class="btn-list">
                        <button type="button" class="switch-icon switch-icon-fade" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Like (fade)">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Like (scale)">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon switch-icon-flip" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Like (flip)">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon switch-icon-slide-up" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Like (slide-up)">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon switch-icon-slide-down" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Like (slide-down)">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon switch-icon-slide-start" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Like (slide-start)">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon switch-icon-slide-end" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Like (slide-end)">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Two icons</h2>
                      <p class="card-subtitle">Set <code>activeIcon</code> to switch to a different icon instead of the filled variant.</p>
                      <div class="btn-list">
                        <button type="button" class="switch-icon switch-icon-flip" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Toggle">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M18 6l-12 12" />
                              <path d="M6 6l12 12" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon switch-icon-flip" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Play">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/player-play -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M7 4v16l13 -8l-13 -8" /></svg>
                          </span>
                          <span class="switch-icon-b text-primary">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/player-pause -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M6 6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v12a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1l0 -12" />
                              <path d="M14 6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v12a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1l0 -12" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon switch-icon-flip" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Mute">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/volume -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M15 8a5 5 0 0 1 0 8" />
                              <path d="M17.7 5a9 9 0 0 1 0 14" />
                              <path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-secondary">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/volume-off -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M15 8a5 5 0 0 1 1.912 4.934m-1.377 2.602a5 5 0 0 1 -.535 .464" />
                              <path d="M17.7 5a9 9 0 0 1 2.362 11.086m-1.676 2.299a9 9 0 0 1 -.686 .615" />
                              <path d="M9.069 5.054l.431 -.554a.8 .8 0 0 1 1.5 .5v2m0 4v8a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l1.294 -1.664" />
                              <path d="M3 3l18 18" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon switch-icon-flip" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Hide">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                              <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-secondary">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/eye-off -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                              <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                              <path d="M3 3l18 18" />
                            </svg>
                          </span></button
                        ><button type="button" class="switch-icon switch-icon-flip" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Lock">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/lock-open -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2l0 -6" />
                              <path d="M11 16a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M8 11v-5a4 4 0 0 1 8 0" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-green">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                              <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                              <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            </svg>
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">In an action button</h2>
                      <p class="card-subtitle">Add <code>action</code> to wrap the switch in a <code>btn-action</code>, which then carries the toggle, hover and focus.</p>
                      <div class="btn-actions">
                        <button type="button" class="btn btn-action" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Like">
                          <span class="switch-icon switch-icon-scale">
                            <span class="switch-icon-a">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                              </svg>
                            </span>
                            <span class="switch-icon-b text-red">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                              </svg>
                            </span>
                          </span></button
                        ><button type="button" class="btn btn-action" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Add to favorites">
                          <span class="switch-icon switch-icon-scale">
                            <span class="switch-icon-a">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </span>
                            <span class="switch-icon-b text-yellow">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </span>
                          </span></button
                        ><button type="button" class="btn btn-action" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Bookmark">
                          <span class="switch-icon switch-icon-scale">
                            <span class="switch-icon-a">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/bookmark -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M18 7v14l-6 -4l-6 4v-14a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4" />
                              </svg>
                            </span>
                            <span class="switch-icon-b text-primary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/bookmark -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M18 7v14l-6 -4l-6 4v-14a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4" />
                              </svg>
                            </span>
                          </span></button
                        ><button type="button" class="btn btn-action" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Notify me">
                          <span class="switch-icon switch-icon-scale">
                            <span class="switch-icon-a">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                              </svg>
                            </span>
                            <span class="switch-icon-b text-orange">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                              </svg>
                            </span>
                          </span></button
                        ><button type="button" class="btn btn-action" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Vote up">
                          <span class="switch-icon switch-icon-scale">
                            <span class="switch-icon-a">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/thumb-up -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                              </svg>
                            </span>
                            <span class="switch-icon-b text-blue">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/thumb-up -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                              </svg>
                            </span>
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Loading</h2>
                      <p class="card-subtitle">Add <code>loading</code> to show a spinner in place of the icons; clicks are ignored.</p>
                      <div class="btn-list">
                        <button type="button" class="switch-icon switch-icon-loading" data-bs-toggle="switch-icon" aria-pressed="false" aria-busy="true" aria-label="Add to favorites">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-yellow">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </span>
                        </button>
                        <button type="button" class="switch-icon switch-icon-loading" data-bs-toggle="switch-icon" aria-pressed="false" aria-busy="true" aria-label="Like">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                        </button>
                        <button type="button" class="switch-icon switch-icon-loading" data-bs-toggle="switch-icon" aria-pressed="false" aria-busy="true" aria-label="Bookmark">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bookmark -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M18 7v14l-6 -4l-6 4v-14a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-primary">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bookmark -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M18 7v14l-6 -4l-6 4v-14a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4" />
                            </svg>
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Wait for a request</h2>
                      <p class="card-subtitle">Pass a promise to <code>event.wait()</code> and the switch waits for it. The last one fails and stays as it was.</p>
                      <div class="btn-list">
                        <button type="button" class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Add to favorites" data-request="ok">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-yellow">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </span>
                        </button>
                        <button type="button" class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Like" data-request="ok">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-red">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                          </span>
                        </button>
                        <button type="button" class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Bookmark" data-request="ok">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bookmark -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M18 7v14l-6 -4l-6 4v-14a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-primary">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bookmark -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M18 7v14l-6 -4l-6 4v-14a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4" />
                            </svg>
                          </span>
                        </button>
                        <button type="button" class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Notify me" data-request="fail">
                          <span class="switch-icon-a text-muted">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            </svg>
                          </span>
                          <span class="switch-icon-b text-orange">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            </svg>
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">In a list</h2>
                      <p class="card-subtitle">The event bubbles, so one listener on the list keeps the count in sync.</p>
                      <div class="list-group list-group-flush" id="starred-repos">
                        <div class="list-group-item d-flex align-items-center gap-3 px-0">
                          <div class="flex-fill">
                            <div class="fw-medium">tabler/tabler</div>
                            <div class="text-secondary">Dashboard UI kit</div>
                          </div>
                          <button type="button" class="switch-icon switch-icon-scale active" data-bs-toggle="switch-icon" aria-pressed="true" aria-label="Star tabler/tabler">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </span>
                            <span class="switch-icon-b text-yellow">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </span>
                          </button>
                        </div>
                        <div class="list-group-item d-flex align-items-center gap-3 px-0">
                          <div class="flex-fill">
                            <div class="fw-medium">tabler/tabler-icons</div>
                            <div class="text-secondary">5900+ free SVG icons</div>
                          </div>
                          <button type="button" class="switch-icon switch-icon-scale active" data-bs-toggle="switch-icon" aria-pressed="true" aria-label="Star tabler/tabler-icons">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </span>
                            <span class="switch-icon-b text-yellow">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </span>
                          </button>
                        </div>
                        <div class="list-group-item d-flex align-items-center gap-3 px-0">
                          <div class="flex-fill">
                            <div class="fw-medium">tabler/tabler-react</div>
                            <div class="text-secondary">React components</div>
                          </div>
                          <button type="button" class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Star tabler/tabler-react">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </span>
                            <span class="switch-icon-b text-yellow">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </span>
                          </button>
                        </div>
                        <div class="list-group-item d-flex align-items-center gap-3 px-0">
                          <div class="flex-fill">
                            <div class="fw-medium">tabler/tabler-emails</div>
                            <div class="text-secondary">Responsive email templates</div>
                          </div>
                          <button type="button" class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon" aria-pressed="false" aria-label="Star tabler/tabler-emails">
                            <span class="switch-icon-a text-muted">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </span>
                            <span class="switch-icon-b text-yellow">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-filled">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </span>
                          </button>
                        </div>
                      </div>
                      <div class="text-secondary mt-3"><span id="starred-count">2</span> starred</div>
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
<script>
      /*
              Simulates a request behind a switch icon. The button shows a spinner while the
              promise is pending, switches when it resolves and stays as it was when it rejects.
              */
      document.querySelectorAll('[data-request]').forEach((button) => {
        button.addEventListener('toggle.bs.switch-icon', (event) => {
          const fails = button.dataset.request === 'fail'
          event.wait(new Promise((resolve, reject) => setTimeout(fails ? reject : resolve, 1500)))
        })
      })
    </script>
<script>
      /*
              Counts the active switches in the list after every change.
              */
      const list = document.getElementById('starred-repos')
      list.addEventListener('change.bs.switch-icon', () => {
        document.getElementById('starred-count').textContent = list.querySelectorAll('.switch-icon.active').length
      })
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
