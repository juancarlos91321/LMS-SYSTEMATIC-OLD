<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursus</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        :root {
            --cursus-red: #e74c3c;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        .sidebar {
            background: #f8f9fa;
            min-height: 100vh;
        }

        .nav-link.active,
        .nav-link:hover {
            background-color: #fff0f0;
            color: var(--cursus-red);
            font-weight: 600;
        }

        .course-card {
            transition: 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

<!-- ✅ HEADER -->
<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm fixed-top">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold" href="#">Cursus</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <form class="d-flex mx-auto w-50">
                <input class="form-control" placeholder="Buscar...">
            </form>

            <div class="d-flex gap-3">
                <i class="fa fa-bell"></i>
                <i class="fa fa-user-circle"></i>
            </div>
        </div>
    </div>
</nav>

<!-- ✅ BODY -->
<div class="container-fluid" style="padding-top: 80px;">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-lg-2 d-none d-lg-block sidebar p-3">
            <ul class="nav flex-column">
                <li><a href="#" class="nav-link active">🏠 Home</a></li>
                <li><a href="#" class="nav-link">📺 Live</a></li>
                <li><a href="#" class="nav-link">🧭 Explore</a></li>
                <li><a href="#" class="nav-link">❤️ Saved</a></li>
            </ul>
        </div>

        <!-- CONTENIDO -->
        <div class="col-12 col-lg-8 p-4">
            @yield('content')
        </div>

        <!-- SIDEBAR DERECHO -->
        <div class="col-lg-2 d-none d-lg-block p-3 border-start">
            <h6>Perfil</h6>
            <p class="text-muted">Usuario demo</p>
        </div>

    </div>
</div>

<!-- ✅ FOOTER REAL -->
<footer class="bg-dark text-white text-center py-3 mt-4">
    <p class="mb-0">© 2026 Cursus - Todos los derechos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>