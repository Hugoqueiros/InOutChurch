<body>
    <!--w3l-banner-slider-main-->
    <section class="w3l-banner-slider-main">
        <div class="top-header-content">
            <header class="tophny-header">
                <div class="container-fluid">
                    <div class="top-right-strip row">
                        <div class="top-hny-left-content col-lg-6 pl-lg-0">
                            <div class="w3l-footer-22">
                                <ul class="social-footerhny">
                                    <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>   
                        </div>
                        <ul class="top-hnt-right-content col-lg-6">
                            <li class="button-log usernhy">
                                <a class="btn-open">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="transmitvcart galssescart2 cart cart box_1">
                                <form action="#" method="post" class="last">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="top_transmitv_cart" type="submit" name="submit" value="">
                                        Carrinho
                                        <span class="fa fa-shopping-cart"></span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                        <!--//right login-->
                        <div class="overlay-login text-left">
                            <button type="button" class="overlay-close-login">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                            <div class="wrap">
                                <h5 class="text-center mb-4">Entrar na conta</h5>
                                <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
                                    <!--/login-form-->
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <p class="login-texthny mb-2">Insira o seu Email</p>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required="">                        
                                        </div>
                                        <div class="form-group">
                                            <p class="login-texthny mb-2">Insira a sua Password</p>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                   placeholder="" required="">
                                        </div>
                                        <div class="form-check mb-2">
                                            <div class="userhny-check">
                                                <label class="check-remember container">

                                                    <a class="button-register"><p class="privacy-policy">Ainda não está registado?</p></a>
                                                </label>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <button type="submit" class="submit-login btn mb-4">Entrar</button>

                                    </form>
                                    <!--//login-form-->
                                </div>
                                <!---->
                            </div>
                        </div>
                        <!--//right register-->
                        <div class="overlay-register text-left">
                            <button type="button" class="overlay-close-register">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                            <div class="wrap">
                                <h5 class="text-center mb-4">Criar conta</h5>
                                <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
                                    <!--/login-form-->
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <p class="login-texthny mb-2">Insira o seu Nome</p>
                                            <input type="text" class="form-control" id="input_name"
                                                   aria-describedby="emailHelp" placeholder="" required="">                        
                                        </div>
                                        <div class="form-group">
                                            <p class="login-texthny mb-2">Insira o seu Email</p>
                                            <input type="email" class="form-control" id="input_email"
                                                   aria-describedby="emailHelp" placeholder="" required="">                        
                                        </div>
                                        <div class="form-group">
                                            <p class="login-texthny mb-2">Insira a sua Password</p>
                                            <input type="password" class="form-control" id="input_password"
                                                   placeholder="" required="">
                                        </div>
                                        <button type="submit" class="submit-login btn mb-4">Criar Conta</button>

                                    </form>
                                    <!--//login-form-->
                                </div>
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/nav-->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid serarc-fluid">
                        <a class="navbar-brand" href="index.html">
                            <span class="lohny">JH</span>Shop</a>
                        <!-- if logo is image enable this   
                                        <a class="navbar-brand" href="#index.html">
                                                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                        </a> -->
                        <!--/search-right-->
                        <div class="search-right">

                            <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                                <span class="search-text">Pesquisar...</span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">

                                    <form action="#" method="post" class="search-box">
                                        <input type="search" placeholder="Qual produto deseja pesquisar?" name="search" required="required"
                                               autofocus="">
                                        <button type="submit" class="btn">Pesquisar</button>
                                    </form>

                                </div>
                                <a class="close" href="#">×</a>
                            </div>
                            <!-- /search popup -->
                        </div>
                        <!--//search-right-->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fa fa-bars"> </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php base_url() ?>">Página Inicial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Homem</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Senhora</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
                <!--//nav-->
            </header>







