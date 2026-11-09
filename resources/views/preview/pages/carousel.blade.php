<x-preview.page :title='"Carousel"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Carousel</h1>

                  <div class="text-secondary mt-1">A carousel cycles through a set of slides, with optional indicators and controls.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/carousel" target="_blank" rel="noopener" class="link-secondary">
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
                    <div class="card-header">
                      <h2 class="card-title">Carousel</h2>
                    </div>
                    <div class="card-body">
                      <div id="carousel-default" class="carousel slide" data-bs-ride="carousel" aria-roledescription="carousel" aria-label="Carousel">
                        <div class="carousel-inner" aria-live="polite" aria-atomic="true">
                          <div class="carousel-item active">
                            <img class="d-block w-100" alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach" src="/tabler/static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Brainstorming session with creative designers" src="/tabler/static/photos/brainstorming-session-with-creative-designers.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Finances - US Dollars and Bitcoins - Currency - Money" src="/tabler/static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Group of people brainstorming and taking notes" src="/tabler/static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Blue sofa with pillows in a designer living room interior" src="/tabler/static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Carousel with indicators</h2>
                    </div>
                    <div class="card-body">
                      <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel" aria-roledescription="carousel" aria-label="Carousel with indicators">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button><button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1" class aria-label="Slide 2"></button
                          ><button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2" class aria-label="Slide 3"></button><button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="3" class aria-label="Slide 4"></button
                          ><button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="4" class aria-label="Slide 5"></button>
                        </div>

                        <div class="carousel-inner" aria-live="polite" aria-atomic="true">
                          <div class="carousel-item active">
                            <img class="d-block w-100" alt="Home office desk with Macbook, iPhone, calendar, watch &amp; organizer" src="/tabler/static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Young woman working in a cafe" src="/tabler/static/photos/young-woman-working-in-a-cafe.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Everything you need to work from your bed" src="/tabler/static/photos/everything-you-need-to-work-from-your-bed.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Young Entrepreneur Working from a Modern Cafe" src="/tabler/static/photos/young-entrepreneur-working-from-a-modern-cafe.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Finances - US Dollars and Bitcoins - Currency - Money" src="/tabler/static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Carousel with controls</h2>
                    </div>
                    <div class="card-body">
                      <div id="carousel-controls" class="carousel slide" data-bs-ride="carousel" aria-roledescription="carousel" aria-label="Carousel with controls">
                        <div class="carousel-inner" aria-live="polite" aria-atomic="true">
                          <div class="carousel-item active">
                            <img class="d-block w-100" alt="Group of people sightseeing in the city" src="/tabler/static/photos/group-of-people-sightseeing-in-the-city.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Color Palette Guide. Sample Colors Catalog." src="/tabler/static/photos/color-palette-guide-sample-colors-catalog-.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Stylish workplace with computer at home" src="/tabler/static/photos/stylish-workplace-with-computer-at-home.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Pink desk in the home office" src="/tabler/static/photos/pink-desk-in-the-home-office.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Young woman sitting on the sofa and working on her laptop" src="/tabler/static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg" />
                          </div>
                        </div>

                        <button type="button" class="carousel-control-prev" data-bs-target="#carousel-controls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button type="button" class="carousel-control-next" data-bs-target="#carousel-controls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Carousel with captions</h2>
                    </div>
                    <div class="card-body">
                      <div id="carousel-captions" class="carousel slide" data-bs-ride="carousel" aria-roledescription="carousel" aria-label="Carousel with captions">
                        <div class="carousel-inner" aria-live="polite" aria-atomic="true">
                          <div class="carousel-item active">
                            <img class="d-block w-100" alt src="/tabler/static/photos/coffee-on-a-table-with-other-items.jpg" />

                            <div class="carousel-caption-background d-none d-md-block"></div>
                            <div class="carousel-caption d-none d-md-block">
                              <h3>Slide label</h3>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt src="/tabler/static/photos/young-entrepreneur-working-from-a-modern-cafe-2.jpg" />

                            <div class="carousel-caption-background d-none d-md-block"></div>
                            <div class="carousel-caption d-none d-md-block">
                              <h3>Slide label</h3>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt src="/tabler/static/photos/soft-photo-of-woman-on-the-bed-with-the-book-and-cup-of-coffee-in-hands.jpg" />

                            <div class="carousel-caption-background d-none d-md-block"></div>
                            <div class="carousel-caption d-none d-md-block">
                              <h3>Slide label</h3>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt src="/tabler/static/photos/fairy-lights-at-the-beach-in-bulgaria.jpg" />

                            <div class="carousel-caption-background d-none d-md-block"></div>
                            <div class="carousel-caption d-none d-md-block">
                              <h3>Slide label</h3>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt src="/tabler/static/photos/woman-working-on-laptop-at-home-office.jpg" />

                            <div class="carousel-caption-background d-none d-md-block"></div>
                            <div class="carousel-caption d-none d-md-block">
                              <h3>Slide label</h3>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="carousel-control-prev" data-bs-target="#carousel-captions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button type="button" class="carousel-control-next" data-bs-target="#carousel-captions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Carousel with dot indicators</h2>
                    </div>
                    <div class="card-body">
                      <div id="carousel-indicators-dot" class="carousel slide carousel-fade" data-bs-ride="carousel" aria-roledescription="carousel" aria-label="Carousel with dot indicators">
                        <div class="carousel-indicators carousel-indicators-dot">
                          <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button><button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="1" class aria-label="Slide 2"></button
                          ><button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="2" class aria-label="Slide 3"></button><button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="3" class aria-label="Slide 4"></button
                          ><button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="4" class aria-label="Slide 5"></button>
                        </div>

                        <div class="carousel-inner" aria-live="polite" aria-atomic="true">
                          <div class="carousel-item active">
                            <img class="d-block w-100" alt="Modern Home Office" src="/tabler/static/photos/modern-home-office.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Blond using her laptop at her bedroom" src="/tabler/static/photos/blond-using-her-laptop-at-her-bedroom.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Tropical palm leaves, floral pattern background" src="/tabler/static/photos/tropical-palm-leaves-floral-pattern-background.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Woman read book and drink coffee" src="/tabler/static/photos/woman-read-book-and-drink-coffee.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Book on the grass" src="/tabler/static/photos/book-on-the-grass.jpg" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Carousel with thumbnail indicators</h2>
                    </div>
                    <div class="card-body">
                      <div id="carousel-indicators-thumb" class="carousel slide carousel-fade" data-bs-ride="carousel" aria-roledescription="carousel" aria-label="Carousel with thumbnail indicators">
                        <div class="carousel-indicators carousel-indicators-thumb">
                          <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="0" class="ratio ratio-4x3 active" style="background-image: url(/tabler/static/photos/colorful-exotic-flowers-and-greenery.jpg)" aria-label="Slide 1" aria-current="true"></button
                          ><button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="1" class="ratio ratio-4x3" style="background-image: url(/tabler/static/photos/workplace-with-laptop-on-table-at-home.jpg)" aria-label="Slide 2"></button
                          ><button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="2" class="ratio ratio-4x3" style="background-image: url(/tabler/static/photos/city-lights-reflected-in-the-water-at-night.jpg)" aria-label="Slide 3"></button
                          ><button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="3" class="ratio ratio-4x3" style="background-image: url(/tabler/static/photos/cryptocurrency-bitcoin-coins.jpg)" aria-label="Slide 4"></button
                          ><button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="4" class="ratio ratio-4x3" style="background-image: url(/tabler/static/photos/woman-read-book-and-drink-coffee-2.jpg)" aria-label="Slide 5"></button>
                        </div>

                        <div class="carousel-inner" aria-live="polite" aria-atomic="true">
                          <div class="carousel-item active">
                            <img class="d-block w-100" alt="Colorful Exotic Flowers and Greenery" src="/tabler/static/photos/colorful-exotic-flowers-and-greenery.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Workplace with laptop on table at home" src="/tabler/static/photos/workplace-with-laptop-on-table-at-home.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="City lights reflected in the water at night" src="/tabler/static/photos/city-lights-reflected-in-the-water-at-night.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Cryptocurrency Bitcoin coins" src="/tabler/static/photos/cryptocurrency-bitcoin-coins.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Woman read book and drink coffee" src="/tabler/static/photos/woman-read-book-and-drink-coffee-2.jpg" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Carousel with vertical dot indicators</h2>
                    </div>
                    <div class="card-body">
                      <div id="carousel-indicators-dot-vertical" class="carousel slide carousel-fade" data-bs-ride="carousel" aria-roledescription="carousel" aria-label="Carousel with vertical dot indicators">
                        <div class="carousel-indicators carousel-indicators-vertical carousel-indicators-dot">
                          <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button><button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="1" class aria-label="Slide 2"></button
                          ><button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="2" class aria-label="Slide 3"></button><button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="3" class aria-label="Slide 4"></button
                          ><button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="4" class aria-label="Slide 5"></button>
                        </div>

                        <div class="carousel-inner" aria-live="polite" aria-atomic="true">
                          <div class="carousel-item active">
                            <img class="d-block w-100" alt="Friends at a restaurant drinking wine" src="/tabler/static/photos/friends-at-a-restaurant-drinking-wine.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Beautiful blonde woman on a wooden pier by the lake" src="/tabler/static/photos/beautiful-blonde-woman-on-a-wooden-pier-by-the-lake.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="White Apple iMac computer with elephant mousepad" src="/tabler/static/photos/white-apple-imac-computer-with-elephant-mousepad.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Workplace with laptop on table at home" src="/tabler/static/photos/workplace-with-laptop-on-table-at-home-2.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Working in a restaurant: Macbook, Cheese Cake and Cup of Coffee" src="/tabler/static/photos/working-in-a-restaurant-macbook-cheese-cake-and-cup-of-coffee.jpg" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Carousel with vertical thumbnail indicators</h2>
                    </div>
                    <div class="card-body">
                      <div id="carousel-indicators-thumb-vertical" class="carousel slide carousel-fade" data-bs-ride="carousel" aria-roledescription="carousel" aria-label="Carousel with vertical thumbnail indicators">
                        <div class="carousel-indicators carousel-indicators-vertical carousel-indicators-thumb">
                          <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="0" class="ratio ratio-4x3 active" style="background-image: url(/tabler/static/photos/tropical-palm-leaves-floral-pattern-background.jpg)" aria-label="Slide 1" aria-current="true"></button
                          ><button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="1" class="ratio ratio-4x3" style="background-image: url(/tabler/static/photos/woman-read-book-and-drink-coffee.jpg)" aria-label="Slide 2"></button
                          ><button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="2" class="ratio ratio-4x3" style="background-image: url(/tabler/static/photos/book-on-the-grass.jpg)" aria-label="Slide 3"></button
                          ><button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="3" class="ratio ratio-4x3" style="background-image: url(/tabler/static/photos/colorful-exotic-flowers-and-greenery.jpg)" aria-label="Slide 4"></button
                          ><button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="4" class="ratio ratio-4x3" style="background-image: url(/tabler/static/photos/workplace-with-laptop-on-table-at-home.jpg)" aria-label="Slide 5"></button>
                        </div>

                        <div class="carousel-inner" aria-live="polite" aria-atomic="true">
                          <div class="carousel-item active">
                            <img class="d-block w-100" alt="Tropical palm leaves, floral pattern background" src="/tabler/static/photos/tropical-palm-leaves-floral-pattern-background.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Woman read book and drink coffee" src="/tabler/static/photos/woman-read-book-and-drink-coffee.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Book on the grass" src="/tabler/static/photos/book-on-the-grass.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Colorful Exotic Flowers and Greenery" src="/tabler/static/photos/colorful-exotic-flowers-and-greenery.jpg" />
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" alt="Workplace with laptop on table at home" src="/tabler/static/photos/workplace-with-laptop-on-table-at-home.jpg" />
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
