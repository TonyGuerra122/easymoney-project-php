<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<nav>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/easymoney/includes/navbar.php") ?>
</nav>
<aside>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/easymoney/includes/sidebar.php") ?>
</aside>
<body>
<section>
    <p>
      <h1 class="rank1">TOP 3 gados: </h1>
    </p>
    <div class="container px-4 text-center">
      <div class="row gx-5">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="/easymoney/assets/images/ts.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card" style="width: 18rem;">
              <img src="/easymoney/assets/images/testandonovamente.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="/easymoney/assets/images/Testeshowbola.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>