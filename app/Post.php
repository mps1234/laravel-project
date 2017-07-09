<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //	Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;	//we have created at and update at fields, if we dont want them put false

}
