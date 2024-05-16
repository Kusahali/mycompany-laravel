<!DOCTYPE html>
<html>
<head>
    <title>My Company</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
    
</head>
<body>
    <!-- Gọi code trang header -->
    @include('master.header')

    <!-- Nơi chứa nội dung thay đổi -->
    <div class="container">
        <div class="left-panel">
        @yield('content')
        </div>
        <div class="right-panel">
            <!-- Nội dung của bảng phải -->
            @yield('content1')
        </div>
    </div>
    
    <!-- Gọi code trang footer -->
    @include('master.footer')
</body>
</html>