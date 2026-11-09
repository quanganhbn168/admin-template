<x-preview.bare :title='"Testimonials"' :html-attrs='"lang=\"en\""' :body-attrs='"class=\"body-marketing body-gradient\""'>
@verbatim
<!-- BEGIN MARKETING NAVBAR -->
    <header class="navbar navbar-expand-lg navbar-transparent py-3">
      <div class="container">
        <!-- BEGIN NAVBAR LOGO -->
        <a href=".." aria-label="Tabler" class="navbar-brand navbar-brand-autodark">
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

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle primary navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <nav aria-label="Primary">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="/preview/marketing"><span class="nav-link-title">Home</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/preview/marketing/testimonials"><span class="nav-link-title">Testimonials</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/preview/marketing/pricing"><span class="nav-link-title">Pricing</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/preview/marketing/about"><span class="nav-link-title">About</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/preview/marketing/text"><span class="nav-link-title">Text</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/preview/marketing/hero"><span class="nav-link-title">App</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/preview/marketing/real-estate"><span class="nav-link-title">Real estate</span></a>
              </li>
              <li class="nav-item ms-4">
                <a href="#" class="btn btn-primary">Buy now</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!-- END MARKETING NAVBAR -->

    <main id="content">
      <header class="hero">
        <div class="container">
          <h1 class="hero-title">Trusted by hundreds</h1>
          <p class="hero-description">Our Users send us bunch of smilies with our services, and we love them 😍</p>
        </div>
      </header>

      <section class="section pt-0">
        <div class="container">
          <div class="row g-lg-6">
            <div class="col-md-6 col-lg-4">
              <div class="row g-lg-6">
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Jeffie Lewzey</h2>
                          <div class="text-secondary">Chemical Engineer</div>
                        </div>
                      </div>

                      <p>Ever since I started using Tabler, my HTML designing process has been significantly smoother. Its intuitive interface is a breath of fresh air!</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Mallory Hulme</h2>
                          <div class="text-secondary">Geologist IV</div>
                        </div>
                      </div>

                      <p>I&#39;m beyond impressed with Tabler. This UI kit has transformed my workflow for the better. It&#39;s easy to use, streamlined, and remarkably efficient.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Dunn Slane</h2>
                          <div class="text-secondary">Research Nurse</div>
                        </div>
                      </div>

                      <p>Tabler&#39;s feature-rich package has drastically improved my website design process. It&#39;s an absolute game-changer in the UI kit landscape.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Emmy Levet</h2>
                          <div class="text-secondary">VP Product Management</div>
                        </div>
                      </div>

                      <p>Having used many UI kits in the past, I can confidently say that Tabler stands out. The level of customization it offers is unparalleled.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/001f.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Maryjo Lebarree</h2>
                          <div class="text-secondary">Civil Engineer</div>
                        </div>
                      </div>

                      <p>What I love about Tabler is its sleek design and ease of use. It&#39;s really simplified my HTML designing work. Five stars from me!</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/004m.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Egan Poetz</h2>
                          <div class="text-secondary">Research Nurse</div>
                        </div>
                      </div>

                      <p>I&#39;d recommend Tabler to anyone, whether they&#39;re a seasoned pro or a beginner in HTML design. Its versatility and user-friendly nature make it a cut above the rest.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/002f.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Kellie Skingley</h2>
                          <div class="text-secondary">Teacher</div>
                        </div>
                      </div>

                      <p>Navigating through Tabler has been a breeze! Its intuitive layout helps me save time and focus more on the creative aspect of my work.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="row g-lg-6">
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/003f.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Christabel Charlwood</h2>
                          <div class="text-secondary">Tax Accountant</div>
                        </div>
                      </div>

                      <p>With Tabler, designing HTML has never been more straightforward. The kit&#39;s sleek features and functionalities have taken my design work to new heights.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/063m.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Haskel Shelper</h2>
                          <div class="text-secondary">Staff Scientist</div>
                        </div>
                      </div>

                      <p>Tabler has revolutionized the way I approach HTML design. Its array of tools and efficient interface make it a must-have for any designer.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/006m.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Lorry Mion</h2>
                          <div class="text-secondary">Automation Specialist IV</div>
                        </div>
                      </div>

                      <p>I&#39;m truly amazed by Tabler&#39;s capabilities. It&#39;s not just an HTML UI kit, it&#39;s a design powerhouse that has made my work a lot more efficient and enjoyable.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/004f.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Leesa Beaty</h2>
                          <div class="text-secondary">Editor</div>
                        </div>
                      </div>

                      <p>As a web developer, Tabler has revolutionized my workflow. The HTML UI kit is exceptionally well-structured, making my projects much more efficient and visually appealing.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/007m.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Perren Keemar</h2>
                          <div class="text-secondary">Analog Circuit Design manager</div>
                        </div>
                      </div>

                      <p>Tabler has transformed the way I approach web design. It&#39;s intuitive, easy to use, and has saved me countless hours of coding from scratch. A real game-changer!</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span class="avatar avatar-md">SA</span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Sunny Airey</h2>
                          <div class="text-secondary">Nuclear Power Engineer</div>
                        </div>
                      </div>

                      <p>The breadth of design options that Tabler provides is astounding. It has added a whole new level of professionalism to my websites and made my job a lot easier.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/009m.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Geoffry Flaunders</h2>
                          <div class="text-secondary">Software Test Engineer II</div>
                        </div>
                      </div>

                      <p>I&#39;ve been in the web development industry for years and I must say, Tabler is one of the best HTML UI kits I&#39;ve come across. It&#39;s user-friendly and allows for a high degree of customization.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="row g-lg-6">
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/010m.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Thatcher Keel</h2>
                          <div class="text-secondary">VP Sales</div>
                        </div>
                      </div>

                      <p>Since I&#39;ve started using Tabler, I&#39;ve noticed a significant improvement in my work. It&#39;s streamlined, efficient, and helps me produce better results for my clients.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/005f.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Dyann Escala</h2>
                          <div class="text-secondary">Mechanical Systems Engineer</div>
                        </div>
                      </div>

                      <p>Using Tabler has been a fantastic experience. The number of components it offers has allowed me to design more efficiently, and its consistent updates ensure that it always stays ahead of the curve.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/006f.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Avivah Mugleston</h2>
                          <div class="text-secondary">Actuary</div>
                        </div>
                      </div>

                      <p>Tabler is a web designer&#39;s dream come true. The HTML UI kit offers so many features and functionalities that make my design process more streamlined and efficient.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span class="avatar avatar-md">AA</span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Arlie Armstead</h2>
                          <div class="text-secondary">VP Quality Control</div>
                        </div>
                      </div>

                      <p>I cannot recommend Tabler enough! This HTML UI kit is a must-have for any web developer looking to level up their design game.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/008f.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Tessie Curzon</h2>
                          <div class="text-secondary">Research Nurse</div>
                        </div>
                      </div>

                      <p>From a beginner&#39;s perspective, Tabler has been a lifesaver. It has enabled me to create professional-quality websites without needing advanced coding skills.</p>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a href="#" class="card bg-surface-secondary">
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-auto">
                          <span style="background-image: url(/tabler/static/avatars/009f.jpg)" class="avatar avatar-md"></span>
                        </div>
                        <div class="col">
                          <h2 class="h3 m-0">Flossi Uttley</h2>
                          <div class="text-secondary">Engineer I</div>
                        </div>
                      </div>

                      <p>Tabler offers the perfect balance of simplicity and sophistication. It has greatly improved my workflow and I can&#39;t imagine working on web development projects without it.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer" aria-label="Links">
      <div class="container">
        <div class="py-3">
          <div class="row g-lg-4">
            <div class="col-lg-7">
              <div class="row g-lg-4">
                <div class="col-md">
                  <div class="subheader mb-3">Our products</div>
                  <ul class="list-unstyled list-separated gap-2">
                    <li><a class="link-secondary" href="..">UI Kit</a></li>
                    <li>
                      <a class="link-secondary" href="..">Open source icons</a>
                    </li>
                    <li>
                      <a class="link-secondary" href="..">Email templates</a>
                    </li>
                    <li><a class="link-secondary" href="..">Pricing</a></li>
                  </ul>
                </div>
                <div class="col-md">
                  <div class="subheader mb-3">Support</div>
                  <ul class="list-unstyled list-separated gap-2">
                    <li><a class="link-secondary" href="..">Blog</a></li>
                    <li><a class="link-secondary" href="..">Documentation</a></li>
                    <li><a class="link-secondary" href="..">Support</a></li>
                    <li>
                      <a href="https://status.tabler.io" class="link-secondary" target="_blank" rel="noreferrer">Status</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md">
                  <div class="subheader mb-3">Tabler</div>
                  <ul class="list-unstyled list-separated gap-2">
                    <li><a class="link-secondary" href="..">About</a></li>
                    <li><a class="link-secondary" href="..">Blog</a></li>
                    <li><a class="link-secondary" href="..">Changelog</a></li>
                    <li>
                      <a href="https://github.com/tabler/tabler" class="link-secondary" target="_blank" rel="noreferrer">Github</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 ms-auto">
              <div class="text-secondary">Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!</div>
            </div>
          </div>

          <div class="row g-lg-4 justify-content-between mt-0 mt-md-2">
            <div class="col-sm-7 col-md-6 col-lg-4">
              <h2 class="subheader">Payment &amp; Security</h2>
              <ul class="list-inline mb-0 mt-3">
                <li class="list-inline-item">
                  <a href="#"><span class="payment payment-provider-paypal" role="img" aria-label="PayPal"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="payment payment-provider-visa" role="img" aria-label="Visa"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="payment payment-provider-mastercard" role="img" aria-label="Mastercard"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="payment payment-provider-americanexpress" role="img" aria-label="American Express"></span></a>
                </li>
              </ul>
            </div>

            <div class="col-sm-5 col-md-6 col-lg-3 text-sm-end">
              <h2 class="subheader">Follow us on</h2>
              <ul class="list-inline mb-0 mt-3">
                <li class="list-inline-item">
                  <a class="btn btn-icon btn-facebook" href="#" aria-label="Facebook"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/brand-facebook -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-icon btn-instagram" href="#" aria-label="Instagram"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/brand-instagram -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4l0 -10" />
                      <path d="M8.5 12a3.5 3.5 0 1 0 7 0a3.5 3.5 0 0 0 -7 0" />
                      <path d="M17 7v.01" /></svg
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-icon btn-twitter" href="#" aria-label="Twitter"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/brand-twitter -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path
                        d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013l0 .001"
                      /></svg
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-icon btn-linkedin" href="#" aria-label="LinkedIn"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/brand-linkedin -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M8 11v5" />
                      <path d="M8 8v.01" />
                      <path d="M12 16v-5" />
                      <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                      <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4l0 -10" /></svg
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <footer class="footer" aria-label="Legal">
      <div class="container">
        <div class="py-3 border-top text-center text-lg-start">
          <div class="row g-lg-4">
            <div class="col-lg-auto text-lg-end order-lg-last">
              <div class="row justify-content-center">
                <div class="col-auto">©<a href="https://codecalm.net" class="link-secondary" target="_blank" rel="noopener noreferrer">codecalm.net</a></div>
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots">
                    <li class="list-inline-item">
                      <a class="link-secondary" href="/terms-of-service.html">Terms of service</a>
                    </li>
                    <li class="list-inline-item">
                      <a class="link-secondary" href="#">Privacy policy</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg">
              Made with
              <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-red icon-inline">
                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
              </svg>
              in Poland.
            </div>
          </div>
        </div>
      </div>
    </footer>
@endverbatim
</x-preview.bare>
