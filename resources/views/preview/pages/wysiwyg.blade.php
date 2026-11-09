<x-preview.page :title='"HugeRTE"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">HugeRTE</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/wysiwyg" target="_blank" rel="noopener" class="link-secondary">
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
                  <h2 class="card-title">Rich text editor</h2>
                  <p class="card-subtitle">A formatting toolbar for headings, lists, and links, dropped into a normal form field.</p>
                  <div class="mb-3">
                    <label class="form-label" for="wysiwyg-name"> Your name </label>

                    <input type="text" class="form-control" id="wysiwyg-name" placeholder="Name" />
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="hugerte-description"> Description </label>

                    <textarea id="hugerte-description">Hello, <b>Tabler</b>!</textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
<x-slot:scripts>
@verbatim
<script src="/tabler/libs/hugerte/hugerte.min.js" defer></script>
<script>
      ;(function () {
        const selector = '#hugerte-description'

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
