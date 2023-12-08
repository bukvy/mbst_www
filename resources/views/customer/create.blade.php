@extends('layouts.main')

@section('content');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Компании</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Добавить Компанию</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <form action="{{ route('customer.store') }}" method="post">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Компания" name="comp_name">
              <input type="text" class="form-control" placeholder="Юр. адрес" name="address">
              <input type="text" class="form-control" placeholder="Местонахождение и email" name="location">
              <input type="text" class="form-control" placeholder="Телефоны" name="phones">
              <input type="submit" class="btn btn-primary" value="Добавить">
            </div>


          </form>

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection