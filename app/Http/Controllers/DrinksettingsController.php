<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drinksettings;
use Illuminate\Support\Facades\Storage;

class DrinksettingsController extends Controller
{
	public function index()
	{
		$datos['drinksettings']=Drinksettings::paginate(300);

		return view('drinksettings.index',$datos);
	}

	public function create()
	{
		return view('drinksettings.create');
	}

	public function store(Request $request)
	{
		$Campos=[
			'nombre' => 'required|string|max:100',
			'descripcion' => 'required|string|max:100',
			'precio' => 'required|numeric',
			'foto' => 'required|max:10000|mimes:jpeg,png,jpg'
		];

		$Mensaje=["required" => 'The :attribute is required'];

		$this->validate($request,$Campos,$Mensaje);

		//$datosDrinkSettings=request()->all();

		$datosDrinksettings=request()->except('_token');

		if($request->hasFile('foto')){

			$datosDrinksettings['foto']=$request->file('foto')->store('uploads','public');

		}

		Drinksettings::insert($datosDrinksettings);

		//return response()->json($datosDrinksettings);

		return redirect('drinksettings')->with('Mensaje','SUCCESSFULLY ADDED');
	}

	public function show(Drinksettings $drinksettings)
	{

	}

	public function edit($id)
	{
		$drinksettings=Drinksettings::findOrFail($id);

		return view('drinksettings.edit',compact('drinksettings'));
	}

	public function update(Request $request, $id)
	{

		$Campos=[
			'nombre' => 'required|string|max:100',
			'descripcion' => 'required|string|max:100',
			'precio' => 'required|numeric',
		];

		if($request->hasFile('foto')){
			$Campos+=['foto' => 'required|max:10000|mimes:jpeg,png,jpg'];
		}

		$Mensaje=["required" => 'The :attribute is required'];

		$this->validate($request,$Campos,$Mensaje);	

		$datosDrinksettings=request()->except(['_token','_method']);
		if($request->hasFile('foto')){

			$drinksettings=Drinksettings::findOrFail($id);
			Storage::delete('public/'.$drinksettings->foto);
			$datosDrinksettings['foto']=$request->file('foto')->store('uploads','public');

		}
		Drinksettings::where('id','=',$id)->update($datosDrinksettings);

		//$drinksettings=Drinksettings::findOrFail($id);

		//return view('drinksettings.edit',compact('drinksettings'));

		return redirect('drinksettings')->with('Mensaje','SUCCESSFULLY ADDED');		
	}

	public function destroy($id)
	{
		$drinksettings=Drinksettings::findOrFail($id);

		if (Storage::delete('public/'.$drinksettings->foto)){
			Drinksettings::destroy($id);
		}

		return redirect('drinksettings')->with('Mensaje','SUCCESSFULLY REMOVED');;
	}	
}