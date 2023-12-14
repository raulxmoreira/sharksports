<?php
// Inclui o cabeçalho da página
include_once("templates/header.php");
?>

<body>


  <!-- criando container para organizar o codigo -->
  <br>
  <h1 class="text-center">Carrinho de compras <i class="bi bi-cart2"></i></h1>
  <br>
  <div class="container" style="color: #000">

    <div class="row">

      <?php
      $produtos = array(

        "produto_C" => array("nome" => "Regata Shark Sports com tecido leve e respiravel", "<br>", "Preço" => 39, 00, "imagem" => "img/regatashark-removebg-preview.png"),

      );
      // 
      foreach ($produtos as $key => $produto) {
        echo '
            <div class="col-md-4 align-center">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="' . $produto["imagem"] . '" alt="' . $produto["nome"] . '">
            
                    <h5 class="card-title">' . $produto["nome"] . '</h5>

                    <p class="card-text">Preço: R$ ' . number_format($produto["Preço"], 2) . '</p>

                    <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '"
                    
                        <div class="form-group">
                            <label for = "quantidade_"' . $key . '>Quantidade:</label>

                            <input type="number" class= "form-control" id="quantidade_' . $key . '" name="quantidade_' . $key . '"  required>   
                        
                        <input type="hidden" name="produto" value="' . $key . '"> <br>
                        
                        <a href="confirmacao.php" class="btn btn-primary secondary-color">Comprar</a>
                        
                        </div>
                    </form>
                </div>
        ';
      }
      ?>

    </div>


    <?php
    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Coleta o produto selecionado do formulário
      $produtoSelecionado = $_POST["produto"];

      // Coleta a quantidade de itens do formulário
    
      if ($key <= 0) {

        echo '<div class="alert alert-danger primary-color text-left"></div>';


      } else {
        $quantidade = $_POST["quantidade_" . $produtoSelecionado];

        // Calcula o valor total
        $total = $produtos[$produtoSelecionado]["Preço"] * $quantidade;
        // Exibe um resumo da compra, incluindo a imagem do produto
        echo '<div class="alert alert-success secondary-bg-color text-center container">Você comprou ' . $quantidade . ' ' . $produtos
        [$produtoSelecionado]["nome"] . '(s) por $  ' . number_format($total, 2) . '<br><img src="' . $produtos
          [$produtoSelecionado]["imagem"] . '" alt="' . $produtos[$produtoSelecionado]["nome"] . '"></div>';
        $comprovante = "Obrigado você acabou de realizar a compra de" . $quantidade . " " . $produtos[$produtoSelecionado]["nome"] . "(s) por R$" . number_format($total, 2) . "\n";

        file_put_contents("comprovante7.txt", $comprovante, FILE_APPEND);

      }


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