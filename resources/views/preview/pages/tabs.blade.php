<x-preview.page :title='"Tabs"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Tabs</h1>

                  <div class="text-secondary mt-1">Tabs switch between related panels of content inside a card.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/layout/navs-tabs" target="_blank" rel="noopener" class="link-secondary">
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
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-home-1" id="tabs-home-1-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabs-home-1" role="tab" aria-controls="tabs-home-1" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-profile-1" id="tabs-profile-1-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-profile-1" role="tab" aria-controls="tabs-profile-1" aria-selected="false">Profile</a>
                        </li>

                        <li class="nav-item ms-auto" role="presentation">
                          <a href="#tabs-settings-1" id="tabs-settings-1-tab" class="nav-link" title="Settings" data-bs-toggle="tab" data-bs-target="#tabs-settings-1" role="tab" aria-controls="tabs-settings-1" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                              />
                              <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-1" role="tabpanel" aria-labelledby="tabs-home-1-tab">
                          <h2>Home tab</h2>
                          <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-1" role="tabpanel" aria-labelledby="tabs-profile-1-tab">
                          <h2>Profile tab</h2>
                          <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                        <div class="tab-pane" id="tabs-settings-1" role="tabpanel" aria-labelledby="tabs-settings-1-tab">
                          <h2>Settings tab</h2>
                          <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs flex-row-reverse" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-home-2" id="tabs-home-2-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabs-home-2" role="tab" aria-controls="tabs-home-2" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-profile-2" id="tabs-profile-2-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-profile-2" role="tab" aria-controls="tabs-profile-2" aria-selected="false">Profile</a>
                        </li>

                        <li class="nav-item me-auto" role="presentation">
                          <a href="#tabs-settings-2" id="tabs-settings-2-tab" class="nav-link" title="Settings" data-bs-toggle="tab" data-bs-target="#tabs-settings-2" role="tab" aria-controls="tabs-settings-2" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                              />
                              <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-2" role="tabpanel" aria-labelledby="tabs-home-2-tab">
                          <h2>Home tab</h2>
                          <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-2" role="tabpanel" aria-labelledby="tabs-profile-2-tab">
                          <h2>Profile tab</h2>
                          <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                        <div class="tab-pane" id="tabs-settings-2" role="tabpanel" aria-labelledby="tabs-settings-2-tab">
                          <h2>Settings tab</h2>
                          <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-home-3" id="tabs-home-3-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabs-home-3" role="tab" aria-controls="tabs-home-3" aria-selected="true"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg
                            >Home</a
                          >
                        </li>
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-profile-3" id="tabs-profile-3-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-profile-3" role="tab" aria-controls="tabs-profile-3" aria-selected="false"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg
                            >Profile</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-3" role="tabpanel" aria-labelledby="tabs-home-3-tab">
                          <h2>Home tab</h2>
                          <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-3" role="tabpanel" aria-labelledby="tabs-profile-3-tab">
                          <h2>Profile tab</h2>
                          <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-home-4" id="tabs-home-4-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabs-home-4" role="tab" aria-controls="tabs-home-4" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-profile-4" id="tabs-profile-4-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-profile-4" role="tab" aria-controls="tabs-profile-4" aria-selected="false">Profile</a>
                        </li>

                        <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
                          <div class="dropdown-menu">
                            <button type="button" class="dropdown-item">Action</button>
                            <button type="button" class="dropdown-item">Another action</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-4" role="tabpanel" aria-labelledby="tabs-home-4-tab">
                          <h2>Home tab</h2>
                          <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-4" role="tabpanel" aria-labelledby="tabs-profile-4-tab">
                          <h2>Profile tab</h2>
                          <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs nav-fill" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-home-5" id="tabs-home-5-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabs-home-5" role="tab" aria-controls="tabs-home-5" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-profile-5" id="tabs-profile-5-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-profile-5" role="tab" aria-controls="tabs-profile-5" aria-selected="false">Profile</a>
                        </li>

                        <li class="nav-item" role="presentation">
                          <a href="#tabs-activity-5" id="tabs-activity-5-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-activity-5" role="tab" aria-controls="tabs-activity-5" aria-selected="false"> Activity </a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-5" role="tabpanel" aria-labelledby="tabs-home-5-tab">
                          <h2>Home tab</h2>
                          <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-5" role="tabpanel" aria-labelledby="tabs-profile-5-tab">
                          <h2>Profile tab</h2>
                          <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>

                        <div class="tab-pane" id="tabs-activity-5" role="tabpanel" aria-labelledby="tabs-activity-5-tab">
                          <h2>Activity tab</h2>
                          <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs nav-fill" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-home-6" id="tabs-home-6-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabs-home-6" role="tab" aria-controls="tabs-home-6" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-profile-6" id="tabs-profile-6-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-profile-6" role="tab" aria-controls="tabs-profile-6" aria-selected="false">Profile</a>
                        </li>

                        <li class="nav-item" role="presentation">
                          <a href="#" class="nav-link disabled" data-bs-toggle="tab" role="tab" aria-selected="false" aria-disabled="true" tabindex="-1"> Disabled </a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-6" role="tabpanel" aria-labelledby="tabs-home-6-tab">
                          <h2>Home tab</h2>
                          <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-6" role="tabpanel" aria-labelledby="tabs-profile-6-tab">
                          <h2>Profile tab</h2>
                          <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs nav-fill" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-home-7" id="tabs-home-7-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabs-home-7" role="tab" aria-controls="tabs-home-7" aria-selected="true"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg
                            >Home</a
                          >
                        </li>
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-profile-7" id="tabs-profile-7-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-profile-7" role="tab" aria-controls="tabs-profile-7" aria-selected="false"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2">
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg
                            >Profile</a
                          >
                        </li>

                        <li class="nav-item" role="presentation">
                          <a href="#tabs-activity-7" id="tabs-activity-7-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-activity-7" role="tab" aria-controls="tabs-activity-7" aria-selected="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/activity -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-2"><path d="M3 12h4l3 8l4 -16l3 8h4" /></svg>
                            Activity
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-7" role="tabpanel" aria-labelledby="tabs-home-7-tab">
                          <h2>Home tab</h2>
                          <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-7" role="tabpanel" aria-labelledby="tabs-profile-7-tab">
                          <h2>Profile tab</h2>
                          <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>

                        <div class="tab-pane" id="tabs-activity-7" role="tabpanel" aria-labelledby="tabs-activity-7-tab">
                          <h2>Activity tab</h2>
                          <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-home-8" id="tabs-home-8-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabs-home-8" role="tab" aria-controls="tabs-home-8" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a href="#tabs-profile-8" id="tabs-profile-8-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-profile-8" role="tab" aria-controls="tabs-profile-8" aria-selected="false">Profile</a>
                        </li>

                        <li class="nav-item" role="presentation">
                          <a href="#tabs-activity-8" id="tabs-activity-8-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-activity-8" role="tab" aria-controls="tabs-activity-8" aria-selected="false"> Activity </a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane fade active show" id="tabs-home-8" role="tabpanel" aria-labelledby="tabs-home-8-tab">
                          <h2>Home tab</h2>
                          <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane fade" id="tabs-profile-8" role="tabpanel" aria-labelledby="tabs-profile-8-tab">
                          <h2>Profile tab</h2>
                          <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>

                        <div class="tab-pane fade" id="tabs-activity-8" role="tabpanel" aria-labelledby="tabs-activity-8-tab">
                          <h2>Activity tab</h2>
                          <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
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
