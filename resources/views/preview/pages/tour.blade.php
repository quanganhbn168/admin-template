<x-preview.page :title='"Driver Tour"' :html-attrs='"lang=\"en\""'>
<x-slot:head>
@verbatim
<link href="/tabler/libs/driver.js/dist/driver.css" rel="stylesheet" />
@endverbatim
</x-slot:head>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Driver Tour</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="row row-cards">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">Product Tour Example</h2>

                      <div class="card-actions">
                        <button type="button" id="start-tour" class="btn btn-primary">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/player-play -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M7 4v16l13 -8l-13 -8" /></svg>Start Tour
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <p>Click the "Start Tour" button to begin an interactive tour of this page. The tour will guide you through different elements and features.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div id="tour-card-1" class="card">
                    <div class="card-header">
                      <h2 class="card-title">Welcome Section</h2>
                    </div>
                    <div class="card-body">
                      <p>This is the first card in our tour. It demonstrates how Driver.js highlights elements on the page.</p>
                      <div class="btn-list">
                        <button type="button" class="btn btn-primary">Action Button</button>
                        <button type="button" class="btn">Secondary</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div id="tour-card-2" class="card">
                    <div class="card-header">
                      <h2 class="card-title">Features Section</h2>
                    </div>
                    <div class="card-body">
                      <p>This card shows additional features and demonstrates the tour's ability to navigate between different elements.</p>
                      <div class="form-selectgroup">
                        <label class="form-selectgroup-item">
                          <input type="radio" name="options" value="1" class="form-selectgroup-input" checked />
                          <span class="form-selectgroup-label">Option 1</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="radio" name="options" value="2" class="form-selectgroup-input" />
                          <span class="form-selectgroup-label">Option 2</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div id="tour-card-3" class="card">
                    <div class="card-header">
                      <h2 class="card-title">Navigation Example</h2>
                    </div>
                    <div class="card-body">
                      <p>This is a full-width card that demonstrates how the tour works with larger elements.</p>
                      <div class="table-responsive">
                        <table class="table table-vcenter">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Role</th>
                              <th class="w-1"><span class="visually-hidden">Actions</span></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>John Doe</td>
                              <td><span class="badge bg-success text-success-fg">Active</span></td>
                              <td>Developer</td>
                              <td>
                                <a href="#" class="btn btn-sm">Edit</a>
                              </td>
                            </tr>
                            <tr>
                              <td>Jane Smith</td>
                              <td><span class="badge bg-warning text-warning-fg">Pending</span></td>
                              <td>Designer</td>
                              <td>
                                <a href="#" class="btn btn-sm">Edit</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div id="tour-card-4" class="card">
                    <div class="card-body text-center">
                      <div class="mb-3">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-lg">
                          <path
                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                          />
                          <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>
                      </div>
                      <h2 class="card-title">Settings</h2>
                      <p class="text-secondary">Configure your application settings here.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div id="tour-card-5" class="card">
                    <div class="card-body text-center">
                      <div class="mb-3">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/users -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-lg">
                          <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                          <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                      </div>
                      <h2 class="card-title">Users</h2>
                      <p class="text-secondary">Manage your team members and permissions.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div id="tour-card-6" class="card">
                    <div class="card-body text-center">
                      <div class="mb-3">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/chart-bar -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-lg">
                          <path d="M3 13a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -6" />
                          <path d="M15 9a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -10" />
                          <path d="M9 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -14" />
                          <path d="M4 20h14" />
                        </svg>
                      </div>
                      <h2 class="card-title">Analytics</h2>
                      <p class="text-secondary">View your application statistics and reports.</p>
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
<script src="/tabler/libs/driver.js/dist/driver.js.iife.js" defer></script>
<script>
      document.addEventListener('DOMContentLoaded', function () {
        const driverObj = driver.js.driver({
          allowClose: true,
          overlayClickNext: true,
          showButtons: ['next', 'previous', 'close'],
          showProgress: true,
          steps: [
            {
              element: '#start-tour',
              popover: {
                title: 'Welcome to the Tour!',
                description: 'This button starts the interactive tour. Click it to begin exploring the page.',
                side: 'bottom',
                align: 'start',
              },
            },
            {
              element: '#tour-card-1',
              popover: {
                title: 'Welcome Section',
                description: 'This is the first card in our tour. It demonstrates how Driver.js highlights elements on the page.',
                side: 'right',
                align: 'start',
              },
            },
            {
              element: '#tour-card-2',
              popover: {
                title: 'Features Section',
                description: "This card shows additional features and demonstrates the tour's ability to navigate between different elements.",
                side: 'left',
                align: 'start',
              },
            },
            {
              element: '#tour-card-3',
              popover: {
                title: 'Data Table',
                description: 'This table shows how Driver.js works with larger elements. You can highlight entire sections of your page.',
                side: 'top',
                align: 'center',
              },
            },
            {
              element: '#tour-card-4',
              popover: {
                title: 'Settings Card',
                description: 'This card demonstrates how the tour works with smaller, centered elements.',
                side: 'top',
                align: 'center',
              },
            },
            {
              element: '#tour-card-5',
              popover: {
                title: 'Users Card',
                description: 'Another example card showing user management features.',
                side: 'top',
                align: 'center',
              },
            },
            {
              element: '#tour-card-6',
              popover: {
                title: 'Analytics Card',
                description: 'The final step of the tour. This card shows analytics features.',
                side: 'top',
                align: 'center',
              },
            },
          ],
        })

        const startButton = document.getElementById('start-tour')
        if (startButton) {
          startButton.addEventListener('click', function () {
            driverObj.drive()
          })
        }
      })
    </script>
@endverbatim
</x-slot:scripts>
</x-preview.page>
