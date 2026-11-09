<x-preview.page :title='"Typography"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Typography</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/base/typography" target="_blank" rel="noopener" class="link-secondary">
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
              <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-8">
                  <div class="card card-lg">
                    <div class="card-body">
                      <div class="prose">
                        <div class="h1">Brewing better coffee at home</div>
                        <p class="lead">Good coffee isn't about expensive gear — it's about <mark>consistency</mark>. Get the ratio, the grind, and the water temperature right, and almost any method will taste better.</p>

                        <figure>
                          <img src="/tabler/static/photos/cup-of-coffee-and-an-open-book.jpg" alt="A cup of coffee next to an open book" />
                          <figcaption class="text-secondary small mt-2">Ten minutes of prep, and the rest of the morning is yours.</figcaption>
                        </figure>

                        <p>As <cite>The Professional Barista's Handbook</cite> puts it, most bad coffee isn't a bad bean — it's an inconsistent process.</p>

                        <blockquote class="blockquote">
                          <p>Coffee is a language in itself.</p>
                          <footer class="blockquote-footer">Jackie Chan</footer>
                        </blockquote>

                        <h2>What you'll need</h2>
                        <ul>
                          <li>Freshly roasted beans, ground just before brewing</li>
                          <li>
                            A scale accurate to <sup>1</sup>&frasl;<sub>10</sub> of a gram
                            <ul>
                              <li>Kitchen scales work, but a coffee scale is easier to read</li>
                              <li>Weigh both the coffee and the water</li>
                            </ul>
                          </li>
                          <li>Water just off the boil, around 96&deg;C</li>
                        </ul>

                        <h2>Steps</h2>
                        <ol>
                          <li>Heat the water and warm your brewing vessel.</li>
                          <li>Weigh <strong>18g of coffee</strong> for every 300g of water — a 1:16 ratio.</li>
                          <li>Grind just before brewing; <del>pre-ground coffee</del> <ins>fresh-ground coffee</ins> makes the biggest difference of all.</li>
                          <li>Pour in stages, stirring <em>gently</em> after the first pour so every ground gets wet.</li>
                          <li>Set a timer — <kbd>⌘</kbd> + <kbd>T</kbd> in most timer apps — and aim for a total brew time of 3&ndash;4 minutes.</li>
                        </ol>

                        <h3>Why the ratio matters</h3>
                        <p>
                          A cup that's too weak usually means too little coffee, not too little time. Coffee contains caffeine (<abbr title="Chemical formula">C<sub>8</sub>H<sub>10</sub>N<sub>4</sub>O<sub>2</sub></abbr
                          >), and how much of it — and everything else — ends up in your cup comes down to the <code>coffee:water</code> ratio above almost anything else.
                        </p>

                        <hr />

                        <h3>A few terms worth knowing</h3>
                        <dl>
                          <dt>Bloom</dt>
                          <dd>The first splash of water, which releases trapped CO&#8322; and lets the rest of the pour extract evenly.</dd>
                          <dt>Extraction</dt>
                          <dd>How much flavor the water pulls from the grounds — too little tastes sour, too much tastes bitter.</dd>
                          <dt>TDS</dt>
                          <dd>Total dissolved solids: a measure of strength, independent of how much water you used.</dd>
                        </dl>

                        <h4>A quick note on freshness</h4>
                        <p>Beans are at their best one to four weeks after roasting. <u>Buy smaller bags more often</u> rather than stockpiling — coffee doesn't go bad, it just goes flat.</p>

                        <h5>Grind size by method</h5>
                        <table>
                          <thead>
                            <tr>
                              <th>Method</th>
                              <th>Grind</th>
                              <th>Brew time</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>French press</td>
                              <td>Coarse</td>
                              <td>4 min</td>
                            </tr>
                            <tr>
                              <td>Pour over</td>
                              <td>Medium</td>
                              <td>3 min</td>
                            </tr>
                            <tr>
                              <td>Espresso</td>
                              <td>Fine</td>
                              <td>25&ndash;30 sec</td>
                            </tr>
                          </tbody>
                        </table>

                        <h5>Roast levels at a glance</h5>
                        <ul class="list-unstyled">
                          <li class="text-warning">Light — bright, acidic, tastes like the origin</li>
                          <li class="text-primary">Medium — balanced, the everyday default</li>
                          <li class="text-secondary">Medium-dark — fuller body, less acidity</li>
                          <li class="text-danger">Dark — bold and smoky, roast flavor dominates</li>
                        </ul>

                        <h5>Reading your cup</h5>
                        <p>Taste it before you change anything else — the cup itself tells you what to adjust:</p>
                        <ul class="list-unstyled">
                          <li class="text-success">Balanced — this is the one to repeat next time.</li>
                          <li class="text-info">Thin or sour — grind a little finer, or pour more slowly.</li>
                          <li class="text-pink">A standout — jot down the bag and roast date while you remember.</li>
                          <li class="text-body">Still figuring out your taste — that's normal, brew a few more before settling on a ratio.</li>
                        </ul>

                        <h5>A minimal brew config</h5>
                        <p>If you're automating a scale or a smart kettle, the whole recipe above reduces to a few numbers:</p>
                        <pre><code>coffee: 18g
water: 300g
temperature: 96C
bloom: 30s
total_time: 3m30s</code></pre>

                        <h6>Fine print</h6>
                        <p><small class="text-secondary">Ratios are a starting point, not a rule — adjust to taste once you've got the basics down.</small></p>

                        <address>
                          <strong>Written by the Tabler team <br /></strong>
                          <a href="/cdn-cgi/l/email-protection#e3c0"><span class="__cf_email__" data-cfemail="e78f828b8b88a7829f868a978b82c984888a">[email&#160;protected]</span></a>
                        </address>
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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
