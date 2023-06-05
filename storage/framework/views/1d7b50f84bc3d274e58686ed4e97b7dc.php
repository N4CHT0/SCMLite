<?php $__env->startSection('title', 'DAFTAR-GUDANG'); ?>
<?php $__env->startSection('sub-title','Data Gudang'); ?>
<?php $__env->startSection('content'); ?>

  <?php if(Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(Session('success')); ?>

    </div>
  <?php endif; ?>

  <a href="<?php echo e(route('gudang.create')); ?>" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Gudang</a>
  <a href="<?php echo e(route('gudang.pdf')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
  <br><br>

  <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Gudang</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $gudang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->nama_gudang); ?></td>
                <td><?php echo e($item->alamat_gudang); ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/gudang/edit/<?php echo e($item->id); ?>"><i class="fas fa-edit"></i> Edit</a>
                    <form action="<?php echo e(route('gudang.destroy', $item->id )); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/gudang/index.blade.php ENDPATH**/ ?>