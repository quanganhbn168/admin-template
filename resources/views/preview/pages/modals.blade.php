<x-preview.page :title='"Modals"' :html-attrs='"lang=\"en\""'>
<x-slot:head>
@verbatim
<link href="/tabler/libs/tom-select/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet" />
@endverbatim
</x-slot:head>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Modals</h1>

                  <div class="text-secondary mt-1">Modals interrupt the page to ask for input, confirmation, or a focused action.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/modal" target="_blank" rel="noopener" class="link-secondary">
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
              <div class="card">
                <div class="card-body">
                  <div class="row g-5">
                    <div class="d-none d-md-block col-3">
                      <div class="nav nav-vertical sticky-top pt-4">
                        <a href="#modal-simple" class="nav-link">Simple modal</a>
                        <a href="#modal-large" class="nav-link">Large modal</a>
                        <a href="#modal-small" class="nav-link">Small modal</a>
                        <a href="#modal-full-width" class="nav-link">Full width modal</a>
                        <a href="#modal-scrollable" class="nav-link">Scrollable modal</a>
                        <a href="#modal-report" class="nav-link">Modal with form</a>
                        <a href="#modal-success" class="nav-link">Success modal</a>
                        <a href="#modal-danger" class="nav-link">Danger modal</a>
                        <a href="#modal-team" class="nav-link">Modal with simple form</a>
                        <a href="#modal-signature" class="nav-link">Modal with signature form</a>
                        <a href="#modal-new-email" class="nav-link">New email modal</a>
                        <a href="#modal-new-event" class="nav-link">New event modal</a>
                        <a href="#modal-new-task" class="nav-link">New task modal</a>
                        <a href="#modal-edit-profile" class="nav-link">Edit profile modal</a>
                        <a href="#modal-confirm-delete" class="nav-link">Confirm delete modal</a>
                        <a href="#modal-change-password" class="nav-link">Change password modal</a>
                        <a href="#modal-add-task" class="nav-link">Add task modal</a>
                        <a href="#modal-native" class="nav-link">Native dialog</a>
                      </div>
                    </div>
                    <div class="col">
                      <div class="space-y-6">
                        <div>
                          <h2>Simple modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-simple" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-simple-title">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-simple-title">Modal title</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.</div>
                                <div class="modal-footer">
                                  <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Large modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-large" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-large-title">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-large-title">Large modal</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.</div>
                                <div class="modal-footer">
                                  <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Small modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-small" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-small-title">
                            <div class="modal-dialog modal-sm modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="modal-title" id="modal-small-title">Are you sure?</div>
                                  <div>If you proceed, you will lose all your personal data.</div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes, delete all my data</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Full width modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-full-width" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-full-width-title">
                            <div class="modal-dialog modal-full-width modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-full-width-title">Full width modal</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.</div>
                                <div class="modal-footer">
                                  <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Scrollable modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" style="max-height: 30rem" id="modal-scrollable" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-scrollable-title">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-scrollable-title">Scrollable modal</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Modal with form</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-report" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-report-title">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-report-title">New report</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                  <div class="mb-3">
                                    <label class="form-label" for="report-name"> Name </label>

                                    <input type="text" id="report-name" class="form-control" name="example-text-input" placeholder="Your report name" />
                                  </div>

                                  <fieldset class="border-0 p-0 mb-3">
                                    <legend class="form-label float-none mb-0" style="font-size: inherit">Report type</legend>
                                    <div class="form-selectgroup-boxes row">
                                      <div class="col-lg-6">
                                        <label class="form-selectgroup-item">
                                          <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked />
                                          <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                              <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                              <span class="form-selectgroup-title strong mb-1">Simple</span>
                                              <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                                            </span>
                                          </span>
                                        </label>
                                      </div>
                                      <div class="col-lg-6">
                                        <label class="form-selectgroup-item">
                                          <input type="radio" name="report-type" value="2" class="form-selectgroup-input" />
                                          <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                              <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                              <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                              <span class="d-block text-secondary">Insert charts and additional advanced analyses to be inserted in the report</span>
                                            </span>
                                          </span>
                                        </label>
                                      </div>
                                    </div>
                                  </fieldset>

                                  <div class="row">
                                    <div class="col-lg-8">
                                      <div class="mb-3">
                                        <label class="form-label" for="report-url"> Report url </label>

                                        <div class="input-group input-group-flat">
                                          <span class="input-group-text">https://tabler.io/reports/</span>
                                          <input type="text" class="form-control ps-0" value="report-01" id="report-url" />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-4">
                                      <div class="mb-3">
                                        <label class="form-label" for="report-visibility"> Visibility </label>

                                        <select id="report-visibility" class="form-select">
                                          <option value="1" selected>Private</option>
                                          <option value="2">Public</option>
                                          <option value="3">Hidden</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="mb-3">
                                        <label class="form-label" for="report-client-name"> Client name </label>

                                        <input type="text" id="report-client-name" class="form-control" />
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="mb-3">
                                        <label class="form-label" for="report-reporting-period"> Reporting period </label>

                                        <input type="date" id="report-reporting-period" class="form-control" />
                                      </div>
                                    </div>
                                    <div class="col-lg-12">
                                      <div>
                                        <label class="form-label" for="report-additional-info"> Additional information </label>

                                        <textarea id="report-additional-info" class="form-control" rows="3"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" data-bs-dismiss="modal" class="btn btn-link link-secondary">Cancel</button>
                                  <button type="button" data-bs-dismiss="modal" class="btn btn-primary ms-auto">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                      <path d="M12 5l0 14" />
                                      <path d="M5 12l14 0" /></svg
                                    >Create new report
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Success modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-success" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-success-title">
                            <div class="modal-dialog modal-sm modal-dialog-centered">
                              <div class="modal-content">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-status bg-success"></div>
                                <div class="modal-body text-center py-4">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/circle-check -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon mb-2 text-green icon-lg">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M9 12l2 2l4 -4" />
                                  </svg>

                                  <h3 id="modal-success-title">Payment succedeed</h3>
                                  <div class="text-secondary">Your payment of $290 has been successfully submitted. Your invoice has been sent to <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="087b7d7878677a7c487c696a646d7a266167">[email&#160;protected]</a>.</div>
                                </div>

                                <div class="modal-footer">
                                  <div class="w-100">
                                    <div class="row">
                                      <div class="col"><button type="button" data-bs-dismiss="modal" class="btn w-100">Go to dashboard</button></div>
                                      <div class="col"><button type="button" data-bs-dismiss="modal" class="btn btn-success w-100">View invoice</button></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Danger modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-danger" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-danger-title">
                            <div class="modal-dialog modal-sm modal-dialog-centered">
                              <div class="modal-content">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-status bg-danger"></div>
                                <div class="modal-body text-center py-4">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon mb-2 text-danger icon-lg">
                                    <path d="M12 9v4" />
                                    <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                                    <path d="M12 16h.01" />
                                  </svg>

                                  <h3 id="modal-danger-title">Are you sure?</h3>
                                  <div class="text-secondary">Do you really want to remove 84 files? What you've done cannot be undone.</div>
                                </div>

                                <div class="modal-footer">
                                  <div class="w-100">
                                    <div class="row">
                                      <div class="col"><button type="button" data-bs-dismiss="modal" class="btn w-100">Cancel</button></div>
                                      <div class="col"><button type="button" data-bs-dismiss="modal" class="btn btn-danger w-100">Delete 84 items</button></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Modal with simple form</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-team" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-team-title">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-team-title">Add a new team</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="row mb-3 align-items-end">
                                    <div class="col-auto">
                                      <a href="#" class="avatar avatar-upload rounded avatar-xl" aria-label="Upload photo">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                          <path d="M12 5l0 14" />
                                          <path d="M5 12l14 0" />
                                        </svg>
                                      </a>
                                    </div>
                                    <div class="col">
                                      <label class="form-label" for="team-name">Name</label>
                                      <input type="text" id="team-name" class="form-control" />
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <div class="form-label">Pick your team color</div>

                                    <fieldset>
                                      <legend class="visually-hidden">Pick your team color</legend>
                                      <div class="row g-2">
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="dark" class="form-colorinput-input" aria-label="dark" />
                                            <span class="form-colorinput-color bg-dark"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput form-colorinput-light">
                                            <input name="color" type="radio" value="white" class="form-colorinput-input" checked aria-label="white" />
                                            <span class="form-colorinput-color bg-white"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="blue" class="form-colorinput-input" aria-label="blue" />
                                            <span class="form-colorinput-color bg-blue"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="azure" class="form-colorinput-input" aria-label="azure" />
                                            <span class="form-colorinput-color bg-azure"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="indigo" class="form-colorinput-input" aria-label="indigo" />
                                            <span class="form-colorinput-color bg-indigo"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="purple" class="form-colorinput-input" aria-label="purple" />
                                            <span class="form-colorinput-color bg-purple"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="pink" class="form-colorinput-input" aria-label="pink" />
                                            <span class="form-colorinput-color bg-pink"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="red" class="form-colorinput-input" aria-label="red" />
                                            <span class="form-colorinput-color bg-red"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="orange" class="form-colorinput-input" aria-label="orange" />
                                            <span class="form-colorinput-color bg-orange"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="yellow" class="form-colorinput-input" aria-label="yellow" />
                                            <span class="form-colorinput-color bg-yellow"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="lime" class="form-colorinput-input" aria-label="lime" />
                                            <span class="form-colorinput-color bg-lime"></span>
                                          </label>
                                        </div>
                                        <div class="col-auto">
                                          <label class="form-colorinput">
                                            <input name="color" type="radio" value="green" class="form-colorinput-input" aria-label="green" />
                                            <span class="form-colorinput-color bg-green"></span>
                                          </label>
                                        </div>
                                      </div>
                                    </fieldset>
                                  </div>

                                  <div>
                                    <label class="form-label" for="team-additional-info"> Additional info </label>

                                    <textarea id="team-additional-info" class="form-control"></textarea>
                                  </div>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add Team</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Modal with signature form</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-signature" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-signature-title">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-body">
                                  <h2 id="modal-signature-title" class="card-title">Confirm transfer</h2>
                                  <p class="card-subtitle">Please confirm the transfer of funds by signing below.</p>
                                  <form>
                                    <div class="mb-3">
                                      <div class="form-label required">Signature</div>

                                      <div class="position-relative user-select-none">
                                        <div class="signature position-relative">
                                          <div class="position-absolute top-0 end-0 p-2">
                                            <button type="button" class="btn btn-icon" id="signature-default-clear" title="Clear signature" aria-label="Clear signature" data-bs-toggle="tooltip">
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
                                          <canvas id="signature-default" width="684" height="400" class="signature-canvas"></canvas>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                  <div class="text-secondary fs-5">
                                    I agree that the signature and initials will be the electronic representation of my signature and initials for all purposes when I (or my agent) use them on documents, including legally binding contracts - just the same as a pen-and-paper signature or initial.
                                  </div>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                                  <button type="button" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Confirm transfer</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>New email modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-new-email" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-new-email-title">
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
                        </div>
                        <div>
                          <h2>New event modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-new-event" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-new-event-title">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-new-event-title">New event</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                  <form>
                                    <div class="mb-4">
                                      <label class="form-label" for="event-title"> Title </label>

                                      <input class="form-control" id="event-title" type="text" placeholder="Event title" />
                                    </div>
                                    <div class="mb-4">
                                      <label class="form-label" for="event-description"> Description </label>

                                      <textarea class="form-control" id="event-description" rows="3" placeholder="Event description"></textarea>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <div class="mb-4">
                                          <label class="form-label" for="datepicker-event-start"> Start </label>

                                          <div class="input-icon">
                                            <input type="text" class="form-control" id="datepicker-event-start" value="2020-06-20" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                                            <span class="input-icon-addon"
                                              ><!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                                <path d="M16 3v4" />
                                                <path d="M8 3v4" />
                                                <path d="M4 11h16" />
                                                <path d="M11 15h1" />
                                                <path d="M12 15v3" /></svg
                                            ></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="mb-4">
                                          <label class="form-label" for="datepicker-event-end"> End </label>

                                          <div class="input-icon">
                                            <input type="text" class="form-control" id="datepicker-event-end" value="2020-06-20" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                                            <span class="input-icon-addon"
                                              ><!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                                <path d="M16 3v4" />
                                                <path d="M8 3v4" />
                                                <path d="M4 11h16" />
                                                <path d="M11 15h1" />
                                                <path d="M12 15v3" /></svg
                                            ></span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4 w-100">Create event</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>New task modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-new-task" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-new-task-title">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-new-task-title">New task</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                  <form>
                                    <div class="mb-4">
                                      <label class="form-label" for="task-name"> Task name </label>

                                      <input class="form-control" id="task-name" type="text" placeholder="Enter task name" />
                                    </div>
                                    <div class="mb-4">
                                      <label class="form-label" for="task-description"> Description </label>

                                      <textarea class="form-control" id="task-description" rows="3" placeholder="Enter task description"></textarea>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="mb-4">
                                          <label class="form-label" for="select-task-assigned"> Assigned to </label>

                                          <select class="form-select" id="select-task-assigned">
                                            <option value="1" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/000m.jpg)"></span>'>Paweł Kuna</option>
                                            <option value="2" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/052f.jpg)"></span>'>Jeffie Lewzey</option>
                                            <option value="3" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/002m.jpg)"></span>'>Mallory Hulme</option>
                                            <option value="4" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/003m.jpg)"></span>' selected>Dunn Slane</option>
                                            <option value="5" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/000f.jpg)"></span>'>Emmy Levet</option>
                                            <option value="6" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/001f.jpg)"></span>'>Maryjo Lebarree</option>
                                            <option value="7" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/004m.jpg)"></span>'>Egan Poetz</option>
                                            <option value="8" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/002f.jpg)"></span>'>Kellie Skingley</option>
                                            <option value="9" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/003f.jpg)"></span>'>Christabel Charlwood</option>
                                            <option value="10" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/063m.jpg)"></span>'>Haskel Shelper</option>
                                            <option value="11" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/006m.jpg)"></span>'>Lorry Mion</option>
                                            <option value="12" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/004f.jpg)"></span>'>Leesa Beaty</option>
                                            <option value="13" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/007m.jpg)"></span>'>Perren Keemar</option>
                                            <option value="14" data-custom-properties='<span class="avatar avatar-xs">SA</span>'>Sunny Airey</option>
                                            <option value="15" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/009m.jpg)"></span>'>Geoffry Flaunders</option>
                                            <option value="16" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/010m.jpg)"></span>'>Thatcher Keel</option>
                                            <option value="17" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/005f.jpg)"></span>'>Dyann Escala</option>
                                            <option value="18" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/006f.jpg)"></span>'>Avivah Mugleston</option>
                                            <option value="19" data-custom-properties='<span class="avatar avatar-xs">AA</span>'>Arlie Armstead</option>
                                            <option value="20" data-custom-properties='<span class="avatar avatar-xs" style="background-image: url(/tabler/static/avatars/008f.jpg)"></span>'>Tessie Curzon</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="mb-4">
                                          <label class="form-label" for="task-priority"> Priority </label>

                                          <select class="form-select" id="task-priority">
                                            <option value="low">Low</option>
                                            <option value="medium" selected>Medium</option>
                                            <option value="high">High</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="mb-4">
                                          <label class="form-label" for="datepicker-task-due-date"> Due date </label>

                                          <div class="input-icon">
                                            <input type="text" class="form-control" id="datepicker-task-due-date" value="2020-06-20" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                                            <span class="input-icon-addon"
                                              ><!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                                <path d="M16 3v4" />
                                                <path d="M8 3v4" />
                                                <path d="M4 11h16" />
                                                <path d="M11 15h1" />
                                                <path d="M12 15v3" /></svg
                                            ></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="mb-4">
                                          <label class="form-label" for="select-task-category"> Category / Tags </label>

                                          <select class="form-select" id="select-task-category" multiple>
                                            <option value="HTML" selected>HTML</option>
                                            <option value="JavaScript" selected>JavaScript</option>
                                            <option value="CSS">CSS</option>
                                            <option value="jQuery">jQuery</option>
                                            <option value="Bootstrap" selected>Bootstrap</option>
                                            <option value="Ruby">Ruby</option>
                                            <option value="Python">Python</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4 w-100">Create task</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Edit profile modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-edit-profile" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-edit-profile-title">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-edit-profile-title">Edit profile</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                  <form>
                                    <div class="mb-4">
                                      <div class="row align-items-end">
                                        <div class="col-auto">
                                          <a href="#" class="avatar avatar-upload rounded avatar-lg" aria-label="Upload photo">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                              <path d="M12 5l0 14" />
                                              <path d="M5 12l14 0" />
                                            </svg>
                                          </a>
                                        </div>
                                        <div class="col">
                                          <label class="form-label">Avatar</label>
                                          <div class="text-secondary">Click to upload a new avatar</div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="mb-4">
                                          <label class="form-label" for="profile-first-name"> First name </label>

                                          <input class="form-control" id="profile-first-name" type="text" placeholder="John" />
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="mb-4">
                                          <label class="form-label" for="profile-last-name"> Last name </label>

                                          <input class="form-control" id="profile-last-name" type="text" placeholder="Doe" />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mb-4">
                                      <label class="form-label" for="profile-email"> Email </label>

                                      <input class="form-control" id="profile-email" type="email" placeholder="john.doe@example.com" />
                                    </div>

                                    <div class="mb-4">
                                      <label class="form-label" for="profile-phone"> Phone </label>

                                      <input class="form-control" id="profile-phone" type="tel" placeholder="+1 (555) 123-4567" />
                                    </div>

                                    <div class="mb-4">
                                      <label class="form-label" for="profile-bio"> Bio </label>

                                      <textarea class="form-control" id="profile-bio" rows="4" placeholder="Tell us about yourself..."></textarea>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="mb-4">
                                          <label class="form-label" for="profile-location"> Location </label>

                                          <input class="form-control" id="profile-location" type="text" placeholder="City, Country" />
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="mb-4">
                                          <label class="form-label" for="datepicker-profile-birthdate"> Date of birth </label>

                                          <div class="input-icon">
                                            <input type="text" class="form-control" id="datepicker-profile-birthdate" value="2020-06-20" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                                            <span class="input-icon-addon"
                                              ><!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                                <path d="M16 3v4" />
                                                <path d="M8 3v4" />
                                                <path d="M4 11h16" />
                                                <path d="M11 15h1" />
                                                <path d="M12 15v3" /></svg
                                            ></span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mb-4">
                                      <div class="form-label">Social links</div>

                                      <div class="row g-2">
                                        <div class="col-12">
                                          <div class="input-group">
                                            <span class="input-group-text"
                                              ><!-- Download SVG icon from http://tabler.io/icons/icon/brand-twitter -->
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                                <path
                                                  d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013l0 .001"
                                                /></svg
                                            ></span>
                                            <input type="text" class="form-control" placeholder="twitter.com/username" />
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="input-group">
                                            <span class="input-group-text"
                                              ><!-- Download SVG icon from http://tabler.io/icons/icon/brand-github -->
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                                <path
                                                  d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"
                                                /></svg
                                            ></span>
                                            <input type="text" class="form-control" placeholder="github.com/username" />
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="input-group">
                                            <span class="input-group-text"
                                              ><!-- Download SVG icon from http://tabler.io/icons/icon/brand-linkedin -->
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                                <path d="M8 11v5" />
                                                <path d="M8 8v.01" />
                                                <path d="M12 16v-5" />
                                                <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                                <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4l0 -10" /></svg
                                            ></span>
                                            <input type="text" class="form-control" placeholder="linkedin.com/in/username" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-4 w-100">Save changes</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Confirm delete modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-confirm-delete" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-confirm-delete-title">
                            <div class="modal-dialog modal-sm modal-dialog-centered">
                              <div class="modal-content">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-status bg-danger"></div>
                                <div class="modal-body text-center py-4">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon mb-2 text-danger icon-lg">
                                    <path d="M12 9v4" />
                                    <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                                    <path d="M12 16h.01" />
                                  </svg>

                                  <h3 id="modal-confirm-delete-title">Are you sure?</h3>
                                  <div class="text-secondary mb-4">
                                    <p id="confirm-delete-message">Do you really want to delete this item? This action cannot be undone.</p>
                                    <div id="confirm-delete-items" class="text-start d-none">
                                      <div class="card card-sm mt-3">
                                        <div class="card-body">
                                          <div class="fw-bold mb-2">Items to be deleted:</div>
                                          <ul class="list-unstyled mb-0" id="confirm-delete-list">
                                            <li>• Item 1</li>
                                            <li>• Item 2</li>
                                            <li>• Item 3</li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <label class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" id="confirm-delete-checkbox" />
                                    <span class="form-check-label">I understand this action cannot be undone</span>
                                  </label>
                                </div>

                                <div class="modal-footer">
                                  <div class="w-100">
                                    <div class="row">
                                      <div class="col"><button type="button" data-bs-dismiss="modal" class="btn w-100">Cancel</button></div>
                                      <div class="col">
                                        <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal" id="confirm-delete-button" disabled>Delete</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- BEGIN CONFIRM DELETE -->
                                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                                  function initConfirmDelete() {
                                    const checkbox = document.getElementById('confirm-delete-checkbox')
                                    const deleteButton = document.getElementById('confirm-delete-button')

                                    if (checkbox && deleteButton) {
                                      checkbox.addEventListener('change', function () {
                                        deleteButton.disabled = !this.checked
                                      })
                                    }
                                  }

                                  document.readyState !== 'loading' ? initConfirmDelete() : document.addEventListener('DOMContentLoaded', initConfirmDelete, { once: true })
                                </script>
                                <!-- END CONFIRM DELETE -->
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Change password modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-change-password" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-change-password-title">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-change-password-title">Change password</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                  <form>
                                    <div class="mb-4">
                                      <label class="form-label" for="password-current"> Current password </label>

                                      <div class="input-group input-group-flat">
                                        <input type="password" class="form-control" placeholder="Enter your current password" autocomplete="current-password" id="password-current" />

                                        <span class="input-group-text">
                                          <button type="button" class="link-secondary input-group-link border-0 bg-transparent p-0" title="Show password" aria-label="Show password" aria-pressed="false" data-bs-toggle="tooltip" data-password-toggle="password-current">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-toggle-show">
                                              <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                              <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                            </svg>
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/eye-off -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-toggle-hide d-none">
                                              <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                              <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                              <path d="M3 3l18 18" />
                                            </svg>
                                          </button>
                                        </span>
                                      </div>
                                    </div>

                                    <div class="mb-4">
                                      <label class="form-label" for="password-new"> New password </label>

                                      <div class="input-group input-group-flat">
                                        <input type="password" class="form-control" placeholder="Enter new password" autocomplete="new-password" id="password-new" />

                                        <span class="input-group-text">
                                          <button type="button" class="link-secondary input-group-link border-0 bg-transparent p-0" title="Show password" aria-label="Show password" aria-pressed="false" data-bs-toggle="tooltip" data-password-toggle="password-new">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-toggle-show">
                                              <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                              <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                            </svg>
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/eye-off -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-toggle-hide d-none">
                                              <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                              <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                              <path d="M3 3l18 18" />
                                            </svg>
                                          </button>
                                        </span>
                                      </div>

                                      <div class="strength" data-bs-strength data-bs-input="#password-new" aria-label="New password strength"><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span></div>
                                      <div class="strength-text">Use 8 to 20 characters, with letters and numbers.</div>
                                    </div>

                                    <div class="mb-4">
                                      <label class="form-label" for="password-confirm"> Confirm new password </label>

                                      <div class="input-group input-group-flat">
                                        <input type="password" class="form-control" placeholder="Confirm your new password" autocomplete="new-password" id="password-confirm" />

                                        <span class="input-group-text">
                                          <button type="button" class="link-secondary input-group-link border-0 bg-transparent p-0" title="Show password" aria-label="Show password" aria-pressed="false" data-bs-toggle="tooltip" data-password-toggle="password-confirm">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-toggle-show">
                                              <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                              <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                            </svg>
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/eye-off -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-toggle-hide d-none">
                                              <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                              <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                              <path d="M3 3l18 18" />
                                            </svg>
                                          </button>
                                        </span>
                                      </div>

                                      <div class="invalid-feedback d-none" id="password-match-error" role="alert">Passwords do not match.</div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-4 w-100">Update password</button>
                                  </form>
                                </div>
                                <!-- BEGIN CHANGE PASSWORD -->
                                <script>
                                  // Password show/hide toggles are wired generically by InputGroup.astro (data-password-toggle).
                                  // The strength meter is wired by tabler.js from data-bs-strength.
                                  function initChangePassword() {
                                    const newPasswordInput = document.getElementById('password-new')
                                    const confirmPasswordInput = document.getElementById('password-confirm')
                                    const matchError = document.getElementById('password-match-error')

                                    if (!newPasswordInput || !confirmPasswordInput || !matchError) {
                                      return
                                    }

                                    const validateMatch = () => {
                                      const newPassword = newPasswordInput.value
                                      const confirmPassword = confirmPasswordInput.value

                                      if (confirmPassword && newPassword !== confirmPassword) {
                                        confirmPasswordInput.classList.add('is-invalid')
                                        confirmPasswordInput.setAttribute('aria-invalid', 'true')
                                        confirmPasswordInput.setAttribute('aria-describedby', 'password-match-error')
                                        matchError.classList.remove('d-none')
                                      } else {
                                        confirmPasswordInput.classList.remove('is-invalid')
                                        confirmPasswordInput.removeAttribute('aria-invalid')
                                        confirmPasswordInput.removeAttribute('aria-describedby')
                                        matchError.classList.add('d-none')
                                      }
                                    }

                                    newPasswordInput.addEventListener('input', validateMatch)
                                    confirmPasswordInput.addEventListener('input', validateMatch)
                                  }

                                  document.readyState !== 'loading' ? initChangePassword() : document.addEventListener('DOMContentLoaded', initChangePassword, { once: true })
                                </script>
                                <!-- END CHANGE PASSWORD -->
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div>
                          <h2>Add task modal</h2>
                          <!-- BEGIN MODAL -->
                          <div class="modal modal-blur fade position-relative rounded d-block bg-surface-backdrop py-6 w-auto h-auto z-0 show" id="modal-add-task" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-add-task-title">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="modal-add-task-title">Add task</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                      <label class="form-label" for="add-task-name"> Name </label>

                                      <input type="text" class="form-control" id="add-task-name" placeholder="Task name" />
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="add-task-assigned"> Assigned To </label>

                                      <select class="form-select" id="add-task-assigned">
                                        <option value="">Select person</option>
                                        <option value="5">Emmy Levet</option>
                                        <option value="6">Maryjo Lebarree</option>
                                        <option value="2">Jeffie Lewzey</option>
                                        <option value="3">Mallory Hulme</option>
                                      </select>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="add-task-priority"> Priority </label>

                                      <select class="form-select" id="add-task-priority">
                                        <option value="Low">Low</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                      </select>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="add-task-description"> Description </label>

                                      <textarea class="form-control" id="add-task-description" rows="3" placeholder="Task description"></textarea>
                                    </div>
                                  </form>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                                  <button type="button" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MODAL -->
                        </div>
                        <div id="modal-native">
                          <h2>Native dialog</h2>
                          <p class="text-secondary">
                            A native <code>&lt;dialog&gt;</code> opened with <code>showModal()</code>. The browser paints the backdrop and Tabler styles it to match the one used by modals, with <code>.modal-blur</code> blurring the page behind it. Buttons inside <code>&lt;form method="dialog"&gt;</code> close the
                            dialog without any script. The panel uses the card classes on a child element, because the modal classes read CSS variables set on <code>.modal</code>, and a <code>display</code> value on the dialog itself would keep it visible when closed.
                          </p>
                          <div class="btn-list">
                            <button type="button" id="native-dialog-open" class="btn btn-primary">Open native dialog</button>
                            <button type="button" id="native-dialog-open-blur" class="btn">Open with blur</button>
                          </div>
                          <dialog id="native-dialog" class="p-0 border-0 bg-transparent" style="width: 28rem; max-width: calc(100% - 2rem)">
                            <form method="dialog" class="card">
                              <div class="card-header">
                                <h3 class="card-title">Native dialog</h3>
                                <div class="card-actions">
                                  <button type="submit" class="btn-close" aria-label="Close"></button>
                                </div>
                              </div>
                              <div class="card-body">
                                <p>The browser keeps the page behind this dialog inert, traps focus inside it and closes it on Esc.</p>
                              </div>
                              <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Close</button>
                              </div>
                            </form>
                          </dialog>
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
<script src="/tabler/libs/vanilla-calendar-pro/index.js" defer></script>
<script src="/tabler/libs/tom-select/dist/js/tom-select.base.min.js" defer></script>
<script src="/tabler/libs/hugerte/hugerte.min.js" defer></script>
<script src="/tabler/libs/signature_pad/dist/signature_pad.umd.min.js" defer></script>
<script>
      ;(function () {
        const signatureKey = 'default'
        const canvasId = 'signature-default'
        const clearId = 'signature-default-clear'
        const clear = true
        const event = 'DOMContentLoaded'

        window.tabler_signature ??= {}

        function resizeCanvas(canvas, signaturePad) {
          const ratio = Math.max(window.devicePixelRatio || 1, 1)

          canvas.width = canvas.offsetWidth * ratio
          canvas.height = canvas.offsetHeight * ratio
          canvas.getContext('2d').scale(ratio, ratio)
          signaturePad.fromData(signaturePad.toData())
        }

        function initSignature() {
          const canvas = document.getElementById(canvasId)

          if (!canvas) {
            return
          }

          let signaturePad = window.tabler_signature[signatureKey]

          if (!signaturePad) {
            signaturePad = new SignaturePad(canvas, {
              backgroundColor: 'transparent',
              penColor: getComputedStyle(canvas).color,
            })

            window.tabler_signature[signatureKey] = signaturePad

            if (clear) {
              document.getElementById(clearId)?.addEventListener('click', function () {
                signaturePad.clear()
              })
            }

            window.addEventListener('resize', function () {
              resizeCanvas(canvas, signaturePad)
            })
          }

          resizeCanvas(canvas, signaturePad)
        }

        if (event === 'DOMContentLoaded') {
          document.readyState !== 'loading' ? initSignature() : document.addEventListener('DOMContentLoaded', initSignature, { once: true })
        } else {
          document.addEventListener(event, initSignature)
        }
      })()
    </script>
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
<script>
      ;(function () {
        const selectId = 'select-task-assigned'

        function initSelect() {
          window.tabler_select ??= {}

          const renderOption = (data, escape) => {
            if (data.customProperties) {
              return `<div class="dropdown-item"><span class="dropdown-item-indicator">${data.customProperties}</span>${escape(data.text)}</div>`
            }
            return `<div>${escape(data.text)}</div>`
          }

          window.TomSelect &&
            (window.tabler_select[selectId] = new TomSelect(document.getElementById(selectId), {
              copyClassesToDropdown: false,
              dropdownParent: 'body',
              render: {
                item: renderOption,
                option: renderOption,
              },
            }))
        }

        document.readyState !== 'loading' ? initSelect() : document.addEventListener('DOMContentLoaded', initSelect, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const selectId = 'select-task-category'

        function initSelect() {
          window.tabler_select ??= {}

          const renderOption = (data, escape) => {
            if (data.customProperties) {
              return `<div class="dropdown-item"><span class="dropdown-item-indicator">${data.customProperties}</span>${escape(data.text)}</div>`
            }
            return `<div>${escape(data.text)}</div>`
          }

          window.TomSelect &&
            (window.tabler_select[selectId] = new TomSelect(document.getElementById(selectId), {
              copyClassesToDropdown: false,
              dropdownParent: 'body',
              render: {
                item: renderOption,
                option: renderOption,
              },
            }))
        }

        document.readyState !== 'loading' ? initSelect() : document.addEventListener('DOMContentLoaded', initSelect, { once: true })
      })()
    </script>
<script>
      if (!window.__tablerPasswordToggleInit) {
        window.__tablerPasswordToggleInit = true
        document.addEventListener('click', (e) => {
          const btn = e.target.closest('[data-password-toggle]')
          if (!btn) return
          const input = document.getElementById(btn.getAttribute('data-password-toggle'))
          if (!input) return
          const showing = input.type === 'password'
          input.type = showing ? 'text' : 'password'
          const label = showing ? 'Hide password' : 'Show password'
          btn.setAttribute('aria-pressed', showing ? 'true' : 'false')
          btn.setAttribute('aria-label', label)
          btn.setAttribute('title', label)
          btn.setAttribute('data-bs-original-title', label)
          btn.querySelector('.icon-toggle-show')?.classList.toggle('d-none', showing)
          btn.querySelector('.icon-toggle-hide')?.classList.toggle('d-none', !showing)
        })
      }
    </script>
<script>
      if (!window.__tablerPasswordToggleInit) {
        window.__tablerPasswordToggleInit = true
        document.addEventListener('click', (e) => {
          const btn = e.target.closest('[data-password-toggle]')
          if (!btn) return
          const input = document.getElementById(btn.getAttribute('data-password-toggle'))
          if (!input) return
          const showing = input.type === 'password'
          input.type = showing ? 'text' : 'password'
          const label = showing ? 'Hide password' : 'Show password'
          btn.setAttribute('aria-pressed', showing ? 'true' : 'false')
          btn.setAttribute('aria-label', label)
          btn.setAttribute('title', label)
          btn.setAttribute('data-bs-original-title', label)
          btn.querySelector('.icon-toggle-show')?.classList.toggle('d-none', showing)
          btn.querySelector('.icon-toggle-hide')?.classList.toggle('d-none', !showing)
        })
      }
    </script>
<script>
      if (!window.__tablerPasswordToggleInit) {
        window.__tablerPasswordToggleInit = true
        document.addEventListener('click', (e) => {
          const btn = e.target.closest('[data-password-toggle]')
          if (!btn) return
          const input = document.getElementById(btn.getAttribute('data-password-toggle'))
          if (!input) return
          const showing = input.type === 'password'
          input.type = showing ? 'text' : 'password'
          const label = showing ? 'Hide password' : 'Show password'
          btn.setAttribute('aria-pressed', showing ? 'true' : 'false')
          btn.setAttribute('aria-label', label)
          btn.setAttribute('title', label)
          btn.setAttribute('data-bs-original-title', label)
          btn.querySelector('.icon-toggle-show')?.classList.toggle('d-none', showing)
          btn.querySelector('.icon-toggle-hide')?.classList.toggle('d-none', !showing)
        })
      }
    </script>
<script>
      // Only opening a native <dialog> needs a script. Closing is handled by the
      // <form method="dialog"> buttons inside it and by the Esc key.
      function initNativeDialog() {
        const nativeDialog = document.getElementById('native-dialog')

        const openNativeDialog = (blur) => {
          nativeDialog.classList.toggle('modal-blur', blur)
          nativeDialog.showModal()
        }

        document.getElementById('native-dialog-open').addEventListener('click', () => openNativeDialog(false))
        document.getElementById('native-dialog-open-blur').addEventListener('click', () => openNativeDialog(true))
      }

      document.readyState !== 'loading' ? initNativeDialog() : document.addEventListener('DOMContentLoaded', initNativeDialog, { once: true })
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
