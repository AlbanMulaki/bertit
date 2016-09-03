<!DOCTYPE html>
<html>
    <head>
        @include('layouts.include')
    </head>
    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper">
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </div>
        <script src="/assets/js/jquery-2.2.3.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.slimscroll.min.js"></script>
        <script src="/assets/js/app.min.js"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        @yield('scripts')
    </body>
</html>
