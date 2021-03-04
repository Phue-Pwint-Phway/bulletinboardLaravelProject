<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Layout</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/common_header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/post_list.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/create_post.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/update_post.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/user_list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create_user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/update_user.css') }}">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        <p>@Copyright</p>
    </div>
</body>
</html>
