<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> {{ config('app.name', 'Laravel') }} </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{ url('admin/css/all.css') }}">

{{--    <script>--}}
{{--        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :--}}
{{--            {};--}}
{{--        var themeName = themeSettings.themeName || '';--}}
{{--        if (themeName)--}}
{{--        {--}}
{{--            document.write('<link rel="stylesheet" id="theme-style" href="@asset_admin(css/app-' + themeName + '.css)">');--}}
{{--        }else{--}}
{{--            document.write('<link rel="stylesheet" id="theme-style" href="@asset_admin(css/app.css)">');--}}
{{--        }--}}
{{--    </script>--}}
</head>