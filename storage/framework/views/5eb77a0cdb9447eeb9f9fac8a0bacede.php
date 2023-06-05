<?php $__env->startSection('title', 'EDIT-TRUK'); ?>
<?php $__env->startSection('sub-title','Edit Truk'); ?>
<?php $__env->startSection('content'); ?>

        <form action="/truk/update/<?php echo e($truk->id); ?>" method="POST" class="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="nomor_polisi" class="form-label">Masukan Nomot Polisi</label>
                <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" placeholder="Masukan Kota Asal" value="<?php echo e($truk->nomor_polisi); ?>">
            </div>
            <div class="mb-3">
                <label for="kapasitas" class="form-label">Masukan Kapasitas</label>
                <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Masukan Kapasitas" value="<?php echo e($truk->kapasitas); ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="<?php echo e(route('truk.index')); ?>" class="btn btn-secondary btn-block">Batal</a>
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/truk/edit.blade.php ENDPATH**/ ?>