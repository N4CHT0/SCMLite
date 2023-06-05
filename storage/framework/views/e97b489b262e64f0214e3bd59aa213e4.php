<?php $__env->startSection('title', 'DAFTAR-RUTE'); ?>
<?php $__env->startSection('sub-title','Daftar Rute'); ?>
<?php $__env->startSection('content'); ?>


        <a href="<?php echo e(route('rute.create')); ?>" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Buat Rute</a>
        <a href="<?php echo e(route('rute.pdf')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
        <br><br>

    <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Jarak Rute</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $rute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->kota_asal); ?></td>
                <td><?php echo e($item->kota_tujuan); ?></td>
                <td><?php echo e($item->jarak_rute); ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/rute/edit/<?php echo e($item->id); ?>"><i class="fas fa-edit"></i> Edit</a>
                    <a class="btn btn-danger btn-sm" href="/rute/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/rute/index.blade.php ENDPATH**/ ?>