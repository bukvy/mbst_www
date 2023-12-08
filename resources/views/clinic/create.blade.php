@extends('layouts.main')

@section('content');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Клиники</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Добавить Клинику</li>
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
            <form action="{{ route('clinic.store') }}" method="post">            
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Название клиники" name="name">


                 <select name="town_id" class="towns"  style="width: 100%;">
                  <option selected="selected" disabled>Выберите город</option>
                  @foreach ($towns as $town)
                  <option value={{ $town->id}}>{{$town->name}}</option>
                  @endforeach
                </select>

              

           <input type="text" class="form-control" placeholder="Контактные данные" name="contacts">
           <input type="text" class="form-control" placeholder="Дополнительная информация" name="addinfo">
           <input type="text" class="form-control" placeholder="Подразделение" name="department">
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