<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('layout.entete_pages')
</head>

<body class="size-1140">
    <!-- MENU -->
    @include('layout.menu_pages_gest')

    <!-- MAIN -->
    <main role="main">
        <!-- Content -->
        @yield('content')      
    </main>

    @include('layout.pied_pages_gest')

</body>

</html>