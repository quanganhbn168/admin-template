<x-preview.page :title='"Password strength"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Password strength</h1>

                  <div class="text-secondary mt-1">A strength meter rates the password as the user types and fills a segmented bar, so weak passwords are visible before the form is sent.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/forms/strength" target="_blank" rel="noopener" class="link-secondary">
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
                      <p class="card-subtitle">Add <code>data-bs-strength</code> to a <code>strength</code> element next to the field. A <code>strength-text</code> shows the label.</p>
                      <div class="mb-0">
                        <label class="form-label" for="strength-basic"> Password </label>

                        <input type="password" id="strength-basic" class="form-control" placeholder="Type a password…" autocomplete="new-password" />
                        <div class="strength" data-bs-strength aria-label="Password strength"><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span></div>
                        <div class="strength-text"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Rules until the first letter</h2>
                      <p class="card-subtitle">Text written inside <code>strength-text</code> shows while the field is empty, so the password rules can stand there until a level takes over.</p>
                      <div class="mb-0">
                        <label class="form-label" for="strength-hint"> Password </label>

                        <input type="password" id="strength-hint" class="form-control" placeholder="Type a password…" autocomplete="new-password" />
                        <div class="strength" data-bs-strength aria-label="Password strength"><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span></div>
                        <div class="strength-text">Use 8 to 20 characters, with letters and numbers.</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Without a label</h2>
                      <p class="card-subtitle">The <code>strength-text</code> is optional. Left out, the meter is the only feedback.</p>
                      <div class="mb-0">
                        <label class="form-label" for="strength-bare"> Password </label>

                        <input type="password" id="strength-bare" class="form-control" value="Abcdefgh1!" autocomplete="new-password" />
                        <div class="strength" data-bs-strength aria-label="Password strength"><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Number of segments</h2>
                      <p class="card-subtitle">Segments fill in proportion, so a meter can have three, four or more of them.</p>
                      <div class="mb-3">
                        <label class="form-label" for="strength-three"> Three segments </label>

                        <input type="password" id="strength-three" class="form-control" value="abcdefghijkl" autocomplete="new-password" />
                        <div class="strength" data-bs-strength aria-label="Password strength, three segments"><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span></div>
                      </div>
                      <div class="mb-0">
                        <label class="form-label" for="strength-six"> Six segments </label>

                        <input type="password" id="strength-six" class="form-control" value="abcdefghijkl" autocomplete="new-password" />
                        <div class="strength" data-bs-strength aria-label="Password strength, six segments">
                          <span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Own labels</h2>
                      <p class="card-subtitle">Pass <code>data-bs-messages</code> as JSON to rename the levels.</p>
                      <div class="mb-0">
                        <label class="form-label" for="strength-messages"> Password </label>

                        <input type="password" id="strength-messages" class="form-control" value="Abcdefgh1!" autocomplete="new-password" />
                        <div class="strength" data-bs-strength data-bs-messages='{"weak":"Too easy","fair":"Could be better","good":"Solid","strong":"Excellent"}' aria-label="Password strength">
                          <span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span>
                        </div>
                        <div class="strength-text"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Stricter scoring</h2>
                      <p class="card-subtitle">Raise <code>data-bs-min-length</code> and <code>data-bs-thresholds</code> to demand more before a password counts as strong.</p>
                      <div class="mb-0">
                        <label class="form-label" for="strength-strict"> Password </label>

                        <input type="password" id="strength-strict" class="form-control" value="Abcdefgh1!" autocomplete="new-password" />
                        <div class="strength" data-bs-strength data-bs-min-length="12" data-bs-thresholds="[3,5,7]" aria-label="Password strength"><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span></div>
                        <div class="strength-text"></div>

                        <div id="strength-strict-hint" class="form-text">The same password rates lower here than in the first card.</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Pointing at a field</h2>
                      <p class="card-subtitle">With several password fields, name the one to rate with <code>data-bs-input</code>.</p>
                      <div class="mb-3">
                        <label class="form-label" for="strength-new"> New password </label>

                        <div class="input-group input-group-flat">
                          <input type="password" class="form-control" placeholder="Enter a new password" autocomplete="new-password" id="strength-new" />

                          <span class="input-group-text">
                            <button type="button" class="link-secondary input-group-link border-0 bg-transparent p-0" title="Show password" aria-label="Show password" aria-pressed="false" data-bs-toggle="tooltip" data-password-toggle="strength-new">
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

                        <div class="strength" data-bs-strength data-bs-input="#strength-new" aria-label="New password strength"><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span></div>
                        <div class="strength-text"></div>
                      </div>
                      <div class="mb-0">
                        <label class="form-label" for="strength-confirm"> Confirm password </label>

                        <div class="input-group input-group-flat">
                          <input type="password" class="form-control" placeholder="Repeat the password" autocomplete="new-password" id="strength-confirm" />

                          <span class="input-group-text">
                            <button type="button" class="link-secondary input-group-link border-0 bg-transparent p-0" title="Show password" aria-label="Show password" aria-pressed="false" data-bs-toggle="tooltip" data-password-toggle="strength-confirm">
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
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Reacting to the level</h2>
                      <p class="card-subtitle">Every change of level fires <code>change.bs.strength</code> with the level and the score.</p>
                      <div class="mb-3">
                        <label class="form-label" for="strength-event"> Password </label>

                        <input type="password" id="strength-event" class="form-control" placeholder="Type a password…" autocomplete="new-password" />
                        <div class="strength" data-bs-strength aria-label="Password strength" id="strength-event-meter"><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span></div>
                      </div>
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-secondary-lt" id="strength-event-level">No password</span>
                        <button type="button" id="strength-event-submit" disabled class="btn btn-primary btn-sm">Create account</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Without a field</h2>
                      <p class="card-subtitle">Without a password field in its parent and without <code>data-bs-input</code>, the meter stays empty.</p>
                      <div class="strength" data-bs-strength aria-label="Password strength"><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span><span class="strength-segment"></span></div>
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
      /*
              Shows the level in a badge and only enables the button from "good" up.
              The meter stays a hint: a real form validates on the server too.
              */
      document.addEventListener('DOMContentLoaded', () => {
        const meter = document.getElementById('strength-event-meter')
        const badge = document.getElementById('strength-event-level')
        const submit = document.getElementById('strength-event-submit')
        const colors = { weak: 'red', fair: 'yellow', good: 'azure', strong: 'green' }

        meter.addEventListener('change.bs.strength', (event) => {
          const level = event.strength
          badge.className = `badge bg-${level ? colors[level] : 'secondary'}-lt`
          badge.textContent = level ? `${level} (${event.score} ${event.score === 1 ? 'point' : 'points'})` : 'No password'
          submit.disabled = level !== 'good' && level !== 'strong'
        })
      })
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
