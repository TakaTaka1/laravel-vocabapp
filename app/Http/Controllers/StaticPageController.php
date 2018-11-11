<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaticPage;
use Illuminate\Support\Facades\Auth;
use Log;
use Illuminate\Support\Facades\Storage;
class StaticPageController extends Controller
{
    //
    public function create(Request $request){
    	$static = new StaticPage;
        $userId = Auth::id();
        $validateDate = $request->validate([
            'slug' => 'required',
            'name' => 'required',
            'contents' => 'required',
        ]);

        // TODO 現状はuser_idごとにディレクトリ振り分け
        if($request->file('img_file')){
            $path = $request->file('img_file')->store('for-test/'.$userId);
        }
        
    	$post = $request->all();
    	if(!empty($post['slug'])){
            $post['img_file'] = $path; 
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
