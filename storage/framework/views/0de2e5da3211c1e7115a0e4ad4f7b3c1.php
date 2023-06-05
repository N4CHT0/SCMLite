<?php $__env->startSection('title', 'EDIT-GUDANG'); ?>
<?php $__env->startSection('sub-title','Edit Gudang'); ?>
<?php $__env->startSection('content'); ?>

        <?php if(count($errors)>0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e($error); ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <form action="<?php echo e(route('gudang.update' ,$gudang->id )); ?>" method="POST" class="">
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
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/gudang/edit.blade.php ENDPATH**/ ?>