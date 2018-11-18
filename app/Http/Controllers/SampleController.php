<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\SampleRequest;

class SampleController extends Controller
{
    // Form request 
	// public function post(SampleRequest $request)
	// {
	// 	return view('sample.index');
	// }
	
	// validator作成
	public function post(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'num' => 'numeric'
		]);
		if($validator->fails()){
			/* old を使わない場合 - めんどい
				$post = $request->all();
				dd($post);
				return view('feed.index', compact('post'));
			*/

			return redirect('/feed/home')->withErrors($validator)->withInput();
		}
		return view('sample.index');
	}	
}
