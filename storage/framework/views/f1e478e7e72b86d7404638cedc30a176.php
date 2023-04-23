

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Supir</h4>
        <a href="<?php echo e(route('supir.create')); ?>" class="btn btn-primary">Tambah Supir</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Truk</th>
                <th scope="col">Nama Supir</th>
                <th scope="col">Nomor Telpon</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $supir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->RTruk->nomor_polisi); ?></td>
                <td><?php echo e($item->nama_supir); ?></td>
                <td><?php echo e($item->nomor_telepon); ?></td>
                <td>
                    <a class="btn btn-warning" href="/supir/edit/<?php echo e($item->id); ?>">Edit</a>
                    <a class="btn btn-danger" href="/supir/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($supir->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/supir/index.blade.php ENDPATH**/ ?>