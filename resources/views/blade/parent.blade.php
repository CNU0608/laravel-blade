<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App nane @yield('title')</title>
</head>
<body>
    @section('sideBar')
        哈哈，我是来扯蛋的, 算提示吧看不到， 下边 艾特show 限制了哦
    @show
    <div class="container">
        @yield('content')
    </div>
</body>
</html>