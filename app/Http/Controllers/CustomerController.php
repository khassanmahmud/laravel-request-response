<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller {

	public function __construct() {

	}

	public function customerInfo(Request $request) {

		$data = [
			'retrieve all the inputs' 				   => $request->all(),
			'retrieve all the input values' 		   => $request->input(),
			'retrieve all the query string values' 	   => $request->query(),
			'retrieve an input' 					   => $request->input('name'),
			'retrieve an input from query string'      => $request->query('name'),
			'retrieve an input via dynamic properties' => $request->name,
			'retrieve a portion of input' 			   => $request->only(['name', 'country']),
			'retrieve a portion of input except' 	   => $request->except(['name', 'country']),
			'has name input' 						   => $request->has('name') ? 'true' : 'false',
			'has age input' 						   => $request->has('age') ? 'true' : 'false',
			'has name input and not empty' 			   => $request->filled('name') ? 'true' : 'false',
			'has all input' 						   => $request->has(['name', 'country', 'position', 'gender']) ? 'true' : 'false',
			'has all input except' 					   => $request->has(['name', 'country', 'position', 'gender', 'age']) ? 'true' : 'false',
			'request path' 							   => $request->path(),
			'request url' 							   => $request->url(),
			'request full url' 						   => $request->fullUrl(),
			'request method' 						   => $request->method(),
		];

		return $data;
	}
    
}
