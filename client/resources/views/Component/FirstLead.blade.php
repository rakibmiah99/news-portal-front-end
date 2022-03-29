<div class="section-container">
    <div id="firstLead" class="mt-3 row  mb-3 d-flex justify-content-between">
        <div class="flLeft border-right col-12 col-sm-12 col-md-6 col-lg-3" >
            <div class="3news titleNews2" id="sideLeadNews">
                <!-- LEFT FIRST LEAD NEWS -->
            </div>

            <!--               Advertise   --->
            <div class="advertise mt-4 mb-3 text-center overflow-hidden">
                <img  src="{{asset('img/300x300.gif')}}">
            </div>
        </div>

        <div href="#" class="flLead col-12 col-sm-12 col-md-12 col-lg-6">
            <a id="mainLead" style="height: 600px;display: block" class="link" href="#" >
                <!--MAIN FIRST LEAD NEWS -->
            </a>
            <div class="titleNews2 row border-top" id="bottomMainLead">
               <!--BOTTOM MAIN LEAD -->
            </div>
        </div>

        <div class="flRight col-12 col-sm-12 col-md-6 col-lg-3 border-left" >
            <!--                Advertise    -->
            <div class="advertise mt-3 mb-3 text-center overflow-hidden">
                <img  src="{{asset('img/300x300.gif')}}">
            </div>

            <div class="motamot">
                <h5 class="text-center p-2 border-top border-bottom fw-bold">মতামত</h5>
                <ul  class="list-group list-group-flush" id="motamotSection">

                </ul>
            </div>

            <div class="corona">
                <h5 class="text-center p-2 border-top border-bottom mt-3 fw-bold">করুনা আপডেট</h5>
                <div class="coronaTable d-flex">
                    <div class="coronaTableItem">
                        <div class="text-center lh-lg">বাংলাদেশ</div>
                        <table class="table table-sm table-striped table-light">
                            <tr>
                                <td>মোট আকান্ত</td>
                                <td>:</td>
                                <td id="bnTotal"></td>
                            </tr>
                            <tr>
                                <td>মোট সুস্থ</td>
                                <td>:</td>
                                <td id="bnRecover"></td>
                            </tr>
                            <tr>
                                <td>মোট মৃত্যুঃ</td>
                                <td>:</td>
                                <td id="bnDeath"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="coronaTableItem">
                        <div class="text-center lh-lg">বিশ্ব</div>
                        <table class="table table-sm table-striped table-light">
                            <tr>
                                <td>মোট আকান্ত</td>
                                <td>:</td>
                                <td id="inTotal"></td>
                            </tr>
                            <tr>
                                <td>মোট সুস্থ</td>
                                <td>:</td>
                                <td id="inRecover"></td>
                            </tr>
                            <tr>
                                <td>মোট মৃত্যুঃ</td>
                                <td>:</td>
                                <td id="inDeath"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="coronaActionBtn d-flex justify-content-center">
                    <div class="mt-3">
                        <button class="cnext btn btn-sm btn-secondary rounded-pill m-1"><i class="fas fa-angle-left"></i></button>
                        <button class="cprev btn btn-sm btn-secondary rounded-pill m-1"><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<script>
    axios.get(site.url('/get-all-news/1/lead_news/7')).then(function(response){
        if(response.status === 200){
            //console.log(response)
            let data = response.data;
            let mainLead = data[0];

            //Main Lead
            $('#mainLead').append(`
                <img  class="image img-fluid" src="${mainLead.image}">
                <h2 class="mt-2">${mainLead.title}</h2>
                <p>${mainLead.sort_description}</p>
            `);

            //Side Lead News
            function siteLeadNews(selectSection,image,title,time){
                selectSection.append(`
                    <a href="#" class="news link border-bottom  mb-3">
                        <img class="image" src="${image}">
                        <div>
                            <h5 class="title m-0">র${title}</h5>
                            <p class="hour m-0"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${moment(time).locale('bn').startOf('hour').fromNow()}</p>
                        </div>
                    </a>
                `);
            }

            //function Bottom Lead News
            function bottomLeadNews(image,title,time){
                $('#bottomMainLead').append(`
                    <a href="#" class="news link col-sm-6 border-bottom mt-2 mb-2">
                        <img class="image" src="${image}">
                        <div>
                            <h5 class="title m-0">র${title}</h5>
                            <p class="hour m-0"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${moment(time).locale('bn').startOf('hour').fromNow()}</p>
                        </div>
                    </a>
                `);
            }

            for(let i = 1;data.length > i;i++){
                if(data[i].order === "2"){
                    siteLeadNews($('#sideLeadNews'),data[i].image,data[i].title, data[i].date)
                }else if($('#sideLeadNews'),data[i].order === "3"){
                    siteLeadNews(data[i].image,data[i].title, data[i].date)
                }else if(data[i].order === "4"){
                    siteLeadNews($('#sideLeadNews'),data[i].image,data[i].title, data[i].date)
                }else if(data[i].order === "5"){
                    siteLeadNews($('#sideLeadNews'),data[i].image,data[i].title, data[i].date)
                }

                //Bottom Leaed News
                else if(data[i].order === "6"){
                    bottomLeadNews(data[i].image,data[i].title, data[i].date)
                }else if(data[i].order === "7"){

                    bottomLeadNews(data[i].image,data[i].title, data[i].date)
                }

            }

        }
    }).catch(function(error){
        console.log(error)
    });


    //Motamot
    GetData('/get-all-opinion/1',function(res){
        if(res.status === 200){
                let data = res.data[0];
                if(data.order === "1"){
                    motamot(data.image_file,data.title,data.short_description)
                }
        }

        //Motamot Function
        function motamot(image,title,name){
            $('#motamotSection').append(`
                    <a href="#" class="list-group-item link border-bottom list-group-item-action d-flex">
                        <img style="margin-right: 10px;" src="${image}" class="rounded-circle" height="80px" width="80px">
                        <div class="motamot-text">
                            <h5 class="m-0">${title}</h5>
                            <p class="m-0 f-16 text-secondary">${name}</p>
                        </div>
                    </a>
                `)
        }
    })

    //Corona Update
    GetData('/get-all-info',function(res){
        if(res.status === 200){
            let c = res.data;
            $('#bnTotal').append(c[0].info_value);
            $('#bnRecover').append(c[1].info_value);
            $('#bnDeath').append(c[2].info_value);
            $('#inTotal').append(c[3].info_value);
            $('#inRecover').append(c[4].info_value);
            $('#inDeath').append(c[5].info_value);
        }
    })


    $(document).ready(function(){
        $('.coronaTable').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            autoplay: true,
            autoplaySpeed: 2000,
            nextArrow: '.cnext',
            prevArrow: '.cprev'
        });
    });
</script>
