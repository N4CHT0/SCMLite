<?php $__env->startSection('content'); ?>
    <<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card my-2">
                    <div class="card-header text-center"><?php echo e(__('Shipments Dashboard')); ?></div>

                    <div class="card-body mt-4">
                        <div class="row justify-content-center d-flex align-items-center">
                            <div class="col-10 col-md-8 text-center">
                                <p><?php echo e(__('You are logged in as Shipments!')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengiriman.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/pengiriman/home.blade.php ENDPATH**/ ?>