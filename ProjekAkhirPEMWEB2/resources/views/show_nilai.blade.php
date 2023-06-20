@extends('layouts.mainCrud')
  
@section('content')
<div class="crud">
    <div class="pull-left">
        <h2><b>Data Hasil Akhir</b></h2>
    </div>
   
    <div class="row mt-3">
        <table class="tabel">
            <tr>
                <td>Nama</td>
                <td>{{ $result->nama}}</td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>{{ $result->nilai}}</td>
            </tr>
        </table>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <a class="btn btn-danger" href="{{ route('results.index') }}"><b>Back</b></a>
        </div>
    </div>
</div>
@endsection