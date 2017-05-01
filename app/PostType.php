<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    protected $table = 'tblposttype';
    protected $primaryKey = 'posttypeid';
    public $timestamps = false;
}
