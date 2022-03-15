<html lang="en">
<head>
    <title>@yield('pageTitle')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/animate.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/datatables.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/toastr.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >

    <script type="text/javascript" src="{{asset('js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/axios.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/config.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/moment.js') }}"></script>
    <style>
        @font-face {
            font-family: SolaimanLipi;
            src: url({{asset("font/SolaimanLipi.ttf")}});
        }
    </style>
</head>
<body>
    @include('Layout.sitelead')
    @include('Layout.topmenu')
    <div id="tranding" class="section-container ">
        <div class="keywords mt-2 mb-2">
            <label style="margin-right: 10px;" class="f-18">ট্রেন্ডিংঃ </label>
            <a href="#" class="btn btn-sm btn-danger m-2">সার্চ কমিটি </a>
            <a href="#" class="btn btn-sm btn-danger m-2">সার্চ কমিটি </a>
            <a href="#" class="btn btn-sm btn-danger m-2">সার্চ কমিটি </a>
            <a href="#" class="btn btn-sm btn-danger m-2">সার্চ কমিটি </a>
            <a href="#" class="btn btn-sm btn-danger m-2">সার্চ কমিটি </a>
            <a href="#" class="btn btn-sm btn-danger m-2">সার্চ কমিটি </a>
            <a href="#" class="btn btn-sm btn-danger m-2">সার্চ কমিটি </a>
            <a href="#" class="btn btn-sm btn-danger m-2">সার্চ কমিটি </a>
        </div>
    </div>

    <div class="addBanner d-flex justify-content-center">
        <img src="{{asset("img/addBanner.gif")}}">
    </div>

    @include('Component.FirstLead')
    @include('Component.SecondLead')


    @include('Layout.sidemenu')
</body>
</html>

