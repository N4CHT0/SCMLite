<?php $__env->startSection('sub-title','Tambah Kategori'); ?>
<?php $__env->startSection('content'); ?>

    <?php if(count($errors)>0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e($error); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session('success')); ?>

        </div>
    <?php endif; ?>



    <form action="<?php echo e(route('kategori.store')); ?>" method="POST" class="">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nama_kategori_barang" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori_barang" name="nama_kategori_barang" placeholder="Masukan Nama Kategori">
        </div>
        <div class="form-group">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="<?php echo e(route('kategori.index')); ?>" class="btn btn-secondary btn-block">Batal</a>
        </div>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/kategori/create.blade.php ENDPATH**/ ?>