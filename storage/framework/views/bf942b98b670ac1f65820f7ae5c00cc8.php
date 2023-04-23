
<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Add Kategori</h4>
        <form action="/kategori" method="POST" class="w-25 mt-3">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nama_kategori_barang" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori_barang" name="nama_kategori_barang" placeholder="Masukan Nama Kategori">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('kategori.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kategori.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/kategori/create.blade.php ENDPATH**/ ?>