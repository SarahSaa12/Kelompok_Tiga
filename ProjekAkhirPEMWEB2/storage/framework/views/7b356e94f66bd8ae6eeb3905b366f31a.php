
  
<?php $__env->startSection('content'); ?>
<div class="crud">
    <div class="pull-left">
        <h2><b>Data Hasil Akhir</b></h2>
    </div>
   
    <div class="row mt-3">
        <table class="tabel">
            <tr>
                <td>Nama</td>
                <td><?php echo e($result->nama); ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><?php echo e($result->nilai); ?></td>
            </tr>
        </table>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <a class="btn btn-danger" href="<?php echo e(route('results.index')); ?>"><b>Back</b></a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainCrud', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobaCRUD\resources\views/show_nilai.blade.php ENDPATH**/ ?>