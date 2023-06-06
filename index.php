<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina principal</title>
  <link rel="icon" type="image/jpg" href="./assets/images/Logo_easy.png">
  <link href="./src/css/style.css" rel="stylesheet">
  <link href="./src/css/bootstrap.css" rel="stylesheet">
  <link href="./src/css/navbar.css" rel="stylesheet">
</head>
<header>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/navbar.php") ?>
</header>

<body class="corpo">

  <section class="cadastrar">


    <div class="foto1">
      <img src="./assets/images/banner/moca.png" alt="">
    </div>

    <div class="chat1">
      <img src="./assets/images/banner/divulgacao.png" alt="">
    </div>

    <div class="chat2">
      <img src="./assets/images/banner/E.png" alt="">
    </div>

    <div class="chat3">
      <img src="./assets/images/banner/contratacao.png" alt="">
    </div>

    <div class="cadastre">
      <button id="cadastrar" style="background-color: transparent;border: 0;" href="./Views/cadastro/">
        <img src="./assets/images/botao_cadastrar.png" alt="">
      </button>
    </div>

    <div>
      <h1 class="txt">Mostre seu trabalho <br>para o MUNDO</h1>
    </div>

  </section>

  <section>
    <p>
    <h1 class="rank1" id="top-title"></h1>
    </p>
    <div class="container px-4 text-center">
      <div class="row gx-5" id="top5_services">

      </div>
    </div>
  </section>
  <script src="./src/js/jquery.js"></script>
  <script src="./src/js/bootstrap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./src/js/Requester.js"></script>
  <script src="./src/js/sidebar.js"></script>
  <script src="./src/js/top_services.js"></script>
  <script src="./src/js/index_script.js"></script>
</body>

</html>