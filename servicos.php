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
    <img src="img/avatar_bvd.png" alt="loading-image" />
  </div>
  <header class="header-black">
    <div class="logo-header"><a href="/"><img src="./img/logo.png" alt="logo-image" /></a></div>
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
      <!--menu-mobile-->
    </div><!-- nav-container -->
  </header>
  <!--header-->
  <section class="servicos">
    <div class="titulo-wraper">
      <div class="titulo-serv">
        <h1>VISUALIZAÇÃO <br />ARQUITETÔNICA</h1>
      </div>
      <div class="titulo-desc">
        <div class="desc-container">
          <p>
            Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Eligendi dolorem, sequi
            quis, quaerat perferendis reiciendis minima
            culpa accusamus consequatur debitis placeat
            laudantium quas iusto fugiat nisi ratione non
            aperiam ducimus.
          </p>
        </div>
      </div>
    </div>
    <div class="nav-serv">
      <div class="nav-serv-parts">
        <a class="page-scroll" href="#ilustracoes">Ilustrações 3D</a>
        <a class="page-scroll" href="#animacoes">Animações</a>
      </div>
      <div class="nav-serv-parts">
        <a class="page-scroll" href="#plantas">Plantas Humanizadas</a>
        <a class="page-scroll" href="#realidade">Realidade Virtual</a>
      </div>


    </div>
    <div class="banner"></div>
    <div class="wrap-serv  wrap-ilu  serv-container">
      <div class="ilustracoes  serv-square" id="ilustracoes">
        <h2>ILUSTRAÇÕES 3D</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Doloremque laudantium veritatis qui quasi quo quaerat excepturi
          asperiores ex quibusdam dolorum, quia, earum magnam culpa ad animi
          laboriosam pariatur alias consequuntur.</p>
      </div>
      <div class="ilustracoes-img  serv-square"></div>
    </div>
    <div class="wrap-reverse-serv  wrap-anima  serv-container">
      <div class="animacoes  serv-square" id="animacoes">
        <h2>ANIMAÇÕES</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Doloremque laudantium veritatis qui quasi quo quaerat excepturi
          asperiores ex quibusdam dolorum, quia, earum magnam culpa ad animi
          laboriosam pariatur alias consequuntur.</p>
      </div>
      <div class="animacoes-img  serv-square"></div>
    </div>
    <div class="wrap-serv  wrap-plan  serv-container">
      <div class="plantas  serv-square" id="plantas">
        <h2>PLANTAS HUMANIZADAS</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Doloremque laudantium veritatis qui quasi quo quaerat excepturi
          asperiores ex quibusdam dolorum, quia, earum magnam culpa ad animi
          laboriosam pariatur alias consequuntur.</p>
      </div>
      <div class="plantas-img  serv-square"></div>
    </div>
    <div class="wrap-reverse-serv  wrap-real  serv-container">
      <div class="realidade-virtual  serv-square" id="realidade">
        <h2>REALIDADE VIRTUAL</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Doloremque laudantium veritatis qui quasi quo quaerat excepturi
          asperiores ex quibusdam dolorum, quia, earum magnam culpa ad animi
          laboriosam pariatur alias consequuntur.</p>
      </div>
      <div class="realidade-virtual-img  serv-square"></div>
    </div>
  </section>
  <footer class="footer">
    <div class="logo-footer">
      <img src="./img/logo1.png" alt="logo-footer" />
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
        <p>contato@blvd.com.br</p>
      </div>
    </div>
    <!--container-->
  </footer>
  <!--footer-->
  <!-- JavaScript -->
  <script>
    window.addEventListener("load", function() {
      const loader = document.querySelector(".pre-loader");
      loader.className += " hidden";
    });
  </script>
  <script src="./js/main.js"></script>
  <script src="./js/servicos.js"></script>
  <!-- JavaScript -->
</body>

</html>