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
        <nav>
            <a class="img_nav" href="index.php">
                <img class="imgNavJuan" src="Guidline/BrandMark/Logotipo-_1_.svg" alt="logo-juan">
            </a>
        </nav>
        <div class="container espacioTop">
            <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <?php
                include "cistella_formulari.php";
                ?>
            </div>
            <?php
                
                include "formulari.php";

                ?>
            </div>
        </div>

        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
                }, false);
            });
            }, false);
        })();
        </script>
    </body>
</html>