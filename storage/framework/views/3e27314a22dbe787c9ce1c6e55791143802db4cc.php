<!DOCTYPE html>
<html>
    <head>
        <?php $__env->startSection('head'); ?>
        <script>
            const BASE_URL = "<?php echo e(url('/')); ?>/";
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@700&display=swap" rel="stylesheet">
        <?php echo $__env->yieldSection(); ?>
    </head>
    <body>
    <header>
            <nav>
                <div class="sinistra"><a href="<?php echo e(route('home')); ?>">Vaine </a></div>
                <div class="links">
                <?php $__env->startSection('benvenuto'); ?> <?php echo $__env->yieldSection(); ?>
                <a href="<?php echo e(route('reservations')); ?>">Le tue prenotazioni</a>
                <a href= "<?php echo e(route('logout')); ?>">Logout</a>
                </div>
                </nav>
        </header>
        <?php echo $__env->yieldContent('content'); ?>
        <footer>
        <span class="sinistra"><a href="<?php echo e(route('home')); ?>">Vaine </a></span>
                <div class="links">
                <?php $__env->startSection('footer'); ?> <?php echo $__env->yieldSection(); ?>
                <a href="<?php echo e(route('reservations')); ?>">Le tue prenotazioni</a>
                <a href="<?php echo e(route('logout')); ?>">Logout</a>
            </div>
        </footer>
    </body>
</html>


<?php /**PATH C:\Users\feder\XAMPP\htdocs\hw2\resources\views/layouts/main_pages.blade.php ENDPATH**/ ?>