<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Respira & Sigue - Salud Mental'); ?></title>
    <!-- Estilos CSS opcionales o Bootstrap/Tailwind CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <!-- Menú de Navegación usando Rutas Nombradas -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo e(route('home')); ?>">MindSpace</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('recursos')); ?>">Recursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contacto')); ?>">Contacto y Ayuda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido Dinámico de cada página -->
    <main class="container my-5">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Pie de Página -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; <?php echo e(date('Y')); ?> MindSpace - Tu espacio seguro para la salud mental.</p>
    </footer>

</body>
</html><?php /**PATH C:\Users\Aprendiz\Downloads\LaravelPortable\projects\resysigue\resources\views/layouts/app.blade.php ENDPATH**/ ?>