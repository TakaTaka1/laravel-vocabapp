<?php

namespace App\Http\Controllers\Feed;

use Illuminate\Http\Request;
use App\StaticPage;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegistController extends Controller
{
    //
    public function index(){
    	$static = new StaticPage;
    	$getAll = $static->get()->all();
    	return view('feed.index', compact('getAll'));
    }

    public function edit(Request $request ,$id=null){
    	// TODO 登録処理
    	return view('feed.edit');

    }
}
