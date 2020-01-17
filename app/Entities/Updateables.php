<?php

namespace App\Entities;

use App\User;

class Updateables extends Entities
{

    protected $table = 'updateables';
    protected $fillable = ['entities_type','entities_id','users_id','column','old_data','new_data'];


    public function updateables()
    {
        return $this->morphTo();
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}


