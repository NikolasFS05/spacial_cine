<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '..Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('ASSET_PATH', '../asset/');

include(VIEWS_PATH . "header.php");
?>

<link rel="stylesheet" href="<?php echo CSS_PATH . "register.css"; ?>">
</head>

<body>
    <div role="main">
        <!-- formulario de registro  -->
        <form role="form" class="form-register">
            <h1>Registro de usuario</h1>
            <div class="row">
                <!-- Nombres y apellidos-->
                <label for="nombres">Nombres / apellidos</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" aria-label="Ingresa tu nombre o nombres.">
                </div>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido" aria-label="Ingresa tus apellidos.">
                </div>
                <!-- Correo -->
                <label for="nombres">Correo electronico</label>
                <div class="col-sm-6">
                    <input class="form-control" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" aria-label="Ingresa tu correo.">
                </div>
                <div class="col-sm-6">
                    <input class="form-control" type="email" name="correoC" id="correoC" placeholder="Confirmación de correo" aria-label="Confirma tu correo electronico (reescribe tu correo).">
                </div>
                <!-- Contraseña -->
                <label for="nombres">Contraseña</label>
                <div class="col-sm-6">
                    <input class="form-control" type="password" name="contrasenia" id="contrasenia" placeholder="Ingrese su Contraseña" aria-label="Ingresa una contraseña que tenga una letra mayuscula, minimo 8 caracteres y un número.">
                </div>
                <div class="col-sm-6">
                    <input class="form-control" type="password" name="contraseniaC" id="contraseniaC" placeholder="Confirmación de Contraseña" aria-label="Confirma tu contraseña (reescribe tu contraseña).">
                </div>

                <div>
                    <hr>
                </div>

                <!-- Información personal -->
                <label for="nombres">Documento de identidad / Fecha de nacimiento</label>
                <div class="col-sm-6">
                    <select name="documentoI" id="documentoI" class="form-control" aria-label="Elige un tipo de documento de identidad.">
                        <option value="">Seleccione...</option>
                        <option value="NIP">NIP</option>
                        <option value="NIT">NIT</option>
                        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                        <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                        <option value="Cedula extranjera">Cedula extranjera</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <input class="form-control" type="number" name="documento" id="documento" placeholder="Ingrese su documento" aria-label="Ingresa tu documento de identidad.">
                </div>
                <div class="col-sm-12">
                    <input class="form-control" type="date" name="fx_nacimiento" id="fx_nacimiento" aria-label="Selecciona tu fecha de cumpleaños.">
                </div>
                <!-- Datos residenciales -->
                <label for="nombres">Dirección / Celular</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Ingrese su dirección" aria-label="Ingresa tu dirección.">
                </div>
                <div class="col-sm-6">
                    <input class="form-control" type="number" name="celular" id="celular" placeholder="Ingrese su celular" aria-label="Ingresa tu número de celular.">
                </div>
                <div>
                    <hr>
                </div>
                <div class="col-sm-12">
                    <label class="verificacion"><input type="checkbox" value="checkbox_confirmación" name="autorizacion" id="autorizacion" aria-label="¿Nos das permiso para utilizar tus datos según el regimen de protección de datos personales?"> En cumplimiento del Régimen de protección de datos personales, autorizo expresamente a Spacial Cine a usar mis datos.</label>
                </div>
            </div>
            <button type="submit" class="button" value="Registrar">Registrarse</button>
            <p><a href="<?php echo VIEWS_PATH . "login.php" ?>">¡Ya tengo cuenta!</a></p>
    </div>
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>