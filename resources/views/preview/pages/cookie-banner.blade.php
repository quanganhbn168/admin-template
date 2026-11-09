<x-preview.page :title='"Cookie banner"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Cookie banner</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <!-- BEGIN OFFCANVAS -->
              <div class="offcanvas offcanvas-bottom show h-auto" tabindex="-1" role="dialog" id="offcanvasBottom" aria-modal="true">
                <div class="offcanvas-body">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col">
                        <strong>Do you like cookies?</strong> 🍪 We use cookies to ensure you get the best experience on our website.
                        <a href="/preview/terms-of-service" target="_blank">Learn more</a>
                      </div>
                      <div class="col-auto">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="offcanvas">Essential Cookies Only</button>
                      </div>
                      <div class="col-auto">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="offcanvas">Allow All Cookies</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END OFFCANVAS -->
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
