<!DOCTYPE html>
<html lang="en">
<head>
    @include('shared/header')
</head>
<body>
    @include('shared/navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('shared/common-footer')
    @yield('footer')
</body>
</html>