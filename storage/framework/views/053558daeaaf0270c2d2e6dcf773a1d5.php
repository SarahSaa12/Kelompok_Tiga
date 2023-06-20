

 
<?php $__env->startSection('container'); ?>
<div class="">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('students.create')); ?>"> Tambahkan Data Siswa</a>
                <a href="<?php echo e(route('export.pdf')); ?>" class="btn btn-info text-white ">Export PDF</a>
            </div>
        </div>
    </div>
    <br>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($student->nama); ?></td>
            <td><?php echo e($student->NIS); ?></td>
            <td><?php echo e($student->jenis_kelamin); ?></td>
            <td><?php echo e($student->kelas); ?></td>
            <td><?php echo e($student->alamat); ?></td>
            <td><?php echo e($student->no_hp); ?></td>
            <td>
                <form action="<?php echo e(route('students.destroy',$student->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('students.show',$student->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('students.edit',$student->id)); ?>">Update</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $students->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.mainGuru', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjekAkhirPEMWEB2\resources\views/index_siswa.blade.php ENDPATH**/ ?>