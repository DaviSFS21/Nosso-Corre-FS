<!-- Upload do produto alterado/atualizado no edit_prod.php -->

  <script>
    window.location.replace("../login/index.php");
  </script>
<?php
if($_POST['a_categoria'] == "Selecione..."){
  ?>
  <script>
      alert("Selecione uma categoria...");
      javascript:history.back();  
  </script>
  <?php
  die();
}

require("../assets/bd/connect.php");

/* O upload só será efetuado caso o arquivo da imagem exista no $_POST do formulário, 
caso contrário a página levará a tela inicial do administrador. */
if(isset($_POST['id_prod'])){
    require("../assets/bd/connect.php");

    $id = $_POST['id_prod'];
    $nome_som = $_POST['a_nome_som'];
    $desc_som = $_POST['a_desc_som'];
    $artista = $_POST['a_artista'];
    $categoria = $_POST['a_categoria'];

    $pesquisar_a_prod = "UPDATE `produto` SET `nome_som` = '$nome_prod',
    `artista` = '$artista',`categoria` = '$categoria' WHERE `cod_som` = '$id'";
    mysqli_query($conexao, $pesquisar_a_prod);
    ?>
    <script>
        alert("Produto atualizado!");
        window.location.replace("lista_prod.php");
    </script>
    <?php
    /* Fechando a conexão com o banco de dados. */
    mysqli_close($conexao);
  }
?>