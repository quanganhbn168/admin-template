<x-preview.page :title='"Signatures"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Signatures</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/signature" target="_blank" rel="noopener" class="link-secondary">
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
                      <h2 class="card-title">Confirm transfer</h2>
                      <p class="card-subtitle">Please confirm the transfer of funds by signing below.</p>
                      <form>
                        <div class="mb-3">
                          <label class="form-label required" for="signature-first-name">
                            First name
                            <span class="visually-hidden"> (required)</span>
                          </label>

                          <input type="text" class="form-control" id="signature-first-name" name="first_name" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label required" for="signature-last-name">
                            Last name
                            <span class="visually-hidden"> (required)</span>
                          </label>

                          <input type="text" class="form-control" id="signature-last-name" name="last_name" />
                        </div>
                        <div class="mb-3">
                          <div class="form-label required">Signature</div>

                          <div class="signature position-relative">
                            <div class="position-absolute top-0 end-0 p-2">
                              <button type="button" class="btn btn-icon" id="signature-default-clear" title="Clear signature" aria-label="Clear signature" data-bs-toggle="tooltip">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M4 7l16 0" />
                                  <path d="M10 11l0 6" />
                                  <path d="M14 11l0 6" />
                                  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                              </button>
                            </div>
                            <canvas id="signature-default" width="400" height="400" class="signature-canvas"></canvas>
                          </div>
                        </div>
                      </form>
                      <div class="text-secondary fs-5">
                        I agree that the signature and initials will be the electronic representation of my signature and initials for all purposes when I (or my agent) use them on documents, including legally binding contracts - just the same as a pen-and-paper signature or initial.
                      </div>

                      <div class="mt-4">
                        <div class="btn-list">
                          <button type="button" class="btn">Cancel</button>
                          <button type="button" class="btn btn-primary ms-auto">Confirm transfer</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="row row-cards">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <h2 class="card-title">Advanced demo</h2>

                          <div class="signature position-relative">
                            <div class="position-absolute top-0 end-0 p-2">
                              <button type="button" class="btn btn-icon" id="signature-advanced-clear" title="Clear signature" aria-label="Clear signature" data-bs-toggle="tooltip">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                  <path d="M4 7l16 0" />
                                  <path d="M10 11l0 6" />
                                  <path d="M14 11l0 6" />
                                  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                              </button>
                            </div>
                            <canvas id="signature-advanced" width="400" height="400" class="signature-canvas"></canvas>
                          </div>

                          <div class="mt-4">
                            <div class="row">
                              <div class="col">
                                <label class="form-label visually-hidden" for="signature-advanced-color"> Pen color </label>

                                <input type="color" id="signature-advanced-color" class="w-100 form-control form-control-color" />
                              </div>
                              <div class="col">
                                <button class="btn w-100" id="signature-advanced-svg">Download SVG</button>
                              </div>
                              <div class="col">
                                <button class="btn w-100" id="signature-advanced-png">Download PNG</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <button type="button" data-bs-toggle="modal" data-bs-target="#modal-signature" class="btn">Open signature modal</button>
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
@verbatim
<!-- BEGIN PAGE MODALS -->

    <div class="modal" tabindex="-1" id="modal-signature" role="dialog" aria-modal="true" aria-labelledby="modal-signature-save-title">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <h2 class="modal-title" id="modal-signature-save-title">Save your signature</h2>
            <div class="signature position-relative">
              <div class="position-absolute top-0 end-0 p-2">
                <button type="button" class="btn btn-icon" id="signature-modal-clear" title="Clear signature" aria-label="Clear signature" data-bs-toggle="tooltip">
                  <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                    <path d="M4 7l16 0" />
                    <path d="M10 11l0 6" />
                    <path d="M14 11l0 6" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                  </svg>
                </button>
              </div>
              <canvas id="signature-modal" width="400" height="400" class="signature-canvas"></canvas>
            </div>

            <div class="text-secondary fs-5 mt-4">I agree that the signature and initials will be the electronic representation of my signature and initials for all purposes when I (or my agent) use them on documents, including legally binding contracts - just the same as a pen-and-paper signature or initial.</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Save my signature</button>
          </div>
        </div>
      </div>
    </div>

    <!-- END PAGE MODALS -->
@endverbatim
<x-slot:scripts>
@verbatim
<script src="/tabler/libs/signature_pad/dist/signature_pad.umd.min.js" defer></script>
<script>
      ;(function () {
        const signatureKey = 'default'
        const canvasId = 'signature-default'
        const clearId = 'signature-default-clear'
        const clear = true
        const event = 'DOMContentLoaded'

        window.tabler_signature ??= {}

        function resizeCanvas(canvas, signaturePad) {
          const ratio = Math.max(window.devicePixelRatio || 1, 1)

          canvas.width = canvas.offsetWidth * ratio
          canvas.height = canvas.offsetHeight * ratio
          canvas.getContext('2d').scale(ratio, ratio)
          signaturePad.fromData(signaturePad.toData())
        }

        function initSignature() {
          const canvas = document.getElementById(canvasId)

          if (!canvas) {
            return
          }

          let signaturePad = window.tabler_signature[signatureKey]

          if (!signaturePad) {
            signaturePad = new SignaturePad(canvas, {
              backgroundColor: 'transparent',
              penColor: getComputedStyle(canvas).color,
            })

            window.tabler_signature[signatureKey] = signaturePad

            if (clear) {
              document.getElementById(clearId)?.addEventListener('click', function () {
                signaturePad.clear()
              })
            }

            window.addEventListener('resize', function () {
              resizeCanvas(canvas, signaturePad)
            })
          }

          resizeCanvas(canvas, signaturePad)
        }

        if (event === 'DOMContentLoaded') {
          document.readyState !== 'loading' ? initSignature() : document.addEventListener('DOMContentLoaded', initSignature, { once: true })
        } else {
          document.addEventListener(event, initSignature)
        }
      })()
    </script>
<script>
      ;(function () {
        const signatureKey = 'advanced'
        const canvasId = 'signature-advanced'
        const clearId = 'signature-advanced-clear'
        const clear = true
        const event = 'DOMContentLoaded'

        window.tabler_signature ??= {}

        function resizeCanvas(canvas, signaturePad) {
          const ratio = Math.max(window.devicePixelRatio || 1, 1)

          canvas.width = canvas.offsetWidth * ratio
          canvas.height = canvas.offsetHeight * ratio
          canvas.getContext('2d').scale(ratio, ratio)
          signaturePad.fromData(signaturePad.toData())
        }

        function initSignature() {
          const canvas = document.getElementById(canvasId)

          if (!canvas) {
            return
          }

          let signaturePad = window.tabler_signature[signatureKey]

          if (!signaturePad) {
            signaturePad = new SignaturePad(canvas, {
              backgroundColor: 'transparent',
              penColor: getComputedStyle(canvas).color,
            })

            window.tabler_signature[signatureKey] = signaturePad

            if (clear) {
              document.getElementById(clearId)?.addEventListener('click', function () {
                signaturePad.clear()
              })
            }

            window.addEventListener('resize', function () {
              resizeCanvas(canvas, signaturePad)
            })
          }

          resizeCanvas(canvas, signaturePad)
        }

        if (event === 'DOMContentLoaded') {
          document.readyState !== 'loading' ? initSignature() : document.addEventListener('DOMContentLoaded', initSignature, { once: true })
        } else {
          document.addEventListener(event, initSignature)
        }
      })()
    </script>
<script>
      ;(function () {
        const signatureImage =
          'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCA1OTIgMjAwIj4KICA8ZyBjbGlwLXBhdGg9InVybCgjYSkiPgogICAgPHBhdGggZmlsbD0iIzAwMCIgZD0iTTEzMi4wOTIgNzkuMDY1YzAgLjMwNC0uMzU1IDEuNDAzLTEuMDYzIDMuMjk4LS42OTQgMS44OTQtMS4xNDIgMy4wMjItMS4zNDUgMy4zODQtMi4zNDIgMy44NDctNi43NiA3LjE4LTEzLjI1MiAxMC4wMDEtNS4zNjUgMi4yMjctMTMuNDU1IDUuNTktMjQuMjcgMTAuMDg4YTE0OC4xOSAxNDguMTkgMCAwIDAtMTAuMzQ3IDMuMTI0Yy0yLjY5Ljg4Mi02LjU4NiAyLjk1LTExLjY5IDYuMjA0YTE4Ny42NiAxODcuNjYgMCAwIDAtMS4wNjMgMTAuMTk2IDQwNy40OSA0MDcuNDkgMCAwIDEtMS40MzIgMTUuMzM4Yy0uODgyIDEuMTg2LTEuOTg4IDEuNzc5LTMuMzE4IDEuNzc5LjExNSAwIC4xNzMtLjAxNS4xNzMtLjA0NC0uMjAyLS4xMDEtLjg5Ni0uMjgyLTIuMDgyLS41NDJ2LTIuODg1YzAtMi43MDUuMjMxLTUuNDYuNjk0LTguMjY2IDAtLjA1Ny4yNTMtLjc3My43Ni0yLjE0Ny41MDUtMS4zMzEuNzU4LTIuMTQxLjc1OC0yLjQzIDAtMS42MDUtLjI5Ni0zLjI0LS44ODktNC45MDMtLjM5IDEuMTI4LTEuMTEzIDEuODU5LTIuMTY5IDIuMTkxLTEuMjQ0LS43MjMtMS44NjUtMS45ODgtMS44NjUtMy43OTYgMC0uMjAzIDEuMDQ4LTEuNzI5IDMuMTQ1LTQuNTc4IDIuMTQtMi45NjUgMy4zODMtNS4wMDQgMy43My02LjExNy4yNzUtLjgxLjc2Ny0zLjQ1IDEuNDc1LTcuOTE5IDEuMDQxLTYuNjEgMS45Ni0xMS40NCAyLjc1NS0xNC40OTEgMS42OTItNi42MzkgMy42OTQtMTAuODYyIDYuMDA4LTEyLjY3bDIuNDMgMS44MjN2MS44NjVjLTEuNTA1IDEuMTU3LTIuNTY3IDMuMjYyLTMuMTkgNi4zMTMtLjE4Ny45NC0uNjM2IDMuMzQxLTEuMzQ0IDcuMjAzLS4xNDUuNzA4LS43MjMgMi41NDUtMS43MzUgNS41MS0uOTExIDIuNjAzLTEuMzY3IDQuMTg3LTEuMzY3IDQuNzUxdjUuNDI0Yy4yNi4yNDUuNS4zNjguNzE2LjM2OCAxLjIxNSAwIDMuMTA5LS41MDYgNS42ODMtMS41MTggMy4wOC0xLjE1NyA1LjAxNy0xLjg1MSA1LjgxMy0yLjA4MyAxMy4wNzEtMy4zODQgMjMuMTUtNy4yMzggMzAuMjM1LTExLjU2MyA2LjIxOC0zLjc0NiA5Ljk5Mi02LjI5OCAxMS4zMjItNy42NTggMS41NzYtMS41NjIgMi4zNjQtMy42NjYgMi4zNjQtNi4zMTMgMC00LjY3MS0yLjEwNC04LjU2OS02LjMxMi0xMS42OTMtMy44Ni0yLjkwNy04LjE5MS00LjM2LTEyLjk5Mi00LjM2LTMuNzg4IDAtOC4yNzEuNDYyLTEzLjQ0NyAxLjM4OC02LjY2NiAxLjIxNS0xMi45MiAyLjkwNy0xOC43NjIgNS4wNzYtOC44NjQgMy4yODQtMTMuNzM2IDYuODM0LTE0LjYxOCAxMC42NTJsLTEuMDg1LjgwM0M1OC44MzkgNzguNDIyIDU4IDc3LjA2MiA1OCA3NS43OWMwLTEuODA4IDEuODgtNC4wMTQgNS42NC02LjYxNyAzLjA4LTIuMTQgNS44Mi0zLjU2NSA4LjIyLTQuMjc0IDE1Ljk0OS00LjkxNyAyNy44NjQtNy4zNzYgMzUuNzQ0LTcuMzc2IDcuNDYxIDAgMTMuNDEyIDEuOTUzIDE3Ljg1MSA1Ljg1NyA0LjQyNCAzLjg2MiA2LjYzNyA5LjA5IDYuNjM3IDE1LjY4NVptMzIuMjk1IDU1LjQwN3YxLjkwOWMtLjU5Mi44MjQtMS4yNDMgMS4yMzYtMS45NTIgMS4yMzYtLjQ0OCAwLTEuOTczLTEuMzU5LTQuNTc2LTQuMDc4LTIuNjAzLTIuNzMzLTQuMzM4LTQuMS01LjIwNi00LjEgMCAuMDU4LTMuMDggMS4yNDQtOS4yMzkgMy41NTgtNi4zMDUgMi4zNDMtMTAuMzE3IDMuNTE0LTEyLjAzOCAzLjUxNC0xLjQxNyAwLTIuOTg2LS42OTQtNC43MDctMi4wODMtMS43Mi0xLjM3NC0yLjU4MS0yLjY2OC0yLjU4MS0zLjg4MyAwLTMuMTM4IDMuNDM0LTYuNzk3IDEwLjMwMy0xMC45NzcgNi40MzQtMy45NjMgMTEuMzQzLTUuOTQ0IDE0LjcyNy01Ljk0NCAxLjQxNyAwIDIuNjkuODEgMy44MTcgMi40M3YxLjgyMmMtLjU2NC44MS0xLjIxNCAxLjIxNS0xLjk1MiAxLjIxNS0uMTMgMC0uNjE0LS4xODEtMS40NTMtLjU0My0uODM5LS4zNzYtMS4zMzctLjU2NC0xLjQ5Ni0uNTY0LTEuMTI4IDAtMy43MTcgMS4xNjUtNy43NjUgMy40OTMtMy44MzIgMi4xNjktNi4zOTkgMy43ODktNy43IDQuODYtMS4zMDIgMS4xMjgtMi4xMzMgMi40MTUtMi40OTQgMy44NjEuOTgzLjkyNiAyLjE1NCAxLjM4OCAzLjUxMyAxLjM4OC43MDkgMCA0LjEwNy0xLjE3MSAxMC4xOTQtMy41MTQgNi4wNzMtMi4zNzIgOS43NDYtMy41NTggMTEuMDE5LTMuNTU4IDEuODY1IDAgMy4yMS40NyA0LjAzNCAxLjQxLjE4OC4yMTcuOTA0IDEuNDkgMi4xNDcgMy44MThhMjEuOTAyIDIxLjkwMiAwIDAgMCAzLjQwNSA0LjczWm02OS44ODQtMTkuNzQydjEuOTUzYy0yLjk5MyAyLjQ1OC01Ljg5OSA1LjIxMy04LjcxOSA4LjI2NS04Ljc2MiA5LjQ1OS0xNC42NjIgMTQuMTg4LTE3LjY5OSAxNC4xODgtMi40NTggMC01LjE5OC0yLjIyLTguMjItNi42NmwtNi41MjgtOS42NTRjLTEuMjQ0LjIwMy0zLjQ5MiAyLjQ2Ni02Ljc0NiA2Ljc5LTMuMDUxIDQuMTIyLTUuODQyIDYuMTgzLTguMzcyIDYuMTgzbC0xLjE5My0uNjI5Yy0uODgyLTEuNjItMi41MzgtNS4xNy00Ljk2Ny0xMC42NTItMi42NDYtNS45MjktMy45NjktOS4zMDYtMy45NjktMTAuMTMxIDAtMS40MzIuODQ2LTIuNjE4IDIuNTM4LTMuNTU4IDEuNjkxIDIuMDQgMy4zNTQgNC44NjcgNC45ODggOC40ODMgMi40NTggNS4zMzYgMy44NzUgOC4zMyA0LjI1MSA4Ljk4MWgyLjA2MWMuNTY0LTEuMDQxIDEuODk0LTIuNjU0IDMuOTkxLTQuODM4LjczNy0xLjEyOCAxLjgyMi0yLjY5IDMuMjUzLTQuNjg2IDEuNjc3LTIuMzcyIDMuMDk1LTMuNTU3IDQuMjUxLTMuNTU3IDEuMDcgMCAxLjk3NC41OTIgMi43MTEgMS43NzggMS4wNzEgMS42OTMgMi45ODYgNC43MyA1Ljc0OCA5LjExMiAzLjA1MSA0Ljc0NCA1LjMgNy4xMTYgNi43NDYgNy4xMTYgMS4wNyAwIDUuMDgyLTMuMDgxIDEyLjAzNy05LjI0MiA2Ljk3LTYuMTYxIDEwLjc5NS05LjI0MiAxMS40NzQtOS4yNDJoMi4zNjRabTQ0LjU3MyAxOS41MjVjLTEuMDQyIDEuMjQ0LTIuNDAxIDEuODY2LTQuMDc4IDEuODY2aC0xNC45ODhjLTMuNDcgMC03LjMzOC0uNTIxLTExLjYwNC0xLjU2Mi01LjU5NS0xLjM2LTguNzYyLTMuMDY3LTkuNS01LjEyLS44MDktMi4zMTQtMS4yMTQtNC41MzQtMS4yMTQtNi42NiAwLTQuMjY3IDEuODM2LTcuNTQzIDUuNTA5LTkuODI4IDMuMDk0LTEuOTgxIDYuODc2LTIuOTcyIDExLjM0NC0yLjk3MiAzLjg0NiAwIDYuODk3LjgzMiA5LjE1MyAyLjQ5NSAyLjI1NSAxLjY0OSAzLjM4MyAzLjg5OCAzLjM4MyA2Ljc0NyAwIDEuNTkxLTIuNzExIDMuMzI2LTguMTMzIDUuMjA2LTQuNDgzIDEuNjItNy43NDQgMi40My05Ljc4MiAyLjQzYTQuNDkgNC40OSAwIDAgMS0uNjczLS4wNDNjMCAuMzktLjMxMS44NjgtLjkzMiAxLjQzMi4zMzIuNTY0IDEuOTgxIDEuMjE0IDQuOTQ1IDEuOTUyIDIuNjYuNjggNC41NTUgMS4wMiA1LjY4MiAxLjAyaDEzLjQ3YzAgLjAyOSAxLjY5OS4yODIgNS4wOTcuNzU5IDEuMDcuNjggMS44NDMgMS40MzkgMi4zMjEgMi4yNzhabS0xNy40NjEtMTYuOWMtMS41NzYtMS42MDUtNC4xMTMtMi40MDgtNy42MTMtMi40MDgtMi40NTggMC00LjczNS40NzctNi44MzIgMS40MzItMi43MDQgMS4yNDQtNC4wNTYgMi45MjktNC4wNTYgNS4wNTUgMCAuNzUyLjI1MyAxLjI4Ny43NTkgMS42MDVoMi43MTFjLjk1NSAwIDMuNTUtLjgwMyA3Ljc4Ny0yLjQwOCA0LjIzNy0xLjYyIDYuNjUyLTIuNzEyIDcuMjQ0LTMuMjc2Wm0zMi40OTEtNTMuMzAyLTIuNDA3IDUzLjU2M2MtLjE0NS4xMTUtLjIxNy40NTUtLjIxNyAxLjAxOSAwIC41NjQuMDcyIDEuMzM4LjIxNyAyLjMyMS4zMDQgMi42NjIgMS4wNDEgNy42OTUgMi4yMTIgMTUuMDk5LS4wNTguMjQ2LS41NDIuNTI4LTEuNDUzLjg0N2EyLjkyIDIuOTIgMCAwIDEtLjQ1NS4wNDNjLTIuOTY1IDAtNC44ODgtMy40MjEtNS43Ny0xMC4yNjEtLjAyOS0uMTQ1LS4wNDMtLjQyNy0uMDQzLS44NDYgMC0xLjMzMS4wNzItNC4wNTcuMjE3LTguMTc5LjIwMi01LjMwOC40NDEtMTAuODYyLjcxNS0xNi42NjEuMDg3LTIuMTk4LjQxMi02LjI5MS45NzYtMTIuMjc5LjUzNS01LjQ4MS44MDMtOS41NTIuODAzLTEyLjIxNCAwLTguMDk5LjUzNS0xMy43NiAxLjYwNS0xNi45ODZsLjY1MS0uMDQzaC4xOTVjLjk2OSAwIDEuNjE5LjUzNSAxLjk1MiAxLjYwNS4yNi43MDkuNTI4IDEuNy44MDIgMi45NzJabTExNC4yMTggNjguMTg0Yy0uNjggMS4zMDItMS41MTEgMS45NTMtMi40OTQgMS45NTMtLjQ5MiAwLTEuNjQyLS4zNjktMy40NDktMS4xMDctMi4xNjktLjg4Mi0zLjQzNC0xLjM4MS0zLjc5Ni0xLjQ5Ny0xLjU5LS4zOS0zLjk3Ni0uNzM3LTcuMTU3LTEuMDQxLTMuODQ3LS4zNzYtNi4yMzItLjY4Ny03LjE1OC0uOTMzLTQuNDk3LTEuMTEzLTEwLjAyLTIuNC0xNi41NzEtMy44NjEtMy4wOC0uNjgtNy4wMi0yLjMyMS0xMS44MjEtNC45MjUtNS44Ny0zLjE4Mi04LjgwNi01LjgwNy04LjgwNi03Ljg3NSAwLS40MTkgMy42OC0zLjgxMSAxMS4wNC0xMC4xNzQgOC4wMjYtNi45MTMgMTIuMjc3LTEwLjYwOSAxMi43NTQtMTEuMDg2LjQ2My0uNzA5IDEuMi0xLjcxNCAyLjIxMi0zLjAxNS4yNzUtLjI2IDIuNTc0LTIuMzY1IDYuODk4LTYuMzEzIDMuNDg0LTMuMTk3IDYuMzY5LTUuNzEzIDguNjU0LTcuNTUgMy41NTctMi44NzggNi43MTYtNC45NjggOS40NzgtNi4yNy40MDUuMzc3Ljg0Ni41ODYgMS4zMjMuNjN2My4xMDJsLS4zOS4yMTdhNTkuMDEgNTkuMDEgMCAwIDAtNi4zMTIgNC40NDdjLTYuOTEyIDUuNjI2LTE5LjczIDE3LjgwNC0zOC40NTYgMzYuNTMzIDUuNTM4IDMuOTQ4IDEzLjE3MyA2Ljg4NCAyMi45MDUgOC44MDggMS4wMjYuMTg4IDcuMTg2IDEuNzI4IDE4LjQ3OSA0LjYyMSAxLjM4OC4zMzIgNC4wNDIuOTc2IDcuOTYgMS45My4yODkuMDg3IDEuODU4IDEuMjIyIDQuNzA3IDMuNDA2Wm0tNTguNTQtNTMuMzQ1LTYuNjU5IDU3LjIyOWMtLjQ0OC40NjItMS4yNjUuNjk0LTIuNDUxLjY5NC0yLjAxIDAtMy4wMTUtLjcyMy0zLjAxNS0yLjE3IDAtLjU2NC40NDEtNC4yODEgMS4zMjMtMTEuMTUuMzYyLTIuNTYgMS40NDYtOS45NzIgMy4yNTQtMjIuMjM3LjMxOC0yLjUxNi45MTEtNy4wMjEgMS43NzgtMTMuNTE1LjczOC01LjEyIDEuOC05LjUxIDMuMTg5LTEzLjE2OCAxLjc0OS4zNjEgMi42MjQgMS41MTggMi42MjQgMy40NyAwIC4zMDQtLjAxNC41ODYtLjA0My44NDdabTk5LjQyNSAzMy43MTJjMCAxLjE4Ni0yLjE0NyA0LjE1OC02LjQ0MiA4LjkxNi0zLjc4OCA0LjE4LTYuNjAxIDYuOTQzLTguNDM3IDguMjg4LS45MjYuNjc5LTIuOTE0IDIuMTU1LTUuOTY1IDQuNDI1LTEuMjcyLjg5Ny0zLjIyNCAxLjc4Ni01Ljg1NiAyLjY2OS0yLjY3NS44NjctNC43NzkgMS4zMDEtNi4zMTIgMS4zMDEtMi44NzcgMC01LjI2My0xLjg1MS03LjE1Ny01LjU1NC0xLjU0OC0zLjAyMi0yLjMyMS02LjE2OC0yLjMyMS05LjQzNiAwLTIuNzE5LjU2NC01LjUwMyAxLjY5Mi04LjM1My40MTkgMCAuODUzLS4xOTUgMS4zMDEtLjU4NS41MzUuMzAzIDEuMjcyLjg5NiAyLjIxMiAxLjc3OS0uMjg5IDIuMjI3LS40MzMgNC4xNzItLjQzMyA1LjgzNSAwIDYuODQxIDIuMjE5IDEwLjI2MiA2LjY1OCAxMC4yNjIgNC4yOTUgMCA5LjQ1LTIuNjY5IDE1LjQ2NS04LjAwNi45NTQtLjg1MyA1LjQ3My01LjA3NiAxMy41NTYtMTIuNjY5aC42NzJjLjkxMSAwIDEuMzY3LjM3NiAxLjM2NyAxLjEyOFptMzguNDEyIDEuMDJjMCAuNTkzLS4yOTYgMy45Ny0uODg5IDEwLjEzMWE3MjIuMzI4IDcyMi4zMjggMCAwIDEtMS44NjUgMTYuNzA0Yy0uMDU4LjQ0OS0uNTA3LjY3My0xLjM0NS42NzMtMS4wOTkgMC0yLjAwMy0xLjM4OS0yLjcxMS00LjE2NS0uNTM1LTIuMTEyLS44MDMtMy45ODUtLjgwMy01LjYxOSAwLS42MjIuMzU0LTIuODU3IDEuMDYzLTYuNzA0LjcyMy0zLjgzMiAxLjA4NC02LjA1MiAxLjA4NC02LjY2IDAtMS42NjMtLjQ0OC0yLjQ5NC0xLjM0NC0yLjQ5NC0xLjE1NyAwLTMuNjMgMS4wMDUtNy40MTggMy4wMTUtMy4yODMgMS43NS01LjY2OSAzLjE3NS03LjE1OCA0LjI3NC0yLjg0OCAyLjA5Ny02LjA4IDUuMjUtOS42OTUgOS40NTgtLjU5My42OC0xLjc1NyAxLjk3NC0zLjQ5MiAzLjg4NC0uNjY1LjcwOC0yLjAwMyAxLjA3Ny00LjAxMyAxLjEwNnYtMi44NDJjMC0xLjMxNiAyLjU5Ni00LjIzOCA3Ljc4Ny04Ljc2NGExMTMuMjg2IDExMy4yODYgMCAwIDEgMTMuMDU3LTkuODI4YzYuMzc3LTQuMTUxIDExLjEyLTYuMjI2IDE0LjIyOC02LjIyNi44MjUgMCAxLjYxMy40NDggMi4zNjUgMS4zNDUuNzY2LjkxMSAxLjE0OSAxLjgxNSAxLjE0OSAyLjcxMlpNNTM0IDEzNC40NzJ2MS45MDljLS41OTMuODI0LTEuMjQzIDEuMjM2LTEuOTUyIDEuMjM2LS40NDggMC0xLjk3NC0xLjM1OS00LjU3Ny00LjA3OC0yLjYwMi0yLjczMy00LjMzNy00LjEtNS4yMDUtNC4xIDAgLjA1OC0zLjA4IDEuMjQ0LTkuMjQgMy41NTgtNi4zMDQgMi4zNDMtMTAuMzE3IDMuNTE0LTEyLjAzOCAzLjUxNC0xLjQxNyAwLTIuOTg1LS42OTQtNC43MDYtMi4wODMtMS43MjEtMS4zNzQtMi41ODEtMi42NjgtMi41ODEtMy44ODMgMC0zLjEzOCAzLjQzNC02Ljc5NyAxMC4zMDItMTAuOTc3IDYuNDM1LTMuOTYzIDExLjM0NC01Ljk0NCAxNC43MjgtNS45NDQgMS40MTcgMCAyLjY4OS44MSAzLjgxNyAyLjQzdjEuODIyYy0uNTY0LjgxLTEuMjE1IDEuMjE1LTEuOTUyIDEuMjE1LS4xMyAwLS42MTUtLjE4MS0xLjQ1My0uNTQzLS44MzktLjM3Ni0xLjMzOC0uNTY0LTEuNDk3LS41NjQtMS4xMjggMC0zLjcxNiAxLjE2NS03Ljc2NSAzLjQ5My0zLjgzMiAyLjE2OS02LjM5OCAzLjc4OS03LjcgNC44Ni0xLjMwMSAxLjEyOC0yLjEzMiAyLjQxNS0yLjQ5NCAzLjg2MS45ODMuOTI2IDIuMTU1IDEuMzg4IDMuNTE0IDEuMzg4LjcwOCAwIDQuMTA2LTEuMTcxIDEwLjE5NC0zLjUxNCA2LjA3My0yLjM3MiA5Ljc0Ni0zLjU1OCAxMS4wMTgtMy41NTggMS44NjYgMCAzLjIxLjQ3IDQuMDM1IDEuNDEuMTg3LjIxNy45MDMgMS40OSAyLjE0NyAzLjgxOGEyMS45MDIgMjEuOTAyIDAgMCAwIDMuNDA1IDQuNzNaIi8+CiAgPC9nPgogIDxkZWZzPgogICAgPGNsaXBQYXRoIGlkPSJhIj4KICAgICAgPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTU4IDQ5aDQ3NnYxMDJINTh6Ii8+CiAgICA8L2NsaXBQYXRoPgogIDwvZGVmcz4KPC9zdmc+'

        function download(dataURL, filename) {
          const a = document.createElement('a')
          a.style.display = 'none'
          a.href = dataURL
          a.download = filename

          document.body.appendChild(a)
          a.click()
          a.remove()
        }

        function initSignatureDemo() {
          const signatures = window.tabler_signature ?? {}

          signatures.default?.fromDataURL(signatureImage)

          const advanced = signatures.advanced

          if (!advanced) {
            return
          }

          document.getElementById('signature-advanced-color')?.addEventListener('input', function (e) {
            advanced.penColor = e.target.value
          })

          document.getElementById('signature-advanced-svg')?.addEventListener('click', function () {
            download(advanced.toDataURL('image/svg+xml'), 'signature.svg')
          })

          document.getElementById('signature-advanced-png')?.addEventListener('click', function () {
            download(advanced.toDataURL(), 'signature.png')
          })
        }

        document.readyState !== 'loading' ? initSignatureDemo() : document.addEventListener('DOMContentLoaded', initSignatureDemo, { once: true })
      })()
    </script>
<script>
      ;(function () {
        const signatureKey = 'modal'
        const canvasId = 'signature-modal'
        const clearId = 'signature-modal-clear'
        const clear = true
        const event = 'shown.bs.modal'

        window.tabler_signature ??= {}

        function resizeCanvas(canvas, signaturePad) {
          const ratio = Math.max(window.devicePixelRatio || 1, 1)

          canvas.width = canvas.offsetWidth * ratio
          canvas.height = canvas.offsetHeight * ratio
          canvas.getContext('2d').scale(ratio, ratio)
          signaturePad.fromData(signaturePad.toData())
        }

        function initSignature() {
          const canvas = document.getElementById(canvasId)

          if (!canvas) {
            return
          }

          let signaturePad = window.tabler_signature[signatureKey]

          if (!signaturePad) {
            signaturePad = new SignaturePad(canvas, {
              backgroundColor: 'transparent',
              penColor: getComputedStyle(canvas).color,
            })

            window.tabler_signature[signatureKey] = signaturePad

            if (clear) {
              document.getElementById(clearId)?.addEventListener('click', function () {
                signaturePad.clear()
              })
            }

            window.addEventListener('resize', function () {
              resizeCanvas(canvas, signaturePad)
            })
          }

          resizeCanvas(canvas, signaturePad)
        }

        if (event === 'DOMContentLoaded') {
          document.readyState !== 'loading' ? initSignature() : document.addEventListener('DOMContentLoaded', initSignature, { once: true })
        } else {
          document.addEventListener(event, initSignature)
        }
      })()
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
