<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>GHI Tecnologia</title>
    <link rel="shortcut icon" href="images/logo-transparente.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo.css?id=124">

    <script>
        function CriaRequest() {
            try {
                request = new XMLHttpRequest();
            } catch (IEAtual) {
                try {
                    request = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (IEAntigo) {
                    try {
                        request = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (falha) {
                        request = false;
                    }
                }
            }
            if (!request) alert("Seu Navegador não suporta Ajax!");
            else return request;
        }

        function enviar() {
            var xmlreq = CriaRequest();
            var nome = document.getElementById("nome").value;
            var telefone = document.getElementById("telefone").value;
            var email = document.getElementById("email").value;
            var assunto = document.getElementById("assunto").value;
            var mensagem = document.getElementById("mensagem").value;
            var resposta = document.getElementById("resposta");
            xmlreq.open("GET", "enviar-contato.php?nome=" + nome + "&telefone=" + telefone + "&email=" + email + "&assunto=" + assunto + "&mensagem=" + mensagem, true);
            xmlreq.onreadystatechange = function() {
                if (xmlreq.readyState === 4) {
                    if (xmlreq.status === 200) {
                        resposta.innerHTML = xmlreq.responseText;
                    } else {
                        resposta.innerHTML = "Erro: " + xmlreq.statusText;
                    }
                }
            };
            xmlreq.send(null);
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 927296184 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-927296184"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-927296184');
    </script>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="py-1 bg-black top barra-topo">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                            <p class="mb-0 register-link">Atendimento</p>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+55 17 99794 1983</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">atendimento@ghitecnologia.com.br</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="menu-topo navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <img class="logo-topo" src='images/logo-transparente.png' />
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#inicio-section" class="nav-link"><span>Início</span></a></li>
                    <li class="nav-item"><a href="#sobre-section" class="nav-link"><span>Sobre Nós</span></a></li>
                    <li class="nav-item"><a href="#produtos-section" class="nav-link"><span>Produtos</span></a></li>
                    <li class="nav-item"><a href="#contato-section" class="nav-link"><span>Contato</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap js-fullheight" style="background-image: url('images/empresa2.jpg');" data-section="inicio" data-stellar-background-ratio="0.5" id="inicio-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 pt-5 ftco-animate">
                    <div class="mt-5">
                        <span class="subheading">GHI Tecnologia</span>
                        <h1 class="mb-4">Soluções inteligentes <br>para a sua empresa</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light" id="sobre-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 d-flex">
                    <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-3">Sobre Nós</h2>
                            <p class="p-justificado">Somos uma empresa de tecnologia situada na cidade de Fernandópolis/SP,
                                com foco em desenvolvimento de softwares (web e mobile) para atender clientes de diversos segmentos.
                                Nossa missão é criar soluções inovadoras que simplifiquem e automatizem os processos de nossos clientes,
                                permitindo o alcance aos seus objetivos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 py-5">
                    <div class="py-lg-5">
                        <div class="row justify-content-center pb-5">
                            <div class="col-md-12 heading-section ftco-animate">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fas fa-sitemap"></span>
                                    </div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Criação de Sites</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fas fa-tasks"></span>
                                    </div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Sistemas de Gestão</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fas fa-mobile"></span>
                                    </div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Aplicativos móveis</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fas fa-store"></span>
                                    </div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">E-commerce</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="far fa-question-circle"></span>
                                    </div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Suporte técnico especializado</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="far fa-star"></span>
                                    </div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Tecnologias de ponta</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fas fa-laptop-code"></span>
                                    </div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Softwares multiplataforma</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Segurança de Dados</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro img" style="background-image: url(images/empresa1.jpg);" id="produtos-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <h2>Softwares Inteligentes</h2>
                    <h3>Desenvolvemos a ferramenta que a sua empresa precisa!</h3>
                    <h3>Conheça um pouco dos nossos produtos!</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="fas fa-ticket-alt"></span>
                                    </div>
                                    <h3><a>Compre Bilhete</a></h3>
                                    <p>Ferramenta para venda de entrada de eventos (shows, baladas, teatros, dentre outros).</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="fas fa-building"></span>
                                    </div>
                                    <h3><a>ConstruWeb</a></h3>
                                    <p>Faça o gerenciamento de suas obras de onde estiver, pelo computador, tablet ou celular.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="department-wrap p-4 ftco-animate">
                                <div class="text p-2 text-center">
                                    <div class="icon">
                                        <span class="fas fa-tooth"></span>
                                    </div>
                                    <h3><a>OdontoWeb</a></h3>
                                    <p>Ferramenta web para gerenciamento de sua clínica odontológica.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section" id="contato-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Entre em contato</h2>
                    <p class="p-contato">Possui alguma dúvida? <br>Nos envie uma mensagem e peça um orçamento. <br>Seu contato é muito importante para nós!</p>
                </div>
            </div>
            <div class="row no-gutters block-9">
                <div class="col-md-12 order-md-last d-flex">
                    <form class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input id="nome" type="text" class="form-control" placeholder="Seu nome">
                        </div>
                        <div class="form-group">
                            <input id="telefone" type="text" class="form-control" placeholder="Seu telefone">
                        </div>
                        <div class="form-group">
                            <input id="email" type="text" class="form-control" placeholder="Seu Email">
                        </div>
                        <div class="form-group">
                            <input id="assunto" type="text" class="form-control" placeholder="Assunto">
                        </div>
                        <div class="form-group">
                            <textarea id="mensagem" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
                        </div>
                        <div class="form-group">
                            <input onclick="enviar();" type="button" value="Enviar Menssagem" class="btn btn-secondary py-3 px-5">
                        </div>
                        <div class="resposta" id="resposta"></div>
                    </form>
                </div>
                <!-- <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white"></div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light" id="sobre-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 py-5">
                    <div class="py-lg-5">
                        <div class="row">
                            <div class="col-sm-1 col-md-2 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fab fa-php"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1 col-md-2 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fab fa-laravel"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fab fa-css3"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fab fa-vuejs"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fab fa-html5"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex">
                                        <span class="fab fa-node"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <footer class="ftco-footer">
        <div class="overlay"></div>
        <div class="container-fluid px-md-5">
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <img class="logo-rodape" src='images/logo-transparente.png' />
                        <p>Siga-nos nas redes sociais</p>
                        <ul class="ftco-footer-social list-unstyled mt-5">
                            <li class="ftco-animate"><a target="_blank" href="http://www.facebook.com/ghitecnologia"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a target="_blank" href="https://www.instagram.com/ghitecnologia/"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#inicio-section"><span class="icon-long-arrow-right mr-2"></span>Início</a></li>
                            <li><a href="#sobre-section"><span class="icon-long-arrow-right mr-2"></span>Sobre Nós</a></li>
                            <li><a href="#produtos-section"><span class="icon-long-arrow-right mr-2"></span>Produtos</a></li>
                            <li><a href="#contato-section"><span class="icon-long-arrow-right mr-2"></span>Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Produtos</h2>
                        <ul class="list-unstyled">
                            <li><a target="_blank" href="https://www.comprebilhete.com.br"><span class="icon-long-arrow-right mr-2"></span>Compre Bilhete</a></li>
                            <li><a target="_blank" href="https://www.ghitecnologia.com.br/construweb"><span class="icon-long-arrow-right mr-2"></span>ConstruWeb</a></li>
                            <li><a target="_blank" href="https://www.ghitecnologia.com.br/odontoweb"><span class="icon-long-arrow-right mr-2"></span>OdontoWeb</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Entre em contato</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-phone"></span><span class="text">+55 17 99794 1983</span></li>
                                <li><span class="icon icon-envelope pr-4"></span><span class="text">atendimento@ghitecnologia.com.br</span></li>
                                <li><span class="icon icon-map-marker"></span><span class="text">Fernandópolis / SP</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> | <a href="https://ghitecnologia.com.br" target="_blank">GHI Tecnologia</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

    <script src="https://kit.fontawesome.com/44f5bae32e.js" crossorigin="anonymous"></script>

</body>

</html>