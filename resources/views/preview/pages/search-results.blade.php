<x-preview.page :title='"Search results"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Search results</h1>

                  <div class="text-secondary mt-1">About 2,410 result (0.19 seconds)</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="row g-4">
                <div class="col-md-3">
                  <form action="/preview" method="get" autocomplete="off" novalidate>
                    <div class="subheader mb-2">Category</div>
                    <nav class="list-group list-group-transparent mb-3">
                      <a href="#" class="list-group-item list-group-item-action active d-flex align-items-center">Games<small class="text-secondary ms-auto">24</small> </a><a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Clothing<small class="text-secondary ms-auto">11</small> </a
                      ><a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Jewelery<small class="text-secondary ms-auto">11</small> </a><a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Toys<small class="text-secondary ms-auto">54</small> </a>
                    </nav>

                    <fieldset class="border-0 p-0 mb-3">
                      <legend class="subheader mb-2 float-none">Rating</legend>
                      <label class="form-check">
                        <input type="radio" class="form-check-input" name="form-stars" value="5 stars" checked />
                        <span class="form-check-label">5 stars</span> </label
                      ><label class="form-check">
                        <input type="radio" class="form-check-input" name="form-stars" value="4 stars" />
                        <span class="form-check-label">4 stars</span> </label
                      ><label class="form-check">
                        <input type="radio" class="form-check-input" name="form-stars" value="3 stars" />
                        <span class="form-check-label">3 stars</span> </label
                      ><label class="form-check">
                        <input type="radio" class="form-check-input" name="form-stars" value="2 and less stars" />
                        <span class="form-check-label">2 and less stars</span>
                      </label>
                    </fieldset>

                    <fieldset class="border-0 p-0 mb-3">
                      <legend class="subheader mb-2 float-none">Tags</legend>
                      <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="business" checked />
                        <span class="form-check-label">business</span> </label
                      ><label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="evening" />
                        <span class="form-check-label">evening</span> </label
                      ><label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="leisure" />
                        <span class="form-check-label">leisure</span> </label
                      ><label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="party" />
                        <span class="form-check-label">party</span>
                      </label>
                    </fieldset>

                    <div class="subheader mb-2">Price</div>
                    <div class="row g-2 align-items-center mb-3">
                      <div class="col">
                        <div class="input-group">
                          <span class="input-group-text">$</span>
                          <input type="text" class="form-control" placeholder="from" value="3" />
                        </div>
                      </div>
                      <div class="col-auto">—</div>
                      <div class="col">
                        <div class="input-group">
                          <span class="input-group-text">$</span>
                          <input type="text" class="form-control" placeholder="to" />
                        </div>
                      </div>
                    </div>

                    <div class="subheader mb-2">Shipping</div>
                    <div>
                      <select name="shipping-country" class="form-select">
                        <option>United Kingdom</option>
                        <option>USA</option>
                        <option>Germany</option>
                        <option>Poland</option>
                        <option>Other…</option>
                      </select>
                    </div>

                    <div class="mt-5">
                      <button type="submit" class="btn btn-primary w-100">Confirm changes</button>
                      <button type="button" class="btn btn-link w-100">Reset to defaults</button>
                    </div>
                  </form>
                </div>
                <div class="col-md-9">
                  <div class="row row-cards">
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg" class="card-img-top" alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/000m.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Paweł Kuna</div>
                              <div class="text-secondary">3 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/brainstorming-session-with-creative-designers.jpg" class="card-img-top" alt="Brainstorming session with creative designers" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Jeffie Lewzey</div>
                              <div class="text-secondary">now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg" class="card-img-top" alt="Finances - US Dollars and Bitcoins - Currency - Money" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Mallory Hulme</div>
                              <div class="text-secondary">now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg" class="card-img-top" alt="Group of people brainstorming and taking notes" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Dunn Slane</div>
                              <div class="text-secondary">10 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg" class="card-img-top" alt="Blue sofa with pillows in a designer living room interior" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Emmy Levet</div>
                              <div class="text-secondary">now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg" class="card-img-top" alt="Home office desk with Macbook, iPhone, calendar, watch &amp; organizer" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/001f.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Maryjo Lebarree</div>
                              <div class="text-secondary">3 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/young-woman-working-in-a-cafe.jpg" class="card-img-top" alt="Young woman working in a cafe" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/004m.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Egan Poetz</div>
                              <div class="text-secondary">6 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/everything-you-need-to-work-from-your-bed.jpg" class="card-img-top" alt="Everything you need to work from your bed" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/002f.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Kellie Skingley</div>
                              <div class="text-secondary">9 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/young-entrepreneur-working-from-a-modern-cafe.jpg" class="card-img-top" alt="Young Entrepreneur Working from a Modern Cafe" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/003f.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Christabel Charlwood</div>
                              <div class="text-secondary">now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg" class="card-img-top" alt="Finances - US Dollars and Bitcoins - Currency - Money" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/063m.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Haskel Shelper</div>
                              <div class="text-secondary">now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/group-of-people-sightseeing-in-the-city.jpg" class="card-img-top" alt="Group of people sightseeing in the city" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/006m.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Lorry Mion</div>
                              <div class="text-secondary">5 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/color-palette-guide-sample-colors-catalog-.jpg" class="card-img-top" alt="Color Palette Guide. Sample Colors Catalog." /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/004f.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Leesa Beaty</div>
                              <div class="text-secondary">now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/stylish-workplace-with-computer-at-home.jpg" class="card-img-top" alt="Stylish workplace with computer at home" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/007m.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Perren Keemar</div>
                              <div class="text-secondary">4 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/pink-desk-in-the-home-office.jpg" class="card-img-top" alt="Pink desk in the home office" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span class="avatar me-3 rounded">SA</span>
                            <div>
                              <div>Sunny Airey</div>
                              <div class="text-secondary">5 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg" class="card-img-top" alt="Young woman sitting on the sofa and working on her laptop" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/009m.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Geoffry Flaunders</div>
                              <div class="text-secondary">7 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/coffee-on-a-table-with-other-items.jpg" class="card-img-top" alt="Coffee on a table with other items" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/010m.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Thatcher Keel</div>
                              <div class="text-secondary">9 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/young-entrepreneur-working-from-a-modern-cafe-2.jpg" class="card-img-top" alt="Young Entrepreneur Working from a Modern Cafe" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/005f.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Dyann Escala</div>
                              <div class="text-secondary">now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/tabler/static/photos/soft-photo-of-woman-on-the-bed-with-the-book-and-cup-of-coffee-in-hands.jpg" class="card-img-top" alt="Soft photo of woman on the bed with the book and cup of coffee in hands" /></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span style="background-image: url(/tabler/static/avatars/006f.jpg)" class="avatar me-3 rounded"></span>
                            <div>
                              <div>Avivah Mugleston</div>
                              <div class="text-secondary">6 days ago</div>
                            </div>
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
</x-preview.page>
