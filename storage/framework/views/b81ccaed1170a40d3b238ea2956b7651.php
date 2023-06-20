
   
<?php $__env->startSection('content'); ?>
<div class="crud">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Siswa</h2>
            </div>
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
  
    <form action="<?php echo e(route('students.update',$student->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="<?php echo e($student->nama); ?>" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIS:</strong>
                    <input type="text" name="NIS" value="<?php echo e($student->NIS); ?>" class="form-control" placeholder="NIS">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <input type="text" name="jenis_kelamin" value="<?php echo e($student->jenis_kelamin); ?>" class="form-control" placeholder="Jenis Kelamin">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas:</strong>
                    <input type="text" name="kelas" value="<?php echo e($student->kelas); ?>" class="form-control" placeholder="Kelas">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat"><?php echo e($student->alamat); ?></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No HP:</strong>
                    <input type="text" name="no_hp" value="<?php echo e($student->no_hp); ?>" class="form-control" placeholder="No HP">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <a class="btn btn-danger" href="<?php echo e(route('students.index')); ?>"><b>Back</b></a>
                <button type="submit" class="btn btn-success"><b>Submit</b></button>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainCrud', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobaCRUD\resources\views/edit_siswa.blade.php ENDPATH**/ ?>