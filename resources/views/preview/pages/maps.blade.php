<x-preview.page :title='"Maps"' :html-attrs='"lang=\"en\""'>
<x-slot:head>
@verbatim
<link href="/tabler/libs/maplibre-gl/dist/maplibre-gl.css" rel="stylesheet" />
@endverbatim
</x-slot:head>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Maps</h1>

                  <div class="text-secondary mt-1">Interactive MapLibre maps — plain, styled, with custom markers and popups.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/map" target="_blank" rel="noopener" class="link-secondary">
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
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Simple map</h2>
                      <div class="ratio ratio-16x9">
                        <div>
                          <div id="map-simple" class="w-100 h-100 rounded" role="region" aria-label="Simple map" data-bs-toggle="map" data-bs-center="13.4049,52.518827" data-bs-zoom="13" data-bs-controls="true"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Street map style</h2>
                      <div class="ratio ratio-16x9">
                        <div>
                          <div id="map-light" class="w-100 h-100 rounded" role="region" aria-label="Street map style" data-bs-toggle="map" data-bs-center="-0.2416782,51.5285582" data-bs-zoom="11" data-bs-map-style="liberty"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="ratio ratio-21x9">
                      <div>
                        <div id="map-markers" class="w-100 h-100 rounded" role="region" aria-label="Map with markers" data-bs-toggle="map" data-bs-center="0,0" data-bs-zoom="1" data-bs-map-style="positron">
                          <span class="map-marker map-marker-dot" data-bs-lng="-58.666667" data-bs-lat="-34.58333333" data-bs-popup="Buenos Aires"></span><span class="map-marker map-marker-dot" data-bs-lng="16.366667" data-bs-lat="48.2" data-bs-popup="Vienna"></span
                          ><span class="map-marker map-marker-dot" data-bs-lng="116.383333" data-bs-lat="39.91666667" data-bs-popup="Beijing"></span><span class="map-marker map-marker-dot" data-bs-lng="149.133333" data-bs-lat="-35.26666667" data-bs-popup="Canberra"></span
                          ><span class="map-marker map-marker-dot" data-bs-lng="58.583333" data-bs-lat="23.61666667" data-bs-popup="Muscat"></span><span class="map-marker map-marker-dot" data-bs-lng="-77" data-bs-lat="38.883333" data-bs-popup="Washington"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="ratio ratio-21x9">
                      <div>
                        <div id="map-card" class="w-100 h-100 rounded" role="region" aria-label="Full-card map" data-bs-toggle="map" data-bs-center="0,0" data-bs-zoom="1" data-bs-map-style="bright" data-bs-map-style-dark="fiord"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Marker styles</h2>
                      <p class="card-subtitle">Draw markers in HTML with <code>.map-marker</code>: a dot, a circle with an icon or a count, a pin, or an avatar. Add <code>.map-marker-label</code> for a short text, and <code>.map-marker-pulse</code> for a live position.</p>
                      <div class="ratio ratio-4x3">
                        <div>
                          <div id="map-marker-styles" class="w-100 h-100 rounded" role="region" aria-label="Marker styles" data-bs-toggle="map" data-bs-center="13.405,52.522" data-bs-zoom="11">
                            <span class="map-marker map-marker-dot" data-bs-lng="13.345" data-bs-lat="52.54"></span>
                            <span class="map-marker map-marker-dot map-marker-red" data-bs-lng="13.39" data-bs-lat="52.545"></span>
                            <span class="map-marker" data-bs-lng="13.445" data-bs-lat="52.538"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/building-store -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M3 21l18 0" />
                                <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                                <path d="M5 21l0 -10.15" />
                                <path d="M19 21l0 -10.15" />
                                <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" /></svg
                              ><span class="map-marker-label">Store</span></span
                            >
                            <span class="map-marker map-marker-green" data-bs-lng="13.35" data-bs-lat="52.512">12</span>
                            <span class="map-marker map-marker-dot map-marker-green map-marker-pulse" data-bs-lng="13.375" data-bs-lat="52.535"></span>
                            <span class="map-marker map-marker-pin" data-bs-lng="13.405" data-bs-lat="52.52" data-bs-anchor="bottom"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg
                            ></span>
                            <span class="map-marker map-marker-pin map-marker-red" data-bs-lng="13.47" data-bs-lat="52.518" data-bs-anchor="bottom"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" /></svg
                            ></span>
                            <span class="map-marker" data-bs-lng="13.43" data-bs-lat="52.503"><span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar avatar-sm"></span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Popup card</h2>
                      <p class="card-subtitle">Put the popup content in a <code>&lt;template&gt;</code> inside the marker. <code>.map-popup-card</code> makes room for an image.</p>
                      <div class="ratio ratio-4x3">
                        <div>
                          <div id="map-popup-card" class="w-100 h-100 rounded" role="region" aria-label="Popup card" data-bs-toggle="map" data-bs-center="13.4,52.546" data-bs-zoom="11">
                            <span class="map-marker map-marker-pin" data-bs-lng="13.4019" data-bs-lat="52.5169" data-bs-anchor="bottom" data-bs-popup-open="true">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                              </svg>
                              <template class="map-popup-card" data-bs-close-button="true">
                                <div class="img-responsive img-responsive-21x9" style="background-image: url(/tabler/static/photos/a-visit-to-the-bookstore.jpg)"></div>
                                <div class="p-3">
                                  <div class="fw-medium">Museum Island</div>
                                  <div class="text-secondary mb-3">Five museums on the Spree, open daily.</div>
                                  <a href="#" class="btn btn-primary btn-sm"> View details </a>
                                </div>
                              </template> </span
                            ><span class="map-marker map-marker-pin" data-bs-lng="13.3531" data-bs-lat="52.5176" data-bs-anchor="bottom">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                              </svg>
                              <template class="map-popup-card" data-bs-close-button="true">
                                <div class="img-responsive img-responsive-21x9" style="background-image: url(/tabler/static/photos/book-on-the-grass.jpg)"></div>
                                <div class="p-3">
                                  <div class="fw-medium">Bellevue Palace</div>
                                  <div class="text-secondary mb-3">Residence by the Tiergarten park.</div>
                                  <a href="#" class="btn btn-primary btn-sm"> View details </a>
                                </div>
                              </template> </span
                            ><span class="map-marker map-marker-pin" data-bs-lng="13.4633" data-bs-lat="52.5546" data-bs-anchor="bottom">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                              </svg>
                              <template class="map-popup-card" data-bs-close-button="true">
                                <div class="img-responsive img-responsive-21x9" style="background-image: url(/tabler/static/photos/brainstorming-session-with-creative-designers.jpg)"></div>
                                <div class="p-3">
                                  <div class="fw-medium">Weissensee</div>
                                  <div class="text-secondary mb-3">A lake with a beach in the north-east.</div>
                                  <a href="#" class="btn btn-primary btn-sm"> View details </a>
                                </div>
                              </template>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Route</h2>
                      <p class="card-subtitle">Draw a path with <code>data-bs-route</code>, a list of points, and mark its ends with markers.</p>
                      <div class="ratio ratio-16x9">
                        <div>
                          <div
                            id="map-route"
                            class="w-100 h-100 rounded"
                            role="region"
                            aria-label="Route"
                            data-bs-toggle="map"
                            data-bs-center="13.4046,52.513"
                            data-bs-zoom="11.6"
                            data-bs-route="[[13.3695,52.5251],[13.3777,52.5208],[13.388,52.5186],[13.3989,52.5176],[13.405,52.5192],[13.4132,52.5219],[13.4215,52.5165],[13.43,52.5105],[13.4397,52.505]]"
                          >
                            <span class="map-marker map-marker-dot" data-bs-lng="13.3695" data-bs-lat="52.5251"></span>
                            <span class="map-marker map-marker-pin" data-bs-lng="13.4397" data-bs-lat="52.505" data-bs-anchor="bottom"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" /></svg
                            ></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Area</h2>
                      <p class="card-subtitle">Show a zone, a line or points with <code>data-bs-geojson</code>: a GeoJSON object, or the URL of a file.</p>
                      <div class="ratio ratio-16x9">
                        <div>
                          <div
                            id="map-area"
                            class="w-100 h-100 rounded"
                            role="region"
                            aria-label="Area"
                            data-bs-toggle="map"
                            data-bs-center="13.405,52.519"
                            data-bs-zoom="11"
                            data-bs-geojson='{"type":"Feature","geometry":{"type":"Polygon","coordinates":[[[13.37,52.53],[13.42,52.535],[13.445,52.52],[13.43,52.505],[13.385,52.503],[13.365,52.515],[13.37,52.53]]]}}'
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Shapes from a file</h2>
                      <p class="card-subtitle">Point <code>data-bs-geojson</code> at a GeoJSON file to draw its areas, lines and points. <code>data-bs-layer-color</code> sets their color, and <code>data-bs-labels</code> names the buttons.</p>
                      <div class="ratio ratio-21x9">
                        <div>
                          <div
                            id="map-geojson-file"
                            class="w-100 h-100 rounded"
                            role="region"
                            aria-label="Shapes from a file"
                            data-bs-toggle="map"
                            data-bs-center="13.39,52.5135"
                            data-bs-zoom="12.2"
                            data-bs-controls="true"
                            data-bs-layer-color="--tblr-green"
                            data-bs-labels='{"zoom-in":"Closer","zoom-out":"Farther"}'
                            data-bs-geojson="/tabler/static/maps/berlin-places.geojson"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Clusters</h2>
                      <p class="card-subtitle">Group many points into clusters that split as you zoom in. Click a cluster to zoom to it.</p>
                      <div class="ratio ratio-16x9">
                        <div>
                          <div id="map-clusters" class="w-100 h-100 rounded" role="region" aria-label="Clusters" data-bs-toggle="map" data-bs-center="9,48.5" data-bs-zoom="3" data-bs-controls="zoom,fullscreen"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">City switcher</h2>
                      <p class="card-subtitle">Put buttons over the map and move it to a place with <code>flyTo</code>.</p>
                      <div class="ratio ratio-16x9">
                        <div>
                          <div id="map-cities" class="w-100 h-100 rounded" role="region" aria-label="City switcher" data-bs-toggle="map" data-bs-center="13.405,52.52" data-bs-zoom="10"></div>
                          <div class="btn-list position-absolute top-0 start-0 w-auto h-auto m-2" role="group" aria-label="City" id="map-cities-switcher">
                            <button type="button" class="btn btn-sm btn-pill btn-primary" aria-pressed="true" data-lng="13.405" data-lat="52.52">Berlin</button><button type="button" class="btn btn-sm btn-pill" aria-pressed="false" data-lng="-0.1276" data-lat="51.5072">London</button
                            ><button type="button" class="btn btn-sm btn-pill" aria-pressed="false" data-lng="-74.006" data-lat="40.7128">New York</button><button type="button" class="btn btn-sm btn-pill" aria-pressed="false" data-lng="139.6917" data-lat="35.6895">Tokyo</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Bubble map</h2>
                      <p class="card-subtitle">Size circles by a value, for example users per city. Hover a circle to see the number.</p>
                      <div class="ratio ratio-21x9">
                        <div>
                          <div id="map-bubbles" class="w-100 h-100 rounded" role="region" aria-label="Bubble map" data-bs-toggle="map" data-bs-center="20,20" data-bs-zoom="1"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Globe</h2>
                      <p class="card-subtitle">Show the map as a 3D globe with <code>data-bs-globe="true"</code>, and connect places with arcs.</p>
                      <div class="ratio ratio-4x3">
                        <div>
                          <div id="map-globe" class="w-100 h-100 rounded" role="region" aria-label="Globe" data-bs-toggle="map" data-bs-center="62,32" data-bs-zoom="1.3" data-bs-globe="true">
                            <span class="map-marker map-marker-dot" data-bs-lng="-0.1276" data-bs-lat="51.5072">
                              <span class="map-marker-label">London</span>
                            </span>
                            <span class="map-marker map-marker-dot" style="--tblr-map-marker-size: 0.625rem" data-bs-lng="139.6917" data-bs-lat="35.6895">
                              <span class="map-marker-label">Tokyo</span> </span
                            ><span class="map-marker map-marker-dot" style="--tblr-map-marker-size: 0.625rem" data-bs-lng="72.8777" data-bs-lat="19.076">
                              <span class="map-marker-label">Mumbai</span> </span
                            ><span class="map-marker map-marker-dot" style="--tblr-map-marker-size: 0.625rem" data-bs-lng="103.8198" data-bs-lat="1.3521">
                              <span class="map-marker-label">Singapore</span> </span
                            ><span class="map-marker map-marker-dot" style="--tblr-map-marker-size: 0.625rem" data-bs-lng="36.8219" data-bs-lat="-1.2921">
                              <span class="map-marker-label">Nairobi</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Draggable marker</h2>
                      <p class="card-subtitle">Add <code>data-bs-draggable="true"</code> to let people move a marker, for example to pick an address.</p>
                      <div class="ratio ratio-4x3">
                        <div>
                          <div id="map-draggable" class="w-100 h-100 rounded" role="region" aria-label="Draggable marker" data-bs-toggle="map" data-bs-center="13.405,52.52" data-bs-zoom="12">
                            <span class="map-marker map-marker-pin" data-bs-lng="13.405" data-bs-lat="52.52" data-bs-anchor="bottom" data-bs-draggable="true"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" /></svg
                            ></span>
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
<x-slot:scripts>
@verbatim
<script src="/tabler/js/tabler-map.min.js" defer></script>
<script>
      ;(function () {
        const stores = [
          [13.405, 52.92],
          [13.489672004835919, 52.353541265381146],
          [13.237350701080643, 52.25854255165456],
          [13.652271091145053, 52.90406811466015],
          [13.083056249199739, 52.46179998647656],
          [2.746391959231273, 48.97006487418529],
          [2.025787333466378, 49.158160901737325],
          [2.6043002220959846, 48.49214789524613],
          [2.179458010000961, 48.85837027919522],
          [2.4421263257977714, 49.21957871258008],
          [2.3468892144257576, 48.55272483485647],
          [0.46676441341692215, 51.171571388369415],
          [-0.704438495127734, 51.844741583493],
          [0.42016715043657654, 51.56189488728313],
          [-0.6353322425051025, 51.12413620787064],
          [0.32993507028776164, 51.77132668329763],
          [-0.5257803305277805, 51.67043282472535],
          [0.20325600874501437, 51.10721566944214],
          [12.998393383121634, 41.59892483485647],
          [11.953052982796025, 41.79273466477936],
          [13.0702255570427, 42.298281847274666],
          [11.903581025544282, 41.68370829591029],
          [13.09634711606436, 41.68966679186664],
          [11.90133268793413, 42.29928112474539],
          [13.074677231770453, 41.785944476506465],
          [11.946487071250619, 41.6035769881244],
          [-3.5412565270152787, 40.58003282472536],
          [-3.946222587193839, 40.016815669442146],
          [-3.386350388327986, 40.5864716029348],
          [-4.0899228800142, 40.675567728931455],
          [-3.256732103712391, 40.03175765347458],
          [20.75529039830231, 52.62618112474539],
          [21.190021147225632, 52.11284447650647],
          [20.917026398717173, 51.930476988124404],
          [21.022821155063248, 52.59559694312181],
          [21.086343873647134, 52.224389301110776],
          [20.854775087777643, 51.868223117963396],
          [15.823887071250619, 48.269900579955035],
          [16.88434211472047, 48.5418893442026],
          [15.9128472032058, 47.86877189008616],
          [16.775937505506025, 48.157014524149034],
          [16.03852657068903, 48.59022945761892],
          [16.635498853148693, 47.941424775339094],
          [16.19091362733867, 48.04820587400466],
          [4.3318484083443165, 52.0061231179634],
          [5.496076555224291, 52.67376562077814],
          [4.304246895984828, 52.47425717294398],
          [5.499823588850722, 51.97266428899047],
          [4.324429337994964, 52.589645320608255],
          [5.456115622918074, 52.57772879552709],
          [4.390788012614807, 51.97066581233963],
          [5.368434408934733, 52.487837017497455],
        ]

        document.addEventListener('DOMContentLoaded', () => {
          const view = tabler.MapView.getInstance('#map-clusters')

          view.onStyle((map) => {
            const color = tabler.MapView.color('--tblr-primary')
            const border = tabler.MapView.color('--tblr-bg-surface')

            map.addSource('stores', {
              type: 'geojson',
              data: { type: 'FeatureCollection', features: stores.map((coordinates) => ({ type: 'Feature', geometry: { type: 'Point', coordinates } })) },
              cluster: true,
              clusterRadius: 40,
            })
            map.addLayer({
              id: 'clusters',
              type: 'circle',
              source: 'stores',
              filter: ['has', 'point_count'],
              paint: { 'circle-color': color, 'circle-radius': ['step', ['get', 'point_count'], 14, 10, 18, 25, 24], 'circle-stroke-width': 2, 'circle-stroke-color': border },
            })
            map.addLayer({
              id: 'cluster-count',
              type: 'symbol',
              source: 'stores',
              filter: ['has', 'point_count'],
              layout: { 'text-field': ['get', 'point_count_abbreviated'], 'text-font': ['Noto Sans Regular'], 'text-size': 12 },
              paint: { 'text-color': tabler.MapView.color('--tblr-primary-fg') },
            })
            map.addLayer({
              id: 'store',
              type: 'circle',
              source: 'stores',
              filter: ['!', ['has', 'point_count']],
              paint: { 'circle-color': color, 'circle-radius': 6, 'circle-stroke-width': 2, 'circle-stroke-color': border },
            })
          })

          view.ready((map) => {
            map.on('click', 'clusters', (event) => {
              const cluster = event.features[0]

              map
                .getSource('stores')
                .getClusterExpansionZoom(cluster.properties.cluster_id)
                .then((zoom) => map.easeTo({ center: cluster.geometry.coordinates, zoom }))
            })
          })
        })
      })()
    </script>
<script>
      document.addEventListener('DOMContentLoaded', () => {
        const view = tabler.MapView.getInstance('#map-cities')
        const buttons = document.querySelectorAll('#map-cities-switcher .btn')

        buttons.forEach((button) => {
          button.addEventListener('click', () => {
            buttons.forEach((item) => {
              item.classList.toggle('btn-primary', item === button)
              item.setAttribute('aria-pressed', item === button)
            })
            view.map.flyTo({ center: [Number(button.dataset.lng), Number(button.dataset.lat)], zoom: 10 })
          })
        })
      })
    </script>
<script>
      ;(function () {
        const cities = [
          { name: 'Berlin', lng: 13.405, lat: 52.52, users: 820 },
          { name: 'London', lng: -0.1276, lat: 51.5072, users: 1240 },
          { name: 'New York', lng: -74.006, lat: 40.7128, users: 1580 },
          { name: 'Tokyo', lng: 139.6917, lat: 35.6895, users: 960 },
          { name: 'São Paulo', lng: -46.6333, lat: -23.5505, users: 540 },
          { name: 'Sydney', lng: 151.2093, lat: -33.8688, users: 310 },
          { name: 'Lagos', lng: 3.3792, lat: 6.5244, users: 420 },
          { name: 'Mumbai', lng: 72.8777, lat: 19.076, users: 1100 },
        ]

        document.addEventListener('DOMContentLoaded', () => {
          const view = tabler.MapView.getInstance('#map-bubbles')

          view.onStyle((map) => {
            const color = tabler.MapView.color('--tblr-primary')

            map.addSource('cities', {
              type: 'geojson',
              data: { type: 'FeatureCollection', features: cities.map((city) => ({ type: 'Feature', properties: city, geometry: { type: 'Point', coordinates: [city.lng, city.lat] } })) },
            })
            map.addLayer({
              id: 'cities',
              type: 'circle',
              source: 'cities',
              paint: { 'circle-color': color, 'circle-opacity': 0.6, 'circle-radius': ['interpolate', ['linear'], ['get', 'users'], 0, 4, 1600, 24] },
            })
          })

          // The handlers need the map and the library, which may load a moment after the page
          view.ready((map) => {
            const tooltip = new maplibregl.Popup({ closeButton: false, offset: 12, className: 'map-tooltip' })

            map.on('mousemove', 'cities', (event) => {
              const city = event.features[0].properties

              map.getCanvas().style.cursor = 'pointer'
              tooltip.setLngLat([city.lng, city.lat]).setText(`${city.name}: ${city.users} users`).addTo(map)
            })
            map.on('mouseleave', 'cities', () => {
              map.getCanvas().style.cursor = ''
              tooltip.remove()
            })
          })
        })
      })()
    </script>
<script>
      ;(function () {
        const hub = { name: 'London', lng: -0.1276, lat: 51.5072 }
        const destinations = [
          { name: 'Tokyo', lng: 139.6917, lat: 35.6895 },
          { name: 'Mumbai', lng: 72.8777, lat: 19.076 },
          { name: 'Singapore', lng: 103.8198, lat: 1.3521 },
          { name: 'Nairobi', lng: 36.8219, lat: -1.2921 },
        ]

        document.addEventListener('DOMContentLoaded', () => {
          const view = tabler.MapView.getInstance('#map-globe')

          // Points along the shortest path between two places on the globe
          const arc = (from, to, steps = 64) => {
            const [lng1, lat1, lng2, lat2] = [from.lng, from.lat, to.lng, to.lat].map((degrees) => (degrees * Math.PI) / 180)
            const angle = 2 * Math.asin(Math.sqrt(Math.sin((lat2 - lat1) / 2) ** 2 + Math.cos(lat1) * Math.cos(lat2) * Math.sin((lng2 - lng1) / 2) ** 2))

            return Array.from({ length: steps + 1 }, (_, step) => {
              const start = Math.sin((1 - step / steps) * angle) / Math.sin(angle)
              const end = Math.sin((step / steps) * angle) / Math.sin(angle)
              const x = start * Math.cos(lat1) * Math.cos(lng1) + end * Math.cos(lat2) * Math.cos(lng2)
              const y = start * Math.cos(lat1) * Math.sin(lng1) + end * Math.cos(lat2) * Math.sin(lng2)
              const z = start * Math.sin(lat1) + end * Math.sin(lat2)

              return [(Math.atan2(y, x) * 180) / Math.PI, (Math.atan2(z, Math.hypot(x, y)) * 180) / Math.PI]
            })
          }

          view.onStyle((map) => {
            // Hide the place names of the map style, so only the marker labels are left
            map
              .getStyle()
              .layers.filter((layer) => layer.type === 'symbol')
              .forEach((layer) => map.setLayoutProperty(layer.id, 'visibility', 'none'))

            map.addSource('arcs', {
              type: 'geojson',
              data: { type: 'FeatureCollection', features: destinations.map((place) => ({ type: 'Feature', geometry: { type: 'LineString', coordinates: arc(hub, place) } })) },
            })
            map.addLayer({
              id: 'arcs',
              type: 'line',
              source: 'arcs',
              paint: { 'line-color': tabler.MapView.color('--tblr-primary'), 'line-width': 1.5, 'line-dasharray': [2, 2] },
            })
          })
        })
      })()
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
