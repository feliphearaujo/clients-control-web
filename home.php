<?php
//iniciando o uso da sessão
session_start();
//include_once "controller/pessoaController.php";
include "cabecalho.html";
?>

<!-- carrossel -->
<div id="carouselExampleIndicators" class="container carousel slide">
  <div class="carousel-indicators" id="slider">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" id="slider">
    <div class="carousel-item active">
      <img src="img/banner-1.webp" class="d-block w-100" alt="Cliente 1">
      <div class="carousel-caption">
        <h5>Clientes Satisfeitos</h5>
        <a href="#" class="btn btn-dark">Saiba Mais</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner-2.webp" class="d-block w-100" alt="Cliente 2">
      <div class="carousel-caption">
        <h5>Otimização de logistica</h5>
        <a href="#" class="btn btn-dark">Saiba Mais</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner-3.webp" class="d-block w-100" alt="Cliente 3">
      <div class="carousel-caption">
        <h5>Controle nas suas mãos</h5>
        <a href="#" class="btn btn-dark">Saiba Mais</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <i class="bi bi-chevron-compact-left"></i>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <i class="bi bi-chevron-compact-right"></i>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>

<!-- mini banners -->
<div class="col-12 col-md-10 offset-md-1" id="mini-banners">
  <div class="row">
    <div class="col-12 col-md-4">
      <div class="card text-center">
        <i class="bi bi-box primary-color"></i>
        <div class="card-body">
          <h5 class="card-title">Lorem ipsum</h5>
          <p class="card-text">With supporting text below as a natural  lead-in to additional content.</p>
          <a href="#" class="btn btn-custom">Saiba Mais</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="card text-center">
        <i class="bi bi-layers primary-color"></i>
        <div class="card-body">
          <h5 class="card-title">Lorem ipsum</h5>
          <p class="card-text">With supporting text below as a natural  lead-in to additional content.</p>
          <a href="#" class="btn btn-custom">Saiba Mais</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="card text-center">
        <i class="bi bi-lightning-charge primary-color"></i>
        <div class="card-body">
          <h5 class="card-title">Lorem ipsum</h5>
          <p class="card-text">With supporting text below as a natural  lead-in to additional content.</p>
          <a href="#" class="btn btn-custom">Saiba Mais</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- destaques -->
<div class="container" id="featured-container">
  <div class="col-12">
    <h2 class="title primary-color">Trabalhos em destaque</h2>
    <p class="subtitle secondary-color">Conheça nosso projetos mais desafiadores</p>
  </div>
  <div class="col-12" id="featured-images">
    <div class="row g-4">
      <div class="col-12 col-md-4">
        <img src="img/projeto-1.webp" alt="projeto 1" class="img-fluid">
        <div class="banner-content">
          <p class="secondary-color">Categoria</p>
          <h3>Nome do projeto</h3>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <img src="img/projeto-2.webp" alt="projeto 2" class="img-fluid">
        <div class="banner-content">
          <p class="secondary-color">Categoria</p>
          <h3>Nome do projeto</h3>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <img src="img/projeto-3.webp" alt="projeto 3" class="img-fluid">
        <div class="banner-content">
          <p class="secondary-color">Categoria</p>
          <h3>Nome do projeto</h3>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <img src="img/projeto-4.webp" alt="projeto 4" class="img-fluid">
        <div class="banner-content">
          <p class="secondary-color">Categoria</p>
          <h3>Nome do projeto</h3>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <img src="img/projeto-5.jpg" alt="projeto 5" class="img-fluid">
        <div class="banner-content">
          <p class="secondary-color">Categoria</p>
          <h3>Nome do projeto</h3>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <img src="img/projeto-6.jpg" alt="projeto 6" class="img-fluid">
        <div class="banner-content">
          <p class="secondary-color">Categoria</p>
          <h3>Nome do projeto</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- info -->
<div class="container" id="info-container">
  <div class="col-12">
    <h2 class="title primary-color">Detalhes importantes</h2>
    <p class="subtitle secondary-color">
      Saiba mais sobre a experiência da nossa incrivel equipe
    </p>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="col-12 col-md-5" id="info-banner">
        <img src="img/info-banner.jpg" alt="informações da empresa" class="img-fluid">
      </div>
      <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
        <div class="row">
          <h2 class="title primary-color">Estes dados fazem a diferença</h2>
          <p class="subtitle secondary-color">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius corporis consectetur, veritatis omnis exercitationem voluptate sapiente ratione eveniet debitis eos, sequi perferendis dolor sunt, ab laborum doloremque beatae adipisci amet!
          </p>
        </div>
        <div class="col-12" id="info-numbers">
        <div class="row">
          <div class="col-4">
            <h3 class="primary-color">18</h3>
            <p class="secondary-color">Anos em desenvolvimento de software</p>
          </div>
          <div class="col-4">
            <h3 class="primary-color">95</h3>
            <p class="secondary-color">Projetos executados</p>
          </div>
          <div class="col-4">
            <h3 class="primary-color">639</h3>
            <p class="secondary-color">Clientes</p>
          </div>
        </div>
      </div>
      <div class="col-12">
        <a href="#" class="btn btn-dark">Saber Mais</a>
      </div>

      </div>
      
    </div>
  </div>
</div>

<?php
include "rodape.html";
?>