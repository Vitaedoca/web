<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante - Seja bem vindo!</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/resposivo.css">
</head>
<body>

    <div class="container-mensagens" id="container-mensagens">

    </div>

    <a class="botao-carrinho hidden animated bounceIn" onclick="cardapio.metodos.abrirCarrinho(true)">
        <div class="badge-total-carrinho">8</div>
        <i class="fa fa-shopping-bag"></i>
    </a>

    <header class="header wow fadeIn">
        <div class="container">
            <nav class="navbar navbar-expand-lg pl-0 pr-0 col-one">

                <a class="navbar-brand" href="#">
                    <img src="./img/logo.png" width="160" alt="img-logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto mr-auto">
                        <li class="nav-item">
                            <a href="#reservas" class="nav-link"><b>Reservas</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="#servicos" class="nav-link"><b>Serviços</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="#cardapio" class="nav-link"><b>Cardápio</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="#depoimentos" class="nav-link"><b>Depoimentos</b></a>
                        </li>
                    </ul>
                    
                    <!-- btn button -->
                    <a class="btn btn-white btn-icon" onclick="cardapio.metodos.abrirCarrinho(true)">
                        Meu carrinho 
                        
                        <span class="icon">
                            <div class="container-total-carrinho badge-total-carrinho hidden">8</div>
                            <i class="fa fa-shopping-bag"></i>
                        </span>
                        
                    </a>
                    
                </div>

            </nav>
        </div>
    </header>


    <section class="banner">
        <div class="container">
            <div class="row">
                <!-- col vai de 1 a 12, 6 e 6 é metade -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="d-flex text-banner">
                        <h1 class="wow fadeInLeft"><b>Escolha sua comida <b class="color-primary">favorita.</b></b></h1>
                        <p class="wow fadeInLeft delay-02s">
                            Aproveite nosso cardápio! Escolha o que desejar e recebe em sua casa de forma rápida e segura. 
                        </p>

                        <div class="wow fadeIn delay-05s">
                            <a href="#" class="btn btn-yellow mt-4 mr-3">
                                Ver cardápio
                            </a>

                            <a href="tel:34988298258" class="btn btn-white btn-icon-left mt-4" id="btn-ligar">
                                <span class="icon-left"> 
                                    <i class="fa fa-phone"></i>
                                </span>
                                (34) 98829-8258 
                            </a>
                        </div>
                    </div>

                    <div class="wow fadeIn delay-05s">
                        <a href="#" class="btn btn-sm btn-white btn-social mt-4 mr-3">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-white btn-social mt-4 mr-3">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" id="btn-whatasapp" class="btn btn-sm btn-white btn-social mt-4 mr-3" onclick="cardapio.metodos.carregarBotaoDoWhatsapp()">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>

                </div>

                <div class="col-6">
                    <div class="card-banner wow fadeIn delay-02s"></div>
                    <div class="d-flex img-banner wow fadeIn delay-05s">
                        <img src="img/burguer.png" alt="">
                    </div>

                    <div class="card card-case wow fadeInRight delay-07s">
                            "Entrega rápida e funcionários simpáticos.
                            <br>
                            A comida chegou quente e
                            <br>
                            muito saborosa!"
                            <span class="card-case-name">
                                <b>Vinicius Gabriel</b>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="servicos" id="servicos">

        <div class="background-servicos"></div>

        <div class="container">

            <div class="col-12 col-one text-center mb-5 wow fadeIn delay-02s">
                <span class="hint-title"><b>Serviços</b></span>
                <h1 class="title">
                    <b>Como são nossos serviços?</b>
                </h1>
            </div>


            <div class="row wow fadeInUp">
                <div class="col-4 mb-5">
                    <div class="card-icon text-center">
                        <img src="img/icone-pedido.svg" width="150" alt="">
                    </div>
                    <div class="card-text text-center mt-3">
                        <p><b>Fácil de pedir</b></p>
                        <span>Você só precisa de alguns passos para pedir sua comida.</span>
                    </div>
                </div>
                <div class="col-4 mb-5">
                    <div class="card-icon text-center">
                        <img src="img/icone-delivery.svg" width="250" alt="">
                    </div>
                    <div class="card-text text-center mt-3">
                        <p><b>Entrega rápida</b></p>
                        <span>Nossa entrega é sempre pontual, rápida e segura.</span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-icon text-center">
                        <img src="img/icone-qualidade.svg" width="250" alt="">
                    </div>
                    <div class="card-text text-center mt-3">
                        <p><b>Melhor qualidade</b></p>
                        <span>Não só a rapidez na entrega, a qualidade também é o nosso forte.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="cardapio" id="cardapio">

        <div class="background-cardapio"></div>

        <div class="container">

            <div class="row">

                <div class="col-12 col-one text-center mb-5 wow fadeIn">
                    <span class="hint-title"><b>Cardápio</b></span>
                    <h1 class="title">
                        <b>Conheça o nosso cardápio</b>
                    </h1>
                </div>

                <div class="col-12 container-menu wow fadeInUp">
                    <a onclick="" id="menu-burgers" class="btn btn-white btn-sm mr-3 mb-3 active">
                        <i class="fas fa-hamburger"></i>&nbsp; Burgers
                    </a>
                    <a onclick="" id="menu-pizzas" class="btn btn-white btn-sm mr-3 mb-3">
                        <i class="fas fa-pizza-slice"></i>&nbsp; Pizzas
                    </a>
                    <a onclick="" id="menu-churrasco" class="btn btn-white btn-sm mr-3 mb-3">
                        <i class="fas fa-drumstick-bite"></i>&nbsp; Churrasco
                    </a>
                    <a onclick=")" id="menu-steaks" class="btn btn-white btn-sm mr-3 mb-3">
                        <i class="fas fa-bacon"></i>&nbsp; Steaks
                    </a>
                    <a onclick="" id="menu-bebidas" class="btn btn-white btn-sm mr-3 mb-3">
                        <i class="fas fa-cocktail"></i>&nbsp; Bebidas
                    </a>
                    <a onclick="" id="menu-sobremesas" class="btn btn-white btn-sm mr-3 mb-3">
                        <i class="fas fa-ice-cream"></i>&nbsp; Sobremesas
                    </a>
                </div>

                <div class="col-12">
                    <div class="row" id="itensCardapio">

                    </div>
                </div>

                <div class="col-12 text-center wow fadeInUp">
                    <a onclick="cardapio.metodos.verMais()" id="btnVerMais" class="btn btn-white btn-sm">
                        Ver mais
                    </a>
                </div>
                        
            </div>

        </div>
    </section>



    <section class="depoimentos" id="depoimentos">

        <div class="background-depoimentos"></div>

        <div class="container">
            <div class="row">

                <div class="col-5"> 
                    <div class="card-depoimentos"></div>
                    <div class="d-flex img-banner wow fadeInLeft">
                        <img src="img/pizzas.png" alt="">
                    </div>
                </div>

                <div class="col-7 wow fadeIn delay-02s">
                    <span class="hint-title wow fadeIn"><b>Depoimentos</b></span>
                    <h1 class="title wow fadeIn">
                        <b>O que dizem sobre nós?</b>
                    </h1>

                    <div class="mb-5">

                        <div class="depoimento animated fadeIn" id="depoimento-1">
                            <div class="container-dados-depoimento">
                                <div class="imagem-depoimento"></div>
                                <div>
                                    <p class="nome-depoimento"><b>Vinicius Gabriel</b></p>
                                    <p class="nota-depoimento">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>&nbsp;<span>4.5</span>
                                    </p>
                                </div>
                            </div>
                            <p class="texto-depoimento">
                                <i class="fas fa-quote-left"></i>
                                <span>
                                    Muito bom recomento de mais! Comida muito bem feita pelo chefe,
                                    atendimento dentro dos paramentros e boa comunicação com o cliente.
                                </span>
                                <i class="fas fa-quote-right"></i>
                            </p>
                        </div>

                        <div class="depoimento animated fadeIn hidden" id="depoimento-2">
                            <div class="container-dados-depoimento">
                                <div class="imagem-depoimento"></div>
                                <div>
                                    <p class="nome-depoimento hid"><b>Lucio Oliveira</b></p>
                                    <p class="nota-depoimento">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>&nbsp;<span>5.0</span>
                                    </p>
                                </div>
                            </div>
                            <p class="texto-depoimento">
                                <i class="fas fa-quote-left"></i>
                                <span>
                                    A comida estava excelente e o serviço gentil nos surpreendeu! 
                                    Dica: reserve umas 3 horas para ter uma experiência incrível. 
                                </span>
                                <i class="fas fa-quote-right"></i>
                            </p>
                        </div>

                        <div class="depoimento animated fadeIn hidden" id="depoimento-3">
                            <div class="container-dados-depoimento">
                                <div class="imagem-depoimento"></div>
                                <div>
                                    <p class="nome-depoimento"><b>Ana Cecilia</b></p>
                                    <p class="nota-depoimento">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>&nbsp;<span>5.0</span>
                                    </p>
                                </div>
                            </div>
                            <p class="texto-depoimento">
                                <i class="fas fa-quote-left"></i>
                                <span>
                                    Um jantar perfeito do começo ao fim. Comida, experiência, 
                                    serviço... foi tão maravilhoso que fomos dois dias seguidos - 
                                    fato inédito para mim em uma viagem. 
                                </span>
                                <i class="fas fa-quote-right"></i>
                            </p>
                        </div>

                    </div>

                    
                        <a class="btn btn-sm btn-white btn-social active mr-3" id="btn-depoimento-1" onclick="cardapio.metodos.alternarDepoimentos(1)">1</a>
                        <a class="btn btn-sm btn-white btn-social mr-3" id="btn-depoimento-2" onclick="cardapio.metodos.alternarDepoimentos(2)">2</a>
                        <a class="btn btn-sm btn-white btn-social" id="btn-depoimento-3" onclick="cardapio.metodos.alternarDepoimentos(3)">3</a>
                    
                </div>
            </div>
        </div>
    </section>



    <section class="reserva wow fadeInUp" id="reservas">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="card-secondary">
                        <div class="row">
                            <div class="col-7">
                                <span class="hint-title"><b>Reserva</b></span>
                                <h1 class="title">
                                    <b>Quer reservar um horário?</b>
                                </h1>
                                <!-- padding right de 5 -->
                                <p class="pr-5">
                                    Mande uma mensagem clicalndo no botão abaixo
                                    <br>
                                    Reserve sua data e horário de forma simples e rápida.
                                </p>

                                <a href="#" class="btn btn-yellow mt-4" id="btnReserva" target="_blank">Fazer reserva</a>
                            </div>
                            <div class="col-5">
                                <div class="card-reserva"></div>
                                <div class="d-flex img-banner">
                                    <img src="./img/icone-reserva.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container wow fadeIn delay-02s">
            <div class="row">

                <div class="col-3 container-logo-footer">

                    <img class="logo-footer" src="./img/logo.png">

                </div>

                <div class="col-6 container-texto-footer">
                    <p class="mb-0">
                        <b>Menu On-line</b> &copy; Todos os direitos reservados
                    </p>
                </div>

                <div class="col-3 container-redes-footer">
                    <a href="#" class="btn btn-sm btn-white btn-social mr-3">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-white btn-social mr-3">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-white btn-social mr-3">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>

            </div>
        </div>
    </footer>


    <div class="modal-full hidden animated fadeIn" id="modalCarrinho">

        <div class="m-header">

            <div class="container">
                <!-- btn-sm é uma classe que deixa o botão menor
                float-right alinha ele a direita -->
                <a class="btn btn-white btn-sm float-right" onclick="cardapio.metodos.abrirCarrinho(false)">
                    Fechar
                </a>

                <div class="etapas">
                    <div class="etapa etapa1">1</div>
                    <div class="etapa etapa2">2</div>
                    <div class="etapa etapa3">3</div>
                </div>
                <p class="title-carrinho mt-4">
                    <b id="lblTituloEtap">Seu carrinho:</b>
                </p>
            </div>
        </div>

        <div class="m-body">
            <div class="container">
                <div id="itensCarrinho" class="row mr-0 ml-0 hidden">
                </div>

                <div id="localEntrega" class="row mr-0 ml-0 hidden animated fadeIn">

                    <div class="col-4">
                        <div class="form-group container-cep">
                            <label for="">CEP:</label>
                            <input id="txtCEP" type="text" class="form-control">
                            <a class="btn btn-yellow btn-sm" onclick="cardapio.metodos.buscarCep()"><i class="fa fa-search"></i></a>
                        </div>
                    </div>

                    <div class="col-8"></div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Endereço:</label>
                            <input id="txtEndereco" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Bairro:</label>
                            <input id="txtBairro" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="form-group">
                            <label for="">Número:</label>
                            <input id="txtNumero" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Cidade:</label>
                            <input id="txtCidade" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Complemento:</label>
                            <input id="txtComplemento" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-12 col-lg-2 col-md-2 col-sm-12">
                        <div class="form-group">
                            <label>UF:</label>
                            <select id="ddlUf" class="form-control">
                                <option value="-1">...</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div id="resumoCarrinho" class="row mr-0 ml-0 hidden animated fadeIn">
                    <div class="col-12">
                        <p class="title-carrinho mt-4">
                            <b>Itens do pedido:</b>
                        </p>
                    </div>

                    <div class="col-12">
                        <div class="row" id="listaItensResumo">
                        </div>
                    </div>
                    
                    <div class="col-12" id="localDaEntrega">
                        <p class="title-carrinho mt-4">
                            <b>Local da entrega:</b>
                        </p>
                        
                    </div>

                        <div class="col-12 item-carrinho resumo" id="textoLocalDaEntrega">
                            <div class="img-map">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>

                            <div class="dados-produto">
                                <p class="texto-endereco">
                                    <b id="resumoEndereco">Avenida Marciano Pires, 2213, Matinha</b>
                                </p>

                                <p class="cidade-endereco" id="cidadeEndereco">
                                    Patrocínio-MG / 38742158 ao lado de um salão
                                </p>
                            </div>
                        </div>
                </div>
            </div>

        </div>


        <div class="m-footer">
            <div class="container">
                <div class="container-total text-right mb-4">
                    <p class="mb-0">
                        <span>Subtotal:</span>
                        <span id="lblSubTotal">R$ 0,00</span>
                    </p>
                    <p class="mb-0 text-entrega">
                        <span><i class="fas fa-motorcycle"></i> Entrega:</span>
                        <span id="lblValorEntrega">+ R$ 0,00</span>
                    </p>
                    <p class="mb-0 texto-total">
                        <span class="title-produto"><b>Total:</b></span>
                        <span class="price-produto"><b id="lblValorTotal">R$ 0,00</b></span>
                    </p>
                </div>
                <a id="btnEtapaPedido" onclick="cardapio.metodos.carregarEndereco()" class="btn btn-yellow float-right">Continuar</a>

                <a id="btnEtapaEndereco" onclick="cardapio.metodos.resumoPedido()" class="btn btn-yellow float-right hidden">Revisar pedido</a>
 
                <a id="btnEtapaResumo" target="_blank" class="btn btn-yellow float-right hidden">Enviar pedido</a>
                
                <a id="btnEtapaVoltar" onclick="cardapio.metodos.voltarEtapa()" class="btn btn-white float-right mr-3 hidden">Voltar</a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="./js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="./js/modernizr-3.5.0.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/wow.min.js"></script>
    <script type="text/javascript" src="./js/dados.js"></script>
    <script type="text/javascript" src="./js/app.js"></script>

    <script>new WOW().init();</script>
</body>
</html>