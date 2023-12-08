@extends('layouts.main')

@section('content');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование компании</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Редактировать компанию</li>
            </ol>
          </div><!-- /.col -->

          <form action="{{ route('customer.update',$customer->id) }}" method="post">
            @csrf
            @method('patch');
            <div class="form-group">
              <input type="text" class="form-control" value="{{ $customer->comp_name }}" placeholder="Название компании" name="comp_name">
              <input type="text" class="form-control" value="{{ $customer->address }}"  placeholder="Юр. адрес" name="adddress">
              <input type="text" class="form-control" value="{{ $customer->location }}"  placeholder="Местонахождение и email" name="location">
              <input type="text" class="form-control" value="{{ $customer->phones }}"  placeholder="Телефоны" name="pnones">
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