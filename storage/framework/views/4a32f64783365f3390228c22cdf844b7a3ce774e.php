
<?php $__env->startSection('head'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
    <link rel="stylesheet" href="<?php echo e(url('css/home.css')); ?>">
    <script src="<?php echo e(url('js/home.js')); ?>" defer> </script>
    <script> const BOOKING_URL = "<?php echo e(route('booking')); ?>"; </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('benvenuto'); ?>
<a id="benvenuto"> Benvenuto <?php echo e($username); ?>! </a>
<a href="<?php echo e(route('servizi')); ?>"> I nostri servizi </a>
<a href="<?php echo e(route('booking')); ?>">Prenota una camera</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section id="prima">
            <div> </div>
            <div class="container"></div>
        </section>
        <section id="seconda">
            <div class="container">
                <div class="contenuto"> </div>
            </div>
        </section>
        <section id="terza">
            <div class="container_reversed">
                <div class="contenuto"> </div> 
            </div>
        </section>
        <section id="quarta">
            <div class="container">
                <div class="contenuto"> </div>
            </div>
        </section>
        <section id="quinta">
            <div class="button-container">
                <button type="button">Scopri le nostre camere! </button>
            </div>
            <div class="container"></div>
            <div class="text_container"> <div class="contenuto1"> </div>  <div class="contenuto2"> </div> </div>
            <div class="container2"></div>
            <div class="text_container2"> <div class="contenuto1"> </div>  <div class="contenuto2"> </div> </div>
        </section>
        <div id="overlay"> </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<a href="<?php echo e(route('servizi')); ?>"> I nostri servizi </a>
<a href="<?php echo e(route('booking')); ?>">Prenota una camera</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main_pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\feder\XAMPP\htdocs\hw2\resources\views/home.blade.php ENDPATH**/ ?>