<?php $__env->startSection('title', 'DAFTAR-JADWAL'); ?>
<?php $__env->startSection('sub-title','Jadwal Pengiriman'); ?>
<?php $__env->startSection('content'); ?>


    <a href="<?php echo e(route('jadwal_pengiriman.create')); ?>" class="btn btn-info btn-sm"><i class="fas fa-calendar"></i> Buat Jadwal</a>
    <a href="<?php echo e(route('jadwal.pdf')); ?>" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Kota Asal</th>
                    <th scope="col">Kota Tujuan</th>
                    <th scope="col">Outlet</th>
                    <th scope="col">Status Pengiriman</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal Pemesanan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $jadwal_pengiriman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->RRute->kota_asal); ?></td>
                    <td><?php echo e($item->RRute->kota_tujuan); ?></td>
                    <td><?php echo e($item->ROutlet->nama_outlet); ?></td>
                    <td><?php echo e($item->RPengiriman->status_pengiriman); ?></td>
                    <td><?php echo e($item->Kategoribarang->nama_kategori_barang); ?></td>
                    <td><?php echo e($item->tanggal_pengiriman); ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/jadwal_pengiriman/edit/<?php echo e($item->id); ?>"><i class="fas fa-edit"></i> Edit</a>
                        <a class="btn btn-danger btn-sm" href="/jadwal_pengiriman/delete/<?php echo e($item->id); ?>" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/jadwal_pengiriman/index.blade.php ENDPATH**/ ?>