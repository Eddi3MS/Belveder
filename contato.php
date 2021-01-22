<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Tags para SEO-->
  <meta name="description" content="---" />
  <meta name="keywords" content="--" />
  <meta name="author" content="Dev Eddi3" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script src="https://kit.fontawesome.com/8e3d354095.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image-x/png" href="img/icon.ico" />
  <title>Dev Eddi3 - Belveder</title>
</head>

<body>
  <div class="pre-loader">
    <img src="img/avatar_bvd.png" />
  </div>
  <header class="header">
    <div class="logo-header"><a href="/"><img src="./img/logo1.png" /></a></div>
    <div class="nav-container">
      <nav class="navigation">
        <ul>
          <li><a title="Projetos" href="/projetos">Projetos</a></li>
          <li>
            <a title="Serviços" href="/servicos">Serviços</a>
          </li>
          <li>
            <a title="Sobre" href="/sobre">Sobre</a>
          </li>
          <li>
            <a title="Contato" href="/contato">Contato</a>
          </li>
        </ul>
      </nav>
      <!--menu-desktop-->
      <div class="menu" id="menu">
        <div class="bar"></div>
      </div>

      <nav class="nav-mobile">
        <ul>
          <li>
            <a title="Projetos" href="/projetos">Projetos</a>
          </li>
          <li>
            <a title="Serviços" href="/serviços">Serviços</a>
          </li>
          <li>
            <a title="Sobre" href="/sobre">Sobre</a>
          </li>
          <li>
            <a title="Contato" href="/contato">Contato</a>
          </li>
        </ul>
      </nav>
      <!--menu-mobile-->
    </div><!-- nav-container -->
  </header>
  <!--header-->
  <section class="bg-contato">
    <img class="logotipo-contato" src="./img/avatar_bvd.png">
    <div class="contatos">
      <p>contato@blvdr.com.br</p>
      <p>Rio de Janeiro, Brasil</p>
      <p>+55 (21) 965590857</p>
      <div class="icones-contato">
        <i class="fab fa-instagram"></i>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-whatsapp"></i>
        <i class="fab fa-behance"></i>
      </div>
    </div>
  </section>
  <section class="holder"></section>
  <footer class="footer">
    <div class="logo-footer">
      <img src="./img/logo1.png" />
    </div>
    <div class="icones-footer">
      <div class="icones-footer1">
        <i class="fab fa-instagram"></i>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-whatsapp"></i>
        <i class="fab fa-behance"></i>
      </div>
      <div class="icones-footer2">
        <p>contato@blvdr.com.br</p>
      </div>
    </div>
    <!--container-->
  </footer>
  <!--footer-->
  <!-- JavaScript -->
    <script>
          window.addEventListener("load", function () {
        const loader = document.querySelector(".pre-loader");
        loader.className += " hidden";
      });
    </script>
    <script src="./js/main.js"></script>
  <!-- JavaScript -->
</body>

</html>