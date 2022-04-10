<div class="border bg-light">
    <div class="navbar navbar-expand-lg container navbar-light justify-content-center">
        <button aria-label="abrir navegación" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navegacion2">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navegacion2" class="collapse navbar-collapse">
            <nav class="navbar-nav container d-flex flex-lg-row justify-content-lg-between text-center">
                <?php if (isset($_SESSION['login'])) {?>
                    <p class="text-dark my-1 my-md-0">Hola: <?php echo $_SESSION['nombre'] ?? ''; ?></p>
                    <a class="nav-link text-dark my-1 my-md-0" href="/">Inicio</a>
                    <?php switch ($_SESSION['rol']) {
                        
                        case '1':
                            echo('<a class="nav-link text-dark my-1 my-md-0" href="/gestion">Ver Gestión</a>');
                            echo('<a class="nav-link text-dark my-1 my-md-0" href="/citas">Ver Citas</a>');
                            break;
                        case '2':
                            echo('<a class="nav-link text-dark my-1 my-md-0" href="/gestion">Ver Gestión</a>');
                            break;
                        case '3':
                            echo('<a class="nav-link text-dark my-1 my-md-0" href="/citas">Ver Citas</a>');
                            break;
                        default: ?>
                            <a class="nav-link text-dark my-1 my-md-0" href="/alumnos/informacion?matricula=<?php echo $_SESSION['matricula'] ?>">Información</a>
                            <?php break;
                    } ?>
                    <a class="nav-link text-dark my-1 my-md-0" href="/logout">Cerrar Sesión</a>
                    
                <?php } else { ?>
                    <a class="nav-link text-dark my-1 my-md-0" href="/">Inicio</a>
                    <a class="nav-link text-dark my-1 my-md-0" href="/licenciaturas">Licenciaturas</a>
                    <a class="nav-link text-dark my-1 my-md-0" href="/bachillerato-modalidades">Bachillerato</a>
                    <a class="nav-link text-dark my-1 my-md-0" href="/certificaciones">Certificaciones</a>
                    <a class="nav-link text-dark my-1 my-md-0" href="/agendar-cita">Agendar Cita</a>
                    <a class="nav-link text-dark my-1 my-md-0" href="/iniciar-sesion">Iniciar Sesión</a>
                <?php } ?>
            </nav>
        </div>
    </div>
</div>