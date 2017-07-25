<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="cart">
        <h3 class="title-tag">Votre Panier</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nom du produit</th>
                <th>Prix</th>
                <th>Qty</th>
                <th>taille</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cartItem->name); ?></td>
                    <td><?php echo e($cartItem->price); ?>€</td>
                    <td width="50px">
                        <?php echo Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']); ?>

                        <input name="qty" type="text" value="<?php echo e($cartItem->qty); ?>">


                    </td>
                    <td>
                        <div > <?php echo Form::select('size', [ '40' => '40', '41' => '41','42'=>'42','43' => '43', '44' => '44','45'=>'45'] , $cartItem->options->has('size')?$cartItem->options->size:'' ); ?>

                           </div>

                    </td>

                    <td>
                        <input style="float: left"  type="submit" class="button success small" value="Ok">
                        <?php echo Form::close(); ?>


                        <form action="<?php echo e(route('cart.destroy',$cartItem->rowId)); ?>"  method="POST">
                           <?php echo e(csrf_field()); ?>

                           <?php echo e(method_field('DELETE')); ?>

                           <input class="button small alert" type="submit" value="Supprimer">
                         </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td></td>
                <td>
                    Tax: <?php echo e(Cart::tax()); ?>€ <br>
                    SousTotal: <?php echo e(Cart::subtotal()); ?>€ <br>
                    Total: <?php echo e(Cart::total()); ?>€
                </td>
                <td>Articles: <?php echo e(Cart::count()); ?>


                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>

        <a href="<?php echo e(route('checkout.shipping')); ?>" class="button ok">Valider</a>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>