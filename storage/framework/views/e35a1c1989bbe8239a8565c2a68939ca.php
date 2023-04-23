

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Pengiriman</h4>
        <a href="<?php echo e(route('jadwal-pengiriman.create')); ?>" class="btn btn-primary">Tambah Pengiriman</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Rute</th>
                <th scope="col">Outlet</th>
                <th scope="col">Pengiriman</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tanggal Pengiriman</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $jadwal_pengiriman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->RRute->kota_tujuan); ?></td>
                <td><?php echo e($item->ROutlet->nama_outlet); ?></td>
                <td><?php echo e($item->RPengiriman->status_pengiriman); ?></td>
                <td><?php echo e($item->Kategoribarang->nama_kategori); ?></td>
                <td><?php echo e($item->tanggal_pengiriman); ?></td>
                <td>
                    <a class="btn btn-warning" href="/jadwal-pengiriman/edit/<?php echo e($item->id); ?>">Edit</a>
                    <a class="btn btn-danger" href="/jadwal-pengiriman/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($jadwal_pengiriman->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/jadwal-pengiriman/index.blade.php ENDPATH**/ ?>