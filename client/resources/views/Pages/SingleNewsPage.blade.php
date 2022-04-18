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
                <div id="scrollMountDiv">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.4.1/jquery.appear.min.js" integrity="sha512-vYYoQJKYzaJQaOaYxaJhhmxikOJ2SEgHwmCNa0EMP0aRr7opdt4HHrorAwnCyPm8bdW/JBApIomo85YaBX81zA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let getUrl = MakeUrlFromBrowserUrlSegment()
        GetData(getUrl, function (response){
            if(response.status === 200){
                let news = response.data;
                News(news);
                BodyLoaderOFF();

            }else{
                console.log(response)
            }
        })

        function News(news){
            $('#news').append(`
                    <div class="news-item">
                        <h5 class="news-ticker">${news.ticker}</h5৫>
                        <h1 class="news-title">${news.title}</h1>
                        <h5 class="news-shoulder"><!-- News Shoulder Key Not Provide --></h5>
                        <hr style="height: 10px;width: 100px;background: #cecbcb;">
                        <h4 class="news-representative">${news.representative}</h4>
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
                        <div class="f-18 news-description">${news.details}</div>
                    </div>
                `)
        }



        ///////////////////////////////////////////

        var big = 300;
        var item = [];
        $(window).on("scroll", function() {
            //var scrollHeight = $(window).scrollTop();

            if(window.scrollY){
                if((big + 200) < window.scrollY){
                   big = window.scrollY;
                    //item.push(big);
                   //window.history.replace(big)
                   item.push(big);
                };
            }



            item.forEach(function (list){
                if(list === window.scrollY){
                    console.log(list)
                }
            })

            //console.log(item)


        })







    </script>

@endsection
