<div class="row">
  <div class="col-sm-2">
      <br>
    {!! form::label('Naziv_pit',' PITANJE') !!}
    <br>
  </div>
 
      <br>
    <div class="form-group {{ $errors->has('Naziv_pit') ? 'has-error' : "" }}">
      {{ Form::text('Naziv_pit',NULL, ['class'=>'form-control', 'id'=>'Naziv_pit', 'placeholder'=>'Unesi pitanje...']) }}
      {{ $errors->first('Naziv_pit', '<p class="help-block">:message</p>') }}
      <br>
    </div>
  
</div>

<div class="row">
<div class="form-group">
    <label for="">ODABERI KATEGORIJU</label>
        <select name="kategorijas_id" class="form-control" >
        @foreach ($kategorija as $pitanjas1)
        <option value="{{$pitanjas1->id}}"
          @if($pitanjas1->id === $pitanjas->kategorijas_id)
           selected
           @endif
           >
           {{$pitanjas1->Naziv_cat}}
    </option>
        @endforeach 
    </select>
  
  </div>
</div>


<div class="form-group">
    <br>
  {{ Form::button(isset($model)? 'Update' : 'Spremi' , ['class'=>'btn btn-success center-block', 'type'=>'submit']) }}
  </br>
</div>

