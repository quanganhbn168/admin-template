<x-preview.page :title='"Number input"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Number input</h1>

                  <div class="text-secondary mt-1">A number input is a field with a decrease and an increase button, for a quantity or any value changed in fixed steps.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/forms/number-input" target="_blank" rel="noopener" class="link-secondary">
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
                      <p class="card-subtitle">Add <code>data-bs-toggle="number-input"</code> to the input; the plugin renders the box and the buttons, <code>min</code> and <code>max</code> set the bounds.</p>
                      <input type="text" class="form-control" data-bs-toggle="number-input" value="1" min="1" max="99" aria-label="Quantity" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">At a bound</h2>
                      <p class="card-subtitle">The button at <code>min</code> or <code>max</code> goes disabled, so the user sees the value cannot go further.</p>
                      <div class="d-flex flex-wrap gap-3">
                        <input type="text" class="form-control" data-bs-toggle="number-input" value="0" min="0" max="10" aria-label="At the minimum" />
                        <input type="text" class="form-control" data-bs-toggle="number-input" value="10" min="0" max="10" aria-label="At the maximum" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Step and precision</h2>
                      <p class="card-subtitle">A fractional <code>step</code> sets how many decimals the value keeps.</p>
                      <div class="d-flex flex-wrap gap-3">
                        <input type="text" class="form-control" data-bs-toggle="number-input" value="1.5" min="0" max="10" step="0.25" aria-label="Hours" />
                        <input type="text" class="form-control" data-bs-toggle="number-input" value="500" min="0" step="100" aria-label="Amount" style="--tblr-number-input-input-width: 5rem" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Sizes</h2>
                      <p class="card-subtitle">Add <code>.form-control-sm</code> or <code>.form-control-lg</code> to the input; the box gets <code>.number-input-sm</code> or <code>-lg</code>.</p>
                      <div class="d-flex flex-wrap align-items-center gap-3">
                        <input type="text" class="form-control form-control-sm" data-bs-toggle="number-input" value="1" min="0" aria-label="Small" />
                        <input type="text" class="form-control" data-bs-toggle="number-input" value="1" min="0" aria-label="Default" />
                        <input type="text" class="form-control form-control-lg" data-bs-toggle="number-input" value="1" min="0" aria-label="Large" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Without bounds</h2>
                      <p class="card-subtitle">Without <code>min</code> and <code>max</code> the value goes both ways, so a minus sign can be typed too.</p>
                      <input type="text" class="form-control" data-bs-toggle="number-input" value="0" aria-label="Offset" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Native number input</h2>
                      <p class="card-subtitle">Use <code>type="number"</code> to keep the browser's own validation; the number input only hides its spin buttons.</p>
                      <input type="number" class="form-control" data-bs-toggle="number-input" value="5" min="0" max="10" aria-label="Seats" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">No repeat</h2>
                      <p class="card-subtitle">Add <code>data-bs-repeat="false"</code> to step once per click instead of repeating while the button is held.</p>
                      <input type="text" class="form-control" data-bs-toggle="number-input" data-bs-repeat="false" value="1" min="1" max="99" aria-label="Quantity, one step per click" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Wider input</h2>
                      <p class="card-subtitle">Set <code>--tblr-number-input-input-width</code> on the input for longer values.</p>
                      <input type="text" class="form-control" data-bs-toggle="number-input" value="125000" min="0" step="1000" aria-label="Budget" style="--tblr-number-input-input-width: 7rem" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Disabled and readonly</h2>
                      <p class="card-subtitle">Add <code>disabled</code> or <code>readonly</code> to the input; both buttons follow.</p>
                      <div class="d-flex flex-wrap gap-3">
                        <input type="text" class="form-control" data-bs-toggle="number-input" value="3" disabled aria-label="Disabled" />
                        <input type="text" class="form-control" data-bs-toggle="number-input" value="3" readonly aria-label="Readonly" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Validation</h2>
                      <p class="card-subtitle">Add <code>.is-valid</code> or <code>.is-invalid</code> to the input, like on any <code>.form-control</code>; the feedback text after it still shows.</p>
                      <div class="space-y-3">
                        <div>
                          <input type="text" class="form-control is-valid" data-bs-toggle="number-input" value="2" min="1" max="5" aria-label="Valid quantity" />
                          <div class="valid-feedback">In stock, ships today.</div>
                        </div>
                        <div>
                          <input type="text" class="form-control is-invalid" data-bs-toggle="number-input" value="5" min="1" max="5" aria-label="Invalid quantity" />
                          <div class="invalid-feedback">Only 5 pieces left.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Custom buttons</h2>
                      <p class="card-subtitle">Write the <code>.number-input</code> markup yourself to change the icons or labels; <code>data-bs-number-input-action</code> marks the buttons.</p>
                      <div class="number-input" data-bs-toggle="number-input">
                        <button type="button" class="btn btn-icon" data-bs-number-input-action="decrement" aria-label="Fewer">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 9l6 6l6 -6" /></svg>
                        </button>
                        <input type="text" class="form-control" value="1" min="1" max="99" aria-label="Quantity with custom buttons" />
                        <button type="button" class="btn btn-icon" data-bs-number-input-action="increment" aria-label="More">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M6 15l6 -6l6 6" /></svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With a label and hint</h2>
                      <p class="card-subtitle">A number input sits in a <code>FormGroup</code> like any other control.</p>
                      <div class="mb-3">
                        <label class="form-label" for="number-input-seats"> Number of seats </label>

                        <input type="text" class="form-control" data-bs-toggle="number-input" id="number-input-seats" name="seats" value="2" min="1" max="8" />

                        <div id="number-input-seats-hint" class="form-text">Up to 8 seats per booking.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-8">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">In a cart</h2>
                      <p class="card-subtitle">The usual place for a number input: a quantity per line, with <code>max</code> set to the stock.</p>
                      <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                          <thead>
                            <tr>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th class="w-1"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div>Hex nut M8 DIN 934, zinc plated</div>
                                <div class="text-secondary">8-934-8-ZN</div>
                              </td>
                              <td class="text-nowrap">$12.40</td>
                              <td>
                                <input type="text" class="form-control" data-bs-toggle="number-input" value="2" min="1" max="50" aria-label="Quantity of Hex nut M8 DIN 934, zinc plated" />
                              </td>
                              <td>
                                <button type="button" class="btn btn-icon btn-ghost-secondary" aria-label="Remove Hex nut M8 DIN 934, zinc plated">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div>Lock nut M8 DIN 985, stainless A2</div>
                                <div class="text-secondary">8-985-A2</div>
                              </td>
                              <td class="text-nowrap">$28.90</td>
                              <td>
                                <input type="text" class="form-control" data-bs-toggle="number-input" value="1" min="1" max="20" aria-label="Quantity of Lock nut M8 DIN 985, stainless A2" />
                              </td>
                              <td>
                                <button type="button" class="btn btn-icon btn-ghost-secondary" aria-label="Remove Lock nut M8 DIN 985, stainless A2">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div>Cap nut M8 DIN 1587, brass</div>
                                <div class="text-secondary">8-1587-MS</div>
                              </td>
                              <td class="text-nowrap">$41.00</td>
                              <td>
                                <input type="text" class="form-control" data-bs-toggle="number-input" value="3" min="1" max="3" aria-label="Quantity of Cap nut M8 DIN 1587, brass" />
                              </td>
                              <td>
                                <button type="button" class="btn btn-icon btn-ghost-secondary" aria-label="Remove Cap nut M8 DIN 1587, brass">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                  </svg>
                                </button>
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
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
