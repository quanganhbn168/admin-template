<x-preview.page :title='"Clipboard"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Clipboard</h1>

                  <div class="text-secondary mt-1">A copy button puts the text of a field, a snippet or a literal string on the clipboard, and says so for a moment.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/clipboard" target="_blank" rel="noopener" class="link-secondary">
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
                      <h2 class="card-title">Button with a label</h2>
                      <p class="card-subtitle">The button reads <code>data-bs-target</code> and swaps <code>clipboard-label</code> for <code>clipboard-feedback</code>.</p>
                      <div class="mb-0">
                        <label class="form-label" for="clipboard-key"> API key </label>

                        <div class="input-group">
                          <input type="text" id="clipboard-key" class="form-control" value="tblr_live_8f2c41d0a7" readonly />
                          <button type="button" class="btn" data-bs-toggle="clipboard" data-bs-target="#clipboard-key">
                            <span class="clipboard-label">Copy</span>
                            <span class="clipboard-feedback">Copied</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Button with an icon</h2>
                      <p class="card-subtitle">An icon-only button needs an <code>aria-label</code> and a hidden word for the announcement.</p>
                      <div class="mb-0">
                        <label class="form-label" for="clipboard-key-icon"> API key </label>

                        <div class="input-group">
                          <input type="text" id="clipboard-key-icon" class="form-control" value="tblr_live_8f2c41d0a7" readonly />
                          <button type="button" class="btn btn-icon" data-bs-toggle="clipboard" data-bs-target="#clipboard-key-icon" aria-label="Copy the API key">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/clipboard -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon clipboard-label">
                              <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                              <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                            </svg>
                            <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon clipboard-feedback"><path d="M5 12l5 5l10 -10" /></svg>
                            <span class="clipboard-feedback visually-hidden">Copied</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Icon inside the field</h2>
                      <p class="card-subtitle">With <code>input-group-flat</code> the button sits in an <code>input-group-text</code>, so it looks like part of the field.</p>
                      <div class="mb-0">
                        <label class="form-label" for="clipboard-invite"> Invite link </label>

                        <div class="input-group input-group-flat">
                          <input type="text" id="clipboard-invite" class="form-control" value="https://tabler.io/invite/9fbc2e" readonly />
                          <span class="input-group-text">
                            <button type="button" class="link-secondary input-group-link border-0 bg-transparent p-0" data-bs-toggle="clipboard" data-bs-target="#clipboard-invite" aria-label="Copy the invite link">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/clipboard -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon clipboard-label">
                                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                              </svg>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon clipboard-feedback"><path d="M5 12l5 5l10 -10" /></svg>
                              <span class="clipboard-feedback visually-hidden">Copied</span>
                            </button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Green confirmation</h2>
                      <p class="card-subtitle">The feedback element takes any utility, so a <code>text-green</code> check confirms the copy in colour.</p>
                      <div class="mb-0">
                        <label class="form-label" for="clipboard-key-green"> API key </label>

                        <div class="input-group input-group-flat">
                          <input type="text" id="clipboard-key-green" class="form-control" value="tblr_live_8f2c41d0a7" readonly />
                          <span class="input-group-text">
                            <button type="button" class="link-secondary input-group-link border-0 bg-transparent p-0" data-bs-toggle="clipboard" data-bs-target="#clipboard-key-green" aria-label="Copy the API key">
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
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">A literal string</h2>
                      <p class="card-subtitle">Use <code>data-bs-text</code> when the text is not on the page.</p>
                      <button type="button" class="btn" data-bs-toggle="clipboard" data-bs-text="https://tabler.io/">
                        <span class="clipboard-label"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/link -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                            <path d="M9 15l6 -6" />
                            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" /></svg
                          >Copy link</span
                        >
                        <span class="clipboard-feedback"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2"><path d="M5 12l5 5l10 -10" /></svg>Link copied</span
                        >
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Any element</h2>
                      <p class="card-subtitle">A target that is not a field is copied from its text.</p>
                      <div class="d-flex align-items-center gap-2">
                        <code id="clipboard-command">npm install @tabler/core</code>
                        <button type="button" class="btn btn-sm btn-icon" data-bs-toggle="clipboard" data-bs-target="#clipboard-command" aria-label="Copy the install command">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/clipboard -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon clipboard-label">
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                          </svg>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon clipboard-feedback"><path d="M5 12l5 5l10 -10" /></svg>
                          <span class="clipboard-feedback visually-hidden">Copied</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">How long it lasts</h2>
                      <p class="card-subtitle">Set <code>data-bs-delay</code> in milliseconds. The default is 2000.</p>
                      <div class="d-flex flex-wrap align-items-center gap-2">
                        <button type="button" class="btn" data-bs-toggle="clipboard" data-bs-text="Tabler" data-bs-delay="500">
                          <span class="clipboard-label">Half a second</span>
                          <span class="clipboard-feedback">Copied</span>
                        </button>
                        <button type="button" class="btn" data-bs-toggle="clipboard" data-bs-text="Tabler" data-bs-delay="6000">
                          <span class="clipboard-label">Six seconds</span>
                          <span class="clipboard-feedback">Copied</span>
                        </button>
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
