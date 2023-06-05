<?php $__env->startSection('title', 'TAMBAH-RUTE'); ?>
<?php $__env->startSection('sub-title','Tambah Rute'); ?>
<?php $__env->startSection('content'); ?>

        <form action="/rute" method="POST" class="">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="kota_asal" class="form-label">Kota kota_asal</label>
                <input type="text" class="form-control" id="kota_asal" name="kota_asal" placeholder="Masukan Kota Asal">
            </div>
            <div class="form-group">
                <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
                <input type="text" class="form-control" id="kota_tujuan" name="kota_tujuan" placeholder="Masukan Kota Tujuan">
            </div>
            <div class="form-group">
                <label for="jarak_rute" class="form-label">Jarak Rute</label>
                <input type="text" class="form-control" id="jarak_rute" name="jarak_rute" placeholder="Masukan Jarak Rute">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="<?php echo e(route('rute.index')); ?>" class="btn btn-secondary btn-block">Batal</a>
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/rute/create.blade.php ENDPATH**/ ?>