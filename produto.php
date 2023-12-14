<?php
// Inclui o cabeçalho da página
include_once("templates/header.php");
?>

<?php 
$produtos = array(
    "produto_B" => array("nome" => "Regata Shark Sports", "Preço" => 39, 99, "imagem" => "img/regatashark-removebg-preview.png"),
);
?>
<div class="container"></div>

<form method="post">
<div class="container mt-5 produto">
  <div class="row">
    <!-- Imagens do Produto (Coluna 1) -->
    <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <img src="img\regatafrente.jpg" class="img-fluid mb-3" alt="regata sharksports frente">
          </div>
          <div class="col-md-6">
            <img src="img\regatacostas.jpg" class="img-fluid mb-3" alt="regata sharksports costas">
          </div>
        </div>
      </div>
    
    <!-- Descrição do Produto (Coluna 2) -->
        <div class="col-md-6">
          <h2>Regata Shark Sports</h2>
          <p>A camisa regata de academia na cor roxa é uma peça versátil e cheia de estilo. Feita com um tecido leve e respirável, é ideal para os treinos mais intensos.</p>
          <p><strong>Preço: R$39,00</strong></p>
        
          <!--campo de quantidade -->
          <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" value="1" min="1"> <br> <br>
                <!-- botão para adicionar ao carrinho -->
    <button class="btn btn-primary" type="submit" name="adicionarAoCarrinho">Adicionar ao Carrinho</button>
</form>

        </div>
    </form>

    </div>
</div>


<?php

// Verifica se o formulário foi enviado e se o botão específico foi pressionado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionarAoCarrinho"])) {
    // Coleta o produto selecionado do formulário
    $produtoSelecionado = "produto_B"; // Substitua pelo valor correto do seu formulário

    // Coleta a quantidade de itens do formulário
    $quantidade = isset($_POST["quantidade"]) ? intval($_POST["quantidade"]) : 1;

    // Calcula o valor total
    $total = $produtos[$produtoSelecionado]["Preço"] * $quantidade;

    // Exibe a mensagem de confirmação diretamente no PHP
    echo '<div class="alert alert-success secondary-bg-color text-center container">';
    echo 'Você adicionou ' . $quantidade . ' ' . $produtos[$produtoSelecionado]["nome"] . '(s) por R$ ' . number_format($total, 2) . '<br>';
    echo '<img src="' . $produtos[$produtoSelecionado]["imagem"] . '" alt="' . $produtos[$produtoSelecionado]["nome"] . '">';
    echo '</div>';

    // Salva o comprovante em um arquivo
    $comprovante = "Obrigado, você acabou de realizar a compra de " . $quantidade . " " . $produtos[$produtoSelecionado]["nome"] . "(s) por R$ " . number_format($total, 2) . "\n";

    file_put_contents("comprovante7.txt", $comprovante, FILE_APPEND);
}
?>


    </div>
    </div>
    </div>

    <?php
    // Inclui o rodapé da página
    include_once("templates/footer.php");
    ?>

</body>

</html>