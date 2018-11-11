<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    //
    protected $fillable =[
    	'slug','name','contents','img_file'
    ];
}
