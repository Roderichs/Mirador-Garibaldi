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

<a href="{{ url('drinksettings/create') }}" class="btn btn-success">
	Create Drinks
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
	@foreach($drinksettings as $drinksettings)	
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>	
				<img src="{{ asset('storage').'/'.$drinksettings->foto }}" 
					class="img-thumbnail img-fluid" alt="" width="100">
			</td>
			<td>{{ $drinksettings->nombre }}</td>
			<td>{{ $drinksettings->descripcion }}</td>
			<td>{{ $drinksettings->precio }}</td>
			<td>

			<a class="btn btn-warning" href="{{ url('/drinksettings/'.$drinksettings->id.'/edit') }}">
				Edit
			</a>	

			<form method="post" action="{{ url('/drinksettings/'.$drinksettings->id) }}" style="display:inline; ">
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