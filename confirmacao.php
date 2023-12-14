<?php
// Inclui o cabeçalho da página
include_once("templates/header.php");
?>
<h1 class="text-center">Confirmação de compra</h1>
<form method="post" action="compra.php">
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
      <div class="col-md-6">
        <h2>Regata Shark Sports</h2>
        <p>A camisa regata de academia na cor roxa é uma peça versátil e cheia de estilo. Feita com um tecido leve e
          respirável, é ideal para os treinos mais intensos.</p>
        <h3>
          <p><strong>Preço: R$39,00</strong></p>
        </h3>
        <h2>Tamanhos:</h2>
        <div class="col md-6 tamanho">
          <input type="radio" class="btn-check " name="options-base" id="option5" autocomplete="off">
          <label class="btn inputs" for="option5">P</label>
          <input type="radio" class="btn-check " name="options-base" id="option6" autocomplete="off">
          <label class="btn inputs" for="option6">M</label>
          <input type="radio" class="btn-check " name="options-base" id="option8" autocomplete="off">
          <label class="btn inputs" for="option8">G</label>
          <input type="radio" class="btn-check  " name="options-base" id="option7" autocomplete="off">
          <label class="btn inputs" for="option7">GG</label>
        </div> <br>

        <!-- formas de pagamento -->
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
          <label class="btn btn-outline-primary primary-color" for="btnradio1"><i class="bi bi-credit-card"></i> Cartão
            de crédito</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
          <label class="btn btn-outline-primary primary-color" for="btnradio2"><i class="bi bi-credit-card"></i> Cartão
            de débito</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
          <label class="btn btn-outline-primary primary-color" for="btnradio3"><i class="bi bi-x-diamond-fill"></i>
            PIX</label>
        </div> <br> <br>

        <!-- input para CEP -->
        <div class="form-group">
          <label for="cepInput">CEP</label>
          <input type="text" class="form-control" id="cepInput" placeholder="Digite o CEP"> <br>
        </div>

        <!-- botão para confirmar a compra -->
        <button type="submit" class="btn btn-primary">Comprar</button> <br>
      </div>
    </div>
    </form>
  </div>
<?php
include_once("templates/footer.php");
?>
