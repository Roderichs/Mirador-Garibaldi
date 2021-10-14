@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card center">
                <div class="card-header text-white bg-dark"><CENTER>{{ __('DATA MANAGER') }}</CENTER></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

@if(Session::has('Mensaje'))

	<div class="alert alert-success" role="alert">
		{{Session::get('Mensaje')}}
	</div>

@endif

<a href="{{ url('saucersettings/create') }}" class="btn btn-success">
	Create Saucer
</a>
<a href="{{ url('home') }}" class="btn btn-primary">
	Home
</a>
<br/>
<br/>

<table class="table table-light table-hover">
	
	<thead class="thead-light">
		
		<tr>
			<th>#</th>
			<th>Foto</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Actions</th>
		</tr>

	</thead>

	<tbody>
	@foreach($saucersettings as $saucersettings)	
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>	
				<img src="{{ asset('storage').'/'.$saucersettings->foto }}" 
					class="img-thumbnail img-fluid" alt="" width="100">
			</td>
			<td>{{ $saucersettings->nombre }}</td>
			<td>{{ $saucersettings->descripcion }}</td>
			<td>{{ $saucersettings->precio }}</td>
			<td>

			<a class="btn btn-warning" href="{{ url('/saucersettings/'.$saucersettings->id.'/edit') }}">
				Edit
			</a>	

			<form method="post" action="{{ url('/saucersettings/'.$saucersettings->id) }}" style="display:inline; ">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
			<button class="btn btn-danger" type="submit" 
					onclick="return confirm('¿Delete?');">Delete</button>

			</form>

			</td>
		</tr>
	@endforeach
	</tbody>

</table>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 