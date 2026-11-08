<!DOCTYPE html>
<html data-rock-theme="{{ in_array(config('branding.theme_preset'), ['arix', 'blue', 'makima'], true) ? config('branding.theme_preset') : 'arix' }}">
    <head>
        <title>{{ config('app.name', 'BHUWAN') }}</title>

        @section('meta')
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="robots" content="noindex">
            <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png?v=bhuwan-ui-2">
            <link rel="icon" type="image/svg+xml" href="/favicons/bhuwan-mark.svg?v=bhuwan-ui-2">
            <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png?v=bhuwan-ui-2" sizes="16x16">
            <link rel="manifest" href="/favicons/manifest.json?v=bhuwan-ui-2">
            <link rel="mask-icon" href="/favicons/bhuwan-mark.svg?v=bhuwan-ui-2" color="#8b5cf6">
            <link rel="shortcut icon" href="/favicons/favicon.ico?v=bhuwan-ui-2">
            <meta name="msapplication-config" content="/favicons/browserconfig.xml?v=bhuwan-ui-2">
            <meta name="theme-color" content="#090712">
        @show

        @section('user-data')
            @if(!is_null(Auth::user()))
                <script>
                    window.PterodactylUser = {!! json_encode(Auth::user()->toVueObject()) !!};
                </script>
            @endif
            @if(!empty($siteConfiguration))
                <script>
                    window.SiteConfiguration = {!! json_encode($siteConfiguration) !!};
                </script>
            @endif
        @show

        @yield('assets')

        @include('layouts.scripts')
        <link rel="stylesheet" href="/themes/pterodactyl/css/rock-matte.css?v=bhuwan-2">
    </head>
    <body class="{{ $css['body'] ?? 'bg-neutral-50' }}">
        @section('content')
            @yield('above-container')
            @yield('container')
            @yield('below-container')
        @show
        @section('scripts')
            {!! $asset->js('main.js') !!}
        @show
    </body>
</html>
