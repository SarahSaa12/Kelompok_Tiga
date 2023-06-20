@extends('layouts.mainAdmin')

@section('container')
<div>
  <div>
    <table>
      <tr>
        <td>
          <img class="img-welcome" src="images/welcomeAdmin.png" alt="Gambar_wolcomeAdmin">
        </td>
        <td class="teks-welcome">
          <h2><b>Selamat Datang di Halaman Admin</b></h2>
          <p>Pada halaman ini guru bisa melihat data siapa saja siswa dan guru yang telah mendaftar dan guru juga bisa melakukan tambah, lihat, edit dan hapus pada data-data siswa tersebut, guru juga bisa melihat nilai dari hasil evaluasi belajar siswa.<br></p>
          <a class="btn btn-primary" href="./bantuanAdmkin"><b>? Bantuan</b></a>
        </td>
      </tr>
    </table>
  </div>
@endsection