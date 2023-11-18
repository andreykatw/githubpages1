function urlAjaxRequest(url, data, settings = {}, method = 'POST') {
    return new Promise( (resolve, reject) => {
        $.ajax({
            type: method,
            url: url,
            data: data,
            dataType: 'json',
            cache: false,
            ...settings,
            success: function (json) {
                if(json.status) {
                    resolve(json);
                } else {
                    reject(json);
                }
            },
            error: function(){
                reject({status: -1, message: 'Error, Please try again!'});
            }
        });
    });
}
