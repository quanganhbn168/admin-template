<x-preview.page :title='"Pagination"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Pagination</h1>

                  <div class="text-secondary mt-1">Pagination splits a long list of results into pages, with Prev/Next controls.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/pagination" target="_blank" rel="noopener" class="link-secondary">
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
                    <div class="card-body">
                      <h2 class="card-title">Numbered</h2>
                      <p class="card-subtitle">Page numbers, with or without Prev/Next text labels (<code>page-text</code>).</p>
                      <!-- BEGIN PAGINATION -->
                      <nav aria-label="Numbered pagination">
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true" aria-label="Previous page">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M15 6l-6 6l6 6" /></svg>
                            </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Page 1"> 1 </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Page 2"> 2 </a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#" aria-label="Page 3" aria-current="page"> 3 </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Page 4"> 4 </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Page 5"> 5 </a>
                          </li>

                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next page">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M9 6l6 6l-6 6" /></svg>
                            </a>
                          </li>
                        </ul>
                      </nav>
                      <!-- END PAGINATION -->
                      <!-- BEGIN PAGINATION -->
                      <nav aria-label="Pagination with text">
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link page-text" href="#" tabindex="-1" aria-disabled="true"> Previous </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Page 1"> 1 </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Page 2"> 2 </a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#" aria-label="Page 3" aria-current="page"> 3 </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Page 4"> 4 </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Page 5"> 5 </a>
                          </li>

                          <li class="page-item">
                            <a class="page-link page-text" href="#"> Next </a>
                          </li>
                        </ul>
                      </nav>
                      <!-- END PAGINATION -->
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With descriptions</h2>
                      <p class="card-subtitle">Name the adjacent page with <code>page-item-subtitle</code> for the direction and <code>page-item-title</code> for the page name.</p>
                      <!-- BEGIN PAGINATION -->
                      <nav aria-label="Pagination with descriptions">
                        <ul class="pagination">
                          <li class="page-item page-prev disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                              <div class="page-item-subtitle">previous</div>
                              <div class="page-item-title">Getting started</div>
                            </a>
                          </li>

                          <li class="page-item page-next">
                            <a class="page-link" href="#">
                              <div class="page-item-subtitle">next</div>
                              <div class="page-item-title">Breadcrumbs</div>
                            </a>
                          </li>
                        </ul>
                      </nav>
                      <!-- END PAGINATION -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
