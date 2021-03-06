@extends('layouts.app')
@section('content')
  <div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2 align="center">KATEGORIJA </h2>
      <br>
    </div>
  </div>
  </div>

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

  <table class="table table-striped">
    <tr>
      <th with="80px">ID</th>
      <th>Naziv kategorije</th>
      
      <th with="140px" class="text-center">
        <a href="{{route('kategorijas.create')}}" class="btn btn-success btn-default">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($kategorija as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->Naziv_cat }}</td>
        
        <td>
          <a class="btn btn-primary btn-default" href="{{route('kategorijas.show',$value->id)}}">
              <i class="glyphicon glyphicon-eye-open"></i></a>
          <a class="btn btn-primary btn-default" href="{{route('kategorijas.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
              
            {!! Form::open(['method' => 'DELETE','route' => ['kategorijas.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-default">
                  <i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
      
    @endforeach
  </table>
  
  
  <div class="text-center">
<div class="btn-group-vertical">
    

    <a href="http://localhost:8000"  class="btn btn-info ">Pocetna stranica</a>
 <br>
 <a href="http://localhost:8000/pitanjas"  class="btn btn-info ">Pitanja</a>

     </div>
      </div>
    

  

@endsection


