$(document).ready(function(){
    $("#sendData").on('submit', function(e){
        e.preventDefault();
        requester = new Requester("services", "POST");
        let formData = $(this).serialize();
        requester.getRequest("addService", formData).then((data) =>{
            if(data === true){
                Swal.fire(
                    'Sucesso',
                    'Serviço adicionado com sucesso!',
                    'success'
                )
            }
        })
    })
})