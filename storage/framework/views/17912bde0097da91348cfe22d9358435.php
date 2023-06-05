<?php $__env->startSection('title', 'EDIT-JADWAL'); ?>
<?php $__env->startSection('sub-title','Edit Jadwal Pengiriman'); ?>
<?php $__env->startSection('content'); ?>

        <form action="/jadwal_pengiriman/update/<?php echo e($jadwal_pengiriman->id); ?>" method="POST" class="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="id_rute" class="form-label">Kota Asal</label>
                <select class="form-control select2" style="width: 100%;" name="id_rute" id="id_rute"value="<?php echo e($jadwal_pengiriman->id_rute); ?>">
                    <option disabled value>Pilih Kota Asal</option>
                    <?php $__currentLoopData = $rute_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->kota_asal); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_rute" class="form-label">Kota Tujuan</label>
                <select class="form-control select2" style="width: 100%;" name="id_rute" id="id_rute"value="<?php echo e($jadwal_pengiriman->id_rute); ?>">
                    <option disabled value>Pilih Rute</option>
                    <?php $__currentLoopData = $rute_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->kota_tujuan); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_outlet" class="form-label">Outlet</label>
                <select class="form-control select2" style="width: 100%;" name="id_outlet" id="id_outlet" value="<?php echo e($jadwal_pengiriman->id_outlet); ?>">
                    <option disabled value>Pilih Outlet</option>
                    <?php $__currentLoopData = $outlet_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_outlet); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_pengiriman" class="form-label">Status Pengiriman</label>
                <select class="form-control select2" style="width: 100%;" name="id_pengiriman" id="id_pengiriman" value="<?php echo e($jadwal_pengiriman->id_pengiriman); ?>">
                    <option disabled value>Pilih Pengiriman</option>
                    <?php $__currentLoopData = $pengiriman_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->status_pengiriman); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori" id="id_kategori" value="<?php echo e($jadwal_pengiriman->id_kategori); ?>">
                    <option disabled value>Pilih Kategori</option>
                    <?php $__currentLoopData = $kategori_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kategori_barang); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pengiriman" class="form-label">Tanggal Pengiriman</label>
                <div class="input-group">
                  <input type="datetime-local" class="form-control" id="tanggal_pengiriman" name="tanggal_pengiriman" placeholder="Masukan Tanggal Pengiriman"value="<?php echo e($jadwal_pengiriman->tanggal_pengiriman); ?>">
                  <span class="input-group-text" id="tanggal_pengiriman-addon"><i class="bi bi-calendar"></i></span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="<?php echo e(route('jadwal_pengiriman.index')); ?>" class="btn btn-secondary btn-block">Batal</a>
        </form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/jadwal_pengiriman/edit.blade.php ENDPATH**/ ?>