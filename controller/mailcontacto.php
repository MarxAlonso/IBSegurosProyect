<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

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

if (isset($_POST["email"])) {
    $email = $_POST["email"];
} else {
    $email = null;
};

if (isset($_POST["celular"])){
    $celular = $_POST["celular"];
} else {
    $celular = null;
};

if (isset($_POST["comentario"])) {
    $comentario = $_POST["comentario"];
} else {
    $comentario = null;
};


$fecha = '<strong>Fecha: </strong>' . DateGet(). "\n";

if ($nombres != null && $email != null && $celular != null && $comentario != null ) {
   // $mail = new PHPMailer(true);
   try {
      //Server settings
       $mail->SMTPDebug = 0;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'mail.corpibgroup.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'ibseguros@corpibgroup.com';                     //SMTP username
      $mail->Password   = 'ZKy.f6;]rjyV';                         //  cambio de contraseña 23/01/2024 ==== ZKy.f6;]rjyV
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
      $mail->Body    =  "$fecha <br> <h3>Nombre : $nombres <br>Correo: $email <br>Celular : $celular <br>Comentario : $comentario</h3>";


      $mail->send();

      echo 'exito';


      //'<script>
      // $(document).ready(function(){
      //swal("Ops...","preafeg","success");
      //});
      //</script>';

      //</script > swal(functions.js);</script >
      //echo "<script > swal(functions.js);</script > ";

      /*$alert = '<div class="alert-success">
                     <span>Message Sent! Enviado </span>
                     </div>';*/
   } catch (Exception $e) {
      $alert = '<div class="alert-error">
      <span>' . $e->getMessage() . '</span>
    </div>';
   }
}
