<!DOCTYPE html>
<html>
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
        <title>Checkout JuanShop</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
        <link rel="icon" href="Guidline/BrandMark/Isotipo.png" type="image/icon type">
        <link href="styleForm.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1f7457abdb.js"></script>
    </head>
    <body class="bgGris">
        <section class="nav_global display-flex">
            <nav>
                <a class="img_nav" href="index.php">
                    <img class="imgNavJuan" src="Guidline/BrandMark/Logotipo-_1_.svg" alt="logo-juan">
                </a>
            </nav>
        </section>
        <section class = "nav_mobile">
            <nav>
                <a class = "img_nav2" href="index.php">
                    <img src="Guidline/BrandMark/Logotipo-_1_.svg" alt="logo-juan">
                </a>
            </nav>
        </section>
        <div class="container espacioTop">
            <div class="row">
                <div class="col-12">
                    <h4 class="mb-3 header1">Iniciar sesión</h4>
                    <form class="needs-validation" action="llistatProductosAdmin.php" onsubmit="return comprobarCuenta()" method="post" novalidate>
                        <div class="row">
                            <div class="col-12 pb-3">
                                <label for="email"><i class="fa fa-envelope"></i> Correo electrónico</label>
                                <input type="email" class="form-control" name="email" id="email" pattern="([A-z0-9À-ž]){2,}.*[@].*([A-z0-9À-ž]){2,}.*[.].*([a-z]){2,}" placeholder="ejemplo@gmail.com" required>
                                <div class="invalid-feedback">
                                    Correo electronico no válido.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="password"><i class="fas fa-key"></i> Contraseña</label>
                            <div class="input-group">
                                <input id="password" type="password" Class="form-control" name="password" placeholder="Password" required>
                                <div class="input-group-append">
                                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span></button>
                                </div>
                            </div>
                                <div class="invalid-feedback">
                                    Correo electronico no válido.
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <input class="btn btn-primary btn-lg btn-block" value="Iniciar sesión" type="submit">
                    </form>
                </div>
            </div>
        </div>

        <script>
            function comprobarCuenta(){
                var email = document.getElementById("email").value;
                var contrasenia = document.getElementById("password").value;
                if (email == "adminJuanShop@gmail.com" && contrasenia == "passwordAdminJuanShop"){
                    return true;
                } else { return false;}
            }

            function mostrarPassword(){
                    var cambio = document.getElementById("password");
                    if(cambio.type == "password"){
                        cambio.type = "text";
                        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                    }else{
                        cambio.type = "password";
                        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                    }
                } 
                
                $(document).ready(function () {
                //CheckBox mostrar contraseña
                $('#ShowPassword').click(function () {
                    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
                });
            });
        </script>
    </body>
</html>