$(document).ready(function(){
    url = new URL(window.location.href);
    if(url.searchParams.get('page_action') == "new_login"){
        Swal.fire(
            'Pronto',
            'Agora tente logar com a sua conta nova!',
            'success'
        );
    }
    $('#login').on('submit', function(e){
        e.preventDefault();
        let formData = $(this).serialize();
        requester = new Requester("login", "POST");
        requester.getRequest("login", formData).then((data) =>{
            if(data == true){
                window.location.href = "/";
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