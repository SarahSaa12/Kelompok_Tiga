@extends('layouts.mainCrud')
   
@section('content')
<div class="crud">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Hasil Akhir</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada Beberapa Masalah dengan Masukan Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('results.update',$result->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $result->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai:</strong>
                    <input type="text" name="nilai" value="{{ $result->nilai }}" class="form-control" placeholder="Nilai">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <a class="btn btn-danger" href="{{ route('results.index') }}"><b>Back</b></a>
                <button type="submit" class="btn btn-success"><b>Submit</b></button>
            </div>
        </div>
    </form>
</div>
@endsection