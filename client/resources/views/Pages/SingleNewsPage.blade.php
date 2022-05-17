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
                        <h3 class="m-0">এ সম্পর্কিত আরোও খবর</h3>
                    </div>

                    <div class="card titleNews2 mt-2 border-left border-right1" id="RelatedNews">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let getUrl = MakeUrlFromBrowserUrlSegment()
        // Related News
        GetData(`/get-related-news/${getUrl.split('/')[2]}/5/0}`, function (response){
            let data = response.data;
            if(response.data.length > 0){
                data.forEach(function (item){
                    $('#RelatedNews').append(`
                     <a href="/get-news/${item.id}" class="news link border-bottom">
                            <img style="height: 65px;" class="image" src="${item.image}">
                            <div>
                                <h5 class="title line-2" style="margin: 0!important;">${item.title}</h5>
                                <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(item.date)}</div>
                            </div>
                        </a>
                `)
                })
            }
        })


        GetData(getUrl, function (response){
            if(response.status === 200){
                let news = response.data;
                News(news,news.id);
                BodyLoaderOFF();
            }else{
                console.log(response)
            }
        })

        function News(news,newsID){
            $('#news').append(`
                    <div class="news-item" id="${newsID}">
                        <h5 class="news-ticker">${news.ticker}</h5৫>
                        <h1 class="news-title">${news.title}</h1>
                        <h5 class="news-shoulder"><!-- News Shoulder Key Not Provide --></h5>
                        <hr style="height: 10px;width: 100px;background: #cecbcb;">
                        <h4 class="news-representative">${news.representative}</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="news-date">${site.localeFullDate(news.date)}</div>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link icon-link" href="https://www.facebook.com/sharer/sharer.php?u=https://google.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link icon-link" href="http://twitter.com/share?text=text goes here&url=http://google.com" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link icon-link" href="whatsapp://send?text=http://www.google.com"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-link newsLinkCopy" href="whatsapp://send?text=http://www.google.com"><i class="fas fa-copy"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-link" href="#"><img src="https://cdn.dhakapost.com/media/common/google_news_180.png" height="20px" width="20px"> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-link newsPrintBtn" href="#"><i class="fas fa-print"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-link fontPlusBtn" href="#"><i>ফ+</i> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link icon-link fontMinusBtn" href="#"><i>ফ-</i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="images news-image  mt-3 mb-2">
                            <img src="${news.image}" class="w-100">
                        </div>
                        <div class="f-18 news-description">${news.details}</div>
                    </div>
                    <hr>
                `)
        }


        $(document).ready(function (){
            let fontsize = 18;
            let printID = 1;
            $('body').on('click','.fontPlusBtn', function (e){
                e.preventDefault();
                fontsize += 2;
                $('.news-description *').css({
                    fontSize: fontsize+"px"
                })
            })

            $('body').on('click','.fontMinusBtn', function (e){
                e.preventDefault();
                fontsize -= 2;
                $('.news-description *').css({
                    fontSize: fontsize+"px"
                })
            })

            $('body').on('click','.newsPrintBtn', function (e){
                printID += 1;
                e.preventDefault();
                let nav = $(this).parent().parent();
                nav.css('display','none')
                let printableNews = $(this).parent().parent().parent().parent();
                let newsTitle = printableNews.find('.news-title');
                var newWin=window.open('','Print-Window'+printID);

                newWin.document.open();

                newWin.document.write(`
                    <html>
                        <head>
                            <title>${newsTitle.html()}</title>
                        </head>

                        <body onload="window.print()">
                            <img height="100px" src="http://bnbd.rakibmia.com/img/logo-color.png">
                            ${printableNews.html()}
                        </body>
                    </html>
                `);

                newWin.document.close();
                nav.css('display','flex')

            })
        })


        ///////////////////////////////////////////
        var big = 0;
        let item = [];
        let current = null;
        let currentNewsID = urlSpilt = parseInt(getUrl.split('/')[2]);
        let newsIDs = [];
        let initialScrollValue = 1200;
        let smallerThenInitial = 0;
        $(window).on("scroll", function() {

            if(window.scrollY < initialScrollValue){
                if(smallerThenInitial ===1 && newsIDs.length > 0){
                    smallerThenInitial = 0;
                    ChangeUrl('Page1', newsIDs[0] - 1);
                    GetData('/get-news/'+ (newsIDs[0] - 1), function (response){
                        if(response.status === 200){
                            let news = response.data;
                            document.title = news.title;
                        }
                    })
                }
            }

            if((big + initialScrollValue) < window.scrollY){
                smallerThenInitial = 1;
                let newNews = currentNewsID+1;

                if(newsIDs.length < 7){
                    GetData('/get-news/'+newNews, function (response){
                        if(response.status === 200){
                            let news = response.data;
                            News(news,news.id);
                            BodyLoaderOFF();
                        }
                    })
                }


                big = window.scrollY;
                item.push(big);
                ChangeUrl('Page1', newNews);
                newsIDs.push(newNews)
                currentNewsID = newNews;
            }
            item.forEach(function (list){
                if(list < window.scrollY ){
                    current = list;
                }
            })

            item.forEach(function (list){
                if(list == current ){
                    current = list;
                }
            })
        })


        let oldValue = null;
        let isChange = false;
       setInterval(function (){
               if(isChange == false){
                   oldValue = current;
                   isChange = true;

                   if(item.length > 0){
                       item.forEach(function (i,index){
                           if(i === current){
                               ChangeUrl('Page1', newsIDs[index]);
                               GetData('/get-news/'+newsIDs[index], function (response){
                                   if(response.status === 200){
                                       let news = response.data;
                                       document.title = news.title;
                                   }
                               })
                           }
                       })
                   }
               }
               else if(isChange == true){
                   if(oldValue != current){
                       isChange = false;
                       // ChangeUrl('Page1', 'homePage');
                   }
               }
       }, 1)



        function ChangeUrl(page, url) {
            if (typeof (history.pushState) != "undefined") {
                var obj = {Page: page, Url: url};
                history.pushState(obj, obj.Page, obj.Url);
            }
        }
    </script>

@endsection
