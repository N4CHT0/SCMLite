<?php $__env->startSection('title', 'TAMBAH-PENGIRIMAN'); ?>
<?php $__env->startSection('sub-title','Tambah Pengiriman'); ?>
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


        <form action="<?php echo e(route('pengiriman.store')); ?>" method="POST" class="">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="id_rute" class="form-label">Rute</label>
                <select class="form-control select2" style="width: 100%;" name="id_rute" id="id_rute">
                    <option disabled value>Pilih Rute</option>
                    <?php $__currentLoopData = $rute_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->kota_tujuan); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_outlet" class="form-label">Outlet</label>
                <select class="form-control select2" style="width: 100%;" name="id_outlet" id="id_outlet">
                    <option disabled value>Pilih Outlet</option>
                    <?php $__currentLoopData = $outlet_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_outlet); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
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
                <label for="id_supir" class="form-label">Supir</label>
                <select class="form-control select2" style="width: 100%;" name="id_supir" id="id_supir">
                    <option disabled value>Pilih Supir</option>
                    <?php $__currentLoopData = $supir_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_supir); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pengiriman" class="form-label">Tanggal Pengiriman</label>
                <input type="date" class="form-control" id="tanggal_pengiriman" name="tanggal_pengiriman" >
            </div>
            <div class="form-group">
                <label for="status_pengiriman" class="form-label">Status Pengiriman</label>
                <input type="text" class="form-control" id="status_pengiriman" name="status_pengiriman" placeholder="Masukan Status Pengiriman">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="<?php echo e(route('pengiriman.index')); ?>" class="btn btn-secondary btn-block">Batal</a>
        </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#tanggal_pengiriman').datepicker({
          format: 'yyyy-mm-dd',
          autoclose: true
        });
      });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/pengiriman/create.blade.php ENDPATH**/ ?>