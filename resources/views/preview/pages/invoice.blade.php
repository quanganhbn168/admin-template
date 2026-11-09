<x-preview.page :title='"Invoice"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Invoice</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <!-- BEGIN HEADER ACTIONS -->
                  <button type="button" class="btn btn-primary" onclick="window.print()">
                    <!-- Download SVG icon from http://tabler.io/icons/icon/printer -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                      <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                      <path d="M7 15a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2l0 -4" />
                    </svg>
                    Print Invoice
                  </button>
                  <!-- END HEADER ACTIONS -->
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="card card-lg">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <p class="h3">Company</p>
                      <address>
                        Street Address<br />
                        State, City<br />
                        Region, Postal Code<br />
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="68041c0c280d10090518040d460b0705">[email&#160;protected]</a>
                      </address>
                    </div>
                    <div class="col-6 text-end">
                      <p class="h3">Client</p>
                      <address>
                        Street Address<br />
                        State, City<br />
                        Region, Postal Code<br />
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5734232517322f363a273b327934383a">[email&#160;protected]</a>
                      </address>
                    </div>

                    <div class="col-12 my-5">
                      <h2 class="h1">Invoice INV/001/15</h2>
                    </div>
                  </div>

                  <table class="table table-transparent table-responsive">
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 1%"></th>
                        <th>Product</th>
                        <th class="text-center" style="width: 1%">Qnt</th>
                        <th class="text-end" style="width: 1%">Unit</th>
                        <th class="text-end" style="width: 1%">Amount</th>
                      </tr>
                    </thead>
                    <tr>
                      <td class="text-center">1</td>
                      <td>
                        <p class="strong mb-1">Logo Creation</p>
                        <div class="text-secondary">Logo and business cards design</div>
                      </td>
                      <td class="text-center">1</td>
                      <td class="text-end">$1.800,00</td>
                      <td class="text-end">$1.800,00</td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>
                        <p class="strong mb-1">Online Store Design &amp; Development</p>
                        <div class="text-secondary">Design/Development for all popular modern browsers</div>
                      </td>
                      <td class="text-center">1</td>
                      <td class="text-end">$20.000,00</td>
                      <td class="text-end">$20.000,00</td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>
                        <p class="strong mb-1">App Design</p>
                        <div class="text-secondary">Promotional mobile application</div>
                      </td>
                      <td class="text-center">1</td>
                      <td class="text-end">$3.200,00</td>
                      <td class="text-end">$3.200,00</td>
                    </tr>
                    <tr>
                      <td colspan="4" class="strong text-end">Subtotal</td>
                      <td class="text-end">$25.000,00</td>
                    </tr>
                    <tr>
                      <td colspan="4" class="strong text-end">Vat Rate</td>
                      <td class="text-end">20%</td>
                    </tr>
                    <tr>
                      <td colspan="4" class="strong text-end">Vat Due</td>
                      <td class="text-end">$5.000,00</td>
                    </tr>
                    <tr>
                      <td colspan="4" class="fw-semibold text-uppercase text-end">Total Due</td>
                      <td class="fw-semibold text-end">$30.000,00</td>
                    </tr>
                  </table>

                  <p class="text-secondary text-center mt-5">Thank you very much for doing business with us. We look forward to working with you again!</p>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
<x-slot:scripts>
@verbatim
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
