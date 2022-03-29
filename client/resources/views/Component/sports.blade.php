
<div class="row section-container" id="sports">
    <div class="col-12 col-md-12 col-lg-8 col-xl-9">
        <div class="bg-light mt-5 border-top border-bottom border-secondary shadow-sm">
            <div class="bg-light p-2  d-flex justify-content-between align-items-center">
                <h4 class="m-0">খেলা</h4>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu1">Menu 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu2">Menu 2</a>
                    </li>
                </ul>
                <button class="btn btn-danger rounded-pill">সকল</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-6 col-lg-7">
                <div id="sportsFirstLead">
                   <!--FIRST LEAD-->
                </div>

                <div class="mt-3">
                    <div class="titleNews2 mt-4 border-left border-right" id="firstSportSubNews">
                        <!--FIRST LEAD SUBNEWS -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card border newsCardOverlay position-relative" id="sportsSecondLead" style="height: 565px">
                    <!--SPORTS SECOND LEAD -->
                </div>
                <div>
                    <div id="sportsSecondLeadSubNews" class="titleNews2 mt-4 border-left border-right">

                        <!--
                        <a href="#" class="news link border-bottom mt-2 mb-2">
                            <img class="image" src="{{asset('img/titleNews.jpg')}}">
                            <div>
                                <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                                <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                            </div>
                        </a>
                        <a href="#" class="news link border-bottom mt-2 mb-2">
                            <img class="image" src="{{asset('img/titleNews.jpg')}}">
                            <div>
                                <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                                <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                            </div>
                        </a>
                        <a href="#" class="news link border-bottom mt-2 mb-2">
                            <img class="image" src="{{asset('img/titleNews.jpg')}}">
                            <div>
                                <h5 class="title">রাশিয়া-ইউক্রেন যুদ্ধের সর্বশেষ</h5>
                                <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                            </div>
                        </a>

                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-4 col-xl-3">
        <div class="bg-light mt-5 border-top border-bottom border-secondary shadow-sm">
            <div class="bg-light p-2  d-flex justify-content-between align-items-center">
                <h4 class="m-0">অনলাইন ভোট</h4>
                <button class="btn btn-danger rounded-pill">সকল</button>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-12">
                <div class="vs-slide-item" >
                    <div class="vote-section mt-3" style="height: 620px">
                        <button id="v-next" class="v-next v-action bg-white btn btn-outline-danger"><i class="fas fa-angle-left"></i> </button>
                        <button id="v-prev" class="v-prev v-action bg-white btn btn-outline-danger"><i class="fas fa-angle-right"></i> </button>
                        <div class=" h-100 card border border-danger vote">
                            <img src="{{asset("img/corona.jpg")}}" class="img-fluid" height="200px">
                            <div style="flex: 0;" class="card-body pt-3 pb-0">
                                <p class="f-18 m-0">সরকার নির্ধারিত দরে পাইকারি বাজারে সয়াবিন ও পাম তেল বেচাকেনা করতে খাতুনগঞ্জ বাণিজ্য ও শিল্প সমিতির নেতাদের আহ্বানে সাড়া পাওয়া যাবে কি?</p>
                            </div>

                            <div class="vote-select-area p-3 pt-1 pb-1 ">
                                <label for="vs1" class="vote-select  mt-3 d-block">
                                    <div style="width: 10%"  class="select-overlay"></div>
                                    <div class="vote-input d-flex align-items-center text-danger p-3 pt-1 pb-1">
                                        <input name="vs-input" id="vs1" type="radio" style="margin-right: 7px;">
                                        <label>হ্যা</label>
                                    </div>
                                </label>
                                <label for="vs2" class="vote-select  mt-3 d-block">
                                    <div style="width: 20%"   class="select-overlay"></div>
                                    <div class="vote-input d-flex align-items-center text-danger p-3 pt-1 pb-1">
                                        <input  name="vs-input" id="vs2" type="radio" style="margin-right: 7px;">
                                        <label>না</label>
                                    </div>
                                </label>
                                <label for="vs3" class="vote-select  mt-3 d-block">
                                    <div style="width: 70%"  class="select-overlay"></div>
                                    <div class="vote-input d-flex align-items-center text-danger p-3 pt-1 pb-1">
                                        <input  name="vs-input" id="vs3" type="radio" style="margin-right: 7px;">
                                        <label>মন্তব্য নেই </label>
                                    </div>
                                </label>
                            </div>

                            <div class="vote-buttons p-3">
                                <div class="vote-din text-center">
                                    <button class="btn btn-danger rounded-pill">ভোট দিন</button>
                                </div>

                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                    <button class="btn btn-outline-danger p-4 pt-1 pb-1 rounded-pill">শেয়ার</button>
                                    <button class="btn btn-outline-danger p-4 pt-1 pb-1  rounded-pill">এমবেড</button>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="vote-section mt-3" style="height: 620px">
                        <button id="v-next" class="v-next v-action bg-white btn btn-outline-danger"><i class="fas fa-angle-left"></i> </button>
                        <button id="v-prev" class="v-prev v-action bg-white btn btn-outline-danger"><i class="fas fa-angle-right"></i> </button>
                        <div class=" h-100 card border border-danger vote">
                            <img src="{{asset("img/corona.jpg")}}" class="img-fluid" height="200px">
                            <div style="flex: 0;" class="card-body pt-3 pb-0">
                                <p class="f-18 m-0">সরকার নির্ধারিত দরে পাইকারি বাজারে সয়াবিন ও পাম তেল বেচাকেনা করতে খাতুনগঞ্জ বাণিজ্য ও শিল্প সমিতির নেতাদের আহ্বানে সাড়া পাওয়া যাবে কি?</p>
                            </div>

                            <div class="vote-select-area p-3 pt-1 pb-1 ">
                                <label for="vs1" class="vote-select  mt-3 d-block">
                                    <div style="width: 10%"  class="select-overlay"></div>
                                    <div class="vote-input d-flex align-items-center text-danger p-3 pt-1 pb-1">
                                        <input name="vs-input" id="vs1" type="radio" style="margin-right: 7px;">
                                        <label>হ্যা</label>
                                    </div>
                                </label>
                                <label for="vs2" class="vote-select  mt-3 d-block">
                                    <div style="width: 20%"   class="select-overlay"></div>
                                    <div class="vote-input d-flex align-items-center text-danger p-3 pt-1 pb-1">
                                        <input  name="vs-input" id="vs2" type="radio" style="margin-right: 7px;">
                                        <label>না</label>
                                    </div>
                                </label>
                                <label for="vs3" class="vote-select  mt-3 d-block">
                                    <div style="width: 70%"  class="select-overlay"></div>
                                    <div class="vote-input d-flex align-items-center text-danger p-3 pt-1 pb-1">
                                        <input  name="vs-input" id="vs3" type="radio" style="margin-right: 7px;">
                                        <label>মন্তব্য নেই </label>
                                    </div>
                                </label>
                            </div>

                            <div class="vote-buttons p-3">
                                <div class="vote-din text-center">
                                    <button class="btn btn-danger rounded-pill">ভোট দিন</button>
                                </div>

                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                    <button class="btn btn-outline-danger p-4 pt-1 pb-1 rounded-pill">শেয়ার</button>
                                    <button class="btn btn-outline-danger p-4 pt-1 pb-1  rounded-pill">এমবেড</button>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-12">

                {{--                Advertise--}}
                <div class="advertise mt-4 mb-3 text-center">
                    <img  src="{{asset('img/300x300.gif')}}">
                </div>
            </div>
        </div>
    </div>
</div>




<script>

    //SPORT LEAD NEWS
    GetData('/get-all-news/4/lead_news/3',function(response){
        if(response.status === 200){
            let data = response.data;
            for(let i = 0; i < data.length; i++){
                if(data[i].order === "1"){
                    $('#sportsFirstLead').append(`
                         <a href="#" class="card link">
                            <img class="img-fluid" src="${data[i].image}" >
                            <div class="card-body">
                                <h3>${data[i].title}</h3>
                                <p>যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান</p>
                                <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                            </div>
                         </a>
                    `);
                }else if(data[i].order === "2"){
                    $('#sportsSecondLead').append(`
                         <img style="object-fit: cover;height: 100%; width: 100%;" src="${data[i].image}" class="img-fluid">
                          <div  class="cardOverlay w-100 position-absolute" style="bottom: 0;">
                               <h5 class="card-title text-white line-1 p-2">${data[i].title}</h5>
                           </div>
                    `)
                }
            }
        }

        function SportsFirstLead(){

        }
    })

    // SPORTS FIRST LEAD SUB NEWS
    GetData('/get-all-news/4/sub_lead_news/4',function(response){

        if(response.status === 200){
            let data = response.data;
            let order = 5;
            for(let i = 0; i < data.length; i++){

                for(let j = 0; j < order; j++){
                    if(data[i].order == j){
                        FirstLeadSubNews(data[i].title,data[i].image,data[i].date);
                    }
                }

                function FirstLeadSubNews(title,image,time){
                    $('#firstSportSubNews').append(`
                         <a href="#" class="news link border-bottom mt-2 mb-2">
                            <img class="image" src="${image}">
                            <div>
                                <h5 class="title">${title}</h5>
                                <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(time)}</p>
                            </div>
                        </a>
                    `)
                }
            }
        }
    })

    // SPORTS SECOND LEAD SUB NEWS
    GetData('/get-all-news/4/second_lead/3',function(response){

        if(response.status === 200){
            let data = response.data;
            let order = 4;
            for(let i = 0; i < data.length; i++){

                for(let j = 0; j < order; j++){
                    if(data[i].order == j){
                        SecondLeadSubNews(data[i].title,data[i].image,data[i].date);
                    }
                }

                function SecondLeadSubNews(title,image,time){
                    $('#sportsSecondLeadSubNews').append(`
                         <a href="#" class="news link border-bottom mt-2 mb-2">
                            <img class="image" src="${image}">
                            <div>
                                <h5 class="title">${title}</h5>
                                <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(time)}</p>
                            </div>
                        </a>
                    `)
                }
            }
        }
    })
    $(document).ready(function(){
        $('.vs-slide-item').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            // autoplay: true,
            // autoplaySpeed: 2000,
            nextArrow: '.v-next',
            prevArrow: '.v-prev'
        });
    });
</script>
