<x-preview.page :title='"Image labels"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Image labels</h1>

                  <div class="text-secondary mt-1">Image labels pin a short text or an icon to a corner of an image.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/image-label" target="_blank" rel="noopener" class="link-secondary">
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
                      <p class="card-subtitle">Wrap the image in <code>.img-labeled</code> and add an <code>.img-label</code> next to it.</p>
                      <div class="img-labeled">
                        <img src="/tabler/static/photos/book-on-the-grass.jpg" class="rounded" width="240" alt="A book on the grass" />
                        <span class="img-label">AI</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With an icon</h2>
                      <p class="card-subtitle">A label can hold an icon, a text, or both. Add <code>.img-label-icon</code> to a label with only an icon.</p>
                      <div class="d-flex flex-wrap gap-3">
                        <div class="img-labeled">
                          <img src="/tabler/static/photos/brainstorming-session-with-creative-designers.jpg" class="rounded" width="160" alt="A brainstorming session" />
                          <span class="img-label"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/player-play -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M7 4v16l13 -8l-13 -8" /></svg> 1:24</span
                          >
                        </div>
                        <div class="img-labeled">
                          <img src="/tabler/static/photos/blond-using-her-laptop-at-her-bedroom.jpg" class="rounded" width="160" alt="A woman using a laptop" />
                          <span class="img-label img-label-icon"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/crown -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4l4 -6" /></svg
                            ><span class="visually-hidden">Premium</span></span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Colors</h2>
                      <p class="card-subtitle">Add a background utility such as <code>.bg-red</code> with its <code>.text-red-fg</code>.</p>
                      <div class="d-flex flex-wrap gap-3">
                        <div class="img-labeled">
                          <img src="/tabler/static/photos/a-visit-to-the-bookstore.jpg" class="rounded" width="110" alt="A visit to the bookstore" />
                          <span class="img-label bg-primary text-primary-fg">New</span>
                        </div>
                        <div class="img-labeled">
                          <img src="/tabler/static/photos/a-visit-to-the-bookstore.jpg" class="rounded" width="110" alt="A visit to the bookstore" />
                          <span class="img-label bg-red text-red-fg">New</span>
                        </div>
                        <div class="img-labeled">
                          <img src="/tabler/static/photos/a-visit-to-the-bookstore.jpg" class="rounded" width="110" alt="A visit to the bookstore" />
                          <span class="img-label bg-green text-green-fg">New</span>
                        </div>
                        <div class="img-labeled">
                          <img src="/tabler/static/photos/a-visit-to-the-bookstore.jpg" class="rounded" width="110" alt="A visit to the bookstore" />
                          <span class="img-label bg-yellow text-yellow-fg">New</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Position</h2>
                      <p class="card-subtitle">Move the label to another corner with <code>.img-label-top-start</code>, <code>.img-label-top-end</code> or <code>.img-label-bottom-start</code>.</p>
                      <div class="d-flex flex-wrap gap-3">
                        <div class="img-labeled">
                          <img src="/tabler/static/photos/a-woman-works-on-a-laptop-at-home.jpg" class="rounded" width="140" alt="A woman working on a laptop" />
                          <span class="img-label img-label-top-start">Top start</span>
                        </div>
                        <div class="img-labeled">
                          <img src="/tabler/static/photos/a-woman-works-on-a-laptop-at-home.jpg" class="rounded" width="140" alt="A woman working on a laptop" />
                          <span class="img-label img-label-top-end">Top end</span>
                        </div>
                        <div class="img-labeled">
                          <img src="/tabler/static/photos/a-woman-works-on-a-laptop-at-home.jpg" class="rounded" width="140" alt="A woman working on a laptop" />
                          <span class="img-label img-label-bottom-start">Bottom start</span>
                        </div>
                        <div class="img-labeled">
                          <img src="/tabler/static/photos/a-woman-works-on-a-laptop-at-home.jpg" class="rounded" width="140" alt="A woman working on a laptop" />
                          <span class="img-label">Bottom end</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Multiple labels</h2>
                      <p class="card-subtitle">Put several labels on one image, each in its own corner.</p>
                      <div class="img-labeled">
                        <img src="/tabler/static/photos/brainstorming-session-with-creative-designers-2.jpg" class="rounded" width="320" alt="Designers at a brainstorming session" />
                        <span class="img-label img-label-top-start bg-red text-red-fg">Live</span>
                        <span class="img-label img-label-top-end"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                          </svg>
                          Members</span
                        >
                        <span class="img-label">4K</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">In a list</h2>
                      <p class="card-subtitle">Labels mark single items in a list of products or media.</p>
                      <div class="row g-3">
                        <div class="col-md-4">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto">
                              <span class="img-labeled">
                                <img src="/tabler/static/photos/book-on-the-grass.jpg" class="rounded" width="120" alt="Reading corner" />
                                <span class="img-label">AI</span>
                              </span>
                            </a>
                            <div class="col">
                              <div class="fw-medium">Reading corner</div>
                              <div class="text-secondary">$129</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto">
                              <span class="img-labeled">
                                <img src="/tabler/static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg" class="rounded" width="120" alt="Designer sofa" />
                                <span class="img-label">New</span>
                              </span>
                            </a>
                            <div class="col">
                              <div class="fw-medium">Designer sofa</div>
                              <div class="text-secondary">$849</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row g-3 align-items-center">
                            <a href="#" class="col-auto">
                              <span class="img-labeled">
                                <img src="/tabler/static/photos/books-and-purple-flowers-on-a-wooden-stool-by-the-bed.jpg" class="rounded" width="120" alt="Bedside stool" />
                                <span class="img-label bg-red text-red-fg">-20%</span>
                              </span>
                            </a>
                            <div class="col">
                              <div class="fw-medium">Bedside stool</div>
                              <div class="text-secondary">$59</div>
                            </div>
                          </div>
                        </div>
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
