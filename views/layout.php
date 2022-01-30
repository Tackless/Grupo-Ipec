<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Ipec</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Open+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header bg-primary d-flex flex-column flex-md-row justify-content-between">
        <div class="d-flex flex-column flex-md-row align-items-center">
            <a href="/"><img class="logo m-md-1 text-center" src="build/img/logo.webp" alt="Logo Ipec"></a>
            <h1 class="m-0 text-white text-center">Ipec</h1>
        </div>
        <nav class="mx-1 d-md-flex align-items-md-center">
            <a class="btn btn-info text-white text-decoration-none m-1 p-1 d-block" href="/">Inicio</a>
            <a class="btn btn-info text-white text-decoration-none m-1 p-1 d-block" href="/cita">Agendar Cita</a>
            <a class="btn btn-info text-white text-decoration-none m-1 p-1 d-block" href="/">Iniciar Sesión</a>
        </nav>
    </header>

    <?php echo $contenido; ?>
    <?php echo $script ?? ''; ?>

    <footer>
    <div class="bg-primary">
        <div class="navbar navbar-expand-lg container navbar-light">
            <nav class="navbar-nav container d-flex flex-md-row justify-content-md-around text-center">
                <a class="btn btn-info text-white text-decoration-none my-1 fs-5" href="/">Inicio</a>
                <a class="btn btn-info text-white text-decoration-none my-1 fs-5" href="/cita">Agendar Cita</a>
                <a class="btn btn-info text-white text-decoration-none my-1 fs-5" href="/">Iniciar Sesión</a>
            </nav>
        </div>
        <p class="text-center text-white mb-0">Todos los Derechos Reservados | Donovan Eliosa <?php echo date('Y'); ?> &copy;</p>
    </div>
    </footer>

    <script src="/build/js/bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>