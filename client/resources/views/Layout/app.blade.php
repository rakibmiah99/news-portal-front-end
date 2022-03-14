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
    <link href="{{asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >

    <script type="text/javascript" src="{{asset('js/jquery.min.js') }}"></script>
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

    <div class="section-container">
        <div id="firstLead" class="mt-3 row  mb-3 d-flex justify-content-between">
            <div class="flLeft border-right col-12 col-sm-12 col-md-6 col-lg-3" >
                <div class="3news titleNews">
                    <a href="#" class="news border-bottom mt-2 mb-2">
                        <img class="image" src="{{asset('img/titleNews.jpg')}}">
                        <div>
                            <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                            <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                        </div>
                    </a>
                    <a href="#" class="news border-bottom mt-2 mb-2">
                        <img class="image" src="{{asset('img/titleNews.jpg')}}">
                        <div>
                            <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                            <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                        </div>
                    </a>
                    <a href="#" class="news  border-bottom mt-2 mb-2">
                        <img class="image" src="{{asset('img/titleNews.jpg')}}">
                        <div>
                            <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                            <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                        </div>
                    </a>
                </div>

{{--                Advertise--}}
                <div class="advertise mt-3 mb-3 text-center overflow-hidden">
                    <img  src="{{asset('img/300x300.gif')}}">
                </div>
            </div>

            <div href="#" class="flLead col-12 col-sm-12 col-md-12 col-lg-6">
                <a class="" href="#">
                    <img  class="image img-fluid" src="{{asset("img/flLead.webp")}}">
                    <h2>বিমানের জন্য যারা ‘ক্যান্সার’ তাদের চাকরিচ্যুত করাই উত্তম</h2>
                    <p>বিমানের জন্য যাদের কর্মকাণ্ড ও আচরণ ক্ষতিকর কিংবা যারা ক্যান্সারের মতো তাদের চাকরিচ্যুত করাই উত্তম। সিদ্ধান্তটা যত দ্রুত নেওয়া সম্ভব, তত িমানের জন্য যাদের কর্মকাণ্ড ও আচরণ ক্ষতিকর কিংবা যারা ক্যান্সারের মতো তাদের চাকরিচ্যুত করাই উত্তম। সিদ্ধান্তটা যত দ্রুত নেওয়া সম্ভব, তত...</p>
                </a>
                <div class="titleNews d-flex border-top">
                    <a href="#" class="news border-bottom mt-4 mb-2">
                        <img class="image" src="{{asset('img/titleNews.jpg')}}">
                        <div>
                            <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                            <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                        </div>
                    </a>
                    <a href="#" class="news border-bottom mt-2 mb-2">
                        <img class="image" src="{{asset('img/titleNews.jpg')}}">
                        <div>
                            <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                            <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="flRight col-12 col-sm-12 col-md-6 col-lg-3 border-left" >
                {{--                Advertise--}}
                <div class="advertise mt-3 mb-3 text-center overflow-hidden">
                    <img  src="{{asset('img/300x300.gif')}}">
                </div>

                <div class="motamot">
                    <h5 class="text-center p-2 border-top border-bottom fw-bold">মতামত</h5>
                    <ul  class="list-group list-group-flush">
                        <a href="#" class="list-group-item border-bottom list-group-item-action d-flex">
                            <img style="margin-right: 10px;" src="{{asset("img/motamot.jpg")}}" class="rounded-circle" height="80px" width="80px">
                            <div class="motamot-text">
                                <h5 class="m-0">আশামনির আত্মহত্যা : আমাদের দায় এড়ানোর সুযোগ কোথায়?</h5>
                                <p class="m-0 f-16 text-secondary">সৈয়দ ইশতিয়াক রেজা</p>
                            </div>
                        </a>
                    </ul>
                </div>

                <div class="corona">
                    <h5 class="text-center p-2 border-top border-bottom mt-3 fw-bold">করুনা আপডেট</h5>
                    <div class="text-center lh-lg">বাংলাদেশ</div>
                    <table class="table table-sm table-striped table-light">
                        <tr>
                            <td>মোট আকান্ত</td>
                            <td>:</td>
                            <td>২৫০০০</td>
                        </tr>
                        <tr>
                            <td>মোট সুস্থ</td>
                            <td>:</td>
                            <td>২৫০০০</td>
                        </tr>
                        <tr>
                            <td>আজকে আক্রান্ত</td>
                            <td>:</td>
                            <td>২৫০০০</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>


    @include('Layout.sidemenu')
</body>
</html>

