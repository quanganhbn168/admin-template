<x-preview.bare :title='"Onboarding"' :html-attrs='"lang=\"en\""'>
@verbatim
<nav class="navbar">
      <div class="container">
        <div class="row w-100 align-items-center">
          <div class="col me-auto">
            <!-- BEGIN NAVBAR LOGO -->
            <a href="." aria-label="Tabler" class="navbar-brand navbar-brand-autodark navbar-brand-gray">
              <svg xmlns="http://www.w3.org/2000/svg" width="110" height="32" viewBox="0 0 232 68" class="navbar-brand-image">
                <path
                  d="M64.6 16.2C63 9.9 58.1 5 51.8 3.4 40 1.5 28 1.5 16.2 3.4 9.9 5 5 9.9 3.4 16.2 1.5 28 1.5 40 3.4 51.8 5 58.1 9.9 63 16.2 64.6c11.8 1.9 23.8 1.9 35.6 0C58.1 63 63 58.1 64.6 51.8c1.9-11.8 1.9-23.8 0-35.6zM33.3 36.3c-2.8 4.4-6.6 8.2-11.1 11-1.5.9-3.3.9-4.8.1s-2.4-2.3-2.5-4c0-1.7.9-3.3 2.4-4.1 2.3-1.4 4.4-3.2 6.1-5.3-1.8-2.1-3.8-3.8-6.1-5.3-2.3-1.3-3-4.2-1.7-6.4s4.3-2.9 6.5-1.6c4.5 2.8 8.2 6.5 11.1 10.9 1 1.4 1 3.3.1 4.7zM49.2 46H37.8c-2.1 0-3.8-1-3.8-3s1.7-3 3.8-3h11.4c2.1 0 3.8 1 3.8 3s-1.7 3-3.8 3z"
                  fill="#066fd1"
                  style="fill: var(--tblr-navbar-logo-color, var(--tblr-primary, #066fd1))"
                />
                <path
                  d="M105.8 46.1c.4 0 .9.2 1.2.6s.6 1 .6 1.7c0 .9-.5 1.6-1.4 2.2s-2 .9-3.2.9c-2 0-3.7-.4-5-1.3s-2-2.6-2-5.4V31.6h-2.2c-.8 0-1.4-.3-1.9-.8s-.9-1.1-.9-1.9c0-.7.3-1.4.8-1.8s1.2-.7 1.9-.7h2.2v-3.1c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v3.1h3.4c.8 0 1.4.3 1.9.8s.8 1.2.8 1.9-.3 1.4-.8 1.8-1.2.7-1.9.7h-3.4v13c0 .7.2 1.2.5 1.5s.8.5 1.4.5c.3 0 .6-.1 1.1-.2.5-.2.8-.3 1.2-.3zm28-20.7c.8 0 1.5.3 2.1.8.5.5.8 1.2.8 2.1v20.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2-.8-.8-1.2-.8-2.1c-.8.9-1.9 1.7-3.2 2.4-1.3.7-2.8 1-4.3 1-2.2 0-4.2-.6-6-1.7-1.8-1.1-3.2-2.7-4.2-4.7s-1.6-4.3-1.6-6.9c0-2.6.5-4.9 1.5-6.9s2.4-3.6 4.2-4.8c1.8-1.1 3.7-1.7 5.9-1.7 1.5 0 3 .3 4.3.8 1.3.6 2.5 1.3 3.4 2.1 0-.8.3-1.5.8-2.1.5-.5 1.2-.7 2-.7zm-9.7 21.3c2.1 0 3.8-.8 5.1-2.3s2-3.4 2-5.7-.7-4.2-2-5.8c-1.3-1.5-3-2.3-5.1-2.3-2 0-3.7.8-5 2.3-1.3 1.5-2 3.5-2 5.8s.6 4.2 1.9 5.7 3 2.3 5.1 2.3zm32.1-21.3c2.2 0 4.2.6 6 1.7 1.8 1.1 3.2 2.7 4.2 4.7s1.6 4.3 1.6 6.9-.5 4.9-1.5 6.9-2.4 3.6-4.2 4.8c-1.8 1.1-3.7 1.7-5.9 1.7-1.5 0-3-.3-4.3-.9s-2.5-1.4-3.4-2.3v.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.5-.8-1.2-.8-2.1V18.9c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v10c.8-1 1.8-1.8 3.2-2.5 1.3-.7 2.8-1 4.3-1zm-.7 21.3c2 0 3.7-.8 5-2.3s2-3.5 2-5.8-.6-4.2-1.9-5.7-3-2.3-5.1-2.3-3.8.8-5.1 2.3-2 3.4-2 5.7.7 4.2 2 5.8c1.3 1.6 3 2.3 5.1 2.3zm23.6 1.9c0 .8-.3 1.5-.8 2.1s-1.3.8-2.1.8-1.5-.3-2-.8-.8-1.3-.8-2.1V18.9c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v29.7zm29.3-10.5c0 .8-.3 1.4-.9 1.9-.6.5-1.2.7-2 .7h-15.8c.4 1.9 1.3 3.4 2.6 4.4 1.4 1.1 2.9 1.6 4.7 1.6 1.3 0 2.3-.1 3.1-.4.7-.2 1.3-.5 1.8-.8.4-.3.7-.5.9-.6.6-.3 1.1-.4 1.6-.4.7 0 1.2.2 1.7.7s.7 1 .7 1.7c0 .9-.4 1.6-1.3 2.4-.9.7-2.1 1.4-3.6 1.9s-3 .8-4.6.8c-2.7 0-5-.6-7-1.7s-3.5-2.7-4.6-4.6-1.6-4.2-1.6-6.6c0-2.8.6-5.2 1.7-7.2s2.7-3.7 4.6-4.8 3.9-1.7 6-1.7 4.1.6 6 1.7 3.4 2.7 4.5 4.7c.9 1.9 1.5 4.1 1.5 6.3zm-12.2-7.5c-3.7 0-5.9 1.7-6.6 5.2h12.6v-.3c-.1-1.3-.8-2.5-2-3.5s-2.5-1.4-4-1.4zm30.3-5.2c1 0 1.8.3 2.4.8.7.5 1 1.2 1 1.9 0 1-.3 1.7-.8 2.2-.5.5-1.1.8-1.8.7-.5 0-1-.1-1.6-.3-.2-.1-.4-.1-.6-.2-.4-.1-.7-.1-1.1-.1-.8 0-1.6.3-2.4.8s-1.4 1.3-1.9 2.3-.7 2.3-.7 3.7v11.4c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.6-.8-1.3-.8-2.1V28.8c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v.6c.7-1.3 1.8-2.3 3.2-3 1.3-.7 2.8-1 4.3-1z"
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  fill="#4a4a4a"
                  style="fill: var(--tblr-navbar-logo-color, #4a4a4a)"
                />
              </svg>
            </a>
            <!-- END NAVBAR LOGO -->
          </div>
          <div class="col-2">
            <ol class="progress-steps">
              <li class="progress-steps-item bg-primary" aria-current="step">
                <span class="visually-hidden">Step 1</span>
              </li>
              <li class="progress-steps-item">
                <span class="visually-hidden">Step 2</span>
              </li>
              <li class="progress-steps-item">
                <span class="visually-hidden">Step 3</span>
              </li>
              <li class="progress-steps-item">
                <span class="visually-hidden">Step 4</span>
              </li>
              <li class="progress-steps-item">
                <span class="visually-hidden">Step 5</span>
              </li>
            </ol>
          </div>
          <div class="col text-end">
            <a href="." class="btn btn-ghost">Skip<span class="d-none d-md-inline">&nbsp;to dashboard</span></a>
          </div>
        </div>
      </div>
    </nav>

    <main class="py-5" id="content">
      <div class="container container-tight">
        <div class="page-header">
          <h1 class="page-title">Let's set up your account</h1>
        </div>
        <div class="card mt-5">
          <div class="card-body space-y-4">
            <div>
              <label class="form-label" for="onboarding-full-name"> Full name </label>

              <input type="text" class="form-control" id="onboarding-full-name" placeholder="Enter your full name" />
            </div>
            <div>
              <label class="form-label" for="onboarding-company-name"> Company name </label>

              <input type="text" class="form-control" id="onboarding-company-name" placeholder="Enter your company name" />
            </div>
            <div>
              <label class="form-label" for="onboarding-role"> Role </label>

              <select class="form-select" id="onboarding-role">
                <option value="">Select your role</option>
                <option value="developer">Developer</option>
                <option value="designer">Designer</option>
                <option value="manager">Manager</option>
                <option value="founder">Founder</option>
                <option value="other">Other</option>
              </select>
            </div>
            <fieldset class="border-0 p-0 m-0">
              <legend class="form-label float-none mb-0" style="font-size: inherit">Team size</legend>
              <div class="form-selectgroup">
                <label class="form-selectgroup-item">
                  <input type="radio" name="team-size" value="1" class="form-selectgroup-input" checked />
                  <span class="form-selectgroup-label">Just me</span>
                </label>
                <label class="form-selectgroup-item">
                  <input type="radio" name="team-size" value="2-10" class="form-selectgroup-input" />
                  <span class="form-selectgroup-label">2-10 people</span>
                </label>
                <label class="form-selectgroup-item">
                  <input type="radio" name="team-size" value="11-50" class="form-selectgroup-input" />
                  <span class="form-selectgroup-label">11-50 people</span>
                </label>
                <label class="form-selectgroup-item">
                  <input type="radio" name="team-size" value="50+" class="form-selectgroup-input" />
                  <span class="form-selectgroup-label">50+ people</span>
                </label>
              </div>
            </fieldset>
            <fieldset class="border-0 p-0 m-0">
              <legend class="form-label float-none mb-0" style="font-size: inherit">What are you planning to use this for?</legend>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="use-for" value="personal" id="use-personal" checked />
                <label class="form-check-label" for="use-personal"> Personal projects </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="use-for" value="business" id="use-business" />
                <label class="form-check-label" for="use-business"> Business applications </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="use-for" value="client" id="use-client" />
                <label class="form-check-label" for="use-client"> Client work </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="use-for" value="learning" id="use-learning" />
                <label class="form-check-label" for="use-learning"> Learning and experimentation </label>
              </div>
            </fieldset>
            <fieldset class="border-0 p-0 m-0">
              <legend class="form-label float-none mb-0" style="font-size: inherit">How did you hear about us?</legend>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="referral" value="search" id="ref-search" />
                <label class="form-check-label" for="ref-search"> Search engine </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="referral" value="social" id="ref-social" />
                <label class="form-check-label" for="ref-social"> Social media </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="referral" value="friend" id="ref-friend" />
                <label class="form-check-label" for="ref-friend"> Friend or colleague </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="referral" value="blog" id="ref-blog" />
                <label class="form-check-label" for="ref-blog"> Blog or article </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="referral" value="other" id="ref-other" />
                <label class="form-check-label" for="ref-other"> Other </label>
              </div>
            </fieldset>
            <div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="notifications" checked />
                <label class="form-check-label" for="notifications"> Send me product updates and tips via email </label>
              </div>
            </div>
          </div>
        </div>

        <div class="btn-list justify-content-between mt-4">
          <button type="button" class="btn btn-link link-secondary">Back</button>
          <button type="button" class="btn btn-primary">Continue</button>
        </div>
      </div>
    </main>
@endverbatim
</x-preview.bare>
