<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainding Hair</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>

<header>
    <?php include 'partials/navbar.php'?>
</header>

<body>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/1.png">
                <div class="carousel-caption d-none d-md-block" id="caption">
                    <h2>¿Necesitas un peinado para <br> una ocación especial?</h2>
                    <button type="button" class="btn btn-outline-light">AGENDAR TURNO</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/c1.png">
                <div class="carousel-caption d-none d-md-block" id="caption2">
                    <h2>¡Somos expertos en <br> Tratamientos Capilares!</h2>
                    <button type="button" class="btn btn-outline-light">VER SERVICIOS</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/6.png">
                <div class="carousel-caption d-none d-md-block" id="caption">
                    <h2>¿Qué estas esperando? <br> ¡Tu nuevo look espera por ti!</h2>
                    <button type="button" class="btn btn-outline-light">Contáctanos</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="col col-lg-12 text-center " id="section_2" style="float: left;"><br><br><br><br><br>
        <h3 class="text-center" id="title_services">¡ESTOS SON LOS SERVICIOS <br> QUE TENEMOS PARA TI!</h3><br><br>
        <a href="#" id="s1" class="col col-lg-2 col-md-2 col-sm-2 shadow m-1">
            <p class="name_service"><b class="">Cortes</b></p>
        </a>
        <a href="#" id="s2" class="col col-lg-2 col-md-2 col-sm-2 shadow m-1">
            <p class="name_service"><b class="">Peinados</b></p>
        </a>
        <a href="#" id="s3" class="col col-lg-2 col-md-2 col-sm-2 shadow m-1">
            <p class="name_service"><b class="">Alisados</b></p>
        </a>
        <a href="#" id="s4" class="col col-lg-2 col-md-2 col-sm-2 shadow m-1">
            <p class="name_service"><b class="">Tratamientos</b></p>
        </a>
        <br><br><br>
        <h4 class="text-center">¡Si necesitas un servicio especial, contáctanos! </h4>
        <button type="button" class="btn btn-outline-dark">Contáctanos</button>
        <br><br><br><br><br>
    </div>

    <div class="col col-lg-12 text-center" id="section_3" style="float: left;">
        <div class="col col-lg-6 text-center" style="float: left;"></div>
        <div class="col col-lg-5 text-center" style="float: left;"><br><br><br><br><br><br>
            <img src="img/calendario.png" width="200px"><br><br>
            <h1>¡AGENDÁ TU TURNO <br> AHORA MISMO!</h1><br>
            <button type="button" class="btn btn-outline-light">AGENDAR TURNO</button>
            <br><br><br><br><br>
        </div>
    </div>

    <div id="section_4" style="float: left;" class="col col-lg-12 text-center ">
        <div class="col col-lg-1 text-center" style="float: left;"></div>
        <div class="col col-lg-5 text-center" style="float: left;"><br><br><br><br><br><br><br>
            <h1>¿Quiénes Somos?</h1><br>
            <p>¡Hola, Mi nombre es Paula! <BR> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book.</p><br>
            <button type="button" class="btn btn-outline-dark">AGENDAR AHORA</button>
        </div>
        <div class="col col-lg-1 text-center" style="float: left;"></div>
        <div class="col col-lg-4 text-center" style="float: left;"><br><br><br><br><br><br>
        <img src="img/foto.png" style="border-radius: 50%; width: 360px; height:360px;" class="drop">
        <br><br><br><br><br>
        </div>
    </div>

    <div id="section_5" class="col col-lg-12 text-center " style="float: left;"><br><br><br><br><br>
        <div class="col col-lg-3 text-center p-2 rounded shadow" id="promo3" style="float: left;">
            <h3 class="text-center mt-2" id="h3_1">Dejanos tu Consulta</h3>
            <form action="#" method="POST">
                <input class="form-control mt-2" name="nombre" id="nombre" type="text" placeholder="Ingresá tu nombre">
                <input class="form-control mt-2" name="email" id="email" type="text" placeholder="Ingresá tu email">
                <input class="form-control mt-2" name="telefono" id="telefono" type="text"
                    placeholder="Ingresá tu teléfono">
                <textarea class="form-control mt-2" name="texto" id="texto" cols="40" rows="3"
                    placeholder="Ingresá tus dudas"></textarea>
                <button type="submit" class="btn btn-outline-light mt-2">ENVIAR</button>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>