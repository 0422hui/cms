<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', config('system.common.basic.name', 'LaraCMS')) - {{ config('system.common.basic.name', config('app.name', 'LaraCMS')) }}</title>
        <meta name="description" content="{{ config('system.common.basic.description','') }}@hasSection('description') ,@endif @yield('description')">
        <meta name="Keywords" content="{{ config('system.common.basic.keywords','') }}@hasSection('keywords') ,@endif @yield('keywords')">
        {!! config('system.common.basic.meta','') !!}
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token()
        ]) !!};
        </script>
        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{ asset('css/foot.css') }}" rel="stylesheet">
        <link href="{{asset('vendor/laracms/plugins/layui/css/layui.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('vendor/laracms/css/website.css')}}" rel="stylesheet" type="text/css">
        <link rel="apple-touch-icon" href="/favicon.ico">
        <link rel="shortcut icon" href="/favicon.ico">
        <link href="{{ asset('vendor/laracms/css/new.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/laracms/css/head.css') }}" rel="stylesheet">
        @yield('styles')
    </head>
    <body  class="{{ route_class() }}-body">

        <div id="app" class="{{ route_class() }}-page">

            @include('frontend::layouts._header')

            <div id="content" class="{{ route_class() }}-content">
                <div class="">
                    @yield('tab')
                    {{--@include('frontend::layouts._breadcrumb')--}}
                    @yield('content')
                </div>
            </div>

            @include('frontend::layouts._footer')
        </div>

        <!-- Scripts -->
        <script src="{{asset('vendor/laracms/plugins/layui/layui.all.js')}}"></script>
        <script src="{{asset('vendor/laracms/js/website.js')}}"></script>
        <script src="{{asset('vendor/laracms/js/jQuery.js')}}"></script>

        @include('frontend::layouts._message')

        @include('frontend::layouts._error')

        @include('frontend::layouts._script')

        @yield('scripts')

        @include('frontend::layouts._statistics')
    </body>
</html>
