<x-preview.page :title='"Card actions"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Card actions</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/card" target="_blank" rel="noopener" class="link-secondary">
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
                    <div class="card-header">
                      <div>
                        <h2 class="card-title">Sample card</h2>
                        <p class="card-subtitle">A blank card with a title and no actions.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-100 border rounded" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" fill="transparent" stroke="var(--tblr-border-color, #b8cef1)">
                        <line x1="0" y1="0" x2="400" y2="200"></line>
                        <line x1="0" y1="200" x2="400" y2="0"></line>
                      </svg>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <div>
                        <h2 class="card-title">Card with action</h2>
                        <p class="card-subtitle">Add a single action button to the header.</p>
                      </div>
                      <div class="card-actions">
                        <button type="button" class="btn btn-primary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" /></svg
                          >Add new
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-100 border rounded" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" fill="transparent" stroke="var(--tblr-border-color, #b8cef1)">
                        <line x1="0" y1="0" x2="400" y2="200"></line>
                        <line x1="0" y1="200" x2="400" y2="0"></line>
                      </svg>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <div>
                        <h2 class="card-title">Card title</h2>
                        <p class="card-subtitle">Add two secondary action buttons to the header.</p>
                      </div>
                      <div class="card-actions">
                        <button type="button" class="btn">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/phone -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg
                          >Phone
                        </button>
                        <button type="button" class="btn">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                            <path d="M3 7l9 6l9 -6" /></svg
                          >Email
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-100 border rounded" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" fill="transparent" stroke="var(--tblr-border-color, #b8cef1)">
                        <line x1="0" y1="0" x2="400" y2="200"></line>
                        <line x1="0" y1="200" x2="400" y2="0"></line>
                      </svg>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <div>
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar"></span>
                          </div>
                          <div class="col">
                            <h2 class="card-title">Paweł Kuna</h2>
                            <div class="card-subtitle">UI Designer</div>
                          </div>
                        </div>
                      </div>
                      <div class="card-actions">
                        <button type="button" class="btn">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/phone -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg
                          >Phone
                        </button>
                        <button type="button" class="btn">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                            <path d="M3 7l9 6l9 -6" /></svg
                          >Email
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-100 border rounded" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" fill="transparent" stroke="var(--tblr-border-color, #b8cef1)">
                        <line x1="0" y1="0" x2="400" y2="200"></line>
                        <line x1="0" y1="200" x2="400" y2="0"></line>
                      </svg>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <div>
                        <h2 class="card-title">With description</h2>
                        <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      </div>
                    </div>
                    <div class="card-body">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-100 border rounded" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" fill="transparent" stroke="var(--tblr-border-color, #b8cef1)">
                        <line x1="0" y1="0" x2="400" y2="200"></line>
                        <line x1="0" y1="200" x2="400" y2="0"></line>
                      </svg>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <div>
                        <h2 class="card-title">With description and action</h2>
                        <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      </div>
                      <div class="card-actions">
                        <button type="button" class="btn btn-primary">Create new job</button>
                      </div>
                    </div>
                    <div class="card-body">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-100 border rounded" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" fill="transparent" stroke="var(--tblr-border-color, #b8cef1)">
                        <line x1="0" y1="0" x2="400" y2="200"></line>
                        <line x1="0" y1="200" x2="400" y2="0"></line>
                      </svg>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <div>
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar"></span>
                          </div>
                          <div class="col">
                            <h2 class="card-title">Dunn Slane</h2>
                            <div class="card-subtitle">Research Nurse</div>
                          </div>
                        </div>
                      </div>
                      <div class="card-actions">
                        <div class="dropdown">
                          <a href="#" class="btn btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Actions"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M11 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M11 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg
                          ></a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit user</a>
                            <a class="dropdown-item" href="#">Change permissions</a>
                            <a class="dropdown-item text-danger" href="#">Delete user</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-100 border rounded" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" fill="transparent" stroke="var(--tblr-border-color, #b8cef1)">
                        <line x1="0" y1="0" x2="400" y2="200"></line>
                        <line x1="0" y1="200" x2="400" y2="0"></line>
                      </svg>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <div>
                        <h2 class="card-title">Icon toolbar</h2>
                        <p class="card-subtitle">A compact row of icon-only actions in the header.</p>
                      </div>
                      <div class="card-actions btn-actions">
                        <a href="#" class="btn btn-action" aria-label="Refresh"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/refresh -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                            <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" /></svg
                        ></a>
                        <a href="#" class="btn btn-action" aria-label="Collapse"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/chevron-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 15l6 -6l6 6" /></svg
                        ></a>
                        <a href="#" class="btn btn-action" aria-label="More actions"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            <path d="M11 19a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            <path d="M11 5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg
                        ></a>
                        <a href="#" class="btn btn-action" aria-label="Close"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" /></svg
                        ></a>
                      </div>
                    </div>
                    <div class="card-body">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-100 border rounded" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" fill="transparent" stroke="var(--tblr-border-color, #b8cef1)">
                        <line x1="0" y1="0" x2="400" y2="200"></line>
                        <line x1="0" y1="200" x2="400" y2="0"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
