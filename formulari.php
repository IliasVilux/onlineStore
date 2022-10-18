<div class="col-md-8 order-md-1">
    <h4 class="mb-3 header1">Dirección de entrega</h4>
    <form class="needs-validation" action="compra.php" onsubmit="return validarFecha()" method="post" novalidate>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="fname"><i class="fa fa-user"></i> Nombre</label>
            <input type="text" class="form-control" name="fname" id="firstName" placeholder="Nombre" value="" pattern="([A-zÀ-ž]){2,}" minlength="2" required>
            <div class="invalid-feedback">
                Nombre no válido.
            </div>  
            </div>
            <div class="col-md-6 mb-3">
            <label for="lname"><i class="fa fa-user"></i> Apellidos</label>
            <input type="text" class="form-control" name="lname" id="lastName" placeholder="Apellidos" value="" minlength="2" required>
            <div class="invalid-feedback">
                Apellido no válido.
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 mb-3">
                <label for="email"><i class="fa fa-envelope"></i> Correo electrónico</label>
                <input type="email" class="form-control" name="email" id="email" pattern="([A-z0-9À-ž]){2,}.*[@].*([A-z0-9À-ž]){2,}.*[.].*([a-z]){2,}" placeholder="ejemplo@gmail.com" required>
                <div class="invalid-feedback">
                    Correo electronico no válido.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="country">País</label>
                <select id="country" name="country" class="form-control">
                    <option value="Spain">Spain</option>    
                    <option value="Portugal">Portugal</option>
                    <option value="France">France</option>
                    <option value="Italy">Italy</option>
                    <option value="Deutschland">Deutschland</option>
                    <option value="Norway">Norway</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Finland">Finland</option>
                </select>
            </div>
        </div>

        <div class="row">
        <div class="col-md-5 mb-3">
                <label for="street">Calle</label>
                <!-- pattern="([A-zÀ-ž]){2,}.*[,].*([0-9]){1,}" -->
                <input type="text" class="form-control" name="street" id="street" placeholder="Calle, num" value="" required>
                <div class="invalid-feedback">
                    Calle no válida.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="city"></i>Ciudad</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Ciudad" value="" pattern="([A-zÀ-ž]){2,}" minlength="3" required>
                <div class="invalid-feedback">
                    Ciudad no válida.
                </div>
            </div>
            <div class="col-md mb-3">
                <label for="cp">Codi Postal</label>
                <input type="text" class="form-control" name="cp" id="cp" placeholder="xxxxx" value="" maxlength="5" required>
                <div class="invalid-feedback">
                    Código postal no válido.
                </div>
            </div>
        </div>
        
        <hr class="mb-4">
        <h4 class="mb-3 header1">Datos de pago</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="cc-name">Titular</label>
            <input type="text" class="form-control" name="cc-name" id="cc-name" pattern="([A-zÀ-ž]){2,}.*[\s].*([A-zÀ-ž]){2,}" placeholder="Nombre  y apellidos" required>
            <div class="invalid-feedback">
                Titular requerido.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="cc-number">Número de la targeta</label>
            <input type="text" class="form-control" name="cc-number" id="cc-number" pattern="([0-9]){16,}" placeholder="16 digitos" maxlength="16" required>
            <div class="invalid-feedback">
                Número de la targeta requerido.
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-3">
            <label for="cc-expiration">Fecha de caducidad</label>
            <input type="text" class="form-control" name="cc-expiration" id="cc-expiration" pattern="([0-9]){4,}" placeholder="mmYY" maxlength="4" required>
            <div class="invalid-feedback">
                Fecha de caducidad incorrecta.
            </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="cc-cvc">CVC</label>
                <input type="password" class="form-control" name="cc-cvc" id="cc-cvc" pattern="([0-9]){3,}" maxlength="3" placeholder="123" required>
            <div class="invalid-feedback">
                CVC requerido.
            </div>
            </div>
        </div>
        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" value="Comprar" type="submit">
        <input hidden type="text" name="showFactura" id="showFactura" value="false">
        <?php
            $ref = date("dmYhis");
            $fecha = date("d/m/Y");
            $fechaCad = date("d/m/Y", strtotime("+1month"));
            echo "<input hidden name='ref' value=$ref>";
            echo "<input hidden name='fecha' value=$fecha>";
            echo "<input hidden name='fechaCad' value=$fechaCad>";
        ?>
    </form>
</div>

<script>
    var screenWidth = window.screen.width;
    document.getElementById("showFactura").value;
    if (screenWidth > 480){
        document.getElementById("showFactura").value = "true";
    }

    document.getElementById("cc-cvc").addEventListener("keypress", function(valor) {
        if (valor.which < 48 || valor.which > 57) {valor.preventDefault();}
    });
    document.getElementById("lastName").addEventListener("keypress", function(valor) {
        if (valor.which < 48 || valor.which > 57) {console.log("")} else {valor.preventDefault();}
    });
    document.getElementById("cc-expiration").addEventListener("keypress", function(valor) {
        if (valor.which < 48 || valor.which > 57) {valor.preventDefault();}
    });
    function validarFecha(){
        var tmp = document.getElementById("cc-expiration").value;
        var tmpStr = tmp.toString();
        if (tmpStr.length == 4){
            var tmpMes = tmp.substring(0,2);
            var tmpAny = tmp.substring(2,4);
            const fecha = new Date();
            let mes = fecha.getMonth()+1;
            let any = fecha.getFullYear();
            var any2DigitsFinals = any.toString().charAt(2) + any.toString().charAt(3);

            if (any2DigitsFinals == tmpAny && mes == tmpMes){
                    return true;
            } else if (any2DigitsFinals == tmpAny){
                if (tmpMes <=12 && tmpMes >=1){
                    if (tmpMes.charCodeAt(0) == 48){
                        if (mes <= tmpMes.charAt(1)){
                            return true;
                        } else{ return false; }
                    } else {
                        if (mes <= tmpMes){
                            return true;
                        } else{ return false; }
                    }
                } else { return false; }
            } else if (any2DigitsFinals < tmpAny){
                if (tmpMes <=12 && tmpMes >=1){
                    return true;
                } else { return false; }
            } else if (any2DigitsFinals > tmpAny){
                return false;
            }
        }
    }

    document.getElementById("cc-number").addEventListener("keypress", function(valor) {
        if (valor.which < 48 || valor.which > 57) {valor.preventDefault();}
    });
    document.getElementById("cp").addEventListener("keypress", function(valor) {
        if (valor.which < 48 || valor.which > 57) {valor.preventDefault();}
    });
</script>