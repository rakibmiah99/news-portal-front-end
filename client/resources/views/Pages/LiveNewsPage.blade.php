@extends('Layout.app')
@section('title', "Home")


@section('content')
    <div class="section-container mt-2">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-9">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item f-20"><a href="#">প্রচ্ছদ</a></li>
                    <li class="breadcrumb-item f-20"><a href="#">জাতীয়</a></li>
                </ul>

                <div id="news">

                </div>

                <div id="liveNews" class="mt-4">


                </div>

            </div>

            <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="position-sticky sticky-lg-top sticky-xl-top">
                    <!--               Advertise   --->
                    <div class="advertise mt-4 mb-3 text-center overflow-hidden">
                        <img  src="{{asset('img/300x300.gif')}}">
                    </div>


                    <div class="Title pt-2 pb-2 border-bottom border-top border-dark">
                        <h3 class="m-0">এই সপ্তাহের পাঠক প্রিয়</h3>
                    </div>

                    <div class="card titleNews2 mt-2 border-left border-right">
                        <a href="#" class="news link border-bottom">
                            <img class="image" src="{{asset('img/titleNews.jpg')}}">
                            <div>
                                <h5 class="title m-0">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                                <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                            </div>
                        </a>
                        <a href="#" class="news link border-bottom">
                            <img class="image" src="{{asset('img/titleNews.jpg')}}">
                            <div>
                                <h5 class="title m-0">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                                <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                            </div>
                        </a>
                        <a href="#" class="news link border-bottom">
                            <img class="image" src="{{asset('img/titleNews.jpg')}}">
                            <div>
                                <h5 class="title m-0">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                                <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                            </div>
                        </a>
                        <a href="#" class="news link border-bottom">
                            <img class="image" src="{{asset('img/titleNews.jpg')}}">
                            <div>
                                <h5 class="title m-0">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                                <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                            </div>
                        </a>
                        <a href="#" class="news link border-bottom">
                            <img class="image" src="{{asset('img/titleNews.jpg')}}">
                            <div>
                                <h5 class="title m-0">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                                <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let getUrl = MakeUrlFromBrowserUrlSegment()


        GetData(getUrl+"/"+100+"/"+0, function (response){
            if(response.status === 200){
                let news = response.data.news;
                let liveNews = response.data.live_news;

                News(news);

                liveNews.forEach(function (item){
                  LiveNews(item)
                })

            }
        })
        BodyLoaderOFF();


        function LiveNews(news){
            $('#liveNews').append(`
                    <div class="time-line-item position-relative">
                        <div class="time-line-content">
                            <div class="time-line-dot position-absolute"></div>
                            <div class="time-line-content-date">
                               ${site.localeFullDate(news.date)}
                            </div>
                            <div class="time-line-content-body pt-1 pb-1 titleNews2 border-0">
                                <a href="#" class="news link" style="padding-left: 0;">
                                    <h4 class="title m-0">${news.title}</h4>
                                </a>
                                <p>${news.details}</p>
                            </div>
                        </div>
                    </div>
            `)
        }

        function News(news){
            $('#news').append(`
                    <div class="news-item">
                        <h1 class="news-title">${news.title}</h1>
                        <hr style="height: 10px;width: 100px;background: #cecbcb;">
                        <h4 class="news-representative">আন্তর্জাতিক ডেস্ক</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="news-date">${site.localeFullDate(news.date)}</div>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link icon-link" href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link icon-link" href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link icon-link" href="#"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-link" href="#"><i class="fas fa-copy"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-link" href="#"><img src="https://cdn.dhakapost.com/media/common/google_news_180.png" height="20px" width="20px"> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-link" href="#"><i class="fas fa-print"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-link" href="#"><i>ফ+</i> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-link" href="#"><i>ফ-</i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="images news-image  mt-3 mb-2">
                            <img src="${news.image}" class="w-100">
                        </div>
                        <div class="f-18 news-description">${news.sort_description}</div>
                    </div>
                `)
        }
    </script>
@endsection
