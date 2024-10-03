<!DOCTYPE html>
<html lang="EN">

<head> {{-- tu includujem layouty--}}
    @include('included.head')
</head>

<body>
    {{-- tu includujem navbar--}}
    @include('included.nav')
    <div class="container py-4">
         @yield('content')
    </div>

    @include('included.footer')

</body>

</html>
