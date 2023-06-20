@extends('layouts.mainCrud')
  
@section('content')
<div class="crud">
    <div class="pull-left">
        <h2><b>Data Siswa</b></h2>
    </div>
   
    <div class="row mt-3">
        <table class="tabel">
            <tr>
                <td>Nama</td>
                <td>{{ $student->nama}}</td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>{{ $student->NIS}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>{{ $student->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>{{ $student->kelas}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{ $student->alamat}}</td>
            </tr>
            <tr>
                <td>No Handphone</td>
                <td>{{ $student->no_hp}}</td>
            </tr>
        </table>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <a class="btn btn-danger" href="{{ route('students.index') }}"><b>Back</b></a>
        </div>
    </div>
</div>
@endsection