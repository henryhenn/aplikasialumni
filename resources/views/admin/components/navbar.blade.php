<nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #1E293B">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
            <a href="{{ url('admin/logout') }}" class="nav-link font-weight-bold"
                onclick="return confirm('Apakah Anda Yakin Ingin Logout?')">Logout &nbsp;<i
                    class="fas fa-solid fa-arrow-right-from-bracket"></i></a>
        </li>
    </ul>
</nav>
