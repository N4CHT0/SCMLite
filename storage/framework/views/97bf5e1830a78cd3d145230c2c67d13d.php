
<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Rute</h4>
        <form action="/rute/update/<?php echo e($rute->id); ?>" method="POST" class="w-25 mt-3">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="kota_asal" class="form-label">Masukan Kota Asal</label>
                <input type="text" class="form-control" id="nama_outlet" name="kota_asal" placeholder="Masukan Kota Asal" value="<?php echo e($rute->kota_asal); ?>">
            </div>
            <div class="mb-3">
                <label for="kota_tujuan" class="form-label">Masukan Kota Tujuan</label>
                <input type="text" class="form-control" id="kota_tujuan" name="kota_tujuan" placeholder="Masukan Kota Tujuan" value="<?php echo e($rute->kota_tujuan); ?>">
            </div>
            <div class="mb-3">
                <label for="jarak_rute" class="form-label">Masukan Jarak Rute</label>
                <input type="text" class="form-control" id="jarak_rute" name="jarak_rute" placeholder="Masukan Jarak Rute" value="<?php echo e($rute->jarak_rute); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('rute.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('rute.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/rute/edit.blade.php ENDPATH**/ ?>