@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($kategorija,['route'=>['pitanjas.update',$kategorija->id_pitanja],'method'=>'PATCH']) }}
      @include('pitanjas.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection

