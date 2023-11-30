<?php
// Inclui o cabeçalho da página
include_once("templates/header.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- link bootstrap -->

    <!-- link js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- link icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- link css personalizado -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/sharkfavicom-removebg-preview.png" type="image/x-icon">
    <title>Sharksports</title>
</head>

<body>


    <!-- criando container para organizar o codigo -->
    <br>
    <h1 class="text-center">Produto <i class="bi bi-cart2"></i></h1>
    <br>
    <div class="container" style="color: #000">

        <div class="row">
            <h1 class="text-center" style="color:#fff"> Descrição:</h1>
            <div class="product">

                <?php
                $produtos = array(

                    "produto_B" => array("nome" => "Regata Shark Sports", "Preço" => 39, 99, "imagem" => "img/regatashark-removebg-preview.png"),


                );
                // 
                foreach ($produtos as $key => $produto) {
                    echo '

                    
            <div class="col-md-3">
                <div class="card2 card  mb-4 box-shadow">
                    <img class="card-img-top" src="' . $produto["imagem"] . '" alt="' . $produto["nome"] . '">
            
                    <h5 class="card-title ">' . $produto["nome"] . '</h5>

                    <p class="card-text">Preço: R$ ' . number_format($produto["Preço"], 2) . '</p>

                    <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '"
                    
                        <div class="form-group">
                            <label for = "quantidade_"' . $key . '>Quantidade:</label>

                            <div>
                            <h5 class="text-center">A camisa regata de academia na cor roxa é uma peça versátil e cheia de estilo. Feita com um tecido leve e respirável, é ideal para os treinos mais intensos. 
    
                            </h5>

                            <input type="number" class= "form-control" id="quantidade_' . $key . '" name="quantidade_' . $key . '"  required>   
                        
                        <input type="hidden" name="produto" value="' . $key . '">
                        
                        <button type="submit" class="btn btn-primary" style="color: #000"> Adicionar ao carrinho
                        </button>
                      

                        
                        </div>
                        
                    </form>
                    
                </div>
                


        ';
                }
                ?>

            </div>
        </div>

    </div>

    <?php
    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coleta o produto selecionado do formulário
        $produtoSelecionado = $_POST["produto"];

        // Coleta a quantidade de itens do formulário
        $quantidade = $_POST["quantidade_" . $produtoSelecionado];

        // Calcula o valor total
        $total = $produtos[$produtoSelecionado]["Preço"] * $quantidade;
        // Exibe um resumo da compra, incluindo a imagem do produto
        echo '<div class="alert alert-success secondary-bg-color text-center container">Você adicionou ' . $quantidade . ' ' . $produtos
        [$produtoSelecionado]["nome"] . '(s) por $  ' . number_format($total, 2) . '<br><img src="' . $produtos
            [$produtoSelecionado]["imagem"] . '" alt="' . $produtos[$produtoSelecionado]["nome"] . '"></div>';
        $comprovante = "Obrigado você acabou de realizar a compra de" . $quantidade . " " . $produtos[$produtoSelecionado]["nome"] . "(s) por R$" . number_format($total, 2) . "\n";




        file_put_contents("comprovante7.txt", $comprovante, FILE_APPEND);
    }
    ;

    ?>


    </div>

    <?php
    // Inclui o rodapé da página
    include_once("templates/footer.php");
    ?>

</body>

</html>