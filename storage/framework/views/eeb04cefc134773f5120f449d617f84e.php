<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Add Jadwal</h4>
        <form action="/jadwal_pengiriman" method="POST" class="w-25 mt-3">
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
                <label for="id_pengiriman" class="form-label">Status Pengiriman</label>
                <select class="form-control select2" style="width: 100%;" name="id_pengiriman" id="id_pengiriman">
                    <option disabled value>Pilih Pengiriman</option>
                    <?php $__currentLoopData = $pengiriman_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->status_pengiriman); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori" id="id_kategori">
                    <option disabled value>Pilih Kategori</option>
                    <?php $__currentLoopData = $kategori_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kategori_barang); ?>></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_pengiriman" class="form-label">Tanggal Pengiriman</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="tanggal_pengiriman" name="tanggal_pengiriman" placeholder="Masukan Tanggal Pengiriman">
                  <span class="input-group-text" id="tanggal_pengiriman-addon"><i class="bi bi-calendar"></i></span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('jadwal_pengiriman.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
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
<?php echo $__env->make('pengiriman.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/jadwal_pengiriman/create.blade.php ENDPATH**/ ?>