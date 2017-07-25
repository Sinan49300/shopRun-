<?php $__env->startSection('title','Shoes'); ?>
<?php $__env->startSection('content'); ?>
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $shirts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shirt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper shoes">
                    <div class="img-wrapper">
                        <a href="<?php echo e(route('cart.addItem',$shirt->id)); ?>" class="button expanded add-to-cart">
                            Ajouter au panier
                        </a>
                        <a href="<?php echo e(route('shoe',$shirt->id)); ?>">
                            <img src="<?php echo e(url('images',$shirt->image)); ?>"/>
                        </a>
                    </div>
                    <a href="<?php echo e(route('shoe',$shirt->id)); ?>">
                        <h3 class="title-tag">
                            <?php echo e($shirt->name); ?>

                        </h3>
                    </a>
                    <h5>
                        <?php echo e($shirt->price); ?>€

                    </h5>
                    <p>
                        <?php echo e($shirt->description); ?>

                    </p>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h3>Pas d'articles</h3>
       <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>