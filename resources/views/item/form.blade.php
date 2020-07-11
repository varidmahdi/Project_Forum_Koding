@extends('adminlte.master')
@section('content')
<div class="ml-3">

    <div class="card card-primay">
        <div class="card-header">
        <h1 class="card-title"> PERTANYAAN BARU</h1>
        </div>
        <form role="form" action="{{ url('/pertanyaan') }}" method="post">
            @csrf
        <div class="ml-3">
        <div class="form-group">
            <label for="judul">JUDUL</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Pertanyaan">
        </div>
        <div class="form-group">
            <label for="isi">isi</label>
            <input type="text-area" class="form-control" id="isi" name="isi" placeholder="Isi Pertanyaan">
        </div>
        <div class="form-group">
            <label for="tags">tag</label>
            <input type="text" class="form-control" id="tag" name="tags" placeholder="Tags">
        </div>


        <div class="mt-3 mb-3">
        <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
        </div>
        </div>
        </form>
    </div>
</div>
@endsection