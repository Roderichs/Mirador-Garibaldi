@extends('layouts.app')

@section('content')

<div class="container">

	@if(count($errors)>0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

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

<form action="{{ url('/drinksettings') }}" class="form-horizintal" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}

	@include('drinksettings.form',['Modo'=>'crear'])


</form> 
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 