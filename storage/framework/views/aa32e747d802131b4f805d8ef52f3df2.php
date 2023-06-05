<?php $__env->startSection('title', 'DAFTAR-STOK'); ?>
<?php $__env->startSection('sub-title','Data Stok Barang'); ?>
<?php $__env->startSection('content'); ?>

  <?php if(Session::has('success')): ?>
  <div class="alert alert-success" role="alert">
      <?php echo e(Session('success')); ?>

  </div>
  <?php endif; ?>

    <div class="btn-group mb-3" role="group" aria-label="Basic Example">
        <a href="<?php echo e(route('stok.create')); ?>" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Stok</a>
        <a href="<?php echo e(route('stok.pdf')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
    </div>


    <table class="table table-striped table-hover table-sm table-bordered" id="example">
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
                    <a class="btn btn-primary btn-sm" href="/stok/edit/<?php echo e($item->id); ?>"><i class="fas fa-edit"></i> Edit</a>
                    <form action="<?php echo e(route('stok.destroy', $item->id )); ?>" method="POST">
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

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/stok/index.blade.php ENDPATH**/ ?>