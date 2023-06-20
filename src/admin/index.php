<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/images/Logo_P&F.png" type="image/x-icon">
  <!-- Link do CSS-->
  <link rel="stylesheet" href="style_index.css">
  <title>Admin - Nosso Corre</title>
</head>

<body>
  <!-- Título do container esquerdo -->
  <h2>Nosso Corre - Página de administrador</h2>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
    </div>
    <div class="form-container sign-in-container">
      <!-- Elementos deontro do container -->
      <form action="#">
        <!--Título -->
        <h1>Gerenciamento</h1>
        <!-- Cadastrar produto -->
        <button><a href="./cad_prod.php">Cadastrar</a></button>
        <!-- Alterar produto -->
        <button><a href="./lista_prod.php">Alterar/Excluir</a></button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">

        </div>
        <!-- Class do container direito -->
        <div class="overlay-panel overlay-right">
          <h1>Olá!</h1>
          <p>Acesso restrito</p>
          <button><a href="../index/index.php">Voltar</a></button>
        </div>
      </div>
    </div>
  </div>
<!-- JS Links -->
  <script src="./js/index.js"></script>
</body>

</html>