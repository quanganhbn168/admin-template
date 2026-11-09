<x-preview.page :title='"Hover gallery"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Hover gallery</h1>

                  <div class="text-secondary mt-1">Hover galleries show one image and switch to the next ones as the pointer moves across.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/hover-gallery" target="_blank" rel="noopener" class="link-secondary">
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
                      <p class="card-subtitle">Wrap each image in <code>.hover-gallery-item</code>; every item is one hover column.</p>
                      <div class="hover-gallery rounded">
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/products/backpack-1.jpg" alt="Black leather backpack, front view" />
                        </div>
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/products/backpack-2.jpg" alt="Black leather backpack, view from the front left" />
                        </div>
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/products/backpack-3.jpg" alt="Black leather backpack, side view" />
                        </div>
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/products/backpack-4.jpg" alt="Black leather backpack, back view with the shoulder straps" />
                        </div>
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/products/backpack-5.jpg" alt="Brass buckle and leather grain of the backpack" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With indicators</h2>
                      <p class="card-subtitle">Add <code>.hover-gallery-indicators</code> to show which image is on display.</p>
                      <div class="hover-gallery hover-gallery-indicators rounded">
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/products/watch-1.jpg" alt="Steel watch with a black dial, front view" />
                        </div>
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/products/watch-2.jpg" alt="Steel watch with a black dial, view from the front left" />
                        </div>
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/products/watch-3.jpg" alt="Steel watch, side view with the crown" />
                        </div>
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/products/watch-4.jpg" alt="Steel watch, back view with the case back and buckle" />
                        </div>
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/products/watch-5.jpg" alt="Close-up of the watch dial, bezel and crown" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Aspect ratio</h2>
                      <p class="card-subtitle">Set <code>--tblr-hover-gallery-aspect-ratio</code> to change the shape.</p>
                      <div class="hover-gallery hover-gallery-indicators rounded" style="--tblr-hover-gallery-aspect-ratio: 16 / 9">
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg" alt="Blue sofa with pillows in a designer living room interior" />
                        </div>
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/photos/colorful-exotic-flowers-and-greenery.jpg" alt="Colorful Exotic Flowers and Greenery" />
                        </div>
                        <div class="hover-gallery-item">
                          <img src="/tabler/static/photos/city-lights-reflected-in-the-water-at-night.jpg" alt="City lights reflected in the water at night" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="hover-gallery hover-gallery-indicators card-img-top">
                      <div class="hover-gallery-item">
                        <img src="/tabler/static/products/backpack-1.jpg" alt="Black leather backpack, front view" />
                      </div>
                      <div class="hover-gallery-item">
                        <img src="/tabler/static/products/backpack-2.jpg" alt="Black leather backpack, view from the front left" />
                      </div>
                      <div class="hover-gallery-item">
                        <img src="/tabler/static/products/backpack-3.jpg" alt="Black leather backpack, side view" />
                      </div>
                      <div class="hover-gallery-item">
                        <img src="/tabler/static/products/backpack-4.jpg" alt="Black leather backpack, back view with the shoulder straps" />
                      </div>
                      <div class="hover-gallery-item">
                        <img src="/tabler/static/products/backpack-5.jpg" alt="Brass buckle and leather grain of the backpack" />
                      </div>
                    </div>
                    <div class="card-body">
                      <h2 class="card-title">Product card</h2>
                      <p class="card-subtitle">Use the gallery with <code>.card-img-top</code> in place of the card image.</p>
                      <div class="h3 m-0">$189</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
