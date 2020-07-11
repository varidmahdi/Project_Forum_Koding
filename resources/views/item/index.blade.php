@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-3 mb-3">
<h1>Data Pertanyaan</h1>
<a href="/pertanyaan/create" class="btn btn-primary">
    Create New
</a>
<div class="mt-3">
<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Tag</th>
                <th scope="col">Form Jawaban</th>
                <th scope="col">Lihat Jawaban</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $key => $item)
            <tr>
            <th scope="row">{{ $key+1 }}</th>
                <td>{{$item->judul}}</td>
                <td>{{$item->isi}}</td>
                <td>{{$item->tag}}</td>
                <td>
                    <form action="{{ url('/jawaban/'.$item->id) }}" method="post">
                        @csrf
                        <input type="text" name="jawaban">
                        <input type="hidden" name="pertanyaan_id" value="{{ $item->id }}">
                        <button type="submit" class="btn btn-success">Submit Jawaban</button>
                    </form>
                </td>
                <td>
                    <a href="{{ url('/jawaban/'.$item->id) }}">
                        <button type="submit" class="btn btn-success">Lihat Jawaban</button>
                    </a>
                </td>
                <td>
                <a href="/pertanyaan/{{$item->id}}" class="btn btn-primary">
                    show
                </a>
                <a href="/pertanyaan/{{$item->id}}/edit" class="btn btn-sm btn-default">
                    edit
                </a>
                <form action="/pertanyaan/{{$item->id}}" method="post" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                delete </button>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection