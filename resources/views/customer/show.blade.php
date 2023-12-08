@extends('layouts.main')

@section('content');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование / удаление компании</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Показать компанию</li>
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
                <div class="card-header d-flex p-3">
                    <div class="mr-3">
              <a href="{{ route('customer.edit',$customer->id) }}" class="btn btn-primary">Редактировать</a>
                    </div>
            <form action="{{ route('customer.delete',$customer->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="btn btn-danger" >

            </div>

            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
              <thead>
              <tr>
              <th>ID</th>
              <th>Компания</th>
              <th>Юр.адрес</th>
              <th>Местонахождение</th>
              <th>Телефоны</th>
                  </tr>
              </thead>
              <tbody>

              <tr>
              <td> {{ $customer->id }} </td>
              <td>{{$customer->comp_name }}</td>
              <td>{{$customer->address }}</td>
              <td>{{$customer->location }}</td>
              <td>{{$customer->phones }}</td>
              </tr>
              </tbody>
              </table>
              </div>

            </div>
        </div>







        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>

@endsection