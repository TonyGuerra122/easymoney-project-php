<header class="p-3 text-bg-dark">
  <div class="container">

    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-start">
      <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
      </div>

      <div id="main">
        <button class="btn btn-outline-secondary" onclick="openNav()">&#9776;</button>
      </div>


      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="https://easymoney.faex.edu.br" class="nav-link px-2 text-secondary">Pagina Pincipal</a></li>
        <li><a href="https://easymoney.faex.edu.br/Views/servico/" class="nav-link px-2 text-white">Serviços</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Sobre nos</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
      </form>
      <div id="login">
        <p id="username"></p>
          <button class="btn btn-secondary " id="logout">Sair</button>
        <div id="sem-login">
          <a href="https://easymoney.faex.edu.br/Views/login/"><button class="btn btn-secondary" type="button">Login</button></a>

          <a href=#><button class="btn btn-secondary " type="button" id="faz-o-l">Faz o L</button></a>
        </div>
      </div>
    </div>
</header>