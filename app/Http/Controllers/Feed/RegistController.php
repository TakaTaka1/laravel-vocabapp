<?php

namespace App\Http\Controllers\Feed;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistController extends Controller
{
    //
    public function index(){
    	return view('feed.index');
    }

    public function edit(Request $request ,$id=null){
    	// TODO 登録処理
    	return view('feed.edit');

    }
}
