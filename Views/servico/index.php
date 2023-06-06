<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/jpg" href="../../assets/images/Logo_easy.png">
  <title>Serviços</title>
  <link href="../../src/css/style.css" rel="stylesheet">
  <link href="../../src/css/sidebar.css" rel="stylesheet">
  <link href="../../src/css/bootstrap.css" rel="stylesheet">
  <link href="../../src/css/navbar.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
</head>
<nav>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/navbar.php") ?>
</nav>

<body class="corpo">
  <section>
    <div>
    <p>
    <h1 class="rank1">Todos os Serviços: </h1>
    </p>
    </div>
    <div class="container px-4 text-center">
      <div class="row gx-5">
        <div class="table-responsive">
          <div class="butao">
            <a href="https://easymoney.faex.edu.br/Views/adicionar/" class="btn btn-primary">Adicionar novo serviço</a>
          </div>
          <table class="table" id="services">
            <thead>
              <th>Título</th>
              <th>Descrição</th>
              <th>Valor</th>
              <th>Contratante</th>
              <th>Contratado</th>
              <th>Likes</th>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </section>
  <script src="../../src/js/bootstrap.js"></script>
  <script src="../../src/js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
  <script src="../../src/js/Requester.js"></script>
  <script src="../../src/js/sidebar.js"></script>
  <script src="../../src/js/services.js"></script>
  <script src="../../src/js/index_script.js"></script>
</body>

</html>