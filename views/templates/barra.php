<nav class="nav d-flex flex-column flex-md-row align-items-center justify-content-evenly border bg-light py-1">
    <?php if (isset($_SESSION['login'])) {?>
        <p class="text-dark mb-0">Hola: <?php echo $_SESSION['nombre'] ?? ''; ?></p>
        <a class="nav-link text-dark" href="/">Inicio</a>
        <a class="nav-link text-dark" href="/citas">Ver Citas</a>
        <a class="nav-link text-dark" href="/logout">Cerrar Sesión</a>
        
    <?php } else { ?>
        <a class="nav-link text-dark" href="/">Inicio</a>
        <a class="nav-link text-dark" href="/cita">Agendar Cita</a>
        <a class="nav-link text-dark" href="/iniciar-sesion">Iniciar Sesión</a>
    <?php } ?>
</nav>