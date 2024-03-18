<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

//$alert =  "";
function DateGet()
{
    date_default_timezone_set('America/Lima');
    $hoy = date('Y-m-d h:i a');
    return $hoy;
}

if (isset($_POST["empresa"])) {
    $empresa = $_POST["empresa"];
} else {
    $empresa = null;
};
if (isset($_POST["rubro"])) {
  $rubro = $_POST["rubro"];
} else {
  $rubro = null;
};
if (isset($_POST["telefono"])) {
    $telefono = $_POST["telefono"];
} else {
    $telefono = null;
};

if (isset($_POST["celular"])){
    $celular = $_POST["celular"];
} else {
    $celular = null;
};

if (isset($_POST["emailEmpresa"])) {
    $emailEmpresa = $_POST["emailEmpresa"];
} else {
    $emailEmpresa = null;
};
if (isset($_POST["ruc"])) {
  $ruc = $_POST["ruc"];
} else {
  $ruc = null;
};
if (isset($_POST["tipoSeguroEmpresa"])) {
  $tipoSeguroEmpresa = $_POST["tipoSeguroEmpresa"];
} else {
  $tipoSeguroEmpresa = null;
};
if (isset($_POST["mensajePersona"])) {
  $mensajePersona = $_POST["mensajePersona"];
} else {
  $mensajePersona = null;
};


$fecha = '<strong>Fecha: </strong>' . DateGet(). "\n";

if ($empresa != null && $celular != null && $emailEmpresa != null && $ruc != null && $rubro != null && $tipoSeguroEmpresa != null && $mensajePersona != null ) {
   // $mail = new PHPMailer(true);
   try {
      //Server settings
      $mail->SMTPDebug = 0;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'mail.corpibgroup.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'ibseguros@corpibgroup.com';                     //SMTP username
      $mail->Password   = 'ZKy.f6;]rjyV'; //  cambio de contraseña 23/01/2024
      //$mail->Password   = 'jXPfru.$$0mn';                               //SMTP password
      $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('ibseguros@corpibgroup.com', 'CORPORACION IBGROUP');
      $mail->addAddress('jruiz@corpibgroup.com');     //Add a recipient
      $mail->addAddress('ibseguros@corpibgroup.com');
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'IBseguros Formulario Contacto';
      $mail->Body    =  "$fecha <br> <h3>empresa : $empresa <br>Rubro: $rubro <br>Celular: $celular <br>Telefono : $telefono <br>ruc : $ruc <br>Seguro : $tipoSeguroEmpresa <br> Mensaje : $mensajePersona</h3>";

      $mail->send();

      echo 'exito';

   } catch (Exception $e) {
      $alert = '<div class="alert-error">
      <span>' . $e->getMessage() . '</span>
    </div>';
   }
}
