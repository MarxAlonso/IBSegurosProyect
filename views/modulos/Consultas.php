<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner con Imagen</title>
    <style>
        .banner {
            position: relative;
            text-align: center;
            height: 280px;
            /* Altura fija del banner */
            overflow: hidden;
            /* Oculta cualquier contenido que sobresalga del contenedor */
        }

        .banner img {
            width: 100%;
            height: 146%;
            object-fit: cover;
            /* Para asegurarse de que la imagen cubra todo el contenedor */
            object-position: top;
            /* Muestra la parte superior de la imagen */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(22, 61, 116, 0.3);
            /* Utiliza rgba() para especificar la opacidad */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            /* Asegura que el overlay esté debajo del texto */
        }

        .banner-text {
            position: absolute;
            top: 50%;
            /* Centra verticalmente el texto */
            left: 50%;
            transform: translate(-50%, -50%);
            /* Centra horizontalmente el texto */
            z-index: 2;
            /* Asegura que el texto esté sobre el overlay */
        }

        .titulo {
            font-size: 90px;
            /* Reduzco el tamaño del texto para mejor visualización */
            font-family: system-ui;
            color: white;
        }

        .texto1 {
            color: white;
        }
        .texto2 {
            color: white;
        }

        @media screen and (max-width: 450px) {
            .titulo {
                font-size: 50px;
            }
        }
    </style>
</head>

<body>

    <div class="banner" style="height:450px">
        <img src="views/images/preguntas-frecuentes.jpg" alt="Imagen de ejemplo" Style="height:123%">
        <div class="overlay"></div>
        <div class="banner-text">
            <h1 class="titulo">Preguntas Frecuentes</h1>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <button class="btn btn-primary" type="button" id="boton-busqueda">Buscar</button>
                    <input type="text" id="input-busqueda" class="form-control" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="button-addon2" style="border: 5px solid #1162CD;">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid p-5" style="margin-bottom: -15px;">
        <div class="row justify-content-center">
            <div class="col-md-4 py-md-5" style="background-color: #13509F;">
                <h2 class="text-center texto1">Preguntas</h2>
            </div>
            <div class="col-md-4 py-md-5" style="background-color: #3F89E8;">
                <h2 class="text-center texto1">Respuestas</h2>
            </div>
        </div>
    </div>
    <style>
        .bordecolor {
            border-left: 1px solid #1162CD;
        }

        @media screen and (max-width: 767px) {
            .bordecolor {
                border-left: 0px solid #1162CD;
                border-top: 1px solid #1162CD;
            }
        }
    </style>

    <section class="preguntas-respuestas p-5">
        <div class="container-fluid" style="margin-bottom: 15px;">
            <div class="row justify-content-center pregunta">
                <div class="col-md-4 py-md-5 texto2" style="background-color: #95C1FA;">
                    <h2 class="text-center " style="margin-top: 10px;">¿Qué cubre un seguro de salud?</h2>
                </div>
                <div class="col-md-4 py-md-1 bordecolor" style="background-color: #95C1FA;">
                    <div class="texto1">
                        <p>• Gastos médicos (hospitalización, consultas, medicinas).</p>
                        <p>• Exámenes de diagnóstico</p>
                        <p>• Procedimientos quirúrgicos</p>
                        <p>• Maternidad</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-bottom: 15px;">
            <div class="row justify-content-center pregunta">
                <div class="col-md-4 py-md-5 texto2" style="background-color: #95C1FA;">
                    <h2 class="text-center " style="margin-top: 10px;">¿Cuánto cuesta un seguro de salud?</h2>
                </div>
                <div class="col-md-4 py-md-1 bordecolor" style="background-color: #95C1FA;">
                    <div class="texto1 py-md-4">
                        <p>• Depende de la cobertura, edad, sexo y estado de salud.</p>
                        <p>• Hay planes desde S/50 mensuales.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-bottom: 15px;">
            <div class="row justify-content-center pregunta">
                <div class="col-md-4 py-md-5 texto2" style="background-color: #95C1FA;">
                    <h2 class="text-center " style="margin-top: 10px;">¿Qué debo hacer para acceder a un seguro de salud?</h2>
                </div>
                <div class="col-md-4 py-md-1 bordecolor" style="background-color: #95C1FA;">
                    <div class="texto1 py-md-4">
                        <p>• Contactar a una compañia de seguros.</p>
                        <p>• Completar un formulario de solicitud.</p>
                        <p>• Someterse a un examen médico (en algunos casos)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-bottom: 15px;">
            <div class="row justify-content-center pregunta">
                <div class="col-md-4 py-md-5 texto2" style="background-color: #95C1FA;">
                    <h2 class="text-center" style="margin-top: 10px;">¿Qué cubre un seguro de contra accidentes?</h2>
                </div>
                <div class="col-md-4 py-md-1 bordecolor" style="background-color: #95C1FA;">
                    <div class="texto1 py-md-4">
                        <p>• Gastos médicos por accidentes.</p>
                        <p>• Incapacidad temporal o permanente.</p>
                        <p>• Muerte accidental.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-bottom: 15px;">
            <div class="row justify-content-center pregunta">
                <div class="col-md-4 py-md-5 texto2" style="background-color: #95C1FA;">
                    <h2 class="text-center " style="margin-top: 10px;">¿Qué es un SOAT?</h2>
                </div>
                <div class="col-md-4 py-md-1 bordecolor" style="background-color: #95C1FA;">
                    <div class="texto1 py-md-4">
                        <p>• Seguro Obligatorio de Accidentes de Tránsito.</p>
                        <p>• Cubre los gastos médicos de las víctimas de accidentes de tránsito.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-bottom: 15px;">
            <div class="row justify-content-center pregunta">
                <div class="col-md-4 py-md-5 texto2" style="background-color: #95C1FA;">
                    <h2 class="text-center " style="margin-top: 10px;">¿Cuánto cuesta un SOAT?</h2>
                </div>
                <div class="col-md-4 py-md-1 bordecolor" style="background-color: #95C1FA;">
                    <div class="texto1 py-md-4">
                        <p>• Depende del tipo de vehículo.</p>
                        <p>• Se paga anualmente junto con la revisión técnica vehicular.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-bottom: 15px;">
            <div class="row justify-content-center pregunta ">
                <div class="col-md-4 py-md-5 texto2" style="background-color: #95C1FA;">
                    <h2 class="text-center " style="margin-top: 10px;">¿Qué es un SCTR?</h2>
                </div>
                <div class="col-md-4 py-md-1 bordecolor" style="background-color: #95C1FA;">
                    <div class="texto1 py-md-4">
                        <p>• Seguro Complementario de Trabajo de Riesgo.</p>
                        <p>• Cubre los gastos de accidente de trabajo y enfermedad profesional.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-bottom: 15px;">
            <div class="row justify-content-center pregunta">
                <div class="col-md-4 py-md-5 texto2" style="background-color: #95C1FA;">
                    <h2 class="text-center " style="margin-top: 10px;">¿Cuánto cuesta un SCTR?</h2>
                </div>
                <div class="col-md-4 py-md-1 bordecolor" style="background-color: #95C1FA;">
                    <div class="texto1 py-md-5">
                        <p>• Lo paga el empleador como un porcentaje del salario del trabajador.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Script para hacer la función de búsqueda del input de búsqueda -->
<script>
    function buscarPregunta() {
        var textoBusqueda = document.getElementById('input-busqueda').value.trim().toLowerCase();

        var preguntas = document.querySelectorAll('.pregunta');

        preguntas.forEach(function(pregunta) {
            var parrafos = pregunta.querySelectorAll('.texto2 h2');
            var mostrarPregunta = false;

            parrafos.forEach(function(parrafo) {
                if (parrafo.textContent.toLowerCase().includes(textoBusqueda)) {
                    mostrarPregunta = true;
                }
            });

            var container = pregunta.closest('.container-fluid'); // Obtener el contenedor .container-fluid padre

            if (mostrarPregunta) {
                container.style.display = 'block';
            } else {
                container.style.display = 'none';
            }
        });
    }

    var inputBusqueda = document.getElementById('input-busqueda');

    inputBusqueda.addEventListener('input', buscarPregunta);
</script>

    <section class="contact_section layout_padding-bottom mt-5">
        <div class="container-fluid">
            <div class="text-center logo__blog">
                <div class="custom_heading-container">
                    <h3 class="subtitle" style="color: #6c6a6af7">
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
                    <div class="col-md-6 order-md-1 p-4" style="margin-left:150px; background:none; transition:none;color:black">
                        <form class=" ajaxcontacto" method="POST" action="controller/mailcontacto.php">
                            <div class="contact_form-container">
                                <div class="" id="grupo__nombres">
                                    <div class="formulario__grupo-input">
                                        <input required type="text" pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$" id="nombres" name="nombres" placeholder="Nombres y Apellidos" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El nombre que ser de mínimo de 3 caracteres y máximo de 72 caracteres y solo puede contener letras. </p>
                                </div>
                                <div class="" id="grupo__correo">
                                    <div class="formulario__grupo-input">
                                        <input required type="email" id="email" name="email" placeholder="Correo" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El correo tiene que tener la siguiente forma "example@example.com". </p>
                                </div>
                                <div id="grupo__telefono">
                                    <div class="formulario__grupo-input">
                                        <input type="text" id="celular" name="celular" pattern="[9][0-9]{8}" oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')" oninput="setCustomValidity('')" maxlength="9" minlength="9" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="Celular">
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
                            <img src="views/images/personaje.png" alt="Descripción de la imagen" class="img-fluid" style="margin-left:8px">
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