<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeiroVoto</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div class="header-col-1">
            <p class="p-header">V</p>
            <h1>Primeiro<strong class="voto">Voto</strong></h1>
        </div>
        <div class="header-col-2">
            <nav>
                <ul class="lista-container">
                    <li><a href="" class="link-header">Início</a></li>
                    <li><a href="" class="link-header">Como Votar</a></li>
                    <li><a href="" class="link-header">Cargos</a></li>
                    <li><a href="" class="link-header">Justificativa</a></li>
                    <li><a href="" class="link-header">Quiz</a></li>
                    <li><a href="" class="link-header">FAQ</a></li>
                    <li class="button-quiz"><a href="" class="a-button-fazer-quiz">Fazer Quiz</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="body-row-1">
            <div class="body-col-1">
                <div>
                    <span class="span">Eleições Brasileiras 2026</span>
                    <h2 class="h2-top">Seu Primeiro Voto <br> <strong class="comecaaqui">Começa Aqui</strong></h3>
                </div>
                <div class="paragrafo">
                    <p class="p-body">Tudo o que você precisa saber para votar com <br> confiança pela primeira vez. Simples, rápido e <br> completo.</p>
                </div>
                <div class="buttons">
                    <button class="button-body" style="border: 2px solid var(--azul-escuro)"><a href="">Começar</a></button>
                    <button class="button-body" style="background-color: var(--branco);color: var(--azul-escuro); border: 2px solid var(--azul-escuro)"><a href="">Testar meu conhecimento</a></button>
                </div>
                <div class="legenda">
                    <div>
                        <p class="p-legenda">16+</p>
                        <legend>Voto facultativo</legend>
                    </div>
                    <div>
                        <p class="p-legenda">18+</p>
                        <legend>Voto obrigatório</legend>
                    </div>
                    <div>
                        <p class="p-legenda">100%</p>
                        <legend>Gratuito</legend>
                    </div>
                </div>
            </div>
            <div class="body-col-2">

                <!-- Pedi a IA para implementar esta imagem -->

                <svg xmlns="http://w3.org" viewBox="0 0 400 400" width="100%" height="100%">
                    <defs>
                        <!-- Gradiente Principal do Fundo -->
                        <linearGradient id="fundoGradiente" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#1967d2" />
                            <stop offset="50%" stop-color="#11797b" />
                            <stop offset="100%" stop-color="#1e8e3e" />
                        </linearGradient>

                        <!-- Filtro de Desfoque para os Círculos de Luz -->
                        <filter id="desfoqueLuz" x="-50%" y="-50%" width="200%" height="200%">
                            <feGaussianBlur stdDeviation="15" />
                        </filter>
                    </defs>

                    <!-- Card Principal com Cantos Arredondados -->
                    <rect width="400" height="400" rx="32" fill="url(#fundoGradiente)" />

                    <!-- Efeitos de Luz Fundidos (Círculos com Desfoque) -->
                    <circle cx="65" cy="65" r="35" fill="#4285f4" opacity="0.4" filter="url(#desfoqueLuz)" />
                    <circle cx="330" cy="310" r="45" fill="#34a853" opacity="0.5" filter="url(#desfoqueLuz)" />

                    <!-- GRUPO DA ILUSTRAÇÃO CENTRAL -->
                    <g transform="translate(45, 10)">
                        <!-- Elementos Flutuantes (Bolinhas) -->
                        <circle cx="110" cy="115" r="4.5" fill="#f9ab00" />
                        <circle cx="134" cy="103" r="3" fill="#ffffff" opacity="0.4" />
                        <circle cx="205" cy="180" r="3" fill="#fcf295" />

                        <!-- Bloco Amarelo de Destaque -->
                        <rect x="115" y="127" width="82" height="22" rx="6" fill="#f9ab00" />

                        <!-- Janela/Card Principal Branco -->
                        <rect x="105" y="140" width="118" height="82" rx="10" fill="#f8f9fa" />

                        <!-- Campo interno cinza claro para os botões -->
                        <rect x="114" y="154" width="100" height="25" rx="4" fill="#e8eaed" />

                        <!-- Fileira de Botões Azuis e Verde -->
                        <rect x="120" y="161" width="14" height="10" rx="2" fill="#1a73e8" />
                        <rect x="139" y="161" width="14" height="10" rx="2" fill="#1a73e8" />
                        <rect x="158" y="161" width="14" height="10" rx="2" fill="#1a73e8" />
                        <rect x="177" y="161" width="14" height="10" rx="2" fill="#1a73e8" />
                        <rect x="196" y="161" width="12" height="10" rx="2" fill="#1e8e3e" />

                        <!-- Barra Verde de Status Inferior -->
                        <rect x="114" y="202" width="100" height="6" rx="3" fill="#1e8e3e" />

                        <!-- Avatar de Usuário -->
                        <g transform="translate(191, 106)">
                            <circle cx="15" cy="15" r="15" fill="#ffffff" />
                            <circle cx="15" cy="15" r="13.5" fill="#e8eaed" />
                            <g fill="#1a73e8">
                                <circle cx="15" cy="11.5" r="4" />
                                <path d="M7,23.5 C7,19 10,17 15,17 C20,17 23,19 23,23.5 C23,24 22.5,25 21.5,25 L8.5,25 C7.5,25 7,24 7,23.5 Z" />
                            </g>
                        </g>
                    </g>

                    <!-- TEXTO INFERIOR (Font de sistema moderna e robusta) -->
                    <text x="200" y="282"
                        fill="#ffffff"
                        font-family="system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif"
                        font-size="19"
                        font-weight="700"
                        text-anchor="middle"
                        letter-spacing="0.2">Vote com segurança!</text>
                </svg>

            </div>
        </div>
        <div class="body-row-2">
            <div>
                <h2 class="h2-row-2">PASSO A PASSO</h2>
                <h3 class="h3-row-2">Como Funciona a Votação</h3>
                <p class="p-row-2">São apenas 5 passos simples. Você vai ver como é fácil exercer o <br> seu direito ao voto!</p>
            </div>
            <div class="container-card-votacao">
                <div class="card-votacao">
                    <p class="p-card-number">1</p>
                    <div class="div-icon"><i class="i-card-votacao fa-regular fa-file-lines"></i></div>
                    <div>
                        <h4 class="h4-card">Regularize seu título</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Faça ou transfira seu título de eleitor pelo site do TSE ou no cartório eleitoral.</p>
                    </div>
                </div>
                <div class="card-votacao">
                    <p class="p-card-number">2</p>
                    <div class="div-icon"><i class="i-card-votacao fa-solid fa-location-dot"></i></div>
                    <div>
                        <h4 class="h4-card">Consulte seu local</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Descubra onde você vota acessando o portal do TSE com seu CPF ou número do título.</p>
                    </div>
                </div>
                <div class="card-votacao">
                    <p class="p-card-number">3</p>
                    <div class="div-icon"><i class="i-card-votacao fa-solid fa-id-card"></i></div>
                    <div>
                        <h4 class="h4-card">Leve um documento</h4>
                    </div>
                    <div>
                        <p class="p-card-text">RG, CNH ou qualquer documento oficial com foto. Não esqueça!</p>
                    </div>
                </div>
                <div class="card-votacao">
                    <p class="p-card-number">4</p>
                    <div class="div-icon"><i class="i-card-votacao fa-regular fa-square-check"></i></div>
                    <div>
                        <h4 class="h4-card">Vote na urna</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Digite o número do candidato, confira o nome e a foto na tela, e confirme.</p>
                    </div>
                </div>
                <div class="card-votacao">
                    <p class="p-card-number">5</p>
                    <div class="div-icon"><i class="i-card-votacao fa-solid fa-square-poll-horizontal"></i></div>
                    <div>
                        <h4 class="h4-card">Guarde o comprovante</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Após votar, você recebe um comprovante impresso. Guarde-o por segurança.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-row-3">
            <div>
                <h2 class="h2-row-3">ELEIÇÕES</h2>
                <h3 class="h3-row-3">Conheça os Cargos</h3>
                <p class="p-row-3">Entenda para quem você vota e o que cada cargo representa no <br> sistema eleitoral brasileiro.</p>
            </div>
            <div class="container-card-cargos">
                <div class="card-cargos">
                    <div class="div-icon"><i class="i-card-eleicoes fa-regular fa-user"></i></div>
                    <div>
                        <h4 class="h4-card">Vereador</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Representa o município na Câmara Municipal. Faz leis locais e fiscaliza o prefeito.</p>
                    </div>
                </div>
                <div class="card-cargos">
                    <div class="div-icon"><i class="i-card-eleicoes fa-solid fa-building-columns"></i></div>
                    <div>
                        <h4 class="h4-card">Prefeito</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Administra o município, cuida de saúde, educação e infraestrutura local.</p>
                    </div>
                </div>
                <div class="card-cargos">
                    <div class="div-icon"><i class="i-card-eleicoes fa-solid fa-user-group"></i></div>
                    <div>
                        <h4 class="h4-card">Dep. Estadual</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Representa o estado na Assembleia Legislativa. Faz leis estaduais.</p>
                    </div>
                </div>
                <div class="card-cargos">
                    <div class="div-icon"><i class="i-card-eleicoes fa-solid fa-globe"></i></div>
                    <div>
                        <h4 class="h4-card">Dep. Federal</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Representa o estado na Câmara dos Deputados. Faz leis federais.</p>
                    </div>
                </div>
                <div class="card-cargos">
                    <div class="div-icon"><i class="i-card-eleicoes fa-regular fa-flag"></i></div>
                    <div>
                        <h4 class="h4-card">Senador</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Representa o estado no Senado Federal. Mandato de 8 anos.</p>
                    </div>
                </div>
                <div class="card-cargos">
                    <div class="div-icon"><i class="i-card-eleicoes fa-solid fa-building-columns"></i></div>
                    <div>
                        <h4 class="h4-card">Governador</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Administra o estado, cuida de segurança pública, saúde e transporte estadual.</p>
                    </div>
                </div>
                <div class="card-cargos">
                    <div class="div-icon"><i class="i-card-eleicoes fa-solid fa-globe"></i></i></div>
                    <div>
                        <h4 class="h4-card">Presidente</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Chefe do governo federal. Representa o Brasil no exterior e administra o país.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-row-4">
            <div style="text-align: center;">
                <span class="h2-row-4">IMPORTANTE</span>
                <h3 class="h3-row-4">Justificativa de Ausência</h3>
                <p class="p-row-4">Não vai conseguir votar? Saiba como justificar sua ausência e evitar <br> penalidades.</p>
            </div>
            <div class="container-card-justificativa">
                <div class="card-justificativa">
                    <div class="div-icon"><i class="i-card-justificativa fa-regular fa-calendar"></i></div>
                    <div>
                        <h4 class="h4-card">Quando justificar</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Se você não conseguir votar no dia da eleição, pode justificar sua ausência. Isso vale para quem estava viajando, doente ou em outra cidade.</p>
                    </div>
                </div>
                <div class="card-justificativa">
                    <div class="div-icon"><i class="i-card-justificativa fa-light fa-phone"></i></div>
                    <div>
                        <h4 class="h4-card">Como justificar</h4>
                    </div>
                    <div>
                        <p class="p-card-text">Acesse o app e-Título ou o site do TSE. Também é possível justificar presencialmente em qualquer zona eleitoral com documento e comprovante.</p>
                    </div>
                </div>
                <div class="card-justificativa">
                    <div class="div-icon"><i class="i-card-justificativa fa-regular fa-clock"></i></div>
                    <div>
                        <h4 class="h4-card">Prazo</h4>
                    </div>
                    <div>
                        <p class="p-card-text">O prazo para justificativa é de até 60 dias após cada turno da eleição. Após esse prazo, será necessário pagar uma multa de R$ 3,51.</p>
                    </div>
                </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>