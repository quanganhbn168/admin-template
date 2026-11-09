<x-preview.page :title='"Toasts"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Toasts</h1>

                  <div class="text-secondary mt-1">Toasts show a brief, dismissible notification in the corner of the screen.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/toast" target="_blank" rel="noopener" class="link-secondary">
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
                  <div class="btn-list">
                    <button type="button" data-bs-toggle="toast" data-bs-target="#toast-simple" class="btn">Simple toast</button>
                    <button type="button" data-bs-toggle="toast" data-bs-target="#toast-cookies" class="btn">Cookies toast</button>
                  </div>
                </div>
              </div>

              <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div class="toast" id="toast-simple" role="status" aria-live="polite" aria-atomic="true" data-bs-autohide="false">
                  <div class="toast-header">
                    <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs me-2"></span>
                    <strong class="me-auto">Mallory Hulme</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body">Hello, world! This is a toast message.</div>
                </div>
                <div class="toast" id="toast-cookies" role="status" aria-live="polite" aria-atomic="true" data-bs-autohide="false">
                  <div class="toast-header">
                    <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs me-2"></span>
                    <strong class="me-auto">Mallory Hulme</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body">
                    🍪&nbsp;Our site uses cookies. By continuing to use our site, you agree to our Cookie Policy.
                    <div class="mt-2 pt-2 border-top">
                      <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="toast">I understand</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
