<div class="row">
<div class="form-group">
    <label for="">Odaberi pitanje</label>
        <select name="pitanja_id" class="form-control" >
        @foreach ($pitanja as $odg)
        <option value="{{$odg->id_pitanja}}"
          @if($odg->id_pitanja === $odgovoris->pitanja_id)
           selected
           @endif
           >
           {{$odg->Naziv_pit}}
    </option>
        @endforeach 
    </select>
  
  </div>
</div>


<div class="row">
  <div class="col-sm-2">
    {!! form::label('odgovor_a','Odgovor A') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('odgovor_a') ? 'has-error' : "" }}">
      {{ Form::text('odgovor_a',NULL, ['class'=>'form-control', 'id'=>'odgovor_a', 'placeholder'=>'Unesi odgovor...']) }}
      {{ $errors->first('odgovor_a', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('odgovor_b','Odgovor B') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('odgovor_b') ? 'has-error' : "" }}">
      {{ Form::text('odgovor_b',NULL, ['class'=>'form-control', 'id'=>'odgovor_b', 'placeholder'=>'Unesi odgovor...']) }}
      {{ $errors->first('odgovor_b', '<p class="help-block">:message</p>') }}
    </div>
  </div>
    
    <div class="row">
  <div class="col-sm-2">
    {!! form::label('odgovor_c','Odgovor C') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('odgovor_c') ? 'has-error' : "" }}">
      {{ Form::text('odgovor_c',NULL, ['class'=>'form-control', 'id'=>'odgovor_c', 'placeholder'=>'Unesi odgovor...']) }}
      {{ $errors->first('odgovor_c', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>
    
    
    <div class="row">
  <div class="col-sm-2">
    {!! form::label('odgovor_d','Odgovor D') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('odgovor_d') ? 'has-error' : "" }}">
      {{ Form::text('odgovor_d',NULL, ['class'=>'form-control', 'id'=>'odgovor_d', 'placeholder'=>'Unesi odgovor...']) }}
      {{ $errors->first('odgovor_d', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>
    
</div>



<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'Spremi' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>


