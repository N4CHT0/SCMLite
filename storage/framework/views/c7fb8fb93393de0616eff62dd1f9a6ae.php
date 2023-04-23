
<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Add Outlet</h4>
        <form action="/outlet" method="POST" class="w-25 mt-3">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nama_outlet" class="form-label">Nama Outlet</label>
                <input type="text" class="form-control" id="nama_outlet" name="nama_outlet" placeholder="Masukan Nama Outlet">
            </div>
            <div class="mb-3">
                <label for="alamat_outlet" class="form-label">Alamat Outlet</label>
                <input type="text" class="form-control" id="alamat_outlet" name="alamat_outlet" placeholder="Masukan Alamat Outlet">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('outlet.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('outlet.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/outlet/create.blade.php ENDPATH**/ ?>