<div class="mt-5">
    <div class="section-container">
        <div class="border-top shadow-sm border-bottom border-secondary  p-2  d-flex justify-content-between align-items-center">
            <h4 class="m-0">বিনোদন</h4>
            <button class="btn btn-danger rounded-pill">সকল</button>
        </div>
    </div>
</div>


<div class="row section-container mt-2 ">
    <div class="col-12 col-sm-6 order-sm-2 col-md-6 col-lg-6 col-xl-3 order-md-2 order-lg-2 order-xl-1">
        <div class="card" id="enterLeftSubLead">

        </div>

        <div class="titleNews2 mt-2 border-left border-right">
            <a href="#" class="news link border-bottom mt-2 mb-2">
                <img class="image" src="{{asset('img/titleNews.jpg')}}">
                <div>
                    <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                    <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                </div>
            </a>
            <a href="#" class="news link border-bottom mt-2 mb-2">
                <img class="image" src="{{asset('img/titleNews.jpg')}}">
                <div>
                    <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                    <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                </div>
            </a>
            <a href="#" class="news link border-bottom mt-2 mb-2">
                <img class="image" src="{{asset('img/titleNews.jpg')}}">
                <div>
                    <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                    <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                </div>
            </a>
            <a href="#" class="news link border-bottom mt-2 mb-2">
                <img class="image" src="{{asset('img/titleNews.jpg')}}">
                <div>
                    <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                    <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                </div>
            </a>
        </div>
    </div>


    <div class="col-12 col-sm-12 order-sm-1 col-md-12 col-lg-12 col-xl-6 order-md-1 order-lg-1 order-xl-2">
        <div class="mt-2" style="padding-right: 0" id="enterFirstLead">
            <!--First Lead of Main Lead-->
        </div>

        <div class="row" id="enterAnotherLead">
            <!--First Lead of Main Lead-->
        </div>
    </div>



    <div class="col-12 col-sm-6 order-sm-3 col-md-6 col-lg-6 order-md-3 col-xl-3 order-lg-3 order-xl-3">
        <div class="card"  id="enterRightSubLead">
            <!--Right Sub Lead News-->
        </div>

        <div class="titleNews2 mt-2 border-left border-right">
            <a href="#" class="news link border-bottom mt-2 mb-2">
                <img class="image" src="{{asset('img/titleNews.jpg')}}">
                <div>
                    <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                    <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                </div>
            </a>
            <a href="#" class="news link border-bottom mt-2 mb-2">
                <img class="image" src="{{asset('img/titleNews.jpg')}}">
                <div>
                    <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                    <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                </div>
            </a>
            <a href="#" class="news link border-bottom mt-2 mb-2">
                <img class="image" src="{{asset('img/titleNews.jpg')}}">
                <div>
                    <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                    <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                </div>
            </a>
            <a href="#" class="news link border-bottom mt-2 mb-2">
                <img class="image" src="{{asset('img/titleNews.jpg')}}">
                <div>
                    <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                    <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</div>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    //Left Right Sub Lead News
    GetData('/get-all-news/6/sub_lead_news/2', function (response){
       if(response.status === 200){
           let data = response.data;
           for(let i = 0; i < data.length; i++){
               if(data[i].order === "1"){
                   $('#enterLeftSubLead').append(`
                    <img src="${data[i].image}" class="card-img"></img>
                    <div class="card-body">
                        <h5>${data[i].title}</h5>
                    </div>
                   `)
               }else if(data[i].order === "2"){
                   $('#enterRightSubLead').append(`
                        <img src="${data[i].image}" class="card-img"></img>
                        <div class="card-body">
                            <h5>${data[i].title}</h5>
                        </div>
                   `)
               }
           }
       }
    });

    //MainLeadNews
    GetData('/get-all-news/6/lead_news/5',function (response){
        if(response.status === 200){
            let data = response.data;
            let order = 6;

            for(let i = 0; i < data.length; i++){
                if(data[i].order === "1"){
                    $('#enterFirstLead').append(`
                        <a href="#" class="link overflow-hidden hover-zoom p-0 card newsCardOverlay position-relative">
                            <img class="card-img" style="object-fit: cover" src="${data[i].image}" >
                            <div  class="cardOverlay w-100 position-absolute" style="bottom: 0;">
                                <h4 class="card-title text-white p-2">${data[i].title}</h4>
                            </div>
                        </a>
                    `)
                }else{
                    for(let j = 2; j < order; j++){
                        if(data[i].order == j){
                            EnterAnotherLead(data[i].title, data[i].image);
                        }
                    }
                }
            }


            function EnterAnotherLead(title,image){
                $('#enterAnotherLead').append(`
                    <div class="col-6">
                        <div class="mt-2" style="padding-right: 0">
                            <a href="#" class="link overflow-hidden hover-zoom p-0 card newsCardOverlay position-relative">
                                <img class="card-img" style="object-fit: cover" src="${image}" >
                                <div  class="cardOverlay w-100 position-absolute" style="bottom: 0;">
                                    <h5 class="card-title text-white line-1 p-2">${title}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                `)
            }
        }
    })

</script>
