<x-preview.page :title='"Task List"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Task List</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h2 class="card-title mb-0">Upcoming</h2>
                      <div class="card-actions">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-add-task" class="btn btn-sm">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" /></svg
                          >New Task
                        </button>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table table-selectable">
                        <thead>
                          <tr>
                            <th class="w-1">
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select all" />
                            </th>
                            <th class="w-50">Name</th>
                            <th class="d-none d-xl-table-cell">Assigned To</th>
                            <th class="d-none d-xxl-table-cell">Due Date</th>
                            <th>Priority</th>
                            <th class="text-end">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Improve email marketing strategy" />
                            </td>
                            <td>Improve email marketing strategy</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Emmy Levet</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              August 1, 2023
                            </td>
                            <td><span class="badge bg-yellow-lt">Medium</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Develop new product video" />
                            </td>
                            <td>Develop new product video</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Jeffie Lewzey</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              July 15, 2023
                            </td>
                            <td><span class="badge bg-red-lt">High</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Conduct user interviews for new feature" />
                            </td>
                            <td>Conduct user interviews for new feature</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Mallory Hulme</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              June 20, 2023
                            </td>
                            <td><span class="badge bg-blue-lt">Low</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Create social media content calendar" />
                            </td>
                            <td>Create social media content calendar</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/001f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Maryjo Lebarree</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              September 5, 2023
                            </td>
                            <td><span class="badge bg-yellow-lt">Medium</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Review and update documentation" />
                            </td>
                            <td>Review and update documentation</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/003m.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Dunn Slane</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              July 25, 2023
                            </td>
                            <td><span class="badge bg-yellow-lt">Medium</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Plan quarterly team meeting" />
                            </td>
                            <td>Plan quarterly team meeting</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/004m.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Egan Poetz</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              August 20, 2023
                            </td>
                            <td><span class="badge bg-blue-lt">Low</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Redesign product landing page" />
                            </td>
                            <td>Redesign product landing page</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/002f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Kellie Skingley</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              September 1, 2023
                            </td>
                            <td><span class="badge bg-red-lt">High</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-header">
                      <h2 class="card-title mb-0">In Progress</h2>
                      <div class="card-actions">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-add-task" class="btn btn-sm">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" /></svg
                          >New Task
                        </button>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table table-selectable">
                        <thead>
                          <tr>
                            <th class="w-1">
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select all" />
                            </th>
                            <th class="w-50">Name</th>
                            <th class="d-none d-xl-table-cell">Assigned To</th>
                            <th class="d-none d-xxl-table-cell">Due Date</th>
                            <th>Priority</th>
                            <th class="text-end">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Implement new analytics tracking" />
                            </td>
                            <td>Implement new analytics tracking</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/052f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Jeffie Lewzey</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              July 1, 2023
                            </td>
                            <td><span class="badge bg-blue-lt">Low</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Design new marketing campaign" />
                            </td>
                            <td>Design new marketing campaign</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Mallory Hulme</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              August 15, 2023
                            </td>
                            <td><span class="badge bg-red-lt">High</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Conduct A/B testing on landing page" />
                            </td>
                            <td>Conduct A/B testing on landing page</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Emmy Levet</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              June 30, 2023
                            </td>
                            <td><span class="badge bg-blue-lt">Low</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Implement user authentication system" />
                            </td>
                            <td>Implement user authentication system</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/003f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Christabel Charlwood</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              July 20, 2023
                            </td>
                            <td><span class="badge bg-red-lt">High</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Write blog post about product launch" />
                            </td>
                            <td>Write blog post about product launch</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/063m.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Haskel Shelper</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              August 5, 2023
                            </td>
                            <td><span class="badge bg-yellow-lt">Medium</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Update customer onboarding flow" />
                            </td>
                            <td>Update customer onboarding flow</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/006m.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Lorry Mion</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              July 12, 2023
                            </td>
                            <td><span class="badge bg-yellow-lt">Medium</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Setup automated testing pipeline" />
                            </td>
                            <td>Setup automated testing pipeline</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/004f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Leesa Beaty</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              August 25, 2023
                            </td>
                            <td><span class="badge bg-red-lt">High</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Review customer support tickets" />
                            </td>
                            <td>Review customer support tickets</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/007m.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Perren Keemar</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              July 8, 2023
                            </td>
                            <td><span class="badge bg-blue-lt">Low</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-header">
                      <h2 class="card-title mb-0">Completed</h2>
                      <div class="card-actions">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-add-task" class="btn btn-sm">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" /></svg
                          >New Task
                        </button>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table table-selectable">
                        <thead>
                          <tr>
                            <th class="w-1">
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select all" />
                            </th>
                            <th class="w-50">Name</th>
                            <th class="d-none d-xl-table-cell">Assigned To</th>
                            <th class="d-none d-xxl-table-cell">Due Date</th>
                            <th>Priority</th>
                            <th class="text-end">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Optimize website performance" />
                            </td>
                            <td>Optimize website performance</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/002m.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Mallory Hulme</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              June 15, 2023
                            </td>
                            <td><span class="badge bg-blue-lt">Low</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Develop mobile app prototype" />
                            </td>
                            <td>Develop mobile app prototype</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Emmy Levet</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              August 10, 2023
                            </td>
                            <td><span class="badge bg-yellow-lt">Medium</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Conduct user research interviews" />
                            </td>
                            <td>Conduct user research interviews</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/000f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Emmy Levet</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              July 20, 2023
                            </td>
                            <td><span class="badge bg-blue-lt">Low</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Migrate database to new server" />
                            </td>
                            <td>Migrate database to new server</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span class="avatar avatar-xs me-2">SA</span>
                                <span>Sunny Airey</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              June 10, 2023
                            </td>
                            <td><span class="badge bg-yellow-lt">Medium</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Launch new marketing website" />
                            </td>
                            <td>Launch new marketing website</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/009m.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Geoffry Flaunders</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              May 30, 2023
                            </td>
                            <td><span class="badge bg-red-lt">High</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Complete annual security audit" />
                            </td>
                            <td>Complete annual security audit</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/010m.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Thatcher Keel</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              May 25, 2023
                            </td>
                            <td><span class="badge bg-red-lt">High</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Design new company logo" />
                            </td>
                            <td>Design new company logo</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/005f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Dyann Escala</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              April 15, 2023
                            </td>
                            <td><span class="badge bg-blue-lt">Low</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Write technical documentation" />
                            </td>
                            <td>Write technical documentation</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span style="background-image: url(/tabler/static/avatars/006f.jpg)" class="avatar avatar-xs me-2"></span>
                                <span>Avivah Mugleston</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              June 5, 2023
                            </td>
                            <td><span class="badge bg-yellow-lt">Medium</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" class="form-check-input align-middle table-selectable-check" aria-label="Select task Organize team building event" />
                            </td>
                            <td>Organize team building event</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span class="avatar avatar-xs me-2">AA</span>
                                <span>Arlie Armstead</span>
                              </div>
                            </td>
                            <td class="text-secondary">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon me-1 icon-inline">
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                              </svg>
                              April 20, 2023
                            </td>
                            <td><span class="badge bg-blue-lt">Low</span></td>
                            <td class="text-end">
                              <button type="button" class="btn btn-sm">View</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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

    <!-- BEGIN MODAL -->
    <div class="modal modal-blur fade" id="modal-add-task" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-add-task-title" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="modal-add-task-title">Add task</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label class="form-label" for="tasks-list-add-task-name"> Name </label>

                <input type="text" class="form-control" id="tasks-list-add-task-name" placeholder="Task name" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="tasks-list-add-task-assigned"> Assigned To </label>

                <select class="form-select" id="tasks-list-add-task-assigned">
                  <option value="">Select person</option>
                  <option value="5">Emmy Levet</option>
                  <option value="6">Maryjo Lebarree</option>
                  <option value="2">Jeffie Lewzey</option>
                  <option value="3">Mallory Hulme</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label" for="tasks-list-add-task-priority"> Priority </label>

                <select class="form-select" id="tasks-list-add-task-priority">
                  <option value="Low">Low</option>
                  <option value="Medium">Medium</option>
                  <option value="High">High</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label" for="tasks-list-add-task-description"> Description </label>

                <textarea class="form-control" id="tasks-list-add-task-description" rows="3" placeholder="Task description"></textarea>
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Save</button>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL -->

    <!-- END PAGE MODALS -->
@endverbatim
</x-preview.page>
