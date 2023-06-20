<!-- Upload do produto cadastrado no cad_prod.php -->

<?php
if($_POST['c_categoria'] == "Selecione..."){
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
if(isset($_POST['c_nome_som'])){

    $nome_som = $_POST['c_nome_som'];
    $desc_som = $_POST['c_desc_som'];
    $artista = $_POST['c_artista'];
    $categoria = $_POST['c_categoria'];

    /* Pesquisando produtos iguais com os fornecidos pelo usuário. */
    $pesquisar_prod = "SELECT * FROM `produto` WHERE nome_som = '$nome_prod'";
    $resultado_prod = mysqli_query($conexao, $pesquisar_prod);
    $numero_retorno = mysqli_num_rows($resultado_prod);

    /* Se não houver nenhum produto com o mesmo nome do fornecido no formulário, a declaração das informações no SQL será feita.
    Caso contrário, o usuário retornará ao formulário. */
    if($numero_retorno == 0){
        /* Criando o comando para SQL e executando-o no banco de dados com as informações processadas. */
        $sql_cadastrar = "INSERT INTO `produto`(`nome_som`,`artista`,`categoria`) 
        VALUES ('$nome_som','$artista','$categoria')";
        mysqli_query($conexao, $sql_cadastrar);
    
    ?>
        <script>
            alert("Produto cadastrado!");
            window.location.replace("lista_prod.php");
        </script>
    <?php
    }else{
        ?>
            <script>
                alert("Produto já existe...");
                javascript:history.back();
            </script>
        <?php
    }
}else{
    ?>
    <script>window.location.replace("index.php")</script>
    <?php
}
/* Fechando a conexão com o banco de dados. */
mysqli_close($conexao);
?>