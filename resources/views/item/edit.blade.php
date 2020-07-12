@extends('adminlte.master')
@section('content')
<div class="ml-3">
  <div class="card card-primay">
    <div class="card-header">
      <h2 class="card-title"> ---  Edit Pertanyaan  ---</h2>
    </div>
      <form role="form" action="{{ url('/pertanyaan/'.$item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="ml-3">
          <div class="form-group">
              <label for="judul">JUDUL</label>
              <input type="text" class="form-control" id="judul" name="judul" value="{{ $item->judul }}" placeholder="Judul Artikel">
          </div>
          <div class="form-group">
              <label for="isi">isi</label>
              <input type="text-area" class="form-control" id="isi" name="isi" value="{{ $item->isi }}" placeholder="Deskripsi Artikel">
          </div>
          <div class="mt-3 mb-3">
            <button type="submit" class="btn btn-primary">Save Edit</button>
            <a href="{{ url('/pertanyaan') }}" class="btn btn-default">Cancel</a>
          </div>
        </div>
      </form>
  </div>
</div>
@endsection