<?php $__env->startSection('content'); ?>
    <h3>Commandes</h3>
    <hr>
    <div class="order-main">
    <ul>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <h4>Commande de :<?php echo e($order->user->name); ?> <br> Total : <?php echo e($order->total); ?>€</h4>

                <form action="<?php echo e(route('toggle.deliver',$order->id)); ?>" method="POST" class="pull-right" id="deliver-toggle">
                    <?php echo e(csrf_field()); ?>

                    <label for="delivered">Envoyer</label>
                    <input type="checkbox" value="1" name="delivered"  <?php echo e($order->delivered==1?"checked":""); ?>>
                    <input type="submit" value="valider">
                </form>

                <div class="clearfix"></div>
                <hr>
                <h5>Articles</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Nom</th>
                        <th>qty</th>
                        <th>taille</th>
                        <th>prix</th>
                    </tr>
                    <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->pivot->qty); ?></td>
                            <td><?php echo e($item->size); ?></td>
                            <td><?php echo e($item->pivot->total); ?>€</td>
                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>