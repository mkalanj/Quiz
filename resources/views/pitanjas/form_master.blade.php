<div class="row">
  <div class="col-sm-2">
    {!! form::label('Naziv_pit','Pitanje') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('Naziv_pit') ? 'has-error' : "" }}">
      {{ Form::text('Naziv_pit',NULL, ['class'=>'form-control', 'id'=>'Naziv_pit', 'placeholder'=>'Unesi pitanje...']) }}
      {{ $errors->first('Naziv_pit', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
<div class="form-group">
    <label for="">Odaberi kategoriju</label>
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
  {{ Form::button(isset($model)? 'Update' : 'Spremi' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>

