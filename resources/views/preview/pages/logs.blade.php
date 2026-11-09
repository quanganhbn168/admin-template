<x-preview.page :title='"Logs"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Logs</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2>Checked URL</h2>
                      <div>
                        <pre><code>GET <a class="text-reset" target="_blank" href="https://preview.tabler.io">https://preview.tabler.io</a></code></pre>
                      </div>

                      <h2>Request Timing</h2>
                      <div>
                        <pre>Effective URL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="text-reset" target="_blank" href="https://preview.tabler.io">https://preview.tabler.io</a><br>Redirect count&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0<br>Name lookup time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.4e-05<br>Connect time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.000521<br>Pre-transfer time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0<br>Start-transfer time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0<br>App connect time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0<br>Redirect time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.0<br>Total time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28.000601<br>Response code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0<br>Return keyword&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;operation_timedout</pre>
                      </div>

                      <h2>Response Headers</h2>
                      <div>
                        <pre>HTTP/1.1 200 Connection established</pre>
                      </div>
                    </div>
                    <div class="card-footer">
                      <h2>Escalation</h2>
                      <div>Entire team</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h2>Application Log</h2>
                      <div>
                        <pre><code>2024-01-15 14:23:45 [INFO] Application started successfully
2024-01-15 14:23:46 [DEBUG] Database connection established
2024-01-15 14:23:47 [INFO] User authentication successful: user_id=12345
2024-01-15 14:23:48 [WARNING] Rate limit approaching: 85% of quota used
2024-01-15 14:23:49 [ERROR] Failed to process payment: transaction_id=tx_789
2024-01-15 14:23:50 [INFO] Cache cleared: keys=1523
2024-01-15 14:23:51 [DEBUG] API request completed: endpoint=/api/users, duration=234ms</code></pre>
                      </div>

                      <h2>Log Levels</h2>
                      <div class="badge-list mb-2">
                        <span class="badge bg-success text-success-fg">INFO</span>
                        <span class="badge bg-warning text-warning-fg">WARNING</span>
                        <span class="badge bg-danger text-danger-fg">ERROR</span>
                        <span class="badge bg-secondary text-secondary-fg">DEBUG</span>
                      </div>
                    </div>
                    <div class="card-footer">
                      <h2>Log Source</h2>
                      <div>Application Server (prod-01)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
