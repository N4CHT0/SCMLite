

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Barang</h4>
        <form action="/barang/update/<?php echo e($barang->id); ?>" method="POST" class="w-25 mt-3">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="id_kategori_barang" class="form-label">Kategori Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori_barang" id="id_kategori_barang">
                    <option disabled value>Pilih Kategori Barang</option>
                    <?php $__currentLoopData = $kategori_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kategori_barang); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_gudang" class="form-label">Gudang Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_gudang" id="id_gudang">
                    <option disabled value>Pilih Gudang Barang</option>
                    <?php $__currentLoopData = $gudang_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_gudang); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang" value="<?php echo e($barang->nama_barang); ?>">
            </div>
            <div class="mb-3">
                <label for="harga_barang" class="form-label">Harga Barang</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang" placeholder="Masukkan Harga Barang" value="<?php echo e($barang->harga_barang); ?>">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('barang.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/barang/edit.blade.php ENDPATH**/ ?>