<?php $__env->startSection('title', 'EDIT-SUPIR'); ?>
<?php $__env->startSection('sub-title','Edit Supir'); ?>
<?php $__env->startSection('content'); ?>


        <form action="/supir/update/<?php echo e($supir->id); ?>" method="POST" class="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
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
                <input type="text" class="form-control" id="nama_supir" name="nama_supir" placeholder="Masukkan Nama Supir" value="<?php echo e($supir->nama_supir); ?>">
            </div>
            <div class="form-group">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" value="<?php echo e($supir->nomor_telepon); ?>">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/supir/edit.blade.php ENDPATH**/ ?>