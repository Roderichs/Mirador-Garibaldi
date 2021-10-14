<!-- NOMBRE -->
<div class="form-group">
	
	<label for="nombre" class="control-label">{{ 'Name' }}</label>

	<input type="text" class="form-control {{ $errors->has('nombre')?'is-invalid':'' }} is-invalid" name="nombre" id="nombre"
		value="{{ isset($drinksettings->nombre)?$drinksettings->nombre:old('nombre') }}"
	>

		{!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}

</div>

<!-- DESCRIPCIÓN -->
<div class="form-group">
	
	<label for="descripcion" class="control-label">{{ 'Description' }}</label>

	<input type="text" class="form-control {{ $errors->has('descripcion')?'is-invalid':'' }}" name="descripcion" id="descripcion"
		value="{{ isset($drinksettings->descripcion)?$drinksettings->descripcion:old('descripcion') }}"
	>

		{!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>') !!}

</div>

<!-- PRECIO -->
<div class="form-group">

	<label for="precio" class="control-label">{{ 'Price' }}</label>

	<input type="text" class="form-control {{ $errors->has('precio')?'is-invalid':'' }}" name="precio" id="precio"
		value="{{ isset($drinksettings->precio)?$drinksettings->precio:old('precio') }}"
	>

		{!! $errors->first('precio','<div class="invalid-feedback">:message</div>') !!}

</div>

<!-- FOTO -->
<div class="form-group">
	
	<label for="foto" class="control-label">{{ 'Photo' }}</label>
	@if(isset($drinksettings->foto))
		<br/>
		<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$drinksettings->foto }}" alt="" width="200">
		<br/>
	@endif
	<input type="file" class="btn btn-primary form-control {{ $errors->has('foto')?'is-invalid':'' }}" name="foto" id="foto" value="">
	{!! $errors->first('foto','<div class="invalid-feedback">:message</div>') !!}
</div>	

	<input type="submit" class="btn btn-success" 
		value="	{{ $Modo=='crear' ? 'Add':'Modify' }}">

	<a class="btn btn-primary" href="{{ url('drinksettings') }}">Return</a>