$(document).ready(function(){
    requester = new Requester("services", "GET");
    requester.getRequest("getAllServices").then((data) =>{
        console.log(data);
    })
})