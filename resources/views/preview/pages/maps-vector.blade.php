<x-preview.page :title='"Vector Maps"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Vector Maps</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/vector-map" target="_blank" rel="noopener" class="link-secondary">
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
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">World map</h2>
                      <div
                        class="vector-map"
                        data-bs-toggle="vector-map"
                        data-bs-map="world"
                        data-bs-label="World map"
                        data-bs-legend="true"
                        data-bs-values='{"AF":2,"AL":2,"DZ":4,"AO":3,"AG":1,"AR":5,"AM":1,"AU":7,"AT":5,"AZ":3,"BS":1,"BH":2,"BD":4,"BB":1,"BY":3,"BE":5,"BZ":1,"BJ":1,"BT":1,"BO":2,"BA":2,"BW":2,"BR":8,"BN":2,"BG":2,"BF":1,"BI":1,"KH":2,"CM":2,"CA":7,"CV":1,"CF":1,"TD":1,"CL":4,"CN":9,"CO":5,"KM":1,"CD":2,"CG":2,"CR":2,"CI":2,"HR":3,"CY":2,"CZ":4,"DK":5,"DJ":1,"DM":1,"DO":3,"EC":3,"EG":5,"SV":2,"GQ":2,"ER":1,"EE":2,"ET":2,"FJ":1,"FI":5,"FR":8,"GA":2,"GM":1,"GE":2,"DE":8,"GH":2,"GR":5,"GD":1,"GT":2,"GN":1,"GW":1,"GY":1,"HT":1,"HN":2,"HK":5,"HU":4,"IS":2,"IN":7,"ID":6,"IR":5,"IQ":3,"IE":5,"IL":5,"IT":8,"JM":2,"JP":9,"JO":2,"KZ":4,"KE":2,"KI":1,"KR":6,"KW":4,"KG":1,"LA":1,"LV":2,"LB":2,"LS":1,"LR":1,"LY":3,"LT":2,"LU":3,"MK":1,"MG":1,"MW":1,"MY":5,"MV":1,"ML":1,"MT":1,"MR":1,"MU":1,"MX":7,"MD":1,"MN":1,"ME":1,"MA":3,"MZ":2,"MM":2,"NA":2,"NP":2,"NL":6,"NZ":4,"NI":1,"NE":1,"NG":5,"NO":5,"OM":3,"PK":4,"PA":2,"PG":1,"PY":2,"PE":4,"PH":4,"PL":10,"PT":5,"QA":4,"RO":4,"RU":7,"RW":1,"WS":1,"ST":1,"SA":5,"SN":2,"RS":2,"SC":1,"SL":1,"SG":5,"SK":3,"SI":2,"SB":1,"ZA":5,"ES":7,"LK":2,"KN":1,"LC":1,"VC":1,"SD":3,"SR":1,"SZ":1,"SE":5,"CH":6,"SY":3,"TW":5,"TJ":1,"TZ":2,"TH":5,"TL":1,"TG":1,"TO":1,"TT":2,"TN":2,"TR":6,"TM":1,"UG":2,"UA":4,"AE":5,"GB":8,"US":10,"UY":2,"UZ":2,"VU":1,"VE":5,"VN":4,"YE":2,"ZM":2,"ZW":1}'
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Map with markers</h2>
                      <div
                        class="vector-map"
                        data-bs-toggle="vector-map"
                        data-bs-map="world"
                        data-bs-label="Map with markers"
                        data-bs-markers='[{"name":"Russia","lat":61.524,"lng":105.3188},{"name":"Canada","lat":56.1304,"lng":-106.3468},{"name":"Greenland","lat":71.7069,"lng":-42.6043},{"name":"Egypt","lat":26.8206,"lng":30.8025},{"name":"Brazil","lat":-14.235,"lng":-51.9253},{"name":"China","lat":35.8617,"lng":104.1954},{"name":"United States","lat":37.0902,"lng":-95.7129},{"name":"Norway","lat":60.472024,"lng":8.468946},{"name":"Ukraine","lat":48.379433,"lng":31.16558}]'
                        style="--tblr-vector-map-color: var(--tblr-red)"
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Map with markers and lines</h2>
                      <div
                        class="vector-map"
                        data-bs-toggle="vector-map"
                        data-bs-map="world"
                        data-bs-label="Map with markers and lines"
                        data-bs-markers='[{"name":"Russia","lat":61.524,"lng":105.3188},{"name":"Canada","lat":56.1304,"lng":-106.3468},{"name":"Greenland","lat":71.7069,"lng":-42.6043},{"name":"Egypt","lat":26.8206,"lng":30.8025},{"name":"Brazil","lat":-14.235,"lng":-51.9253},{"name":"China","lat":35.8617,"lng":104.1954},{"name":"United States","lat":37.0902,"lng":-95.7129},{"name":"Norway","lat":60.472024,"lng":8.468946},{"name":"Ukraine","lat":48.379433,"lng":31.16558}]'
                        data-bs-lines='[{"from":"Russia","to":"Greenland"},{"from":"Russia","to":"United States"},{"from":"Russia","to":"Canada"},{"from":"Brazil","to":"Norway"},{"from":"Brazil","to":"Ukraine"},{"from":"Brazil","to":"Egypt"},{"from":"Brazil","to":"China"}]'
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Map with a color scale</h2>
                      <div
                        class="vector-map"
                        data-bs-toggle="vector-map"
                        data-bs-map="world"
                        data-bs-label="Map with a color scale"
                        data-bs-legend="true"
                        data-bs-colors='["var(--tblr-red)","var(--tblr-yellow)","var(--tblr-green)"]'
                        data-bs-values='{"AF":2,"AL":2,"DZ":4,"AO":3,"AG":1,"AR":5,"AM":1,"AU":7,"AT":5,"AZ":3,"BS":1,"BH":2,"BD":4,"BB":1,"BY":3,"BE":5,"BZ":1,"BJ":1,"BT":1,"BO":2,"BA":2,"BW":2,"BR":8,"BN":2,"BG":2,"BF":1,"BI":1,"KH":2,"CM":2,"CA":7,"CV":1,"CF":1,"TD":1,"CL":4,"CN":9,"CO":5,"KM":1,"CD":2,"CG":2,"CR":2,"CI":2,"HR":3,"CY":2,"CZ":4,"DK":5,"DJ":1,"DM":1,"DO":3,"EC":3,"EG":5,"SV":2,"GQ":2,"ER":1,"EE":2,"ET":2,"FJ":1,"FI":5,"FR":8,"GA":2,"GM":1,"GE":2,"DE":8,"GH":2,"GR":5,"GD":1,"GT":2,"GN":1,"GW":1,"GY":1,"HT":1,"HN":2,"HK":5,"HU":4,"IS":2,"IN":7,"ID":6,"IR":5,"IQ":3,"IE":5,"IL":5,"IT":8,"JM":2,"JP":9,"JO":2,"KZ":4,"KE":2,"KI":1,"KR":6,"KW":4,"KG":1,"LA":1,"LV":2,"LB":2,"LS":1,"LR":1,"LY":3,"LT":2,"LU":3,"MK":1,"MG":1,"MW":1,"MY":5,"MV":1,"ML":1,"MT":1,"MR":1,"MU":1,"MX":7,"MD":1,"MN":1,"ME":1,"MA":3,"MZ":2,"MM":2,"NA":2,"NP":2,"NL":6,"NZ":4,"NI":1,"NE":1,"NG":5,"NO":5,"OM":3,"PK":4,"PA":2,"PG":1,"PY":2,"PE":4,"PH":4,"PL":10,"PT":5,"QA":4,"RO":4,"RU":7,"RW":1,"WS":1,"ST":1,"SA":5,"SN":2,"RS":2,"SC":1,"SL":1,"SG":5,"SK":3,"SI":2,"SB":1,"ZA":5,"ES":7,"LK":2,"KN":1,"LC":1,"VC":1,"SD":3,"SR":1,"SZ":1,"SE":5,"CH":6,"SY":3,"TW":5,"TJ":1,"TZ":2,"TH":5,"TL":1,"TG":1,"TO":1,"TT":2,"TN":2,"TR":6,"TM":1,"UG":2,"UA":4,"AE":5,"GB":8,"US":10,"UY":2,"UZ":2,"VU":1,"VE":5,"VN":4,"YE":2,"ZM":2,"ZW":1}'
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Map with selection</h2>
                      <div class="vector-map" data-bs-toggle="vector-map" data-bs-map="world" data-bs-label="Map with selection" data-bs-select="multiple" data-bs-selected='["PL","FR","BR","AU"]'></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Map with zoom</h2>
                      <div class="vector-map" data-bs-toggle="vector-map" data-bs-map="world" data-bs-label="Map with zoom" data-bs-zoom="true" data-bs-values='{"PL":8,"DE":6,"FR":5,"ES":3,"IT":4,"GB":7,"SE":2,"UA":3,"RO":2,"CZ":5}' style="--tblr-vector-map-color: var(--tblr-green)"></div>
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
<script src="/tabler/js/tabler-vector-map.min.js" defer></script>
<script src="/tabler/js/maps/world.js" defer></script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
