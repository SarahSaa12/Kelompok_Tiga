
  
<?php $__env->startSection('content'); ?>
<div class="crud">
    <div class="pull-left">
        <h2><b>Data Siswa</b></h2>
    </div>
   
    <div class="row mt-3">
        <table class="tabel">
            <tr>
                <td>Nama</td>
                <td><?php echo e($student->nama); ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><?php echo e($student->NIS); ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo e($student->jenis_kelamin); ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?php echo e($student->kelas); ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo e($student->alamat); ?></td>
            </tr>
            <tr>
                <td>No Handphone</td>
                <td><?php echo e($student->no_hp); ?></td>
            </tr>
        </table>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <a class="btn btn-danger" href="<?php echo e(route('students.index')); ?>"><b>Back</b></a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainCrud', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobaCRUD\resources\views/show_siswa.blade.php ENDPATH**/ ?>