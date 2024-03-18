<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .banner {
            position: relative;
            text-align: center;
            height: 500px; /* Altura fija del banner */
            overflow: hidden; /* Oculta cualquier contenido que sobresalga del contenedor */
        }
            .banner img {
            width: 100%;
            height: 146%;
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
            z-index: 0; /* Asegura que el overlay esté debajo del texto */
            }
            .banner-text {
            position: absolute;
            top: 50%; /* Centra verticalmente el texto */
            left: 50%;
            transform: translate(-50%, -50%); /* Centra horizontalmente el texto */
            z-index: 2; /* Asegura que el texto esté sobre el overlay */
            }
            
        .titulo {
            font-size: 90px;
            /* Reduzco el tamaño del texto para mejor visualización */
            font-family: system-ui;
            color: white;
            text-align: left;
        }

        .texto2 {
            color: white;
        }

        @media screen and (max-width: 450px) {
            .titulo {
                font-size: 50px;
            }

            .texto2 h4 {
                color: white;
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

    <div class="banner" style="height:450px">
        <img src="views/images/apartado-contacto.jpg" alt="Contacto" Style="height:150%">
        <div class="overlay"></div>
        <div class="banner-text">
            <h1 class="titulo">CONTACTO</h1>
            <p style="color: white;">Deseas cotizar con expertos tu seguro ideal, ¡contáctanos ahora mismo completando este formulario!</p>
        </div>
    </div>
    <br>
    <style>
        .titulo-envianos{
            margin-top: 10px;
            margin-left: 100px;
        }
        @media (max-width: 480px) {
            .titulo-envianos{
                margin-top: 10px;
                margin-left: 20px;
            }
        }
        
    </style>
    <section class="contactos p-5" style="margin-top: -200px; z-index:2;">
        <div class="container-fluid" style="margin-bottom: 15px;">
            <div class="row justify-content-center pregunta">
                <div class="col-md-8 py-md-5 texto2" style="background-color: #95C1FA; border-top-left-radius:18px; border-bottom-left-radius:18px">
                    <h4 class="text-left titulo-envianos">ENVÍANOS UN MENSAJE</h4><br>
                    <form action="controller/enviar-correo-contact.php" method="post">
                        <div class="row pt-5 justify-content-center">
                            <div class="col-lg-5">
                                <div class="formulario__grupo-input" style="margin-bottom: 90px;">
                                    <input required type="text" pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$" class="form-control inp" id="nombres" name="nombres" placeholder="Nombres y Apellidos"  style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white;"/>
                                    <p id="obligatorio-message" style="color: red; display: none;">*Este campo es obligatorio</p>
                                    <p id="incorrecto-message" style="color: red; display: none;">*Este campo solo debe contener letras</p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="input-group flex-nowrap  " style="margin-bottom: 90px;">
                                    <input style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white;" type="text" class="form-control inp" id="telefono" name="telefono" pattern="[2-7][0-9]{6}" oninvalid="setCustomValidity('Ingrese un número valido para Lima-Perú')" oninput="setCustomValidity('')" maxlength="7" minlength="7" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="Número telefónico" aria-describedby="basic-addon1" autocomplete="off">
                                </div>
                                <p id="obligatorio-mesage-tel" style="color: red; display: none;">*Este campo es obligatorio</p>
                                <p id="incorrecto-message-tel" style="color: red; display: none;">*Ingrese solo números en este campo</p>
                            </div>
                            <div class="col-lg-5" style="margin-bottom: 90px;">
                                <input required type="email" class="form-control inp" id="email" name="email" placeholder="Email" style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white;"/>
                                <p id="email-validation-message" class="validation-message"></p>
                            </div>
                            <div class="col-lg-5">
                                <div class="input-group flex-nowrap" style="margin-bottom: 90px;">
                                    <input required type="text" class="form-control inp" id="celular" name="celular" pattern="[9][0-9]{8}" oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')" oninput="setCustomValidity('')" maxlength="9" minlength="9" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="Célular" style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white;">
                                </div>
                                <p id="obligatorio-message-cel" style="color: red; display: none;">*Este campo es obligatorio</p>
                                <p id="incorrecto-message-cel" style="color: red; display: none;">*Ingrese solo números en este campo</p>
                            </div>
                            <div class="col-lg-5" >
                                <div class="formulario__grupo-input" style="margin-bottom: 90px;">

                                    <input required type="text" class="form-control inp" id="dni" name="dni" pattern="[0-9]{8}" oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')" oninput="setCustomValidity('')" maxlength="8" minlength="8" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="DNI" style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white;">
                                </div>
                                <p id="obligatorio-mesage-tel" style="color: red; display: none;">*Este campo es obligatorio</p>
                                <p id="incorrecto-message-tel" style="color: red; display: none;">*Ingrese solo números en este campo</p>
                            </div>
                            <div class="col-lg-5" style="margin-bottom: 90px;">
                                <select required class="form-control inp" id="tipoSeguro" name="tipoSeguro" style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white;">
                                    <option disabled selected>Seguro que desea cotizar:</option>
                                    <option>Seguro de salud</option>
                                    <option>Seguros de EPS para empresas y persona natural con negocio </option>
                                    <option>Seguro Contra Accidentes</option>
                                    <option>Seguro Oncológico</option>
                                    <option>Seguro de Ahorro</option>
                                    <option>Seguro de Vida a Corto Plazo</option>
                                    <option>Seguro de Vida Largo Plazo</option>
                                    <option>Seguro Académico</option>
                                    <option>Seguro Vehicular</option>
                                    <option>Seguro de viajes</option>
                                    <option>Seguro de Hogar</option>
                                    <option>Seguro SOAT</option>
                                    <option>SCTR</option>
                                    <option>EPS</option>
                                    <option>Vida Ley</option>
                                    <option>Aviación</option>
                                    <option>Transporte</option>
                                    <option>Incendio</option>
                                    <option>CAR</option>
                                    <option>Rotura de Maquinaria</option>
                                    <option>Responsabilidad Civil</option>
                                    <option>Cascos Marítimos</option>
                                    <option>Lucro Cesante</option>
                                    <option>Multirriesgo</option>
                                    <option>TREC</option>
                                    <option>Robo y Asalto</option>
                                    <option>Caución / Crédito</option>
                                    <option>Seguro 3D</option>
                                    <option>EAR</option>
                                    <option>Equipo electrónico</option>
                                </select>

                            </div>

                            <div class="col-md-8">
                                <label class="pt-3">Mensaje</label>
                                <textarea required class="form-control" rows="3" id="mensajePersona" name="mensajePersona"  style="background-color: transparent; border-top: none; border-right: none; border-left: none; border-bottom: 2px solid white;"></textarea>
                                <br>
                            </div>

                            <div class="col-lg-12 text-center mb-4 mt-3">
                                <span class="help-block">
                                    <input required class="btn btn-warning btn-lg marginlastmin justify-content-center" type="submit" name="submit" value="Enviar" />
                                    <span class="spinner-border text-success spinner-border-sm" id="spinnerPersona" role="status" aria-hidden="true" style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;">
                                    </span>
                                </span>
                            </div>
                        </div> <!-- /row -->
                    </form>
                </div>
                <div class="col-md-4 py-md-5 bordecolor" style="background-color: #13509F; border-top-right-radius:18px; border-bottom-right-radius:18px">
                    <div class="texto2">
                        <h4 class="text-left" style="margin-left: 30px; margin-bottom: 40px;">Contacto Info</h4>
                        <div class="contactoinfo" style="margin-bottom: 40px;"><i class="bi bi-phone"></i><p class="infop">+51 912 027 724</p></div>
                        
                        <div class="text-left contactoinfo">
                            <a href="ibseguros@corpigroup.com" style="text-decoration: none; color:white;"><i class="bi bi-envelope"></i> <p class="infop">ibseguros@corpigroup.com</p></a>
                        </div>
                    </div>
                    <div class="ambulancia-container">
                        <img src="views/images/ambulancia.png"alt="ambulancia" class="ambulancia-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .btn{
            background-color: #CFCFCF;
            color: gray;
            border: 1px solid gray;
        }

        .btn:hover{
            background-color: #03458C;
            color: white;
            border: 1px solid #03458C;
        }

        /* Estilos para la ambulancia */
        .ambulancia-container {
            text-align: right; /* Alinea la imagen a la derecha */
            margin-top: 20px;
            
        }

        .ambulancia-img {
            max-width: 100%; /* Asegura que la imagen sea responsive */
            height: auto; /* Ajusta la altura automáticamente */
            transform: scaleX(-1); /* Voltea la imagen horizontalmente para que mire hacia la derecha */
        }


        /* CSS */
        .inp::placeholder {
        color: white; /* Cambiar el color del placeholder a blanco */
        }

        .bi{
            font-size: 35px;
        }
        .contactoinfo{
            margin-left: 30px;
            
        }
        .infop{
            font-size: 18px;
            margin-top:-40px;
            margin-left: 50px;
        }

        @media (max-width: 480px) {
            .bi {
                font-size: 15px;
            }
            .infop{
                margin-top: 0px;
                font-size: 13px;
                margin-left: 0px;
            }
            .contactoinfo{
                margin-left: 0px;
                
            }
        }
        
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
            margin-left: 6%;
        }

        .enviar-btn {
            width: 32%;
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
            background-color: #4395f4;
            /* Cambia este color al que prefieras */
            color: white;
            /* Asegura que el color del texto no cambie en el hover */

        }

        .p-4:hover {
            background: linear-gradient(122deg, rgba(67, 157, 223, 0.5), rgba(182, 217, 255, 0.5));
            /* Cambia los colores o estilos según tu preferencia */
            transition: background 0.3s ease;
            color: white;
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
            background-color: rgb(22, 51, 77, 0.52);
            /* Fondo transparente */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            /* Alinear verticalmente */
            opacity: 0;
            /* Inicialmente invisible */
            transition: opacity 0.3s ease;
            border-radius: 50px;
        }



        .mensaje_hover p {
            font-size: 15px;
            color: white;
            width: 80%;
            margin: 5px 0;
            /* Espacio entre párrafos */
        }
    </style>