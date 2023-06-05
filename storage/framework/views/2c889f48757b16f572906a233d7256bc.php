<?php $__env->startSection('title', 'EDIT-STOK'); ?>
<?php $__env->startSection('sub-title','Edit Stok'); ?>
<?php $__env->startSection('content'); ?>

        <?php if(count($errors)>0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e($error); ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <form action="<?php echo e(route('stok.update' ,$stok->id )); ?>" method="POST" class="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
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
                <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" placeholder="Masukkan Jumlah Stok" value="<?php echo e($stok->jumlah_stok); ?>">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/stok/edit.blade.php ENDPATH**/ ?>