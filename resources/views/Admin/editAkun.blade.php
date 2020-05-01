@extends('Templates/Admin/index')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Account</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Account</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
            @endif
            <div class="card-header">
              <a href='{{ URL::previous() }}' class='btn btn-primary'><i class="fas fa-chevron-left"></i>  Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="/admin/manager/akun/{{$user->id}}/update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name}}">
                  @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$user->email}}">
                  @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="kelas">Class</label>
                  <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{$user->kelas}}">
                  @error('kelas')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="absen">Absent</label>
                  <input type="text" class="form-control @error('absen') is-invalid @enderror" id="absen" name="absen" value="{{$user->absen}}">
                  @error('absen')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection

{{-- @push('scripts')
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
    
@endpush --}}
