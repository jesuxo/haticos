<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SISDATO - Sistema dado para todos" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">


    <title>https://www.grupohaticos.com - SISDATO</title>
    <meta name="description" content="GRUPO HATICOS">
    <link rel="canonical" href="https://www.grupohaticos.com">
    <meta property="og:title" content="https://www.grupohaticos.com - SISDATO">
    <meta property="og:description" content=" GRUPO HATICOS">
    <meta property="og:type" content="WebPage">
    <meta property="og:image" content="https://grupohaticos.com/build/images/logo.png">
    <meta property="og:url" content="https://grupohaticos.com">

    <meta name="twitter:title" content="https://www.grupohaticos.com - SISDATO ">
    <meta name="twitter:description" content=" GRUPO HATICOS ">
    <meta name="twitter:site" content="@grupohaticos">
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"GRUPO HATICOS","description":" "}</script>

    <!-- head css -->
    @include('layouts.head-css')
</head>

<body>

    <section
        class="auth-page-wrapper position-relative bg-light min-vh-100 d-flex align-items-center justify-content-between">


        <!--content here-->
        @yield('content')
    </section>

    <!--script-->
    @include('layouts.vendor-scripts')
</body>

</html>
