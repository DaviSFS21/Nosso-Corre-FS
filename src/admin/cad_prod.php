<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/images/Logo_P&F.png" type="image/x-icon">
  <!-- Link do CSS-->
  <link rel="stylesheet" href="style_cad.css">
  <title>Cadastrar produtos (admin)</title>
</head>

<body>
  <!-- Título do container esquerdo -->
  <h2>Nosso Corre - Cadastro de músicas</h2>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
    </div>
    <div class="form-container sign-in-container">
      <br>
      <!-- Formulario das descrições do produto que será cadastrado -->
      <form enctype="multipart/form-data" method="post" action="upload_prod.php">
        <!--Nome do produto-->
        Nome: <input name="c_nome_som" type=text size=140 maxlength=120>
        <!--Marca do produto-->
        Artista: <input name="c_artista" type=text size=100 maxlength=100>
        <!--Categoria do produto-->
        Categoria: <select name="c_categoria">
          <!--Select com as categorias existentes -->
          <option>Selecione...</option>
          <option value="samba">Samba</option>
          <option value="mpb">MPB</option>
          <option value="sertanejo">Sertanejo</option>
          <option value="rock">Rock</option>
          <option value="funk">Funk</option>
          <option value="bossa">Bossa Nova</option>
          <option value="gospel">Gospel</option>
          <option value="indie">Indie</option>
          <option value="forro">Forró</option>
          <option value="rap">Rap</option>
          <option value="trap">Trap</option>
          <option value="piseiro">Piseiro</option>
        </select><br>
        <input type=submit value=Enviar>
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
          <button><a href="index.php">Voltar</a></button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- JS Links -->
  <script src="./js/index.js"></script>
</body>

</html>