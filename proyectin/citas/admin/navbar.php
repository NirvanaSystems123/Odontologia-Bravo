<nav class="nav">
    <div class="nav-content">
        <a href="../html/bienvenido.php" class="nav__logo-link">
            <img class="nav__logo" src="../imagenes/logo.jpg" alt="Logo de Odontología Bravo">
        </a>
        <button class="nav__toggle" aria-label="Abrir menú">
            <span class="nav__toggle-icon"></span>
        </button>
        <ul class="nav__ul" id="nav-menu">
            <li class="nav__item nav__item__name">Bienvenido, <?php echo $nombreUsuario; ?></li>
            <li class="nav__item"><a href="inicio.php" class="nav__link">INICIO</a></li>
            <li class="nav__item"><a href="soporte.php" class="nav__link">SOPORTE</a></li>
            <li class="nav__item"><a href="../php/cerrar_sesion.php" class="nav__link nav__link__reserva">CERRAR SESIÓN</a></li>
        </ul>
    </div>
</nav>
<script>
    const navToggle = document.querySelector('.nav__toggle');
    const navMenu = document.getElementById('nav-menu');
    
    navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('nav__menu--open');
    });
</script>