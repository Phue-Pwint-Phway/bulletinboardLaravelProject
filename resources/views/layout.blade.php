<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Layout</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="/css/layout.css">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        <p>Footer</p>
    </div>
</body>
</html>
