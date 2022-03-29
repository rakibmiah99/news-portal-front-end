<div class="mt-5">
    <div class="section-container">
        <div class="border-top shadow-sm border-bottom border-secondary  p-2  d-flex justify-content-between align-items-center">
            <h4 class="m-0">রাজনীতি</h4>
            <button class="btn btn-danger rounded-pill">সকল</button>
        </div>
    </div>
</div>

<div id="politics" class="section-container">
    <div class="row mt-3">
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
                <div class="col-12 col-md-6 mt-5" id="map"></div>
                <div class="areaChose col-12 col-md-6 col-lg-12  mt-5">
                    <h3 class="text-center mt-3 border-bottom border-top bg-light p-2">আমাদের খবর</h3>
                    <div class="form mt-3">
                        <select class="form-select shadow-none mt-3" id="division" aria-label="Default select example">
                            <option selected>বিভাগ</option>
                        </select>
                        <select class="form-select shadow-none mt-3" id="district" aria-label="Default select example">
                            <option selected>জেলা </option>
                        </select>
                        <select id="upazila" class="form-select shadow-none mt-3" aria-label="Default select example">
                            <option selected>উপজেলা </option>
                        </select>
                        <button class="btn btn-danger shadow-none text-center mt-3 w-100">খুজুন</button>
                    </div>
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
    GetData('/get-all-news/2/lead_news/4',function (response){
        if(response.status === 200){
            let data = response.data;
            let order = 5;
            for(let i = 0; i < data.length; i++){
                for(let j = 0; j < order; j++){
                    if(data[i].order == j){
                        console.log(j)
                        PoliticsLeadNews(data[i].title, data[i].sort_description , data[i].image, data[i].date);
                    }
                }
            }
        }

        function PoliticsLeadNews(title, subTitle, image, time){
            $('#politicsLeadNews').append(`
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <a href="#" class="card mt-3 w-100 link" style="height: 360px;">
                        <img height="150px" style="object-fit: cover" src="${image}" height="180px" class="card-img-top" alt="${title}">
                        <div class="card-body">
                            <h5 class="card-text fw-bold line-2">${title}</h5>
                            <p class="rajnitiDesc  d-md-none d-lg-block line-4">${subTitle}</p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex f-13 align-items-center"><i class="fas fa-clock" style="margin-right: 5px"></i>${site.localeDate(time)}</div>
                                <div class="f-13"><i class="fas fa-tags" style="margin-right: 5px"></i> অর্থনীতি </div>
                            </div>
                        </div>
                    </a>
                </div>
            `)
        }
    })

    //Side News
    GetData('/get-all-news/2/side_bar_news/6',function (response){
        if(response.status === 200){
            let data = response.data;
            let order = 6;
            for(let i = 0; i < data.length; i++){
                for(let j = 0; j < order; j++){
                    if(data[i].order == j){
                        PoliticsSideNews(data[i].title, data[i].image, data[i].date);
                    }
                }
            }
        }

        function PoliticsSideNews(title,image,time){
            $('#politicsSideNews').append(`
                <a href="#" class="news link border-bottom mt-2 mb-2">
                    <img class="image" src="${image}">
                    <div>
                        <h5 class="title">${title}</h5>
                        <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(time)}</p>
                    </div>
                </a>
            `)
        }
    });

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
</script>

