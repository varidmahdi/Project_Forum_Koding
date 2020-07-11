@extends('adminlte.master')

@section('content')
    <div class="card">
      @foreach ($jawabans as $jawaban)
          <h1>{{ $jawaban->jawaban }}</h1>
      @endforeach
      <a href="{{ url('/pertanyaan') }}">
        <button type="submit" class="btn btn-success">kembali</button>
    </a>
    </div>
@endsection