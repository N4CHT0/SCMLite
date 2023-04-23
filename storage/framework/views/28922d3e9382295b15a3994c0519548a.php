<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Add Stok</h4>
        <form action="/stok" method="POST" class="w-25 mt-3">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="id_barang" class="form-label">Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_barang" id="id_barang">
                    <option disabled value>Pilih Barang</option>
                    <?php $__currentLoopData = $barang_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_barang); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_kategori_barang" class="form-label">Kategori Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori_barang" id="id_kategori_barang">
                    <option disabled value>Pilih Kategori Barang</option>
                    <?php $__currentLoopData = $kategori_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kategori_barang); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
                <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" placeholder="Masukan Jumlah Stok">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('stok.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('gudang.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/stok/create.blade.php ENDPATH**/ ?>