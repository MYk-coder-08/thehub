<nav id="sidebar" class="sidebar">
    <a class='sidebar-brand' href='index.html'>
        <img src="<?= asset('img/coronationx.png') ?>" alt="logo" style="width: 130px">
        Hub
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <img src="<?= asset('img/avatars/avatar.jpg') ?>" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
            <div class="fw-bold">Linda Miller</div>
            <small>Front-end Developer</small>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='calendar.html'>
                    <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Menus</span>
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-settings.html'>CEO</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-clients.html'>Staff <span
                                class="sidebar-badge badge rounded-pill bg-primary">Insurance</span></a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-invoice.html'>Agencies</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-pricing.html'>Gallery</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-tasks.html'>Documents</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-tasks.html'>Meetings</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='<?= url('back-help')?>'>Help and Support</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-chart-pie"></i> <span class="align-middle">Charts</span>
                    <span class="sidebar-badge badge rounded-pill bg-primary">New</span>
                </a>
                <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='charts-chartjs.html'>Chart.js</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='charts-apexcharts.html'>ApexCharts</a></li>
                </ul>
            </li>



            <li class="sidebar-header">
                Admins
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#documentation" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-cog"></i> <span class="align-middle">Setups</span>
                </a>
                <ul id="documentation" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='docs-getting-started.html'>Users</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='docs-plugins.html'>Roles</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='docs-changelog.html'>Categories</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='docs-changelog.html'>Sub Categories</a></li>

                </ul>
            </li>
        </ul>
    </div>
</nav>
