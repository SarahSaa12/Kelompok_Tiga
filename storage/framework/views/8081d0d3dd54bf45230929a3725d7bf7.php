

 
<?php $__env->startSection('container'); ?>
<div class="">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Hasil Akhir</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('results.create')); ?>"> Tambahkan Data Hasil Akhir</a>
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
        <tr style="text-align: center">
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td style="text-align: center"><?php echo e(++$i); ?></td>
            <td><?php echo e($nilai->nama); ?></td>
            <td style="text-align: center" ><?php echo e($nilai->nilai); ?></td>
            <td>
                <form action="<?php echo e(route('results.destroy',$nilai->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('results.show',$nilai->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('results.edit',$nilai->id)); ?>">Update</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $results->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.mainGuru', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjekAkhirPEMWEB2\resources\views/index_nilai.blade.php ENDPATH**/ ?>