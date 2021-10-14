<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class CharterController extends Controller
{
	public function charter(){
		return view('charter');
	}
}