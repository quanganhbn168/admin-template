<x-preview.page :title='"Lists"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Lists</h1>

                  <div class="text-secondary mt-1">Vertical lists built from list-group items: media, content, meta and actions in one row.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/list-group" target="_blank" rel="noopener" class="link-secondary">
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
                      <h2 class="card-title">Text only</h2>
                      <p class="card-subtitle">A plain <code>list-group-item</code> holds one line of text.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">Inbox</div>
                      <div class="list-group-item">Sent</div>
                      <div class="list-group-item">Archive</div>
                      <div class="list-group-item">Trash</div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Title and description</h2>
                      <p class="card-subtitle">Put <code>list-group-item-title</code> and <code>list-group-item-description</code> in <code>list-group-item-content</code>.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Inbox</div>
                          <div class="list-group-item-description">Messages waiting for a reply</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Sent</div>
                          <div class="list-group-item-description">Everything you have sent</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Archive</div>
                          <div class="list-group-item-description">Closed conversations</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Trash</div>
                          <div class="list-group-item-description">Removed after 30 days</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With icon</h2>
                      <p class="card-subtitle">The <code>list-group-item-media</code> slot holds an icon before the content.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/inbox -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M4 6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2l0 -12" />
                            <path d="M4 13h3l3 3h4l3 -3h3" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Inbox</div>
                          <div class="list-group-item-description">Messages waiting for a reply</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/send -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M10 14l11 -11" />
                            <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Sent</div>
                          <div class="list-group-item-description">Everything you have sent</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                            <path d="M10 12l4 0" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Archive</div>
                          <div class="list-group-item-description">Closed conversations</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Trash</div>
                          <div class="list-group-item-description">Removed after 30 days</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With avatar</h2>
                      <p class="card-subtitle">The media slot takes an avatar the same way.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Paweł Kuna</div>
                          <div class="list-group-item-description">UI Designer</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Jeffie Lewzey</div>
                          <div class="list-group-item-description">Chemical Engineer</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Mallory Hulme</div>
                          <div class="list-group-item-description">Geologist IV</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Dunn Slane</div>
                          <div class="list-group-item-description">Research Nurse</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With meta</h2>
                      <p class="card-subtitle">Use <code>list-group-item-meta</code> for a time, a count or a badge at the end.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Inbox</div>
                          <div class="list-group-item-description">Messages waiting for a reply</div>
                        </div>
                        <div class="list-group-item-meta">12</div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Sent</div>
                          <div class="list-group-item-description">Everything you have sent</div>
                        </div>
                        <div class="list-group-item-meta">148</div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Archive</div>
                          <div class="list-group-item-description">Closed conversations</div>
                        </div>
                        <div class="list-group-item-meta">2304</div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Trash</div>
                          <div class="list-group-item-description">Removed after 30 days</div>
                        </div>
                        <div class="list-group-item-meta">7</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">All slots</h2>
                      <p class="card-subtitle">Media, content, meta and <code>list-group-item-actions</code> in one item.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Paweł Kuna</div>
                          <div class="list-group-item-description">UI Designer</div>
                        </div>
                        <div class="list-group-item-meta">
                          <span class="badge bg-green-lt">Owner</span>
                        </div>
                        <div class="list-group-item-actions">
                          <div class="dropdown">
                            <button type="button" class="btn btn-action" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M11 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M11 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <button type="button" class="dropdown-item">Import</button>
                              <button type="button" class="dropdown-item">Export</button>
                              <button type="button" class="dropdown-item">Download</button>
                              <button type="button" class="dropdown-item text-danger">Delete</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Jeffie Lewzey</div>
                          <div class="list-group-item-description">Chemical Engineer</div>
                        </div>
                        <div class="list-group-item-meta">3 d</div>
                        <div class="list-group-item-actions">
                          <div class="dropdown">
                            <button type="button" class="btn btn-action" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M11 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M11 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <button type="button" class="dropdown-item">Import</button>
                              <button type="button" class="dropdown-item">Export</button>
                              <button type="button" class="dropdown-item">Download</button>
                              <button type="button" class="dropdown-item text-danger">Delete</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Mallory Hulme</div>
                          <div class="list-group-item-description">Geologist IV</div>
                        </div>
                        <div class="list-group-item-meta">6 d</div>
                        <div class="list-group-item-actions">
                          <div class="dropdown">
                            <button type="button" class="btn btn-action" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M11 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M11 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <button type="button" class="dropdown-item">Import</button>
                              <button type="button" class="dropdown-item">Export</button>
                              <button type="button" class="dropdown-item">Download</button>
                              <button type="button" class="dropdown-item text-danger">Delete</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Dunn Slane</div>
                          <div class="list-group-item-description">Research Nurse</div>
                        </div>
                        <div class="list-group-item-meta">9 d</div>
                        <div class="list-group-item-actions">
                          <div class="dropdown">
                            <button type="button" class="btn btn-action" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M11 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M11 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <button type="button" class="dropdown-item">Import</button>
                              <button type="button" class="dropdown-item">Export</button>
                              <button type="button" class="dropdown-item">Download</button>
                              <button type="button" class="dropdown-item text-danger">Delete</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Links</h2>
                      <p class="card-subtitle">Add <code>list-group-item-action</code> to a link item. It supports <code>active</code> and <code>disabled</code>.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <a href="#" aria-current="true" class="list-group-item list-group-item-action active">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/inbox -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M4 6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2l0 -12" />
                            <path d="M4 13h3l3 3h4l3 -3h3" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Inbox</div>
                          <div class="list-group-item-description">Messages waiting for a reply</div>
                        </div>
                        <div class="list-group-item-meta">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M9 6l6 6l-6 6" /></svg>
                        </div> </a
                      ><a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/send -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M10 14l11 -11" />
                            <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Sent</div>
                          <div class="list-group-item-description">Everything you have sent</div>
                        </div>
                        <div class="list-group-item-meta">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M9 6l6 6l-6 6" /></svg>
                        </div> </a
                      ><a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                            <path d="M10 12l4 0" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Archive</div>
                          <div class="list-group-item-description">Closed conversations</div>
                        </div>
                        <div class="list-group-item-meta">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M9 6l6 6l-6 6" /></svg>
                        </div> </a
                      ><a aria-disabled="true" tabindex="-1" class="list-group-item list-group-item-action disabled">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Trash</div>
                          <div class="list-group-item-description">Removed after 30 days</div>
                        </div>
                        <div class="list-group-item-meta">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M9 6l6 6l-6 6" /></svg>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Actions on hover</h2>
                      <p class="card-subtitle">In a <code>list-group-hoverable</code> list the actions show on hover. Add <code>show</code> to keep them visible.</p>
                    </div>
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Paweł Kuna</div>
                          <div class="list-group-item-description">UI Designer</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-action" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Jeffie Lewzey</div>
                          <div class="list-group-item-description">Chemical Engineer</div>
                        </div>

                        <div class="list-group-item-actions show">
                          <button type="button" class="btn btn-action" aria-label="Remove from favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-yellow">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Mallory Hulme</div>
                          <div class="list-group-item-description">Geologist IV</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-action" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Dunn Slane</div>
                          <div class="list-group-item-description">Research Nurse</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-action" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Buttons</h2>
                      <p class="card-subtitle">The actions slot holds any control, for example a button.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Paweł Kuna</div>
                          <div class="list-group-item-description">UI Designer</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Jeffie Lewzey</div>
                          <div class="list-group-item-description">Chemical Engineer</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-sm">Following</button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Mallory Hulme</div>
                          <div class="list-group-item-description">Geologist IV</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-sm">Following</button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Dunn Slane</div>
                          <div class="list-group-item-description">Research Nurse</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-sm">Following</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Checkboxes</h2>
                      <p class="card-subtitle">In a <code>list-group-selectable</code> list a checked <code>list-group-selectable-check</code> marks its item.</p>
                    </div>
                    <div class="list-group list-group-flush list-group-selectable">
                      <label class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0 me-3" checked />
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Paweł Kuna</div>
                          <div class="list-group-item-description">UI Designer</div>
                        </div> </label
                      ><label class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0 me-3" />
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Jeffie Lewzey</div>
                          <div class="list-group-item-description">Chemical Engineer</div>
                        </div> </label
                      ><label class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0 me-3" checked />
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Mallory Hulme</div>
                          <div class="list-group-item-description">Geologist IV</div>
                        </div> </label
                      ><label class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0 me-3" />
                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Dunn Slane</div>
                          <div class="list-group-item-description">Research Nurse</div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Radios</h2>
                      <p class="card-subtitle">Radio inputs with one <code>name</code> make a single choice list. Use a <code>label</code> as the item.</p>
                    </div>
                    <div class="list-group list-group-flush list-group-selectable">
                      <label class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="radio" name="list-plan" value="starter" class="form-check-input list-group-selectable-check m-0" />
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Starter</div>
                          <div class="list-group-item-description">Up to 3 projects</div>
                        </div>
                        <div class="list-group-item-meta">$9</div> </label
                      ><label class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="radio" name="list-plan" value="team" class="form-check-input list-group-selectable-check m-0" checked />
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Team</div>
                          <div class="list-group-item-description">Unlimited projects, 10 members</div>
                        </div>
                        <div class="list-group-item-meta">$29</div> </label
                      ><label class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="radio" name="list-plan" value="business" class="form-check-input list-group-selectable-check m-0" />
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Business</div>
                          <div class="list-group-item-description">Unlimited members and SSO</div>
                        </div>
                        <div class="list-group-item-meta">$79</div>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Switches</h2>
                      <p class="card-subtitle">Put a switch in the actions slot to build a settings list.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <label class="list-group-item">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                            <path d="M3 7l9 6l9 -6" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Email</div>
                          <div class="list-group-item-description">A summary every morning</div>
                        </div>

                        <div class="list-group-item-actions">
                          <span class="form-check form-switch m-0">
                            <input type="checkbox" role="switch" class="form-check-input" checked />
                          </span>
                        </div> </label
                      ><label class="list-group-item">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/device-mobile -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14" />
                            <path d="M11 4h2" />
                            <path d="M12 17v.01" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Push</div>
                          <div class="list-group-item-description">Mentions and direct messages</div>
                        </div>

                        <div class="list-group-item-actions">
                          <span class="form-check form-switch m-0">
                            <input type="checkbox" role="switch" class="form-check-input" checked />
                          </span>
                        </div> </label
                      ><label class="list-group-item">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/brand-slack -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M12 12v-6a2 2 0 0 1 4 0v6m0 -2a2 2 0 1 1 2 2h-6" />
                            <path d="M12 12h6a2 2 0 0 1 0 4h-6m2 0a2 2 0 1 1 -2 2v-6" />
                            <path d="M12 12v6a2 2 0 0 1 -4 0v-6m0 2a2 2 0 1 1 -2 -2h6" />
                            <path d="M12 12h-6a2 2 0 0 1 0 -4h6m-2 0a2 2 0 1 1 2 -2v6" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Slack</div>
                          <div class="list-group-item-description">Posts to the #updates channel</div>
                        </div>

                        <div class="list-group-item-actions">
                          <span class="form-check form-switch m-0">
                            <input type="checkbox" role="switch" class="form-check-input" />
                          </span>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Wrapped description</h2>
                      <p class="card-subtitle">Add <code>align-items-start</code> to the item and <code>text-wrap</code> to the description for longer text.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item align-items-start">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Paweł Kuna</div>

                          <div class="list-group-item-description text-wrap">The new list layout works well on the dashboard. Can we use the same slots for the search results?</div>
                        </div>
                        <div class="list-group-item-meta">2 h</div>
                      </div>
                      <div class="list-group-item align-items-start">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Jeffie Lewzey</div>

                          <div class="list-group-item-description text-wrap">Yes, the results only need a wrapped description and the avatar aligned to the top.</div>
                        </div>
                        <div class="list-group-item-meta">1 h</div>
                      </div>
                      <div class="list-group-item align-items-start">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Mallory Hulme</div>

                          <div class="list-group-item-description text-wrap">Done. I also added the nested items to the sidebar.</div>
                        </div>
                        <div class="list-group-item-meta">12 min</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Nested items</h2>
                      <p class="card-subtitle">Put <code>list-group-nested</code> on a collapse after the parent item. <code>list-group-item-toggle</code> turns the chevron.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <button type="button" data-bs-toggle="collapse" data-bs-target="#list-nested-projects" aria-expanded="true" aria-controls="list-nested-projects" class="list-group-item list-group-item-action">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/folder -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Projects</div>
                        </div>
                        <div class="list-group-item-meta">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon list-group-item-toggle"><path d="M6 9l6 6l6 -6" /></svg>
                        </div>
                      </button>
                      <div class="list-group-nested collapse show" id="list-nested-projects">
                        <a href="#" class="list-group-item list-group-item-action">Website redesign</a><a href="#" class="list-group-item list-group-item-action">Mobile app</a><a href="#" class="list-group-item list-group-item-action">Design system</a>
                      </div>

                      <button type="button" data-bs-toggle="collapse" data-bs-target="#list-nested-teams" aria-expanded="false" aria-controls="list-nested-teams" class="list-group-item list-group-item-action">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/users -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Teams</div>
                        </div>
                        <div class="list-group-item-meta">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon list-group-item-toggle"><path d="M6 9l6 6l6 -6" /></svg>
                        </div>
                      </button>
                      <div class="list-group-nested collapse" id="list-nested-teams"><a href="#" class="list-group-item list-group-item-action">Design</a><a href="#" class="list-group-item list-group-item-action">Engineering</a></div>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-item-media">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path
                              d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                            />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                          </svg>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Settings</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Drag handle</h2>
                      <p class="card-subtitle">Add <code>data-sortable</code> to the list and put the handle in the media slot.</p>
                    </div>
                    <div data-sortable='{"animation":150,"handle":".sortable-handle"}' class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="sortable-handle cursor-move text-secondary me-3" aria-hidden="true">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/grip-vertical -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M8 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M8 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M8 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </span>
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Paweł Kuna</div>
                          <div class="list-group-item-description">UI Designer</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="sortable-handle cursor-move text-secondary me-3" aria-hidden="true">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/grip-vertical -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M8 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M8 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M8 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </span>
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Jeffie Lewzey</div>
                          <div class="list-group-item-description">Chemical Engineer</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="sortable-handle cursor-move text-secondary me-3" aria-hidden="true">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/grip-vertical -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M8 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M8 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M8 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </span>
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Mallory Hulme</div>
                          <div class="list-group-item-description">Geologist IV</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="sortable-handle cursor-move text-secondary me-3" aria-hidden="true">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/grip-vertical -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M8 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M8 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M8 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M14 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </span>
                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Dunn Slane</div>
                          <div class="list-group-item-description">Research Nurse</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Default</h2>
                      <p class="card-subtitle">Without a size class the items use the default padding.</p>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Paweł Kuna</div>
                          <div class="list-group-item-description">UI Designer</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Jeffie Lewzey</div>
                          <div class="list-group-item-description">Chemical Engineer</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Mallory Hulme</div>
                          <div class="list-group-item-description">Geologist IV</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Dunn Slane</div>
                          <div class="list-group-item-description">Research Nurse</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Small</h2>
                      <p class="card-subtitle">Add <code>list-group-sm</code> for a compact list.</p>
                    </div>
                    <div class="list-group list-group-sm list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" slot="media" class="avatar avatar-sm"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Paweł Kuna</div>
                          <div class="list-group-item-description">UI Designer</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" slot="media" class="avatar avatar-sm"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Jeffie Lewzey</div>
                          <div class="list-group-item-description">Chemical Engineer</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" slot="media" class="avatar avatar-sm"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Mallory Hulme</div>
                          <div class="list-group-item-description">Geologist IV</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" slot="media" class="avatar avatar-sm"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Dunn Slane</div>
                          <div class="list-group-item-description">Research Nurse</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Large</h2>
                      <p class="card-subtitle">Add <code>list-group-lg</code> for more room around each item.</p>
                    </div>
                    <div class="list-group list-group-lg list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Paweł Kuna</div>
                          <div class="list-group-item-description">UI Designer</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Jeffie Lewzey</div>
                          <div class="list-group-item-description">Chemical Engineer</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Mallory Hulme</div>
                          <div class="list-group-item-description">Geologist IV</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Dunn Slane</div>
                          <div class="list-group-item-description">Research Nurse</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Notifications</h2>
                    </div>
                    <div class="list-group list-group-flush">
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-item-media">
                          <span class="status-dot status-blue status-dot-animated" slot="media"><span class="visually-hidden">Unread</span></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">New order received</div>
                          <div class="list-group-item-description">Order #12345 has been placed by John Doe</div>
                        </div>
                        <div class="list-group-item-meta">2 h</div> </a
                      ><a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-item-media">
                          <span class="status-dot status-blue status-dot-animated" slot="media"><span class="visually-hidden">Unread</span></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Payment failed</div>
                          <div class="list-group-item-description">Payment for order #12340 failed. Please review payment details.</div>
                        </div>
                        <div class="list-group-item-meta">4 h</div> </a
                      ><a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-item-media">
                          <span class="status-dot status-blue status-dot-animated" slot="media"><span class="visually-hidden">Unread</span></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">System maintenance</div>
                          <div class="list-group-item-description">Scheduled maintenance will begin in 2 hours. Expected downtime: 30 minutes.</div>
                        </div>
                        <div class="list-group-item-meta">6 h</div> </a
                      ><a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-item-media">
                          <span class="status-dot" slot="media"><span class="visually-hidden">Read</span></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">New customer registered</div>
                          <div class="list-group-item-description">Sarah Johnson has created a new account</div>
                        </div>
                        <div class="list-group-item-meta">8 h</div>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Transactions</h2>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/avatars/000m.jpg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Aprilynne Pills</div>
                          <div class="list-group-item-description">Refund for cancelled prescription</div>
                        </div>
                        <div class="list-group-item-meta">
                          <span class="fw-medium text-green"> +$499.99 </span>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/brands/google.svg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Google Limited UK</div>
                          <div class="list-group-item-description">Google Ads campaign payment</div>
                        </div>
                        <div class="list-group-item-meta">
                          <span class="fw-medium text-body"> −$1,029.77 </span>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/brands/github.svg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Github Inc.</div>
                          <div class="list-group-item-description">GitHub Pro subscription</div>
                        </div>
                        <div class="list-group-item-meta">
                          <span class="fw-medium text-body"> −$42.87 </span>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span style="background-image: url(/tabler/static/brands/netflix.svg)" slot="media" class="avatar"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Netflix</div>
                          <div class="list-group-item-description">Monthly streaming subscription</div>
                        </div>
                        <div class="list-group-item-meta">
                          <span class="fw-medium text-body"> −$15.99 </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Files</h2>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span slot="media" class="avatar"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/file-type-pdf -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                              <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                              <path d="M17 18h2" />
                              <path d="M20 15h-3v6" />
                              <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1" /></svg
                          ></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Annual report 2025.pdf</div>
                          <div class="list-group-item-description">2.4 MB</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-action" aria-label="Download Annual report 2025.pdf">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/download -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                              <path d="M7 11l5 5l5 -5" />
                              <path d="M12 4l0 12" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span slot="media" class="avatar"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/file-spreadsheet -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
                              <path d="M8 11h8v7h-8l0 -7" />
                              <path d="M8 15h8" />
                              <path d="M11 11v7" /></svg
                          ></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Budget forecast.xlsx</div>
                          <div class="list-group-item-description">318 kB</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-action" aria-label="Download Budget forecast.xlsx">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/download -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                              <path d="M7 11l5 5l5 -5" />
                              <path d="M12 4l0 12" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span slot="media" class="avatar"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/photo -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M15 8h.01" />
                              <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12" />
                              <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                              <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /></svg
                          ></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Office photos.zip</div>
                          <div class="list-group-item-description">48 MB</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-action" aria-label="Download Office photos.zip">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/download -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                              <path d="M7 11l5 5l5 -5" />
                              <path d="M12 4l0 12" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span slot="media" class="avatar"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/file-text -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
                              <path d="M9 9l1 0" />
                              <path d="M9 13l6 0" />
                              <path d="M9 17l6 0" /></svg
                          ></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Meeting notes.md</div>
                          <div class="list-group-item-description">4 kB</div>
                        </div>

                        <div class="list-group-item-actions">
                          <button type="button" class="btn btn-action" aria-label="Download Meeting notes.md">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/download -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                              <path d="M7 11l5 5l5 -5" />
                              <path d="M12 4l0 12" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Visits by country</h2>
                    </div>
                    <div class="list-group list-group-flush">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="flag flag-country-us" slot="media"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">United States</div>

                          <div class="progress progress-sm mt-2" aria-label="64% of visits">
                            <div class="progress-bar" style="width: 64%" role="progressbar" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100" aria-label="64% Complete">
                              <span class="visually-hidden">64% Complete</span>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item-meta">64%</div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="flag flag-country-de" slot="media"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Germany</div>

                          <div class="progress progress-sm mt-2" aria-label="48% of visits">
                            <div class="progress-bar" style="width: 48%" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" aria-label="48% Complete">
                              <span class="visually-hidden">48% Complete</span>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item-meta">48%</div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="flag flag-country-pl" slot="media"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Poland</div>

                          <div class="progress progress-sm mt-2" aria-label="31% of visits">
                            <div class="progress-bar" style="width: 31%" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" aria-label="31% Complete">
                              <span class="visually-hidden">31% Complete</span>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item-meta">31%</div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="flag flag-country-jp" slot="media"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="list-group-item-title">Japan</div>

                          <div class="progress progress-sm mt-2" aria-label="17% of visits">
                            <div class="progress-bar" style="width: 17%" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" aria-label="17% Complete">
                              <span class="visually-hidden">17% Complete</span>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item-meta">17%</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Inside a card body</h2>
                      <p class="card-subtitle">Without <code>list-group-flush</code> the list keeps its own border and rounded corners.</p>
                      <div class="list-group">
                        <div class="list-group-item">
                          <div class="list-group-item-media">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/file-type-pdf -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                              <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                              <path d="M17 18h2" />
                              <path d="M20 15h-3v6" />
                              <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1" />
                            </svg>
                          </div>
                          <div class="list-group-item-content">
                            <div class="list-group-item-title">Annual report 2025.pdf</div>
                          </div>
                          <div class="list-group-item-meta">2.4 MB</div>
                        </div>
                        <div class="list-group-item">
                          <div class="list-group-item-media">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/file-spreadsheet -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
                              <path d="M8 11h8v7h-8l0 -7" />
                              <path d="M8 15h8" />
                              <path d="M11 11v7" />
                            </svg>
                          </div>
                          <div class="list-group-item-content">
                            <div class="list-group-item-title">Budget forecast.xlsx</div>
                          </div>
                          <div class="list-group-item-meta">318 kB</div>
                        </div>
                        <div class="list-group-item">
                          <div class="list-group-item-media">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/photo -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M15 8h.01" />
                              <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12" />
                              <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                              <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                            </svg>
                          </div>
                          <div class="list-group-item-content">
                            <div class="list-group-item-title">Office photos.zip</div>
                          </div>
                          <div class="list-group-item-meta">48 MB</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Loading</h2>
                    </div>
                    <div aria-hidden="true" class="list-group list-group-flush placeholder-glow">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="avatar placeholder"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="placeholder col-7"></div>
                          <div class="placeholder placeholder-xs col-8"></div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="avatar placeholder"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="placeholder col-5"></div>
                          <div class="placeholder placeholder-xs col-9"></div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="avatar placeholder"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="placeholder col-7"></div>
                          <div class="placeholder placeholder-xs col-8"></div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="avatar placeholder"></span>
                        </div>
                        <div class="list-group-item-content">
                          <div class="placeholder col-5"></div>
                          <div class="placeholder placeholder-xs col-9"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Empty</h2>
                    </div>
                    <div class="empty">
                      <div class="empty-icon">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/inbox-off -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                          <path d="M8 4h10a2 2 0 0 1 2 2v10m-.593 3.422a2 2 0 0 1 -1.407 .578h-12a2 2 0 0 1 -2 -2v-12c0 -.554 .225 -1.056 .59 -1.418" />
                          <path d="M4 13h3l3 3h4l.987 -.987m2.013 -2.013h3" />
                          <path d="M3 3l18 18" />
                        </svg>
                      </div>

                      <p class="empty-title">No messages</p>
                      <p class="empty-subtitle text-secondary">New messages from your team show up here.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Contacts</h2>
                    </div>
                    <div class="list-group list-group-flush list-group-selectable">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0" aria-label="Select Christabel Charlwood" /><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/003f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Christabel Charlwood </a>
                          <div class="list-group-item-description">Compressed Sass output support (#29702)</div>
                        </div>

                        <div class="list-group-item-actions"></div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0" checked aria-label="Select Haskel Shelper" /><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/063m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Haskel Shelper </a>
                          <div class="list-group-item-description">Set vertical-align on .form-check-input (#29521)</div>
                        </div>

                        <div class="list-group-item-actions show"></div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0" aria-label="Select Lorry Mion" /><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/006m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Lorry Mion </a>
                          <div class="list-group-item-description">Keep themed appearance for print (#29714)</div>
                        </div>

                        <div class="list-group-item-actions"></div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0" aria-label="Select Leesa Beaty" /><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/004f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Leesa Beaty </a>
                          <div class="list-group-item-description">Use double quotes in `.stylelintrc` (#29709)</div>
                        </div>

                        <div class="list-group-item-actions"></div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0" checked aria-label="Select Perren Keemar" /><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/007m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Perren Keemar </a>
                          <div class="list-group-item-description">Regenerate package-lock.json (#29695)</div>
                        </div>

                        <div class="list-group-item-actions show"></div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0" aria-label="Select Sunny Airey" /><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span class="avatar">SA</span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Sunny Airey </a>
                          <div class="list-group-item-description">Switch to the Coveralls Action (#29478)</div>
                        </div>

                        <div class="list-group-item-actions"></div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0" aria-label="Select Geoffry Flaunders" /><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/009m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Geoffry Flaunders </a>
                          <div class="list-group-item-description">Fix npm audit vulnerability (#29677)</div>
                        </div>

                        <div class="list-group-item-actions"></div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <input type="checkbox" class="form-check-input list-group-selectable-check m-0" checked aria-label="Select Thatcher Keel" /><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/010m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Thatcher Keel </a>
                          <div class="list-group-item-description">config.yml: update popper.js to v1.16.0 (#29624)</div>
                        </div>

                        <div class="list-group-item-actions show"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Last commits</h2>
                    </div>
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="badge bg-red"></span
                          ><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Paweł Kuna </a>
                          <div class="list-group-item-description">Change deprecated html tags to text decoration classes (#29604)</div>
                        </div>

                        <div class="list-group-item-actions">
                          <a href="#" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="badge bg-yellow"></span
                          ><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Jeffie Lewzey </a>
                          <div class="list-group-item-description">justify-content:between ⇒ justify-content:space-between (#29734)</div>
                        </div>

                        <div class="list-group-item-actions">
                          <a href="#" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="badge"></span
                          ><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Mallory Hulme </a>
                          <div class="list-group-item-description">Update change-version.js (#29736)</div>
                        </div>

                        <div class="list-group-item-actions">
                          <a href="#" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="badge bg-green"></span
                          ><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Dunn Slane </a>
                          <div class="list-group-item-description">Regenerate package-lock.json (#29730)</div>
                        </div>

                        <div class="list-group-item-actions">
                          <a href="#" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="badge bg-green"></span
                          ><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Emmy Levet </a>
                          <div class="list-group-item-description">Some minor text tweaks</div>
                        </div>

                        <div class="list-group-item-actions">
                          <a href="#" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="badge bg-yellow"></span
                          ><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/001f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Maryjo Lebarree </a>
                          <div class="list-group-item-description">Link to versioned docs</div>
                        </div>

                        <div class="list-group-item-actions">
                          <a href="#" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="badge bg-green"></span
                          ><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/004m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Egan Poetz </a>
                          <div class="list-group-item-description">Copywriting edits</div>
                        </div>

                        <div class="list-group-item-actions">
                          <a href="#" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <span class="badge bg-yellow"></span
                          ><a href="#" class="ms-3" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/002f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Kellie Skingley </a>
                          <div class="list-group-item-description">Enable RFS for font resizing</div>
                        </div>

                        <div class="list-group-item-actions">
                          <a href="#" aria-label="Add to favorites">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">People</h2>
                    </div>

                    <div style="max-height: 35rem" class="list-group list-group-flush overflow-auto">
                      <div class="list-group-header sticky-top">A</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span class="avatar">SA</span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Sunny Airey </a>
                          <div class="list-group-item-description">Change deprecated html tags to text decoration classes (#29604)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span class="avatar">AA</span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Arlie Armstead </a>
                          <div class="list-group-item-description">justify-content:between ⇒ justify-content:space-between (#29734)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">B</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/024m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Cary Baleine </a>
                          <div class="list-group-item-description">Update change-version.js (#29736)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/004f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Leesa Beaty </a>
                          <div class="list-group-item-description">Regenerate package-lock.json (#29730)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span class="avatar">TB</span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Tallie Bettis </a>
                          <div class="list-group-item-description">Some minor text tweaks</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span class="avatar">EB</span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Errol Blackley </a>
                          <div class="list-group-item-description">Link to versioned docs</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">C</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/015m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Delaney Cairney </a>
                          <div class="list-group-item-description">Copywriting edits</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/019m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Rooney Cassy </a>
                          <div class="list-group-item-description">Enable RFS for font resizing</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/003f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Christabel Charlwood </a>
                          <div class="list-group-item-description">Compressed Sass output support (#29702)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/017m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Portie Christou </a>
                          <div class="list-group-item-description">Set vertical-align on .form-check-input (#29521)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/021m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Mata Codlin </a>
                          <div class="list-group-item-description">Keep themed appearance for print (#29714)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/019f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Julietta Coke </a>
                          <div class="list-group-item-description">Use double quotes in `.stylelintrc` (#29709)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/008f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Tessie Curzon </a>
                          <div class="list-group-item-description">Regenerate package-lock.json (#29695)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">D</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/016f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Ninon Don </a>
                          <div class="list-group-item-description">Switch to the Coveralls Action (#29478)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/018m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Emmott Dowsett </a>
                          <div class="list-group-item-description">Fix npm audit vulnerability (#29677)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">E</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/011f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Carroll Erat </a>
                          <div class="list-group-item-description">config.yml: update popper.js to v1.16.0 (#29624)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/022f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Peria Errichiello </a>
                          <div class="list-group-item-description">Update anchor.js to v4.2.1 (#29662)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/005f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Dyann Escala </a>
                          <div class="list-group-item-description">Dist (#29638)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">F</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/009m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Geoffry Flaunders </a>
                          <div class="list-group-item-description">Make check label cursor customizable (#29654)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">G</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/015f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Merrily Garforth </a>
                          <div class="list-group-item-description">Fixed input-height-sm and input-height-lg calculations (#29653)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/011m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Johnnie Gilby </a>
                          <div class="list-group-item-description">package.json: Add funding property (#29646)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/017f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Gratia Gooley </a>
                          <div class="list-group-item-description">Remove shx. (#29636)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/013f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Leigha Gorce </a>
                          <div class="list-group-item-description">dashboard/index.html: update tabler-icons to v4.24.1 (#29651)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">H</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/020m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Haze Hubbert </a>
                          <div class="list-group-item-description">Regenerate package-lock.json.</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Mallory Hulme </a>
                          <div class="list-group-item-description">site/assets/js/search.js: ignore the LGTM alert (#29634)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">I</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/025m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Reynold Indgs </a>
                          <div class="list-group-item-description">Tighten regex a bit. If we need to make this more robust in the future, we can revert this as needed.</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">K</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/010m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Thatcher Keel </a>
                          <div class="list-group-item-description">example.html: use double quotes</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/007m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Perren Keemar </a>
                          <div class="list-group-item-description">Example shortcode: use a regex and simplify logic.</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/021f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Sandi Keys </a>
                          <div class="list-group-item-description">Move docs JS one folder up. (#29632)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Paweł Kuna </a>
                          <div class="list-group-item-description">progress: Fix IE overflow (#29629)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">L</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/012f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Marsha Labat </a>
                          <div class="list-group-item-description">removing last occurences of _fixTitle in our docs (#29631)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/001f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Maryjo Lebarree </a>
                          <div class="list-group-item-description">Update modal.md (#29621) Fix typo</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Emmy Levet </a>
                          <div class="list-group-item-description">Update stylelint-config-twbs-bootstrap to 0.9.0 (#29612)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Jeffie Lewzey </a>
                          <div class="list-group-item-description">Remove calc function from docs</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">M</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/018f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Odelinda McCosh </a>
                          <div class="list-group-item-description">Add calc() to function blacklist</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/020f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Riane Milward </a>
                          <div class="list-group-item-description">Doc tweaks.</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/006m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Lorry Mion </a>
                          <div class="list-group-item-description">Revert complex calculation</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/026m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Parke Moneypenny </a>
                          <div class="list-group-item-description">Add add and subtract function</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/013m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Elston Muffett </a>
                          <div class="list-group-item-description">Update normalizeDataKey to match the spec (#29609)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/006f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Avivah Mugleston </a>
                          <div class="list-group-item-description">Remove redundant &quot;Navbar divider&quot; from &quot;Contents&quot; (#29601)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">O</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/022m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Parker Oaten </a>
                          <div class="list-group-item-description">Update .form-check to properly support gradients when enabled (#29338)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">P</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/023m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Johannes Paternoster </a>
                          <div class="list-group-item-description">v5: Simplify navbars by requiring containers (#29339)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/004m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Egan Poetz </a>
                          <div class="list-group-item-description">Remove unneeded ESLint suppression and regenerate lock file (#29593)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">R</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/012m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Ban Rzehor </a>
                          <div class="list-group-item-description">remove superflous transition parameter (#29595)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">S</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/063m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Haskel Shelper </a>
                          <div class="list-group-item-description">Added animation when modal backdrop is static (#29516)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/016m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Wilburt Siegertsz </a>
                          <div class="list-group-item-description">Add configurable button text wrapping (#29554)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/002f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Kellie Skingley </a>
                          <div class="list-group-item-description">Enable eslint no-console rule except for build directory (#29585)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Dunn Slane </a>
                          <div class="list-group-item-description">Regenerate package-lock.json (#29571)</div>
                        </div>
                      </div>

                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/010f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Cesya Spritt </a>
                          <div class="list-group-item-description">Fix one dev npm vulnerability. (#29568)</div>
                        </div>
                      </div>

                      <div class="list-group-header sticky-top">U</div>
                      <div class="list-group-item">
                        <div class="list-group-item-media">
                          <a href="#" tabindex="-1" aria-hidden="true">
                            <span style="background-image: url(/tabler/static/avatars/009f.jpg)" class="avatar"></span>
                          </a>
                        </div>
                        <div class="list-group-item-content">
                          <a href="#" class="list-group-item-title"> Flossi Uttley </a>
                          <div class="list-group-item-description">Update hugo-bin to v0.47.0 (Hugo 0.59.0) (#29562)</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Top users</h2>
                    </div>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-6">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto" tabindex="-1" aria-hidden="true">
                              <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar"><span class="badge bg-red" role="img" aria-label="Busy"></span></span>
                            </a>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Paweł Kuna </a>
                              <div class="text-secondary text-truncate mt-n1">2 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto" tabindex="-1" aria-hidden="true">
                              <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar"><span class="badge bg-yellow" role="img" aria-label="Away"></span></span>
                            </a>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Jeffie Lewzey </a>
                              <div class="text-secondary text-truncate mt-n1">now</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto" tabindex="-1" aria-hidden="true">
                              <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar"><span class="badge bg-secondary" role="img" aria-label="Offline"></span></span>
                            </a>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Mallory Hulme </a>
                              <div class="text-secondary text-truncate mt-n1">now</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto" tabindex="-1" aria-hidden="true">
                              <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar"><span class="badge bg-green" role="img" aria-label="Online"></span></span>
                            </a>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Dunn Slane </a>
                              <div class="text-secondary text-truncate mt-n1">6 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto" tabindex="-1" aria-hidden="true">
                              <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar"><span class="badge bg-green" role="img" aria-label="Online"></span></span>
                            </a>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Emmy Levet </a>
                              <div class="text-secondary text-truncate mt-n1">now</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto" tabindex="-1" aria-hidden="true">
                              <span style="background-image: url(/tabler/static/avatars/001f.jpg)" class="avatar"><span class="badge bg-yellow" role="img" aria-label="Away"></span></span>
                            </a>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Maryjo Lebarree </a>
                              <div class="text-secondary text-truncate mt-n1">2 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto" tabindex="-1" aria-hidden="true">
                              <span style="background-image: url(/tabler/static/avatars/004m.jpg)" class="avatar"><span class="badge bg-green" role="img" aria-label="Online"></span></span>
                            </a>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Egan Poetz </a>
                              <div class="text-secondary text-truncate mt-n1">4 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto" tabindex="-1" aria-hidden="true">
                              <span style="background-image: url(/tabler/static/avatars/002f.jpg)" class="avatar"><span class="badge bg-yellow" role="img" aria-label="Away"></span></span>
                            </a>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Kellie Skingley </a>
                              <div class="text-secondary text-truncate mt-n1">6 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto" tabindex="-1" aria-hidden="true">
                              <span style="background-image: url(/tabler/static/avatars/003f.jpg)" class="avatar"><span class="badge bg-yellow" role="img" aria-label="Away"></span></span>
                            </a>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Christabel Charlwood </a>
                              <div class="text-secondary text-truncate mt-n1">now</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto" tabindex="-1" aria-hidden="true">
                              <span style="background-image: url(/tabler/static/avatars/063m.jpg)" class="avatar"><span class="badge bg-secondary" role="img" aria-label="Offline"></span></span>
                            </a>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Haskel Shelper </a>
                              <div class="text-secondary text-truncate mt-n1">now</div>
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
          <!-- END PAGE BODY -->
@endverbatim
<x-slot:scripts>
@verbatim
<script src="/tabler/libs/sortablejs/Sortable.min.js" defer></script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
