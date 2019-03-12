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
            
          </div>
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Tipe</th>
              <th>Jumlah</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
      @foreach($logistic['data'] as $logistics)
          <tbody>
            <tr>
              <th scope="row">#</th>
              <td>{{$logistics['kode']}}</td>
              <td>{{$logistics['tipe']}}</td>
              <td>{{$logistics['jumlah']}}</td>
              <td>
                <a href="{{url('admin/logistic/edit/'.$logistics['id'])}}" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                 <a href="{{url('admin/logistic/delete/'.$logistics['id'])}}" onclick="return confirm('anda yakin untuk menghapusnya ?')"class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
        <a href="{{url('admin/logistic/add')}}" class="btn btn-outline-primary btn-lg"><i class="fa fa-plus-square"></i></a>
        </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
         
      <!-- /.row -->
    </section>
    @endsection