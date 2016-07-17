<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shelf extends Model
{
    //

    public function files()
    {
    	# code...
    	return $this->hasMany(Files::class);
    }
}
