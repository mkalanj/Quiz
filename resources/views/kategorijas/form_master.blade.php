<div class="row">
  <div class="col-sm-2">
    {!! form::label('Naziv_cat','Kategorija') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('Naziv_cat') ? 'has-error' : "" }}">
      {{ Form::text('Naziv_cat',NULL, ['class'=>'form-control', 'id'=>'Naziv_cat', 'placeholder'=>'Unesi naziv katgorije...']) }}
      {{ $errors->first('Naziv_cat', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>



<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'Spremi' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>

