<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class validationEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function customVali()
            {
                    return view('auth/valid');
            }
            
	public function customValiPost(Request $request)
	{
		$this->validate($request, [
	        'title' => 'required|string_not_equal',
	    ]);
		print_r('done');
                return view('auth/valid');
	}

}
