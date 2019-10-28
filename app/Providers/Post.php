<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Post extends Model
{
    // Table name
    protected $table = 'posts';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps 
    public $timestamps = true;
}
