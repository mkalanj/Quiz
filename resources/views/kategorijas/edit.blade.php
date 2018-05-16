@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($kategorija,['route'=>['kategorijas.update',$kategorija->id],'method'=>'PATCH']) }}
      @include('kategorijas.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection

