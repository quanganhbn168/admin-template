<x-preview.page :title='"Fullcalendar"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Fullcalendar</h1>
                </div>

                <div class="col-auto ms-auto d-print-none">
                  <a href="https://docs.tabler.io/ui/plugins/fullcalendar" target="_blank" rel="noopener" class="link-secondary">
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
                  <h2 class="card-title">Full calendar</h2>
                  <p class="card-subtitle">Drag to create an event, click one to edit it — populated here with sample events.</p>
                  <div id="calendar-default"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
<x-slot:scripts>
@verbatim
<script src="/tabler/libs/fullcalendar/index.global.min.js" defer></script>
<script>
      ;(function () {
        const calendarId = 'calendar-default'
        const sampleEventData = [
          { title: 'Offsite Retreat', start: [2, 9, 0], end: [4, 17, 0], color: 'var(--tblr-red)', backgroundColor: 'var(--tblr-red-lt)', borderColor: 'var(--tblr-red-200)' },
          { title: 'Monthly Planning', start: [1, 10, 0], end: [1, 11, 30] },
          { title: 'Marketing Strategy Call', start: [4, 14, 0], end: [4, 15, 0] },
          { title: 'Design Sprint', start: [7, 9, 0], end: [7, 12, 0] },
          { title: 'Dev Team Check-in', start: [10, 11, 0], end: [10, 11, 30] },
          { title: 'Customer Feedback Review', start: [13, 13, 0], end: [13, 14, 0] },
          { title: 'Mid-Month Review', start: [15, 10, 30], end: [15, 11, 30] },
          { title: 'Webinar: Product Update', start: [18, 16, 0], end: [18, 17, 0] },
          { title: 'Sales Training', start: [21, 9, 30], end: [21, 11, 0] },
          { title: 'Company All-Hands', start: [25, 15, 0], end: [25, 16, 0] },
          { title: 'End-of-Month Wrap-up', start: [31, 10, 0], end: [31, 11, 0] },
        ]

        function initCalendar() {
          const calendarEl = document.getElementById(calendarId)
          const currentYear = new Date().getFullYear()
          const currentMonth = new Date().getMonth()
          const toDate = ([day, hour, minute]) => new Date(currentYear, currentMonth, day, hour, minute)

          const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            ...(sampleEventData ? { events: sampleEventData.map((event) => ({ ...event, start: toDate(event.start), end: toDate(event.end) })) } : {}),
          })
          calendar.render()
        }

        document.readyState !== 'loading' ? initCalendar() : document.addEventListener('DOMContentLoaded', initCalendar, { once: true })
      })()
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
