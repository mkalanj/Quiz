@extends('layouts.app')
@section('content')
  <div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2> ODGOVORI </h2>
    </div>
  </div>
  </div>

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th with="80px">ID</th>
      <th>ID pitanja</th>
      <th>Odgovor A</th>
      <th>Odgovor B</th>
      <th>Odgovor C</th>
      <th>Odgovor D</th>
      
      <th with="140px" class="text-center">
        <a href="{{route('odgovoris.create')}}" class="btn btn-success btn-sm">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($odgovori as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->pitanja_id }}</td>
        <td>{{ $value->odgovor_a }}</td>
        <td>{{ $value->odgovor_b }}</td>
        <td>{{ $value->odgovor_c }}</td>
        <td>{{ $value->odgovor_d }}</td>
        <td>
          <a class="btn btn-info btn-sm" href="{{route('odgovoris.show',$value->id_odgovoras)}}">
              <i class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm" href="{{route('odgovoris.edit',$value->id_odgovoras)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['odgovoris.destroy', $value->id_odgovoras],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
@endsection





