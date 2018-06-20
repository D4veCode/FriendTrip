<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FriendTrip</title>
    
    <link href="{{asset('Meme.ico')}}" rel="icon" type="image/x-icon" >
   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

    <div class="main">
        <header class="index">
            @include('layouts.web.nav')
            @include('layouts.web.head')
        </header>
        @yield('content')
        
        @include('layouts.web.footer')

    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>