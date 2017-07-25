<?php $__env->startSection('content'); ?>
    <section class="hero text-center">
        <div class="text-main">
        <h2>Bienvenue chez ShopRun!</h2> 
        <h2>la boutique e-commerce de <a href="https://www.sinan-aktas.fr/Run!/" target="_blank">Run!</a></h2>
        <a href="<?php echo e(url('/shoes')); ?>">
            <button class="button large">Consulter nos articles</button>
        </a>
        </div>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2 class="subtitle-tag">
            Nos nouveaux articles
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $shoes->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shirt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper">
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
                        <?php echo e($shirt->category->name); ?>

                    </p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h3>Pas d'articles</h3>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>