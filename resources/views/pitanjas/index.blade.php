@extends('layouts.app')
@section('content')
  <div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2>PITANJA </h2>
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
      <th>Naziv pitanja</th>
      <th>ID kategorije</th>
      
      <th with="140px" class="text-center">
        <a href="{{route('pitanjas.create')}}" class="btn btn-success btn-sm">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($pitanja as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->Naziv_pit }}</td>
        <td>{{ $value->kategorijas_id }}</td>
        
        <td>
          <a class="btn btn-info btn-sm" href="{{route('pitanjas.show',$value->id_pitanja)}}">
              <i class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm" href="{{route('pitanjas.edit',$value->id_pitanja)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['pitanjas.destroy', $value->id_pitanja],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
@endsection



