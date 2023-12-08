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
              <li class="breadcrumb-item active">Главная</li>
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
              <a href="{{ route('customer.create') }}" class="btn btn-primary">Добавить</a>
            </div>



            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
              <thead>
              <tr>
              <th>ID</th>
              <th>Компания</th>
              <th>Юридический адрес</th>
              <th>Местонахождение email</th>
              <th>Телефоны</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($customers as $customer)
              <tr>
              <td><a href="{{ route('customer.show',$customer->id) }}"> {{ $customer->id }} </a></td>
              <td>{{ $customer->comp_name }}</td>
              <td>{{ $customer->address }}</td>
              <td>{{ $customer->location }}</td>
              <td>{{ $customer->phones }}</td>
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