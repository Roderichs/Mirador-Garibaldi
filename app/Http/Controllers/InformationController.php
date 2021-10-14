<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
	public function information(){
		return view('information');
	}
}