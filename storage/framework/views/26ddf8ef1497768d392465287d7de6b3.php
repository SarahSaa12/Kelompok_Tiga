

<?php $__env->startSection('container'); ?>
<div>
    <h1 class="h2">Daftar Menu Media Pembelajaran "Perangkat Keras Komputer"</h1>
    <p>Pilih salah satu menu dibawah ini :</p>
    <div class="div-2">
        <div class="grid-item">
            <a class="ahome" href="petaKonsep">
            <div class="satu">PETA KONSEP</div>
            <div class="dua"><img src="images/mindmap.png" alt="Gambar_mindmap"></div></a>
        </div>
        <div class="grid-item">
            <a class="ahome" href="./hardware">
            <div class="satu">MATERI</div>
            <div class="dua"><img src="images/materi.png" alt="Gambar_materi"></div></a>
        </div>
        <div class="grid-item">
            <a class="ahome" href="./capaian">
            <div class="satu">CAPAIAN</div>
            <div class="dua"><img src="images/ki&kd.png" alt="Gambar_ki&kd"></div></a>
        </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainSiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobaCRUD\resources\views/materi.blade.php ENDPATH**/ ?>