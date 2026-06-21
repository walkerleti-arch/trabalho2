<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depósito São José</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="img/logo D.png" alt="Logo da Empresa" style="height: 80px; width: auto;">
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">PROMOÇÕES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRODUTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTATO</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">PROCURAR</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="carousel-wrapper">
        <div class="carousel-container">

            <!-- Slides -->
            <div class="carousel-slides" id="carouselSlides">

                <!-- Slide 1 -->
                <div class="carousel-slide">
                    <img src="img/fio1.png" alt="Imagem 1">
                    <div class="carousel-caption"></div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <img src="img/CAT1.png" alt="Imagem 2">
                    <div class="carousel-caption"></div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide">
                    <img src="img/cid2.png" alt="Imagem 3">
                    <div class="carousel-caption"></div>
                </div>

            </div>

            <!-- Botões -->
            <button class="carousel-btn prev" id="prevBtn">❮</button>
            <button class="carousel-btn next" id="nextBtn">❯</button>

        </div>
    </div>

    <div class="container">
        <div class="promocoes-section">
            <?php
            // Título da seção
            echo '<h2 class="promocoes-titulo">NOSSAS PROMOÇÕES</h2>';
            ?>
        </div>
    </div>

    <!-- ===== CARDS DE PRODUTOS (3 CARDS LADO A LADO) ===== -->
    <div class="container mb-5">
        <div class="row justify-content-center">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 100%; max-width: 350px;">
                    <img src="img/cime.webp" class="card-img-top" alt="Cimento Votoran 50kg" style="height: 350px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Cimento Votoran 50kg</h5>
                        <p class="card-text">O cimento CP II F-32 todas as obras 50kg da Votoran é indicado para aplicações gerais na construção civil, oferecendo versatilidade, resistência e desempenho confiável.</p>
                        <div class="preco-container">
                            <span class="preco-antigo">R$ 35,00</span>
                            <span class="preco-promocional">R$ 30,00</span>
                        </div>
                        <a href="#" class="btn btn-primary">VER MAIS</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 100%; max-width: 350px;">
                    <img src="img/fio.webp" class="card-img-top" alt="Cabo Flexível Cobrecom" style="height: 350px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Cabo Flexível Cobrecom</h5>
                        <p class="card-text">O Cabo Flexível 4mm² 750V 100 Metros é indicado para instalações elétricas que exigem maior capacidade de condução de corrente, oferecendo segurança, eficiência e alto desempenho.</p>
                        <div class="preco-container">
                            <span class="preco-antigo">R$ 430,00</span>
                            <span class="preco-promocional">R$ 410,00</span>
                        </div>
                        <a href="#" class="btn btn-primary">VER MAIS</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 100%; max-width: 350px;">
                    <img src="img/car.webp" class="card-img-top" alt="Carrinho de Mão Aço Gordini Soft" style="height: 350px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Carrinho de Mão Aço Gordini Soft</h5>
                        <p class="card-text">O Carrinho de Mão Esfera Soft é um produto muito útil para transporte de materiais como pedra, terra, areia e cimento e retirada de entulhos.</p>
                        <div class="preco-container">
                            <span class="preco-antigo">R$ 160,00</span>
                            <span class="preco-promocional">R$ 130,00</span>
                        </div>
                        <a href="#" class="btn btn-primary">VER MAIS</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== SCRIPT ===== -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const slides = document.querySelectorAll('.carousel-slide');
            const indicators = document.querySelectorAll('.carousel-indicator');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const slidesContainer = document.getElementById('carouselSlides');

            let currentSlide = 0;
            const totalSlides = slides.length;
            let autoPlayInterval;

            // Função para ir para um slide específico
            function goToSlide(index) {
                // Trata os limites
                if (index < 0) {
                    currentSlide = totalSlides - 1;
                } else if (index >= totalSlides) {
                    currentSlide = 0;
                } else {
                    currentSlide = index;
                }

                // Move o carrossel
                const offset = -currentSlide * 100;
                slidesContainer.style.transform = `translateX(${offset}%)`;

                // Atualiza os indicadores
                indicators.forEach((indicator, i) => {
                    indicator.classList.toggle('active', i === currentSlide);
                });
            }

            // Próximo slide
            function nextSlide() {
                goToSlide(currentSlide + 1);
                resetAutoPlay();
            }

            // Slide anterior
            function prevSlide() {
                goToSlide(currentSlide - 1);
                resetAutoPlay();
            }

            // Auto-play
            function startAutoPlay() {
                if (autoPlayInterval) clearInterval(autoPlayInterval);
                autoPlayInterval = setInterval(nextSlide, 4000);
            }

            function resetAutoPlay() {
                clearInterval(autoPlayInterval);
                startAutoPlay();
            }

            // Eventos dos botões
            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);

            // Eventos dos indicadores
            indicators.forEach((indicator) => {
                indicator.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    goToSlide(index);
                    resetAutoPlay();
                });
            });

            // Pausa no hover
            const container = document.querySelector('.carousel-container');
            container.addEventListener('mouseenter', () => {
                clearInterval(autoPlayInterval);
            });

            container.addEventListener('mouseleave', () => {
                startAutoPlay();
            });

            // Inicia o auto-play
            startAutoPlay();

        });
    </script>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>