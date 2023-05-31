$(document).ready(function(){
    $('#login').on('submit', function(e){
        e.preventDefault();
        let formData = $(this).serialize();
        requester = new Requester("login", "POST");
        requester.getRequest("login", formData).then((data) =>{
            if(data == true){
                window.location.href = "/easymoney/";
            }else{
                Swal.fire(
                    'Erro',
                    'Login ou Senha incorretos!',
                    'error'
                )
            }
        })
    })
})