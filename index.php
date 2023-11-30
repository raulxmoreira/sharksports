<?php
  include_once("templates/header.php");
?>

  <!-- Banner principal -->

<!-- Banner principal -->
<div class="container" id="banners-container">
  <div id="slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner.jpeg" class="d-block w-100 img-fluid" alt="banner-1">
      </div>
      <div class="carousel-item">
        <img src="img/banner3.jpeg" class="d-block w-100 img-fluid" alt="banner-3">
      </div>
      <div class="carousel-item">
        <img src="img/banner1.jpeg" class="d-block w-100 img-fluid" alt="banner-1">
      </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


    <!-- MINI BANNERS -->    
    <!-- deixar dentro da DIV CAROUSEL -->

    <div class="container" id="mini-banners">
      <div class="row justify-content-around">
        <div class="col-12 dark-bg-color" id="mini-banner-1">
          <h2>SUPLEMENTOS MAX TITANIUM</h2>
          <img src="img/MAX-removebg-preview.png" alt="produto 1">
          <a href="#">Compre Agora</a>
        </div>
        <div class="col-12 secondary-bg-color" id="mini-banner-2">
          <h2>SUPLEMENTOS GROWTH</h2>
          <img src="img/growth-removebg-preview (1).png" alt="produto 2">
          <a href="#">Compre Agora</a>
        </div>
        <div class="col-12 secondary-bg-color" id="mini-banner-3">
          <h2>SUPLEMENTOS DUX</h2>
          <img src="img/Dux-removebg-preview.png" alt="produto 3">
          <a href="#">Compre Agora</a>          
        </div>
      </div>
    </div>
  </div>

  <!-- BEST SELLERS -->

  <div class="container" id="best-sellers">
     <!-- Container para os produtos mais vendidos -->
    <h2 class="title primary-color">Mais vendidos</h2>
    <!-- Título da seção de produtos mais vendidos -->
    <div class="row">
    <!-- Linha que contém as colunas dos produtos -->
      <div class="col-12 col-md-3">
      <!-- Coluna para o primeiro produto -->
        <div class="card primary-bg-color">
          <img src="img/moletomshark-removebg-preview.png" class="card-img-top img-fluid" alt="Relógio 1">
          <!-- Imagem do produto -->
          <div class="card-body">
          <!-- Corpo do cartão -->
          <p class="card-category secondary-color">Roupa</p>
          <!-- Categoria do produto -->
          <h5 class="card-title">Moletom Shark Sports</h5>
          <!-- Nome do produto -->
          <p class="card-text primary-color">R$110,00</p>
          <!-- Preço do produto -->
          <a href="#" class="btn btn-primary">Comprar</a>
          <!-- Botão de compra -->
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card primary-bg-color">
          <img src="img/hipergrowth-removebg-preview.png" class="card-img-top img-fluid" alt="Relógio 4">
          <div class="card-body">
            <p class="card-category secondary-color">Suplemento</p>
            <h5 class="card-title">Hipercalórico sabor chocolate 1kg</h5>
            <p class="card-text primary-color">R$62,50</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card primary-bg-color">
          <img src="img/MAX-removebg-preview.png" class="card-img-top img-fluid" alt="Relógio 5">
          <div class="card-body">
            <p class="card-category secondary-color">Suplemento</p>
            <h5 class="card-title">Max titanium whey protein blend 2kg sabor vitamina de frutas</h5>
            <p class="card-text primary-color">R$102,50</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card primary-bg-color">
          <img src="img/regatashark-removebg-preview.png" class="card-img-top img-fluid" alt="Relógio 8">
          <div class="card-body">
            <p class="card-category secondary-color">Roupa</p>
            <h5 class="card-title">Regata Shark Sports</h5>
            <p class="card-text primary-color">R$39,99</p>
            <a href="<?= $BASE_URL ?>produto.php" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- BANNER DESTAQUE -->

  <div class="container-fluid" id="bottom-banner">
    <!-- Container de largura total da página -->
    <div class="row">
    <!-- Linha que contém duas colunas -->
        <div class="col-12 col-md-8">
            <!-- Subtítulo da oferta -->
            <h2 class="light-color">Venha <br> Conhecer</h2>
            <!-- Descrição do produto -->
            <a href="#" class="btn btn-primary">Comprar agora</a>
            <!-- Botão de compra -->
        </div>
        <!-- Coluna para a imagem -->
        <div class="col-12 col-md-4 imagem">
            <img src="img/18a21eba-bbc9-4775-9210-7cc0ea097858.jpg" alt="Relógio 6">
            <!-- Imagem do produto -->
        </div>
    </div>
</div>

  <!-- PRODUTOS -->

  <div class="container" id="products">
    <!-- Container para a seção de produtos -->
    <h2 class="title primary-color">Produtos</h2>
    <!-- Título da seção de produtos -->
    <div class="row">
    <!-- Linha que contém duas colunas -->
        <div class="col-12 col-md-3 d-none d-md-flex" id="products-banner">
        <!-- Coluna para o banner de produtos (ATENÇÃO! visível apenas em desktop) -->
            <p class="secondary-color">Os melhores</p>
            <!-- Texto secundário -->
            <h3>equipamentos</h3>
            <!-- Título da seção de relógios -->
            <p class="primary-color">pelos melhores preços</p>
            <!-- Texto primário -->
        </div>
        <!-- Coluna para a seção de produtos individuais -->
        <div class="col-12 col-md-9">
        <!-- Coluna para os produtos individuais -->
            <div class="row">
                <!-- Nova linha para os produtos individuais -->
                <!-- Repetir estrutura semelhante para cada produto -->
                <div class="col-12 col-md-4">
                <!-- Coluna para um produto -->
                    <div class="card primary-bg-color">
                    <!-- Cartão do produto -->
                        <img src="img/pulso-removebg-preview.png" class="card-img-top img-fluid" alt="Hand Grip">
                        <!-- Imagem do produto -->
                        <div class="card-body">
                        <!-- Corpo do cartão -->
                            <p class="card-category">Equipamento</p>
                            <!-- Categoria do produto -->
                            <h5 class="card-title">Hand Grip</h5>
                            <!-- Nome do produto -->
                            <p class="card-text">R$17,99</p>
                            <!-- Preço do produto -->
                            <a href="#" class="btn btn-primary">Comprar</a>
                            <!-- Botão de compra -->
                        </div>
                    </div>
                </div>
          <div class="col-12 col-md-4">
            <div class="card primary-bg-color">
              <img src="img/image-removebg-preview.png" class="card-img-top img-fluid" alt="Halter">
              <div class="card-body">
                <p class="card-category">Equipamento</p>
                <h5 class="card-title">Halter</h5>
                <p class="card-text">R$50,00</p>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card primary-bg-color">
              <img src="img/image-removebg-previe.png" class="card-img-top img-fluid" alt="Relógio">
              <div class="card-body">
                <p class="card-category">Equipamento</p>
                <h5 class="card-title">Kit 20kg Anilhas + 1 Barra 120cm Com Presilhas</h5>
                <p class="card-text">R$298,70</p>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card primary-bg-color">
              <img src="img/bola.png" class="card-img-top img-fluid" alt="Relógio">
              <div class="card-body">
                <p class="card-category">Equipamento</p>
                <h5 class="card-title">Bola para exercicios</h5>
                <p class="card-text">R$52,00</p>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card primary-bg-color">
              <img src="img/shakeira-removebg-preview (2).png" class="card-img-top img-fluid" alt="Relógio">
              <div class="card-body">
                <p class="card-category">Equipamento</p>
                <h5 class="card-title">Shakeira</h5>
                <p class="card-text">R$15,50</p>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card primary-bg-color">
              <img src="img/corda-removebg-preview.png" class="card-img-top img-fluid" alt="Relógio">
              <div class="card-body">
                <p class="card-category">Equipamento</p>
                <h5 class="card-title">Corda de pular crossfit</h5>
                <p class="card-text">R$15,00</p>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
    include_once("templates/footer.php");
?>