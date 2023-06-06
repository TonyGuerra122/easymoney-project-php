$(document).ready(function(){
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
})