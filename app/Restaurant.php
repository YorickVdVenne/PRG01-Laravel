<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = [];
    protected $table = 'restaurants';

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
 