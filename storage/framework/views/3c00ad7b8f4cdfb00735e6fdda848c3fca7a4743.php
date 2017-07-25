<?php $__env->startSection('content'); ?>

    <h3>Ajouter un produit</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']); ?>


            <div class="form-group">
                <?php echo e(Form::label('name', 'Nom')); ?>

                <?php echo e(Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5'))); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('description', 'Description')); ?>

                <?php echo e(Form::textarea('description', null, array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('price', 'Prix')); ?>

                <?php echo e(Form::text('price', null, array('class' => 'form-control'))); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('size', 'Taille')); ?>

                <?php echo e(Form::select('size', [ '40' => '40', '41' => '41','42'=>'42','43' => '43', '44' => '44','45'=>'45'], null, ['class' => 'form-control'])); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('category_id', 'Catégoris')); ?>

                <?php echo e(Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Choisir une catégorie'])); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('image', 'Image')); ?>

                <?php echo e(Form::file('image',array('class' => 'form-control'))); ?>

            </div>

             <?php echo e(Form::submit('Créer', array('class' => 'btn btn-primary'))); ?>

            <?php echo Form::close(); ?>


        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>