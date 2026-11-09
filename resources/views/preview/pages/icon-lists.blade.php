<x-preview.page :title='"Icon lists"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Icon lists</h1>

                  <div class="text-secondary mt-1">Icon lists replace the bullets of a list with icons, such as a checklist of features.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/icon-list" target="_blank" rel="noopener" class="link-secondary">
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
                      <h2 class="card-title">Basic</h2>
                      <p class="card-subtitle">Add <code>.list-icon</code> to a list. The first icon in each entry is the marker.</p>
                      <ul class="list-icon">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Unlimited projects
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Priority support
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Custom domains
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Advanced analytics
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Color</h2>
                      <p class="card-subtitle">Color all markers with the <code>--tblr-list-icon-color</code> variable, or one marker with a <code>text-*</code> utility.</p>
                      <ul class="list-icon" style="--tblr-list-icon-color: var(--tblr-green)">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Unlimited projects
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Priority support
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Custom domains
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Advanced analytics
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Different icons</h2>
                      <p class="card-subtitle">Each entry can use its own icon and color, for example a status.</p>
                      <ul class="list-icon">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/circle-check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" /></svg
                          >Account created
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/circle-check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" /></svg
                          >Email confirmed
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/progress -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-blue">
                            <path d="M10 20.777a8.942 8.942 0 0 1 -2.48 -.969" />
                            <path d="M14 3.223a9.003 9.003 0 0 1 0 17.554" />
                            <path d="M4.579 17.093a8.961 8.961 0 0 1 -1.227 -2.592" />
                            <path d="M3.124 10.5c.16 -.95 .468 -1.85 .9 -2.675l.169 -.305" />
                            <path d="M6.907 4.579a8.954 8.954 0 0 1 3.093 -1.356" /></svg
                          >Profile in progress
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/circle-dashed -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95" />
                            <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44" />
                            <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92" />
                            <path d="M8.56 20.31a9 9 0 0 0 3.44 .69" />
                            <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95" />
                            <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44" />
                            <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92" />
                            <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69" /></svg
                          >Add a payment method
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Included and excluded</h2>
                      <p class="card-subtitle">A check for what the plan has and a muted cross for what it lacks.</p>
                      <ul class="list-icon">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green"><path d="M5 12l5 5l10 -10" /></svg>Unlimited
                          projects
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green"><path d="M5 12l5 5l10 -10" /></svg>Priority support
                        </li>
                        <li class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" /></svg
                          >Custom domains
                        </li>
                        <li class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" /></svg
                          >Advanced analytics
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Inline</h2>
                      <p class="card-subtitle">Add <code>.list-icon-inline</code> to show short entries in a row that wraps.</p>
                      <ul class="list-icon list-icon-inline" style="--tblr-list-icon-color: var(--tblr-green)">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Boxed
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Combined
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Condensed
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Fluid
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Horizontal
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Vertical
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>RTL mode
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Dark mode
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Long entries</h2>
                      <p class="card-subtitle">The marker stays on the first line when an entry wraps.</p>
                      <ul class="list-icon">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/shield-check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green">
                            <path d="M11.46 20.846a12 12 0 0 1 -7.96 -14.846a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 -.09 7.06" />
                            <path d="M15 19l2 2l4 -4" /></svg
                          >Two-factor authentication keeps the account safe even when the password leaks.
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/cloud-upload -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-blue">
                            <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />
                            <path d="M9 15l3 -3l3 3" />
                            <path d="M12 12l0 9" /></svg
                          >Backups run every night and are kept for thirty days in a separate region.
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/headset -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-purple">
                            <path d="M4 14v-3a8 8 0 1 1 16 0v3" />
                            <path d="M18 19c0 1.657 -2.686 3 -6 3" />
                            <path d="M4 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3" />
                            <path d="M15 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3" /></svg
                          >Support answers within one business day, in English and Polish.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Small text</h2>
                      <p class="card-subtitle">The marker follows the line height of the list, so it also fits small or large text.</p>
                      <ul class="list-icon small" style="--tblr-list-icon-color: var(--tblr-green)">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Unlimited projects
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Priority support
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Custom domains
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Advanced analytics
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Pros and cons</h2>
                      <p class="card-subtitle">Two lists side by side, green checks against red crosses.</p>
                      <div class="row g-3">
                        <div class="col-6">
                          <ul class="list-icon" style="--tblr-list-icon-color: var(--tblr-green)">
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Fast to set up
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>No vendor lock-in
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Great documentation
                            </li>
                          </ul>
                        </div>
                        <div class="col-6">
                          <ul class="list-icon" style="--tblr-list-icon-color: var(--tblr-red)">
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M18 6l-12 12" />
                                <path d="M6 6l12 12" /></svg
                              >No built-in auth
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M18 6l-12 12" />
                                <path d="M6 6l12 12" /></svg
                              >Smaller community
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Password requirements</h2>
                      <p class="card-subtitle">A checklist under a form field, each rule marked as met or not.</p>
                      <div class="mb-3">
                        <label class="form-label" for="icon-list-password">Password</label>
                        <input type="password" class="form-control" id="icon-list-password" value="Tabler2026" autocomplete="new-password" />
                      </div>
                      <ul class="list-icon small">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/circle-check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" /></svg
                          >At least 8 characters
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/circle-check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" /></svg
                          >One upper case letter
                        </li>
                        <li class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /></svg>One
                          number
                        </li>
                        <li class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/circle -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /></svg>One
                          special character
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Release notes</h2>
                      <p class="card-subtitle">An icon per kind of change: added, improved, fixed, removed.</p>
                      <ul class="list-icon">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" /></svg
                          >Added the icon list component
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/arrow-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-blue">
                            <path d="M12 5l0 14" />
                            <path d="M18 11l-6 -6" />
                            <path d="M6 11l6 -6" /></svg
                          >Faster rendering of large tables
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/bug -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-red">
                            <path d="M9 9v-1a3 3 0 0 1 6 0v1" />
                            <path d="M8 9h8a6 6 0 0 1 1 3v3a5 5 0 0 1 -10 0v-3a6 6 0 0 1 1 -3" />
                            <path d="M3 13l4 0" />
                            <path d="M17 13l4 0" />
                            <path d="M12 20l0 -6" />
                            <path d="M4 19l3.35 -2" />
                            <path d="M20 19l-3.35 -2" />
                            <path d="M4 7l3.75 2.4" />
                            <path d="M20 7l-3.75 2.4" /></svg
                          >Fixed the dropdown position in RTL mode
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-secondary">
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg
                          >Removed the old inline list dots
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Contact details</h2>
                      <p class="card-subtitle">Icons as markers for a list of links.</p>
                      <ul class="list-icon">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                            <path d="M3 7l9 6l9 -6" /></svg
                          ><a href="/cdn-cgi/l/email-protection#2a424f4646456a5e4b48464f58044345"><span class="__cf_email__" data-cfemail="4129242d2d2e013520232d24336f282e">[email&#160;protected]</span></a>
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/phone -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg
                          ><a href="tel:+15551234567">+1 (555) 123-4567</a>
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" /></svg
                          >1 Market Street, San Francisco
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/world -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M3.6 9h16.8" />
                            <path d="M3.6 15h16.8" />
                            <path d="M11.5 3a17 17 0 0 0 0 18" />
                            <path d="M12.5 3a17 17 0 0 1 0 18" /></svg
                          ><a href="https://tabler.io">tabler.io</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Entries with a description</h2>
                      <p class="card-subtitle">A title and a muted second line in each entry; the marker stays on the title.</p>
                      <ul class="list-icon" style="--tblr-list-icon-color: var(--tblr-green); --tblr-list-icon-row-gap: 1rem">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>
                          <div>
                            <div class="fw-medium">Unlimited projects</div>
                            <div class="text-secondary small">Create as many projects as you need, with no extra charge.</div>
                          </div>
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>
                          <div>
                            <div class="fw-medium">Priority support</div>
                            <div class="text-secondary small">Your questions go to the top of the queue.</div>
                          </div>
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>
                          <div>
                            <div class="fw-medium">Custom domains</div>
                            <div class="text-secondary small">Serve every project from your own domain with a free certificate.</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Large text</h2>
                      <p class="card-subtitle">Raise the font size and the marker size together for a landing page.</p>
                      <ul class="list-icon fs-3" style="--tblr-list-icon-color: var(--tblr-primary); --tblr-list-icon-size: 1.5rem; --tblr-list-icon-row-gap: 0.75rem">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Unlimited projects
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Priority support
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Custom domains
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Feature overview</h2>
                      <p class="card-subtitle">A long list split into columns, as on a comparison or a landing page.</p>
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <ul class="list-icon" style="--tblr-list-icon-color: var(--tblr-green)">
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Boxed
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Combined
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Condensed
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Fluid
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Horizontal
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Vertical
                            </li>
                          </ul>
                        </div>
                        <div class="col-sm-6">
                          <ul class="list-icon" style="--tblr-list-icon-color: var(--tblr-green)">
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Dark mode
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>RTL mode
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Navbar sticky
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Navbar overlap
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Folded sidebar
                            </li>
                            <li>
                              <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M5 12l5 5l10 -10" /></svg>Auto color mode
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Free</h2>
                      <div class="display-6 fw-bold mb-3">
                        $0
                        <span class="fs-4 fw-normal text-secondary">/mo</span>
                      </div>
                      <ul class="list-icon mb-3">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green"><path d="M5 12l5 5l10 -10" /></svg>Unlimited
                          projects
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green"><path d="M5 12l5 5l10 -10" /></svg>Priority support
                        </li>
                        <li class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" /></svg
                          >Custom domains
                        </li>
                        <li class="text-secondary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/x -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" /></svg
                          >Advanced analytics
                        </li>
                      </ul>
                      <a href="#" class="btn w-100"> Choose Free </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Pro</h2>
                      <div class="display-6 fw-bold mb-3">
                        $29
                        <span class="fs-4 fw-normal text-secondary">/mo</span>
                      </div>
                      <ul class="list-icon mb-3">
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green"><path d="M5 12l5 5l10 -10" /></svg>Unlimited
                          projects
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green"><path d="M5 12l5 5l10 -10" /></svg>Priority support
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green"><path d="M5 12l5 5l10 -10" /></svg>Custom domains
                        </li>
                        <li>
                          <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-green"><path d="M5 12l5 5l10 -10" /></svg>Advanced
                          analytics
                        </li>
                      </ul>
                      <a href="#" class="btn w-100 btn-primary"> Choose Pro </a>
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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
