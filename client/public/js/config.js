const site = {
    base_url: "http://nikash-online.com/public/api",
    url: function (getUrl){
        return this.base_url+getUrl;
    },
    localeDate: function (time){
        return moment(time).locale('bn').startOf('hour').fromNow();
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


