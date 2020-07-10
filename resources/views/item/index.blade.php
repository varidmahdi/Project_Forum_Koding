@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-3 mb-3">
<h1>Data PERTANYAAN</h1>
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
                <th scope="col">action</th>
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