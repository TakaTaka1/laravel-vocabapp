<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function store(MessageBuilder $builder, Request $request)
    {
    	$request->validate([
    		'friendId' => 'required|integer',
    		'text' => 'required|max:255'

    	]);

    	$userMessage = $builder->user($request->friendId, $request->text);
    	$tunaMessage = $builder->tomodachi($request->text);

    	$messages = [$userMessage];

    	if($tunaMessage) {
    		$messages[] = $tunaMessage;
    	}

    	event(new MessageRecieved($messages));

    	return response()->json($messages);
    }
}
