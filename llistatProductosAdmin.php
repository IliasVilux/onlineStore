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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body class="bgGris">
    <nav>
        <a class="img_nav" href="index.php">
            <img class="imgNavJuan" src="Guidline/BrandMark/Logotipo-_1_.svg" alt="logo-juan">
        </a>
    </nav>
    <div class="container espacioTop">
        <div class="row">
            <div class="col-12">
                <h4 class="mb-3 header1">Productos</h4>
            </div>
        </div>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
                <td class="addPgAdmin text-uppercase header1">
                    <h6>Añadir producto</h6>
                    <form action="CRUD/formAdminProd.php" method="post">
                        <input class="btn btn-outline-primary tamanioBTN" name="action" value="+" type="submit">
                    </form>
                </td>
                <td class="addPgAdmin text-uppercase header1">
                    <h6>Productos destacados</h6>
                    <form action="CRUD/setDestacados.php" method="post" onsubmit="return validateOnSubmit()">
                            <select multiple onclick="validate()" id="choose" name="destacats[]">
                                <?php
                                require_once "CRUD/config.php";

                                $sql = "SELECT * FROM PRODUCTE";
                                $result  = mysqli_query($connexio, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        if ($row['destacat'] == 1) {
                                            echo '
                                            <option value="' . $row["id"] . '" selected>' . $row["titol"] .'</option>';
                                        } else {
                                            echo '
                                            <option value="' . $row["id"] . '">' . $row["titol"] .'</option>';
                                        }
                                    }
                                }

                                ?>
                            </select><br>
                            <input type="submit">
                        </form>

                    </form>
                </td>
            </tr>
            <tr style="text-align: left">
                <th scope="col" width="50%">Nombre</th>
                <th scope="col" width="15%">Precio</th>
                <th scope="col" width="15%">Categoria</th>
                <th scope="col" width="15%">Cantidad</th>
                <th scope="col" width="10%">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "CRUD/config.php";

            $sql = "SELECT * FROM PRODUCTE";
            $result  = mysqli_query($connexio, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                            <tr style="text-align: left">
                                <td scope="col">' . $row["titol"] . '</td>
                                <td scope="col">' . $row["preu"] . '€</td>
                                <td scope="col">' . $row["categoria"] . '</td>
                                <td scope="col">' . $row["stoc"] . '</td>
                                <td scope="col d-flex">
                                    <form action="CRUD/elimina_BBDD.php" method="post" onclick="return confirmarEliminacion()">
                                        <input class="btn btn-outline-danger" value="Eliminar" type="submit">
                                        <input type="hidden" name="elimina" value="' . $row["id"] . '"/>
                                    </form>
                                    <form action="CRUD/formAdminProd.php" method="post">
                                        <input class="btn btn-outline-primary" value="Modificar" type="submit">
                                        <input type="hidden" name="action" value="' . $row["id"] . '"/>
                                    </form>
                                </td>
                            </tr>';
                }
            }

            ?>
        </tbody>
    </table>
</body>
<script>
    function validate() {
        var selectChoose = document.getElementById('choose');
        maxOptions = 4;
        optionCount = 0;
        for (var i = 0; i < selectChoose.length; i++) {
            if (selectChoose[i].selected) {
                optionCount++;
                if (optionCount > maxOptions) {
                    alert("Hay que seleccionar 4 productos.")
                    break;
                }
            }
        }
    }
    function validateOnSubmit() {
        var selectChoose = document.getElementById('choose');
        for (var i = 0; i < selectChoose.length; i++) {
            if (selectChoose[i].selected) {
                if (optionCount != maxOptions) {
                    alert("Hay que seleccionar 4 productos.")
                    return false;
                }
            }
        }
        return true;
    }
</script>
<script>
    $('option').mousedown(function(e) {
        e.preventDefault();
        var originalScrollTop = $(this).parent().scrollTop();
        $(this).prop('selected', $(this).prop('selected') ? false : true);
        var self = this;
        $(this).parent().focus();
        setTimeout(function() {
            $(self).parent().scrollTop(originalScrollTop);
        }, 0);
        return false;
    });
    function confirmarEliminacion() {
        if (confirm("Seguro que quieres eliminar este producto?") == true) {
            return true;
        } else {
            return false;
        }
    }
</script>

</html>