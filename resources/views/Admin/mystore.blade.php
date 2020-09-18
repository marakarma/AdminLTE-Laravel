@extends('Templates/Admin/index')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Store Manager</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Store Manager</li>
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
              <a href="/admin/web/mystore/tambah" class="btn btn-primary btn-sm float-right">Add Data</a>
             
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name Store</th>
                    <th>Address Store</th>
                    <th>Store Type</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($stores as $item)                    
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name_store}}</td>
                  <td>{{$item->address}}</td>
                  <td>{{$item->type_store}}</td>
                  <td>{{$item->created_at}}</td>
                  <td>
                    <a href="/admin/web/mystore/{{$item->id}}/edit"class="btn btn-primary btn-sm">Edit</a>    
                      <form action="/admin/web/mystore/{{$item->id}}/hapus"method="post" class="d-inline">
                      @method('delete')            
                      @csrf
                        <button type="submit"class="btn btn-danger btn-sm">Delete</button>
                      </form>
                  </td>
                </tr>
                @endforeach
                </tbody>                
              </table>
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
@push('scripts')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush