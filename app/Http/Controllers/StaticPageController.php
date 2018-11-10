<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaticPage;
use Log;

class StaticPageController extends Controller
{
    //
    public function create(Request $request){
    	$static = new StaticPage;
    	$post = $request->all();
    	if(!empty($post['slug'])){
    		$static->fill($post)->save();
    	}

    	return redirect()->route('user.feed');
    }

    public function showPage($id){
    	// TODO user_id
    	$linkElm = new StaticPage;
    	$getContents = $linkElm->where('id',$id)->first();
    	return view('static.index', compact('getContents'));	
    }
}
