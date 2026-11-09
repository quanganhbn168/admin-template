<x-preview.page :title='"Accordion"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Accordion</h1>

                  <div class="text-secondary mt-1">Accordions show and hide sections of content, one panel at a time, inside a card.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/accordion" target="_blank" rel="noopener" class="link-secondary">
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
                      <h2 class="card-title">Default</h2>
                      <p class="card-subtitle">The base accordion — one panel open at a time.</p>
                      <div class="accordion" id="accordion-default">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-1-default" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-default" aria-expanded="true" aria-controls="collapse-1-default">
                              What makes Tabler different from other UI frameworks?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-1-default" class="accordion-collapse collapse show" data-bs-parent="#accordion-default" role="region" aria-labelledby="accordion-button-1-default">
                            <div class="accordion-body">Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease of use and flexibility.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-2-default" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-default" aria-expanded="false" aria-controls="collapse-2-default">
                              How can I customize Tabler components to fit my design needs?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-2-default" class="accordion-collapse collapse" data-bs-parent="#accordion-default" role="region" aria-labelledby="accordion-button-2-default">
                            <div class="accordion-body">You can customize Tabler components using CSS variables, SCSS, and utility classes to match your design preferences.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-3-default" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3-default" aria-expanded="false" aria-controls="collapse-3-default">
                              Is Tabler optimized for performance and fast loading times?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-3-default" class="accordion-collapse collapse" data-bs-parent="#accordion-default" role="region" aria-labelledby="accordion-button-3-default">
                            <div class="accordion-body">Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast loading and efficiency.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-4-default" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4-default" aria-expanded="false" aria-controls="collapse-4-default">
                              How accessible are Tabler components?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-4-default" class="accordion-collapse collapse" data-bs-parent="#accordion-default" role="region" aria-labelledby="accordion-button-4-default">
                            <div class="accordion-body">Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers, and accessibility best practices.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Flush</h2>
                      <p class="card-subtitle">Add <code>accordion-flush</code> to remove the card border and rounded corners.</p>
                    </div>
                    <div class="accordion accordion-flush" id="accordion-flush">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button id="accordion-button-1-flush" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-flush" aria-expanded="true" aria-controls="collapse-1-flush">
                            What makes Tabler different from other UI frameworks?

                            <span class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                            </span>
                          </button>
                        </h2>
                        <div id="collapse-1-flush" class="accordion-collapse collapse show" data-bs-parent="#accordion-flush" role="region" aria-labelledby="accordion-button-1-flush">
                          <div class="accordion-body">Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease of use and flexibility.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button id="accordion-button-2-flush" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-flush" aria-expanded="false" aria-controls="collapse-2-flush">
                            How can I customize Tabler components to fit my design needs?

                            <span class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                            </span>
                          </button>
                        </h2>
                        <div id="collapse-2-flush" class="accordion-collapse collapse" data-bs-parent="#accordion-flush" role="region" aria-labelledby="accordion-button-2-flush">
                          <div class="accordion-body">You can customize Tabler components using CSS variables, SCSS, and utility classes to match your design preferences.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button id="accordion-button-3-flush" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3-flush" aria-expanded="false" aria-controls="collapse-3-flush">
                            Is Tabler optimized for performance and fast loading times?

                            <span class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                            </span>
                          </button>
                        </h2>
                        <div id="collapse-3-flush" class="accordion-collapse collapse" data-bs-parent="#accordion-flush" role="region" aria-labelledby="accordion-button-3-flush">
                          <div class="accordion-body">Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast loading and efficiency.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button id="accordion-button-4-flush" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4-flush" aria-expanded="false" aria-controls="collapse-4-flush">
                            How accessible are Tabler components?

                            <span class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                            </span>
                          </button>
                        </h2>
                        <div id="collapse-4-flush" class="accordion-collapse collapse" data-bs-parent="#accordion-flush" role="region" aria-labelledby="accordion-button-4-flush">
                          <div class="accordion-body">Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers, and accessibility best practices.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Tabs</h2>
                      <p class="card-subtitle">Add <code>accordion-tabs</code> for a tab-like header instead of the default style.</p>
                      <div class="accordion accordion-tabs" id="accordion-tabs">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-1-tabs" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-tabs" aria-expanded="true" aria-controls="collapse-1-tabs">
                              What makes Tabler different from other UI frameworks?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-1-tabs" class="accordion-collapse collapse show" data-bs-parent="#accordion-tabs" role="region" aria-labelledby="accordion-button-1-tabs">
                            <div class="accordion-body">Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease of use and flexibility.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-2-tabs" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-tabs" aria-expanded="false" aria-controls="collapse-2-tabs">
                              How can I customize Tabler components to fit my design needs?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-2-tabs" class="accordion-collapse collapse" data-bs-parent="#accordion-tabs" role="region" aria-labelledby="accordion-button-2-tabs">
                            <div class="accordion-body">You can customize Tabler components using CSS variables, SCSS, and utility classes to match your design preferences.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-3-tabs" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3-tabs" aria-expanded="false" aria-controls="collapse-3-tabs">
                              Is Tabler optimized for performance and fast loading times?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-3-tabs" class="accordion-collapse collapse" data-bs-parent="#accordion-tabs" role="region" aria-labelledby="accordion-button-3-tabs">
                            <div class="accordion-body">Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast loading and efficiency.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-4-tabs" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4-tabs" aria-expanded="false" aria-controls="collapse-4-tabs">
                              How accessible are Tabler components?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-4-tabs" class="accordion-collapse collapse" data-bs-parent="#accordion-tabs" role="region" aria-labelledby="accordion-button-4-tabs">
                            <div class="accordion-body">Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers, and accessibility best practices.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Inverted</h2>
                      <p class="card-subtitle">Add <code>accordion-inverted</code> to flip the toggle icon to the start of the header.</p>
                      <div class="accordion accordion-inverted" id="accordion-inverted">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-1-inverted" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-inverted" aria-expanded="true" aria-controls="collapse-1-inverted">
                              What makes Tabler different from other UI frameworks?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-1-inverted" class="accordion-collapse collapse show" data-bs-parent="#accordion-inverted" role="region" aria-labelledby="accordion-button-1-inverted">
                            <div class="accordion-body">Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease of use and flexibility.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-2-inverted" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-inverted" aria-expanded="false" aria-controls="collapse-2-inverted">
                              How can I customize Tabler components to fit my design needs?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-2-inverted" class="accordion-collapse collapse" data-bs-parent="#accordion-inverted" role="region" aria-labelledby="accordion-button-2-inverted">
                            <div class="accordion-body">You can customize Tabler components using CSS variables, SCSS, and utility classes to match your design preferences.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-3-inverted" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3-inverted" aria-expanded="false" aria-controls="collapse-3-inverted">
                              Is Tabler optimized for performance and fast loading times?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-3-inverted" class="accordion-collapse collapse" data-bs-parent="#accordion-inverted" role="region" aria-labelledby="accordion-button-3-inverted">
                            <div class="accordion-body">Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast loading and efficiency.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-4-inverted" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4-inverted" aria-expanded="false" aria-controls="collapse-4-inverted">
                              How accessible are Tabler components?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-4-inverted" class="accordion-collapse collapse" data-bs-parent="#accordion-inverted" role="region" aria-labelledby="accordion-button-4-inverted">
                            <div class="accordion-body">Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers, and accessibility best practices.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Inverted with plus icon</h2>
                      <p class="card-subtitle">Combine <code>accordion-inverted</code> with <code>accordion-button-toggle-plus</code> and a custom icon in the toggle.</p>
                      <div class="accordion accordion-inverted" id="accordion-inverted-plus">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-1-inverted-plus" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-inverted-plus" aria-expanded="true" aria-controls="collapse-1-inverted-plus">
                              What makes Tabler different from other UI frameworks?

                              <span class="accordion-button-toggle accordion-button-toggle-plus">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M12 5l0 14" />
                                  <path d="M5 12l14 0" />
                                </svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-1-inverted-plus" class="accordion-collapse collapse show" data-bs-parent="#accordion-inverted-plus" role="region" aria-labelledby="accordion-button-1-inverted-plus">
                            <div class="accordion-body">Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease of use and flexibility.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-2-inverted-plus" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-inverted-plus" aria-expanded="false" aria-controls="collapse-2-inverted-plus">
                              How can I customize Tabler components to fit my design needs?

                              <span class="accordion-button-toggle accordion-button-toggle-plus">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M12 5l0 14" />
                                  <path d="M5 12l14 0" />
                                </svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-2-inverted-plus" class="accordion-collapse collapse" data-bs-parent="#accordion-inverted-plus" role="region" aria-labelledby="accordion-button-2-inverted-plus">
                            <div class="accordion-body">You can customize Tabler components using CSS variables, SCSS, and utility classes to match your design preferences.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-3-inverted-plus" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3-inverted-plus" aria-expanded="false" aria-controls="collapse-3-inverted-plus">
                              Is Tabler optimized for performance and fast loading times?

                              <span class="accordion-button-toggle accordion-button-toggle-plus">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M12 5l0 14" />
                                  <path d="M5 12l14 0" />
                                </svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-3-inverted-plus" class="accordion-collapse collapse" data-bs-parent="#accordion-inverted-plus" role="region" aria-labelledby="accordion-button-3-inverted-plus">
                            <div class="accordion-body">Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast loading and efficiency.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-4-inverted-plus" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4-inverted-plus" aria-expanded="false" aria-controls="collapse-4-inverted-plus">
                              How accessible are Tabler components?

                              <span class="accordion-button-toggle accordion-button-toggle-plus">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M12 5l0 14" />
                                  <path d="M5 12l14 0" />
                                </svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-4-inverted-plus" class="accordion-collapse collapse" data-bs-parent="#accordion-inverted-plus" role="region" aria-labelledby="accordion-button-4-inverted-plus">
                            <div class="accordion-body">Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers, and accessibility best practices.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With icons</h2>
                      <p class="card-subtitle">Add an <code>accordion-button-icon</code> next to each panel's title.</p>
                      <div class="accordion" id="accordion-icons">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-1-icons" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-icons" aria-expanded="true" aria-controls="collapse-1-icons">
                              <span class="accordion-button-icon">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/link -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M9 15l6 -6" />
                                  <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                  <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                </svg>
                              </span>

                              What makes Tabler different from other UI frameworks?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-1-icons" class="accordion-collapse collapse show" data-bs-parent="#accordion-icons" role="region" aria-labelledby="accordion-button-1-icons">
                            <div class="accordion-body">Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease of use and flexibility.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-2-icons" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-icons" aria-expanded="false" aria-controls="collapse-2-icons">
                              <span class="accordion-button-icon">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/link -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M9 15l6 -6" />
                                  <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                  <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                </svg>
                              </span>

                              How can I customize Tabler components to fit my design needs?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-2-icons" class="accordion-collapse collapse" data-bs-parent="#accordion-icons" role="region" aria-labelledby="accordion-button-2-icons">
                            <div class="accordion-body">You can customize Tabler components using CSS variables, SCSS, and utility classes to match your design preferences.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-3-icons" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3-icons" aria-expanded="false" aria-controls="collapse-3-icons">
                              <span class="accordion-button-icon">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/link -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M9 15l6 -6" />
                                  <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                  <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                </svg>
                              </span>

                              Is Tabler optimized for performance and fast loading times?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-3-icons" class="accordion-collapse collapse" data-bs-parent="#accordion-icons" role="region" aria-labelledby="accordion-button-3-icons">
                            <div class="accordion-body">Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast loading and efficiency.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button id="accordion-button-4-icons" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4-icons" aria-expanded="false" aria-controls="collapse-4-icons">
                              <span class="accordion-button-icon">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/link -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M9 15l6 -6" />
                                  <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                  <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                </svg>
                              </span>

                              How accessible are Tabler components?

                              <span class="accordion-button-toggle">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                              </span>
                            </button>
                          </h2>
                          <div id="collapse-4-icons" class="accordion-collapse collapse" data-bs-parent="#accordion-icons" role="region" aria-labelledby="accordion-button-4-icons">
                            <div class="accordion-body">Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers, and accessibility best practices.</div>
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
