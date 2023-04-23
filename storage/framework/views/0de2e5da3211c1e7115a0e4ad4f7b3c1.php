<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Gudang</h4>
        <form action="/gudang/update/<?php echo e($gudang->id); ?>" method="POST" class="w-25 mt-3">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="nama_gudang" class="form-label">Nama Gudang</label>
                <input type="text" class="form-control" id="nama_gudang" name="nama_gudang" placeholder="Masukkan Nama Gudang" value="<?php echo e($gudang->nama_gudang); ?>">
            </div>
            <div class="mb-3">
                <label for="alamat_gudang" class="form-label">Alamat Gudang</label>
                <input type="text" class="form-control" id="alamat_gudang" name="alamat_gudang" placeholder="Masukkan Alamat Gudang" value="<?php echo e($gudang->alamat_gudang); ?>">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/gudang/edit.blade.php ENDPATH**/ ?>