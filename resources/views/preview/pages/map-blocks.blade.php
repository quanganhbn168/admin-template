<x-preview.page :title='"Map blocks"' :html-attrs='"lang=\"en\""'>
<x-slot:head>
@verbatim
<link href="/tabler/libs/maplibre-gl/dist/maplibre-gl.css" rel="stylesheet" />
<link href="/tabler/libs/jsvectormap/dist/jsvectormap.css" rel="stylesheet" />
@endverbatim
</x-slot:head>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Map blocks</h1>

                  <div class="text-secondary mt-1">Ready-made blocks that pair a map with a list, a card or a table.</div>
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
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Store locator</h2>
                    </div>
                    <div class="row g-0">
                      <div class="col-lg-4 border-end">
                        <div class="p-3 border-bottom">
                          <div class="input-icon">
                            <span class="input-icon-addon"
                              ><!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M21 21l-6 -6" /></svg
                            ></span>
                            <input type="search" class="form-control" id="stores-search" placeholder="Search stores…" aria-label="Search stores" />
                          </div>
                        </div>
                        <div class="list-group list-group-flush overflow-auto" id="stores-list" style="height: 24rem">
                          <button type="button" class="list-group-item list-group-item-action active">
                            <div class="d-flex align-items-center gap-2">
                              <span class="fw-medium">Tabler Store Mitte</span>
                              <span class="badge bg-green-lt ms-auto">Open</span>
                            </div>
                            <div class="text-secondary">Friedrichstraße 112, 10117 Berlin</div>
                            <div class="text-secondary small mt-1">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                              </svg>
                              0.4 km
                            </div></button
                          ><button type="button" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center gap-2">
                              <span class="fw-medium">Tabler Store Alexanderplatz</span>
                              <span class="badge bg-green-lt ms-auto">Open</span>
                            </div>
                            <div class="text-secondary">Karl-Liebknecht-Straße 9, 10178 Berlin</div>
                            <div class="text-secondary small mt-1">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                              </svg>
                              1.2 km
                            </div></button
                          ><button type="button" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center gap-2">
                              <span class="fw-medium">Tabler Store Kreuzberg</span>
                              <span class="badge bg-green-lt ms-auto">Open</span>
                            </div>
                            <div class="text-secondary">Oranienstraße 34, 10999 Berlin</div>
                            <div class="text-secondary small mt-1">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                              </svg>
                              2.6 km
                            </div></button
                          ><button type="button" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center gap-2">
                              <span class="fw-medium">Tabler Store Charlottenburg</span>
                              <span class="badge bg-secondary-lt ms-auto">Closed</span>
                            </div>
                            <div class="text-secondary">Kantstraße 54, 10627 Berlin</div>
                            <div class="text-secondary small mt-1">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                              </svg>
                              4.8 km
                            </div></button
                          ><button type="button" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center gap-2">
                              <span class="fw-medium">Tabler Store Prenzlauer Berg</span>
                              <span class="badge bg-green-lt ms-auto">Open</span>
                            </div>
                            <div class="text-secondary">Kastanienallee 21, 10435 Berlin</div>
                            <div class="text-secondary small mt-1">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                              </svg>
                              2.1 km
                            </div></button
                          ><button type="button" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center gap-2">
                              <span class="fw-medium">Tabler Store Friedrichshain</span>
                              <span class="badge bg-secondary-lt ms-auto">Closed</span>
                            </div>
                            <div class="text-secondary">Warschauer Straße 58, 10243 Berlin</div>
                            <div class="text-secondary small mt-1">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                              </svg>
                              3.9 km
                            </div>
                          </button>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="position-relative" style="height: 28.5rem">
                          <div class="h-100">
                            <div id="map-stores" class="w-100 h-100" role="region" aria-label="Store locator" data-bs-toggle="map" data-bs-center="13.39,52.519" data-bs-zoom="11.3" data-bs-controls="true">
                              <span class="map-marker map-marker-pin" data-bs-lng="13.3889" data-bs-lat="52.5246" data-bs-anchor="bottom">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                  <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                </svg>
                                <template>
                                  <div class="fw-medium">Tabler Store Mitte</div>
                                  <div class="text-secondary">Friedrichstraße 112, 10117 Berlin</div>
                                </template> </span
                              ><span class="map-marker map-marker-pin" data-bs-lng="13.4094" data-bs-lat="52.5219" data-bs-anchor="bottom">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                  <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                </svg>
                                <template>
                                  <div class="fw-medium">Tabler Store Alexanderplatz</div>
                                  <div class="text-secondary">Karl-Liebknecht-Straße 9, 10178 Berlin</div>
                                </template> </span
                              ><span class="map-marker map-marker-pin" data-bs-lng="13.4197" data-bs-lat="52.5009" data-bs-anchor="bottom">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                  <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                </svg>
                                <template>
                                  <div class="fw-medium">Tabler Store Kreuzberg</div>
                                  <div class="text-secondary">Oranienstraße 34, 10999 Berlin</div>
                                </template> </span
                              ><span class="map-marker map-marker-pin" data-bs-lng="13.3087" data-bs-lat="52.5063" data-bs-anchor="bottom">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                  <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                </svg>
                                <template>
                                  <div class="fw-medium">Tabler Store Charlottenburg</div>
                                  <div class="text-secondary">Kantstraße 54, 10627 Berlin</div>
                                </template> </span
                              ><span class="map-marker map-marker-pin" data-bs-lng="13.4098" data-bs-lat="52.5385" data-bs-anchor="bottom">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                  <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                </svg>
                                <template>
                                  <div class="fw-medium">Tabler Store Prenzlauer Berg</div>
                                  <div class="text-secondary">Kastanienallee 21, 10435 Berlin</div>
                                </template> </span
                              ><span class="map-marker map-marker-pin" data-bs-lng="13.4492" data-bs-lat="52.5083" data-bs-anchor="bottom">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                  <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                </svg>
                                <template>
                                  <div class="fw-medium">Tabler Store Friedrichshain</div>
                                  <div class="text-secondary">Warschauer Straße 58, 10243 Berlin</div>
                                </template>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Delivery tracker</h2>
                    </div>
                    <div class="position-relative" style="height: 20rem">
                      <div class="h-100">
                        <div
                          id="map-delivery"
                          class="w-100 h-100"
                          role="region"
                          aria-label="Delivery tracker"
                          data-bs-toggle="map"
                          data-bs-center="13.4046,52.5215"
                          data-bs-zoom="11.6"
                          data-bs-route="[[13.3695,52.5251],[13.3777,52.5208],[13.388,52.5186],[13.3989,52.5176],[13.405,52.5192],[13.4132,52.5219],[13.4215,52.5165],[13.43,52.5105],[13.4397,52.505]]"
                          data-bs-route-progress="5"
                        >
                          <span class="map-marker map-marker-dot" data-bs-lng="13.3695" data-bs-lat="52.5251"></span>
                          <span class="map-marker map-marker-green map-marker-pulse" data-bs-lng="13.4132" data-bs-lat="52.5219"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/truck-delivery -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M5 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                              <path d="M15 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                              <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                              <path d="M3 9l4 0" /></svg
                          ></span>
                          <span class="map-marker map-marker-pin" data-bs-lng="13.4397" data-bs-lat="52.505" data-bs-anchor="bottom"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg
                          ></span>
                        </div>
                        <div class="card card-sm position-absolute top-0 start-0 m-3 shadow" style="width: 15rem">
                          <div class="card-body">
                            <div class="subheader">Order #4821</div>
                            <div class="h3 mb-2">Arriving in 12 min</div>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-green" style="width: 62%" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" aria-label="62% Complete">
                                <span class="visually-hidden">62% Complete</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar"></span>
                        </div>
                        <div class="col">
                          <div class="fw-medium">Mateusz Nowak</div>
                          <div class="text-secondary">Your courier</div>
                        </div>
                        <div class="col-auto text-end">
                          <div class="fw-medium">3.4 km</div>
                          <div class="text-secondary">left to go</div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="btn btn-icon" aria-label="Call the courier"
                            ><!-- Download SVG icon from http://tabler.io/icons/icon/phone -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Live users</h2>
                    </div>
                    <div class="position-relative" style="height: 20rem">
                      <div class="h-100">
                        <div id="map-live-users" class="w-100 h-100" role="region" aria-label="Live users" data-bs-toggle="map" data-bs-center="30,32" data-bs-zoom="0.45"></div>
                        <div class="card card-sm position-absolute top-0 end-0 m-3 shadow">
                          <div class="card-body">
                            <div class="subheader">Active users</div>
                            <div class="h1 mb-1">3,544</div>
                            <div class="text-secondary">
                              <span class="text-green d-inline-flex align-items-center lh-1">
                                <span class="visually-hidden">Increased by </span>+12.5%
                                <!-- Download SVG icon from http://tabler.io/icons/icon/arrow-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon ms-0 icon-sm">
                                  <path d="M12 5l0 14" />
                                  <path d="M18 11l-6 -6" />
                                  <path d="M6 11l6 -6" />
                                </svg>
                              </span>
                              vs last hour
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="row text-center">
                        <div class="col">
                          <div class="fw-medium">1,580</div>
                          <div class="text-secondary">New York</div>
                        </div>
                        <div class="col">
                          <div class="fw-medium">1,240</div>
                          <div class="text-secondary">London</div>
                        </div>
                        <div class="col">
                          <div class="fw-medium">1,100</div>
                          <div class="text-secondary">Mumbai</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Homes for sale</h2>
                    </div>
                    <div class="row g-0">
                      <div class="col-lg-5 border-end">
                        <div class="list-group list-group-flush overflow-auto" id="homes-list" style="height: 26rem">
                          <button type="button" class="list-group-item list-group-item-action active">
                            <div class="row g-3 align-items-center">
                              <div class="col-auto">
                                <span class="avatar avatar-lg" style="background-image: url(/tabler/static/photos/contemporary-black-and-white-home-decor.jpg)"></span>
                              </div>
                              <div class="col">
                                <div class="fw-medium">$420k</div>
                                <div>Loft in Mitte</div>
                                <div class="text-secondary small mt-1">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/bed -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                    <path d="M5 9a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M22 17v-3h-20" />
                                    <path d="M2 8v9" />
                                    <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5" />
                                  </svg>
                                  2
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/bath -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline ms-2">
                                    <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1" />
                                    <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                                    <path d="M4 21l1 -1.5" />
                                    <path d="M20 21l-1 -1.5" />
                                  </svg>
                                  1
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/ruler-2 -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline ms-2">
                                    <path d="M17 3l4 4l-14 14l-4 -4l14 -14" />
                                    <path d="M16 7l-1.5 -1.5" />
                                    <path d="M13 10l-1.5 -1.5" />
                                    <path d="M10 13l-1.5 -1.5" />
                                    <path d="M7 16l-1.5 -1.5" />
                                  </svg>
                                  78 m²
                                </div>
                              </div>
                            </div></button
                          ><button type="button" class="list-group-item list-group-item-action">
                            <div class="row g-3 align-items-center">
                              <div class="col-auto">
                                <span class="avatar avatar-lg" style="background-image: url(/tabler/static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg)"></span>
                              </div>
                              <div class="col">
                                <div class="fw-medium">$365k</div>
                                <div>Flat by the park</div>
                                <div class="text-secondary small mt-1">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/bed -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                    <path d="M5 9a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M22 17v-3h-20" />
                                    <path d="M2 8v9" />
                                    <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5" />
                                  </svg>
                                  2
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/bath -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline ms-2">
                                    <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1" />
                                    <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                                    <path d="M4 21l1 -1.5" />
                                    <path d="M20 21l-1 -1.5" />
                                  </svg>
                                  1
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/ruler-2 -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline ms-2">
                                    <path d="M17 3l4 4l-14 14l-4 -4l14 -14" />
                                    <path d="M16 7l-1.5 -1.5" />
                                    <path d="M13 10l-1.5 -1.5" />
                                    <path d="M10 13l-1.5 -1.5" />
                                    <path d="M7 16l-1.5 -1.5" />
                                  </svg>
                                  64 m²
                                </div>
                              </div>
                            </div></button
                          ><button type="button" class="list-group-item list-group-item-action">
                            <div class="row g-3 align-items-center">
                              <div class="col-auto">
                                <span class="avatar avatar-lg" style="background-image: url(/tabler/static/photos/elegant-home-office-with-golden-accessories.jpg)"></span>
                              </div>
                              <div class="col">
                                <div class="fw-medium">$240k</div>
                                <div>Studio in Kreuzberg</div>
                                <div class="text-secondary small mt-1">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/bed -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                    <path d="M5 9a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M22 17v-3h-20" />
                                    <path d="M2 8v9" />
                                    <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5" />
                                  </svg>
                                  1
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/bath -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline ms-2">
                                    <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1" />
                                    <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                                    <path d="M4 21l1 -1.5" />
                                    <path d="M20 21l-1 -1.5" />
                                  </svg>
                                  1
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/ruler-2 -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline ms-2">
                                    <path d="M17 3l4 4l-14 14l-4 -4l14 -14" />
                                    <path d="M16 7l-1.5 -1.5" />
                                    <path d="M13 10l-1.5 -1.5" />
                                    <path d="M10 13l-1.5 -1.5" />
                                    <path d="M7 16l-1.5 -1.5" />
                                  </svg>
                                  38 m²
                                </div>
                              </div>
                            </div></button
                          ><button type="button" class="list-group-item list-group-item-action">
                            <div class="row g-3 align-items-center">
                              <div class="col-auto">
                                <span class="avatar avatar-lg" style="background-image: url(/tabler/static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg)"></span>
                              </div>
                              <div class="col">
                                <div class="fw-medium">$690k</div>
                                <div>Family home</div>
                                <div class="text-secondary small mt-1">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/bed -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline">
                                    <path d="M5 9a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M22 17v-3h-20" />
                                    <path d="M2 8v9" />
                                    <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5" />
                                  </svg>
                                  4
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/bath -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline ms-2">
                                    <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1" />
                                    <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                                    <path d="M4 21l1 -1.5" />
                                    <path d="M20 21l-1 -1.5" />
                                  </svg>
                                  2
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/ruler-2 -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline ms-2">
                                    <path d="M17 3l4 4l-14 14l-4 -4l14 -14" />
                                    <path d="M16 7l-1.5 -1.5" />
                                    <path d="M13 10l-1.5 -1.5" />
                                    <path d="M10 13l-1.5 -1.5" />
                                    <path d="M7 16l-1.5 -1.5" />
                                  </svg>
                                  142 m²
                                </div>
                              </div>
                            </div>
                          </button>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <div class="position-relative" style="height: 26rem">
                          <div class="h-100">
                            <div id="map-homes" class="w-100 h-100" role="region" aria-label="Homes for sale" data-bs-toggle="map" data-bs-center="13.39,52.515" data-bs-zoom="11.4" data-bs-controls="true">
                              <span class="map-marker px-2 map-marker-dark" data-bs-lng="13.3989" data-bs-lat="52.5246"> $420k </span><span class="map-marker px-2 map-marker-primary" data-bs-lng="13.4336" data-bs-lat="52.5287"> $365k </span
                              ><span class="map-marker px-2 map-marker-primary" data-bs-lng="13.4107" data-bs-lat="52.4993"> $240k </span><span class="map-marker px-2 map-marker-primary" data-bs-lng="13.3458" data-bs-lat="52.5083"> $690k </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Delivery address</h2>
                    </div>
                    <div class="row g-0">
                      <div class="col-lg-5 border-end">
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label" for="address-street">Street</label>
                            <input type="text" class="form-control" id="address-street" value="Karl-Liebknecht-Straße 9" />
                          </div>
                          <div class="row g-2 mb-3">
                            <div class="col-4">
                              <label class="form-label" for="address-postcode">Postal code</label>
                              <input type="text" class="form-control" id="address-postcode" value="10178" />
                            </div>
                            <div class="col-8">
                              <label class="form-label" for="address-city">City</label>
                              <input type="text" class="form-control" id="address-city" value="Berlin" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="address-position">Position</label>
                            <input type="text" class="form-control" id="address-position" value="52.52190, 13.40940" readonly />
                            <small class="form-hint">Drag the pin on the map to the entrance.</small>
                          </div>
                          <button type="button" class="btn btn-primary">Save address</button>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <div class="position-relative" style="height: 24rem">
                          <div class="h-100">
                            <div id="map-address" class="w-100 h-100" role="region" aria-label="Delivery address" data-bs-toggle="map" data-bs-center="13.4094,52.5219" data-bs-zoom="15" data-bs-controls="true">
                              <span class="map-marker map-marker-pin" data-bs-lng="13.4094" data-bs-lat="52.5219" data-bs-anchor="bottom" data-bs-draggable="true"
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
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Server status</h2>
                    </div>
                    <div class="position-relative" style="height: 20rem">
                      <div class="h-100">
                        <div id="map-servers" class="w-100 h-100" role="region" aria-label="Server status" data-bs-toggle="map" data-bs-center="40,20" data-bs-zoom="0.45">
                          <span class="map-marker map-marker-dot map-marker-green" data-bs-lng="8.6821" data-bs-lat="50.1109" data-bs-popup="Frankfurt: Operational"></span><span class="map-marker map-marker-dot map-marker-green" data-bs-lng="-0.1276" data-bs-lat="51.5072" data-bs-popup="London: Operational"></span
                          ><span class="map-marker map-marker-dot map-marker-yellow map-marker-pulse" data-bs-lng="-77.4874" data-bs-lat="39.0438" data-bs-popup="Virginia: Degraded"></span
                          ><span class="map-marker map-marker-dot map-marker-green" data-bs-lng="-46.6333" data-bs-lat="-23.5505" data-bs-popup="São Paulo: Operational"></span
                          ><span class="map-marker map-marker-dot map-marker-red map-marker-pulse" data-bs-lng="103.8198" data-bs-lat="1.3521" data-bs-popup="Singapore: Outage"></span
                          ><span class="map-marker map-marker-dot map-marker-green" data-bs-lng="151.2093" data-bs-lat="-33.8688" data-bs-popup="Sydney: Operational"></span>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive" tabindex="0">
                      <table class="table table-vcenter card-table">
                        <thead>
                          <tr>
                            <th>Region</th>
                            <th>Status</th>
                            <th class="text-end">Latency</th>
                            <th class="text-end">Uptime</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Frankfurt <span class="text-secondary">eu-central</span></td>
                            <td>
                              <span class="status-dot status-green me-2"></span>
                              Operational
                            </td>
                            <td class="text-end">24 ms</td>
                            <td class="text-end">99.99%</td>
                          </tr>
                          <tr>
                            <td>London <span class="text-secondary">eu-west</span></td>
                            <td>
                              <span class="status-dot status-green me-2"></span>
                              Operational
                            </td>
                            <td class="text-end">31 ms</td>
                            <td class="text-end">99.98%</td>
                          </tr>
                          <tr>
                            <td>Virginia <span class="text-secondary">us-east</span></td>
                            <td>
                              <span class="status-dot status-yellow status-dot-animated me-2"></span>
                              Degraded
                            </td>
                            <td class="text-end">212 ms</td>
                            <td class="text-end">99.71%</td>
                          </tr>
                          <tr>
                            <td>São Paulo <span class="text-secondary">sa-east</span></td>
                            <td>
                              <span class="status-dot status-green me-2"></span>
                              Operational
                            </td>
                            <td class="text-end">48 ms</td>
                            <td class="text-end">99.95%</td>
                          </tr>
                          <tr>
                            <td>Singapore <span class="text-secondary">ap-southeast</span></td>
                            <td>
                              <span class="status-dot status-red status-dot-animated me-2"></span>
                              Outage
                            </td>
                            <td class="text-end">-</td>
                            <td class="text-end">98.20%</td>
                          </tr>
                          <tr>
                            <td>Sydney <span class="text-secondary">ap-south</span></td>
                            <td>
                              <span class="status-dot status-green me-2"></span>
                              Operational
                            </td>
                            <td class="text-end">36 ms</td>
                            <td class="text-end">99.97%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Users by country</h2>
                    </div>
                    <div class="row g-0">
                      <div class="col-lg-7 border-end">
                        <div class="card-body">
                          <div
                            class="vector-map"
                            data-bs-toggle="vector-map"
                            data-bs-map="world"
                            data-bs-label="World map"
                            data-bs-values='{"AF":2,"AL":2,"DZ":4,"AO":3,"AG":1,"AR":5,"AM":1,"AU":7,"AT":5,"AZ":3,"BS":1,"BH":2,"BD":4,"BB":1,"BY":3,"BE":5,"BZ":1,"BJ":1,"BT":1,"BO":2,"BA":2,"BW":2,"BR":8,"BN":2,"BG":2,"BF":1,"BI":1,"KH":2,"CM":2,"CA":7,"CV":1,"CF":1,"TD":1,"CL":4,"CN":9,"CO":5,"KM":1,"CD":2,"CG":2,"CR":2,"CI":2,"HR":3,"CY":2,"CZ":4,"DK":5,"DJ":1,"DM":1,"DO":3,"EC":3,"EG":5,"SV":2,"GQ":2,"ER":1,"EE":2,"ET":2,"FJ":1,"FI":5,"FR":8,"GA":2,"GM":1,"GE":2,"DE":8,"GH":2,"GR":5,"GD":1,"GT":2,"GN":1,"GW":1,"GY":1,"HT":1,"HN":2,"HK":5,"HU":4,"IS":2,"IN":7,"ID":6,"IR":5,"IQ":3,"IE":5,"IL":5,"IT":8,"JM":2,"JP":9,"JO":2,"KZ":4,"KE":2,"KI":1,"KR":6,"KW":4,"KG":1,"LA":1,"LV":2,"LB":2,"LS":1,"LR":1,"LY":3,"LT":2,"LU":3,"MK":1,"MG":1,"MW":1,"MY":5,"MV":1,"ML":1,"MT":1,"MR":1,"MU":1,"MX":7,"MD":1,"MN":1,"ME":1,"MA":3,"MZ":2,"MM":2,"NA":2,"NP":2,"NL":6,"NZ":4,"NI":1,"NE":1,"NG":5,"NO":5,"OM":3,"PK":4,"PA":2,"PG":1,"PY":2,"PE":4,"PH":4,"PL":10,"PT":5,"QA":4,"RO":4,"RU":7,"RW":1,"WS":1,"ST":1,"SA":5,"SN":2,"RS":2,"SC":1,"SL":1,"SG":5,"SK":3,"SI":2,"SB":1,"ZA":5,"ES":7,"LK":2,"KN":1,"LC":1,"VC":1,"SD":3,"SR":1,"SZ":1,"SE":5,"CH":6,"SY":3,"TW":5,"TJ":1,"TZ":2,"TH":5,"TL":1,"TG":1,"TO":1,"TT":2,"TN":2,"TR":6,"TM":1,"UG":2,"UA":4,"AE":5,"GB":8,"US":10,"UY":2,"UZ":2,"VU":1,"VE":5,"VN":4,"YE":2,"ZM":2,"ZW":1}'
                          ></div>
                        </div>
                      </div>
                      <div class="col-lg-5">
                        <div class="table-responsive" tabindex="0">
                          <table class="table table-vcenter card-table">
                            <thead>
                              <tr>
                                <th>Country</th>
                                <th class="text-end">Users</th>
                                <th class="w-33">Share</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <span class="flag flag-xs flag-country-us me-2"></span>
                                  United States
                                </td>
                                <td class="text-end">12,480</td>
                                <td>
                                  <div class="d-flex align-items-center gap-2">
                                    <span class="text-secondary">32%</span>
                                    <div class="progress progress-sm flex-fill">
                                      <div class="progress-bar" style="width: 32%" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" aria-label="32% Complete">
                                        <span class="visually-hidden">32% Complete</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="flag flag-xs flag-country-br me-2"></span>
                                  Brazil
                                </td>
                                <td class="text-end">7,120</td>
                                <td>
                                  <div class="d-flex align-items-center gap-2">
                                    <span class="text-secondary">18%</span>
                                    <div class="progress progress-sm flex-fill">
                                      <div class="progress-bar" style="width: 18%" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" aria-label="18% Complete">
                                        <span class="visually-hidden">18% Complete</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="flag flag-xs flag-country-de me-2"></span>
                                  Germany
                                </td>
                                <td class="text-end">5,930</td>
                                <td>
                                  <div class="d-flex align-items-center gap-2">
                                    <span class="text-secondary">15%</span>
                                    <div class="progress progress-sm flex-fill">
                                      <div class="progress-bar" style="width: 15%" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" aria-label="15% Complete">
                                        <span class="visually-hidden">15% Complete</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="flag flag-xs flag-country-in me-2"></span>
                                  India
                                </td>
                                <td class="text-end">4,360</td>
                                <td>
                                  <div class="d-flex align-items-center gap-2">
                                    <span class="text-secondary">11%</span>
                                    <div class="progress progress-sm flex-fill">
                                      <div class="progress-bar" style="width: 11%" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100" aria-label="11% Complete">
                                        <span class="visually-hidden">11% Complete</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="flag flag-xs flag-country-au me-2"></span>
                                  Australia
                                </td>
                                <td class="text-end">3,540</td>
                                <td>
                                  <div class="d-flex align-items-center gap-2">
                                    <span class="text-secondary">9%</span>
                                    <div class="progress progress-sm flex-fill">
                                      <div class="progress-bar" style="width: 9%" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" aria-label="9% Complete">
                                        <span class="visually-hidden">9% Complete</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="flag flag-xs flag-country-pl me-2"></span>
                                  Poland
                                </td>
                                <td class="text-end">2,210</td>
                                <td>
                                  <div class="d-flex align-items-center gap-2">
                                    <span class="text-secondary">6%</span>
                                    <div class="progress progress-sm flex-fill">
                                      <div class="progress-bar" style="width: 6%" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" aria-label="6% Complete">
                                        <span class="visually-hidden">6% Complete</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
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
<script src="/tabler/libs/jsvectormap/dist/jsvectormap.min.js" defer></script>
<script src="/tabler/libs/jsvectormap/dist/maps/world.js" defer></script>
<script src="/tabler/libs/jsvectormap/dist/maps/world-merc.js" defer></script>
<script src="/tabler/js/tabler-map.min.js" defer></script>
<script>
      document.addEventListener('DOMContentLoaded', () => {
        // The markers exist once the map does, which may be a moment after the page has loaded
        tabler.MapView.getInstance('#map-stores').ready((map) => {
          // The markers are in the same order as the stores in the list
          const { markers } = tabler.MapView.getInstance('#map-stores')
          const items = [...document.querySelectorAll('#stores-list .list-group-item')]

          const select = (index, move) => {
            items.forEach((item, position) => item.classList.toggle('active', position === index))
            markers.forEach((marker, position) => marker.getPopup().isOpen() !== (position === index) && marker.togglePopup())

            if (move) {
              map.flyTo({ center: markers[index].getLngLat(), zoom: 13 })
            }
          }

          items.forEach((item, index) => item.addEventListener('click', () => select(index, true)))
          markers.forEach((marker, index) =>
            marker.getElement().addEventListener('click', (event) => {
              event.stopPropagation()
              select(index, false)
              items[index].scrollIntoView({ block: 'nearest' })
            }),
          )

          // Search hides the stores, and their markers, that do not match
          document.getElementById('stores-search').addEventListener('input', (event) => {
            const query = event.target.value.trim().toLowerCase()

            items.forEach((item, index) => {
              const hidden = !item.textContent.toLowerCase().includes(query)

              item.hidden = hidden
              markers[index].getElement().hidden = hidden
            })
          })

          select(0, false)
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
          const view = tabler.MapView.getInstance('#map-live-users')

          view.onStyle((map) => {
            map.addSource('cities', {
              type: 'geojson',
              data: { type: 'FeatureCollection', features: cities.map((city) => ({ type: 'Feature', properties: city, geometry: { type: 'Point', coordinates: [city.lng, city.lat] } })) },
            })
            map.addLayer({
              id: 'cities',
              type: 'circle',
              source: 'cities',
              paint: { 'circle-color': tabler.MapView.color('--tblr-primary'), 'circle-opacity': 0.6, 'circle-radius': ['interpolate', ['linear'], ['get', 'users'], 0, 3, 1600, 14] },
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
      document.addEventListener('DOMContentLoaded', () => {
        const view = tabler.MapView.getInstance('#map-homes')
        const items = [...document.querySelectorAll('#homes-list .list-group-item')]

        // The markers are in the same order as the homes in the list
        view.ready((map) => {
          const select = (index, move) => {
            items.forEach((item, position) => item.classList.toggle('active', position === index))
            view.markers.forEach((marker, position) => {
              marker.getElement().classList.toggle('map-marker-dark', position === index)
              marker.getElement().classList.toggle('map-marker-primary', position !== index)
            })

            if (move) {
              map.flyTo({ center: view.markers[index].getLngLat(), zoom: 13 })
            }
          }

          items.forEach((item, index) => item.addEventListener('click', () => select(index, true)))
          view.markers.forEach((marker, index) =>
            marker.getElement().addEventListener('click', () => {
              select(index, false)
              items[index].scrollIntoView({ block: 'nearest' })
            }),
          )
        })
      })
    </script>
<script>
      document.addEventListener('DOMContentLoaded', () => {
        const view = tabler.MapView.getInstance('#map-address')

        // The marker exists once the map does, which may be a moment after the page has loaded
        view.ready(() => {
          const marker = view.markers[0]

          marker.on('drag', () => {
            const { lng, lat } = marker.getLngLat()

            document.getElementById('address-position').value = `${lat.toFixed(5)}, ${lng.toFixed(5)}`
          })
        })
      })
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
