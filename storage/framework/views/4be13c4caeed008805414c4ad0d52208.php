<?php $__env->startSection('title', 'EDIT-KATEGORI'); ?>
<?php $__env->startSection('sub-title','Edit Kategori'); ?>
<?php $__env->startSection('content'); ?>

        <?php if(count($errors)>0): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e($error); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <form action="<?php echo e(route('kategori.update' ,$kategori->id )); ?>" method="POST" class="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="nama_kategori_barang" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori_barang" name="nama_kategori_barang" placeholder="Masukkan Nama Kategori" value="<?php echo e($kategori->nama_kategori_barang); ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" value="<?php echo e($kategori->deskripsi); ?>">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/kategori/edit.blade.php ENDPATH**/ ?>