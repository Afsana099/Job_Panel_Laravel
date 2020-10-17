<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $guarded = [];
    public function education()
    {
        return $this->belongsTo(Education::class);
    }
}
