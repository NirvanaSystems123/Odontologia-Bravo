<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOSOTROS</title>
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" />

</head>
<body>
    <header class="header">
        <div class="header__overlay"></div>
        <div class="header__item__container">
            <h1>Nos distinguimos por ser la clínica <br> dental más moderna y completa <br> en la ciudad de La Paz</h1>
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
            </ul>
        </div>
    </nav>
    <main>
        <section class="info-section">
            <div class="main__img__fila">
                <img src="https://i.pinimg.com/564x/c1/15/6b/c1156b11e3e20621718450d4991255f3.jpg" alt="Odontología Bravo">
                <img src="https://img.freepik.com/fotos-premium/mujer-esta-sonriendo-dientes-blancos-sanos-mientras-esta-sentada-silla-dental-medico-dentista-paciente-feliz_8119-2295.jpg?w=740" alt="Mujer feliz en el dentista">
            </div>
            <article class="info-card">
                <h3>Nuestra Historia</h3>
            </article>
            <aside class="info-card">
                <p>Somos la clínica dental más avanzada y completa de las ciudades de La Paz-Bolivia. Ubicados en una de las mejores zonas, ofrecemos ambientes modernos que cubren todas las especialidades y necesidades de la odontología actual, incluyendo un laboratorio dental, quirófanos, centro radiográfico y equipos de última generación en todas las especialidades</p>
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
                <a href="https://www.facebook.com/christopher.perezsotomayor/" class="social-media-icon"><img src="https://i.pinimg.com/originals/70/b9/3a/70b93af70f637f2d8a2dec42bfcf23f8.jpg" alt="Facebook"></a>
                <a href="https://x.com/Christo40252829" class="social-media-icon"><img src="https://i.pinimg.com/originals/0f/55/fd/0f55fd636ee2cc6063bc4051f8c61625.jpg" alt="Twitter"></a>
                <a href="https://www.instagram.com/christopherperezsotomayor05?igsh=MWQ3Y3dmc3NwemNvNg==" class="social-media-icon"><img src="https://i.pinimg.com/originals/1e/d9/a0/1ed9a0fd507968861891b1098f480f4a.png" alt="Instagram"></a>
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