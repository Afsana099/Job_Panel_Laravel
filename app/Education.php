<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $guarded = [];

    public function degree()
    {
        return $this->belongsTo(Degree::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
