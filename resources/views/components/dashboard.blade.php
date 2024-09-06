<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/admin.css'])
</head>

<body>
    @include('sweetalert::alert')
    <div class="dashboard ">
        <x-sidebar-admin />
        <section class="content">
            <button class="openbtn text-white btn btn-dark mb-3" onclick="openNav()">☰</button>
            {{ $content }}
        </section>
    </div>
</body>
@stack('script')
<script>
    function openNav() {
        $(".sidebar").css("width", "300px");
        $(".sidebar").css("padding", "20px");
        $(".content").css("margin-left", "300px");
    }

    function closeNav() {
        $(".sidebar").css("width", "0px");
        $(".sidebar").css("padding", "0px");
        $(".content").css("margin-left", "0px");
    }
</script>

</html>
