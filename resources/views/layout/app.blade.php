<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield( 'titlePage' )</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <!-- includo l'header per tutte le pagine  -->
    @include('partials.header')

    <main>
        <!-- Contenuto variabile in base alle pagine -->
        @yield( 'contentHome' )
        <span class="test">ciao</span>

    </main>


    <!-- includo il footer per tutte le pagine  -->
    @include('partials.footer')
</body>
</html>