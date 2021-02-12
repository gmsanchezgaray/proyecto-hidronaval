<?php
    require "shared/header.php";
?>

<header class="header-container position-relative">
        <nav class="main-nav navbar navbar-expand-md">
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
        </nav>

    <div class="info-header col-sm-12 col-md-6 col-lg-4 d-flex flex-column justify-content-center">
        <h1 class="mb-4">Cursos de Oleohidraulica Naval</h1>
        <p class="mb-4">Hemos diseñado cursos de Oleohidráulica. Si quieres conocer más sobre Olehidráulica, te ofrecemos una
            Introducción <b>GRATIS</b>.</p>
            <form>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="email-info form-control" placeholder="Introduce tu correo electronico" aria-describedby="box-send">
                    <span class="input-group-text" id="box-send">
                        <input class="send-email" type="submit" value="Solicitar Curso">
                    </span>
                </div>
            </form>
    </div>
</header>

<section class="hidro-cards d-flex justify-content-center position-absolute w-100">

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
</section>

<main>
    <section class="nosotros d-flex justify-content-evenly">
        <div class="img-info-instituto col-md-5">
            <img src="css\img\img-estudios.png" alt="img-estudios">
        </div>

        <div class="info-instituto col-md-6">
            <div class="info-container position-relative">
                <span class="data-instituto-decorator mb-3">NOSOTROS</span>
                <h3 class="mb-4">Hidronaval es una institucion de capacitacion.</h3>
                <h4 class="mb-4">Técnicos que capacitan a mas técnicos</h4>
                <p class="mb-4">Hidronaval  te ofrece una formación de calidad vía e-learning. Los programas de perfeccionamiento profesional están en crecimiento, debido al respaldo a los trabajadores para que aumenten su capacitación y se adapten a los nuevos requerimientos productivos. </p>
                <a href="#" class="btn">Ver cursos</a>
            </div>
        </div>
    </section>
</main>

<?php
require "shared/footer.php";
