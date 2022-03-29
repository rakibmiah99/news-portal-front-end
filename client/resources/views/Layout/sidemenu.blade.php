<div class="offcanvas offcanvas-start " tabindex="-1" id="sideMenu" aria-labelledby="sideMenuLabel">
    <div class="offcanvas-header position-fixed  d-flex justify-content-end" style="z-index: 9999;margin-left: 220px;">
        <button type="button"  class="btn btn-light rounded-pill " data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas f-20 fa-times-circle"></i></button>
    </div>
    <div class="offcanvas-body mt-3">
        <!-- Category List Here -->
    </div>
</div>


<script>
    $(document).ready(function (){
        let sideMenu = $('.offcanvas-body');
        axios.get(site.url('/category')).then(function(response){
            if(response.status === 200){
                let data = response.data[0];
                let ul = "<ul class='list-group list-group-item-action list-group-flush'>";


                data.forEach(function (category){
                    if(category.sub_categories.length > 0){
                       ul += `<a href="#" class="list-group-item list-group-item-action">${category.name}</a>`;

                        category.sub_categories.forEach(function (sub){
                            ul += `<a href="#" class="list-group-item list-group-item-action">${sub.name}</a>`;
                        })
                    }else{
                        ul += `<a href="#" class="list-group-item list-group-item-action">${category.name}</a>`;
                    }



                })

                ul += "</ul>";

                sideMenu.append(ul)
            }
        }).catch(function (error){
            console.log(error)
        })
    })
</script>
