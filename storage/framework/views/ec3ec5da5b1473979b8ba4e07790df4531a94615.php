<?php $__env->startSection('content'); ?>
    <br>
<div class="row">
    <div class="small-6 small-centered columns shipping">
        <h3 class="title-tag">Information pour la livraison</h3>

        <?php echo Form::open(['route' => 'address.store', 'method' => 'post']); ?>


        <div class="form-group">
            <?php echo e(Form::label('addressline', 'Address compléte')); ?>

            <?php echo e(Form::text('addressline', null, array('class' => 'form-control'))); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('city', 'Ville')); ?>

            <?php echo e(Form::text('city', null, array('class' => 'form-control'))); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('zip', 'Code Postal')); ?>

            <?php echo e(Form::text('zip', null, array('class' => 'form-control'))); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('country', 'Pays')); ?>

            <?php echo e(Form::text('country', null, array('class' => 'form-control'))); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('phone', 'Téléphone')); ?>

            <?php echo e(Form::text('phone', null, array('class' => 'form-control'))); ?>

        </div>

        <?php echo e(Form::submit('Procéder au paiement', array('class' => 'button success'))); ?>

        <?php echo Form::close(); ?>

    </div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>