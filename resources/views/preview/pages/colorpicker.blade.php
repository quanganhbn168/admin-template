<x-preview.page :title='"Color picker"' :html-attrs='"lang=\"en\""'>
<x-slot:head>
@verbatim
<link href="/tabler/libs/@melloware/coloris/dist/coloris.min.css" rel="stylesheet" />
@endverbatim
</x-slot:head>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Color picker</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/color-picker" target="_blank" rel="noopener" class="link-secondary">
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
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Basic</h2>
                  <p class="card-subtitle">Click a swatch to open the picker and choose any color.</p>
                  <div class="row g-3">
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-1" value="#066fd1" aria-label="Blue color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-2" value="#4299e1" aria-label="Azure color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-3" value="#4263eb" aria-label="Indigo color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-4" value="#ae3ec9" aria-label="Purple color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-5" value="#d6336c" aria-label="Pink color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-6" value="#d63939" aria-label="Red color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-7" value="#f76707" aria-label="Orange color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-8" value="#f59f00" aria-label="Yellow color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-9" value="#74b816" aria-label="Lime color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-10" value="#2fb344" aria-label="Green color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-11" value="#0ca678" aria-label="Teal color value" />
                      </div>
                    </div>
                    <div class="col-2">
                      <div>
                        <input type="text" class="form-control d-block" id="colorpicker-12" value="#17a2b8" aria-label="Cyan color value" />
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
<script src="/tabler/libs/@melloware/coloris/dist/umd/coloris.min.js" defer></script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-1'
        const colorpickerSelector = '#colorpicker-1'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-2'
        const colorpickerSelector = '#colorpicker-2'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-3'
        const colorpickerSelector = '#colorpicker-3'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-4'
        const colorpickerSelector = '#colorpicker-4'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-5'
        const colorpickerSelector = '#colorpicker-5'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-6'
        const colorpickerSelector = '#colorpicker-6'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-7'
        const colorpickerSelector = '#colorpicker-7'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-8'
        const colorpickerSelector = '#colorpicker-8'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-9'
        const colorpickerSelector = '#colorpicker-9'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-10'
        const colorpickerSelector = '#colorpicker-10'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-11'
        const colorpickerSelector = '#colorpicker-11'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const colorpickerId = 'colorpicker-12'
        const colorpickerSelector = '#colorpicker-12'
        const alpha = false
        const format = 'hex'
        const swatches = ['#066fd1', '#4299e1', '#4263eb', '#ae3ec9', '#d6336c', '#d63939', '#f76707', '#f59f00', '#74b816', '#2fb344', '#0ca678', '#17a2b8']

        function initColorpicker() {
          window.tabler_colorpicker ??= {}

          if (window.Coloris) {
            // `el` can only be configured globally, but Coloris.setInstance() scopes the rest
            // (alpha, format, swatches, ...) to this selector so multiple pickers with
            // different options don't clobber each other's settings.
            Coloris({ el: colorpickerSelector })
            Coloris.setInstance(colorpickerSelector, {
              selectInput: false,
              alpha,
              ...(format ? { format } : {}),
              swatches,
            })
            window.tabler_colorpicker[colorpickerId] = colorpickerSelector
          }
        }

        document.readyState !== 'loading' ? initColorpicker() : document.addEventListener('DOMContentLoaded', initColorpicker, { once: true })
      })()
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
