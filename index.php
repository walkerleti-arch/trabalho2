<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depósito São José</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
        
        section {
            padding: 60px 0;
            min-height: 100vh;
        }
        
        .navbar-nav .nav-link {
            cursor: pointer;
        }
        
        #home {
            padding-top: 80px;
        }
        
        .card {
            transition: transform 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .produto-item {
            margin-bottom: 20px;
        }
        
        footer {
            background-color: #ffffff;
            padding: 40px 0;
            margin-top: 50px;
        }

        .carousel-item {
            height: 500px;
        }
        
        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
        
        .carousel-caption {
            background: rgba(0,0,0,0.5);
            border-radius: 10px;
            padding: 20px;
            bottom: 20%;
        }
        
        .carousel-caption h3 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        .carousel-caption p {
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">
                <img src="./img/logoD.png" alt="Logo" height="50">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#promocoes">PROMOÇÕES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PRODUTOS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#produtos" onclick="filtrarProdutos('chaves')">CHAVES</a></li>
                            <li><a class="dropdown-item" href="#produtos" onclick="filtrarProdutos('lixas')">LIXAS</a></li>
                            <li><a class="dropdown-item" href="#produtos" onclick="filtrarProdutos('pregos')">PREGOS</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#produtos" onclick="filtrarProdutos('todos')">TODOS OS PRODUTOS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">CONTATO</a>
                    </li>
                </ul>
                
                <form class="d-flex" role="search" onsubmit="buscarProduto(event)">
                    <input class="form-control me-2" type="search" id="searchInput" placeholder="Pesquisar produtos..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <main>

        <div id="carrosselPrincipal" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carrosselPrincipal" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carrosselPrincipal" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carrosselPrincipal" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/banner1.0.png" class="d-block w-100" alt="Ferramentas Profissionais">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Ferramentas Profissionais</h3>
                        <p>As melhores marcas do mercado com preços imbatíveis</p>
                        <a href="#produtos" class="btn btn-primary">Ver Produtos</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1920x500/198754/ffffff?text=Ofertas+Imperdíveis" class="d-block w-100" alt="Ofertas Imperdíveis">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Ofertas Imperdíveis</h3>
                        <p>Descontos especiais em toda linha de produtos</p>
                        <a href="#promocoes" class="btn btn-danger">Ver Promoções</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1920x500/ffc107/000000?text=Qualidade+Garantida" class="d-block w-100" alt="Qualidade Garantida">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Qualidade Garantida</h3>
                        <p>Produtos de alta durabilidade e resistência</p>
                        <a href="#contato" class="btn btn-info">Fale Conosco</a>
                    </div>
                </div>
            </div>
            
            <!-- Controles -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carrosselPrincipal" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrosselPrincipal" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
        
        <section id="produtos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center mb-5">Nossos Produtos</h2>
                        <div id="produtosContainer">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="promocoes">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center mb-5">PROMOÇÕES ESPECIAIS</h2>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 border-danger">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-danger">SUPER PROMOÇÃO</h5>
                                        <h3>Jogo de Chaves</h3>
                                        <p class="card-text">Jogo completo com 12 peças</p>
                                        <p class="display-6 text-danger">R$ 89,90</p>
                                        <p class="text-muted"><s>R$ 149,90</s></p>
                                        <button class="btn btn-danger" onclick="alert('Produto adicionado ao carrinho!')">Comprar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 border-danger">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-danger">50% OFF</h5>
                                        <h3>Kit Lixas</h3>
                                        <p class="card-text">Kit com 10 lixas de diferentes granulações</p>
                                        <p class="display-6 text-danger">R$ 29,90</p>
                                        <p class="text-muted"><s>R$ 59,90</s></p>
                                        <button class="btn btn-danger" onclick="alert('Produto adicionado ao carrinho!')">Comprar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 border-danger">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-danger">PACOTE ECONÔMICO</h5>
                                        <h3>Pregos Variados</h3>
                                        <p class="card-text">Caixa com 500g de pregos sortidos</p>
                                        <p class="display-6 text-danger">R$ 19,90</p>
                                        <p class="text-muted"><s>R$ 39,90</s></p>
                                        <button class="btn btn-danger" onclick="alert('Produto adicionado ao carrinho!')">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center mb-5">Entre em Contato</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form id="formContato" onsubmit="enviarContato(event)">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone">
                            </div>
                            <div class="mb-3">
                                <label for="mensagem" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                        </form>
                        <div id="mensagemStatus" class="mt-3"></div>
                    </div>
                    
                    <div class="col-md-6">
                        <h3>Informações de Contato</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <strong>📞 Telefone:</strong> (11) 1234-5678
                            </li>
                            <li class="mb-3">
                                <strong>📱 WhatsApp:</strong> (11) 91234-5678
                            </li>
                            <li class="mb-3">
                                <strong>✉️ Email:</strong> contato@depositosaojose.com.br
                            </li>
                            <li class="mb-3">
                                <strong>📍 Endereço:</strong> Rua Exemplo, 123 - São Paulo, SP
                            </li>
                            <li class="mb-3">
                                <strong>🕒 Horário:</strong> Segunda à Sexta, 8h às 18h<br>
                                Sábado, 8h às 12h
                            </li>
                        </ul>
                        
                        <div class="mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.091!2d-46.633308!3d-23.564224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59d84f4cfc49%3A0xc5a06e5e68c9b4d4!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1699999999999!5m2!1spt-BR!2sbr" 
                                    width="100%" 
                                    height="250" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Depósito São José</h5>
                    <p>Sua loja de confiança desde 2004</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-decoration-none">Home</a></li>
                        <li><a href="#produtos" class="text-decoration-none">Produtos</a></li>
                        <li><a href="#promocoes" class="text-decoration-none">Promoções</a></li>
                        <li><a href="#contato" class="text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Redes Sociais</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">📘 Facebook</a></li>
                        <li><a href="#" class="text-decoration-none">📸 Instagram</a></li>
                        <li><a href="#" class="text-decoration-none">💬 WhatsApp</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; <?php echo date('Y'); ?> Depósito São José - Todos os direitos reservados</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Dados dos produtos
        const produtos = {
            chaves: [
                { nome: "Chave Phillips", preco: "R$ 15,90", descricao: "Chave Phillips profissional" },
                { nome: "Chave Fenda", preco: "R$ 12,90", descricao: "Chave fenda 6x100mm" },
                { nome: "Chave Estrela", preco: "R$ 18,90", descricao: "Chave estrela 10mm" },
                { nome: "Jogo de Chaves", preco: "R$ 89,90", descricao: "Jogo com 12 chaves" }
            ],
            lixas: [
                { nome: "Lixa d'água", preco: "R$ 3,90", descricao: "Lixa d'água grão 400" },
                { nome: "Lixa para madeira", preco: "R$ 2,90", descricao: "Lixa para madeira grão 80" },
                { nome: "Lixa para metal", preco: "R$ 4,90", descricao: "Lixa para metal grão 120" },
                { nome: "Kit Lixas", preco: "R$ 29,90", descricao: "Kit com 10 lixas" }
            ],
            pregos: [
                { nome: "Prego 15x15", preco: "R$ 8,90", descricao: "Caixa com 100 unidades" },
                { nome: "Prego 18x21", preco: "R$ 12,90", descricao: "Caixa com 100 unidades" },
                { nome: "Prego 20x25", preco: "R$ 15,90", descricao: "Caixa com 100 unidades" },
                { nome: "Pregos Sortidos", preco: "R$ 19,90", descricao: "Caixa com 500g" }
            ]
        };

        // Função para carregar produtos
        function carregarProdutos(categoria = 'todos') {
            const container = document.getElementById('produtosContainer');
            let html = '<div class="row">';
            
            if (categoria === 'todos') {
                for (let cat in produtos) {
                    produtos[cat].forEach(produto => {
                        html += `
                            <div class="col-md-3 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">${produto.nome}</h5>
                                        <p class="card-text">${produto.descricao}</p>
                                        <p class="h4 text-primary">${produto.preco}</p>
                                        <button class="btn btn-primary btn-sm" onclick="alert('${produto.nome} adicionado ao carrinho!')">
                                            Comprar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                }
            } else if (produtos[categoria]) {
                produtos[categoria].forEach(produto => {
                    html += `
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">${produto.nome}</h5>
                                    <p class="card-text">${produto.descricao}</p>
                                    <p class="h4 text-primary">${produto.preco}</p>
                                    <button class="btn btn-primary btn-sm" onclick="alert('${produto.nome} adicionado ao carrinho!')">
                                        Comprar
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                });
            } else {
                html = '<div class="col-12"><div class="alert alert-warning">Nenhum produto encontrado!</div></div>';
            }
            
            html += '</div>';
            container.innerHTML = html;
        }

        // Função para filtrar produtos
        function filtrarProdutos(categoria) {
            carregarProdutos(categoria);
            // Scroll suave para a seção de produtos
            document.getElementById('produtos').scrollIntoView({ behavior: 'smooth' });
        }

        // Função para buscar produtos
        function buscarProduto(event) {
            event.preventDefault();
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const container = document.getElementById('produtosContainer');
            let html = '<div class="row">';
            let encontrou = false;
            
            for (let cat in produtos) {
                produtos[cat].forEach(produto => {
                    if (produto.nome.toLowerCase().includes(searchTerm) || 
                        produto.descricao.toLowerCase().includes(searchTerm)) {
                        encontrou = true;
                        html += `
                            <div class="col-md-3 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">${produto.nome}</h5>
                                        <p class="card-text">${produto.descricao}</p>
                                        <p class="h4 text-primary">${produto.preco}</p>
                                        <button class="btn btn-primary btn-sm" onclick="alert('${produto.nome} adicionado ao carrinho!')">
                                            Comprar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        `;
                    }
                });
            }
            
            if (!encontrou) {
                html = '<div class="col-12"><div class="alert alert-info">Nenhum produto encontrado para: "' + searchTerm + '"</div></div>';
            }
            
            html += '</div>';
            container.innerHTML = html;
            document.getElementById('produtos').scrollIntoView({ behavior: 'smooth' });
        }

        // Função para enviar contato
        function enviarContato(event) {
            event.preventDefault();
            const nome = document.getElementById('nome').value;
            const statusDiv = document.getElementById('mensagemStatus');
            
            statusDiv.innerHTML = `
                <div class="alert alert-success">
                    <strong>Mensagem enviada!</strong><br>
                    Obrigado ${nome}, entraremos em contato em breve!
                </div>
            `;
            
            document.getElementById('formContato').reset();
            
            // Limpar mensagem após 5 segundos
            setTimeout(() => {
                statusDiv.innerHTML = '';
            }, 5000);
        }

        // Carregar todos os produtos ao iniciar
        window.onload = () => {
            carregarProdutos('todos');
            
            // Adicionar evento para links do dropdown
            document.querySelectorAll('.dropdown-item').forEach(link => {
                link.addEventListener('click', (e) => {
                    // Impedir comportamento padrão se necessário
                    e.preventDefault();
                });
            });
        };
        
        // Ajustar padding do topo quando clicar nos links
        document.querySelectorAll('.nav-link, .dropdown-item').forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId && targetId !== '#') {
                    setTimeout(() => {
                        const target = document.querySelector(targetId);
                        if (target) {
                            const offset = 70;
                            const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                            window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                        }
                    }, 100);
                }
            });
        });
    </script>
</body>
</html>