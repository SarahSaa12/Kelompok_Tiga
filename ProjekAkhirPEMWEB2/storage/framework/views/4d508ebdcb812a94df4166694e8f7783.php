
  
<?php $__env->startSection('content'); ?>
<div class="crud">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>Tambah Data Hasil Akhir</b></h2>
            </div>
    </div>
    
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada Beberapa Masalah dengan Masukan Anda.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <form action="<?php echo e(route('results.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai:</strong>
                    <input type="text" name="nilai" class="form-control" placeholder="Nilai">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <a class="btn btn-danger" href="<?php echo e(route('results.index')); ?>"><b>Back</b></a>
                <button type="submit" class="btn btn-success"><b>Submit</b></button>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainCrud', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobaCRUD\resources\views/create_nilai.blade.php ENDPATH**/ ?>