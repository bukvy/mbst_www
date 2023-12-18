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
              <a href="{{ route('clinic.create') }}" class="btn btn-primary">Добавить</a>
            </div>



            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
              <thead>
              <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Город</th>
              <th>Контакты</th>
              <th>Подразделение</th>
              <th>Доп. Информация</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($clinics as $clinic)
                @php
             
                $mytown= $towns->where('id', $clinic->town_id)->first();    
                @endphp
              <tr>
              <td><a href="{{ route('clinic.show',$clinic->id) }}"> {{ $clinic->id }} </a></td>
              <td>{{ $clinic->name }}</td>
              <td>{{-- $clinic->town_id --}}  {{ $mytown->name}}</td>
              <td>{{ $clinic->contacts }}</td>
              <td>{{ $clinic->department }}</td>
              <td>{{ $clinic->addinfo }}</td>
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