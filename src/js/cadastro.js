$(document).ready(function(){
    $('#add-user').on('submit', function(e){
        e.preventDefault();
        let formData = $(this).serialize();
        requester = new Requester("login", "POST");
        requester.getRequest("addUser", formData).then((data) =>{
            if(data == true){
                Swal.fire(
                    'Sucesso',
                    'Cadastro realizado com sucesso',
                    'success'
                ).then((result) =>{
                    if(result.isConfirmed){
                        window.location.href = "/easymoney/Views/login/"
                    }
                })
            }else{
                Swal.fire(
                    'Erro',
                    'Ocorreu algum erro ao realizar o cadastro',
                    'error'
                )
            }
        })
    })
})