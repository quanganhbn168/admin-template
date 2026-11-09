<x-preview.page :title='"Steps"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Steps</h1>

                  <div class="text-secondary mt-1">Steps show progress through a numbered or labeled sequence, as a horizontal bar, breadcrumb, or vertical timeline.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/step" target="_blank" rel="noopener" class="link-secondary">
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
              <div class="row row-cards mb-5">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Horizontal</h2>
                      <p class="card-subtitle">Numbered steps for a linear process, with the current step highlighted.</p>
                      <ul class="steps steps-green my-4">
                        <li class="step-item">1</li>
                        <li class="step-item active">2</li>
                        <li class="step-item">3</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Horizontal counter</h2>
                      <p class="card-subtitle">The same steps without numbers, for a more minimal look.</p>
                      <ol class="steps steps-green steps-counter my-4" aria-label="Progress">
                        <li class="step-item">
                          <a href="#">
                            <span class="visually-hidden">Step 1 (completed)</span>
                          </a>
                        </li>
                        <li class="step-item active">
                          <a href="#" aria-current="step">
                            <span class="visually-hidden">Step 2 (current)</span>
                          </a>
                        </li>
                        <li class="step-item">
                          <span>
                            <span class="visually-hidden">Step 3</span>
                          </span>
                        </li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With labels</h2>
                      <p class="card-subtitle">Give each step a title instead of a number.</p>
                      <ul class="steps steps-green steps-counter my-4">
                        <li class="step-item">Cart</li>
                        <li class="step-item active">Billing Information</li>
                        <li class="step-item">Confirmation</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Breadcrumb arrows</h2>
                      <p class="card-subtitle">Chevron-style steps, useful for wizards and checkouts.</p>
                      <ol class="breadcrumb breadcrumb-arrows">
                        <li class="breadcrumb-item"><a href="#">Step one</a></li>
                        <li class="breadcrumb-item active"><a href="#">Step two</a></li>
                        <li class="breadcrumb-item disabled"><a href="#">Step three</a></li>
                        <li class="breadcrumb-item disabled"><a href="#">Step four</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Breadcrumb numbered</h2>
                      <p class="card-subtitle">Number each step and mute the ones not yet reached.</p>
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">1. Step one</a></li>
                        <li class="breadcrumb-item"><a href="#">2. Step two</a></li>
                        <li class="breadcrumb-item active"><a href="#">3. Step three</a></li>
                        <li class="breadcrumb-item disabled"><a href="#">4. Step four</a></li>
                        <li class="breadcrumb-item disabled"><a href="#">5. Step five</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Breadcrumb muted</h2>
                      <p class="card-subtitle">A quieter style for steps that shouldn't compete with the rest of the page.</p>
                      <ol class="breadcrumb breadcrumb-muted">
                        <li class="breadcrumb-item"><a href="#">1. Step one</a></li>
                        <li class="breadcrumb-item"><a href="#">2. Step two</a></li>
                        <li class="breadcrumb-item active"><a href="#">3. Step three</a></li>
                        <li class="breadcrumb-item disabled"><a href="#">4. Step four</a></li>
                        <li class="breadcrumb-item disabled"><a href="#">5. Step five</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row row-cards">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Vertical</h2>
                      <p class="card-subtitle">A title and description per step, for a detailed timeline.</p>
                      <ul class="steps steps-vertical">
                        <li class="step-item">
                          <div class="h4 m-0">Order received</div>
                          <div class="text-secondary">The order was placed and payment was confirmed. A confirmation email is on its way.</div>
                        </li>
                        <li class="step-item">
                          <div class="h4 m-0">Preparing</div>
                          <div class="text-secondary">The warehouse picked and packed the items.</div>
                        </li>
                        <li class="step-item active">
                          <div class="h4 m-0">Out for delivery</div>
                          <div class="text-secondary">The courier has the package and is on the way.</div>
                        </li>
                        <li class="step-item">
                          <div class="h4 m-0">Delivered</div>
                          <div class="text-secondary">Signed for at the delivery address.</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Vertical counter</h2>
                      <p class="card-subtitle">Numbered steps in a vertical list, without descriptions.</p>
                      <ul class="steps steps-counter steps-vertical">
                        <li class="step-item">Step one</li>
                        <li class="step-item">Step two</li>
                        <li class="step-item active">Step three</li>
                        <li class="step-item">Step four</li>
                        <li class="step-item">Step five</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
