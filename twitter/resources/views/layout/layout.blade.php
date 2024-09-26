<!DOCTYPE html>
<html lang="EN">

<head> {{-- tu includujem layouty--}}
    @include('layout.head')
</head>

<body>
    
    @include('layout.nav')
    
    <div class="container py-4">
         @yield('content')
    </div>

    @include('layout.footer')

</body>

</html>
