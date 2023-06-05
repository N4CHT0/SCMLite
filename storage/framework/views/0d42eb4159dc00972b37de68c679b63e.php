<?php $__env->startSection('title', 'DAFTAR-KATEGORI'); ?>
<?php $__env->startSection('sub-title','Data Kategori'); ?>
<?php $__env->startSection('content'); ?>

    <?php if(Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(Session('success')); ?>

    </div>
    <?php endif; ?>

    <div class="btn-group mb-3" role="group" aria-label="Basic Example">
        <a href="<?php echo e(route('kategori.create')); ?>" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Kategori</a>
        <a href="<?php echo e(route('kategori.pdf')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Export Ke PDF</a>
    </div>

    <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->nama_kategori_barang); ?></td>
                <td><?php echo e($item->deskripsi); ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/kategori/edit/<?php echo e($item->id); ?>"><i class="fas fa-edit"></i> Edit</a>
                    <a class="btn btn-danger btn-sm" href="/kategori/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/kategori/index.blade.php ENDPATH**/ ?>