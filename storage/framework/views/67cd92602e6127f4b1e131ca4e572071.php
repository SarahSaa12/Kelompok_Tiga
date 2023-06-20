

<?php $__env->startSection('container'); ?>
<div>
  <table class="table-welcome">
    <tr>
      <td>
        <img class="img-welcome" src="images/bg-belajar.png" alt="Gambar_wolcomeSiswa">
      </td>
      <td class="teks-welcome">
        <h2><b>Selamat Datang di Halaman Siswa</b></h2>
        <p>Pada halaman ini siswa dapat mepelajari materi perangkat keras komputer yang mana setelah siswa mempelajari materi tersebut siswa dapat melakukan latihan berbasis game pada menu Latihan dan setelah siswa melakukan latihan dengan game maka siswa juga dapat melakukan evaluasi akhir pada menu evaluasi yang mana di dalamnya terdapat soal pilihan ganda.<br></p>
        <a class="btn btn-primary" href="./bantuanSiswa"><b>? Bantuan</b></a>
      </td>
    </tr>
  </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.mainSiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjekAkhirPEMWEB2\resources\views/dashboardSiswa.blade.php ENDPATH**/ ?>