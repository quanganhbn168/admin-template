<x-preview.page :title='"Offcanvas"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Offcanvas</h1>

                  <div class="text-secondary mt-1">An offcanvas panel slides in from an edge of the screen for navigation or supplementary content.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/offcanvas" target="_blank" rel="noopener" class="link-secondary">
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
                    <div class="card-header">
                      <h2 class="card-title">Default</h2>
                    </div>
                    <div class="card-body">
                      <div class="btn-list">
                        <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button" aria-controls="offcanvasStart"> Toggle start offcanvas </a><a class="btn" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd"> Toggle end offcanvas </a
                        ><a class="btn" data-bs-toggle="offcanvas" href="#offcanvasTop" role="button" aria-controls="offcanvasTop"> Toggle top offcanvas </a><a class="btn" data-bs-toggle="offcanvas" href="#offcanvasBottom" role="button" aria-controls="offcanvasBottom"> Toggle bottom offcanvas </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Floating</h2>
                    </div>
                    <div class="card-body">
                      <div class="btn-list">
                        <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasFloatingStart" role="button" aria-controls="offcanvasFloatingStart"> Toggle start offcanvas </a
                        ><a class="btn" data-bs-toggle="offcanvas" href="#offcanvasFloatingEnd" role="button" aria-controls="offcanvasFloatingEnd"> Toggle end offcanvas </a><a class="btn" data-bs-toggle="offcanvas" href="#offcanvasFloatingTop" role="button" aria-controls="offcanvasFloatingTop"> Toggle top offcanvas </a
                        ><a class="btn" data-bs-toggle="offcanvas" href="#offcanvasFloatingBottom" role="button" aria-controls="offcanvasFloatingBottom"> Toggle bottom offcanvas </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- BEGIN OFFCANVAS -->
              <div class="offcanvas offcanvas-start" tabindex="-1" role="dialog" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title" id="offcanvasStartLabel">Start offcanvas</h2>

                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!</div>
                  <div class="mt-3">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                  </div>
                </div>
              </div>
              <!-- END OFFCANVAS -->
              <!-- BEGIN OFFCANVAS -->
              <div class="offcanvas offcanvas-end" tabindex="-1" role="dialog" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title" id="offcanvasEndLabel">End offcanvas</h2>

                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!</div>
                  <div class="mt-3">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                  </div>
                </div>
              </div>
              <!-- END OFFCANVAS -->
              <!-- BEGIN OFFCANVAS -->
              <div class="offcanvas offcanvas-top" tabindex="-1" role="dialog" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title" id="offcanvasTopLabel">Top offcanvas</h2>

                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!</div>
                  <div class="mt-3">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                  </div>
                </div>
              </div>
              <!-- END OFFCANVAS -->
              <!-- BEGIN OFFCANVAS -->
              <div class="offcanvas offcanvas-bottom" tabindex="-1" role="dialog" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title" id="offcanvasBottomLabel">Bottom offcanvas</h2>

                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!</div>
                  <div class="mt-3">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                  </div>
                </div>
              </div>
              <!-- END OFFCANVAS -->
              <!-- BEGIN OFFCANVAS -->
              <div class="offcanvas offcanvas-start offcanvas-floating" tabindex="-1" role="dialog" id="offcanvasFloatingStart" aria-labelledby="offcanvasFloatingStartLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title" id="offcanvasFloatingStartLabel">Start offcanvas</h2>

                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!</div>
                  <div class="mt-3">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                  </div>
                </div>
              </div>
              <!-- END OFFCANVAS -->
              <!-- BEGIN OFFCANVAS -->
              <div class="offcanvas offcanvas-end offcanvas-floating" tabindex="-1" role="dialog" id="offcanvasFloatingEnd" aria-labelledby="offcanvasFloatingEndLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title" id="offcanvasFloatingEndLabel">End offcanvas</h2>

                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!</div>
                  <div class="mt-3">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                  </div>
                </div>
              </div>
              <!-- END OFFCANVAS -->
              <!-- BEGIN OFFCANVAS -->
              <div class="offcanvas offcanvas-top offcanvas-floating" tabindex="-1" role="dialog" id="offcanvasFloatingTop" aria-labelledby="offcanvasFloatingTopLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title" id="offcanvasFloatingTopLabel">Top offcanvas</h2>

                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!</div>
                  <div class="mt-3">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                  </div>
                </div>
              </div>
              <!-- END OFFCANVAS -->
              <!-- BEGIN OFFCANVAS -->
              <div class="offcanvas offcanvas-bottom offcanvas-floating" tabindex="-1" role="dialog" id="offcanvasFloatingBottom" aria-labelledby="offcanvasFloatingBottomLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title" id="offcanvasFloatingBottomLabel">Bottom offcanvas</h2>

                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!</div>
                  <div class="mt-3">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                  </div>
                </div>
              </div>
              <!-- END OFFCANVAS -->
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
