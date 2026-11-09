<x-preview.page :title='"Form layout"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Form Layout</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/forms" target="_blank" rel="noopener" class="link-secondary">
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
              <div class="row row-cards row-cols-1 row-cols-md-3">
                <div class="col">
                  <div class="row row-cards">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div>
                            <h2 class="card-title">Basic Form</h2>
                            <p class="card-subtitle">A minimal sign-up form with just the essentials.</p>
                          </div>
                        </div>
                        <div class="card-body">
                          <form class="space-y">
                            <div class="row">
                              <div class="col-6">
                                <label class="form-label visually-hidden" for="basic-name"> Name </label>

                                <input type="text" placeholder="Name" class="form-control" id="basic-name" name="name" />
                              </div>
                              <div class="col-6">
                                <label class="form-label visually-hidden" for="basic-email"> Email address </label>

                                <input type="email" placeholder="Email address" class="form-control" id="basic-email" name="email" />
                              </div>
                            </div>
                            <div>
                              <label class="form-label visually-hidden" for="basic-password"> Password </label>

                              <input type="password" placeholder="Password" class="form-control" id="basic-password" name="password" autocomplete="new-password" />
                            </div>
                            <div>
                              <label class="form-label visually-hidden" for="basic-password-confirm"> Confirm Password </label>

                              <input type="password" placeholder="Confirm Password" class="form-control" id="basic-password-confirm" name="password_confirm" autocomplete="new-password" />
                            </div>
                            <div><button type="submit" class="btn btn-primary w-100">Submit</button></div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div>
                            <h2 class="card-title">Example Form</h2>
                            <p class="card-subtitle">A contact form with a subject select and a message field.</p>
                          </div>
                        </div>
                        <div class="card-body">
                          <form>
                            <div class="space-y">
                              <div>
                                <label class="form-label" for="example-first-name"> First Name </label>

                                <input type="text" placeholder="Enter first name" class="form-control" id="example-first-name" name="first_name" />
                              </div>
                              <div>
                                <label class="form-label" for="example-last-name"> Last Name </label>

                                <input type="text" placeholder="Enter last name" class="form-control" id="example-last-name" name="last_name" />
                              </div>
                              <div>
                                <label class="form-label" for="example-email"> Email </label>

                                <input type="email" placeholder="Enter email address" class="form-control" id="example-email" name="email" />
                              </div>
                              <div>
                                <label class="form-label" for="example-subject"> Select Subject </label>

                                <select class="form-select" id="example-subject" name="subject">
                                  <option>Option 1</option>
                                  <option>Option 2</option>
                                  <option>Option 3</option>
                                  <option>Option 4</option>
                                </select>
                              </div>
                              <div>
                                <label class="form-label" for="example-message"> Message </label>

                                <textarea placeholder="Enter your message" rows="6" class="form-control" id="example-message" name="message"></textarea>
                              </div>
                              <div>
                                <button type="submit" class="btn btn-primary w-100">
                                  Send Message<!-- Download SVG icon from http://tabler.io/icons/icon/arrow-right -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-end">
                                    <path d="M5 12l14 0" />
                                    <path d="M13 18l6 -6" />
                                    <path d="M13 6l6 6" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="row row-cards">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div>
                            <h2 class="card-title">Example Form with Icons</h2>
                            <p class="card-subtitle">Prefix each field with an icon for a friendlier sign-up flow.</p>
                          </div>
                        </div>
                        <div class="card-body">
                          <form class="space-y">
                            <div>
                              <div class="input-icon">
                                <span class="input-icon-addon"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg
                                ></span>
                                <input type="text" value class="form-control" placeholder="Username" />
                              </div>
                            </div>
                            <div>
                              <div class="input-icon">
                                <span class="input-icon-addon"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 7l9 6l9 -6" /></svg
                                ></span>
                                <input type="email" value class="form-control" placeholder="Email address" />
                              </div>
                            </div>
                            <div>
                              <div class="input-icon">
                                <span class="input-icon-addon"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                    <path d="M8 11v-4a4 4 0 1 1 8 0v4" /></svg
                                ></span>
                                <input type="password" value class="form-control" placeholder="Password" autocomplete="new-password" />
                              </div>
                            </div>
                            <div>
                              <div class="input-icon">
                                <span class="input-icon-addon"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/lock -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6" />
                                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                    <path d="M8 11v-4a4 4 0 1 1 8 0v4" /></svg
                                ></span>
                                <input type="password" value class="form-control" placeholder="Confirm Password" autocomplete="new-password" />
                              </div>
                            </div>
                            <div>
                              <div class="row align-items-center">
                                <div class="col">
                                  <label class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" />
                                    <span class="form-check-label">Remember me</span>
                                  </label>
                                </div>
                                <div class="col-auto">
                                  <button type="submit" class="btn btn-primary">
                                    Create Account<!-- Download SVG icon from http://tabler.io/icons/icon/arrow-right -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-end">
                                      <path d="M5 12l14 0" />
                                      <path d="M13 18l6 -6" />
                                      <path d="M13 6l6 6" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div>
                            <h2 class="card-title">Form with Icons and Validation</h2>
                            <p class="card-subtitle">Pair an icon input with valid and invalid feedback states.</p>
                          </div>
                        </div>
                        <div class="card-body">
                          <form class="space-y">
                            <div>
                              <div class="input-icon">
                                <span class="input-icon-addon"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg
                                ></span>
                                <input type="text" value="" class="form-control is-invalid" placeholder="Username" aria-label="Username" aria-invalid="true" aria-describedby="username-invalid-feedback" />
                                <div class="invalid-feedback" id="username-invalid-feedback">This throws the icon out of bounds when input element contains `is-invalid` class.</div>
                              </div>
                            </div>
                            <div>
                              <div class="input-icon">
                                <span class="input-icon-addon"
                                  ><!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 7l9 6l9 -6" /></svg
                                ></span>
                                <input type="email" value="" class="form-control is-valid" placeholder="Email" aria-label="Email" aria-invalid="false" aria-describedby="email-valid-feedback" />
                                <div class="valid-feedback" id="email-valid-feedback">This email looks good!</div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <form class="card h-100">
                        <div class="card-header">
                          <h2 class="card-title">Horizontal form</h2>
                        </div>
                        <div class="card-body">
                          <div class="mb-3 row">
                            <label class="col-3 col-form-label required" for="form-layout-email-horizontal">Email address</label>
                            <div class="col">
                              <input type="email" id="form-layout-email-horizontal" class="form-control" aria-describedby="form-layout-email-hint-horizontal" aria-required="true" placeholder="Enter email" autocomplete="email" />
                              <div id="form-layout-email-hint-horizontal" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label class="col-3 col-form-label required" for="form-layout-password-horizontal">Password</label>
                            <div class="col">
                              <input type="password" id="form-layout-password-horizontal" class="form-control" aria-describedby="form-layout-password-hint-horizontal" aria-required="true" placeholder="Password" autocomplete="new-password" />
                              <div id="form-layout-password-hint-horizontal" class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label class="col-3 col-form-label" for="form-layout-select-horizontal">Select</label>
                            <div class="col">
                              <select class="form-select" id="form-layout-select-horizontal">
                                <option>Option 1</option>
                                <optgroup label="Optgroup 1">
                                  <option>Option 1</option>
                                  <option>Option 2</option>
                                </optgroup>
                                <option>Option 2</option>
                                <optgroup label="Optgroup 2">
                                  <option>Option 1</option>
                                  <option>Option 2</option>
                                </optgroup>
                                <optgroup label="Optgroup 3">
                                  <option>Option 1</option>
                                  <option>Option 2</option>
                                </optgroup>
                                <option>Option 3</option>
                                <option>Option 4</option>
                              </select>
                            </div>
                          </div>

                          <div class="row">
                            <label class="col-3 col-form-label pt-0">Checkboxes</label>
                            <fieldset class="col">
                              <legend class="visually-hidden">Checkboxes</legend>
                              <label class="form-check">
                                <input class="form-check-input" type="checkbox" checked />
                                <span class="form-check-label">Option 1</span>
                              </label>
                              <label class="form-check">
                                <input class="form-check-input" type="checkbox" />
                                <span class="form-check-label">Option 2</span>
                              </label>
                              <label class="form-check">
                                <input class="form-check-input" type="checkbox" disabled />
                                <span class="form-check-label">Option 3</span>
                              </label>
                            </fieldset>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <div>
                            <h2 class="card-title">Example Form</h2>
                            <p class="card-subtitle">A longer profile form grouped into personal info and address sections.</p>
                          </div>
                        </div>
                        <div class="card-body">
                          <form>
                            <div class="space-y">
                              <div><h3 class="h4">Personal Info</h3></div>
                              <div class="row row-cols-2 g-4">
                                <div>
                                  <label class="form-label" for="example-form-first-name"> First Name </label>

                                  <input type="text" id="example-form-first-name" placeholder="Enter first name" class="form-control" autocomplete="given-name" />
                                </div>
                                <div>
                                  <label class="form-label" for="example-form-last-name"> Last Name </label>

                                  <input type="text" id="example-form-last-name" placeholder="Enter last name" class="form-control" autocomplete="family-name" />
                                </div>
                                <div>
                                  <label class="form-label" for="example-form-gender"> Gender </label>

                                  <div>
                                    <select class="form-select" id="example-form-gender">
                                      <option>Male</option>
                                      <option>Female</option>
                                      <option>Others</option>
                                    </select>
                                  </div>
                                </div>
                                <div>
                                  <label class="form-label" for="datepicker-birth-date"> Date of Birth </label>

                                  <div>
                                    <div class="input-icon">
                                      <input type="text" class="form-control" id="datepicker-birth-date" value="2020-06-20" placeholder="Select a date" autocomplete="off" data-bs-toggle="datepicker" />
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
                                  </div>
                                </div>
                              </div>
                              <div>
                                <label class="form-label" for="example-form-category"> Category </label>

                                <div>
                                  <select class="form-select" id="example-form-category">
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                    <option>Category 3</option>
                                  </select>
                                </div>
                              </div>
                              <div><h3 class="h4">Address</h3></div>
                              <div>
                                <label class="form-label" for="example-form-street"> Street </label>

                                <input type="text" id="example-form-street" class="form-control" autocomplete="address-line1" />
                              </div>
                              <div class="row row-cols-2 g-4">
                                <div>
                                  <label class="form-label" for="example-form-city"> City </label>

                                  <input type="text" id="example-form-city" class="form-control" autocomplete="address-level2" />
                                </div>
                                <div>
                                  <label class="form-label" for="example-form-state"> State </label>

                                  <input type="text" id="example-form-state" class="form-control" autocomplete="address-level1" />
                                </div>
                                <div>
                                  <label class="form-label" for="example-form-postcode"> Post Code </label>

                                  <input type="text" id="example-form-postcode" class="form-control" autocomplete="postal-code" />
                                </div>
                                <div>
                                  <label class="form-label" for="example-form-country"> Country </label>

                                  <div>
                                    <select class="form-select" id="example-form-country" autocomplete="country-name">
                                      <option>--Select Country--</option>
                                      <option>Abkhazia</option>
                                      <option>Afghanistan</option>
                                      <option>African Union</option>
                                      <option>Åland Islands</option>
                                      <option>Albania</option>
                                      <option>Algeria</option>
                                      <option>American Samoa</option>
                                      <option>Andorra</option>
                                      <option>Angola</option>
                                      <option>Anguilla</option>
                                      <option>Antarctica</option>
                                      <option>Antigua and Barbuda</option>
                                      <option>Arab League</option>
                                      <option>Argentina</option>
                                      <option>Armenia</option>
                                      <option>Aruba</option>
                                      <option>Ascension Island</option>
                                      <option>ASEAN Union</option>
                                      <option>Australia</option>
                                      <option>Austria</option>
                                      <option>Azerbaijan</option>
                                      <option>Bahamas</option>
                                      <option>Bahrain</option>
                                      <option>Bangladesh</option>
                                      <option>Barbados</option>
                                      <option>Basque Country</option>
                                      <option>Belarus</option>
                                      <option>Belgium</option>
                                      <option>Belize</option>
                                      <option>Benin</option>
                                      <option>Bermuda</option>
                                      <option>Bhutan</option>
                                      <option>Bolivia</option>
                                      <option>Bonaire</option>
                                      <option>Bosnia and Herzegovina</option>
                                      <option>Botswana</option>
                                      <option>Bouvet Island</option>
                                      <option>Brazil</option>
                                      <option>British Indian Ocean Territory</option>
                                      <option>British Virgin Islands</option>
                                      <option>Brunei</option>
                                      <option>Bulgaria</option>
                                      <option>Burkina Faso</option>
                                      <option>Burundi</option>
                                      <option>Cabinda</option>
                                      <option>Cambodia</option>
                                      <option>Cameroon</option>
                                      <option>Canada</option>
                                      <option>Canary Islands</option>
                                      <option>Cape Verde</option>
                                      <option>Caribbean Netherlands</option>
                                      <option>Catalonia</option>
                                      <option>Cayman Islands</option>
                                      <option>Central African Republic</option>
                                      <option>Central European Free Trade Agreement</option>
                                      <option>Chad</option>
                                      <option>Chechnya</option>
                                      <option>Chequered</option>
                                      <option>Chile</option>
                                      <option>China</option>
                                      <option>Christmas Island</option>
                                      <option>Cocos (Keeling) Islands</option>
                                      <option>Colombia</option>
                                      <option>Commonwealth of Independent States</option>
                                      <option>Commonwealth of Nations</option>
                                      <option>Comoros</option>
                                      <option>Cook Islands</option>
                                      <option>Costa Rica</option>
                                      <option>Croatia</option>
                                      <option>Cuba</option>
                                      <option>Curaçao</option>
                                      <option>Cyprus</option>
                                      <option>Czechia</option>
                                      <option>Democratic Republic of the Congo</option>
                                      <option>Denmark</option>
                                      <option>Diego Garcia</option>
                                      <option>Diver Down</option>
                                      <option>Djibouti</option>
                                      <option>Dominica</option>
                                      <option>Dominican Republic</option>
                                      <option>East African Community</option>
                                      <option>East Timor</option>
                                      <option>Ecuador</option>
                                      <option>Egypt</option>
                                      <option>El Salvador</option>
                                      <option>England</option>
                                      <option>Equatorial Guinea</option>
                                      <option>Eritrea</option>
                                      <option>Estonia</option>
                                      <option>Eswatini</option>
                                      <option>Ethiopia</option>
                                      <option>European Union</option>
                                      <option>Falkland Islands</option>
                                      <option>Faroe Islands</option>
                                      <option>Fiji</option>
                                      <option>Finland</option>
                                      <option>France</option>
                                      <option>French Guiana</option>
                                      <option>French Polynesia</option>
                                      <option>French Southern Territories</option>
                                      <option>Gabon</option>
                                      <option>Galicia</option>
                                      <option>Gambia</option>
                                      <option>Georgia</option>
                                      <option>Germany</option>
                                      <option>Ghana</option>
                                      <option>Gibraltar</option>
                                      <option>Greece</option>
                                      <option>Greenland</option>
                                      <option>Grenada</option>
                                      <option>Guadeloupe</option>
                                      <option>Guam</option>
                                      <option>Guatemala</option>
                                      <option>Guernsey</option>
                                      <option>Guinea</option>
                                      <option>Guinea-Bissau</option>
                                      <option>Guyana</option>
                                      <option>Haiti</option>
                                      <option>Heard and McDonald Islands</option>
                                      <option>Honduras</option>
                                      <option>Hong Kong</option>
                                      <option>Hungary</option>
                                      <option>Iceland</option>
                                      <option>India</option>
                                      <option>Indonesia</option>
                                      <option>Iran</option>
                                      <option>Iraq</option>
                                      <option>Ireland</option>
                                      <option>Isle of Man</option>
                                      <option>Israel</option>
                                      <option>Italy</option>
                                      <option>Ivory Coast</option>
                                      <option>Jamaica</option>
                                      <option>Japan</option>
                                      <option>Jersey</option>
                                      <option>Jordan</option>
                                      <option>Jubaland</option>
                                      <option>Kazakhstan</option>
                                      <option>Kenya</option>
                                      <option>Kiribati</option>
                                      <option>Kosovo</option>
                                      <option>Kurdistan</option>
                                      <option>Kuwait</option>
                                      <option>Kyrgyzstan</option>
                                      <option>Laos</option>
                                      <option>Latvia</option>
                                      <option>Lebanon</option>
                                      <option>Lesotho</option>
                                      <option>Liberia</option>
                                      <option>Libya</option>
                                      <option>Liechtenstein</option>
                                      <option>Lithuania</option>
                                      <option>Luxembourg</option>
                                      <option>Macau</option>
                                      <option>Madagascar</option>
                                      <option>Malawi</option>
                                      <option>Malaysia</option>
                                      <option>Maldives</option>
                                      <option>Mali</option>
                                      <option>Malta</option>
                                      <option>Maltese Cross</option>
                                      <option>Marshall Islands</option>
                                      <option>Martinique</option>
                                      <option>Mauritania</option>
                                      <option>Mauritius</option>
                                      <option>Mayotte</option>
                                      <option>Mercosur</option>
                                      <option>Mexico</option>
                                      <option>Micronesia</option>
                                      <option>Moldova</option>
                                      <option>Monaco</option>
                                      <option>Mongolia</option>
                                      <option>Montenegro</option>
                                      <option>Montserrat</option>
                                      <option>Morocco</option>
                                      <option>Mozambique</option>
                                      <option>Myanmar</option>
                                      <option>Namibia</option>
                                      <option>NATO</option>
                                      <option>Nauru</option>
                                      <option>Nepal</option>
                                      <option>Netherlands</option>
                                      <option>New Caledonia</option>
                                      <option>New Zealand</option>
                                      <option>Nicaragua</option>
                                      <option>Niger</option>
                                      <option>Nigeria</option>
                                      <option>Niue</option>
                                      <option>Nordic Council</option>
                                      <option>Norfolk Island</option>
                                      <option>North Korea</option>
                                      <option>North Macedonia</option>
                                      <option>Northern Cyprus</option>
                                      <option>Northern Ireland</option>
                                      <option>Northern Mariana Islands</option>
                                      <option>Norway</option>
                                      <option>Olympic</option>
                                      <option>Oman</option>
                                      <option>Pacific Community</option>
                                      <option>Pakistan</option>
                                      <option>Palau</option>
                                      <option>Pan-European Union</option>
                                      <option>Panama</option>
                                      <option>Papua New Guinea</option>
                                      <option>Paraguay</option>
                                      <option>Paraolympic</option>
                                      <option>Peru</option>
                                      <option>Philippines</option>
                                      <option>Pirate</option>
                                      <option>Pitcairn Islands</option>
                                      <option>Poland</option>
                                      <option>Portugal</option>
                                      <option>Puerto Rico</option>
                                      <option>Qatar</option>
                                      <option>Rainbow</option>
                                      <option>Red Crescent</option>
                                      <option>Red Cross</option>
                                      <option>Republic of the Congo</option>
                                      <option>Réunion</option>
                                      <option>Romania</option>
                                      <option>Russia</option>
                                      <option>Rwanda</option>
                                      <option>Saba</option>
                                      <option>Saint Barthélemy</option>
                                      <option>Saint Helena</option>
                                      <option>Saint Helena, Ascension and Tristan da Cunha</option>
                                      <option>Saint Kitts and Nevis</option>
                                      <option>Saint Lucia</option>
                                      <option>Saint Martin</option>
                                      <option>Saint Pierre and Miquelon</option>
                                      <option>Saint Vincent and the Grenadines</option>
                                      <option>Samoa</option>
                                      <option>San Marino</option>
                                      <option>São Tomé and Príncipe</option>
                                      <option>Saudi Arabia</option>
                                      <option>Scotland</option>
                                      <option>Sealand</option>
                                      <option>Semaphore Signal</option>
                                      <option>Senegal</option>
                                      <option>Serbia</option>
                                      <option>Seychelles</option>
                                      <option>Sierra Leone</option>
                                      <option>Singapore</option>
                                      <option>Sint Eustatius</option>
                                      <option>Sint Maarten</option>
                                      <option>Slovakia</option>
                                      <option>Slovenia</option>
                                      <option>Solomon Islands</option>
                                      <option>Somalia</option>
                                      <option>Somaliland</option>
                                      <option>South Africa</option>
                                      <option>South American Union</option>
                                      <option>South Georgia and the South Sandwich Islands</option>
                                      <option>South Korea</option>
                                      <option>South Ossetia</option>
                                      <option>South Sudan</option>
                                      <option>Spain</option>
                                      <option>Sri Lanka</option>
                                      <option>State of Palestine</option>
                                      <option>Sudan</option>
                                      <option>Suriname</option>
                                      <option>Svalbard and Jan Mayen</option>
                                      <option>Sweden</option>
                                      <option>Switzerland</option>
                                      <option>Syria</option>
                                      <option>Taiwan</option>
                                      <option>Tajikistan</option>
                                      <option>Tanzania</option>
                                      <option>Tatarstan</option>
                                      <option>Thailand</option>
                                      <option>Tibet</option>
                                      <option>Togo</option>
                                      <option>Tokelau</option>
                                      <option>Tonga</option>
                                      <option>Transnistria</option>
                                      <option>Trinidad and Tobago</option>
                                      <option>Tristan da Cunha</option>
                                      <option>Tunisia</option>
                                      <option>Turkey</option>
                                      <option>Turkic States</option>
                                      <option>Turkmenistan</option>
                                      <option>Turks and Caicos Islands</option>
                                      <option>Tuvalu</option>
                                      <option>Uganda</option>
                                      <option>Ukraine</option>
                                      <option>United Arab Emirates</option>
                                      <option>United Kingdom</option>
                                      <option>United Nations</option>
                                      <option>United States</option>
                                      <option>United States Minor Outlying Islands</option>
                                      <option>Unknown</option>
                                      <option>Uruguay</option>
                                      <option>Uzbekistan</option>
                                      <option>Vanuatu</option>
                                      <option>Vatican</option>
                                      <option>Venezuela</option>
                                      <option>Vietnam</option>
                                      <option>Virgin Islands</option>
                                      <option>Wales</option>
                                      <option>Wallis and Futuna</option>
                                      <option>Western Sahara</option>
                                      <option>Yemen</option>
                                      <option>Zambia</option>
                                      <option>Zimbabwe</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div>
                                  <div class="form-label">Membership</div>

                                  <div class="d-flex flex-row gap-4">
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="membership" checked />
                                      <span class="form-check-label">Free</span>
                                    </label>
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="membership" />
                                      <span class="form-check-label">Paid</span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="btn-list justify-content-end">
                                <button type="button" class="btn">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <form class="card">
                    <div class="card-body">
                      <h2 class="card-title">Payment Method</h2>
                      <p class="card-subtitle mb-4">All transactions are secure and encrypted</p>

                      <div class="mb-3">
                        <label class="form-label" for="payment-form-name"> Name on Card </label>

                        <input type="text" id="payment-form-name" class="form-control" placeholder="John Doe" autocomplete="cc-name" />
                      </div>

                      <div class="row">
                        <div class="col-8">
                          <div class="mb-3">
                            <label class="form-label" for="payment-form-number"> Card Number </label>

                            <input type="text" id="payment-form-number" class="form-control" placeholder="1234 5678 9012 3456" autocomplete="cc-number" aria-describedby="payment-form-number-hint" />
                            <div id="payment-form-number-hint" class="form-text">Enter your 16-digit number.</div>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="payment-form-cvv"> CVV </label>

                            <input type="text" id="payment-form-cvv" class="form-control" placeholder="123" autocomplete="cc-csc" />
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-6">
                          <div class="mb-3">
                            <label class="form-label" for="payment-form-exp-month"> Month </label>

                            <select id="payment-form-exp-month" class="form-select" autocomplete="cc-exp-month">
                              <option value="">MM</option>
                              <option value="1">January</option>
                              <option value="2">February</option>
                              <option value="3">March</option>
                              <option value="4">April</option>
                              <option value="5">May</option>
                              <option value="6">June</option>
                              <option value="7">July</option>
                              <option value="8">August</option>
                              <option value="9">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12">December</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="mb-3">
                            <label class="form-label" for="payment-form-exp-year"> Year </label>

                            <select id="payment-form-exp-year" class="form-select" autocomplete="cc-exp-year">
                              <option value="">YYYY</option>
                              <option value="2025">2025</option>
                              <option value="2026">2026</option>
                              <option value="2027">2027</option>
                              <option value="2028">2028</option>
                              <option value="2029">2029</option>
                              <option value="2030">2030</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <hr class="my-4" />

                      <h2 class="card-title">Billing Address</h2>
                      <p class="card-subtitle mb-4">The billing address associated with your payment method</p>

                      <div class="mb-3">
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" checked />
                          <span class="form-check-label">Same as shipping address</span>
                        </label>
                      </div>

                      <hr class="my-4" />

                      <div class="mb-3">
                        <label class="form-label" for="payment-form-comments"> Comments </label>

                        <textarea id="payment-form-comments" class="form-control" rows="3" placeholder="Add any additional comments"></textarea>
                      </div>

                      <div class="mt-4">
                        <div class="btn-list">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="button" class="btn">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
<x-slot:scripts>
@verbatim
<script src="/tabler/libs/vanilla-calendar-pro/index.js" defer></script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
