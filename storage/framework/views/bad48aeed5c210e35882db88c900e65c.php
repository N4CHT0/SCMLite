\
<?php $__env->startSection('sub-title', 'Daftar Barang'); ?>
<?php $__env->startSection('content'); ?>

    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="btn-group mb-3" role="group" aria-label="Basic Example">
        <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Barang</a>
        <a href="<?php echo e(route('barang.pdf')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
    </div>


    <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kategori Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Gudang Barang</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($item->id); ?></th>
                    <td><?php echo e($item->Kategoribarang->nama_kategori_barang); ?></td>
                    <td><?php echo e($item->nama_barang); ?></td>
                    <td><?php echo e($item->harga_barang); ?></td>
                    <td><?php echo e($item->Gudangbarang->nama_gudang); ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/barang/edit/<?php echo e($item->id); ?>"><i
                                class="fas fa-edit"></i> Edit</a>
                        <form action="<?php echo e(route('barang.destroy', $item->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure')"><i
                                    class="fas fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/barang/index.blade.php ENDPATH**/ ?>