<div id="AdvertiseBottomFixed" class="position-fixed bottom-0" style="left: 0;z-index: 999">
    <div class="AdvertiseBottomBody position-relative">
        <button type="button" id="AdvertiseFixedBottomClose" class="position-absolute btn" style="background: #F3F3F3;right: 25px;top: -15px;">
            <i class="fas fa-times"></i>
        </button>
        <div class="image d-flex justify-content-center p-2" style="background: #F3F3F3;height: 100px;width: 100vw">
            <img src="https://tpc.googlesyndication.com/simgad/8372039551353786955" class="h-100" >
        </div>
    </div>
</div>


<script>
    $('#AdvertiseFixedBottomClose').click(function (){
        $('#AdvertiseBottomFixed').remove();
    })
</script>
