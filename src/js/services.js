$(document).ready(function(){
    if(!localStorage.getItem("login") || localStorage.getItem("login") == "false"){
        Swal.fire(
            'Aviso',
            'Para exibir está página é necessário login',
            'warning'
        ).then((response) =>{
            if(response.isConfirmed){
                window.location.href = "https://easymoney.faex.edu.br/Views/login";
            }
            setTimeout(() =>{
                console.log("Redirecionando...");
                window.location.href = "https://easymoney.faex.edu.br/Views/login";
            }, 200)
        })
    }else{
        requester = new Requester("services", "GET");
        requester.getRequest("getAllServices").then((data) =>{
            $('#services').DataTable({
                data: data,
                columns: [
                    {data: 'title'},
                    {data: 'descricao'},
                    {data: 'valor'},
                    {data: 'contratante'},
                    {data: 'contratado'},
                    {data: 'likes'}
                ]
            })
        })  
    }
})
function add_proposal(id){
    requester_proposal = new Requester("services", "POST");
    Swal.fire({
        title: 'Envie a sua proposta',
        input: 'text',
        inputAttributes:{
            autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Enviar',
        cancelButtonText: 'Cancelar',
        showLoaderOnConfirm: true,
        preConfirm: (proposal) =>{
            return requester_proposal.getRequest("addProposal",{id: id, proposal: proposal}).then((data) =>{
                return data;
            })
        } 
    }).then((response) =>{
        console.log(response);
        if(response.value == true){
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Proposta Enviada com sucesso!',
                showConfirmButton: false,
                timer: 1500
            })
        }else{
            console.error(response);
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Ocorreu algum erro!',
                showConfirmButton: false,
                timer: 1500
            })
        }
        setTimeout(() =>{
            console.log("Reloading");
            window.location.reload();
        }, 2000);
    })
}