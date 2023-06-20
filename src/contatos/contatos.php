<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../assets/images/Nosso_Corre.svg" type="image/x-icon">
  <!-- Link do CSS-->
  <link rel="stylesheet" href="./style_ctt.css" />

  <!-- Frameworks/libs do CSS -->
  <!-- Bootstrap - CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- W3.CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <!-- Cloudflare -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>Contatos - Nosso Corre</title>
</head>

<body id="#home">
  <!-- DIV geral da nav -->
  <div id="header_1">
    <!-- DIV do nome da empresa -->
    <div class="logo_1">
      <a href="../index/index.php">Nosso Corre</a>
      <!-- Fim - Div -->
    </div>
    <!-- NAV -->
    <nav style="width: 820px; padding-top: 5px; margin-right: 113px;">
      <!-- ul engloba e ordena todos os 'li' -->
      <ul style="padding-left: 0px;">
        <!-- li para acesso do index -->
        <li>
          <a href="../index/index.php">Início</a>
        </li>
        <!-- li para acesso da tela produtos -->
        <li>
          <a href="../prod/index.php">Gêneros</a>
          <ul class="drop" style="margin-left: 40px;">
            <!-- li do dropdown para acessar as cetegorias de produtos -->
            <li class="scroll" style="margin-left: -30px">
              <ul class="mega-col" style="margin-right: 20px ;">
                <li><a href="../prod/index.php?categ=samba">Samba</a></li>
                <li><a href="../prod/index.php?categ=mpb">MPB</a></li>
                <li><a href="../prod/index.php?categ=sertanejo">Sertanejo</a></li>
                <li><a href="../prod/index.php?categ=rock">Rock</a></li>
              </ul>
              <ul class="mega-col">
                <li><a href="../prod/index.php?categ=funk">Funk</a></li>
                <li><a href="../prod/index.php?categ=bossa">Bossa Nova</a></li>
                <li><a href="../prod/index.php?categ=gospel">Gospel</a></li>
                <li><a href="../prod/index.php?categ=indie">Indie</a></li>
              </ul>
              <ul class="mega-col">
                <li><a href="../prod/index.php?categ=forro">Forró</a></li>
                <li><a href="../prod/index.php?categ=rap">Rap</a></li>
                <li><a href="../prod/index.php?categ=trap">Trap</a></li>
                <li><a href="../prod/index.php?categ=piseiro">Piseiro</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- li para acessar a página de contatos da empresa -->  
        <li class="drop_1">
          <a href="../admin/index.php">Admin</a>
        </li>
        <li class="drop_1">
          <a href="#home">Contatos</a>
        </li>
        <!-- form do search para conseguir pesquisar os produtos de forma automática -->
        <form action="../prod/search.php" method="GET" class="d-flex" role="search" style="padding-top: 27px; padding-left: 45px;">
          <!-- Input para fazer a pesquisa -->
          <input class="form-control" type="search" placeholder="Pesquisar" name="search" aria-label="Pesquisar" list="datalistOptions" style="margin-right: 4px; margin-left: -10px; width: 10pc;">
          <!-- Botão para fazer a pesquisa do produto -->
          <button class="btn btn-outline-success" type="submit" style="margin-right: -48px;"><i class="fa fa-search"></i></button>
          <!-- Fim - form -->
        </form>
        <!-- Fim - ul -->
      </ul>
      <!-- Fim - Nav -->
    </nav>
    <!-- Fim - Div -->
  </div>
  <main>
    <!-- Header -->
    <header class="w3-container w3-padding" id="myHeader">
      <!--Class dos cards -->
      <div class="w3-center">
        <!-- Título do class principal -->
        <h2 class="display-4" id="text">Sobre a empresa</h2>
        <!-- Subtitulo da class principal -->
        <b class="text-about">O Nosso Corre é uma empresa feita por alunos do Colégio Joseense.
          ele foi desenvolvido para o TCC.
        </b>
      </div>
    </header>
  </main>
  <!-- Class do card esquerdo -->
  <div class="w3-row-padding w3-center w3-margin-top">
    <div class="w3-third">
      <!--Fim do class do card esquerdo -->
      <div class="w3-card w3-container " style="min-height:460px;"> <br>
        <!-- Título do card da esquerda -->
        <h1 style="color: var(--color-green); font-family: var(--font-used);">Contatos</h1><br>
        <i class="fa fa-phone w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
        <!-- Informações gerais do card da esquerda -->
        <p>+55 (12) 96634-0163</p>
        <p>nossocorre@gmail.com</p>
        <i class="fa fa-instagram" style="font-size: 20px"></i>
        <a href="#" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: #198754;">
          <p>@nossoCorre
        </a></p>
        <!-- Fim das div's -->
      </div>
    </div>
    <!-- Class do card central -->
    <div class="w3-third">
      <div class="w3-card w3-container" style="min-height:460px">
        <!-- Fim da class central -->
        <div class="container-fluid">
          <!-- Título da class do card central -->
          <div class="title">
            <br />
            <!-- Informações gerais do card central -->
            <h1 style="color: var(--color-green); font-family: var(--font-used);">localização</h1>
            <p>
              Vale do silício
            </p>
            <div class="container">
              <!-- Link do google maps -->
              <iframe src="https://www.google.com/maps/embed?pb=!4v1687114380409!6m8!1m7!1sQp-4P7aNBUGHt_Fq1aqLqg!2m2!1d37.33636693751719!2d-121.890795041336!3f240.13939712802184!4f21.985267291029544!5f0.4000000000000002" width="370" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="#loc"></iframe>
              <!-- Fim das div's -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Class do card da direita -->
    <div class="w3-third">
      <!-- Fim do class do card da direita -->
      <div class="w3-card w3-container" style="min-height:460px">
        <br>
        <!-- Título do card da direita -->
        <h1 style="color: var(--color-green); font-family: var(--font-used);">Nossa logo</h1>
        <img src="../assets/images/Nosso_Corre.svg" alt="Pai & Filhos" style="height: 250px; width: 260px;">
        <!-- Informações gerais do card da direita -->
        <!-- Fim das div's -->
      </div>
    </div>
  </div>
  <br />
  <!-- JS links -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="./js/main-ctt.js"></script>
  <script src="./js/rating.js"></script>
</body>
</html>