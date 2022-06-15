
<?php $__env->startSection('head'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
    <link rel="stylesheet" href="<?php echo e(url('css/reservations.css')); ?>">
    <script src="<?php echo e(url('js/reservations.js')); ?>" defer> </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('benvenuto'); ?>
<a href="<?php echo e(route('booking')); ?>">Prenota una camera</a>
<a href="<?php echo e(route('servizi')); ?>">I nostri servizi</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <section id="prima">
        </section>
        <div class="button-container">
            <button>Cancella le tue prenotazioni </button>
        </div>
        <section id="seconda">
            <div class="preferiti"> I tuoi preferiti </div>
          <div class="container"></div>
          <div class="button-container">
          <button>Cancella i tuoi preferiti </button>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main_pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\feder\XAMPP\htdocs\hw2\resources\views/reservations.blade.php ENDPATH**/ ?>