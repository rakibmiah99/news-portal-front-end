<div id="feature" class="p-4 p-lg-3 p-lg-2 position-relative" >
    <button class="f-prev position-absolute feature-action-btn" style="left: 30px;"><i class="fas fa-angle-left"></i></button>
    <button class="f-next position-absolute feature-action-btn" style="right: 30px;"><i class="fas fa-angle-right"></i></button>
    <div class="feature-wrap p-5 row">
        <div class="col-3">
            <a href="#" class="card position-relative overflow-hidden" >
                <div class="feature-title position-absolute p-4 pt-2 pb-2" style="background: var(--bg-danger);left: 28%;">
                    <h4 class="text-center text-white m-0">ছুটির দিনে</h4>
                </div>
                <img class="h-100 card-img w-100" src="https://i0.wp.com/officialresultbd.com/wp-content/uploads/2020/04/5d298ae5a9c15c41e8001bb86dfab494.jpg?resize=640%2C960&quality=95&strip=all&ssl=1" >

                <div  class="cardOverlay w-100 position-absolute" style="bottom: 0;">
                    <h4 class="card-title text-white p-2">যেন তোমাকেই কাছে পাওয়ার ব্যকুলতা</h4>
                </div>
            </a>
        </div>
        <div class="col-3">

            <a href="#" class="card position-relative overflow-hidden" >
                <div class="feature-title position-absolute p-4 pt-2 pb-2" style="background: var(--bg-danger);left: 28%;">
                    <h4 class="text-center text-white m-0">ছুটির দিনে</h4>
                </div>
                <img class="h-100 card-img w-100" src="https://i0.wp.com/officialresultbd.com/wp-content/uploads/2020/04/5d298ae5a9c15c41e8001bb86dfab494.jpg?resize=640%2C960&quality=95&strip=all&ssl=1" >

                <div  class="cardOverlay w-100 position-absolute" style="bottom: 0;">
                    <h4 class="card-title text-white p-2">যেন তোমাকেই কাছে পাওয়ার ব্যকুলতা</h4>
                </div>
            </a>
        </div>
        <div class="col-3">

            <a href="#" class="card position-relative overflow-hidden" >
                <div class="feature-title position-absolute p-4 pt-2 pb-2" style="background: var(--bg-danger);left: 28%;">
                    <h4 class="text-center text-white m-0">ছুটির দিনে</h4>
                </div>
                <img class="h-100 card-img w-100" src="https://i0.wp.com/officialresultbd.com/wp-content/uploads/2020/04/5d298ae5a9c15c41e8001bb86dfab494.jpg?resize=640%2C960&quality=95&strip=all&ssl=1" >

                <div  class="cardOverlay w-100 position-absolute" style="bottom: 0;">
                    <h4 class="card-title text-white p-2">যেন তোমাকেই কাছে পাওয়ার ব্যকুলতা</h4>
                </div>
            </a>
        </div>
        <div class="col-3">

            <a href="#" class="card position-relative overflow-hidden" >
                <div class="feature-title position-absolute p-4 pt-2 pb-2" style="background: var(--bg-danger);left: 28%;">
                    <h4 class="text-center text-white m-0">ছুটির দিনে</h4>
                </div>
                <img class="h-100 card-img w-100" src="https://i0.wp.com/officialresultbd.com/wp-content/uploads/2020/04/5d298ae5a9c15c41e8001bb86dfab494.jpg?resize=640%2C960&quality=95&strip=all&ssl=1" >

                <div  class="cardOverlay w-100 position-absolute" style="bottom: 0;">
                    <h4 class="card-title text-white p-2">যেন তোমাকেই কাছে পাওয়ার ব্যকুলতা</h4>
                </div>
            </a>
        </div>
        <div class="col-3">
            <a href="#" class="card position-relative overflow-hidden" >
                <div class="feature-title position-absolute p-4 pt-2 pb-2" style="background: var(--bg-danger);left: 28%;">
                    <h4 class="text-center text-white m-0">ছুটির দিনে</h4>
                </div>
                <img class="h-100 card-img w-100" src="https://i0.wp.com/officialresultbd.com/wp-content/uploads/2020/04/5d298ae5a9c15c41e8001bb86dfab494.jpg?resize=640%2C960&quality=95&strip=all&ssl=1" >

                <div  class="cardOverlay w-100 position-absolute" style="bottom: 0;">
                    <h4 class="card-title text-white p-2">যেন তোমাকেই কাছে পাওয়ার ব্যকুলতা</h4>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    let featureObj = {
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        // autoplay: true,
        // autoplaySpeed: 2000,
        nextArrow: '.f-next',
        prevArrow: '.f-prev',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                },
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 568,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    }
    function featureSlickSlider(obj){
        $('.feature-wrap').slick(obj);
    }

    $(document).ready(function(){
        featureSlickSlider(featureObj)
    });



</script>
