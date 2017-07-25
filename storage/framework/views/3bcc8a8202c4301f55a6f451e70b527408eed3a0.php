<?php $__env->startSection('content'); ?>

    <h3>Produits</h3>

<ul class="container">
    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li class="row">


       <div class="col-md-8">
           <div class="main-product col-md-12">
        <img src="<?php echo e(url('images',$product->image)); ?>"/>
        <h4>Nom du produit:<?php echo e($product->name); ?></h4>
        <h4>Catégorie:<?php echo e(count($product->category)?$product->category->name:"N/A"); ?></h4>

      <a href="<?php echo e(route('product.edit',$product->id)); ?>" class="btn btn-primary btn-sm ">Modifier le produit</a>

        <form action="<?php echo e(route('product.destroy',$product->id)); ?>"  method="POST">
           <?php echo e(csrf_field()); ?>

           <?php echo e(method_field('DELETE')); ?>

           <input class="btn btn-sm btn-danger" type="submit" value="Supprimer">
         </form>
         </div>

         <div class="col-md-4">
            
            <form action="/admin/product/image-upload/<?php echo e($product->id); ?>" method="POST" class="dropzone" id="my-awesome-dropzone-<?php echo e($product->id); ?>">
              <?php echo e(csrf_field()); ?>


             </form>

        </div>

    </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <h3>No products</h3>

    <?php endif; ?>
</ul>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>