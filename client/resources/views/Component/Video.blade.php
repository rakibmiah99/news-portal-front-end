<div class="mt-5">
    <div class="section-container">
        <div class="border-top shadow-sm border-bottom border-secondary  p-2  d-flex justify-content-between align-items-center">
            <h4 class="m-0">বিনোদন</h4>
            <button class="btn btn-danger rounded-pill">সকল</button>
        </div>
    </div>
</div>

<div id="VideoComponent" class="bg-dark mt-3 p-4 section-container">
    <div class="row" id="gallery-container">


    </div>
</div>




<script>
    GetData('/get-all-video/4',function (response){
        if(response.status === 200){
            let data = response.data;
            let GalleryContainer = $('#gallery-container');
            data.forEach(function(item){
                if(item.order === '1'){
                    GalleryContainer.append(`
                        <div class="col-4 mt-2 mb-2">
                            <a href="#" class="link">
                                <h1 class="text-white p-4 m-0 pt-3 pb-2">বন্ধ্যত্বের নানাদিক এন্ডোমেট্রিওসিস সচেতনতা- পর্ব ০২</h1>
                                <h4 class="text-white p-4 pt-0 pb-0">৫ ঘন্টা আগে </h4>
                            </a>
                        </div>
                    `)

                    GalleryContainer.append(`
                        <div class="col-8 mt-2 mb-2"  data-lg-size="1280-720" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" data-src="${item.video_link}" data-poster="${item.video_thumbnail}" data-sub-html="<h4>Here Is Video Title Shown</h1>">
                            <div class="card video-card position-relative">
                                <img class="card-img img-fluid" src="https://images.prothomalo.com/prothomalo-bangla%2F2022-03%2F18ddd9c7-09e5-4d46-ae42-7a6f3e6231a0%2FTHUMBNAIL.jpg?rect=0%2C0%2C1920%2C1080&auto=format%2Ccompress&fmt=webp&format=webp&w=900&dpr=1.0">
                                <div class="video-card-overlay d-none  h-100 w-100 position-absolute d-flex align-items-center justify-content-center" ><i class="fas fa-play text-danger" style="font-size: 80px;"></i></div>
                            </div>
                        </div>
                    `)
                }

                else if(item.order === '2'){
                    GalleryContainer.append(`
                        <div class="col-4 mt-2 mb-2" data-lg-size="1280-720" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" data-src="${item.video_link}" data-poster="${item.video_thumbnail}" data-sub-html="<h4>Here Is Video Title Shown</h1>">
                            <div class="card video-card img-fluid position-relative">
                                <img class="card-img" src="https://images.prothomalo.com/prothomalo-bangla%2F2022-03%2F7683df64-1ed4-4d3a-afea-e19925b2dfb1%2Fbf30435a-e6f4-43fd-a4ce-aece689f90e3.jpg?rect=0%2C0%2C1620%2C1080&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.0">
                                <div class="video-card-overlay d-none  h-100 w-100 position-absolute d-flex align-items-center justify-content-center" ><i class="fas fa-play text-danger" style="font-size: 80px;"></i></div>
                            </div>
                        </div>
                    `)
                }
                else if(item.order === '3'){
                    console.log(item.video_link);
                    GalleryContainer.append(`
                        <div class="col-4 mt-2 mb-2" data-lg-size="1280-720" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" data-src="${item.video_link}" data-poster="${item.video_thumbnail}" data-sub-html="<h4>Here Is Video Title Shown</h1>">
                            <div class="card video-card position-relative">
                                <img class="card-img img-fluid" src="https://images.prothomalo.com/prothomalo-bangla%2F2022-03%2F66f28568-6f40-4469-b1c6-19f9cb14e6a5%2FUntitled_3.png?rect=150%2C0%2C1620%2C1080&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.0">
                                <div class="video-card-overlay d-none  h-100 w-100 position-absolute d-flex align-items-center justify-content-center" ><i class="fas fa-play text-danger" style="font-size: 80px;"></i></div>
                            </div>
                        </div>
                    `)
                }
                else if(item.order === '4'){
                    GalleryContainer.append(`
                        <div class="col-4 mt-2 mb-2" data-lg-size="1280-720" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" data-src="${item.video_link}" data-poster="${item.video_thumbnail}" data-sub-html="<h4>Here Is Video Title Shown</h1>">
                            <div class="card video-card position-relative">
                                <img class="card-img img-fluid" src="https://images.prothomalo.com/prothomalo-bangla%2F2022-03%2Fa3c62bb5-0d07-40a5-821d-181a019914e8%2FTTHUMBNAIL_UP.jpg?rect=300%2C0%2C1620%2C1080&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.0">
                                <div class="video-card-overlay d-none  h-100 w-100 position-absolute d-flex align-items-center justify-content-center" ><i class="fas fa-play text-danger" style="font-size: 80px;"></i></div>
                            </div>
                        </div>
                    `)
                }
            });


            lightGallery(document.getElementById("gallery-container"), {
                speed: 500,
                plugins: [lgVideo]
            });
        }



    })
</script>


