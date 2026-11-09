<x-preview.page :title='"Settings"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Account Settings</h1>
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
                  <!-- BEGIN SETTINGS NAV -->
                  <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
                      <h2 class="subheader">Business settings</h2>

                      <nav aria-label="Business settings" class="list-group list-group-transparent">
                        <a href="/preview/settings" class="list-group-item list-group-item-action active d-flex align-items-center">My Account</a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">My Notifications</a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Connected Apps</a>
                        <a href="/preview/settings-plan" class="list-group-item list-group-item-action d-flex align-items-center">Plans</a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Billing & Invoices</a>
                      </nav>

                      <h2 class="subheader mt-4">Experience</h2>

                      <nav aria-label="Experience" class="list-group list-group-transparent">
                        <a href="#" class="list-group-item list-group-item-action">Give Feedback</a>
                      </nav>
                    </div>
                  </div>
                  <!-- END SETTINGS NAV -->
                  <div class="col-12 col-md-9 d-flex flex-column">
                    <div class="card-body">
                      <h2 class="mb-4">My Account</h2>

                      <h2 class="card-title">Profile Details</h2>

                      <div class="row align-items-center">
                        <div class="col-auto"><span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar avatar-xl"></span></div>
                        <div class="col-auto"><button type="button" class="btn">Change avatar</button></div>
                        <div class="col-auto"><button type="button" class="btn btn-ghost-danger">Delete avatar</button></div>
                      </div>

                      <h2 class="card-title mt-4">Business Profile</h2>

                      <div class="row g-3">
                        <div class="col-md">
                          <label class="form-label" for="business-name"> Business Name </label>

                          <input type="text" class="form-control" id="business-name" name="business-name" value="Tabler" />
                        </div>
                        <div class="col-md">
                          <label class="form-label" for="business-id"> Business ID </label>

                          <input type="text" class="form-control" id="business-id" name="business-id" value="560afc32" />
                        </div>
                        <div class="col-md">
                          <label class="form-label" for="location"> Location </label>

                          <input type="text" class="form-control" id="location" name="location" value="Peimei, China" />
                        </div>
                      </div>

                      <h2 class="card-title mt-4">Email</h2>
                      <p class="card-subtitle">This contact will be shown to others publicly, so choose it carefully.</p>

                      <div>
                        <div class="row g-2">
                          <div class="col-auto">
                            <label class="form-label visually-hidden" for="email"> Email </label>

                            <input type="email" class="form-control w-auto" id="email" name="email" value="paweluna@howstuffworks.com" autocomplete="email" />
                          </div>
                          <div class="col-auto"><button type="button" class="btn">Change</button></div>
                        </div>
                      </div>

                      <h2 class="card-title mt-4">Password</h2>
                      <p class="card-subtitle">You can set a permanent password if you don't want to use temporary login codes.</p>
                      <div>
                        <button type="button" class="btn">Set new password</button>
                      </div>

                      <h2 class="card-title mt-4">Public profile</h2>
                      <p class="card-subtitle">Making your profile public means that anyone on the Dashkit network will be able to find you.</p>
                      <div>
                        <label class="form-check form-switch form-switch-lg">
                          <input class="form-check-input" type="checkbox" />

                          <span class="form-check-label form-check-label-on">You&#39;re currently visible</span>
                          <span class="form-check-label form-check-label-off">You&#39;re currently invisible</span>
                        </label>
                      </div>
                    </div>
                    <div class="card-footer bg-transparent mt-auto">
                      <div class="btn-list justify-content-end">
                        <button type="button" class="btn">Cancel</button>
                        <button type="button" class="btn btn-primary">Submit</button>
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
