<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = [];
    protected $table = 'restaurants';
    protected $fillable = ['name', 'category', 'image'];
}
 