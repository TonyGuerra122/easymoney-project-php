<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina principal</title>
  <link rel="icon" type="image/jpg" href="/easymoney/assets/images/Logo_easy.png">
  <link href="/easymoney/src/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<header>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/easymoney/includes/navbar.php") ?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/easymoney/includes/sidebar.php") ?>
</header>
<body class="corpo">  

    <section class="cadastrar">

        <div class="fade-in-image">
          <img src="/easymoney/assets/images/easymoney.png" alt="">
        </div>

          <div class="foto1">
            <img src="/easymoney/assets/images/banner/moca.png" alt="">
          </div>

          <div class="chat1">
            <img src="/easymoney/assets/images/banner/divulgacao.png" alt="">
          </div>

          <div class="chat2">
            <img src="/easymoney/assets/images/banner/E.png" alt="">
          </div>

          <div class="chat3">
            <img src="/easymoney/assets/images/banner/contratacao.png" alt="">
          </div>

        <div class="cadastre">
          <a href="\easymoney\Views\cadastro\">
            <img src="/easymoney/assets/images/botao_cadastrar.png" alt="">
          </a>
        </div>

        <div>
            <h1 class="txt">Mostre seu trabalho <br>para o MUNDO</h1>
        </div> 

    </section>  

  <section>
    <p>
      <h1 class="rank1">TOP 5 gados: </h1>
    </p>
    <div class="container px-4 text-center">
      <div class="row gx-5">
        <div class="col">
          <div class="card" style="width: 13rem;">
            <img src="/easymoney/assets/images/ts.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Test Show |<img class="images" src="/easymoney/assets/images/star.png" alt=""></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card" style="width: 13rem;">
              <img src="/easymoney/assets/images/testandonovamente.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title |<img class="images" src="/easymoney/assets/images/star.png" alt=""></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card" style="width: 13rem;">
            <img src="/easymoney/assets/images/Testeshowbola.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title |<img class="images" src="/easymoney/assets/images/star.png" alt=""></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width: 13rem;">
            <img src="/easymoney/assets/images/Testeshowbola.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title |<img class="images" src="/easymoney/assets/images/star.png" alt=""></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card" style="width: 13rem;">
            <img src="/easymoney/assets/images/Testeshowbola.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title |<img class="images" src="/easymoney/assets/images/star.png" alt=""></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <a href="">Suporte</a>
    <a href="">SOCORROOO</a>
    <a href="">arooz</a>
    <a href="">Joao</a>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="/easymoney/src/js/Requester.js"></script>
  <script src="/easymoney/src/js/index_script.js"></script>
</body>
</html>