
    <section id="login_view">
        <div class="panel_login">
            <div class="col-md-12">
                <div class="container">
                    <div class="panel_container">
                        <div class="panel_left col-md-3 col-md-offset-2 visible-md visible-lg">
                            <div class="panel_left_title">
                                BIENVENIDOS AL AULA VIRTUAL DE LA FACULTAD DE INGENIERIA DE SISTEMAS E INFORMATICA
                            </div>
                            <div class="panel_left_icons">
                                <a href=""><img src="app/img/logo_web.png" alt=""></a>
                                <a href=""><img src="app/img/fb_logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="panel_right col-md-5">
                            <div class="panel_right_logo">
                                <img class="img-responsive logo_login center-block" src="app/img/logo_fisi.png" alt="">
                            </div>
                            <div class="panel_right_form">
                                <div class="col-md-10 col-md-offset-1">
                                    <form action="<?= URL; ?>" method="post">
                                        <div class="form-group input_login">
                                            <input type="email" class="form-control input_login" id="exampleInputEmail1" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group input_login">
                                            <input type="password" class="form-control input_login" id="exampleInputPassword1" name="password" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group center-block">
                                           
                                            <button type="submit" class="btn btn-default button_login center-block" name="acceder" value="1">
                                                    Acceder
                                            </button>
                                           
                                        </div>
                                        
                                            <?= $msg; ?>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
