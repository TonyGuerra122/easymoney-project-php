$(document).ready(function () {
    requester_services = new Requester("services", "GET");
    requester_services.getRequest("getTopFiveService").then((data) => {
        $("#top-title").text(`Top ${data.length} serviços`);

        for (let i = 0; i < data.length; i++) {
            $('#top5_services').append(`
                <div class="card" style="width: 18rem; margin-right: 20px; margin-top: 20px; 
                                    margin-bottom: 5rem; height: 15rem; align-items: center;">
                    <div class="card-body">
                        <h5 class="card-title">${data[i].title}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">R$${data[i].valor}</h6>
                        <p class="card-text">${data[i].descricao}</p>
                        </div>
                        <a class="btn btn-info" style="width: 5rem; margin-bottom:1rem;">Info</a>
                </div>    
            `)
        }
    })
})