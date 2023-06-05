<?php $__env->startSection('title', 'DAFTAR-OUTLET'); ?>
<?php $__env->startSection('sub-title','Data Outlet'); ?>
<?php $__env->startSection('content'); ?>

    <a href="<?php echo e(route('outlet.create')); ?>" class="btn btn-info btn-sm">Tambah Outlet</a>
    <a href="<?php echo e(route('outlet.pdf')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Outlet</th>
                <th scope="col">Alamat Outlet</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $outlet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->nama_outlet); ?></td>
                <td><?php echo e($item->alamat_outlet); ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/outlet/edit/<?php echo e($item->id); ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="/outlet/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/outlet/index.blade.php ENDPATH**/ ?>