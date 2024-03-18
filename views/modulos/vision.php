<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banner con Imagen</title>
  <style>
    .carouselFondo2 {
      background-image: url('views/images/laptops.jpg');
      background-size: cover;
      background-position: center center; /* Centra la imagen verticalmente */
      background-repeat: no-repeat;
      position: relative;
      overflow: hidden;
      height: 750px;
  }
  

.overlay2 {
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color:rgb(23, 35, 70, 0.52);
  /* Color azul con 50% de opacidad */
}

.overlay2 h2 {
  color: white;
  font-size: 100px;
  font-weight: bold;
  position: relative;
  text-align: left;
  margin-left: 70px;
}

@media screen and (max-width: 480px) {
  .overlay2 h2 {
    color: white;
    font-size: 64px;
    font-weight: bold;
    position: relative;
    text-align: center;
    margin-left:0px;
  }
}

.overlay2 p {
  color: white;
  font-size: 20px;
  position: relative;
  text-align: left;
  margin-left: 82px;
  margin-top:23px
}

.enlace2 {
  text-decoration: none;
  color: white;
  text-align: left;
  margin-left: 55px;
  transition: text-shadow 0.3s ease; /* Agrega una transición suave al efecto de brillo */
}

.enlace2 h4{
  font-size: 22px;
  text-decoration: none;
  margin-left: 30px;
}

.enlace2:hover {
  text-decoration: none;
  text-shadow: 0 0 20px white; /* Crea un efecto de brillo con una sombra blanca */
  color: white; /* Asegura que el texto siga siendo blanco */
  text-align: left;
  margin-left: 55px;
}


@media only screen and (max-width: 500px) {
  .overlay2 p {
    margin-left: 25px !important;
  }
}


@media only screen and (max-width: 375px) {
  .enlace2.mision {
    margin-left: -13% !important;
  }
}

@media only screen and (max-width: 375px) {
  .enlace2.vision {
    margin-left: -19px !important;
  }
}



</style>

<style>
    .contenedor {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* Tres columnas de igual ancho */
        gap: 20px; /* Espacio entre las columnas */
        justify-items: center; /* Centra los elementos horizontalmente */
        align-items: center; /* Centra los elementos verticalmente */
        margin-top: 180px;
    }
  

</style>
<div class="carouselFondo2">
                    <div class="overlay2">
                        <div>
                            <br><br><br><br><br>
                        </div>
                        <h2>Acerca de </br>
                        Nosotros</h2>
                    
                        <P>¡En IBSEGUROS, nos enorgullece ser una fuente confiable de seguridad y tranquilidad </br>
                            para nuestros clientes!</P>
                                 <div class="contenedor">
                                        <a class="enlace2 mision" href="nosotros" style="margin-left:93%">
                            
                                        <h4>MISIÓN</h4>
                                        </a>
                                        <a class="enlace2 vision" href="vision" style="margin-left:17px" >

                                        <h4>VISIÓN </h4>
                                        </a>
                                        <a class="enlace2 valores" href="valores" style="margin-right:100%">
                                        <h4>VALORES</h4>
                                    </a>
                                 </div>
                    </div>
</div>
<br>




  <section id="nosotros">

<div class="container ">

<h2 class="mt-4" style="text-align: left; font-family: sans-serif; 
font-size: 57px;  padding: 18px;color:black ;margin-bottom: 50px; margin-bottom:15px">VISIÓN</h2>



<h1 class="mt-4 a" style="text-align: justify; font-family: sans-serif; 
font-size: 19px;  padding: 18px 97px;color:#00000094 ;margin-bottom: 50px;">Ser la empresa de seguros más reconocida y confiable por su compromiso con la excelencia, la innovación 
y la satisfacción de sus clientes, brindándoles la mejor experiencia posible en la gestión de sus riesgos y la protección de su patrimonio.</h1>


</div>
<section class="contact_section layout_padding-bottom mt-5">
    <div class="container-fluid">
        <div class="layout_padding-top layout_padding2-bottom">
            <div class="row">
                <div class="col-md-5 order-md-1 d-flex align-items-center justify-content-center">
                    <div class="text-center" style="width:100%">
                        <img src="views/images/man2.png" alt="Descripción de la imagen" class="img-fluid" style="margin-left:47%;  max-width: 80%; margin-top:-65px">
                    </div>
                </div>
                <div class="col-md-4 order-md-2 custom-padding" style="margin-left: -125px; background:none; transition:none; color: black; border-radius: 10px; 
                background-color: #283b85;padding: 36px 43px; height:auto; margin-top:26%; margin-left:6%">
    <h1 style="font-size: 19px; color: white; padding: 5px; font-weight:100">TU tranquilidad es nuestro prioridad número uno. Confía en <strong style="font-weight: bold;">IBSEGUROS</strong>para proteger lo que
    más valoras. <strong style="font-weight: bold;">¡Descubre por qué miles de clientes confían en nosotros y contáctanos</strong> hoy mismo para obtener más información o para 
    solicitar una cotización gratuita!</h1>
</div>

            </div>
        </div>
    </div>
</section>

<style>
    
   @media only screen and (max-width: 500px) {
  .mt-4{
    text-align: center !important;
  }
  .a{

    text-align: justify !important;
    padding: 18px 13px;
  }


}

@media only screen and (max-width: 500px) {
  .mt-4.a {
    padding: 18px 13px !important;

  }
}

@media only screen and (max-width: 500px) {
  .img-fluid {
    margin-left: 0px !important;
    max-width: 100% !important;
  }
}

@media only screen and (max-width: 500px) {
  .custom-padding {
    margin-top: 4% !important;
    margin-left: 3% !important;
    margin-right: 3% !important;
    padding: 9px 21px !important;
  }
}

</style>











<section class="contact_section layout_padding-bottom mt-5">
<div class="container-fluid">
            <div class="text-center logo__blog">
                <div class="custom_heading-container">
                    <h3 class="subtitle" style= "color: #6c6a6af7">
                        ¿DESEAS CONTACTARNOS?
                    </h3>
                            
                            <div class="subtitle-container">
                                    <h5 class="subtitle" style="font-size:13px; color: #6c6a6af7">
                                    ¡Bríndanos tus datos y nos estaremos comunicando contigo lo antes posible!
                                </h5>
                            </div>
                                </div>
                </div>
            <div class="layout_padding-top layout_padding2-bottom">
                <div class="row">
                    <div class="col-md-6 order-md-1 p-4" style="margin-left:150px; background:none; transition:none;color:black" >
                        <form class="ajaxcontacto" method="POST" action="controller/mailcontacto.php">
                            <div class="contact_form-container">
                                <div class="" id="grupo__nombres">
                                    <div class="formulario__grupo-input">
                                        <input required type="text" pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$"  id="nombres" name="nombres" placeholder="Nombres y Apellidos" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El nombre que ser de mínimo de 3 caracteres y máximo de 72 caracteres y solo puede contener letras. </p>
                                </div>
                                <div class="" id="grupo__correo">
                                    <div class="formulario__grupo-input">
                                        <input required type="email"  id="email" name="email" placeholder="Correo" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El correo tiene que tener la siguiente forma "example@example.com". </p>
                                </div>
                                <div id="grupo__telefono">
                                    <div class="formulario__grupo-input">
                                        <input  type="text" id="celular" name="celular" pattern="[9][0-9]{8}" oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')" oninput="setCustomValidity('')" maxlength="9" minlength="9" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="Celular">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El telefono tiene que ser de 9 caracteres y solo puede contener numeros. </p>
                                </div>
                                <div class="" id="grupo__comentario">
                                    <div class="formulario__grupo-input">
                                        <input type="text" name="comentario" id="comentario" placeholder="Comentario" class="message_input" required="required">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">Un comentario tiene que ser de minimo 100 caracteres y máximo de 500 caracteres y solo puede contener numeros, letras </p>
                                </div>
                            </div>
                            <div class="col mt-4">
                                <div class="g-recaptcha" data-sitekey="6LcjeNYhAAAAADsEeMzI2CnqPdN4yufNFIjGxcD0"></div>
                            </div>
                            <div class="formulario__mensaje mb-4 mt-4" id="formulario__mensaje">
                                <p><i class="fas fa-exclamation-triangle"></i> <b>Error: </b><span id="error-mensaje"></span></p>
                            </div>
                            <div class="col-md-11 text-center"> 
                            <span class="help-block">
                            <input required="" class="enviar-btn" type="submit" name="submit" value="ENVIAR" 
>
                                <span class="spinner-border text-success spinner-border-sm" id="spinnerPersona" role="status" aria-hidden="true" style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;"></span>
                            </span>
                            </div>
                        </form>
                    </div>
         
                    <div class="col-md-5 order-md-2 d-flex align-items-center justify-content-center">
                        <div class="text-center" style="width:415px">
                            <img src="views/images/personaje.png" alt="Descripción de la imagen" class="img-fluid" 
                            style="margin-left:8px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <style>


@media (max-width: 480px) {
    .col-md-6.order-md-1 {
        margin-left: 0 !important;
    }
}
  

@media (max-width: 844px) {
    .col-md-6.order-md-1 {
        margin-left: 0 !important;
    }
}
  
@media (max-width: 1132px) {
    .col-md-6.order-md-1 {
        margin-left: 0 !important;
    }
}

    .custom_heading-container {
    text-align: left;
    margin-left:6%;
}
.enviar-btn {
        width: 21%;
        padding-top: 4px;
        padding-bottom: 4px;
        border-radius: 15px;
        background: #cbd1d8;
        border: none;
        font-weight: 500;
        color: black;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .enviar-btn:hover {
        background-color: #4395f4; /* Cambia este color al que prefieras */
        color: white; /* Asegura que el color del texto no cambie en el hover */
        
    }


.p-4:hover {
    background: linear-gradient(122deg, rgba(67, 157, 223, 0.5), rgba(182, 217, 255, 0.5));
    /* Cambia los colores o estilos según tu preferencia */
    transition: background 0.3s ease;
    color:white; 
}

.card_elemento {
        position: relative;
        overflow: hidden;
    }

    .card_elemento:hover .mensaje_hover {
        opacity: 1;
    }

    .mensaje_hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(22, 51, 77, 0.52); /* Fondo transparente */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column; /* Alinear verticalmente */
        opacity: 0; /* Inicialmente invisible */
        transition: opacity 0.3s ease;
        border-radius:50px;
    }

    

    .mensaje_hover p {
        font-size: 15px;
        color: white;
        width: 80%;
        margin: 5px 0; /* Espacio entre párrafos */
    }




</style>







  
</body>
</html>
