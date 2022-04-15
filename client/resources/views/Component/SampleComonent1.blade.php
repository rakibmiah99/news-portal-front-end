<div class="row section-container">
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
        <div class="mt-5">
            <div class="border-top shadow-sm border-bottom border-secondary  p-2  d-flex justify-content-between align-items-center">
                <h4 class="m-0">অর্থনীতি</h4>
                <ul class="nav nav-tabs" role="tablist" id="EconomyPills">
                    <li class="nav-item">
                        <a class="nav-link EconomyItem active" SubCategoryID="0" data-bs-toggle="tab" href="#allPloytics">সকল</a>
                    </li>
                </ul>
                <button class="btn btn-danger rounded-pill">সকল</button>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6" id="economyLeadNews">
                <!-- Economy Lead News -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-2" style="margin-top: -10px;">
                <div class="titleNews2 mt-2 border-left border-right" id="economySidebarNews">
                    <!-- Economy Side Bar News -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-12  col-md-6 col-lg-6">
        <div class="mt-5">
            <div class="border-top shadow-sm border-bottom border-secondary  p-2  d-flex justify-content-between align-items-center">
                <h4 class="m-0">আইন-আদালত </h4>
                <ul class="nav nav-tabs" role="tablist" id="LawPills">
                    <li class="nav-item">
                        <a class="nav-link LawItem active" SubCategoryID="0" data-bs-toggle="tab" href="#">সকল</a>
                    </li>
                </ul>
                <button class="btn btn-danger rounded-pill">সকল</button>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6" id="lawLeadNews">
                <!-- Law Lead News -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-2" style="margin-top: -10px;">
                <div class="titleNews2 mt-2 border-left border-right" id="lawSidebarNews">
                    <!-- Law Side Bar News -->
                </div>
            </div>
            </div>
        </div>
    </div>







    <script>
        PillsCategory('/category-by-id/12','#EconomyPills','EconomyItem')
        $('#EconomyPills').on('click','.EconomyItem',function (){
            $('.EconomyItem').removeClass('disabled')
            $(this).addClass('disabled')
            let id = $(this).attr('SubCategoryID');
            if(id === "0"){
                AllEconomyNews();
            }else{
                GetEconomyLeadNews(`/get-all-news/${id}/lead_news/2/sub`);
                GetEconomySidebarNews(`/get-all-news/${id}/side_bar_news/5/sub`)
            }
        })

        AllEconomyNews();

        function AllEconomyNews(){
            GetEconomyLeadNews('/get-all-news/12/lead_news/2');
            GetEconomySidebarNews('/get-all-news/12/side_bar_news/5')
        }
        // Economy Lead News
        function GetEconomyLeadNews(url){
            GetData(url, function (response){
                if(response.status === 200 ){
                    let data = response.data;
                    let order = 2;
                    $('#economyLeadNews').empty();
                    for(let i = 0; i < data.length; i++){
                        for(let j = 0; j < order; j++){
                            if(data[i].order == j+1){
                                EconomyLeadNews(data[i].image,data[i].title)
                            }
                        }
                    }
                }
            })
        }
        function EconomyLeadNews(image,title){
            $('#economyLeadNews').append(`
                <a class="card  mt-3 link">
                    <img src="${image}" style="height: 169px;" " class="card-img"></img>
                    <div class="card-body pb-2 pt-2">
                        <h4 class="m-0">${title}</h4>
                    </div>
                </a>
            `)
        }
        // Economy Side Bar News
        function GetEconomySidebarNews(url){
            GetData(url, function (response){
                if(response.status === 200 ){
                    let data = response.data;
                    let order = 5;
                    $('#economySidebarNews').empty();
                    for(let i = 0; i < data.length; i++){
                        for(let j = 0; j < order; j++){
                            if(data[i].order == j+1){
                                EconomySidebarNews(data[i].image,data[i].title,data[i].date)
                            }
                        }
                    }
                }
            })
        }
        function EconomySidebarNews(image,title,time){
            $('#economySidebarNews').append(`
                <a href="#" class="news link border-bottom mt-2 mb-2">
                    <img class="image" style="height: 70px" src="${image}">
                    <div>
                        <h5 class="title m-0 line-2" style="margin-bottom: 3px!important;">${title}</h5>
                        <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(time)}</div>
                    </div>
                </a>
            `)
        }





        /*-------- Law & Court ----------- */
        PillsCategory('/category-by-id/9','#LawPills','LawItem')
        $('#LawPills').on('click','.LawItem',function (){
            $('.LawItem').removeClass('disabled')
            $(this).addClass('disabled')
            let id = $(this).attr('SubCategoryID');
            if(id === "0"){
                AllLawNews();
            }else{
                GetLawLeadNews(`/get-all-news/${id}/lead_news/2/sub`);
                GetLawSidebarNews(`/get-all-news/${id}/side_bar_news/5/sub`)
            }
        })

        AllLawNews();

        function AllLawNews(){
            GetLawLeadNews('/get-all-news/9/lead_news/2');
            GetLawSidebarNews('/get-all-news/9/side_bar_news/5')
        }
        // Economy Lead News
        function GetLawLeadNews(url){
            GetData(url, function (response){
                if(response.status === 200 ){
                    let data = response.data;
                    let order = 2;
                    $('#lawLeadNews').empty();
                    for(let i = 0; i < data.length; i++){
                        for(let j = 0; j < order; j++){
                            if(data[i].order == j+1){
                                LawLeadNews(data[i].image,data[i].title)
                            }
                        }
                    }
                }
            })
        }
        function LawLeadNews(image,title){
            $('#lawLeadNews').append(`
                <a class="card  mt-3 link">
                    <img src="${image}" style="height: 169px;" " class="card-img"></img>
                    <div class="card-body pb-2 pt-2">
                        <h4 class="m-0">${title}</h4>
                    </div>
                </a>
            `)
        }
        // Economy Side Bar News
        function GetLawSidebarNews(url){
            GetData(url, function (response){
                if(response.status === 200 ){
                    let data = response.data;
                    let order = 5;
                    $('#lawSidebarNews').empty();
                    for(let i = 0; i < data.length; i++){
                        for(let j = 0; j < order; j++){
                            if(data[i].order == j+1){
                                LawSidebarNews(data[i].image,data[i].title,data[i].date)
                            }
                        }
                    }
                }
            })
        }
        function LawSidebarNews(image,title,time){
            $('#lawSidebarNews').append(`
                <a href="#" class="news link border-bottom mt-2 mb-2">
                    <img class="image" style="height: 70px" src="${image}">
                    <div>
                        <h5 class="title m-0 line-2" style="margin-bottom: 3px!important;">${title}</h5>
                        <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(time)}</div>
                    </div>
                </a>
            `)
        }
    </script>



</div>
