<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saucersettings;
use Illuminate\Support\Facades\Storage;

class SaucersettingsController extends Controller
{
	public function index()
	{
		$datos['saucersettings']=Saucersettings::paginate(300);

		return view('saucersettings.index',$datos);
	}

	public function create()
	{
		return view('saucersettings.create');
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

		$datosSaucersettings=request()->except('_token');

		if($request->hasFile('foto')){

			$datosSaucersettings['foto']=$request->file('foto')->store('uploads','public');

		}

		Saucersettings::insert($datosSaucersettings);

		//return response()->json($datosDrinksettings);

		return redirect('saucersettings')->with('Mensaje','SUCCESSFULLY ADDED');
	}

	public function show(Saucersettings $saucersettings)
	{

	}

	public function edit($id)
	{
		$saucersettings=Saucersettings::findOrFail($id);

		return view('saucersettings.edit',compact('saucersettings'));
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

		$datosSaucersettings=request()->except(['_token','_method']);
		if($request->hasFile('foto')){

			$saucersettings=Saucersettings::findOrFail($id);
			Storage::delete('public/'.$saucersettings->foto);
			$datosSaucersettings['foto']=$request->file('foto')->store('uploads','public');

		}
		Saucersettings::where('id','=',$id)->update($datosSaucersettings);

		//$drinksettings=Drinksettings::findOrFail($id);

		//return view('drinksettings.edit',compact('drinksettings'));

		return redirect('saucersettings')->with('Mensaje','SUCCESSFULLY ADDED');		
	}

	public function destroy($id)
	{
		$saucersettings=Saucersettings::findOrFail($id);

		if (Storage::delete('public/'.$saucersettings->foto)){
			Saucersettings::destroy($id);
		}

		return redirect('saucersettings')->with('Mensaje','SUCCESSFULLY REMOVED');;
	}	
}