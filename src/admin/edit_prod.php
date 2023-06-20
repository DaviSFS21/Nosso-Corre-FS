<?php
//Conexão com o banco
require("../assets/bd/connect.php");

if(isset($_GET['id_prod'])){
    //Conexão com o banco
    $id = $_GET['id_prod'];

    //Gerando a SQL de PESQUISA das categorias existentes no BD
    $pesquisar_prod = "SELECT * FROM `produto` WHERE `cod_som` = '$id'";

    //Executando a SQL e armazenando o resultado em uma variavel
    $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

    //Obtendo o numero de linhas retornadas na pesquisa
    $numero_resultado = mysqli_num_rows($resultado_prod);

    if($numero_resultado == 0)
    {
        ?>
            <script>
                alert("Este produto não foi encontrado...");
                javascript:history.back;
            </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/Logo_P&F.png" type="image/x-icon">
    <!-- Link do CSS-->
    <link rel="stylesheet" href="style_cad.css">
    <title>Editar produto (Admin)</title>
</head>
<body>
    <?php
    for($i = 0; $i < $numero_resultado; $i++){
        //Gerando um vetor com as categorias
        $vetor_prod = mysqli_fetch_array($resultado_prod);
    }
    ?>
    <!-- Título do container esquerdo -->
    <h2>Comercial Pai & Filhos - Alterar atributos</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
        </div>
        <div class="form-container sign-in-container">
        <br>
        <!-- Formulario das descrições do produto que será cadastrado -->
        <form enctype="multipart/form-data" method="post" action="upload_prod.php">
            <!--Nome do produto-->
            Nome: <input name="c_nome_som" type=text size=140 maxlength=120 value="<?php echo $vetor_prod[1]; ?>">
            <!--Marca do produto-->
            Artista: <input name="c_artista" type=text size=100 maxlength=100 value="<?php echo $vetor_prod[2]; ?>">
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
            <a href="excluir_prod.php?id_prod=<?php echo $vetor_prod[0]; ?>">
            <button style="background-color: red; font-size: 15px;">Excluir</button></a>
            </div>
        </div>
        </div>
    </div>
    <br>
    <!-- JS Link -->
    <script src="./js/index.js"></script>
</body>
</html>