<?php $__env->startSection('title', 'TAMBAH-GUDANG'); ?>
<?php $__env->startSection('sub-title','Tambah Gudang'); ?>
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

        <form action="<?php echo e(route('gudang.store')); ?>" method="POST" class="">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nama_gudang" class="form-label">Nama Gudang</label>
                <input type="text" class="form-control" id="nama_gudang" name="nama_gudang" placeholder="Masukan Nama Gudang">
            </div>
            <div class="form-group">
                <label for="alamat_gudang" class="form-label">Alamat Gudang</label>
                <input type="text" class="form-control" id="alamat_gudang" name="alamat_gudang" placeholder="Masukan Alamat Gudang">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <a href="<?php echo e(route('gudang.index')); ?>" class="btn btn-secondary btn-block">Batal</a>
            </div>
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/gudang/create.blade.php ENDPATH**/ ?>