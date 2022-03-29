<div id="top-nav" class="bg-light border-top border-bottom shadow-sm">
    <nav class="navbar section-container navbar-light navbar-expand-md  d-none d-md-block">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                <ul id="category" class="navbar-nav">

                </ul>
            </div>
        </div>
    </nav>
</div>

<script>
    let nav = $('#category');
    axios.get(site.url('/category')).then(function(response){
        if(response.status === 200){
            let data = response.data[0];
            data.forEach(function (category){
                if(category.sub_categories.length > 0){
                    nav.append(`
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ${category.name}
                            </a>
                            <ul id="sub${category.id}"  class="dropdown-menu" aria-labelledby="navbarDropdown">

                            </ul>
                        </li>
                    `);


                    category.sub_categories.forEach(function(sub){
                        $('#sub'+category.id).append(`
                            <li><a class="dropdown-item" href="#">${sub.name}</a></li>
                        `);
                    });

                }else{
                    nav.append(`
                        <li class="nav-item">
                            <a class="nav-link" href="#">${category.name}</a>
                        </li>
                    `);
                }



            })
        }
    }).catch(function (error){
        console.log(error)
    })
</script>
