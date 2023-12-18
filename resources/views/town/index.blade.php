@extends('layouts.main')

@section('content');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Города</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href={{ route('main.index') }}>Главная</a></li>
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

          <div class="col-12">
            <div class="card">
              <a href="{{ route('town.create') }}" class="btn btn-primary">Добавить</a>
            </div>



            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
              <thead>
              <tr>
              <th>ID</th>
              <th>Город</th>
              <th>Область</th>
              <th>Временная зона</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($towns as $town)
              <tr>
              <td><a href="{{ route('town.show',$town->id) }}"> {{ $town->id }} </a></td>
              <td>{{ $town->name }}</td>
              <td>{{ $town->region }}</td>
              <td>{{ $town->timezone }}</td>
              </tr>
              @endforeach
              </tbody>
              </table>
              </div>

            </div>







        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection