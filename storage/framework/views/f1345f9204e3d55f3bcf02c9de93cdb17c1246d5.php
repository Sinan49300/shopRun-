<?php $__env->startSection('title','shoes'); ?>

<?php $__env->startSection('content'); ?>

 <!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $shirts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shirt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="small-5 small-offset-1 columns main-column">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                             <img src="<?php echo e(url('images',$shirt->image)); ?>"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns main-column">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="main-title-tag"><?php echo e($shirt->name); ?></span>
                    </h3>
                    <h3 class="subheader">
                       <span class="price-tag">Prix: <?php echo e($shirt->price); ?>€</span>
                    </h3>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Choisir la taille
                                <select>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    
                                   
                                </select>
                            </label>
                            <a href="<?php echo e(route('cart.addItem',$shirt->id)); ?>" class="button cart  expanded">Ajouter au panier</a>
                        </div>

            <div class="medium-12 columns">
                <div class="item-wrapper">
                <h2>Category</h2>
                    <h3 class="subheader">
                       <span><?php echo e($shirt->category->name); ?></span>
                    </h3>
                  
                        </div>
                    </div>
                
            <div class="medium-12 columns">
                <div class="item-wrapper">
                <h2>Description</h2>
                    <h3 class="subheader">
                       <span><?php echo e($shirt->description); ?></span>
                    </h3>
                  
                        </div>
                    </div>
                
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
        <h4>Pas d'articles</h4>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>