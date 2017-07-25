<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="small-6 small-centered columns payment">
            <h2> Information de paiment</h2>
        <form action="<?php echo e(route('payment.store')); ?>" method="POST" id="payment-form">
            <?php echo e(csrf_field()); ?>

            <span class="payment-errors"></span>

            <div class="form-row">
                <label>
                    <span>Numéro de carte bancaire</span>
                    <input type="text" size="20" data-stripe="number">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Date d'Expiration (MM/AA)</span>
                    <input type="text" size="2" data-stripe="exp_month">
                    <span> / </span>
                    <input type="text" size="2" data-stripe="exp_year">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>CVC</span>
                    <input type="text" size="3" data-stripe="cvc">
                </label>
            </div>


            <input type="submit" class="submit button success" value="Payer">
        </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>