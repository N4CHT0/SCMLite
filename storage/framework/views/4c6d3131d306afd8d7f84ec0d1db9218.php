<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <div class="col-lg-6">
            <h4>Jadwal Pengiriman</h4>
        </div>
        <div class="col-lg-6 text-lg-right">
            <a href="<?php echo e(route('jadwal_pengiriman.create')); ?>" class="btn btn-primary">Tambah Jadwal</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rute</th>
                    <th scope="col">Outlet</th>
                    <th scope="col">Pengiriman</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal Pemesanan</th>
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
                    <td><?php echo e($item->Kategoribarang->nama_kategori_barang); ?></td>
                    <td><?php echo e($item->tanggal_pengiriman); ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="/jadwal_pengiriman/edit/<?php echo e($item->id); ?>">Edit</a>
                        <a class="btn btn-danger btn-sm" href="/jadwal_pengiriman/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?php echo e(($jadwal_pengiriman->currentPage() == 1) ? ' disabled' : ''); ?>">
                    <a class="page-link" href="<?php echo e($jadwal_pengiriman->url(1)); ?>">First</a>
                </li>
                <?php if($jadwal_pengiriman->currentPage() > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo e($jadwal_pengiriman->previousPageUrl()); ?>"><</a>
                    </li>
                <?php endif; ?>
    
                <?php for($i = 1; $i <= $jadwal_pengiriman->lastPage(); $i++): ?>
                    <li class="page-item <?php echo e(($jadwal_pengiriman->currentPage() == $i) ? ' active' : ''); ?>">
                        <a class="page-link" href="<?php echo e($jadwal_pengiriman->url($i)); ?>"><?php echo e($i); ?></a>
                    </li>
                <?php endfor; ?>
    
                <?php if($jadwal_pengiriman->currentPage() < $jadwal_pengiriman->lastPage()): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo e($jadwal_pengiriman->nextPageUrl()); ?>">></a>
                    </li>
                <?php endif; ?>
                <li class="page-item <?php echo e(($jadwal_pengiriman->currentPage() == $jadwal_pengiriman->lastPage()) ? ' disabled' : ''); ?>">
                    <a class="page-link" href="<?php echo e($jadwal_pengiriman->url($jadwal_pengiriman->lastPage())); ?>">Last</a>
                </li>
            </ul>
        </nav>
      </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pengiriman.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/jadwal_pengiriman/index.blade.php ENDPATH**/ ?>