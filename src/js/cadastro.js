$(document).ready(function(){
    $('#add-user').on('submit', function(e){
        e.preventDefault();
        let formData = $(this).serialize();
        requester = new Requester("login", "POST");
        requester.getRequest("addUser", formData).then((data) =>{
            console.log(data);
            if(data == true){
                Swal.fire(
                    'Sucesso',
                    'Cadastro realizado com sucesso',
                    'success'
                ).then((result) =>{
                    if(result.isConfirmed){
                        window.location.href = "https://easymoney.faex.edu.br/Views/login/?page_action=new_login";
                    }
                })
            }else{
                Swal.fire(
                    'Erro',
                    'Ocorreu algum erro ao realizar o cadastro',
                    'error'
                )
            }
        }).catch((error) =>{
            console.error(error)
        })
    })
})