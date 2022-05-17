<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content={{$Seo[0]->description}}>
    <meta name="keywords" content={{$Seo[0]->keywords}}>
    <meta name="author" content="Rabbil Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content={{$Seo[0]->title}}>
    <meta property="og:title" content={{$Seo[0]->share_title}} />
    <meta property="og:description" content={{$Seo[0]->description}} />
    <meta property="og:image" content={{$Seo[0]->page_img}}/>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/animate.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/datatables.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/toastr.min.css') }}" rel="stylesheet" type="text/css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.2/css/lightgallery-bundle.min.css" integrity="sha512-91yJwfiGTCo9TM74ZzlAIAN4Eh5EWHpQJUfvo/XhpH6lzQtiRFkFRW1W+JSg4ch4XW3/xzh+dY4TOw/ILpavQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/my-toast.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >

    <script type="text/javascript" src="{{asset('js/jquery.min.js') }}"></script>

{{--    Light Gallery--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.2/lightgallery.umd.min.js" integrity="sha512-e+39qUKXdaNAHHzMx+zHLald62YcdVqJpJGAqs6iIJ6RRWy5/9PKJr1eDAc3SuM/PTpguz9v2d83j6SFgnbTdg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.2/plugins/zoom/lg-zoom.min.js" integrity="sha512-YlxbbxLYdFLtzK1ly6wGbe3lCbFVJQK6p0YOtiW4Ebon7mNJ9ORBzUwOEzQOCC9T+efgMYQP+Rtw3BZTD5ql0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.2/plugins/video/lg-video.min.js" integrity="sha512-qM1isaAXKJADabHma45LqQZ5X/nwUasZf3yZCgAeTM8qpm/92MiHR5G/Agr72QEzVQaZyFsnEV3NWCukkvV6hA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mapdata.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/countrymap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mapscript.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/axios.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/config.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/moment.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/my-toast.js') }}"></script>
    <style>
        @font-face {
            font-family: SolaimanLipi;
            src: url({{asset("font/SolaimanLipi.ttf")}});
        }
    </style>
</head>
<body>


    <div id="BodyLoader">
        <div class="loader d-flex flex-column justify-content-center">
            <img height="60" class="loading-image" src="{{url('img/loading.svg')}}">
            <img height="30px" src="{{url("img/logo-color.png")}}">
        </div>
    </div>



    @include('Layout.sitelead')
    @include('Layout.topmenu')
    @yield('trending')

    @yield('content')

    @include('Layout.footer')
    @include('Layout.sidemenu')


{{--    <button id="toast-btn">Click me</button>--}}

</body>
</html>

