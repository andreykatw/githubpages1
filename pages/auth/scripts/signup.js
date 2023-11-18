$(document).ready(function(){
    $('#auth').validate({
        ignore: [],
        rules: {
            username: {
                required: true
            },

            password: {
                required: true
            }
        },
        messages: {
            username:  {
                required: 'Введите имя'
            },
            /*email:  {
                required: 'Введите электронную почту'
            },*/
            password:  {
                required: 'Введите пароль'
            },
        },
        submitHandler: function (form){
            urlAjaxRequest('/index.php?page=authentication&phase=performSignup', $(form).serialize(), {}, 'GET')
                .then( json => {
                    window.location.replace ('index.php');
                })
                .catch((json) => {console.log(json)});

        }
    })


})
