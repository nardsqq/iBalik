<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'tblpost';
    protected $primaryKey = 'id';

    public static $rules = [
    	'title' => 'required|max:45',
    	'body' => 'required'
    ];
}
