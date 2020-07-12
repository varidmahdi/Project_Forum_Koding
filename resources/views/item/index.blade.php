@extends('adminlte.master')
@section('content')


<section class="content">
  <div class="container-fluid mt-3">
    <div class="row">
    
      <!-- /.col -->
      <div class="col">
      <a href="{{ url('/pertanyaan/create') }}" class="btn btn-primary">
    Create New
  </a>
        @foreach($items as $key => $item)
        <div class="card">
          <div class="card-header p-2">
            <h2>Pertanyaan#{{ $key+1 }}</h2>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{ url('/adminlte/dist/img/user1-128x128.jpg') }}" alt="user image">
                    <span class="username">
                      <a href="#">{{ $item->judul }}</a>
                    </span>
                    <span class="description">{{ $item->created_at }}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                  {{ $item->isi }}
                  </p>

                  <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-thumbs-down mr-1"></i> Dislike</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                      <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Jawaban ( )
                      </a>
                    </span>
                  </p>

                </div>
                
                <!-- /.post -->
                
                <!-- Post -->
                <!-- /.user-block -->
                     <span class="username">
                      JAWABAN ANDA
                    </span>
                  <form class="form-horizontal"  action="{{ url('/jawaban/'.$item->id) }}" method="post">
                    @csrf
                    <div class="input-group input-group-sm mb-0">
                      <input class="form-control form-control-sm" type="text" name="jawaban" placeholder="Jawaban">
                      <input type="hidden" name="pertanyaan_id" value="{{ $item->id }}">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-danger">Send</button>
                      </div>
                    </div>
                  </form>
                  <!-- 
                    <form action="{{ url('/jawaban/'.$item->id) }}" method="post">
                      @csrf
                      <input type="text" name="jawaban">
                      <input type="hidden" name="pertanyaan_id" value="{{ $item->id }}">
                      <button type="submit" class="btn btn-success">Submit Jawaban</button>
                  </form>
                   -->
                
                  <div class="mt-3 mb-3">
                    <a href="{{ url('/pertanyaan/'.$item->id) }}" class="btn btn-primary">
                        show
                    </a>
                    <a href="{{ url('/pertanyaan/'.$item->id.'/edit') }}" class="btn btn-sm btn-default">
                        edit
                    </a>
                    <form action="{{ url('/pertanyaan/'.$item->id) }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">delete </button>
                    </form>
                  </div>
                <!-- /.post -->
              </div>
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        @endforeach
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>

    
  </div><!-- /.container-fluid -->
  
</section>


@endsection