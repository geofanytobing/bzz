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
            <form action="{{url('admin/logistic/update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$logistic['data']['id']}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode</label>
                  <input type="text" class="form-control" value="{{$logistic ['data']['kode']}}" name="kode">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tipe</label>
                  <input type="text" class="form-control" value="{{$logistic ['data']['tipe']}}" name="tipe">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah</label>
                  <input type="number" class="form-control" value="{{$logistic ['data']['jumlah']}}" name="jumlah">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" style="float: right;">Update</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
         
      <!-- /.row -->
    </section>
    @endsection