$(document).ready(function(){
    urlAjaxRequest('index.php?phase=getTable&page=users')
        .then(json => {
            $('#users_tablebody').html(json.template);
        })
})