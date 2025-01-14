<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', __("titles.app_page"))</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div>
    @yield('content')
</div>

</body>
</html>

