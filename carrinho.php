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
   <h1 class="text-center">Carrinho de compras <i class="bi bi-cart2"></i></h1>
   <br>
   <div class="container" style="color: #000">
    
    <div class="row">
        
        <?php
        $produtos = array(
            
            "produto_C" => array("nome" => "Regata Shark Sports com tecido leve e respiravel", "<br>", "Preço" => 39,00, "imagem" => "img/regatashark-removebg-preview.png"),

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
                        
                        <input type="hidden" name="produto" value="' . $key . '">
                        
                        <button type="submit" class="btn btn-primary" style="color: #000">Comprar</button>
                        
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

            echo '<div class="alert alert-danger primary-color text-left">vai tomar no cu velho broxa</div>';


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
  <!-- FOOTER -->

  <footer id="footer">
    <!-- Seção do rodapé -->
    <div class="container-fluid" id="footer-links-container">
      <!-- Container para os links do rodapé -->
      <div class="row">
        <!-- Linha que contém três colunas de links -->
        <div class="col-12 col-md-4 footer-column">
          <!-- Coluna para os links de páginas -->
          <h3>Páginas</h3>
          <!-- Título da seção de links -->
          <ul class="list-unstyled">
            <!-- Lista não ordenada de links -->
            <li class="mb-2"><a href="#" class="secondary-color">Home</a></li>
            <li class="mb-2"><a href="#" class="secondary-color">Planos</a></li>
            <li class="mb-2"><a href="#" class="secondary-color">Produtos</a></li>
            <li class="mb-2"><a href="#" class="secondary-color">Contato</a></li>
          </ul>
        </div>
        <!-- Coluna central para informações da loja -->
        <div class="col-12 col-md-4 footer-column" id="footer-center">
          <h3>Shark Sports</h3>
          <p class="secondary-color">Alguma dúvida? Ligue para nós</p>
          <p class="store-phone"><i class="bi bi-telephone"></i> (11)99999-9999</p>
        </div>
        <!-- Coluna para os links de informações adicionais -->
        <div class="col-12 col-md-4 footer-column">
          <h3>Informações</h3>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#" class="secondary-color">Política de Privacidade</a></li>
            <li class="mb-2"><a href="#" class="secondary-color">Política de Entrega</a></li>
            <li class="mb-2"><a href="#" class="secondary-color">Rastreie seu pedido</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Seção de inscrição na newsletter e ícones de redes sociais -->
    <div class="container-fluid" id="newsletter-container">
      <div class="col-12">
        <div class="row">
          <p class="secondary-color">Se inscreva na nossa Newsletter:</p>
          <form class="d-flex" id="news-form">
            <i class="bi bi-envelope primary-color"></i>
            <input class="form-control me-2" placeholder="Insira seu e-mail">
            <button class="btn secondary-bg-color" type="submit">Enviar</button>
          </form>
        </div>
      </div>
      <div class="col-12" id="social-container">
        <i class="bi bi-facebook"></i>
        <i class="bi bi-instagram"></i>
        <i class="bi bi-youtube"></i>
        <i class="bi bi-twitter"></i>
      </div>
    </div>
    <!-- Seção com informações de direitos autorais -->
    <div class="container" id="copy-container">
      <p>Todos os direitos reservados @2023 <span class="primary-color">Shark Sports</span></p>
    </div>
  </footer>

</body>

</html>