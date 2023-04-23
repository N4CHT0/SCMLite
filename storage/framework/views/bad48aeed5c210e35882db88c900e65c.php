<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-between align-items-center mb-4">
    <div class="col-lg-6">
      <h4>Data Barang</h4>
    </div>
    <div class="col-lg-6 text-lg-right">
      <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-primary">Tambahkan Barang</a>
      <a href="<?php echo e(route('export.pdf')); ?>" class="btn btn-primary">Export to PDF</a>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Kategori Barang</th>
          <th scope="col">Gudang Barang</th>
          <th scope="col">Name</th>
          <th scope="col">Harga Barang</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
        <tbody>
          <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <th scope="row"><?php echo e($item->id); ?></th>
              <td><?php echo e($item->Kategoribarang->nama_kategori_barang); ?></td>
              <td><?php echo e($item->Gudangbarang->nama_gudang); ?></td>
              <td><?php echo e($item->nama_barang); ?></td>
              <td><?php echo e($item->harga_barang); ?></td>
              <td>
                <a class="btn btn-warning btn-sm" href="/barang/edit/<?php echo e($item->id); ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="/barang/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')">Delete</a>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
  </div>
  <div class="d-flex justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?php echo e(($barang->currentPage() == 1) ? ' disabled' : ''); ?>">
                <a class="page-link" href="<?php echo e($barang->url(1)); ?>">First</a>
            </li>
            <?php if($barang->currentPage() > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($barang->previousPageUrl()); ?>"><</a>
                </li>
            <?php endif; ?>

            <?php for($i = 1; $i <= $barang->lastPage(); $i++): ?>
                <li class="page-item <?php echo e(($barang->currentPage() == $i) ? ' active' : ''); ?>">
                    <a class="page-link" href="<?php echo e($barang->url($i)); ?>"><?php echo e($i); ?></a>
                </li>
            <?php endfor; ?>

            <?php if($barang->currentPage() < $barang->lastPage()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($barang->nextPageUrl()); ?>">></a>
                </li>
            <?php endif; ?>
            <li class="page-item <?php echo e(($barang->currentPage() == $barang->lastPage()) ? ' disabled' : ''); ?>">
                <a class="page-link" href="<?php echo e($barang->url($barang->lastPage())); ?>">Last</a>
            </li>
        </ul>
    </nav>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('gudang.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/barang/index.blade.php ENDPATH**/ ?>