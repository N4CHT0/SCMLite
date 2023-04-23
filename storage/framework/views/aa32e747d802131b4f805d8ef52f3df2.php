<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Stok Barang</h4>
        <a href="<?php echo e(route('stok.create')); ?>" class="btn btn-primary">Tambah Stok</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Barang</th>
                <th scope="col">Kategori Barang</th>
                <th scope="col">Jumlah Stok</th>
                <th scope="col">Tanggal Update</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $stok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->RBarang->nama_barang); ?></td>
                <td><?php echo e($item->Kategoribarang->nama_kategori_barang); ?></td>
                <td><?php echo e($item->jumlah_stok); ?></td>
                <td><?php echo e($item->updated_at); ?></td>
                <td>
                    <a class="btn btn-warning" href="/stok/edit/<?php echo e($item->id); ?>">Edit</a>
                    <a class="btn btn-danger" href="/stok/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($stok->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('gudang.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/stok/index.blade.php ENDPATH**/ ?>