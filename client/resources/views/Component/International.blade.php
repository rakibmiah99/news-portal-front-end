<div class="mt-5">
    <div class="section-container">
        <div class="border-top shadow-sm border-bottom border-secondary  p-2  d-flex justify-content-between align-items-center">
            <h4 class="m-0">আন্তর্জাতিক</h4>
            <button class="btn btn-danger rounded-pill">সকল</button>
        </div>
    </div>
</div>

<div id="international" class="section-container">
    <div class="row mt-2" id="internationalLeadNews">
        <!--
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <a href="#" class="card link">
                <img class="card-img" src="{{asset("img/newsSection.jpg")}}" >
                <div class="card-body">
                    <h3>যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান</h3>
                    <p>যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান</p>
                    <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <a href="#" class="card link">
                <img class="card-img" src="{{asset("img/newsSection.jpg")}}" >
                <div class="card-body">
                    <h3>যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান</h3>
                    <p>যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান</p>
                    <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <a href="#" class="card link">
                <img class="card-img" src="{{asset("img/newsSection.jpg")}}" >
                <div class="card-body">
                    <h3>যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান</h3>
                    <p>যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান</p>
                    <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <a href="#" class="card link">
                <img class="card-img" src="{{asset("img/newsSection.jpg")}}" >
                <div class="card-body">
                    <h3>যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান</h3>
                    <p>যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান যুক্তরাষ্ট্রে থেকে বঙ্গবন্ধুকে স্মরণ করলেন শাকিব খান</p>
                    <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>২ ঘন্টা আগে</p>
                </div>
            </a>
        </div>

        -->
    </div>
</div>

<script>
    GetData('/get-all-news/5/lead_news/4', function(response){
        if(response.status === 200){
            let data = response.data;
            let order = 5;
            for(let i = 0; i < data.length; i++){

                for(let j = 0; j < order; j++){
                    if(data[i].order == j){
                        InternationalLeadNews(data[i].title,data[i].image,data[i].sort_description,data[i].date);
                    }
                }
            }

            function InternationalLeadNews(title,image,shortDesc,date){
                $('#internationalLeadNews').append(`
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="#" class="card link">
                            <img class="card-img" src="${image}" >
                            <div class="card-body">
                                <h3 class="line-2">${title}</h3>
                                <p class="line-3">${shortDesc}</p>
                                <p class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(date)}</p>
                            </div>
                        </a>
                    </div>
                `)
            }
        }
    })
</script>
