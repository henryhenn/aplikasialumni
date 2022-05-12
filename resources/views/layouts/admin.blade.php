<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Admin Dashboard</title>
    <link rel="stylesheet" href={{ asset('plugins/fontawesome-free/css/all.min.css') }}>
    <link rel="stylesheet" href={{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
    <link rel="stylesheet" href={{ asset('dist/css/adminlte.min.css') }}>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lobster&family=Nunito:ital,wght@0,300;0,700;0,800;1,400;1,700;1,800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        #title {
            font-family: 'Lobster', cursive;
        }

    </style>
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/27ce9fb29a.js" crossorigin="anonymous"></script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('admin.components.navbar')

        @include('admin.components.sidebar')

        <div class="content-wrapper" style="background-color: #334155;">
            <div class="content-header">
                <div class="container-fluid">
                    @if (session()->has('success'))
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" class="text-white"
                                        data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <span>{{ session('success') }}</span>
                                </div>
                            </div>
                        </div>
                    @elseif(session()->has('failed'))
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" class="text-white"
                                        data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <span>{{ session('failed') }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 font-weight-bold">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer bg-white">
            <strong>Copyright &copy; 2022 App Alumni</strong>
        </footer>
    </div>

    <script src={{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
    <script src={{ asset('dist/js/adminlte.js') }}></script>
    <script>
        function previewImage() {
            const image = document.querySelector("#image");
            const imgPreview = document.querySelector("#blah");

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>
