<?php
require("../assets/bd/connect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/Nosso_Corre.svg" type="image/x-icon">
    <!--  Link do CSS -->
    <link rel="stylesheet" href="../prod/style.css">
    <!-- Frameworks/libs do CSS -->
    <!-- Bootstrap - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- W3.CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <!-- Cloudflare -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

    <title>Gêneros - Nosso Corre</title>
</head>

<body id="home">
    <!-- DIV geral da nav -->
    <div id="header_1">
        <!-- DIV do nome da empresa -->
        <div class="logo_1">
            <a href="../index/index.php">Nosso Corre</a>
            <!-- Fim - Div -->
        </div>
        <!-- NAV -->
        <nav style="width: 891px; padding-top: 5px; margin-right: 113px;">
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
                        <li class="scroll" style="margin-left: -30px;">
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
                    <a href="../contatos/contatos.php">Contatos</a>
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
    <hr>
    <?php
    /* Caso não haja uma categoria selecionada através do $_GET, o site irá pesquisar todas as categorias de produtos no banco de dados
    de forma separada, apresentando-as atráves de uma estrutura de repetição que vai mostrar todos os produtos daquela categoria. 
    Caso contrário, o site processará somente a pesquisa da categoria escolhida no banco de dados. */
    if (isset($_GET['search'])) {
        $col = 0;

        $search = $_GET['search'];

        echo "<h2 class='text-center'>Resultados da pesquisa '$search'</h2><hr>";

        //Gerando a SQL de PESQUISA das categorias existentes no BD
        $pesquisar_prod = "SELECT * FROM `produto` WHERE `nome_som` LIKE '%$search%'";

        //Executando a SQL e armazenando o resultado em uma variavel
        $resultado_prod = mysqli_query($conexao, $pesquisar_prod);

        //Obtendo o numero de linhas retornadas na pesquisa
        $numero_resultado = mysqli_num_rows($resultado_prod);

        if ($numero_resultado != 0) {
            //Existe categorias cadastradas!
            for ($i = 1; $i <= $numero_resultado; $i++) {
                $vetor_prod = mysqli_fetch_array($resultado_prod);

                $col += 1;

                if ($col == 1) {
                    echo '
            <section id="col" style="margin-bottom: 50px;">
                <div class="container-fluid text-center">
                    <div class="text-success"></div>
                    <div class="row">';
                }

                if ($col == 1) {
                    echo '
                        <div class="col-1 offset-sm-1">';
                }
                if ($col == 2) {
                    echo '
                        <div class="col-2 offset-md-3">';
                }

                if ($col == 3) {
                    echo '
                        <div class="col-3 offset-sm-2">';
                }
                echo '
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">'.$vetor_prod[1].'</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">'.$vetor_prod[2].'</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">'.$vetor_prod[3].'</p>
                        </div>
                        <button type="button" class="btn btn-success">
                            <a href="edit_prod.php?id_prod='.$vetor_prod[0].'" class="color-hover">Editar produto</a>
                        </button>
                    </div>
                </div>';
                if ($col == 3) {
                    echo '
                    </div>
                </div>
            </section>
                      ';
                    $col = 0;
                }
            }
        } else {
            echo "<h2 class='text-center'>Nenhuma música foi encontrada...</h2>";
        }
    }
    ?>
    <!-- Bootstrap - JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
<?php mysqli_close($conexao); ?>