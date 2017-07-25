<?php $__env->startSection('content'); ?>

    <div class="navbar">
        <a class="navbar-brand" href="#">Catégoris =></a>
        <ul class="nav navbar-nav">
            <?php if(!empty($categories)): ?>
            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="active">
                    <a href="<?php echo e(route('category.show',$category->id)); ?>"><?php echo e($category->name); ?></a>

                    <form action="<?php echo e(route('category.destroy',$category->id)); ?>"  method="POST">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>

                        <input class="btn btn-sm btn-danger" type="submit" value="supprimer">
                     </form>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li>No Items</li>
            <?php endif; ?>
                <?php endif; ?>

        </ul>



    <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Ajouter une catégorie</a>
    <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New</h4>
                </div>
                <?php echo Form::open(['route' => 'category.store', 'method' => 'post']); ?>

                <div class="modal-body">
                    <div class="form-group">
                        <?php echo e(Form::label('name', 'Title')); ?>

                        <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                <?php echo Form::close(); ?>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </div>

    
    <?php if(isset($products)): ?>

    <h3>Products</h3>

    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Produits</th>
    		</tr>
    	</thead>
    	<tbody>
<?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr><td><?php echo e($product->name); ?></td></tr>
    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr><td>Pas de données</td></tr>
        <?php endif; ?>

        </tbody>
    </table>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
    
    
    
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>