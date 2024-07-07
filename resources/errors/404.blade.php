<!DOCTYPE html>

<html
    lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('/') }}" data-template="vertical-menu-template-free">

<head>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="Wedding Sitronella & Waluyo. 10 Agustus 2024 di Asrama Haji Bandar Lampung.">
    <meta name="author" content="">
    <meta name="email" content="">
    <meta name="copyright" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024 | Asrama Haji, Bandar Lampung" />
    <meta property="og:description"
        content="Wedding Sitronella & Waluyo. 10 Agustus 2024 di Asrama Haji Bandar Lampung." />
    <meta property="og:image" content="{{ asset('images/wedding.png') }}" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <meta property="og:site_name" content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024" />
    <meta name="twitter:card" content="website">
    <meta name="twitter:site" content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024">
    <meta name="twitter:title" content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024">
    <meta name="twitter:description"
        content="Wedding Sitronella & Waluyo. 10 Agustus 2024 di Asrama Haji Bandar Lampung.">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image" content="">

    <title>404 {{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <!-- Content -->

    <!-- Error -->
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h2 class="mb-2 mx-2">Page Not Found :(</h2>
            <p class="mb-4 mx-2">Oops! 😖 The requested URL was not found on this server.</p>
            @if (@\Auth::user()->id)
                <a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Back to home</a>
            @endif
        </div>
    </div>
    <!-- /Error -->

</body>

</html>
