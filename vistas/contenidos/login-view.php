<?php
    if(isset($_POST['usuario_log']) && isset($_POST['clave_log'])){
            require_once "./controladores/loginControlador.php";
            $ins_login=new loginControlador();

            echo $ins_login->iniciar_sesion_controlador();
        }
?>
<div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="" method="POST" autocomplete="off">
                    <div class="login-form-head">
                        <h4>Iniciar Sesión</h4>
                        <!--<p>Bienvenido al Sistema</p> -->
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="UserName">Usuario</label>
                            <input type="text" id="UserName" name="usuario_log"
                            pattern="[a-zA-Z0-9]{1,35}" maxlength="35" required>
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="UserPassword">Contraseña</label>
                            <input type="password" id="UserPassword"  name="clave_log"
                            pattern="[a-zA-Z0-9$@.\-]{7,100}" maxlength="35" required>
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Recordarme</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Entrar <i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="#">Ingresar Con<i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#">Ingresar Con<i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">No tienes una cuenta? <a href="register.html">Registrarse</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

