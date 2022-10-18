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
  <link href="../styleForm.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1f7457abdb.js"></script>
</head>
<script>
  function displayInput(that) {

    if (that.value == "OTROS") {
      document.getElementById("newCategory").style.display = "block";
      document.getElementById("newCategory").setAttribute('required', true);
      document.getElementById("categ").removeAttribute('required');

    } else if (that.value != "OTROS") {
      document.getElementById("newCategory").style.display = "none";
      document.getElementById("categ").setAttribute('required', true);
      document.getElementById("newCategory").removeAttribute('required');
      document.getElementById("newCategory").value = "";
    }
  }

  function setCategory() {
    if (document.getElementById("newCategory").value != "") {
      document.getElementById("otros").value = document.getElementById("newCategory").value;
    }
  }
</script>

<body class="bgGris">
  <nav>
    <a class="img_nav" href="../llistatProductosAdmin.php">
      <img class="imgNavJuan" src="../Guidline/BrandMark/Logotipo-_1_.svg" alt="logo-juan">
    </a>
  </nav>
  <div class="container espacioTop">
    <?php
    $action = $_REQUEST['action'];

    if ($action == "+") {
      echo '<h4 class="mb-3 header1">Añade un producto</h4>';
    } else {
      echo '<h4 class="mb-3 header1">Modifica un producto</h4>';

      $ProductoID = $action;

      session_start();
      require_once "config.php";

      $sql = "SELECT * FROM PRODUCTE WHERE id = $ProductoID ";
      $result  = mysqli_query($connexio, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $titol = $row['titol'];
          $categoria = $row['categoria'];
          $preu = $row['preu'];
          $descripcio = $row['descripcio'];
          $colors = $row['colors'];
          $stoc = $row['stoc'];
          $caracteristiques = $row['caracteristiques'];
          $especificacions = $row['especificacions'];
          $fotos = $row['fotos'];
        }
      } else {
        echo 'Error, no s\'ha trobat el producte';
      }
    }
    ?>
  </div>
  <?php
  $form = '<form action="crea_BBDD.php" id="upload-form" enctype="multipart/form-data" class="needs-validation" method="post">';

  if (isset($ProductoID)) {
    $form = '<form action="modifica_BBDD.php" id="upload-form" enctype="multipart/form-data" class="needs-validation" method="post">';
  }
  echo $form;
  ?>

  <div class="col-md-6 offset-md-3 mb-3">
    <label for="titol" class="required">Título</label>
    <input type="text" class="form-control" name="titol" placeholder="Título" value="<?php echo $titol; ?>" minlength="3" required>
  </div>
  <div class="col-md-6 offset-md-3 mb-3">
    <label for="categoria" class="required">Categoría</label>
    <select class="form-control" id="categ" name="categoria" onchange="displayInput(this)" required>
      <option value="PORTÁTIL">PORTÁTIL</option>
      <option value="SSD">SSD</option>
      <option value="CPU">CPU</option>
      <option value="GPU">GPU</option>
      <?php
      if (isset($ProductoID)) {
        echo '<option selected value="' . $categoria . '">' . $categoria . '</option>';
      }
      ?>
      <option id="otros" value="OTROS">OTROS</option>
    </select>
    <input type="text" id="newCategory" placeholder="Nueva categoría" value="" style="display: none;" class="form-control" minlength="2">
  </div>

  <div class="col-md-6 offset-md-3 mb-3">
    <label for="preu" class="required">Precio</label>
    <input type="number" class="form-control" name="preu" placeholder="Precio" value="<?php echo $preu ?>" required>
  </div>

  <div class="col-md-6 offset-md-3 mb-3">
    <label for="descripcio">Descripción</label>
    <textarea cols="50" rows="5" class="form-control" name="descripcio" placeholder="Descripción"><?php echo $descripcio ?></textarea>
  </div>

  <div class="col-md-6 offset-md-3 mb-3">
    <label for="colors">Colores</label>
    <input type="text" class="form-control" name="colors" placeholder="Colores" value="<?php echo $colors ?>">
  </div>

  <div class="col-md-6 offset-md-3 mb-3">
    <label for="stoc" class="required">Estoc</label>
    <input type="number" class="form-control" name="stoc" placeholder="Estoc" value="<?php echo $stoc ?>" required>
  </div>

  <div class="col-md-6 offset-md-3 mb-3">
    <label for="caracteristiques">Características</label>
    <textarea cols="50" rows="5" class="form-control" name="caracteristiques" placeholder="Características"><?php echo $caracteristiques ?></textarea>
  </div>

  <div class="col-md-6 offset-md-3 mb-3">
    <label for="especificacions">Especificaciones</label>
    <textarea cols="50" rows="5" class="form-control" name="especificacions" placeholder="Especificaciones"><?php echo $especificaciones ?></textarea>
  </div>

  <div class="col-md-6 offset-md-3 mb-3">
    <label for="foto1">Foto1</label>
    <input type="file" id="file" class="form-control" name="foto1">

    <label for="foto2">Foto2</label>
    <input type="file" id="file" class="form-control" name="foto2">
    
    <label for="foto3">Foto3</label>
    <input type="file" id="file" class="form-control" name="foto3">
  </div>
  <div class="row justify-content-center">
    <table>
      <tbody class="d-flex">
      <tr class="d-flex text-center">
        <?php

        $sqlFoto1 = "SELECT foto1 FROM PRODUCTE WHERE id = $id";
        $result  = mysqli_query($connexio, $sqlFoto1);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $img = $row['foto1'];
            if (isset($row['foto1']) && !empty($row['foto1'])) {
              echo '<td class="d-flex flex-column">
                <img class="w-50 mx-auto" src=".' . $img . '"/>
                <form>
                </form>
                <form action="deleteFoto_BBDD.php" method="POST">
                  <input type="hidden" name="delete1" value="' . $img . '"/>
                  <input type="hidden" value="' . $ProductoID . '" name="id">
                  <button class="btn btn-outline-danger type="submit">X</button>
              </form>
              </td>';
            }
          }
        }

        $sqlFoto2 = "SELECT foto2 FROM PRODUCTE WHERE id = $id";
        $result  = mysqli_query($connexio, $sqlFoto2);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $img = $row['foto2'];
            if (isset($row['foto2']) && !empty($row['foto2'])) {
              echo '<td class="d-flex flex-column">
                <img class="w-50 mx-auto" src=".' . $img . '"/>
                <form action="deleteFoto_BBDD.php" method="POST">
                  <input type="hidden" name="delete2" value="' . $img . '"/>
                  <input type="hidden" value="' . $ProductoID . '" name="id">
                  <button class="btn btn-outline-danger type="submit">X</button>
                </form>
              </td>';
            }
          }
        }

        $sqlFoto3 = "SELECT foto3 FROM PRODUCTE WHERE id = $id";
        $result  = mysqli_query($connexio, $sqlFoto3);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $img = $row['foto3'];
            if (isset($row['foto3']) && !empty($row['foto3'])) {
              echo '<td class="d-flex flex-column">
                <img class="w-50 mx-auto" src=".' . $img . '"/>
                <form action="deleteFoto_BBDD.php" method="POST">
                  <input type="hidden" name="delete3" value="' . $img . '"/>
                  <input type="hidden" value="' . $ProductoID . '" name="id">
                  <button class="btn btn-outline-danger type="submit">X</button>
                </form>
              </td>';
            }
          }
        }
        ?>
      </tr>
      </tbody>
    </table>
  </div>
  <br>
  <div class="col-md-6 offset-md-3 mb-3">
    <button class="btn btn-danger btn-sm" type="reset">Deshacer cambios</button>
    <?php
    if (isset($ProductoID)) {
      echo '
              <input type="hidden" value="' . $ProductoID . '" name="id">
              <button class="btn btn-primary btn-sm" onclick="setCategory()" type="submit">Guardar cambios</button>';
    } else {
      echo '<button class="btn btn-primary btn-sm" type="submit">Subir producto</button>';
    }
    ?>
  </div>
  </form>
</body>

</html>