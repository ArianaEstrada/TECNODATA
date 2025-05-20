<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECNODATOS - Gestión Integral</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Estilos personalizados -->
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: var(--dark-color);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--light-color) !important;
        }
        
        .bg-primary-custom {
            background-color: var(--primary-color) !important;
        }
        
        .btn-primary-custom {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .btn-primary-custom:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background-color: var(--primary-color);
            color: white;
            border-radius: 10px 10px 0 0 !important;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 5rem 0;
            border-radius: 0 0 20px 20px;
        }
        
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 2rem 0;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-laptop-code me-2"></i>TECNODATOS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link">Cerrar sesión</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección Hero -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Solución Integral para TECNODATOS</h1>
            <p class="lead mb-5">Optimiza la gestión de clientes, productos, empleados y ventas con nuestro sistema robusto y seguro</p>
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-light btn-lg px-4 me-2">
                    <i class="fas fa-tachometer-alt me-2"></i>Ir al Dashboard
                </a>
            @else
                <a href="{{ route('register') }}" class="btn btn-light btn-lg px-4 me-2">
                    <i class="fas fa-user-plus me-2"></i>Regístrate Gratis
                </a>
                <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-4">
                    <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
                </a>
            @endauth
        </div>
    </section>

    <!-- Sección de Problema -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold mb-3">Problemática Actual</h2>
                    <p class="lead text-muted">TECNODATOS enfrenta desafíos en la gestión de su información debido a sistemas desorganizados y poco integrados.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <h5 class="card-title">Información Desorganizada</h5>
                            <p class="card-text">Datos de clientes, productos y empleados dispersos en múltiples sistemas.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <h5 class="card-title">Errores en Facturación</h5>
                            <p class="card-text">Procesos manuales que generan inconsistencias en la facturación.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h5 class="card-title">Retrasos en Soporte</h5>
                            <p class="card-text">Falta de integración causa demoras en la atención al cliente.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h5 class="card-title">Baja Eficiencia</h5>
                            <p class="card-text">Procesos ineficientes que afectan la productividad general.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Solución -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Nuestra Solución</h2>
                    <p class="lead mb-4">Implementamos un sistema de gestión de base de datos robusto y bien estructurado que integra toda la información de la empresa.</p>
                    
                    <div class="d-flex mb-3">
                        <div class="me-4">
                            <i class="fas fa-check-circle text-success fa-2x"></i>
                        </div>
                        <div>
                            <h5>Modelo Entidad-Relación Optimizado</h5>
                            <p class="text-muted">Diseñado específicamente para los procesos clave de TECNODATOS.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="me-4">
                            <i class="fas fa-check-circle text-success fa-2x"></i>
                        </div>
                        <div>
                            <h5>Base de Datos Normalizada (3FN)</h5>
                            <p class="text-muted">Estructura eficiente que integra clientes, productos, empleados y ventas.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="me-4">
                            <i class="fas fa-check-circle text-success fa-2x"></i>
                        </div>
                        <div>
                            <h5>Seguridad y Control de Acceso</h5>
                            <p class="text-muted">Roles de usuario y vistas materializadas para proteger la información.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card border-0 shadow">
                        <div class="card-header bg-primary-custom text-white">
                            <h4 class="mb-0">Beneficios Clave</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h5><i class="fas fa-bolt text-warning me-2"></i> Mayor Eficiencia Operativa</h5>
                                <p class="text-muted">Procesos automatizados que reducen tiempos y errores.</p>
                            </div>
                            
                            <div class="mb-3">
                                <h5><i class="fas fa-lock text-success me-2"></i> Seguridad de Datos</h5>
                                <p class="text-muted">Protección de información sensible con mecanismos avanzados.</p>
                            </div>
                            
                            <div class="mb-3">
                                <h5><i class="fas fa-chart-pie text-info me-2"></i> Mejor Toma de Decisiones</h5>
                                <p class="text-muted">Reportes integrados para análisis estratégico.</p>
                            </div>
                            
                            <div class="mb-3">
                                <h5><i class="fas fa-users text-secondary me-2"></i> Experiencia del Cliente</h5>
                                <p class="text-muted">Soporte técnico más rápido y preciso.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Módulos -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold mb-3">Módulos Principales</h2>
                    <p class="lead text-muted">Sistema completo que cubre todas las necesidades de TECNODATOS</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="card-title">Gestión de Clientes</h4>
                            <p class="card-text">Registro completo de clientes, historial de compras y preferencias.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-success me-2"></i> Perfiles detallados</li>
                                <li><i class="fas fa-check text-success me-2"></i> Seguimiento de interacciones</li>
                                <li><i class="fas fa-check text-success me-2"></i> Segmentación avanzada</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <h4 class="card-title">Gestión de Productos</h4>
                            <p class="card-text">Catálogo completo de software educativo con control de inventario.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-success me-2"></i> Categorización inteligente</li>
                                <li><i class="fas fa-check text-success me-2"></i> Control de versiones</li>
                                <li><i class="fas fa-check text-success me-2"></i> Gestión de licencias</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4 class="card-title">Gestión de Empleados</h4>
                            <p class="card-text">Administración del personal con roles y permisos específicos.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-success me-2"></i> Control de acceso</li>
                                <li><i class="fas fa-check text-success me-2"></i> Evaluación de desempeño</li>
                                <li><i class="fas fa-check text-success me-2"></i> Capacitaciones</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h4 class="card-title">Ventas y Facturación</h4>
                            <p class="card-text">Proceso completo de venta con facturación electrónica integrada.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-success me-2"></i> Carrito de compras</li>
                                <li><i class="fas fa-check text-success me-2"></i> Métodos de pago</li>
                                <li><i class="fas fa-check text-success me-2"></i> Historial de transacciones</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h4 class="card-title">Soporte Técnico</h4>
                            <p class="card-text">Sistema de tickets para atención eficiente de solicitudes.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-success me-2"></i> Priorización automática</li>
                                <li><i class="fas fa-check text-success me-2"></i> Base de conocimiento</li>
                                <li><i class="fas fa-check text-success me-2"></i> Seguimiento en tiempo real</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <h4 class="card-title">Reportes y Analytics</h4>
                            <p class="card-text">Dashboard interactivo con métricas clave del negocio.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-success me-2"></i> Ventas por período</li>
                                <li><i class="fas fa-check text-success me-2"></i> Desempeño de productos</li>
                                <li><i class="fas fa-check text-success me-2"></i> Eficiencia de soporte</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección CTA -->
    <section class="py-5 bg-primary-custom text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-4">¿Listo para transformar tu gestión empresarial?</h2>
            <p class="lead mb-5">Implementa el sistema que resolverá los problemas de organización y eficiencia en TECNODATOS</p>
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-light btn-lg px-4 me-2">
                    <i class="fas fa-tachometer-alt me-2"></i>Ir al Dashboard
                </a>
            @else
                <a href="{{ route('register') }}" class="btn btn-light btn-lg px-4 me-2">
                    <i class="fas fa-rocket me-2"></i>Comienza Ahora
                </a>
                <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-4">
                    <i class="fas fa-sign-in-alt me-2"></i>Acceso Usuarios
                </a>
            @endauth
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5><i class="fas fa-laptop-code me-2"></i>TECNODATOS</h5>
                    <p class="small">Sistema de Gestión Integral desarrollado para optimizar los procesos comerciales, operativos y de soporte.</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5>Módulos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Clientes</a></li>
                        <li><a href="#" class="text-white">Productos</a></li>
                        <li><a href="#" class="text-white">Empleados</a></li>
                        <li><a href="#" class="text-white">Ventas</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5>Recursos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Documentación</a></li>
                        <li><a href="#" class="text-white">Soporte</a></li>
                        <li><a href="#" class="text-white">API</a></li>
                        <li><a href="#" class="text-white">Estado</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-envelope me-2"></i> soporte@tecnodatos.com</li>
                        <li><i class="fas fa-phone me-2"></i> +1 234 567 890</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Ciudad, País</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small mb-0">© 2023 TECNODATOS. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>