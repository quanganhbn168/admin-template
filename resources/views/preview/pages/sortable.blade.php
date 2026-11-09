<x-preview.page :title='"Sortable"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Sortable</h1>

                  <div class="text-secondary mt-1">Drag and drop to reorder lists, table rows, grids and kanban boards with SortableJS.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/sortable" target="_blank" rel="noopener" class="link-secondary">
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
                  <h2 class="page-section-title">Basics</h2>
                  <p class="page-section-description">Add data-sortable with SortableJS options as JSON to any list to make its children draggable.</p>
                </div>
                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Basic usage</h3>
                        <p class="card-subtitle">Drag to reorder items within a single list.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul data-sortable='{"animation":150}' class="list-group">
                        <li class="list-group-item">Element A</li>
                        <li class="list-group-item">Element B</li>
                        <li class="list-group-item">Element C</li>
                        <li class="list-group-item">Element D</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Two lists with drag and drop</h3>
                        <p class="card-subtitle">Give lists the same <code>group</code> to move items between them.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <ul data-sortable='{"group":"shared","animation":150}' class="list-group">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                            <li class="list-group-item">Item 3</li>
                          </ul>
                        </div>
                        <div class="col-sm-6">
                          <ul data-sortable='{"group":"shared","animation":150}' class="list-group">
                            <li class="list-group-item">Item A</li>
                            <li class="list-group-item">Item B</li>
                            <li class="list-group-item">Item C</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Horizontal lists</h3>
                        <p class="card-subtitle">Set <code>direction</code> to <code>horizontal</code> for rows of tags, and drag them between the two rows.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="subheader mb-2">Selected</div>
                      <div class="tag-list mb-4" data-sortable='{"group":"topics","animation":150,"direction":"horizontal","emptyInsertThreshold":40}'><span class="tag cursor-move">Design</span><span class="tag cursor-move">Development</span><span class="tag cursor-move">Marketing</span></div>
                      <div class="subheader mb-2">Available</div>
                      <div class="tag-list" data-sortable='{"group":"topics","animation":150,"direction":"horizontal","emptyInsertThreshold":40}'>
                        <span class="tag cursor-move">Sales</span><span class="tag cursor-move">Support</span><span class="tag cursor-move">Analytics</span><span class="tag cursor-move">Legal</span><span class="tag cursor-move">Finance</span><span class="tag cursor-move">Research</span
                        ><span class="tag cursor-move">Security</span><span class="tag cursor-move">Hiring</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Fixed items</h3>
                        <p class="card-subtitle">Set <code>filter</code> to a selector to make matching items impossible to drag.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul data-sortable='{"animation":150,"filter":".sortable-fixed"}' class="list-group">
                        <li class="list-group-item sortable-fixed text-secondary d-flex align-items-center gap-2">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                          </svg>
                          Inbox (pinned)
                        </li>
                        <li class="list-group-item">Projects</li>
                        <li class="list-group-item">Reports</li>
                        <li class="list-group-item">Archive</li>
                        <li class="list-group-item sortable-fixed text-secondary d-flex align-items-center gap-2">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                          </svg>
                          Trash (pinned)
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <h2 class="page-section-title">Handles and tables</h2>
                  <p class="page-section-description">Limit dragging to a grip icon, or reorder the rows of a table.</p>
                </div>
                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Drag handle</h3>
                        <p class="card-subtitle">Set <code>handle</code> so only the grip starts a drag, and the rest of the row stays clickable.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul data-sortable='{"animation":150,"handle":".sortable-handle"}' class="list-group">
                        <li class="list-group-item">
                          <div class="row align-items-center g-3">
                            <div class="col-auto">
                              <span class="sortable-handle cursor-move text-secondary" aria-hidden="true">
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
                            </div>
                            <div class="col-auto">
                              <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar"></span>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Paweł Kuna </a>
                              <div class="text-secondary text-truncate">UI Designer</div>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row align-items-center g-3">
                            <div class="col-auto">
                              <span class="sortable-handle cursor-move text-secondary" aria-hidden="true">
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
                            </div>
                            <div class="col-auto">
                              <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar"></span>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Jeffie Lewzey </a>
                              <div class="text-secondary text-truncate">Chemical Engineer</div>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row align-items-center g-3">
                            <div class="col-auto">
                              <span class="sortable-handle cursor-move text-secondary" aria-hidden="true">
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
                            </div>
                            <div class="col-auto">
                              <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar"></span>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Mallory Hulme </a>
                              <div class="text-secondary text-truncate">Geologist IV</div>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row align-items-center g-3">
                            <div class="col-auto">
                              <span class="sortable-handle cursor-move text-secondary" aria-hidden="true">
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
                            </div>
                            <div class="col-auto">
                              <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar"></span>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Dunn Slane </a>
                              <div class="text-secondary text-truncate">Research Nurse</div>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row align-items-center g-3">
                            <div class="col-auto">
                              <span class="sortable-handle cursor-move text-secondary" aria-hidden="true">
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
                            </div>
                            <div class="col-auto">
                              <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar"></span>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-reset d-block text-truncate"> Emmy Levet </a>
                              <div class="text-secondary text-truncate">VP Product Management</div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Sortable table</h3>
                        <p class="card-subtitle">Put <code>data-sortable</code> on the <code>tbody</code> to reorder rows.</p>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table">
                        <thead>
                          <tr>
                            <th class="w-1"><span class="visually-hidden">Drag</span></th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Country</th>
                          </tr>
                        </thead>
                        <tbody data-sortable='{"animation":150,"handle":".sortable-handle"}'>
                          <tr>
                            <td>
                              <span class="sortable-handle cursor-move text-secondary" aria-hidden="true">
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
                            </td>
                            <td>Paweł Kuna</td>
                            <td class="text-secondary">UI Designer</td>
                            <td class="text-secondary">China</td>
                          </tr>
                          <tr>
                            <td>
                              <span class="sortable-handle cursor-move text-secondary" aria-hidden="true">
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
                            </td>
                            <td>Jeffie Lewzey</td>
                            <td class="text-secondary">Chemical Engineer</td>
                            <td class="text-secondary">Brazil</td>
                          </tr>
                          <tr>
                            <td>
                              <span class="sortable-handle cursor-move text-secondary" aria-hidden="true">
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
                            </td>
                            <td>Mallory Hulme</td>
                            <td class="text-secondary">Geologist IV</td>
                            <td class="text-secondary">Indonesia</td>
                          </tr>
                          <tr>
                            <td>
                              <span class="sortable-handle cursor-move text-secondary" aria-hidden="true">
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
                            </td>
                            <td>Dunn Slane</td>
                            <td class="text-secondary">Research Nurse</td>
                            <td class="text-secondary">China</td>
                          </tr>
                          <tr>
                            <td>
                              <span class="sortable-handle cursor-move text-secondary" aria-hidden="true">
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
                            </td>
                            <td>Emmy Levet</td>
                            <td class="text-secondary">VP Product Management</td>
                            <td class="text-secondary">Indonesia</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Grid of avatars</h3>
                        <p class="card-subtitle">Sortable also works on a wrapping layout, not just on vertical lists.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex flex-wrap gap-3" data-sortable='{"animation":150}'>
                        <div class="card card-sm cursor-move flex-fill">
                          <div class="card-body text-center">
                            <span style="background-image: url(/tabler/static/avatars/001f.jpg)" class="avatar avatar-lg mb-2"></span>
                            <div class="text-truncate">Maryjo</div>
                          </div>
                        </div>
                        <div class="card card-sm cursor-move flex-fill">
                          <div class="card-body text-center">
                            <span style="background-image: url(/tabler/static/avatars/004m.jpg)" class="avatar avatar-lg mb-2"></span>
                            <div class="text-truncate">Egan</div>
                          </div>
                        </div>
                        <div class="card card-sm cursor-move flex-fill">
                          <div class="card-body text-center">
                            <span style="background-image: url(/tabler/static/avatars/002f.jpg)" class="avatar avatar-lg mb-2"></span>
                            <div class="text-truncate">Kellie</div>
                          </div>
                        </div>
                        <div class="card card-sm cursor-move flex-fill">
                          <div class="card-body text-center">
                            <span style="background-image: url(/tabler/static/avatars/003f.jpg)" class="avatar avatar-lg mb-2"></span>
                            <div class="text-truncate">Christabel</div>
                          </div>
                        </div>
                        <div class="card card-sm cursor-move flex-fill">
                          <div class="card-body text-center">
                            <span style="background-image: url(/tabler/static/avatars/063m.jpg)" class="avatar avatar-lg mb-2"></span>
                            <div class="text-truncate">Haskel</div>
                          </div>
                        </div>
                        <div class="card card-sm cursor-move flex-fill">
                          <div class="card-body text-center">
                            <span style="background-image: url(/tabler/static/avatars/006m.jpg)" class="avatar avatar-lg mb-2"></span>
                            <div class="text-truncate">Lorry</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Disabled list</h3>
                        <p class="card-subtitle">Set <code>disabled</code> to <code>true</code> to lock a list, for example while the user has no edit rights.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul data-sortable='{"animation":150,"disabled":true}' class="list-group">
                        <li class="list-group-item d-flex align-items-center gap-2">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                          </svg>
                          Read-only item 1
                        </li>
                        <li class="list-group-item d-flex align-items-center gap-2">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                          </svg>
                          Read-only item 2
                        </li>
                        <li class="list-group-item d-flex align-items-center gap-2">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                          </svg>
                          Read-only item 3
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <h2 class="page-section-title">Boards</h2>
                  <p class="page-section-description">Connect several lists to build a kanban board, a pick list or a nested tree.</p>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Kanban board</h3>
                        <p class="card-subtitle">Drag tasks between columns that share one <code>group</code>. Set <code>forceFallback</code> to <code>true</code> to drag a tilted copy with a shadow instead of the browser preview.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-md-4">
                          <h4 class="mb-2">Upcoming</h4>
                          <div class="d-flex flex-column gap-2" data-sortable='{"group":"kanban","animation":150,"emptyInsertThreshold":40,"forceFallback":true}'>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Improve email marketing strategy</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-orange" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                                    Medium
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Develop new product video</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-red" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar active"></span></span>
                                    High
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Conduct user interviews for new feature</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-blue" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar"></span><span class="signal-bar"></span></span>
                                    Low
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Create social media content calendar</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-orange" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                                    Medium
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/001f.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <h4 class="mb-2">In Progress</h4>
                          <div class="d-flex flex-column gap-2" data-sortable='{"group":"kanban","animation":150,"emptyInsertThreshold":40,"forceFallback":true}'>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Implement new analytics tracking</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-blue" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar"></span><span class="signal-bar"></span></span>
                                    Low
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Design new marketing campaign</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-red" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar active"></span></span>
                                    High
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Conduct A/B testing on landing page</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-blue" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar"></span><span class="signal-bar"></span></span>
                                    Low
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Implement user authentication system</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-red" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar active"></span></span>
                                    High
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/003f.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <h4 class="mb-2">Completed</h4>
                          <div class="d-flex flex-column gap-2" data-sortable='{"group":"kanban","animation":150,"emptyInsertThreshold":40,"forceFallback":true}'>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Optimize website performance</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-blue" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar"></span><span class="signal-bar"></span></span>
                                    Low
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Develop mobile app prototype</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-orange" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                                    Medium
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Conduct user research interviews</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-blue" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar"></span><span class="signal-bar"></span></span>
                                    Low
                                  </span>
                                  <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs"></span>
                                </div>
                              </div>
                            </div>
                            <div class="card card-sm cursor-move">
                              <div class="card-body">
                                <div class="mb-3">Migrate database to new server</div>
                                <div class="d-flex align-items-center justify-content-between">
                                  <span class="d-flex align-items-center gap-2 text-secondary">
                                    <span class="signal signal-orange" aria-hidden="true"><span class="signal-bar active"></span><span class="signal-bar active"></span><span class="signal-bar"></span></span>
                                    Medium
                                  </span>
                                  <span class="avatar avatar-xs">SA</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Clone from a list</h3>
                        <p class="card-subtitle">Use <code>pull: "clone"</code> and <code>put: false</code> on the source so items are copied, not moved.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <div class="subheader mb-2">Templates</div>
                          <ul data-sortable='{"group":{"name":"clone","pull":"clone","put":false},"sort":false,"animation":150}' class="list-group">
                            <li class="list-group-item">Heading</li>
                            <li class="list-group-item">Paragraph</li>
                            <li class="list-group-item">Image</li>
                            <li class="list-group-item">Button</li>
                          </ul>
                        </div>
                        <div class="col-sm-6">
                          <div class="subheader mb-2">Page</div>
                          <ul data-sortable='{"group":"clone","animation":150}' class="list-group">
                            <li class="list-group-item">Paragraph</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">One-way transfer</h3>
                        <p class="card-subtitle">Set <code>put: false</code> on a list to make it a source only, and use it to build a pick list.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <div class="subheader mb-2">Available</div>
                          <ul data-sortable='{"group":{"name":"transfer","put":false},"sort":false,"animation":150}' class="list-group">
                            <li class="list-group-item">Email alerts</li>
                            <li class="list-group-item">SMS alerts</li>
                            <li class="list-group-item">Weekly digest</li>
                            <li class="list-group-item">Push notifications</li>
                          </ul>
                        </div>
                        <div class="col-sm-6">
                          <div class="subheader mb-2">Selected</div>
                          <ul data-sortable='{"group":"transfer","animation":150}' class="list-group">
                            <li class="list-group-item">In-app messages</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Nested lists</h3>
                        <p class="card-subtitle">Put a sortable list inside an item and give all lists one <code>group</code> to move items between levels.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul data-sortable='{"group":"nested","animation":150,"forceFallback":true,"fallbackOnBody":true,"swapThreshold":0.65}' class="list-group">
                        <li class="list-group-item">
                          <div>Design</div>
                          <ul data-sortable='{"group":"nested","animation":150,"forceFallback":true,"fallbackOnBody":true,"swapThreshold":0.65}' class="list-group mt-2">
                            <li class="list-group-item">Wireframes</li>
                            <li class="list-group-item">Prototype</li>
                          </ul>
                        </li>
                        <li class="list-group-item">
                          <div>Development</div>
                          <ul data-sortable='{"group":"nested","animation":150,"forceFallback":true,"fallbackOnBody":true,"swapThreshold":0.65}' class="list-group mt-2">
                            <li class="list-group-item">Frontend</li>
                            <li class="list-group-item">Backend</li>
                            <li class="list-group-item">Tests</li>
                          </ul>
                        </li>
                        <li class="list-group-item">
                          <div>Launch</div>
                          <ul data-sortable='{"group":"nested","animation":150,"forceFallback":true,"fallbackOnBody":true,"swapThreshold":0.65}' class="list-group mt-2">
                            <li class="list-group-item">Release notes</li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <h2 class="page-section-title">Selection and swapping</h2>
                  <p class="page-section-description">The bundled SortableJS build also ships the MultiDrag and Swap plugins.</p>
                </div>
                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Multiple selection</h3>
                        <p class="card-subtitle">Set <code>multiDrag</code> to <code>true</code>. Hold <kbd>Ctrl</kbd> or <kbd>⌘</kbd> and click to select items, then drag them together.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul data-sortable='{"multiDrag":true,"animation":150}' class="list-group">
                        <li class="list-group-item">Invoice #1001</li>
                        <li class="list-group-item">Invoice #1002</li>
                        <li class="list-group-item">Invoice #1003</li>
                        <li class="list-group-item">Invoice #1004</li>
                        <li class="list-group-item">Invoice #1005</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div>
                        <h3 class="card-title">Swap</h3>
                        <p class="card-subtitle">Set <code>swap</code> to <code>true</code> to exchange two items instead of shifting the rest.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul data-sortable='{"swap":true,"animation":150}' class="list-group">
                        <li class="list-group-item">First place</li>
                        <li class="list-group-item">Second place</li>
                        <li class="list-group-item">Third place</li>
                        <li class="list-group-item">Fourth place</li>
                      </ul>
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
