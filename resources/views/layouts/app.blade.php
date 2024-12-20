<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <!-- Bootstrap 5 CSS (más moderno, no depende de jQuery ni Popper.js) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts (para un diseño más estilizado) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Iconos de FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            margin-top: 30px !important;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: rgb(0, 0, 0);
            color: #ffffff;
        }
        /* Navbar */
        .navbar {
            background-color: #ff2d20;
            justify-content: center !important;
        }

        .navbar-brand, .nav-link {
            color: #ffffff !important;

        }
        .navbar-brand:hover, .nav-link:hover {
            color: #000000 !important;
        }
        /* Contenedor principal */
        .container {
            margin-top: 50px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-width: 5px;
        }
        .card-header {
            background-color: #ff2d20;
            color: white;
            font-size: 1.25rem;
        }
        .card-body {
            background-color: rgb(39 39 42);
            padding: 30px;

            .container {
                margin-top: 0;
            }
        }
        .footer {
            background-color: #ff2d20;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .btn-primary {
            background-color: #ff2d20;
            border-color: #ff2d20;
        }
        .btn-primary:hover {
            background-color: #bf281d;
            border-color: #bf281d;
        }

        .table {
            color: white;
        }

        .header-nav {
            margin: 25px 10px;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-primary {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .btn-editar {
            background-color: #17bd3f;
            border-color: #17bd3f;
        }

        .btn-editar:hover {
            background-color: #16aa3a;
            border-color: #16aa3a;
        }

        .btn-eliminar {
            background-color: #ff2d20;
            border-color: #ff2d20;
        }

        .btn-eliminar:hover {
            background-color: #bf281d;
            border-color: #bf281d;
        }

        .btn-mostrar {
            background-color: #209bff;
            border-color: #209bff;
        }

        .btn-mostrar:hover {
            background-color: #1a7ac6;
            border-color: #1a7ac6;
        }

        .alert-success {
            padding-bottom: 0;
        }

        .btn-afegir {
            margin: 0;
        }

        .container-btn {
            height: 75px;
        }

        .nav-item {
            display: flex;
        }

        @media (max-width: 992px) {
            .nav-item {
                flex-direction: column;
                align-items: center;
            }
        }

    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var alert = document.querySelector('.alert-success');
                if (alert) {
                    alert.style.transition = 'opacity 0.3s ease';
                    alert.style.opacity = '0';
                    setTimeout(function() {
                        alert.remove();
                    }, 500);
                }
            }, 5000);
        });
    </script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container header-nav">
        <a class="navbar-brand" href="{{ url('/') }}">Laravel CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('peliculas.index') }}">  <i class="fas fa-film"></i> Pel·lícules</a>
                    <a class="nav-link" href="{{ route('motos.index') }}"><i class="fas fa-motorcycle"></i> Motos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container main-content">
    <div class="row">
        <div class="col-md-12">
            <!-- Card for main content -->
            <div class="card mb-4">
                <div class="card-header">
                    @if (Request::is('peliculas*'))
                        <i class="fas fa-film"></i> Pel·lícules
                    @elseif (Request::is('motos*'))
                        <i class="fas fa-motorcycle"></i> Motos
                    @endif
                </div>
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; {{ date('Y') }} Pol Tordera Gil. All rights reserved.</p>
</div>

<!-- Bootstrap 5 JS (con soporte para Popper.js integrado) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
