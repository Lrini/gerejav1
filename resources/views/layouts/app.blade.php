<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title', 'GKPKR Kupang')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('home-landingpage/assets/favicon.ico') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('home-landingpage/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        @include('navbar.navbar') <!--memanggil navbar dari navbar/navbar.blade.php-->

        <!-- Main content -->
        <main class="py-5">
            @yield('content') <!--memanggil konten dari halaman yang menggunakan layout ini-->
        </main>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Gereja Kristen Protestan Kehdupan Rohani</p></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('home-landingpage/js/scripts.js') }}"></script>
    </body>
</html>
