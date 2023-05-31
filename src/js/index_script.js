$(document).ready(function(){
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
            requester.getRequest("getName").then((data) =>{
                $('#login').append(`
                <p>${data}</p>
                `);
            })
        }
    })
    $('#logout').on('click', logout)
})