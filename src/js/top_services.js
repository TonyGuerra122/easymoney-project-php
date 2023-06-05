$(document).ready(function () {
    requester_services = new Requester("services", "GET");
    requester_services.getRequest("getTopFiveService").then((data) => {
        $("#top-title").text(`Top ${data.length} serviços`);

        for (let i = 0; i < data.length; i++) {
            $('#top5_services').append(`
                <div class="col">
                <div class="card">
                    <img src="/assets/images/ts.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">${data[i].title} |<img class="images" src="./assets/images/star.png" alt=""></h5>
                        <p class="card-text">${data[i].descricao}</p>
                        <a href="#" class="btn btn-primary">Ver serviço</a>
                    </div>
                </div>
                </div>
            `)
        }
    })
})