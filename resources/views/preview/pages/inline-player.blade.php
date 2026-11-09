<x-preview.page :title='"Inline Player"' :html-attrs='"lang=\"en\""'>
<x-slot:head>
@verbatim
<link href="/tabler/libs/plyr/dist/plyr.css" rel="stylesheet" />
@endverbatim
</x-slot:head>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Inline Player</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/inline-player" target="_blank" rel="noopener" class="link-secondary">
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
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Youtube Player</h2>

                      <div id="player-youtube" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Vimeo Player</h2>

                      <div id="player-charlotte" data-plyr-provider="vimeo" data-plyr-embed-id="707012696"></div>
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
<script src="/tabler/libs/plyr/dist/plyr.min.js" defer></script>
<script>
      ;(function () {
        const playerId = 'player-youtube'
        const playerSelector = '#player-youtube'

        window.tabler_player ??= {}

        function initPlayer() {
          window.Plyr && (window.tabler_player[playerId] = new Plyr(playerSelector))
        }

        document.readyState !== 'loading' ? initPlayer() : document.addEventListener('DOMContentLoaded', initPlayer, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const playerId = 'player-charlotte'
        const playerSelector = '#player-charlotte'

        window.tabler_player ??= {}

        function initPlayer() {
          window.Plyr && (window.tabler_player[playerId] = new Plyr(playerSelector))
        }

        document.readyState !== 'loading' ? initPlayer() : document.addEventListener('DOMContentLoaded', initPlayer, { once: true })
      })()
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
