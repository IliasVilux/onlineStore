<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
</head>
<body style="background-color: #f7f7ff; width: auto;margin-top:20px; padding: 15px;">
    <?php

    require_once "model.php";

        $clientNombre = $_REQUEST["fname"];
        $clientApellidos = $_REQUEST["lname"];
        $clientCalle = $_REQUEST['street'];
        $clientCiudad = $_REQUEST['city'];
        $clientCP = $_REQUEST['cp'];
        $clientPais = $_REQUEST['country'];
        $clientEmail = $_REQUEST['email'];
    ?>
<div class="container">
    <div class="card" style="position: relative;display: flex;flex-direction: column; min-width: 0; word-wrap: break-word; background-color: #fff; background-clip: border-box; border: 0px solid rgba(0, 0, 0, 0); border-radius: .25rem; margin-bottom: 1.5rem; box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);">
        <div class="card-body">
            <div id="invoice" style="padding: 0px;">
                <div class="invoice overflow-auto" style="min-height: 680px; width:98%; padding: 15px;background-color: #FFF;">
                    <div style="min-width: 600px">
                        <header style="padding: 10px 0;margin-bottom: 20px;background: #eee;">
                            <div class="row">
                                <div class="col company-details" style="text-align: right;margin-right: 10px;">
                                    <h2 class="name" style="margin-top: 0; margin-bottom: 0">Juan Shop</h2>
                                    <div>juanshop@gmail.com</div>
                                    <div>Calle Aiguablava, 121</div>
                                    <div>Barcelona 08033. Cataluña, España</div>
                                </div>
                            </div>
                        </header>
                        <main style="padding-bottom: 50px">
                            <div class="row contacts" style="margin-bottom: 20px">
                                <div class="col invoice-to" style="text-align: left">
                                    <div class="prod-cat" style="font-size: 16px;margin-bottom: 10px;color: #3a5996; font-weight: bold; text-transform: uppercase; font-family: SF-Pro-Display-Thin;">FACTURA PARA:</div>
                                    <h3 class="to" style="margin-top: 0;margin-bottom: 0"><?php echo $clientNombre . " " . $clientApellidos?></h3>
                                    <div class="address"><?php echo $clientCalle?></div>
                                    <div class="address"><?php echo $clientCiudad . " " .$clientCP . ". " . $clientPais?></div>
                                    <div class="email"><?php echo $clientEmail?></div>
                                </div>
                                <div class="col invoice-details" style="text-align: right">
                                    <h1 class="invoice-id" style="margin-top: 0;color: #112442;">FACTURA PROFORMA</h1>
                                    <div class="date">Ref: 
                                        <?php echo $ref;?>
                                    </div>
                                    <div class="date">Fecha: 
                                        <?php echo $fecha;?>
                                    </div>
                                    <div class="date">Fecha de caducidad: 
                                        <?php echo $fechaCad;?>
                                    </div>
                                </div>
                            </div>
                            <table style="width: 100%;border-collapse: collapse; border-spacing: 0;margin-bottom: 20px">
                                <thead>
                                    <tr>
                                        <th class="text-left" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff; white-space: nowrap;font-weight: 400;font-size: 16px;background: #3a5996; color: #fff;">ARTICULO</th>
                                        <th class="text-right" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff; white-space: nowrap;font-weight: 400;font-size: 16px;background: #3a5996; color: #fff;">PRECIO</th>
                                        <th class="text-right" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff; white-space: nowrap;font-weight: 400;font-size: 16px;background: #3a5996; color: #fff;">CANTIDAD</th>
                                        <th class="text-right" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff; white-space: nowrap;font-weight: 400;font-size: 16px;background: #3a5996; color: #fff;">PRECIO TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                $laMevaCistella = new Cistella();
                                if(isset($_SESSION['cistella_serialitzada'])) {
                                    
                                    $cistella_sesion = $_SESSION['cistella_serialitzada'];
                                    $productesSessio = unserialize($cistella_sesion);
                                    $contador = 1;
                                    if (!empty($productesSessio)) {
                                        foreach ($productesSessio as $producteCistella) {
                                            if ($contador % 2 != 0) {
                                                echo '
                                                <tr>
                                                    <td class="text-left impar" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff;background: rgb(224, 224, 224)">
                                                        <h3 style="margin: 0;font-weight: 400;color: #6e95f5;font-size: 1.2em">' . $producteCistella->titol . '</h3>
                                                    </td>
                                                    <td class="unit impar" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff;background: rgb(224, 224, 224)">' . $producteCistella->preu . '€</td>
                                                    <td class="qty impar" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff;background: rgb(224, 224, 224);text-align: center;font-size: 18px;">' . $producteCistella->quantitat . '</td>
                                                    <td class="total" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff;text-align: right;font-size: 18px;background: #6e95f5;color: #fff;">' .$producteCistella->preu*$producteCistella->quantitat . '€</td>
                                                </tr>';
                                            } else {
                                                echo '
                                                <tr>
                                                    <td class="text-left par" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff;background: #eee">
                                                        <h3 style="margin: 0;font-weight: 400;color: #6e95f5;font-size: 1.2em">' . $producteCistella->titol . '</h3>
                                                    </td>
                                                    <td class="unit par" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff;background: #eee;">' . $producteCistella->preu . '€</td>
                                                    <td class="qty par" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff;background: #eee;text-align: center;font-size: 18px;">' . $producteCistella->quantitat . '</td>
                                                    <td class="total" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #fff;text-align: right;font-size: 18px;background: #6e95f5;color: #fff;">' .$producteCistella->preu*$producteCistella->quantitat . '€</td>
                                                </tr>';
                                            }
                                            $contador++;
                                        }
                                    }
                                    else {
                                        
                                    }
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" style="background: rgb(196, 196, 196);background: 0 0;border-bottom: none;white-space: nowrap;text-align: right; padding: 10px 20px; font-size: 18px; border-top: 1px solid #aaa;color: #fff;"></td>
                                        <td class="totalPrice" style="border-bottom: none;white-space: nowrap;text-align: right; padding: 10px 20px; font-size: 18px; border-top: 1px solid #aaa;color: #fff;background: #3a5996;font-weight: bold;padding-left: 0px;"><p style="text-align: center;line-height: 1%;border: none">TOTAL</p></td>
                                        <td class="totalPrice" style="border-bottom: none;white-space: nowrap;text-align: right; padding: 10px 20px; font-size: 18px; border-top: 1px solid #aaa;color: #fff;background: #3a5996;font-weight: bold;padding-left: 0px;"><p style="line-height: 1%;text-align: right;border: none" class="preu"><?php include "getTotal_cistella.php"?></p></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </main>
                        <footer style="width: 100%;text-align: center;color: #fff;padding: 8px 0">Muchas gracias por su compra. Hasta la próxima!</footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>