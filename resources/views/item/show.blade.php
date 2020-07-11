@extends('adminlte.master')
@section('content')

<section class="content">
  <div class="container-fluid mt-3">
    <div class="row">
      <!-- /.col -->
      <div class="col">
        <div class="card">
          <div class="card-header p-2">
            <h2>Pertanyaan</h2>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{ url('/adminlte/dist/img/user1-128x128.jpg') }}" alt="user image">
                    <span class="username">
                      <a href="#">Kelompok 7</a>
                    </span>
                    <span class="description">{{ $item->judul }}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                  {{ $item->isi }}
                  </p>

                  <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                      <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Jawaban (5)
                      </a>
                    </span>
                  </p>
                </div>
                <!-- /.post -->
                
                <!-- Post -->
                <!-- /.user-block -->
                  <p>
                @foreach($item->tags as $tag)
                        <button class="btn btn-default btn-sm">{{ $tag->tag_name }}</button>
                @endforeach
                  </p>

                  <form class="form-horizontal">
                    <div class="input-group input-group-sm mb-0">
                      <input class="form-control form-control-sm" placeholder="Jawaban">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-danger">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->
              </div>
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <div class="row">
      <!-- /.col -->
      <div class="col">
        <div class="card">
          <div class="card-header p-2">
            <h2>Jawaban</h2>
          </div><!-- /.card-header -->
          @foreach ($jawabans as $jawaban)
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{ url('/adminlte/dist/img/user1-128x128.jpg') }}" alt="user image">
                    <span class="username">
                      <a href="#">Kelompok 13</a>
                    </span>
                    <span class="description">{{ $item->judul }}</span>
                  </div>
                  <!-- /.user-block -->
                  
        
                <p>{{ $jawaban->jawaban }}</p>
            
     

                  <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                      <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Comments (5)
                      </a>
                    </span>
                  </p>
                </div>
                <!-- /.post -->
                
                <!-- /.post -->
              </div>
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
          @endforeach
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <a href="/pertanyaan" class="btn btn-primary">Back</a>
  </div><!-- /.container-fluid -->
  
</section>


=======
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
      <a href="{{ url('/pertanyaan') }}" class="btn btn-primary">
        Back
      </a>
  </div>
>>>>>>> d03a9e817c72527dc34ede1306f478eda9135b58
@endsection