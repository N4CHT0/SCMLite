<?php $__env->startSection('title', 'TAMBAH-SUPIR'); ?>
<?php $__env->startSection('sub-title','Tambah Supir'); ?>
<?php $__env->startSection('content'); ?>

        <form action="/supir" method="POST" class="">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="id_truk" class="form-label">Truk</label>
                <select class="form-control select2" style="width: 100%;" name="id_truk" id="id_truk">
                    <option disabled value>Pilih Truk</option>
                    <?php $__currentLoopData = $truk_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nomor_polisi); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_supir" class="form-label">Nama Supir</label>
                <input type="text" class="form-control" id="nama_supir" name="nama_supir" placeholder="Masukan Nama Supir">
            </div>
            <div class="form-group">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukan Nomor Telepon">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="<?php echo e(route('supir.index')); ?>" class="btn btn-secondary btn-block">Batal</a>
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/supir/create.blade.php ENDPATH**/ ?>