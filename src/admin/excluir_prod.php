<?php
//Conexão com o banco
require("../assets/bd/connect.php");

/* Caso haja uma informação de qual produto excluir, o programa executará a exclusão. */
if(isset($_GET['id_prod'])){

    $id = $_GET['id_prod'];

    /* Procurando registros com o código de produto fornecido. */
    $pesquisar_prod = "SELECT * FROM `produto` WHERE `cod_som` = '$id'";
    $resultado_prod = mysqli_query($conexao, $pesquisar_prod);
    $numero_resultado = mysqli_num_rows($resultado_prod);

    /* Se não houver produtos com o código, o programa será finalizado. Caso contrário a exclusão será continuada. */
    if($numero_resultado == 0)
    {
        ?>
        <script>
            alert("Este produto não foi encontrado...");
            javascript:history.back;
        </script>
        <?php
    }else{
        /* Criando o comando e executando-o no banco de dados. */
        $excluir_prod = "DELETE FROM `produto` WHERE `cod_som` = '$id'";
        mysqli_query($conexao, $excluir_prod);
        
        ?>
        <script>
            alert("Produto excluído!");
            window.location.replace("lista_prod.php");
        </script>
        <?php
    }
    mysqli_close($conexao);
}
?>