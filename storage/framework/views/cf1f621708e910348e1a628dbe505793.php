<?php $__env->startSection('title', 'TAMBAH-TRUK'); ?>
<?php $__env->startSection('sub-title','Tambah Truk'); ?>
<?php $__env->startSection('content'); ?>

        <form action="/truk" method="POST" class="">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nomor_polisi" class="form-label">Nomor Polisi</label>
                <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" placeholder="Masukan Nomor Polisi">
            </div>
            <div class="form-group">
                <label for="kapasitas" class="form-label">Kapasitas</label>
                <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Masukan Kapasitas">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="<?php echo e(route('truk.index')); ?>" class="btn btn-secondary btn-block">Batal</a>
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/truk/create.blade.php ENDPATH**/ ?>