
<div id="national" class="row section-container justify-content-between">
    <div class="national col-12 col-md-8  mt-3 col-lg-9">
        <div class="nation-header d-flex justify-content-between align-items-center p-2 bg-light border-top border-bottom border-secondary shadow-sm">
            <h4 class="m-0" >জাতীয়</h4>
            <ul class="nav nav-tabs" role="tablist" id="NationalPills">
                <li class="nav-item">
                    <a class="nav-link NationalItem active" SubCategoryID="0" data-bs-toggle="tab" href="#allPloytics">সকল</a>
                </li>
            </ul>
            <button class="btn btn-danger rounded-pill">সকল</button>
        </div>

        <div class="row newsSectionContent mt-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xxl-4">
                <div id="nationlsideNews" class="titleNews2 row m-0 mt-4  border-left border-right">
                    <!-- National Side News -->
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-12  col-lg-8 col-xxl-8">
                <div class="row w-100" id="nationalLeadNews">
                    <!-- LEAD NEWS -->
                </div>
            </div>

        </div>

    </div>

    <div class="education col-12 col-md-4 mt-3 col-lg-3">
        <div style="padding-right: 40px!important;" class="nation-header  d-flex justify-content-between align-items-center p-2 bg-light border-top border-bottom border-secondary shadow-sm">
            <h4 class="m-0" style="padding-left: 10px;">শিক্ষা</h4>
            <button  class="btn btn-danger rounded-pill">সকল</button>
        </div>


        <div class="row newsSectionContent p-2 mt-3 ">
            <div class="col-12">
                <div class="w-100">
                    <div class="card mt-3 newsCardOverlay border-0 position-relative">
                        <img height="180px" style="object-fit: cover" src="{{asset("img/newsSection.jpg")}}" >
                        <div  class="cardOverlay position-absolute" style="bottom: 0;">
                            <h5 class="card-title text-white p-2">আবাহনীর ড্র, ছয় পয়েন্টে এগিয়ে গেল বসুন্ধরা </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12" style="padding-right: 10px;">
                <div class="titleNews2 mt-1 border-left border-right">
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
    HomeNational();

    function HomeNational(){
        PillsCategory('/category-by-id/3','#NationalPills','NationalItem');

        $('#NationalPills').on('click','.NationalItem',function (){
            BodyLoaderON();
            $('.NationalItem').removeClass('disabled')
            $(this).addClass('disabled')
            let id = $(this).attr('SubCategoryID');
            let LeadNews = $('#nationalLeadNews');
            let SideNews = $('#nationlsideNews');
            if(id === "0"){
                AllNationalNews();
            }else{
                GetData(`/get-all-news/${id}/lead_news/4/sub`, function (response){
                    if(response.status === 200){
                        LeadNews.empty();
                        let data = response.data;
                        if(data.length > 0){
                            let order = 5;
                            for(let i = 0; i < data.length; i++){
                                for(let j = 0; j < order; j++){
                                    if(data[i].order == j){
                                        NationalLead(data[i].title, data[i].image);
                                    }
                                }
                            }
                        }else{
                            LeadNews.append(ErrorNotFoundData())
                        }
                        BodyLoaderOFF()
                    }
                });

                //Side News
                GetData(`/get-all-news/${id}/side_bar_news/6/sub`,function (response){
                    if(response.status === 200){
                        SideNews.empty();
                        let data = response.data;
                        if(data.length > 0){
                            let order = 7;
                            for(let i = 0; i < data.length; i++){
                                for(let j = 0; j < order; j++){
                                    if(data[i].order == j+1){
                                        NationalSideNews(data[i].title,data[i].date);
                                    }
                                }
                            }
                        }else{
                            SideNews.append(ErrorNotFoundData())
                        }
                    }
                });
            }
        })




        GetData('/get-all-news/3/lead_news/4', function(response){
            if(response.status === 200){
                let data = response.data;
                let order = 5;
                for(let i = 0; i < data.length; i++){

                    for(let j = 0; j < order; j++){
                        if(data[i].order == j){
                            NationalLead(data[i].title, data[i].image);
                        }
                    }
                }
            }
        })


        GetData('/get-all-news/3/side_bar_news/6', function(response){
            if(response.status === 200){
                let data = response.data;
                let order = 7;
                for(let i = 0; i < data.length; i++){

                    for(let j = 0; j < order; j++){
                        if(data[i].order == j){
                            NationalSideNews(data[i].title,data[i].date);
                        }
                    }
                }

                BodyLoaderOFF();
            }
        })


        //functions
        function NationalLead(title,image){
            $('#nationalLeadNews').append(`
            <div class="mt-3 col-12 col-sm-6  col-md-6  col-lg-6  border-0" style="padding-right: 0">
               <a  href="#" class="link p-0 card newsCardOverlay position-relative">
                   <img height="220px" style="object-fit: cover" src="${image}" >
                   <div  class="cardOverlay w-100 position-absolute" style="bottom: 0;">
                       <h5 class="card-title text-white line-1 p-2">${title}</h5>
                   </div>
               </a>
            </div>
        `)
        }

        function NationalSideNews(title,date){
            $('#nationlsideNews').append(`
            <a href="#" class="news col-12 col-sm-6 p-2 pb-3  col-md-6 col-lg-12 link border-bottom">
                <div>
                    <h5 style="margin-bottom: 6px!important;" class="title line-1">${title}</h5>
                    <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(date)}</div>
                </div>
            </a>
        `)
        }


        function AllNationalNews(){
            let LeadNews = $('#nationalLeadNews');
            let SideNews = $('#nationlsideNews');
            GetData('/get-all-news/3/lead_news/4', function(response){
                if(response.status === 200){
                    LeadNews.empty();
                    let data = response.data;
                    let order = 5;
                    for(let i = 0; i < data.length; i++){

                        for(let j = 0; j < order; j++){
                            if(data[i].order == j){
                                NationalLead(data[i].title, data[i].image);
                            }
                        }
                    }
                }
            })


            GetData('/get-all-news/3/side_bar_news/6', function(response){
                if(response.status === 200){
                    SideNews.empty();
                    let data = response.data;
                    let order = 7;
                    for(let i = 0; i < data.length; i++){

                        for(let j = 0; j < order; j++){
                            if(data[i].order == j){
                                NationalSideNews(data[i].title,data[i].date);
                            }
                        }
                    }
                }
            })
        }
    }
</script>


