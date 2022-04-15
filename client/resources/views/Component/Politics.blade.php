
<div id="section-nav" class="bg-light border-top border-bottom mt-3 shadow-sm">
    <nav class="navbar section-container p-0 navbar-light navbar-expand-md  d-none d-md-block">
        <div class="container-fluid">
            <div class="collapse p-2  navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <h4 class="m-0">রাজনীতি</h4>
                <ul class="nav nav-tabs" role="tablist" id="PoliticsPills">
                    <li class="nav-item">
                        <a class="nav-link PoliticsItem active" SubCategoryID="0" data-bs-toggle="tab" href="#allPloytics">সকল</a>
                    </li>
                </ul>
                <button class="btn btn-danger rounded-pill">সকল</button>
            </div>
        </div>
    </nav>
</div>

<div id="politics" class="section-container" style="min-height: 610px;">
    <div class="row mt-3" id="allPloytics">
        <div class="pLeadNes col-12 col-sm-12 col-md-7 col-lg-6">
            <div class="row" id="politicsLeadNews">
               <!--POLITICS LEAD NEWS-->
            </div>
        </div>
        <div class="psLeadNews col-12 col-sm-12 col-md-5 col-lg-3">
            <div class="titleNews2 mt-3" id="politicsSideNews">
               <!--POLITICS SIDE NEWS-->
            </div>
        </div>
        <div id="areaFilter" class="mapArchive mt-3 col-12 col-sm-12 col-md-12 col-lg-3">
            <div class="row justify-content-md-between  justify-content-center">
                <div class="col-12 col-md-6 mt-1" id="map"></div>
                <div class="areaChose col-12 col-md-6 col-lg-12  mt-3">
                    <h3 class="text-center mt-3 border-bottom border-top bg-light p-2">আমাদের খবর</h3>
                    <form action="/LocalNews" method="get" class="form mt-3">
                        <select name="division" class="form-select shadow-none mt-3" id="division" aria-label="Default select example">
                            <option  selected value="">বিভাগ</option>
                        </select>
                        <select name="district" class="form-select shadow-none mt-3" id="district" aria-label="Default select example">
                            <option  selected value="">জেলা </option>
                        </select>
                        <select name="upozela" id="upazila" class="form-select shadow-none mt-3" aria-label="Default select example">
                            <option  selected value="">উপজেলা </option>
                        </select>
                        <button class="btn btn-danger shadow-none text-center mt-3 w-100">খুজুন</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



{{--ADVERTISE SECTION--}}
<div class="addBanner mt-5 mb-5 d-flex justify-content-center">
    <img src="{{asset("img/bigBanner.png")}}">
</div>


<script>

    PillsCategory('/category-by-id/2','#PoliticsPills','PoliticsItem')
    /*
    GetData('/category-by-id/2',function (response){
        if(response.status === 200){
            let subCategories = response.data.sub_categories;
            let pills = $('#PoliticsPills');
            subCategories.forEach(function (item,index){
                if(subCategories[index].visible == "1"){
                    pills.append(`
                     <li class="nav-item">
                        <a class="nav-link PoliticsItem" data-bs-toggle="tab" SubCategoryID="${item.id}" href="#">${item.name}</a>
                    </li>
                `)
                }
            })
        }
    })
   */

    $('#PoliticsPills').on('click','.PoliticsItem',function (){
        $('.PoliticsItem').removeClass('disabled')
        $(this).addClass('disabled')
        let id = $(this).attr('SubCategoryID');
        let politicsLeadNews = $('#politicsLeadNews');
        let politicsSideNews = $('#politicsSideNews');
        if(id === "0"){
            AllPoliticsNews();
        }else{
            GetData(`/get-all-news/${id}/lead_news/4/sub`, function (response){
                if(response.status === 200){
                    politicsLeadNews.empty();
                    let data = response.data;
                    if(data.length > 0){
                        let order = 5;
                        for(let i = 0; i < data.length; i++){
                            for(let j = 0; j < order; j++){
                                if(data[i].order == j){
                                    PoliticsLeadNews(data[i].title, data[i].sort_description , data[i].image, data[i].date);
                                }
                            }
                        }
                    }else{
                        politicsLeadNews.append(ErrorNotFoundData())
                    }
                }
            });

            //Side News
            GetData(`/get-all-news/${id}/side_bar_news/7/sub`,function (response){
                if(response.status === 200){
                    politicsSideNews.empty();
                    let data = response.data;
                    if(data.length > 0){
                        let order = 7;
                        for(let i = 0; i < data.length; i++){
                            for(let j = 0; j < order; j++){
                                if(data[i].order == j+1){
                                    PoliticsSideNews(data[i].title, data[i].image, data[i].date);
                                }
                            }
                        }
                    }else{
                        politicsSideNews.append(ErrorNotFoundData())
                    }
                }
            });
        }
    })


    AllPoliticsNews()



    //Area Filter
    GetData('/get-all-divisions', function (response){
       if(response.status === 200){
           let data = response.data;
           data.forEach(function (item){
               $('#division').append(`
                <option value="${item.id}">${item.bn_name}</option>
               `)
           })
       }
    });

    //Division Wise District
    $('#areaFilter').on('change','#division', function(){
        let divisionID = $(this).val();
        $('#district').empty();
        $('#upazila').empty();
        $('#upazila').append(`<option value="">উপজেলা</option>`)
        $('#district').append(`<option value="">জেলা</option>`)
        GetData('/get-all-district-by-division/'+divisionID, function (response){
            if(response.status === 200){
                let data = response.data;
                data.forEach(function (item){
                    $('#district').append(`
                        <option value="${item.id}">${item.bn_name}</option>
                    `)
                })
            }
        });
    });



    //District Wise Upazila
    $('#areaFilter').on('change','#district', function(){
        let districtID = $(this).val();
        $('#upazila').empty();
        $('#upazila').append(`<option value="">উপজেলা</option>`)
        GetData('/get-all-upozilla-by-district/'+districtID, function (response){
            if(response.status === 200){
                let data = response.data;
                data.forEach(function (item){
                    $('#upazila').append(`
                        <option value="${item.id}">${item.bn_name}</option>
                    `)
                })
            }
        });
    });




    //functions
    function PoliticsLeadNews(title, subTitle, image, time){
        $('#politicsLeadNews').append(`
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <a href="#" class="card mt-3 w-100 link" style="height: 310px;">
                    <img height="150px" style="object-fit: cover" src="${image}" height="180px" class="card-img-top" alt="${title}">
                    <div class="card-body">
                        <h5 style="margin-bottom: 5px;" class="card-text fw-bold line-1">${title}</h5>
                        <p class="rajnitiDesc  d-md-none d-lg-block line-3">${subTitle}</p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex f-13 align-items-center"><i class="fas fa-clock" style="margin-right: 5px"></i>${site.localeDate(time)}</div>
                            <div class="f-13"><i class="fas fa-tags" style="margin-right: 5px"></i> অর্থনীতি </div>
                        </div>
                    </div>
                </a>
            </div>
        `)
    }

    function PoliticsSideNews(title,image,time){
        $('#politicsSideNews').append(`
                <a href="#" class="news link border-bottom mt-0 mb-0">
                    <img class="image" src="${image}">
                    <div>
                        <h5  class="title line-2" style="margin-bottom: 1px!important;">${title}</h5>
                        <p class="hour m-0"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(time)}</p>
                    </div>
                </a>
            `)
    }


    function AllPoliticsNews(){
        let politicsLeadNews = $('#politicsLeadNews');
        let politicsSideNews = $('#politicsSideNews');
        GetData('/get-all-news/2/lead_news/4',function (response){
            if(response.status === 200){
                politicsLeadNews.empty();
                let data = response.data;
                if(data.length > 0){
                    let order = 5;
                    for(let i = 0; i < data.length; i++){
                        for(let j = 0; j < order; j++){
                            if(data[i].order == j){
                                PoliticsLeadNews(data[i].title, data[i].sort_description , data[i].image, data[i].date);
                            }
                        }
                    }
                }else{
                    politicsSideNews.append(ErrorNotFoundData())
                }
            }
        })

        //Side News
        GetData('/get-all-news/2/side_bar_news/7',function (response){
            if(response.status === 200){
                politicsSideNews.empty();
                let data = response.data;
                if(data.length > 0){
                    let order = 7;
                    for(let i = 0; i < data.length; i++){
                        for(let j = 0; j < order; j++){
                            if(data[i].order == j+1){
                                PoliticsSideNews(data[i].title, data[i].image, data[i].date);
                            }
                        }
                    }
                }else{
                    PoliticsSideNews.append(ErrorNotFoundData())
                }

            }
        });
    }


</script>

