<div id="secondLead" class="section-container">
    <div class="row">
        <div  class="endNews col-12 sm-6 col-md-4 col-lg-3">
            <!-- Nav pills -->
            <ul class="nav border-bottom  mb-2  pb-1 pt-1 border-top nav-pills">
                <li class="nav-item">
                    <a class="nav-link text-dark active f-20" data-bs-toggle="pill" href="#home">সর্বশেষ</a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link text-dark f-20" data-bs-toggle="pill" href="#menu1">সর্বাধিক</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content endNewsItem">
                <div class="tab-pane p-0 container active" id="home">
                    <div class="titleNews2" id="SorbosesNews">
                        <!--- Sorboses News -->
                    </div>
                </div>
                <div class="tab-pane p-0 container fade" id="menu1">
                    <div class="titleNews2" id="SorbadikNews">
                        <!-- Sorbadik News -->
                    </div>
                </div>
            </div>

            {{--                Advertise--}}
            <div class="advertise mt-5 mb-3 text-center overflow-hidden">
                <img  src="{{asset('img/300x300.gif')}}">
            </div>
        </div>

        <div class=" col-12 sm-6 col-md-8 col-lg-9">
            <div class="row" id="secondLeadNews">
                <!--SECOND LEAD NEWS -->
            </div>
        </div>
    </div>
</div>

<script>


    HomeSecondLead();

    function HomeSecondLead(){
        GetData('/get-all-news/1/second_lead/9', function(response){
            if(response.status === 200){
                let data = response.data;
                let order = 9;
                for(let i = 0;i < data.length; i++){

                    for(let j = 0;j < order; j++){
                        if(data[i].order == j+1){
                            SecondLead(data[i].title, data[i].image, data[i].date);
                        }
                    }
                }
            }
            else{
                console.log(response)
            }

            function SecondLead(title,image,time){
                $('#secondLeadNews').append(`
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 p-2">
                    <a href="#" class="card link overflow-hidden w-100" style="width: 18rem;">
                        <img src="${image}" class="card-img-top img-fluid" alt="Tittle">
                        <div class="card-body">
                            <p class="card-text f-18">${title}</p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex f-13 align-items-center"><i class="fas fa-clock" style="margin-right: 5px"></i> ${moment(time).locale('bn').startOf('hour').fromNow()}</div>
                                <div class="f-13"><i class="fas fa-tags" style="margin-right: 5px"></i> অর্থনীতি </div>
                            </div>
                        </div>
                    </a>
                </div>
            `);
            }
        })

        GetData('/get-all-news/18/general/12', function (response){
            if(response.status === 200){
                let data = response.data;
                let order = 12;
                for(let i = 0; i < data.length; i++){
                    for(let j = 0; j < order ; j++){
                        if(data[i].order == j+1){
                            //console.log(j+1)
                            $('#SorbosesNews').append(`
                            <a href="#" class="news p-0 link border-bottom mt-2 mb-2">
                                <img class="image" src="${data[i].image}">
                                <div>
                                    <h5 class="title line-2" style="margin-bottom: 5px!important;">${data[i].title}</h5>
                                    <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(data[i].datae)}</p>
                                </div>
                            </a>
                        `);
                        }
                    }
                }
            }
        });


        GetData('/get-all-sorbadhik/12', function (response){
            if(response.status === 200){
                let data = response.data;
                for(let i = 0; i < data.length; i++){
                    $('#SorbadikNews').append(`
                    <a href="#" class="news p-0 link border-bottom mt-2 mb-2">
                        <img class="image" src="${data[i].image}">
                        <div>
                            <h5 class="title line-2" style="margin-bottom: 5px!important;">${data[i].title}</h5>
                            <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(data[i].datae)}</p>
                        </div>
                    </a>
                `);
                }

                BodyLoaderOFF();
            }
        });
    }
</script>
