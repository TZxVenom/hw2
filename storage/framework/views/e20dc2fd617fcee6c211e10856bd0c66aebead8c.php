
<?php $__env->startSection('head'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
    <link rel="stylesheet" href="<?php echo e(url('css/servizi.css')); ?>">
    <script src="<?php echo e(url('js/servizi.js')); ?>" defer> </script>
    <script> const csrf_token = '<?php echo e(csrf_token()); ?>'; </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('benvenuto'); ?>
<a id="benvenuto"> I nostri servizi </a>
<a href="<?php echo e(route('booking')); ?>">Prenota una camera</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="prima">
          <div class="container"> </div>
            <div class="text_container">
                <div class="contenuto1"> </div>
                <div class="contenuto2"> </div>
            </div>
        </section>
    <section id="seconda">
          <div class="container"> </div>
        <div class="text_container">
            <div class="contenuto1"> </div>
            <div class="contenuto2"> </div>
        </div>
    </section>
    <section id="terza">
              <h3>Inserisci qui la parola chiave 'Alcoholic' o 'Non_Alcoholic' per scoprire i nostri cocktail alcolici e analcolici migliori e scegli il tuo preferito! </h3>
              <form name="form">
              <label> <input type='text' name='search'></label><input id="button" type='submit' value="Cerca" >
              </form>
          <div class="container"></div>
    </section>
    <section id="quarta">
              <h3>Cerca e scegli il tuo piatto preferito! </h3>
              <form id="due" name="form">
              <label> <input type='text' name='search'></label><input id="button_2" type='submit' value="Cerca" >
              </form>
          <div class="container"></div>
          <div class="button-container">
                <input type="submit" value="Invia i tuoi preferiti!" id="submit"> </button>
              </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<a href="<?php echo e(route('booking')); ?>">Prenota una camera</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\feder\XAMPP\htdocs\hw2\resources\views/servizi.blade.php ENDPATH**/ ?>