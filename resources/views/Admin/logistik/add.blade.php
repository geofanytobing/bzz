@extends('layouts.admin')
@section('content')
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Logistik</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('admin/logistic/post')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode</label>
                  <input type="text" class="form-control" name="kode" placeholder="Kode" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tipe</label>
                  <input type="text" class="form-control" name="tipe" placeholder="Tipe" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah</label>
                  <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" required>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" style="float: right;">Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
         
      <!-- /.row -->
    </section>
    @endsection