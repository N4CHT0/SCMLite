<?php $__env->startSection('title', 'DAFTAR-SUPIR'); ?>
<?php $__env->startSection('sub-title','Daftar Supir'); ?>
<?php $__env->startSection('content'); ?>

        <a href="<?php echo e(route('supir.create')); ?>" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Supir</a>
        <a href="<?php echo e(route('supir.pdf')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
        <br><br>

        <table class="table table-striped table-hover table-sm table-bordered" id="example">
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
                    <a class="btn btn-primary btn-sm" href="/supir/edit/<?php echo e($item->id); ?>"><i class="fas fa-edit"></i> Edit</a>
                    <a class="btn btn-danger btn-sm" href="/supir/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/supir/index.blade.php ENDPATH**/ ?>