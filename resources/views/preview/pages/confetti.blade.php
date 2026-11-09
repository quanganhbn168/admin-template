<x-preview.page :title='"Confetti"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Confetti</h1>

                  <div class="text-secondary mt-1">Confetti pours a short shower of colored pieces over the page to celebrate a finished task, a signup or a first success.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/confetti" target="_blank" rel="noopener" class="link-secondary">
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
                      <p class="card-subtitle">Add <code>data-bs-toggle="confetti"</code> to a button. A click pours the shower; it thins out and clears by itself.</p>
                      <button type="button" data-bs-toggle="confetti" class="btn">Celebrate</button>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Amount and length</h2>
                      <p class="card-subtitle">Set <code>data-bs-count</code> for the number of pieces and <code>data-bs-duration</code> for how long they keep pouring, in milliseconds.</p>
                      <div class="btn-list">
                        <button type="button" data-bs-toggle="confetti" data-bs-count="60" data-bs-duration="800" class="btn">A few</button>
                        <button type="button" data-bs-toggle="confetti" data-bs-count="600" data-bs-duration="6000" class="btn">A lot</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Colors</h2>
                      <p class="card-subtitle">By default the pieces use the Tabler palette. Pass a comma-separated list in <code>data-bs-colors</code> to use your own.</p>
                      <div class="btn-list">
                        <button type="button" data-bs-toggle="confetti" data-bs-colors="#f76707, #f59f00, #d63939, #d6336c" class="btn">Warm</button>
                        <button type="button" data-bs-toggle="confetti" data-bs-colors="#066fd1, #4299e1, #4263eb, #17a2b8" class="btn">Cool</button>
                        <button type="button" data-bs-toggle="confetti" data-bs-colors="#182433, #667382, #dce1e7" class="btn">Mono</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Speed</h2>
                      <p class="card-subtitle">Set <code>data-bs-speed</code> to scale the fall. <code>1</code> is the default, a lower value floats, a higher one drops.</p>
                      <div class="btn-list">
                        <button type="button" data-bs-toggle="confetti" data-bs-speed="0.5" class="btn">Float</button>
                        <button type="button" data-bs-toggle="confetti" class="btn">Default</button>
                        <button type="button" data-bs-toggle="confetti" data-bs-speed="2" class="btn">Drop</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Target and events</h2>
                      <p class="card-subtitle">Point <code>data-bs-target</code> at another element. <code>start.bs.confetti</code> and <code>end.bs.confetti</code> fire on that element, not on the trigger.</p>
                      <div class="d-flex align-items-center gap-3">
                        <button type="button" data-bs-toggle="confetti" data-bs-target="#confetti-shipped" data-bs-count="150" data-bs-duration="1500" class="btn">Ship it</button>
                        <span class="badge" id="confetti-shipped">Idle</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">From JavaScript</h2>
                      <p class="card-subtitle">Call <code>burst()</code> on a <code>tabler.Confetti</code> instance when something else finishes, for example a form that was saved.</p>
                      <form id="confetti-form" class="d-flex align-items-end gap-2">
                        <div class="flex-fill">
                          <label class="form-label" for="confetti-project">Project name</label>
                          <input type="text" id="confetti-project" class="form-control" value="Tabler" autocomplete="off" />
                        </div>
                        <button type="submit" class="btn">Create</button>
                      </form>
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
      /*
      One burst when the page opens. The instance lives on the body, so no element
      on the page has to own it.
      */
      document.addEventListener('DOMContentLoaded', () => {
        tabler.Confetti.getOrCreateInstance(document.body).burst()
      })
    </script>
<script>
      /*
              Shows the confetti events on the target element: "Pouring" while the shower
              runs and "Done" once the last piece has landed.
              */
      document.addEventListener('DOMContentLoaded', () => {
        const badge = document.getElementById('confetti-shipped')

        badge.addEventListener('start.bs.confetti', () => {
          badge.textContent = 'Pouring…'
        })

        badge.addEventListener('end.bs.confetti', () => {
          badge.textContent = 'Done'
        })
      })
    </script>
<script>
      /*
              Bursts confetti from code once the form is "saved". The instance lives on
              the form, so the events fire there.
              */
      document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('confetti-form')
        const confetti = tabler.Confetti.getOrCreateInstance(form, { count: 150, duration: 1500 })

        form.addEventListener('submit', (event) => {
          event.preventDefault()
          confetti.burst()
        })
      })
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
