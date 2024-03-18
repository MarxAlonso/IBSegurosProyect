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

if (isset($_POST["nombres"])) {
    $nombres = $_POST["nombres"];
} else {
    $nombres = null;
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

if (isset($_POST["email"])) {
    $email = $_POST["email"];
} else {
    $email = null;
};
if (isset($_POST["dni"])) {
  $dni = $_POST["dni"];
} else {
  $dni = null;
};
if (isset($_POST["tipoSeguro"])) {
  $tipoSeguro = $_POST["tipoSeguro"];
} else {
  $tipoSeguro = null;
};
if (isset($_POST["mensajePersona"])) {
  $mensajePersona = $_POST["mensajePersona"];
} else {
  $mensajePersona = null;
};


$fecha = '<strong>Fecha: </strong>' . DateGet(). "\n";

if ($nombres != null && $celular != null && $email != null && $dni != null && $dni != null && $tipoSeguro != null && $mensajePersona != null ) {
   // $mail = new PHPMailer(true);
   try {
      //Server settings
      $mail->SMTPDebug = 0;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'mail.corpibgroup.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'ibseguros@corpibgroup.com';                     //SMTP username
      $mail->Password   = 'ZKy.f6;]rjyV'; // ZKy.f6;]rjyV
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
      $mail->Body    =  "$fecha <br> <h3>Nombres : $nombres <br>Celular: $celular <br>Telefono : $telefono <br>DNI : $dni <br>Seguro : $tipoSeguro <br> Mensaje : $mensajePersona</h3>";

      $mail->send();

      echo 'exito';

   } catch (Exception $e) {
      $alert = '<div class="alert-error">
      <span>' . $e->getMessage() . '</span>
    </div>';
   }
}
