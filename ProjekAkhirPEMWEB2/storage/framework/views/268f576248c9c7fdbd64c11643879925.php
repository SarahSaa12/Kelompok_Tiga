

<?php $__env->startSection('container'); ?>
<div>
  <table>
    <tr>
      <td>
        <img class="img-welcome" src="images/welcomeGuru.png" alt="Gambar_wolcomeGuru">
      </td>
      <td class="teks-welcome">
        <h2><b>Selamat Datang di Halaman Guru</b></h2>
        <p>Pada halaman ini guru bisa melihat data siapa saja siswa yang telah mendaftar dan guru juga bisa melakukan tambah, lihat, edit dan hapus pada data-data siswa tersebut, guru juga bisa melihat nilai dari hasil evaluasi belajar siswa.<br></p>
        <a class="btn btn-primary" href="./bantuanGuru"><b>? Bantuan</b></a>
      </td>
    </tr>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainGuru', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobaCRUD\resources\views/dashboardGuru.blade.php ENDPATH**/ ?>