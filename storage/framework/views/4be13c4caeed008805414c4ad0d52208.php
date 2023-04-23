

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Kategori</h4>
        <form action="/kategori/update/<?php echo e($kategori->id); ?>" method="POST" class="w-25 mt-3">
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
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('kategori.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/kategori/edit.blade.php ENDPATH**/ ?>