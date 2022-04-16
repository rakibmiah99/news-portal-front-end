const site = {
    base_url: "http://nikash-online.com/public/api",
    url: function (getUrl){
        return this.base_url+getUrl;
    },
    localeDate: function (time){
        return moment(time).locale('bn').startOf('hour').fromNow();
    },
    localeFullDate: function (time){
        return moment(time).locale('bn').format('MMMM Do YYYY, h:mm:ss a');
    }
}



function convertDate(givenDate){
    let date = new Date(givenDate);
    let year = date.getFullYear();
    let month = String(date.getMonth() + 1).padStart(2, '0');
    let day = String(date.getDate()).padStart(2, '0');
    return  joinedDate = [year, month, day].join('-');
}


function GetData(url,callback){
    axios.get(site.url(url)).then(function(response){
        callback(response)
    }).catch(function (error){
        callback({error}.error.response)
    })
}

function PostData(url,object,callback){
    axios.post(site.url(url),object).then(function(response){
        callback(response)
    }).catch(function (error){
        callback({error}.error.response)
    })
}


function MakeObjectFromBrowserUrlParams(){
    let obj = {};
    let fullUrl = window.location.href.split('?');
    let params = fullUrl[1].split('&');

    params.forEach(function (paramsItem){
        var key = paramsItem.split('=')[0];
        var value = paramsItem.split('=')[1];
        obj[key] = value;
    })
    return obj;
}


function MakeUrlFromBrowserUrlSegment(){
    let getBrowserUrl = window.location.href;
    let divideSegment = getBrowserUrl.split('/');
    let finalUrl = '';
    for(let i = 3; i < divideSegment.length; i++){
        finalUrl += '/' + divideSegment[i];
    }
    return finalUrl;
}


function PillsCategory(url,selector,clickableClassName){
    GetData(url,function (response){
        if(response.status === 200){
            let subCategories = response.data.sub_categories;
            let pills = $(selector);
            if(subCategories < 1){
                pills.remove();
            }
            else {
                subCategories.forEach(function (item,index){
                    if(subCategories[index].visible == "1"){
                        pills.append(`
                             <li class="nav-item">
                                <a class="nav-link ${clickableClassName}" data-bs-toggle="tab" SubCategoryID="${item.id}" href="#">${item.name}</a>
                            </li>
                        `)
                    }
                })
            }
        }
    })
}





function GetComponentNews(url,element){
    GetData(url, function (response){
        if(response.status === 200 ){
            let data = response.data;
            let order = 1;
            $(element).empty();
            for(let i = 0; i < data.length; i++){
                for(let j = 0; j < order; j++){
                    if(data[i].order == j+1){
                        LeadNews(data[i].image,data[i].title)
                    }
                }
            }

            function LeadNews(image,title){
                $(element).append(`
                            <div class="card" >
                                <img src="${image}" class="card-img">
                                <div class="card-body">
                                    <h5>${title}</h5>
                                </div>
                            </div>
                        `)
            }
        }
    });
}
function GetComponentSubNews(url,element){
    GetData(url, function (response){
        if(response.status === 200 ){
            let data = response.data;
            let order = 2;
            $(element).empty();
            for(let i = 0; i < data.length; i++){
                for(let j = 0; j < order; j++){
                    if(data[i].order == j+1){
                        SubNews(data[i].image,data[i].title,data[i].date)
                    }
                }
            }
            function SubNews(image,title,time){
                $(element).append(`
                             <a href="#" class="news link border-bottom">
                                <img class="image" style="height: 70px" src="${image}">
                                <div>
                                    <h5 class="title m-0 line-2" style="margin-bottom: 5px!important;">${title}</h5>
                                    <div class="hour"><i class="fas  fa-clock" style="margin: 0 5px 0 0;"></i>${site.localeDate(time)}</div>
                                </div>
                            </a>
                        `)
            }
        }
    });
}





function ErrorNotFoundData(){
    return `
        <div class="alert alert-danger" role="alert">
            <strong>দুঃখিত!</strong>  কোন তত্য পাওয়া যায়নি
        </div>
    `
}
