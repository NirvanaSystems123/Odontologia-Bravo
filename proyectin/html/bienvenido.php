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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header__overlay"></div>
        <div class="header__item__container">
            <img class="header__img" src="../imagenes/logo.jpg" alt="Logo de Odontología Bravo">
            <h1>ODONTOLOGÍA BRAVO</h1>
            <h2 class="header__subtitle">Nuestro mayor objetivo es brindarte la mejor sonrisa</h2>
        </div>
    </header>
    <nav class="nav">
        <div class="nav-content">
            <a href="bienvenido.php" class="nav__logo-link">
                <img class="nav__logo" src="../imagenes/logo.jpg" alt="Logo de Odontología Bravo">
            </a>
            <button class="nav__toggle" aria-label="Abrir menú">
                <span class="nav__toggle-icon material-symbols-outlined">menu</span>
            </button>
            <ul class="nav__ul" id="nav-menu">
                <li class="nav__item"><a href="bienvenido.php" class="nav__link">INICIO</a></li>
                <li class="nav__item"><a href="servicios.php" class="nav__link">SERVICIOS</a></li>
                <li class="nav__item"><a href="contacto.php" class="nav__link">NOSOTROS</a></li>
                <li class="nav__item"><a href="../citas/index.php" class="nav__link nav__link__reserva">RESERVA TU CITA AQUÍ</a></li>
                <li class="nav__item nav__item__name">ODONTOLOGÍA BRAVO</li>
                <li class="nav__item"><a class="nav__link nav__link__reserva" href="../php/cerrar_sesion.php">Cerrar la sesión</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <section class="main__images">
            <img src="https://img.freepik.com/fotos-premium/retrato-feliz-mujer-paciente-cerca-dentista-clinica_23-2147862055.jpg?w=740" alt="Paciente feliz con su dentista">
            <img src="https://img.freepik.com/fotos-premium/hombre-mujer-felices-jovenes-examen-dental-dentista_75922-317.jpg?w=740" alt="Pareja feliz en una consulta dental">
            <img src="https://img.freepik.com/fotos-premium/mujer-esta-sonriendo-dientes-blancos-sanos-mientras-esta-sentada-silla-dental-medico-dentista-paciente-feliz_8119-2295.jpg?w=740" alt="Mujer feliz mostrando sus dientes sanos">
        </section>

        <section class="info-section">
            <article class="info-card">
                <h2><a href="../citas/index.php" class="info-link">RESERVA YA</a></h2>
                <p>Nuestra Clínica Dental está equipada con tecnología de última generación y ofrece todos los servicios necesarios.</p>
            </article>
            <aside class="info-card">
                <p>Nos encontramos en una ubicación privilegiada en la ciudad de La Paz, en la calle Buenos Aires, esquina Max Paredes.</p>
            </aside>
        </section>

        <section class="experience-section">
            <div class="experience-content">
                <h1>Más de 50 años de experiencia que respaldan nuestra calidad y confianza.</h1>
                <div class="service-details">
                    <div class="service-item">
                        <h2 class="subtitle">Centro de rayos X</h2>
                        <p>Nuestra clínica está equipada con una de las tecnologías de Rayos X más moderna en La Paz.</p>
                    </div>
                    <div class="service-item">
                        <h2 class="subtitle">Laboratorio de cerámica dental</h2>
                        <p>Ten por seguro que contamos con el laboratorio de cerámica dental más innovador en La Paz.</p>
                    </div>
                </div>
            </div>
            <div class="experience-images">
                <div class="box__1"></div>
                <div class="box__2"></div>
            </div>
        </section>

        <div class="parallax-section">
            <div class="parallax-overlay"></div>
        </div>

        <section class="info-section">
            <article class="info-card">
                <h2><a href="../citas/index.php" class="info-link">RESERVA YA</a></h2>
                <p><h1>NUESTROS SERVICIOS</h1></p>
            </article>
            <aside class="info-card">
                <p>En la Clínica Odontológica Bravo, dedicamos el tiempo necesario para explicarte en detalle tu diagnóstico dental y las diversas opciones de tratamiento. Reserva tu consulta gratuita para La Paz.</p>
            </aside>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <p>&copy; 2025 Odontología Bravo. Todos los derechos reservados.</p>
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
                <a href="https://www.facebook.com/christopher.perezsotomayor/" class="social-media-icon" target="_blank"><img src="https://i.pinimg.com/originals/70/b9/3a/70b93af70f637f2d8a2dec42bfcf23f8.jpg" alt="Facebook"></a>
                <a href="https://x.com/Christo40252829" class="social-media-icon" target="_blank"><img src="https://i.pinimg.com/originals/0f/55/fd/0f55fd636ee2cc6063bc4051f8c61625.jpg" alt="Twitter"></a>
                <a href="https://www.instagram.com/christopherperezsotomayor05?igsh=MWQ3Y3dmc3NwemNvNg==" class="social-media-icon" target="_blank"><img src="https://i.pinimg.com/originals/1e/d9/a0/1ed9a0fd507968861891b1098f480f4a.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
    <script>
        const navToggle = document.querySelector('.nav__toggle');
        const navMenu = document.getElementById('nav-menu');

        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('nav__menu--open');
        });
    </script>
</body>
</html>