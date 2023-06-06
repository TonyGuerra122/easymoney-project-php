<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina principal</title>
  <link rel="icon" type="image/jpg" href="/assets/images/Logo_easy.png">
  <link href="/src/css/style.css" rel="stylesheet">
  <link href="/src/css/add.css" rel="stylesheet">
  <link href="/src/css/bootstrap.css" rel="stylesheet">
  <link href="/src/css/sidebar.css" rel="stylesheet">
  <link href="/src/css/navbar.css" rel="stylesheet">
</head>
<header>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/navbar.php") ?>
</header>

<body class="corpo">
  <section class="box">
    <form class="container text-center" id="sendData">
      <div class="row">
        <div class="col-sm-8">
          <label for="exampleFormControlInput1" class="form-label">Titulo</label>
          <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Titulo">
        </div>
        <div class="col-sm-4">
          <label for="exampleFormControlInput1" class="form-label">Valor</label>
          <input type="number" name="value" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label-1">Descricao</label>
        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Criar</button>
    </form>
  </section>

  <script src="../../src/js/jquery.js"></script>
  <script src="../../src/js/bootstrap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../../src/js/Requester.js"></script>
  <script src="../../src/js/sidebar.js"></script>
  <script src="../../src/js/top_services.js"></script>
  <script src="../../src/js/index_script.js"></script>
  <script src="../../src/js/add_service.js"></script>
</body>