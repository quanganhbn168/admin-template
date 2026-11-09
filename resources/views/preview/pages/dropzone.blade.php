<x-preview.page :title='"Dropzone"' :html-attrs='"lang=\"en\""'>
<x-slot:head>
@verbatim
<link href="/tabler/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
@endverbatim
</x-slot:head>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Dropzone</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/dropzone" target="_blank" rel="noopener" class="link-secondary">
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
                    <div class="card-body">
                      <h2 class="card-title">Basic Usage</h2>
                      <p class="card-subtitle">Drag a file in or click to browse — a single drop target for one upload.</p>
                      <form class="dropzone" id="dropzone-default" action="/preview" autocomplete="off" novalidate>
                        <div class="fallback">
                          <label class="visually-hidden" for="dropzone-default-file">Upload file</label>
                          <input id="dropzone-default-file" name="file" type="file" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Multiple File Upload</h2>
                      <p class="card-subtitle">Accept and preview several files at once from the same drop target.</p>
                      <form class="dropzone" id="dropzone-multiple" action="/preview" autocomplete="off" novalidate>
                        <div class="fallback">
                          <label class="visually-hidden" for="dropzone-multiple-file">Upload file</label>
                          <input id="dropzone-multiple-file" name="file" type="file" multiple />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Custom Dropzone</h2>
                      <p class="card-subtitle">Swap in your own label and helper text for the drop target.</p>
                      <form class="dropzone" id="dropzone-custom" action="/preview" autocomplete="off" novalidate>
                        <div class="fallback">
                          <label class="visually-hidden" for="dropzone-custom-file">Upload file</label>
                          <input id="dropzone-custom-file" name="file" type="file" />
                        </div>
                        <div class="dz-message">
                          <h3>Your text here</h3>
                          <span>Your custom description here</span>
                        </div>
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
<script src="/tabler/libs/dropzone/dist/dropzone-min.js" defer></script>
<script>
      ;(function () {
        const dropzoneId = 'dropzone-default'
        const dropzoneSelector = '#dropzone-default'

        window.tabler_dropzone ??= {}

        function initDropzone() {
          const dropzoneEl = document.querySelector(dropzoneSelector)
          const instance = new Dropzone(dropzoneSelector)
          window.tabler_dropzone[dropzoneId] = instance

          // Dropzone.js hides the .fallback label/input once it initializes, which is why
          // role="button" + tabindex only get added here rather than in the static markup —
          // adding them upfront would nest one focusable control (the fallback input) inside
          // another (this "button"). Dropzone.js is also click/drag-only by default: it binds
          // a click handler on the whole element but never wires a keyboard equivalent, so
          // forward Enter/Space to a programmatic click on Dropzone's own hidden file input.
          // Note: that input is appended to <body> (hiddenInputContainer default), not inside
          // dropzoneEl, so it must be reached via the instance rather than a DOM query here.
          dropzoneEl?.setAttribute('role', 'button')
          dropzoneEl?.setAttribute('tabindex', '0')
          dropzoneEl?.setAttribute('aria-label', 'Click or drag files to upload')

          dropzoneEl?.addEventListener('keydown', (event) => {
            if (event.target !== dropzoneEl) return
            if (event.key !== 'Enter' && event.key !== ' ' && event.key !== 'Spacebar') return
            event.preventDefault()
            instance.hiddenFileInput?.click()
          })
        }

        document.readyState !== 'loading' ? initDropzone() : document.addEventListener('DOMContentLoaded', initDropzone, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const dropzoneId = 'dropzone-multiple'
        const dropzoneSelector = '#dropzone-multiple'

        window.tabler_dropzone ??= {}

        function initDropzone() {
          const dropzoneEl = document.querySelector(dropzoneSelector)
          const instance = new Dropzone(dropzoneSelector)
          window.tabler_dropzone[dropzoneId] = instance

          // Dropzone.js hides the .fallback label/input once it initializes, which is why
          // role="button" + tabindex only get added here rather than in the static markup —
          // adding them upfront would nest one focusable control (the fallback input) inside
          // another (this "button"). Dropzone.js is also click/drag-only by default: it binds
          // a click handler on the whole element but never wires a keyboard equivalent, so
          // forward Enter/Space to a programmatic click on Dropzone's own hidden file input.
          // Note: that input is appended to <body> (hiddenInputContainer default), not inside
          // dropzoneEl, so it must be reached via the instance rather than a DOM query here.
          dropzoneEl?.setAttribute('role', 'button')
          dropzoneEl?.setAttribute('tabindex', '0')
          dropzoneEl?.setAttribute('aria-label', 'Click or drag files to upload')

          dropzoneEl?.addEventListener('keydown', (event) => {
            if (event.target !== dropzoneEl) return
            if (event.key !== 'Enter' && event.key !== ' ' && event.key !== 'Spacebar') return
            event.preventDefault()
            instance.hiddenFileInput?.click()
          })
        }

        document.readyState !== 'loading' ? initDropzone() : document.addEventListener('DOMContentLoaded', initDropzone, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const dropzoneId = 'dropzone-custom'
        const dropzoneSelector = '#dropzone-custom'

        window.tabler_dropzone ??= {}

        function initDropzone() {
          const dropzoneEl = document.querySelector(dropzoneSelector)
          const instance = new Dropzone(dropzoneSelector)
          window.tabler_dropzone[dropzoneId] = instance

          // Dropzone.js hides the .fallback label/input once it initializes, which is why
          // role="button" + tabindex only get added here rather than in the static markup —
          // adding them upfront would nest one focusable control (the fallback input) inside
          // another (this "button"). Dropzone.js is also click/drag-only by default: it binds
          // a click handler on the whole element but never wires a keyboard equivalent, so
          // forward Enter/Space to a programmatic click on Dropzone's own hidden file input.
          // Note: that input is appended to <body> (hiddenInputContainer default), not inside
          // dropzoneEl, so it must be reached via the instance rather than a DOM query here.
          dropzoneEl?.setAttribute('role', 'button')
          dropzoneEl?.setAttribute('tabindex', '0')
          dropzoneEl?.setAttribute('aria-label', 'Click or drag files to upload')

          dropzoneEl?.addEventListener('keydown', (event) => {
            if (event.target !== dropzoneEl) return
            if (event.key !== 'Enter' && event.key !== ' ' && event.key !== 'Spacebar') return
            event.preventDefault()
            instance.hiddenFileInput?.click()
          })
        }

        document.readyState !== 'loading' ? initDropzone() : document.addEventListener('DOMContentLoaded', initDropzone, { once: true })
      })()
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
