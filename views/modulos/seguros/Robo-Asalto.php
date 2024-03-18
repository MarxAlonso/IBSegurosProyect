<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banner con Imagen</title>
  <style>
    .banner {
      position: relative;
      text-align: center;
      height: 300px; /* Altura fija del banner */
      overflow: hidden; /* Oculta cualquier contenido que sobresalga del contenedor */
    }
    .banner img {
      width: 100%;
      height: 183%;
      object-fit: cover; /* Para asegurarse de que la imagen cubra todo el contenedor */
    }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color:rgba(22, 61, 116, 0.52); /* Utiliza rgba() para especificar la opacidad */
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1; /* Asegura que el overlay esté debajo del texto */
    }
    .banner-text {
      position: absolute;
      top: 50%; /* Centra verticalmente el texto */
      left: 50%;
      transform: translate(-50%, -50%); /* Centra horizontalmente el texto */
      z-index: 2; /* Asegura que el texto esté sobre el overlay */
    }
    h1 {
      font-size: 90px; /* Reduzco el tamaño del texto para mejor visualización */
      font-family: system-ui;
      color: white;
    }
    @media (max-width: 480px) {
    .col-md-6.order-md-1 {
        margin-left: 0 !important;
    }
    h1 {
      font-size: 50px; /* Reduzco el tamaño del texto para mejor visualización */
      font-family: system-ui;
      color: white;
    }
}
@media (max-width: 1110px) {
        h1 {
        font-size: 65px; 
        }
}
@media (max-width: 1010px) {
        h1 {
        font-size: 50px; 
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
  </style>
</head>
<body>

  <div class="banner"style="height:400px">
    <img src="views/images/robos-asaltos.jpg" alt="SCTR" style="height:101%">
    <div class="overlay"></div>
    <div class="banner-text">
      <h1>Seguro Contra Robos y Asaltos</h1>
    </div>
  </div>



  <section id="nosotros">

<div class="container ">

<h2 class="mt-4" style="text-align: center; font-family: sans-serif; 
font-size: 18px;  padding: 18px;color:black ;margin-bottom: 50px; margin-bottom:15px">¿Qué es?</h2>



<h1 class="mt-4" style="text-align: center; font-family: sans-serif; 
font-size: 17px;  padding: 18px;color:#00000094 ;margin-bottom: 50px;">El seguro contra robos y asaltos es una póliza que proporciona <b>protección financiera en </b>caso de robo, asalto u otros <b>actos delictivos que afecten a los bienes asegurados.</b></h1>


<h2 class="mt-4" style="text-align: center; font-family: sans-serif; 
font-size: 18px;  padding: 18px;color:black ;margin-bottom: 50px; margin-bottom:15px">¿Qué orfecemos?</h2>


<section class="contact_section layout_padding-bottom mt-5">
    <div class="container-fluid">
        <div class="layout_padding-top layout_padding2-bottom">
            <div class="row">
                <div class="col-md-4">
                    <div style="text-align: center;">
                        <img src="views/images/wallet.png" alt="Descripción de la imagen" class="img-fluid" style="max-width: 34%;display: block;margin: 0 auto;">
                    </div>
                    <h1 class="mt-4" style="text-align: center; font-family: sans-serif; font-size: 17px; padding: 18px; color: #00000094; margin-bottom: 50px;">Compensación económica para reparar los bienes robados, dañados o vandalizados</h1>
                </div>
                <div class="col-md-4">
                    <div style="text-align: center;">
                    <img src="views/images/img-salud3.png" alt="Descripción de la imagen" class="img-fluid" style="max-width: 30%;display: block;margin: 0 auto; margin-bottom: 30px;">
                    </div>
                    <h1 class="mt-4" style="text-align: center; font-family: sans-serif; font-size: 17px; padding: 18px; color: #00000094; ">Paz mental al asegurar bienes cotizados por los clientes</h1>
                </div>
                <div class="col-md-4">
                    <div style="text-align: center;">
                        <img src="views/images/finance.png" alt="Descripción de la imagen" class="img-fluid" style="max-width: 30%;display: block;margin: 0 auto; margin-bottom: 40px;">
                    </div>
                    <h1 class="mt-4" style="text-align: center; font-family: sans-serif; font-size: 17px; padding: 18px; color: #00000094; margin-bottom: 50px;">Asistencia y asesoramiento legal en la presentación de denuncias policiales</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .container .boton-seguros {
        width: 217px;
        border: 0px solid;
        border-radius: 24px;
        background-color: #aea9a98c;
        color: black;
        transition: background-color 0.3s ease;
        font-weight:500;
        height:auto;
        padding-top:5px;
        padding-bottom:5px;
    }

    .container .boton-seguros:hover {
        background-color: #4395f4; /* Cambia este color al que prefieras */
        color: white;
    }
    
</style>

<section id="Robo-Asalto">
<div class="container text-center mt-4" style="margin-bottom: 24px">
        <a href="">
                <button class="boton-seguros">¡Lo quiero!</button>
        </a>
        </div>
        <div id="myModal" class="modal">
                <div class="modal-content">
                        <span class="close">&times;</span>

                        <section id="contacto">
                                <div class="verfuncion1">
                                        <div class="container_contacto">
                                                <div class="row pt-5 justify-content-center row_contacto_principal">
                                                        <div class="col-lg-12 texto_contenedor_contacto_ibcostructor">
                                                                <h1 class="mt-4 mb-4 contact_title text-center"
                                                                        style="color:white">Seguros de Robo y Asalto</h1>
                                                                <h4 class="mt-4 mb-4  text-center" style="color:white">
                                                                        Déjanos tus datos para ponernos en contacto</h4>
                                                                <hr class="contact_hr">
                                                        </div>

                                                        <div class="col-lg-5">
                                                                <label for="tipopersona" class="pt-3 mb-3">Tipo de
                                                                        Persona:</label>
                                                                <select class="form-control select_contact"
                                                                        id="tipopersona" name="tipopersona">
                                                                        <option selected="" disabled="" value="">ELIGE
                                                                                EL TIPO DE PERSONA</option>
                                                                        <option value="Persona Natural">Persona Natural
                                                                        </option>
                                                                        <option value="Persona con Empresa">Persona con
                                                                                Empresa</option>
                                                                </select>
                                                        </div>
                                                </div>

                                                <form class="ajaxpersona" action="controller/enviar-correo-contact.php"
                                                        method="post">



                                                        <div
                                                                class="row pt-5 justify-content-center row_contacto_principal">

                                                                <div class="col-lg-5 campos-persona-natural">
                                                                        <label for="nombres" class="pt-3">Nombres y
                                                                                Apellidos:</label>
                                                                        <div class="formulario__grupo-input">
                                                                                <input required type="text"
                                                                                        pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$"
                                                                                        class="form-control inp"
                                                                                        id="nombres" name="nombres"
                                                                                        placeholder="Ingrese sus Nombres y Apellidos" />
                                                                                <p id="obligatorio-message"
                                                                                        style="color: red; display: none;">
                                                                                        *Este campo es obligatorio</p>
                                                                                <p id="incorrecto-message"
                                                                                        style="color: red; display: none;">
                                                                                        *Este campo solo debe contener
                                                                                        letras</p>
                                                                        </div>
                                                                </div>


                                                                <div class="col-lg-5 campos-persona-natural">
                                                                        <label for="telefono" class="pt-3">Teléfono
                                                                                Fijo:</label>
                                                                        <div class="input-group flex-nowrap">
                                                                                <span class="input-group-text"
                                                                                        id="spTelefono">01</span>
                                                                                <input 
                                                                                        class="form-control inp"
                                                                                        id="telefono" name="telefono"
                                                                                        pattern="[2-7][0-9]{6}"
                                                                                        oninvalid="setCustomValidity('Ingrese un número valido para Lima-Perú')"
                                                                                        oninput="setCustomValidity('')"
                                                                                        maxlength="7" minlength="7"
                                                                                        onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                                                                                        placeholder="Tel.(Opcional)"
                                                                                        aria-describedby="basic-addon1"
                                                                                        autocomplete="off">
                                                                        </div>
                                                                        <p id="obligatorio-mesage-tel"
                                                                                style="color: red; display: none;">*Este
                                                                                campo es obligatorio</p>
                                                                        <p id="incorrecto-message-tel"
                                                                                style="color: red; display: none;">
                                                                                *Ingrese solo números en este campo</p>
                                                                </div>

                                                                <div class="col-lg-5 campos-persona-natural">
                                                                        <label for="email" class="pt-3">Email</label>
                                                                        <input required type="email"
                                                                                class="form-control inp" id="email"
                                                                                name="email"
                                                                                placeholder="nombre@ejemplo.com" />
                                                                        <p id="email-validation-message"
                                                                                class="validation-message"></p>
                                                                </div>
                                                                <div class="col-lg-5 campos-persona-natural">
                                                                        <label for="celular"
                                                                                class="pt-3">Celular:</label>
                                                                        <div class="input-group flex-nowrap">
                                                                                <span class="input-group-text"
                                                                                        id="spCelular">+51</span>
                                                                                <input required type="text"
                                                                                        class="form-control inp"
                                                                                        id="celular" name="celular"
                                                                                        pattern="[9][0-9]{8}"
                                                                                        oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')"
                                                                                        oninput="setCustomValidity('')"
                                                                                        maxlength="9" minlength="9"
                                                                                        onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                                                                                        placeholder="Celular">
                                                                        </div>
                                                                        <p id="obligatorio-message-cel"
                                                                                style="color: red; display: none;">*Este
                                                                                campo es obligatorio</p>
                                                                        <p id="incorrecto-message-cel"
                                                                                style="color: red; display: none;">
                                                                                *Ingrese solo números en este campo</p>
                                                                </div>

                                                                <div class="col-lg-5 campos-persona-natural">
                                                                        <label for="dni" class="pt-3">DNI:</label>
                                                                        <div class="input-group flex-nowrap">

                                                                                <input required type="text"
                                                                                        class="form-control inp"
                                                                                        id="dni" name="dni"
                                                                                        pattern="[0-9]{8}"
                                                                                        oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')"
                                                                                        oninput="setCustomValidity('')"
                                                                                        maxlength="8" minlength="8"
                                                                                        onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                                                                                        placeholder="dni">
                                                                        </div>
                                                                        <p id="obligatorio-mesage-tel"
                                                                                style="color: red; display: none;">*Este
                                                                                campo es obligatorio</p>
                                                                        <p id="incorrecto-message-tel"
                                                                                style="color: red; display: none;">
                                                                                *Ingrese solo números en este campo</p>
                                                                </div>


                                                                <div class="col-lg-5 campos-persona-natural">
                                                                        <label for="tipoSeguro" class="pt-3">Seguro que
                                                                                desea cotizar:</label>
                                                                        <select required class="form-control"
                                                                                id="tipoSeguro" name="tipoSeguro" disabled>
                                                                                <option value="Robo y Asalto" selected>Robo y Asalto</option>
                                                                                
                                                                        </select>
                                                                </div>

                                                                <div class="col-lg-12  mx-auto campos-persona-natural"
                                                                        style="width: 85%;">
                                                                        <label class="pt-3">Mensaje:</label>
                                                                        <textarea required class="form-control" rows="5"
                                                                                id="mensajePersona"
                                                                                name="mensajePersona"
                                                                                placeholder="Ingrese su mensaje aquí..."></textarea>
                                                                        <br>
                                                                </div>

                                                                <div
                                                                        class="col-lg-12 text-center mb-4 mt-3 campos-persona-natural">
                                                                        <span class="help-block">
                                                                                <input required
                                                                                        class="btn btn-warning btn-lg marginlastmin justify-content-center"
                                                                                        type="submit" name="submit"
                                                                                        value="Enviar" />
                                                                                <span class="spinner-border text-success spinner-border-sm"
                                                                                        id="spinnerPersona"
                                                                                        role="status" aria-hidden="true"
                                                                                        style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;">
                                                                                </span>
                                                                        </span>
                                                                </div>

                                                                <p class="pt-3 campos-persona-natural"
                                                                        style="margin-left: 8%;">Al Hacer clic en
                                                                        enviar, Usted manifiesta su consentimiento para
                                                                        que IBCORP realice el tratamiento de sus datos
                                                                        personales, <br> conforme a las <a
                                                                                href="views/pdf/Terminos_y_condiciones.pdf"
                                                                                target="blank"> Condiciones y
                                                                                T&eacute;rminos detallados en la sección
                                                                                Pol&iacute;tica de Tratamiento de Datos
                                                                                Personales.</a></p>
                                                        </div> <!-- /row -->

                                                </form>



                                                <form action="controller/enviar-correo-empresa.php" class="ajaxempresa"
                                                        method="post">

                                                        <!-- Empresa -->
                                                        <div
                                                                class="row pt-5 justify-content-center row_contacto_principal">
                                                                <div class="col-lg-5 campos-persona-empresa">
                                                                        <label for="empresa"
                                                                                class="pt-3">Empresa:</label>
                                                                        <input required type="empresa"
                                                                                class="form-control inp" id="empresa"
                                                                                name="empresa"
                                                                                placeholder="Ingrese el nombre de su empresa" />
                                                                        <p id="obligatorio-message-emp"
                                                                                style="color: red; display: none;">*Este
                                                                                campo es obligatorio</p>
                                                                </div>

                                                                <div class="col-lg-5 campos-persona-empresa">
                                                                        <label for="rubro" class="pt-3">Rubro de
                                                                                Empresa:</label>
                                                                        <select required class="form-control" id="rubro"
                                                                                name="rubro">
                                                                                <option selected="" disabled=""
                                                                                        value="">Elige un rubro:
                                                                                </option>
                                                                                <option value="Construccion">
                                                                                        Construccion</option>
                                                                                <option value="Electricidad">
                                                                                        Electricidad</option>
                                                                                <option value="Hidrocarburos">
                                                                                        Hidrocarburos</option>
                                                                                <option value="Industrial">Industrial
                                                                                </option>
                                                                                <option value="Ingenieria">Ingenieria
                                                                                </option>
                                                                                <option value="Mineria">Mineria</option>
                                                                                <option value="Otros">Otros</option>
                                                                        </select>
                                                                </div>

                                                                <div class="col-lg-5 campos-persona-empresa">
                                                                        <label for="ruc" class="pt-3">RUC:</label>
                                                                        <input required type="text"
                                                                                class="form-control inp" id="ruc"
                                                                                name="ruc" pattern="[0-9]+"
                                                                                placeholder="Ingrese el número RUC de su empresa" />
                                                                        <p id="obligatorio-message-ruc"
                                                                                style="color: red; display: none;">*Este
                                                                                campo es obligatorio</p>
                                                                        <p id="incorrecto-message-ruc"
                                                                                style="color: red; display: none;">
                                                                                *Ingrese solo números en este campo</p>
                                                                </div>

                                                                <div class="col-lg-5 campos-persona-empresa">
                                                                        <label for="cargo" class="pt-3">Cargo:</label>
                                                                        <input required type="text"
                                                                                class="form-control inp" id="cargo"
                                                                                name="cargo"
                                                                                placeholder="Ingrese su cargo" />
                                                                        <p id="obligatorio-message-car"
                                                                                style="color: red; display: none;">*Este
                                                                                campo es obligatorio</p>
                                                                </div>
                                                                <div class="col-lg-5 campos-persona-empresa">
                                                                        <label for="telefono" class="pt-3">Teléfono
                                                                                Fijo:</label>
                                                                        <div class="input-group flex-nowrap">
                                                                                <span class="input-group-text"
                                                                                        id="spTelefono">01</span>
                                                                                <input type="text"
                                                                                        class="form-control inp"
                                                                                        id="telefono" name="telefono"
                                                                                        pattern="[2-7][0-9]{6}"
                                                                                        oninvalid="setCustomValidity('Ingrese un número valido para Lima-Perú')"
                                                                                        oninput="setCustomValidity('')"
                                                                                        maxlength="7" minlength="7"
                                                                                        onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                                                                                        placeholder="Tel.(Opcional)"
                                                                                        aria-describedby="basic-addon1"
                                                                                        autocomplete="off">
                                                                        </div>
                                                                        <p id="obligatorio-mesage-tel"
                                                                                style="color: red; display: none;">*Este
                                                                                campo es obligatorio</p>
                                                                        <p id="incorrecto-message-tel"
                                                                                style="color: red; display: none;">
                                                                                *Ingrese solo números en este campo</p>
                                                                </div>

                                                                <div class="col-lg-5 campos-persona-empresa">
                                                                        <label for="celular"
                                                                                class="pt-3">Celular:</label>
                                                                        <div class="input-group flex-nowrap">
                                                                                <span class="input-group-text"
                                                                                        id="spCelular">+51</span>
                                                                                <input required type="text"
                                                                                        class="form-control inp"
                                                                                        id="celular" name="celular"
                                                                                        pattern="[9][0-9]{8}"
                                                                                        oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')"
                                                                                        oninput="setCustomValidity('')"
                                                                                        maxlength="9" minlength="9"
                                                                                        onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                                                                                        placeholder="Celular">
                                                                        </div>
                                                                        <p id="obligatorio-message-cel"
                                                                                style="color: red; display: none;">*Este
                                                                                campo es obligatorio</p>
                                                                        <p id="incorrecto-message-cel"
                                                                                style="color: red; display: none;">
                                                                                *Ingrese solo números en este campo</p>
                                                                </div>
                                                                <div class="col-lg-5 campos-persona-empresa">
                                                                        <label for="emailEmpresa" class="pt-3">Email
                                                                                empresa:</label>
                                                                        <input required type="email"
                                                                                class="form-control inp"
                                                                                id="emailEmpresa" name="emailEmpresa"
                                                                                placeholder="enterprise@org.pe" />
                                                                        <p id="obligatorio-message-car"
                                                                                style="color: red; display: none;">*Este
                                                                                campo es obligatorio</p>
                                                                </div>

                                                                <div class="col-lg-5 campos-persona-empresa">
                                                                        <label for="tipoSeguroEmpresa"
                                                                                class="pt-3">Seguro que
                                                                                desea cotizar:</label>
                                                                        <select required class="form-control"
                                                                                id="tipoSeguroEmpresa"
                                                                                name="tipoSeguroEmpresa">
                                                                                <option value="Robo y Asalto" selected>Robo y Asalto</option>
                                                                                
                                                                        </select>
                                                                </div>
                                                                <!-- Fin empresa -->

                                                                <div class="col-lg-10 mx-auto campos-persona-empresa">
                                                                        <label class="pt-3">Mensaje:</label>
                                                                        <textarea required class="form-control" rows="3"
                                                                                id="mensajePersona"
                                                                                name="mensajePersona"
                                                                                placeholder="Ingrese su mensaje aquí..."></textarea>
                                                                        <br>
                                                                </div>

                                                                <div
                                                                        class="col-lg-12 text-center mb-4 mt-3 campos-persona-empresa">
                                                                        <span class="help-block">
                                                                                <input required
                                                                                        class="btn btn-warning btn-lg marginlastmin justify-content-center"
                                                                                        type="submit" name="submit"
                                                                                        value="Enviar" />
                                                                                <span class="spinner-border text-success spinner-border-sm"
                                                                                        id="spinnerEmpresa"
                                                                                        role="status" aria-hidden="true"
                                                                                        style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;">
                                                                                </span>
                                                                        </span>
                                                                </div>

                                                                <p class="pt-3 campos-persona-empresa"
                                                                        style="margin-left: 8%;">Al Hacer clic en
                                                                        enviar, Usted manifiesta su consentimiento para
                                                                        que IBCORP realice el tratamiento de sus datos
                                                                        personales, <br> conforme a las <a
                                                                                href="views/pdf/Terminos_y_condiciones.pdf"
                                                                                target="blank"> Condiciones y
                                                                                T&eacute;rminos detallados en la sección
                                                                                Pol&iacute;tica de Tratamiento de Datos
                                                                                Personales.</a></p>
                                                        </div> <!-- /row -->

                                                </form>

                                        </div><!-- /div container -->


                                </div>
                        </section>
                </div>
        </div>
</section>



        

<style>
        
        .overlay-text1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
  opacity: 0;
  transition: opacity 0.3s;
  /* Transición suave */
}

.overlay-text1 li, ul{
  color: white;
  font-size: 15px;
}


.card1:hover .overlay-text1 {
  opacity: 1;
  /* Mostrar el texto al pasar el mouse sobre la imagen */
}

.card1 {
  position: relative;
  overflow: hidden;

}

.overlay-seguros {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgb(22, 51, 77, 0.52); /* Fondo transparente */

  opacity: 0;
 
  transition: opacity 0.3s;

}

.card1:hover .overlay-seguros {
  opacity: 1;
  / Mostrar overlay al pasar el mouse sobre la imagen /
}

.card1:hover .p-4 {
  background: transparent;
  / Cambiar el fondo del texto a transparente al pasar el mouse /
  color: white;
  / Cambiar color del texto a blanco */
}
</style>
<section id="bloghome">
    <div class="container py-5 wow animate__animated animate__fadeInUp " data-wow-duration="3s">
        <div class="carousel carouselOptions">
            <div class="text-center logo__blog">
               
                <h2 class="aea" Style="margin-top:50px; font-size:17px;margin-bottom:89px; color: #00000094;font-weight:700 ">¡Otras personas buscaron ademas!</h2>

            </div>
   
            <div class="carousel__contenedor_blog">
                <button arial-label="Anterior" class="carousel__anterior_blog">
                <img src="views/images/flecha2.png" alt="Anterior">
                </button>
                <button arial-label="Siguiente" class="carousel__siguiente_blog">
                <img src="views/images/flecha1.png" alt="Siguiente">
                </button>
                <div class="carousel__lista_blog">
                    <div class="carousel__elemento">
                        <div class="container-fluid cards-inicio">
                            <div class="lista_elementos_blog container homeport1">
                                <div class="card_elemento">
                                    <div class="card__blog card1" style="border-radius:50px; height:371px">
                                    <div class="overlay-seguros"></div>
                                    <div class="overlay-text1">
                                    <ul>
                                                <li>Tendrás acceso garantizadp a una <b>amplia red de proveedores médicos</b></li>
                                                <li><b>Simplificamos los procesos administrativos</b></li>
                                        </ul>
                                        Ver más...
                                    </div>
                                        <img src="views/images/EPS.jpg" style="height: 299px;width: 100%;" />
                                        <div class="p-4 " style="background: linear-gradient(122deg, #439ddf, rgb(182, 217, 255, 0.5));">
                                           
                                            <p class="p-0 m-0 text-center" style="color:#606060; font-weight:700">
                                            Seguro EPS </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel__elemento">
                        <div class="container-fluid cards-inicio">
                            <div class="lista_elementos container homeport1">
                                <div class="card_elemento">
                                    <div class="card__blog card1"style="border-radius:   50px;height:371px">
                                    <div class="overlay-seguros"></div>
                                    <div class="overlay-text1">
                                    <ul>
                                                <li>Proporciona atención médica</li>
                                                <li>Ofrece <b>compensación económica</b> en caso de incapacidad</li>
                                        </ul>
                                        Ver más...
                                    </div>
                                        <img src="views/images/fondo-sctr.jpg" style="height: 299px;width: 100%;" />
                                        <div class="p-4 " style="background: linear-gradient(122deg, #439ddf, rgb(182, 217, 255, 0.5));">
                                       
                                            <p class="p-0 m-0 text-center" style="color:#606060; font-weight:700">
                                             SCTR
                                            </p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel__elemento">
                        <div class="container-fluid cards-inicio">
                            <div class="lista_elementos container homeport1">
                                <div class="card_elemento">
                                    <div class="card__blog card1"style="border-radius:   50px; height:371px">
                                    <div class="overlay-seguros"></div>
                                    <div class="overlay-text1">
                                        <ul>
                                                <li><b>Ofrecemos remuneraciones</b> mensuales asegurables</li>
                                                <li><b>Protegemos contra la invalidez Total</b> y Permanente por Accidente.</li>
                                        </ul>
                                        Ver más...
                                    </div>
                                        <img src="views/images/businessmen2.jpg" style="height: 299px;width: 100%;" />
                                        <div class="p-4" style="background: linear-gradient(122deg, #439ddf, rgb(182, 217, 255, 0.5));">
                                          
                                            <p class="p-0 m-0 text-center" style="color:#606060;font-weight:700">
                                              Seguro Vida Ley  </p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
          
        </div>
    </div>
    </div>
</section>



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
                    <div class="col-md-6 order-md-1 p-4" style="margin-left:150px" >
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
                                <input required class="enviar-btn" type="submit" name="submit" value="ENVIAR" />
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
</style>


</body>
</html>


