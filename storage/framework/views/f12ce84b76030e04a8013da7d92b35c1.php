<?php $__env->startSection('title', 'TAMBAH-BARANG'); ?>
<?php $__env->startSection('sub-title','Tambah Barang'); ?>
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

        <form action="<?php echo e(route('barang.store')); ?>" method="POST" class="">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="id_kategori_barang" class="form-label">Kategori Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori_barang" id="id_kategori_barang">
                    <option disabled value>Pilih Kategori Barang</option>
                    <?php $__currentLoopData = $kategori_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kategori_barang); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_gudang" class="form-label">Gudang Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_gudang" id="id_gudang">
                    <option disabled value>Pilih Gudang Barang</option>
                    <?php $__currentLoopData = $gudang_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_gudang); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Nama Barang">
            </div>
            <div class="form-group">
                <label for="harga_barang" class="form-label">Harga Barang</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang" placeholder="Masukan Harga Barang">
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-secondary btn-block">Batal</a>
            </div>

        </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/barang/create.blade.php ENDPATH**/ ?>