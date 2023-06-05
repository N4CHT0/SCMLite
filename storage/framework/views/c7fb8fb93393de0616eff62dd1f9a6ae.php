<?php $__env->startSection('title', 'TAMBAH-OUTLET'); ?>
<?php $__env->startSection('sub-title','Tambah Outlet'); ?>
<?php $__env->startSection('content'); ?>
        <form action="/outlet" method="POST" class="">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nama_outlet" class="form-label">Nama Outlet</label>
                <input type="text" class="form-control" id="nama_outlet" name="nama_outlet" placeholder="Masukan Nama Outlet">
            </div>
            <div class="form-group">
                <label for="alamat_outlet" class="form-label">Alamat Outlet</label>
                <input type="text" class="form-control" id="alamat_outlet" name="alamat_outlet" placeholder="Masukan Alamat Outlet">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="<?php echo e(route('outlet.index')); ?>" class="btn btn-secondary btn-block">Batal</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/outlet/create.blade.php ENDPATH**/ ?>