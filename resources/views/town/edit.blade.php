@extends('layouts.main')

@section('content');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование города</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Редактировать город</li>
            </ol>
          </div><!-- /.col -->

          <form action="{{ route('town.update',$town->id) }}" method="post">
            @csrf
            @method('patch');
            <div class="form-group">
              <input type="text" class="form-control" value="{{ $town->name }}" placeholder="Город" name="name">
              <input type="text" class="form-control" value="{{ $town->region }}"  placeholder="Область" name="region">
              <input type="text" class="form-control" value="{{ $town->timezone }}"  placeholder="Временная зона" name="timezone">
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