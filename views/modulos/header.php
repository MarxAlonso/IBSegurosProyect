<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="IBseguro, seguro, seguro Lima, seguro Perú">

    <!--ESTILOS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/estilos.css">
    <link href="views/css/formstyle.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="views/js/app.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="views/js/carrousel-inicio.js"></script>
    <link href="views/css/btnstyles/btncima.css" rel="stylesheet" />
    <link href="views/css/btnstyles/btnwsp.css" rel="stylesheet" />
    <script src="views/js/tipodepersona.js"></script>    
    <link rel="stylesheet" href="views/css/responsive.css">
    <script src="views/js/glider.js"></script>
    <script src="https://kit.fontawesome.com/c1eae85dfa.js" crossorigin="anonymous"></script>
    <script src="views/js/menuresponsive.js" ></script>
    <title>IBSeguros</title>
    <link href="views/images/ibseguros2.png" rel="shortcut icon" > 
    <link href="views/images/ibseguros2.png" rel="icon">
   
    
 <script>
    function check(e) {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
                return true;
            }

            // Patrón de entrada, en este caso solo acepta numeros y letras
            patron = /[A-Za-zñÑ\s]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }


    </script>




    
</head>

<body>

    <?php include_once "menu.php"?>
