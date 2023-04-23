<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Gudang</h4>
        <a href="<?php echo e(route('gudang.create')); ?>" class="btn btn-primary">Tambah Gudang</a>
    </div>
    <table class="table">
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
                    <a class="btn btn-warning" href="/gudang/edit/<?php echo e($item->id); ?>">Edit</a>
                    <a class="btn btn-danger" href="/gudang/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($gudang->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/gudang/index.blade.php ENDPATH**/ ?>