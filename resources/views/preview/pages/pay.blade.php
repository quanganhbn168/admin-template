<x-preview.bare :title='"Pay"' :html-attrs='"lang=\"en\""'>
@verbatim
<header class="navbar">
      <div class="container-fluid">
        <!-- BEGIN NAVBAR LOGO -->
        <a href="." aria-label="Tabler" class="navbar-brand navbar-brand-autodark">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68 68" width="32" height="32" aria-label="Tabler" class="navbar-brand-image">
            <path
              d="M64.6 16.2C63 9.9 58.1 5 51.8 3.4 40 1.5 28 1.5 16.2 3.4 9.9 5 5 9.9 3.4 16.2 1.5 28 1.5 40 3.4 51.8 5 58.1 9.9 63 16.2 64.6c11.8 1.9 23.8 1.9 35.6 0C58.1 63 63 58.1 64.6 51.8c1.9-11.8 1.9-23.8 0-35.6zM33.3 36.3c-2.8 4.4-6.6 8.2-11.1 11-1.5.9-3.3.9-4.8.1s-2.4-2.3-2.5-4c0-1.7.9-3.3 2.4-4.1 2.3-1.4 4.4-3.2 6.1-5.3-1.8-2.1-3.8-3.8-6.1-5.3-2.3-1.3-3-4.2-1.7-6.4s4.3-2.9 6.5-1.6c4.5 2.8 8.2 6.5 11.1 10.9 1 1.4 1 3.3.1 4.7zM49.2 46H37.8c-2.1 0-3.8-1-3.8-3s1.7-3 3.8-3h11.4c2.1 0 3.8 1 3.8 3s-1.7 3-3.8 3z"
              fill="#066fd1"
              style="fill: var(--tblr-navbar-logo-color, var(--tblr-primary, #066fd1))"
            />
          </svg>
        </a>
        <!-- END NAVBAR LOGO -->

        <div>
          <a href="." class="btn btn-close" aria-label="Close"></a>
        </div>
      </div>
    </header>

    <main class="page" id="content">
      <div class="bg-dark bg-cover" style="background-image: url(/tabler/static/bg-cover.jpg)">
        <div class="bg-dark bg-opacity-75 pt-5 bg-blur">
          <div class="container container-tight">
            <img src="/tabler/static/bg-cover.jpg" alt="" class="img-fluid rounded-3 rounded-top" />
          </div>
        </div>
      </div>

      <div class="container container-tight">
        <div class="card rounded-top-0 border-top-0">
          <div class="card-body pt-0">
            <div class="mb-3 text-center">
              <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar avatar-xl avatar-cover rounded-circle mb-3"></span>
              <div class="mb-4">
                <h1 class="h2">Front-End Learning</h1>
                <div class="text-secondary">Learn to build web apps with HTML & CSS. Get started quickly with included templates.</div>
              </div>
            </div>

            <nav class="nav nav-segmented w-100 mb-4" role="tablist">
              <button data-bs-target="#tab-card" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="tab-card" aria-selected="true">
                <!-- Download SVG icon from http://tabler.io/icons/icon/credit-card -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                  <path d="M3 8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3l0 -8" />
                  <path d="M3 10l18 0" />
                  <path d="M7 15l.01 0" />
                  <path d="M11 15l2 0" />
                </svg>
                <span>Pay With Card</span>
              </button>
              <button data-bs-target="#tab-paypal" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="tab-paypal" aria-selected="false">
                <!-- Download SVG icon from http://tabler.io/icons/icon/brand-paypal -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                  <path d="M10 13l2.5 0c2.5 0 5 -2.5 5 -5c0 -3 -1.9 -5 -5 -5h-5.5c-.5 0 -1 .5 -1 1l-2 14c0 .5 .5 1 1 1h2.8l1.2 -5c.1 -.6 .4 -1 1 -1m7.5 -5.8c1.7 1 2.5 2.8 2.5 4.8c0 2.5 -2.5 4.5 -5 4.5h-2.6l-.6 3.6a1 1 0 0 1 -1 .8l-2.7 0a.5 .5 0 0 1 -.5 -.6l.2 -1.4" />
                </svg>
                <span>Pay With PayPal</span>
              </button>
            </nav>

            <div class="tab-content">
              <div class="tab-pane active show" id="tab-card" role="tabpanel">
                <form>
                  <div class="space-y">
                    <div>
                      <label class="form-label" for="card-number"> Card Number </label>

                      <div class="input-group input-group-flat">
                        <span class="input-group-text">
                          <span class="payment payment-xs payment-provider-visa"></span>
                        </span>
                        <input type="text" class="form-control" placeholder="0000 0000 0000 0000" autocomplete="cc-number" id="card-number" aria-required="true" />
                      </div>
                    </div>

                    <div class="row g-3">
                      <div class="col-sm-6">
                        <label class="form-label" for="card-expiry"> Expiry Date </label>

                        <input type="text" class="form-control" id="card-expiry" placeholder="MM/YY" inputmode="numeric" aria-required="true" maxlength="5" autocomplete="cc-exp" />
                      </div>
                      <div class="col-sm-6">
                        <label class="form-label" for="card-cvc"> CVC </label>

                        <input type="text" class="form-control" id="card-cvc" placeholder="CVC" inputmode="numeric" aria-required="true" maxlength="3" autocomplete="cc-csc" />
                      </div>
                    </div>

                    <div>
                      <label class="form-label" for="card-name"> Name on Card </label>

                      <input type="text" class="form-control" id="card-name" placeholder="Full name" aria-required="true" autocomplete="cc-name" />
                    </div>

                    <div>
                      <label class="form-label" for="card-email"> Email </label>

                      <input type="email" class="form-control" id="card-email" placeholder="you@example.com" aria-required="true" autocomplete="email" />
                    </div>

                    <div>
                      <button type="button" class="btn btn-primary w-100">Pay $253</button>
                      <div class="text-secondary text-center small mt-3">You'll be charged $253, including $48 for VAT in Poland</div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-pane" id="tab-paypal" role="tabpanel">
                <button type="button" class="btn btn-primary w-100">
                  <!-- Download SVG icon from http://tabler.io/icons/icon/brand-paypal -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                    <path d="M10 13l2.5 0c2.5 0 5 -2.5 5 -5c0 -3 -1.9 -5 -5 -5h-5.5c-.5 0 -1 .5 -1 1l-2 14c0 .5 .5 1 1 1h2.8l1.2 -5c.1 -.6 .4 -1 1 -1m7.5 -5.8c1.7 1 2.5 2.8 2.5 4.8c0 2.5 -2.5 4.5 -5 4.5h-2.6l-.6 3.6a1 1 0 0 1 -1 .8l-2.7 0a.5 .5 0 0 1 -.5 -.6l.2 -1.4" />
                  </svg>
                  <span class="ms-2">Pay with PayPal - $253</span>
                </button>
                <div class="text-secondary text-center small mt-3">You'll be charged $253, including $48 for VAT in Poland</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endverbatim
</x-preview.bare>
