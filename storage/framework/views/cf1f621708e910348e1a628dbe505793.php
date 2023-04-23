
<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Add Truk</h4>
        <form action="/truk" method="POST" class="w-25 mt-3">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nomor_polisi" class="form-label">Nomor Polisi</label>
                <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" placeholder="Masukan Nomor Polisi">
            </div>
            <div class="mb-3">
                <label for="kapasitas" class="form-label">Kapasitas</label>
                <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Masukan Kapasitas">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('truk.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('rute.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/truk/create.blade.php ENDPATH**/ ?>