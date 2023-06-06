$(document).ready(function(){
    $("#logout").hide();
    const logout = async () =>{
        await requester.getRequest("logout").then((data) =>{
            if(data == true){
                window.location.reload();
            }
        })
        
    }
    requester = new Requester("login", "GET");
    requester.getRequest("getChecked").then((data) => {
        if(data == true){
            $('#sem-login').hide();
            $("#logout").show();
            requester.getRequest("getName").then((data) =>{
                $("#username").html(data);
            })
        }
    })
    $('#logout').on('click', logout)
    $("#faz-o-l").on('click', function(){
        Swal.fire(
            'Fez o L',
            'O L foi feito e não pode ser desfeito!',
            'success'
        )
    })
})
