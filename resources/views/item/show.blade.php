@extends('adminlte.master')
@section('content')
  <div class="ml-3 mt-3">
    <h3>Detail Artikel</h3>
      <p>Judul : {{ $item->judul }}</p>
      <p>Isi : {{ $item->isi }}</p>
      @foreach($item->tags as $tag)
        <button class="btn btn-default btn-sm">{{ $tag->tag_name }}</button>
      @endforeach
    <h2>Jawaban</h2>
      @foreach ($jawabans as $jawaban)
        <p>{{ $jawaban->jawaban }}</p>
      @endforeach
      <a href="/pertanyaan" class="btn btn-primary">
        Back
      </a>
  </div>
@endsection