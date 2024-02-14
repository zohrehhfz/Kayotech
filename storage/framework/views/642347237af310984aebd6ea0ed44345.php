<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"]); ?>
    <?php if (!isset($__inertiaSsrDispatched)) { $__inertiaSsrDispatched = true; $__inertiaSsrResponse = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->head; } ?>

    <nav class="navbar">
        <div class="navbar-left">
            <span class="navbar-brand">KayoTech</span>
        </div>
        <div class="navbar-right">
            <router-link to="/login" class="navbar-link">Login</router-link>
            <router-link to="/register" class="navbar-link">Register</router-link>
        </div>
    </nav>
    <style>
    .navbar {
        background-color: #fca503;
        color: black;
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }

    .navbar-left {
        display: flex;
        align-items: center;
    }

    .navbar-right {
        display: flex;
        align-items: center;
    }

    .navbar-brand {
        font-size: 20px;
        font-weight: bold;
        margin-right: 10px;
    }

    .navbar-link {
        color: black;
        margin-left: 10px;
        text-decoration: none;
    }
    </style>
</head>

<body class="font-sans antialiased">
    <?php if (!isset($__inertiaSsrDispatched)) { $__inertiaSsrDispatched = true; $__inertiaSsrResponse = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->body; } else { ?>
    <div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div><?php } ?>
</body>

</html>
<?php /**PATH D:\CayoTech\resources\views/app.blade.php ENDPATH**/ ?>