<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class DrinkController extends Controller
{
	public function drink(){
		return view('drink');
	}
}