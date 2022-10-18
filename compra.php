<?php

echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      @import "style.css"
    </style>
    <title>Compra</title>
  </head>
  <body style="text-align: center">
    <section class="imgTxtCart">
      <article>
        <h2 class="header4">GRACIAS POR SU COMPRA!</h2>
        <h3 class="header2 ">RECIBIRÁ UN CORREO ELECTRONICO CON LOS DATOS DE SU PEDIDO.</h3>
      </article>
    </section>
    <section style="margin: 20px 0px">
      <a href="index.php"><button class="botonCompra">Volver</button></a>
    </section>
  </body>
  </html>';?>

<?php

  function getFormCliente() {
    $ref = $_REQUEST['ref'];
    $fecha = $_REQUEST['fecha'];
    $fechaCad = $_REQUEST['fechaCad'];
    ob_start();
    $form_cliente = include "factura.php";
    file_put_contents('facturaClient.html', ob_get_contents());
    return $form_cliente;
  }
  
  function getFormAdmin() {
    $ref = $_REQUEST['ref'];
    $fecha = $_REQUEST['fecha'];
    $fechaCad = $_REQUEST['fechaCad'];
    ob_start();
    $form_admin = include "datos_factura.php";
    file_put_contents('facturaAdmin.html', ob_get_contents());
    return "";
  }

  $showFactura = $_REQUEST['showFactura'];
  if($showFactura == "true") {
    getFormCliente();
    getFormAdmin();
  }


  
  $facturaClient = file_get_contents("facturaClient.html");
  $facturaAdmin = file_get_contents("facturaAdmin.html");

  $emailCliente = $_REQUEST['email'];
?>

<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);error_reporting(E_ALL);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
    $mailClient = new PHPMailer (true);

    try{
        $mailClient -> isSMTP();
        $mailClient -> Host = 'smtp-adrian.alwaysdata.net';
        $mailClient -> SMTPAuth = true;
        $mailClient -> Username = 'adrian@alwaysdata.net';
        $mailClient -> Password = 'Retrete123';
        $mailClient -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mailClient -> Port = 465;


        $mailClient -> setFrom('adrian@alwaysdata.net', 'Juan Shop');
        $mailClient -> addAddress($emailCliente, 'User');

        $mailClient -> addReplyTo('adrian@alwaysdata.net', 'Information');

        $mailClient -> isHtml (true);
        $mailClient -> Subject = 'Factura de JuanShop';
        $mailClient -> Body = "Aquí tiene su factura. Gracias por su compra!\n$facturaClient";

        /* $mailClient -> AltBody = 'Contingut que es pot formatejar'; */

        $mailClient -> send();
        
    }catch(Exception $e){
        echo "Error al enviar el correu: {$mail->ErrorInfo}";
    }

    $mailAdmin = new PHPMailer (true);

    try{
        $mailAdmin -> isSMTP();
        $mailAdmin -> Host = 'smtp-adrian.alwaysdata.net';
        $mailAdmin -> SMTPAuth = true;
        $mailAdmin -> Username = 'adrian@alwaysdata.net';
        $mailAdmin -> Password = 'Retrete123';
        $mailAdmin -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mailAdmin -> Port = 465;


        $mailAdmin -> setFrom('adrian@alwaysdata.net', 'Admin Juan Shop');
        $mailAdmin -> addAddress($emailCliente, 'User'); //MAIL PARA JUAN 'juanshop@gmail.com'

        $mailAdmin -> addReplyTo('adrian@alwaysdata.net', 'Information');

        $mailAdmin -> isHtml (true);
        $mailAdmin -> Subject = 'Factura detallada de JuanShop';
        $mailAdmin -> Body = "FACTURA DEL PEDIDO:\n$facturaAdmin";

        /* $mailAdmin -> AltBody = 'Contingut que es pot formatejar'; */

        $mailAdmin -> send();
        
    }catch(Exception $e){
        echo "Error al enviar el correu: {$mailAdmin->ErrorInfo}";
    }
?>

