<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("Por favor debes iniciar sesión");
    window.location="../index.php";
    </script>
    ';
    session_destroy();
    die();

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odontología Bravo</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header class="header">
        <div class="header__overlay">

        </div>
        <div class="header__item__container">
            <img class="header__img" src="../imagenes/logo.jpg" alt="">
            <h1>ODONTOLOGÍA BRAVO</h1>
            <h2 class="header__subtitle">Nuestro mayor objetivo es brindarte la mejor sonrisa</h2>
        </div>
    </header>
    <nav class="nav">
        <div>
            <ul class="nav__ul">
                <li class="nav__item"><a href="bienvenido.php" class="nav__link">INICIO</a></li>
                <li class="nav__item"><a href="servicios.php" class="nav__link">SERVICIOS</a></li>
                <li class="nav__item"><a href="contacto.php" class="nav__link">NOSOTROS</a></li>
                <li class="nav__item"><a href="../citas/index.php" class="nav__link nav__link__reserva">RESERVA TU CITA AQUÍ</a></li>
                <li class="nav__item nav__item__name">ODONTOLOGÍA BRAVO</li>
                <li class="nav__item"><a class="nav__link nav__link__reserva" href="../php/cerrar_sesion.php">Cerrar la sesión</a></li>
                
                
            </ul>
        </div>
        <div>
            <img class="nav__logo" src="./imagenes/logo.jpg" alt="">
        </div>
        
    </nav>
    <main>
        <div class="main__img__fila">
            <img src="https://img.freepik.com/fotos-premium/retrato-feliz-mujer-paciente-cerca-dentista-clinica_23-2147862055.jpg?w=740" alt="">
            <img src="https://img.freepik.com/fotos-premium/hombre-mujer-felices-jovenes-examen-dental-dentista_75922-317.jpg?w=740" alt="">
            <img id="main__img" src="https://img.freepik.com/fotos-premium/mujer-esta-sonriendo-dientes-blancos-sanos-mientras-esta-sentada-silla-dental-medico-dentista-paciente-feliz_8119-2295.jpg?w=740" alt="">
        </div>


        <!--seccion 1-->


        <section class="section__1">
            <article class="left__section">
                <h2><a href="../citas/index.php" class="section__article__link">RESERVA YA</a></h2>
                <p class="section__article__text">Nuestra Clínica Dental está equipada con tecnología de última generación y ofrece todos los servicios necesarios</p>

            </article>
            <aside class="right__section">
                <p class="right__aside__text">Nos encontramos en una ubicación privilegiada en la ciudad de La Paz, en la calle Buenos Aires, esquina Max Paredes.</p>

            </aside>

        </section>


        <!--seccion 2-->


        <section class="section__2">
            <article class="left__section__2">
                <h1 class="article__section__2">Contamos con más de 50 años de experiencia que respaldan nuestra calidad y confianza.</h1>
                <div class="article__section__2__text">
                    <h2 class="subtitle__article__section__2">Centro de rayos X</h2>
                    <p>
                        Nuestra clínica está equipada con una de las tecnologías de Rayos X más moderna en la ciudades de La Paz
                    </p>
                        

                </div>
                <div class="article__section__2__text">
                    <h2 class="subtitle__article__section__2">Laboratorio de cerámica dental</h2>
                    <p>
                        Ten por seguro de que contamos con el laboratorio de cerámica dental más innovador en La Paz
                    </p>

                </div>

            </article>
            <aside class="right__section__2">

                <div class="box__1"></div>
                <div class="box__2"></div>

            </aside>

        </section>

        <!--seccion 3-->

        <div class="box">
            <div class="opaco"></div>
        </div>

        <!--seccion 3-->

        <section class="section__4">
            <article class="left__section__4">
                <h2><a href="../citas/index.php" class="section__article__link">RESERVA YA</a></h2>
                <p class="section__article__text section__article__text__4"><h1>NUESTROS SERVICIOS</h1></p>

            </article>
            <aside class="right__section__4">
                <p class="right__aside__text right__aside__text__4 ">En la Clínica Odontológica Bravo, dedicamos el tiempo necesario para explicarte en detalle tu diagnóstico dental y las diversas opciones de tratamiento. Reserva tu consulta gratuita para La Paz.</p>

            </aside>

        </section>


    </main>
    <!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-left">
            <p>&copy; 2024 Odontología Bravo. Todos los derechos reservados.</p>
        </div>
        <div class="footer-center">
            <ul>
                <li><a href="bienvenido.php">Inicio</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Sobre Nosotros</a></li>
                <li><a href="../citas/index.php">Reserva</a></li>
            </ul>
        </div>
        <div class="footer-right">
            <p>Síguenos en:</p>
            <a href="https://www.facebook.com/christopher.perezsotomayor/" class="social-media-icon"><img src="https://i.pinimg.com/originals/70/b9/3a/70b93af70f637f2d8a2dec42bfcf23f8.jpg" alt="Facebook"></a>
            <a href="https://x.com/Christo40252829" class="social-media-icon"><img src="https://i.pinimg.com/originals/0f/55/fd/0f55fd636ee2cc6063bc4051f8c61625.jpg" alt="Twitter"></a>
            <a href="https://www.instagram.com/christopherperezsotomayor05?igsh=MWQ3Y3dmc3NwemNvNg==" class="social-media-icon"><img src="https://i.pinimg.com/originals/1e/d9/a0/1ed9a0fd507968861891b1098f480f4a.png" alt="Instagram"></a>
        </div>
    </div>
</footer>

</body>
</html>