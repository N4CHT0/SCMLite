<?php $__env->startSection('title', 'DAFTAR-PENGIRIMAN'); ?>
<?php $__env->startSection('sub-title','Daftar Pengiriman'); ?>

<?php $__env->startSection('content'); ?>

        <div class="btn-group mb-3" role="group" aria-label="Basic Example">
            <a href="<?php echo e(route('pengiriman.create')); ?>" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Pengiriman</a>
            <a href="<?php echo e(route('pengiriman.pdf')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Export Ke PDF</a>
        </div>

        <table class="table table-striped table-hover table-sm table-bordered" id="example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kota Tujuan</th>
                    <th>Outlet</th>
                    <th>Truk</th>
                    <th>Supir</th>
                    <th>Tanggal Pengiriman</th>
                    <th>Status Pengiriman</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pengiriman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->RRute->kota_tujuan); ?></td>
                    <td><?php echo e($item->ROutlet->nama_outlet); ?></td>
                    <td><?php echo e($item->RTruk->nomor_polisi); ?></td>
                    <td><?php echo e($item->RSupir->nama_supir); ?></td>
                    <td><?php echo e($item->tanggal_pengiriman); ?></td>
                    <td><?php echo e($item->status_pengiriman); ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/pengiriman/edit/<?php echo e($item->id); ?>"><i class="fas fa-edit"></i> Edit</a>
                        <a class="btn btn-danger btn-sm" href="/pengiriman/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/pengiriman/index.blade.php ENDPATH**/ ?>