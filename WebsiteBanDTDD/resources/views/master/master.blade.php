<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/copyRight.css')}}">
    <link rel="stylesheet" href="{{asset('css/dangnhap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dangky.css')}}">
    <link rel="stylesheet" href="{{asset('css/5g.css')}}">
    <link rel="stylesheet" href="{{asset('css/blow.css')}}">
    <link rel="stylesheet" href="{{asset('css/night.css')}}">
    <link rel="stylesheet" href="{{asset('css/sanpham.css')}}">
    <link rel="stylesheet" href="{{asset('css/gioithieu.css')}}">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet">
</head>
<body>
    
    @include('master.header')

    @yield('content')

    @include('master.footer')
    

</body>
</html>