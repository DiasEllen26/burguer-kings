<?php
require "config.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Burger King® </title>
  <base href="http://localhost:80/burguer-kings/">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <!-- Bootstrap Icones-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- Scroll Reveeal-->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- Icon logo -->
  <link rel="shortcut icon" href="./imagens/logo.png" type="imagens/logo.png">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <?php
  //selecionar todos os tipos
  $sqlTipo = "SELECT * FROM tipo ORDER BY tipo";
  //executar query
  $consultaTipo = mysqli_query($con, $sqlTipo);
  ?>
  <nav class="navbar navbar-expand-lg p-3 bg-transparent">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="imagens/logo.png" alt="Logo" width="80" height="70" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="home">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="produtos">Todos os produtos</a></li>
          <?php
          while ($dados = mysqli_fetch_array($consultaTipo)) {
            $id = $dados["id"];
            $tipo = $dados["tipo"];
            echo "<li class='nav-item'><a href='tipo/{$id}' class='nav-link'>{$tipo}</a></li>";
          }
          ?>
        </ul>
        <form class="d-flex" action="produtos" method="post" role="search">
          <input class=" px-2 search bg-light" type="search" placeholder="Pesquisar" aria-label="Search" name="pesquisa">
          <button class="btn1 px-3" type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
  <section class="main">
    <div class="container">

      <?php
      $pagina = "home";
      if (isset($_GET["param"])) {
        $param = $_GET["param"];
        $param = explode("/", $param);
        $pagina = $param[0];
        $id = $param[1] ?? NULL;
      }
      $pagina = "paginas/{$pagina}.php";
      if (file_exists($pagina)) {
        require $pagina;
      } else {
        require "paginas/erro.php";
      }
      ?>
      <footer class="footer p-4"><img src="imagens/bk.png" alt="burguerking" class="bk">
        <hr class="text-light">Desenvolvido por Ellen Dias <br><br><br>
        Imagens meramente ilustrativas. TM & © 2021 Burger King Corporation. Todos os direitos reservados ao Burguer King.
      </footer>
    </div>
  </section>

  <script src="./js/script.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>

</html>