<aside class="main-sidebar elevation-4" style="background-color: #0F172A">
    <a href="{{ url('admin/dashboard/home') }}" class="brand-link">
        <span class="brand-text font-weight-light mx-auto text-white" id="title">CKTC's Alumni</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/admin/dashboard/home') }}"
                        class="nav-link font-weight-bold {{ Request::is('admin/dashboard/home*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-house"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/dashboard/aktivitas') }}"
                        class="nav-link font-weight-bold {{ Request::is('admin/dashboard/aktivitas*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-solid fa-chart-line"></i>
                        <p>
                            Aktivitas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard/berita') }}"
                        class="nav-link font-weight-bold {{ Request::is('admin/dashboard/berita*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard/alumni') }}"
                        class="nav-link font-weight-bold {{ Request::is('admin/dashboard/alumni*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-group"></i>
                        <p>
                            Alumni
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard/galeri') }}"
                        class="nav-link font-weight-bold {{ Request::is('admin/dashboard/galeri*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Galeri
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard/status&tahun-lulus') }}"
                        class="nav-link font-weight-bold {{ Request::is('admin/dashboard/status&tahun-lulus*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-solid fa-screwdriver-wrench"></i>
                        <p>
                            Status & Tahun Lulus
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
