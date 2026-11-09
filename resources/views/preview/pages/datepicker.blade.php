<x-preview.page :title='"Date picker"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Date picker</h1>

                  <div class="text-secondary mt-1">A date picker opens a calendar under a field or a button and writes the picked date back into it.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/date-picker" target="_blank" rel="noopener" class="link-secondary">
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
                      <p class="card-subtitle">Add <code>data-bs-toggle="datepicker"</code> to a text input. The calendar opens on focus.</p>
                      <label class="form-label" for="datepicker-basic">Date</label>
                      <input type="text" class="form-control" id="datepicker-basic" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">With icon</h2>
                      <p class="card-subtitle">Wrap the field in <code>.input-icon</code>. The popup lines up with the wrapper, not the input.</p>
                      <label class="form-label" for="datepicker-icon">Date</label>
                      <div class="input-icon mb-3">
                        <input type="text" class="form-control" id="datepicker-icon" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                        <span class="input-icon-addon"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M11 15h1" />
                            <path d="M12 15v3" /></svg
                        ></span>
                      </div>
                      <label class="form-label" for="datepicker-icon-prepend">Date</label>
                      <div class="input-icon">
                        <span class="input-icon-addon"
                          ><!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M11 15h1" />
                            <path d="M12 15v3" /></svg
                        ></span>
                        <input type="text" class="form-control" id="datepicker-icon-prepend" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Initial value</h2>
                      <p class="card-subtitle">A <code>value</code> in <code>YYYY-MM-DD</code> is shown on load and the calendar opens on that month.</p>
                      <label class="form-label" for="datepicker-value">Birth date</label>
                      <input type="text" class="form-control" id="datepicker-value" value="1990-06-20" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Min and max</h2>
                      <p class="card-subtitle">Limit the pickable dates with <code>data-bs-date-min</code> and <code>data-bs-date-max</code>.</p>
                      <label class="form-label" for="datepicker-min-max">Event date (2026 only)</label>
                      <input type="text" class="form-control" id="datepicker-min-max" placeholder="Select a date in 2026" autocomplete="off" data-bs-toggle="datepicker" data-bs-date-min="2026-01-01" data-bs-date-max="2026-12-31" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Date range</h2>
                      <p class="card-subtitle">Set <code>data-bs-selection-mode="multiple-ranged"</code> to pick a start and an end date.</p>
                      <label class="form-label" for="datepicker-range">Stay</label>
                      <input type="text" class="form-control" id="datepicker-range" placeholder="Select start and end" autocomplete="off" data-bs-toggle="datepicker" data-bs-selection-mode="multiple-ranged" data-bs-selected-dates='["2026-06-10","2026-06-18"]' />
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Multiple dates</h2>
                      <p class="card-subtitle">Set <code>data-bs-selection-mode="multiple"</code> to pick any number of dates.</p>
                      <label class="form-label" for="datepicker-multiple">Days off</label>
                      <input type="text" class="form-control" id="datepicker-multiple" placeholder="Select dates" autocomplete="off" data-bs-toggle="datepicker" data-bs-selection-mode="multiple" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Two months</h2>
                      <p class="card-subtitle">Add <code>data-bs-display-months-count="2"</code> to show two months side by side.</p>
                      <label class="form-label" for="datepicker-two-months">Stay</label>
                      <input type="text" class="form-control" id="datepicker-two-months" placeholder="Select start and end" autocomplete="off" data-bs-toggle="datepicker" data-bs-selection-mode="multiple-ranged" data-bs-display-months-count="2" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Week starts on Sunday</h2>
                      <p class="card-subtitle">Set <code>data-bs-first-weekday="0"</code>. The default is Monday.</p>
                      <label class="form-label" for="datepicker-sunday">Date</label>
                      <input type="text" class="form-control" id="datepicker-sunday" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" data-bs-first-weekday="0" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Week numbers</h2>
                      <p class="card-subtitle">Add <code>data-bs-week-numbers="true"</code> to show the week number in front of each row.</p>
                      <label class="form-label" for="datepicker-week-numbers">Delivery date</label>
                      <input type="text" class="form-control" id="datepicker-week-numbers" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" data-bs-week-numbers="true" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Placement</h2>
                      <p class="card-subtitle">Align the popup with <code>data-bs-placement</code>: left, center, right or auto.</p>
                      <label class="form-label" for="datepicker-center">Centered</label>
                      <input type="text" class="form-control mb-3" id="datepicker-center" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" data-bs-placement="center" />
                      <label class="form-label" for="datepicker-right">Right aligned</label>
                      <input type="text" class="form-control" id="datepicker-right" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" data-bs-placement="right" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Button trigger</h2>
                      <p class="card-subtitle">Any element works as a trigger. Mark the text with <code>data-bs-datepicker-display</code> so the icon stays.</p>
                      <div class="btn-list">
                        <button type="button" class="btn" data-bs-toggle="datepicker">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M11 15h1" />
                            <path d="M12 15v3" />
                          </svg>
                          <span data-bs-datepicker-display>Select date</span>
                        </button>
                        <button type="button" class="btn" data-bs-toggle="datepicker" data-bs-selection-mode="multiple-ranged">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/calendar-event -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2l0 -12" />
                            <path d="M16 3l0 4" />
                            <path d="M8 3l0 4" />
                            <path d="M4 11l16 0" />
                            <path d="M8 15h2v2h-2l0 -2" />
                          </svg>
                          <span data-bs-datepicker-display>Select range</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Events</h2>
                      <p class="card-subtitle">Listen to <code>change.bs.datepicker</code> to read the picked dates as <code>YYYY-MM-DD</code>.</p>
                      <label class="form-label" for="datepicker-events">Date</label>
                      <input type="text" class="form-control" id="datepicker-events" placeholder="Select start and end" autocomplete="off" data-bs-toggle="datepicker" data-bs-selection-mode="multiple-ranged" />
                      <div class="form-text" id="datepicker-events-output">No dates picked yet.</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row row-cards mt-4">
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Inline calendar</h2>
                      <p class="card-subtitle">Add <code>data-bs-inline="true"</code> to render the calendar in place. It takes the card as its surface.</p>
                      <div id="datepicker-inline" data-bs-toggle="datepicker" data-bs-inline="true"></div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Inline range</h2>
                      <p class="card-subtitle">Inline calendars take the same options. This one picks a start and an end date.</p>
                      <div id="datepicker-inline-range" data-bs-toggle="datepicker" data-bs-inline="true" data-bs-selection-mode="multiple-ranged" data-bs-selected-dates='["2026-06-10","2026-06-18"]'></div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Inline in a form</h2>
                      <p class="card-subtitle">A hidden input inside the calendar submits the picked dates with the form.</p>
                      <form onsubmit="return false">
                        <div id="datepicker-inline-form" data-bs-toggle="datepicker" data-bs-inline="true">
                          <input type="hidden" name="selected_date" />
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Inline with week numbers</h2>
                      <p class="card-subtitle">Week numbers work in an inline calendar too, and with every selection mode.</p>
                      <div id="datepicker-inline-week-numbers" data-bs-toggle="datepicker" data-bs-inline="true" data-bs-selection-mode="multiple-ranged" data-bs-selected-dates='["2026-06-10","2026-06-18"]' data-bs-week-numbers="true"></div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 col-lg-8">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Inline with two months</h2>
                      <p class="card-subtitle">Add <code>data-bs-display-months-count="2"</code> for a wide calendar.</p>
                      <div id="datepicker-inline-two-months" data-bs-toggle="datepicker" data-bs-inline="true" data-bs-selection-mode="multiple-ranged" data-bs-display-months-count="2"></div>
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
<script src="/tabler/libs/vanilla-calendar-pro/index.js" defer></script>
<script>
      document.getElementById('datepicker-events').addEventListener('change.bs.datepicker', (event) => {
        const output = document.getElementById('datepicker-events-output')
        output.textContent = event.dates.length ? `Picked: ${event.dates.join(', ')}` : 'No dates picked yet.'
      })
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
