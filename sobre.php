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
  <header class="header-black">
    <div class="logo-header"><a href="/"><img src="./img/logo.png" /></a></div>
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
  <section class="sobre">

    <div class="sobre-nos">
      <div class="linha"></div>
      <h1>SOBRE NÓS</h1>
      <p>Lorem ipsum, dolor sit amet consectetur
        adipisicing elit. Exercitationem sed vitae
        odit minus perferendis iure voluptas
        necessitatibus tenetur eveniet. Quod
        repellendus sed nesciunt asperiores ipsam
        reiciendis, tempora placeat voluptas totam
        necessitatibus tenetur eveniet. Quod
        repellendus sed nesciunt asperiores ipsam
        reiciendis, tempora placeat voluptas totam.</p>
      <p>Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Nemo, molestiae!</p>
    </div>
    <div class="logo-sobre">
      <img src="./img/avatar_black.png" />
    </div>
  </section>
  <section class="membros">
    <div class="membro1  team">
      <div class="titulos1">
        <p>Nome Sobrenome</p>
        <p>Cargo</p>
      </div>
    </div>
    <div class="membro2  team">
      <div class="titulos2">
        <p>Nome Sobrenome</p>
        <p>Cargo</p>
      </div>
    </div>
    <div class="membro3  team">
      <div class="titulos3">
        <p>Nome Sobrenome</p>
        <p>Cargo</p>
      </div>
    </div>
    <div class="membro4  team">
      <div class="titulos4">
        <p>Nome Sobrenome</p>
        <p>Cargo</p>
      </div>
    </div>
  </section>
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
  <!-- JavaScript -->
</body>

</html>