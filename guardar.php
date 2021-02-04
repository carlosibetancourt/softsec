<?php
//CONEXION A LA BASE DE DATOS
$conexion = mysqli_connect("localhost", "root", "", "bd_aspirantes");
/*if(!$conexion){
    echo 'Error al conectar a la base de datos';
}
else{
    echo 'Conectado a la base de datos';
}*/

//RECIBIR LOS DATOS Y ALMACENARLOS EN VARIABLES
$apellidopaterno = $_POST["ApellidoPaterno"];
$apellidomaterno = $_POST["ApellidoMaterno"];
$nombre = $_POST["Nombre"];
$sexo = $_POST["Sexo"];
$acta_nacimiento = $_POST["ActaNacimiento"];
$curp = $_POST["CURP"];
$fotografia = $_POST["Fotografia"];
$certificado_primaria = $_POST["CertificadoPrimaria"];
$telefono = $_POST["NumeroTelefono"];
$correo = $_POST["CorreoElectronico"];

//CONSULTA PARA INSERTAR DATOS
$insertar = "INSERT INTO alumnos(apellidopaterno, apellidomaterno, nombre, sexo, acta_nacimiento, curp, fotografia, certificado_primaria, telefono, correo) VALUES ($apellidopaterno, $apellidomaterno, $nombre, $sexo, $acta_nacimiento, $curp, $fotografia, $certificado_primaria, $telefono, $correo)";

//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
    echo 'Error al registrarse';
}else{
    echo 'Datos ingresados correctamente';
}

//CERRAR MI BASE DE DATOS
mysqli_close($conexion);

