<div class="row">
  <div class="col-sm-2">
      <br>
    {!! form::label('Naziv_cat','KATEGORIJA') !!}
    <br>
  </div>
    <br>
    <div class="form-group  {{ $errors->has('Naziv_cat') ? 'has-error' : "" }}">
      {{ Form::text('Naziv_cat',NULL, ['class'=>'form-control', 'id'=>'Naziv_cat', 'placeholder'=>'Unesi naziv katgorije...']) }}
      {{ $errors->first('Naziv_cat', '<p class="help-block">:message</p>') }}
      <br>
    </div>
  
</div>



<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'Spremi' , ['class'=>'btn btn-success center-block', 'type'=>'submit']) }}
  <br>
   <a href="http://localhost:8000/kategorijas" class="btn btn-default center-block">Natrag na kategorije</a>
</div>

