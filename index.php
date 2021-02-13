<?php
    require "shared/header.php";
?>

<header class="header-container position-relative">
    <nav class="main-nav navbar navbar-expand-md navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="css/img/img-logo-light.svg" height="60px" alt="img-logo-hidronaval">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="sesion btn rounded-3">Iniciar Sesion</a>
                    </li>
                </ul>
            </div>
        </div><!--FIN DIV CONTAINER-->
    </nav>
    <div class="container h-80">
        <div class="row align-items-center h-80">
            <div class="col-sm-12 col-md-6 text-center text-md-start">
                <h1>Cursos de <br>Oleohidraulica Naval</h1>
                <p class="d-none d-md-block">Hemos diseñado cursos de Oleohidráulica. Si quieres conocer más sobre Olehidráulica, te ofrecemos una
                    Introducción <b>GRATIS</b>.</p>
                <form>
                    <div class="input-group mb-3">
                        <!--<label class="visually-hidden" for="email">email</label> Label asociado al input pero al habilitarlo quita el borde redondeado de la izquierda-->
                        <input type="email" name="email" class="email-info form-control" placeholder="Introduce tu correo electronico" aria-describedby="box-send">
                        <span class="input-group-text" id="box-send">
                            <input class="send-email" type="submit" value="Solicitar Curso">
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<!-----------------------------CARDS COLLECTION----------------------------->
<section class="hidro-cards position-absolute w-100">
    <div class="container d-flex justify-content-center">
        <div class="card">
            <img src="css\img\instructor-capacitado-card.svg" alt="instructor-img">
            <div class="card-body">
                <h5 class="card-title">Instructor capacitado</h5>
                <p class="card-text">Instruido por un experto con mas de 25 años de experiencia en el área.</p>
            </div>
        </div>
        <div class="card">
            <img src="css\img\certificacion-card.svg" alt="certificacion-img">
            <div class="card-body">
                <h5 class="card-title">Certificación</h5>
                <p class="card-text">Certificado de finalización avalado por SAON y SICONARA.</p>
            </div>
        </div>
        <div class="card">
            <img src="css\img\modalidad-online-card.svg" alt="instructor-img">
            <div class="card-body">
                <h5 class="card-title">Modalidad online</h5>
                <p class="card-text">Clases en vivo via Zoom y grabacion de las mismas.</p>
            </div>
        </div>
        <div class="card">
            <img src="css\img\material-didactico-card.svg" alt="instructor-img">
            <div class="card-body">
                <h5 class="card-title">Material didáctico</h5>
                <p class="card-text">Multiples ejercicios y prácticas. También se podran descargar.</p>
            </div>
        </div>
    </div>
</section>
<main>

<!-----------------------------NOSOTROS----------------------------->
    <div class="container">

        <?php
        include_once './sections/index-sections/nosotros.php';
        ?>

    </div>
<!-----------------------------TABS CONTENIDOS----------------------------->
    <?php
    include_once './sections/index-sections/tab-information.php';
    ?>

<!-----------------------------INSTRUCTOR----------------------------->
    <?php
    include_once './sections/index-sections/instructor.php';
    ?>

<!-----------------------------PRICING----------------------------->
    <?php
    include_once './sections/index-sections/princing.php';
    ?>

<!-----------------------------TESTIMONIOS----------------------------->
    <?php
    include_once './sections/index-sections/testimonios.php';
    ?>

<!-----------------------------CONTACTO----------------------------->

    <?php
    include_once './sections/index-sections/contacto.php';
    ?>

</main>
<!-----------------------------FOOTER----------------------------->
<?php
require "shared/footer.php";
