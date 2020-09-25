<?php
header('Content-type: text/html; charset=utf-8');
include_once ("include/functions.php");
?>
  <body>
    

    <div class="wrap fontsx">

      <header role="banner">

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo fontsx"><a href="index.php">FONOTROPICA</a></h1>
              <div class="col-md-12">
              <hr>
            </div>
          </div>
        </div>
        <hr></hr>
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link btn btn-light" href="quem_somos.php">Quem somos nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-light" href="equipe.php">Equipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light" href="colecao.php">A coleção</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link btn btn-light" href="plataforma.php">A plataforma</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link btn btn-light dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ciência Cidadã
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" style="text-transform: uppercase;" href="bioacustica-em-tempos-de-coronavirus.php">Bioacustica em tempos de coronavírus</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link btn btn-light dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projetos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" style="text-transform: uppercase;" href="cadastro-de-pesquisador.php">Cadastro de pesquisador</a>
                    <a class="dropdown-item" style="text-transform: uppercase;" href="sonogramas.php">Sonogramas</a>
                    <a class="dropdown-item" style="text-transform: uppercase;" href="atualizacao-do-projeto-btc.php">Atualização do projeto BTC</a>
                    <a class="dropdown-item" style="text-transform: uppercase;" href="programa-deteccao-de-especies.php">Programa Detecção de Espécies</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link btn btn-light dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Eventos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" style="text-transform: uppercase;" href="curso-fonotropica.php">Fotos do curso</a>
                    <a class="dropdown-item" style="text-transform: uppercase;" href="webnarios.php">Webinários</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
<?php
                if(ifsessionExists($_SESSION)){
                  echo '
                  <li class="nav-item">
                    <a class="nav-link btn btn-light" href="usuario.php">usuario</a>
                  </li>
                  <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0" action="include/logout.inc.php" method="post">
                  <button class="nav-link btn btn-light" type="submit" name="logout-submit">Logout</button>
                  </form>
                  </li>
                  ';
                }else{
                  echo '
                  <li class="nav-item">
                    <a class="nav-link btn btn-light" href="login.php">Login</a>
                  </li>
                  ';
                }
?>
              </ul>              
            </div>
          </div>
        </nav>
      </header>