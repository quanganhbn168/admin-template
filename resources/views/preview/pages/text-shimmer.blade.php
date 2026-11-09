<x-preview.page :title='"Text shimmer"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Text shimmer</h1>

                  <div class="text-secondary mt-1">A highlight that sweeps across a label while an agent thinks or a task runs.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/text-shimmer" target="_blank" rel="noopener" class="link-secondary">
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
                      <p class="card-subtitle">Add <code>.text-shimmer</code> to a short label that reports work in progress.</p>
                      <div class="d-flex flex-column gap-2">
                        <span role="status" aria-live="polite" class="text-shimmer">Thinking… </span><span role="status" aria-live="polite" class="text-shimmer">Generating a reply… </span><span role="status" aria-live="polite" class="text-shimmer">Searching the web… </span
                        ><span role="status" aria-live="polite" class="text-shimmer">Reading 3 files… </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With a loader</h2>
                      <p class="card-subtitle">Put an empty <code>.text-shimmer-loader</code> before the label. One element, a small spinner in the text color.</p>
                      <div class="d-flex flex-column gap-2">
                        <span role="status" aria-live="polite" class="text-shimmer"><span class="text-shimmer-loader" aria-hidden="true"></span>Thinking… </span><span role="status" aria-live="polite" class="text-shimmer"><span class="text-shimmer-loader" aria-hidden="true"></span>Generating a reply… </span
                        ><span role="status" aria-live="polite" class="text-shimmer"><span class="text-shimmer-loader" aria-hidden="true"></span>Searching the web… </span><span role="status" aria-live="polite" class="text-shimmer"><span class="text-shimmer-loader" aria-hidden="true"></span>Reading 3 files… </span>
                        <span class="text-shimmer text-primary"><span class="text-shimmer-loader" aria-hidden="true"></span>Thinking… </span>
                        <span class="text-shimmer h2 mb-0"><span class="text-shimmer-loader" aria-hidden="true"></span>Thinking… </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Colors</h2>
                      <p class="card-subtitle">The text keeps its own color, so any text utility works.</p>
                      <div class="d-flex flex-column gap-2">
                        <span class="text-shimmer">Thinking… </span>
                        <span class="text-shimmer text-secondary">Thinking… </span>
                        <span class="text-shimmer text-primary">Thinking… </span>
                        <span class="text-shimmer text-green">Thinking… </span>
                        <span class="text-shimmer text-red">Thinking… </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Sizes</h2>
                      <p class="card-subtitle">The shimmer follows the font size.</p>
                      <div class="d-flex flex-column gap-2">
                        <span class="text-shimmer small">Thinking… </span>
                        <span class="text-shimmer">Thinking… </span>
                        <span class="text-shimmer h3 mb-0">Thinking… </span>
                        <span class="text-shimmer h1 mb-0">Thinking… </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Speed</h2>
                      <p class="card-subtitle">Set <code>--tblr-text-shimmer-duration</code> to change the speed of one sweep.</p>
                      <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                          <span style="--tblr-text-shimmer-duration: 1s" class="text-shimmer">Thinking… </span>
                          <span class="text-secondary small">1s</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <span style="--tblr-text-shimmer-duration: 2s" class="text-shimmer">Thinking… </span>
                          <span class="text-secondary small">2s</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <span style="--tblr-text-shimmer-duration: 4s" class="text-shimmer">Thinking… </span>
                          <span class="text-secondary small">4s</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Contrast</h2>
                      <p class="card-subtitle">Set <code>--tblr-text-shimmer-opacity</code> to dim the text more or less between sweeps.</p>
                      <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center gap-2">
                          <span style="--tblr-text-shimmer-opacity: 0.2" class="text-shimmer">Thinking… </span>
                          <span class="text-secondary small">0.2</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <span style="--tblr-text-shimmer-opacity: 0.4" class="text-shimmer">Thinking… </span>
                          <span class="text-secondary small">0.4</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <span style="--tblr-text-shimmer-opacity: 0.7" class="text-shimmer">Thinking… </span>
                          <span class="text-secondary small">0.7</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">In a chat</h2>
                      <p class="card-subtitle">A shimmering label stands in for the reply until it arrives.</p>
                      <div class="d-flex align-items-center gap-2">
                        <span alt class="avatar avatar-xs">AI</span>
                        <span role="status" aria-live="polite" class="text-shimmer text-secondary">Reading the file… </span>
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
