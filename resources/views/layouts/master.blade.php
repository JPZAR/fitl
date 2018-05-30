<!DOCTYPE html>
<html>
    <head>
        <title>FITL - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    </head>
    <body>

        @include('shared.header')

        <div class="container">
            <p></p>
            @include('shared.errors')
            @include('shared.message')

            @yield('content')
        </div>

        @include('shared.footer')

        <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/delete_confirm.js')}}"></script>
    </body>
</html>