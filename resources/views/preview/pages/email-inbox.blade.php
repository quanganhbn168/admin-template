<x-preview.page :title='"Email inbox"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Inbox</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="card">
                <div class="row g-0">
                  <div class="col-xxl-3 border-end">
                    <!-- BEGIN OFFCANVAS -->
                    <div class="offcanvas-xxl offcanvas-start h-100" tabindex="-1" role="dialog" id="emailSidebaroffcanvas">
                      <div class="card-body h-100">
                        <div>
                          <button type="button" data-bs-toggle="modal" data-bs-target="#modal-new-email" class="btn btn-primary d-none d-sm-block w-100">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/pencil -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                              <path d="M13.5 6.5l4 4" /></svg
                            >Compose
                          </button>
                        </div>

                        <div class="mt-3 nav nav-vertical nav-pills">
                          <a href="#" class="nav-link active">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/inbox -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M4 6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2l0 -12" />
                              <path d="M4 13h3l3 3h4l3 -3h3" />
                            </svg>
                            Inbox<span class="badge bg-primary-lt ms-auto">20</span>
                          </a>
                          <a href="#" class="nav-link"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" /></svg
                            >Starred</a
                          >
                          <a href="#" class="nav-link"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                              <path d="M12 7v5l3 3" /></svg
                            >Snoozed</a
                          >
                          <a href="#" class="nav-link"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/file -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                              <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" /></svg
                            >Draft<span class="badge bg-info-lt ms-auto">32</span></a
                          >
                          <a href="#" class="nav-link"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/mail-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M12 19h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v5.5" />
                              <path d="M19 22v-6" />
                              <path d="M22 19l-3 -3l-3 3" />
                              <path d="M3 7l9 6l9 -6" /></svg
                            >Sent Mail</a
                          >
                          <a href="#" class="nav-link"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M4 7l16 0" />
                              <path d="M10 11l0 6" />
                              <path d="M14 11l0 6" />
                              <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                              <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                            >Trash</a
                          >
                          <a href="#" class="nav-link"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/tag -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M6.5 7.5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3" /></svg
                            >Important</a
                          >
                          <a href="#" class="nav-link"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/alert-octagon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path
                                d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0"
                              />
                              <path d="M12 8v4" />
                              <path d="M12 16h.01" /></svg
                            >Spam</a
                          >
                        </div>

                        <div class="mt-4">
                          <h6 class="subheader">Labels</h6>
                          <div class="mt-2 nav nav-vertical nav-pills">
                            <a href="#" class="nav-link"> <span class="badge bg-info me-2"></span> Updates </a><a href="#" class="nav-link"> <span class="badge bg-warning me-2"></span> Friends </a><a href="#" class="nav-link"> <span class="badge bg-success me-2"></span> Family </a
                            ><a href="#" class="nav-link"> <span class="badge bg-primary me-2"></span> Social </a><a href="#" class="nav-link"> <span class="badge bg-danger me-2"></span> Important </a><a href="#" class="nav-link"> <span class="badge bg-purple me-2"></span> Promotions </a>
                          </div>
                        </div>

                        <div class="mt-5">
                          <h6 class="subheader">Storage</h6>
                          <div class="progress my-2">
                            <div class="progress-bar" style="width: 46%" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" aria-label="46% Complete">
                              <span class="visually-hidden">46% Complete</span>
                            </div>
                          </div>

                          <p class="text-muted mb-0">7.02 GB (46%) of 15 GB used</p>
                        </div>
                      </div>
                    </div>
                    <!-- END OFFCANVAS -->
                  </div>

                  <div class="col-xxl-9">
                    <div class="card-body">
                      <div class="d-flex flex-wrap align-items-center gap-2">
                        <div class="d-xxl-none d-inline-flex">
                          <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#emailSidebaroffcanvas" aria-controls="emailSidebaroffcanvas" aria-label="Show folders">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/menu-2 -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M4 6l16 0" />
                              <path d="M4 12l16 0" />
                              <path d="M4 18l16 0" />
                            </svg>
                          </button>
                        </div>

                        <div class="btn-group" role="group">
                          <button type="button" aria-label="Archive" class="btn btn-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                              <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                              <path d="M10 12l4 0" />
                            </svg>
                          </button>
                          <button type="button" aria-label="Report spam" class="btn btn-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/alert-octagon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path
                                d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0"
                              />
                              <path d="M12 8v4" />
                              <path d="M12 16h.01" />
                            </svg>
                          </button>
                          <button type="button" aria-label="Delete" class="btn btn-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M4 7l16 0" />
                              <path d="M10 11l0 6" />
                              <path d="M14 11l0 6" />
                              <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                              <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                          </button>
                        </div>

                        <div class="btn-group" role="group">
                          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Move to folder">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/folder -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                            </svg>
                          </button>
                          <div class="dropdown-menu">
                            <span class="dropdown-header">Move to</span>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Promotions</a>
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Forums</a>
                          </div>
                        </div>

                        <div class="btn-group" role="group">
                          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Add label">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/tag -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M6.5 7.5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3" />
                            </svg>
                          </button>
                          <div class="dropdown-menu">
                            <span class="dropdown-header">Label as:</span>
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Promotions</a>
                            <a class="dropdown-item" href="#">Forums</a>
                          </div>
                        </div>

                        <div class="btn-group ms-auto" role="group">
                          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M4 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M18 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                            More
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Mark as Unread</a>
                            <a class="dropdown-item" href="#">Add to Tasks</a>
                            <a class="dropdown-item" href="#">Add Star</a>
                            <a class="dropdown-item" href="#">Mute</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="list-group list-group-flush list-group-hoverable">
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Direct message on Twitter"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions show" aria-label="Remove star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-yellow">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Lucas, me (4) </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Direct message on Twitter </a>
                              <span class="text-secondary"> – @LucasKriebel - Very cool :) You have a new direct message. Open Twitter to read and reply now.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-primary" title="Social" aria-label="Social"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">27 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Your ticket #48213 has been updated"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Acme Support </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Your ticket #48213 has been updated </a>
                              <span class="text-secondary"> – Hi, we&#39;ve added a detailed note to your request regarding billing. Please review the update and let us know if anything looks off.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-info" title="Updates" aria-label="Updates"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">26 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "10 growth tactics you can try today"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Marketing Weekly </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> 10 growth tactics you can try today </a>
                              <span class="text-secondary"> – We curated a list of actionable ideas from top marketers to boost acquisition, retention, and activation this quarter.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-purple" title="Promotions" aria-label="Promotions"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">25 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "[tabler] New issue assigned to you"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions show" aria-label="Remove star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-yellow">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> GitHub </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> [tabler] New issue assigned to you </a>
                              <span class="text-secondary"> – Issue #3294: Update email inbox page to use data file. Please triage, add labels, and provide an estimate.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block"><span class="badge bg-danger" title="Important" aria-label="Important"></span><span class="badge bg-info" title="Updates" aria-label="Updates"></span></div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">25 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Payout scheduled"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> me (2), Stripe </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Payout scheduled </a>
                              <span class="text-secondary"> – A payout of $1,248.32 is scheduled for tomorrow. Funds typically arrive within 2 business days.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-info" title="Updates" aria-label="Updates"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">24 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "You were invited to a file"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Figma </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> You were invited to a file </a>
                              <span class="text-secondary"> – Anna shared ‘Inbox redesign v3’ with you. Review the latest components and leave feedback in comments.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-primary" title="Social" aria-label="Social"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">24 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Event confirmed for Fri 3 PM"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Calendly </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Event confirmed for Fri 3 PM </a>
                              <span class="text-secondary"> – Your meeting with Chris is confirmed for this Friday at 3 PM. A calendar invite with the video link was attached.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-info" title="Updates" aria-label="Updates"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">23 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "New followers this week"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Twitter </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> New followers this week </a>
                              <span class="text-secondary"> – You gained 27 new followers. See who followed you and engage with their posts to grow reach.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-primary" title="Social" aria-label="Social"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">23 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Today&apos;s top launches"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Product Hunt </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Today&#39;s top launches </a>
                              <span class="text-secondary"> – Catch up on trending products you might like. Today&#39;s list features tools for design and developer productivity.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-purple" title="Promotions" aria-label="Promotions"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">22 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Weekly summary: Inbox project"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Notion </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Weekly summary: Inbox project </a>
                              <span class="text-secondary"> – 3 tasks completed, 2 comments, 1 new page added. Click through to see highlights and next steps.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-info" title="Updates" aria-label="Updates"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">22 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Billing alert threshold reached"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions show" aria-label="Remove star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-yellow">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> AWS </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Billing alert threshold reached </a>
                              <span class="text-secondary"> – Your usage exceeded the alert threshold for this month. Consider upgrading your plan or adjusting limits.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-danger" title="Important" aria-label="Important"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">21 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Someone viewed your profile"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> LinkedIn </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Someone viewed your profile </a>
                              <span class="text-secondary"> – See who looked at your profile this week. Strengthen your network by following up with recent viewers.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-primary" title="Social" aria-label="Social"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">21 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Alert for: Tabler UI"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Google Alerts </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Alert for: Tabler UI </a>
                              <span class="text-secondary"> – New articles mentioning Tabler UI were found. Skim the summaries and set alerts for related keywords.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-info" title="Updates" aria-label="Updates"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">20 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Stories you might like"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Medium </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Stories you might like </a>
                              <span class="text-secondary"> – Handpicked stories based on your reading history. Discover deep dives on design systems and UX workflows.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-purple" title="Promotions" aria-label="Promotions"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">20 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Missed messages in #design"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Slack </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Missed messages in #design </a>
                              <span class="text-secondary"> – You have 14 unread messages across 3 channels. Catch up now to keep the conversation moving.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-info" title="Updates" aria-label="Updates"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">19 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "New error: TypeError in preview"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions show" aria-label="Remove star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-yellow">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Sentry </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> New error: TypeError in preview </a>
                              <span class="text-secondary"> – Tabler preview threw TypeError: cannot read properties of undefined. Investigate stack trace and recent commits.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block"><span class="badge bg-danger" title="Important" aria-label="Important"></span><span class="badge bg-info" title="Updates" aria-label="Updates"></span></div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">19 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "New shots from designers you follow"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Dribbble </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> New shots from designers you follow </a>
                              <span class="text-secondary"> – A fresh batch of inspiration is here. Explore new shots and save your favorites to collections.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-primary" title="Social" aria-label="Social"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">18 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Plan your next getaway"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Airbnb </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Plan your next getaway </a>
                              <span class="text-secondary"> – Deals on stays you&#39;ll love this fall. Flexible dates and free cancellation on many options.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-purple" title="Promotions" aria-label="Promotions"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">18 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Reminder: Standup in 10 minutes"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Google Calendar </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Reminder: Standup in 10 minutes </a>
                              <span class="text-secondary"> – Daily standup starts at 9:30 AM. Share yesterday&#39;s progress, today&#39;s plan, and blockers.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-info" title="Updates" aria-label="Updates"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">17 Aug</div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center g-2">
                            <div class="col-auto">
                              <input type="checkbox" class="form-check-input m-0" aria-label='Select "Exclusive 25% off for you"' />
                            </div>
                            <div class="col-auto">
                              <a href="#" class="list-group-item-actions" aria-label="Add star">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                                </svg>
                              </a>
                            </div>
                            <div class="col-3 col-lg-2 text-truncate">
                              <a href="#" class="text-body"> Superstore </a>
                            </div>
                            <div class="col text-truncate">
                              <a href="#" class="text-body"> Exclusive 25% off for you </a>
                              <span class="text-secondary"> – Save big on electronics this weekend only. Limited quantities—use code WEEKEND25 at checkout.</span>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                              <span class="badge bg-purple" title="Promotions" aria-label="Promotions"></span>
                            </div>
                            <div class="col-auto d-none d-md-block">
                              <div class="list-group-item-actions d-flex gap-2">
                                <a href="#" class="text-secondary" aria-label="Archive">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/archive -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <path d="M10 12l4 0" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Delete">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Mark as read">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/mail-opened -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 19l6 -6" />
                                    <path d="M15 13l6 6" />
                                  </svg>
                                </a>
                                <a href="#" class="text-secondary" aria-label="Snooze">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                            <div class="col-auto text-secondary text-end">16 Aug</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-7 mt-1">Showing 1 - 20 of 20</div>
                        <div class="col-5">
                          <div class="btn-group float-end" role="group">
                            <button type="button" class="btn btn-icon" aria-label="Previous page">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M15 6l-6 6l6 6" /></svg>
                            </button>
                            <button type="button" class="btn btn-icon" aria-label="Next page">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M9 6l6 6l-6 6" /></svg>
                            </button>
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
@verbatim
<!-- BEGIN PAGE MODALS -->

    <!-- BEGIN MODAL -->
    <div class="modal modal-blur fade" id="modal-new-email" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-new-email-title" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="modal-new-email-title">New Message</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label class="form-label" for="new-email-to"> To </label>

                <input type="text" id="new-email-to" class="form-control" placeholder="Example@email.com" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="new-email-subject"> Subject </label>

                <input type="text" id="new-email-subject" class="form-control" placeholder="Your subject" />
              </div>
              <div>
                <label class="form-label" for="hugerte-email-message"> Message </label>

                <textarea id="hugerte-email-message">Hello, <b>Tabler</b>!</textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
              <!-- Download SVG icon from http://tabler.io/icons/icon/send -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                <path d="M10 14l11 -11" />
                <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
              </svg>
              Send Message
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL -->

    <!-- END PAGE MODALS -->
@endverbatim
<x-slot:scripts>
@verbatim
<script src="/tabler/libs/hugerte/hugerte.min.js" defer></script>
<script>
      ;(function () {
        const selector = '#hugerte-email-message'

        function initWysiwyg() {
          const options = {
            selector,
            height: 300,
            menubar: false,
            statusbar: false,
            plugins: ['advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'],
            toolbar: 'undo redo | formatselect | ' + 'bold italic backcolor | alignleft aligncenter ' + 'alignright alignjustify | bullist numlist outdent indent | ' + 'removeformat',
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }',
          }

          const theme = document.documentElement.getAttribute('data-bs-theme')
          if (theme === 'dark') {
            options.skin = 'oxide-dark'
            options.content_css = 'dark'
          }

          hugeRTE.init(options)
        }

        document.readyState !== 'loading' ? initWysiwyg() : document.addEventListener('DOMContentLoaded', initWysiwyg, { once: true })
      })()
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
