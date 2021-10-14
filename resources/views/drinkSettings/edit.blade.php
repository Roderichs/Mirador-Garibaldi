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

<form action="{{ url('/drinksettings/'.$drinksettings->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

	@include('drinksettings.form',['Modo'=>'editar'])

</form> 
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 