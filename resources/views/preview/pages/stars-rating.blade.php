<x-preview.page :title='"Star Ratings"' :html-attrs='"lang=\"en\""'>
<x-slot:head>
@verbatim
<link href="/tabler/libs/star-rating.js/dist/star-rating.min.css" rel="stylesheet" />
@endverbatim
</x-slot:head>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Star Ratings</h1>

                  <div class="text-secondary mt-1">An interactive star rating built on the star-rating.js widget, backed by a hidden select for accessibility and forms.</div>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/components/star-rating" target="_blank" rel="noopener" class="link-secondary">
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
              <div class="row row-cards mb-5">
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Basic</h2>
                      <p class="card-subtitle">Click a star to set the value.</p>
                      <select id="rating-basic" aria-label="Rating">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4" selected>Very Good</option>
                        <option value="3">Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Icons</h2>
                      <p class="card-subtitle">Swap the star for any icon by passing a different SVG to the <code>stars</code> option.</p>
                      <div class="space-y">
                        <select id="rating-icon-star" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4" selected>Very Good</option>
                          <option value="3">Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>

                        <select id="rating-icon-heart" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4" selected>Very Good</option>
                          <option value="3">Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>

                        <select id="rating-icon-ghost" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4" selected>Very Good</option>
                          <option value="3">Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>

                        <select id="rating-icon-circle" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4" selected>Very Good</option>
                          <option value="3">Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Sizes</h2>
                      <p class="card-subtitle">Match the rating to surrounding text with an <code>icon-sm</code> or <code>icon-lg</code> class on the star.</p>
                      <div class="space-y">
                        <select id="rating-size-sm" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4">Very Good</option>
                          <option value="3" selected>Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>

                        <select id="rating-size-md" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4">Very Good</option>
                          <option value="3" selected>Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>

                        <select id="rating-size-lg" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4">Very Good</option>
                          <option value="3" selected>Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Colors</h2>
                      <p class="card-subtitle">Color the star with a <code>text-*</code> class, any theme or extended color, to match the rest of the page.</p>
                      <div class="space-y">
                        <select id="rating-color-default" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4">Very Good</option>
                          <option value="3" selected>Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>

                        <select id="rating-color-primary" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4">Very Good</option>
                          <option value="3" selected>Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>

                        <select id="rating-color-red" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4">Very Good</option>
                          <option value="3" selected>Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>

                        <select id="rating-color-lime" aria-label="Rating">
                          <option value="">Select a rating</option>
                          <option value="5">Excellent</option>
                          <option value="4">Very Good</option>
                          <option value="3" selected>Average</option>
                          <option value="2">Poor</option>
                          <option value="1">Terrible</option>
                        </select>
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
<script src="/tabler/libs/star-rating.js/dist/star-rating.min.js" defer></script>
<script>
      ;(function () {
        const ratingSelector = '#rating-basic'
        const ratingKey = 'rating-basic'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full">\u003cpath d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-icon-star'
        const ratingKey = 'rating-icon-star'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full">\u003cpath d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-icon-heart'
        const ratingKey = 'rating-icon-heart'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full text-red">\u003cpath d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-icon-ghost'
        const ratingKey = 'rating-icon-ghost'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full text-azure">\u003cpath d="M12 3a8 8 0 0 1 7.996 7.75l.004 .25l-.001 6.954l.01 .103a2.78 2.78 0 0 1 -1.468 2.618l-.163 .08c-1.053 .475 -2.283 .248 -3.129 -.593l-.137 -.146a.65 .65 0 0 0 -1.024 0a2.65 2.65 0 0 1 -4.176 0a.65 .65 0 0 0 -.512 -.25c-.2 0 -.389 .092 -.55 .296a2.78 2.78 0 0 1 -4.859 -2.005l.008 -.091l.001 -6.966l.004 -.25a8 8 0 0 1 7.996 -7.75zm2.82 10.429a1 1 0 0 0 -1.391 -.25a2.5 2.5 0 0 1 -2.858 0a1 1 0 0 0 -1.142 1.642a4.5 4.5 0 0 0 5.142 0a1 1 0 0 0 .25 -1.392zm-4.81 -4.429l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993zm4 0l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-icon-circle'
        const ratingKey = 'rating-icon-circle'
        const star = '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full text-green">\u003cpath d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-size-sm'
        const ratingKey = 'rating-size-sm'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full icon-sm">\u003cpath d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-size-md'
        const ratingKey = 'rating-size-md'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full icon-md">\u003cpath d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-size-lg'
        const ratingKey = 'rating-size-lg'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full icon-lg">\u003cpath d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-color-default'
        const ratingKey = 'rating-color-default'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full">\u003cpath d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-color-primary'
        const ratingKey = 'rating-color-primary'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full text-primary">\u003cpath d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-color-red'
        const ratingKey = 'rating-color-red'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full text-red">\u003cpath d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const ratingSelector = '#rating-color-lime'
        const ratingKey = 'rating-color-lime'
        const star =
          '\u003csvg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" class="icon gl-star-full text-lime">\u003cpath d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />\u003c/svg>'

        window.tabler_rating ??= {}

        function initRating() {
          const rating = new StarRating(ratingSelector, {
            tooltip: false,
            clearable: false,
            stars: (el) => {
              el.innerHTML = star
            },
            classNames: {},
          })
          window.tabler_rating[ratingKey] = rating
        }

        document.readyState !== 'loading' ? initRating() : document.addEventListener('DOMContentLoaded', initRating, { once: true })
      })()
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
