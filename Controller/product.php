<?php
include_once("templates/header.php");

// Instancie a classe UserController
$userController = new UserController($suaConexaoPDO, $suaURL);

// Verifique se um ID de produto foi fornecido na URL
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Obtenha detalhes do produto usando o método findById da classe UserController
    $product = $userController->findProductById($product_id);

    if ($product) {
        // Exiba os detalhes do produto
        echo "<h2>{$product->product}</h2>";
        echo "<p>{$product->description}</p>";
        echo "<p>Categoria: {$product->category}</p>";
        echo "<p>Preço: R$ {$product->price}</p>";
        echo "<img src='{$product->image}' alt='{$product->product}' class='img-fluid'>";
        echo "<a href='#' class='btn btn-primary'>Comprar</a>";
    } else {
        // Produto não encontrado
        echo "<p>Produto não encontrado.</p>";
    }
} else {
    // ID do produto não fornecido
    echo "<p>ID do produto não fornecido.</p>";
}

include_once("templates/footer.php");
?>
