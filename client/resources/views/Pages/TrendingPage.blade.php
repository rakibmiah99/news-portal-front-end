@extends('Layout.app')
@section('title', "Local News")

@section('content')
    <div id="LocalNews" class="mt-4 section-container">
        <div class="row">
            <div class="col-12">
                <h1 id="TrendingName">ট্রেন্ডিং নেম</h1>
{{--                <hr style="background: #D8D8D8">--}}
                <hr style="background: black;height: 2px;">

                <div id="TrendingItems">

                </div>
            </div>
        </div>
    </div>

    <script>
        let url = MakeUrlFromBrowserUrlSegment();

        GetData(url+"/"+20, function (response){
            if(response.status === 200){
                let data = response.data;
                data.forEach(function (item){
                    $('#TrendingItems').append(`
                        <a href="/get-news/${item.id}" class="TrendingContent mt-2 link mb-2 d-flex justify-content-between pt-2 pb-2">
                            <div class="ContentText">
                                <h2>${item.title}</h2>
                                <p>${site.localeFullDate(item.date)}</p>
                                <p class="line-2">${item.sort_description}</p>
                            </div>
                            <div class="ContentImage" style="margin-left: 15px;">
                                <img style="height: 150px;width: 250px;object-fit: cover;" src="${item.image}">
                            </div>
                        </a>
                    `)
                })

            }
        })








        /*
        for(let i =0; i < 20;i++){
            GetData('/get-all-news/3/side_bar_news/6', function (res){
                console.log(res)
            });
        }

         */


    </script>

@endsection
