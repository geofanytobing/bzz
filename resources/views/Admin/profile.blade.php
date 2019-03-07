@extends('layouts.admin')
@section('content')
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('/pesan')}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Anjing 1</label>
                  <input  class="form-control"  placeholder="Anjing 1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Anjing 2</label>
                  <input  class="form-control" placeholder="Anjing 2">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Anjing 3</label>
                  <input  class="form-control" placeholder="Anjing 3">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Anjing 4</label>
                  <input  class="form-control" placeholder="Anjing 4">
                </div>
      
                
           
      
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
         
      <!-- /.row -->
    </section>
    @endsection