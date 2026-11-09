<x-preview.page :title='"Scroll Spy"' :html-attrs='"lang=\"en\""'>
@verbatim
<!-- BEGIN PAGE HEADER -->

          <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h1 class="page-title">Scroll Spy</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE HEADER -->

          <!-- BEGIN PAGE BODY -->
          <div class="page-body">
            <div class="container-xl">
              <div class="row g-5">
                <div class="col-sm-2">
                  <div class="sticky-top">
                    <h2>Menu</h2>
                    <nav class="nav nav-vertical nav-pills" id="pills">
                      <a class="nav-link" href="#pills-home"> Home </a><a class="nav-link" href="#pills-profile"> Profile </a><a class="nav-link" href="#pills-messages"> Messages </a><a class="nav-link" href="#pills-settings"> Settings </a><a class="nav-link" href="#pills-about"> About </a
                      ><a class="nav-link" href="#pills-contact"> Contact </a><a class="nav-link" href="#pills-services"> Services </a><a class="nav-link" href="#pills-team"> Team </a><a class="nav-link" href="#pills-work"> Work </a>
                    </nav>
                  </div>
                </div>
                <div class="col-sm" data-bs-spy="scroll" data-bs-target="#pills" data-bs-offset="0">
                  <div class="card card-lg">
                    <div class="card-body">
                      <h2 id="pills-home">Home</h2>
                      <p>Welcome back. Here&#39;s a quick look at what&#39;s new since your last visit — three updates shipped, two conversations are waiting for a reply, and your weekly summary is ready below.</p>
                      <p class="mb-6">The dashboard pulls together everything you touched this week: recent files, comments left on your work, and the tasks you marked to revisit. Nothing here requires action unless you want it to.</p>
                      <h2 id="pills-profile">Profile</h2>
                      <p>Your profile is what teammates see when they open your card — name, role, and a short line about what you&#39;re working on. Keep it current; it&#39;s the first thing a new collaborator checks before reaching out.</p>
                      <p class="mb-6">Profile photos update automatically from your workspace avatar. If you&#39;d rather use a different image, upload one from the settings page and it will sync across every app connected to this account.</p>
                      <h2 id="pills-messages">Messages</h2>
                      <p>Conversations are grouped by project, so a thread never gets lost between unrelated channels. Mentions are highlighted, and anything addressed directly to you moves to the top of the list.</p>
                      <p class="mb-6">Replies you haven&#39;t read yet are marked with a dot. Archiving a conversation doesn&#39;t delete it — it just clears it from the active list until someone posts in it again.</p>
                      <h2 id="pills-settings">Settings</h2>
                      <p>Most defaults here are fine for everyday use, but a few are worth reviewing: notification frequency, default timezone, and who can see your activity status.</p>
                      <p class="mb-6">Changes save immediately — there&#39;s no separate &#39;apply&#39; step. If something looks wrong after a change, the history tab keeps the last ten versions of your settings so you can roll back.</p>
                      <h2 id="pills-about">About</h2>
                      <p>This project started as an internal tool for a five-person team and grew from there. The goal has stayed the same the whole time: make the boring parts of daily work take less time.</p>
                      <p class="mb-6">We ship small updates often rather than large releases a few times a year. That means the product changes gradually, but it also means feedback turns into fixes faster.</p>
                      <h2 id="pills-contact">Contact</h2>
                      <p>The fastest way to reach the team is the in-app chat — most questions get a reply within a few hours during business days. For anything urgent, use the priority line in your account settings.</p>
                      <p class="mb-6">Bug reports and feature requests both go to the same inbox, so include a short description of what you expected versus what happened. Screenshots help more than long explanations.</p>
                      <h2 id="pills-services">Services</h2>
                      <p>Onboarding, migration, and training are available as add-ons for teams moving from another tool. A specialist walks through your existing setup and maps it to the equivalent here before anything is switched over.</p>
                      <p class="mb-6">Ongoing support plans include a monthly check-in call, priority responses, and early access to features still in testing. Most teams start on the standard plan and upgrade once they&#39;ve settled in.</p>
                      <h2 id="pills-team">Team</h2>
                      <p>The team is spread across four time zones, which means someone is usually online to help. Each person owns a specific part of the product, listed on their profile.</p>
                      <p class="mb-6">We hire slowly and keep the team small on purpose — it&#39;s easier to keep quality high and response times short when fewer people need to stay in sync.</p>
                      <h2 id="pills-work">Work</h2>
                      <p>A selection of recent projects is listed below, newest first. Each entry links to a short write-up covering the problem, the approach, and what changed as a result.</p>
                      <p class="mb-6">Older work is archived rather than deleted, so nothing here disappears — it just moves further down the list as new projects are added.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PAGE BODY -->
@endverbatim
</x-preview.page>
