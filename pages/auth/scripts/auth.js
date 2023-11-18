$(document).ready(function(){
    $('#auth').validate({
        ignore: [],
        rules: {
            username: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        messages: {
            username:  {
                required: 'Введите имя'
            },
            email:  {
                required: 'Введите электронную почту'
            },
            password:  {
                required: 'Введите пароль'
            },
        },
        submitHandler: function (form){
            urlAjaxRequest('index.php?page=authentication&phase=login', $(form).serialize(), {}, 'GET')
                .then( json => {
                    window.location.replace ('index.php?page=description') ;
                })
                .catch((json) => {console.log(json)});

        }
    })


})
