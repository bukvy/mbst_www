@extends('layouts.main')

@section('content');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование склада</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Редактировать скдад</li>
            </ol>
          </div><!-- /.col -->

          <form action="{{ route('warehouse.update',$town->id) }}" method="post">
            @csrf
            @method('patch');
            <div class="form-group">
              <input type="text" class="form-control" value="{{ $warehouse->name }}" placeholder="Склад" name="name">
              <input type="text" class="form-control" value="{{ $warehouse->company_id }}"  placeholder="Компания" name="company_id">
              <input type="text" class="form-control" value="{{ $warehouse->addinfo }}"  placeholder="Временная зона" name="">
              <input type="submit" class="btn btn-primary" value="Редактировать">
            </div>


          </form>




        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection