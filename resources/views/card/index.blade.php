@extends('layouts.main')

@section('content');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Карты</h1>
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
              {{--<a href="{{ route('card.create') }}" class="btn btn-primary">Добавить</a> --}}
            </div>



            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                <th>ID</th>
                <th>Лечение</th>
                <th>Часы</th>
                <th>Доктор</th>
                <th>Время записи</th>
                <th>Модель  Аппарата</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($cards as $card) 
                  @php
               
                  $myuser= $users->where('id', $card->user_id)->first();    
                  @endphp
  
  @php
               
  $mydevice= $devices->where('id', 1)->first();    
  @endphp

                <tr>
                <td> {{ $card->id }} </td>
                <td>{{$card->treatment_name}}</td>
                <td>{{$card->hours }}</td>
                <td>{{$myuser->fio }}</td>
                <td>{{$card->created_at }}</td>
                <td>{{ $mydevice->name }}</td>
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