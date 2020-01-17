<?php

namespace App\Entities;

class Core extends Entities
{

    protected $table = 'core';
    protected $fillable = ['string','double','tiny','date','text'];

    public function setDateAttribute($val)
    {
        $this->attributes['date'] = date('Y-m-d',strtotime($val));
    }

    public function getEstadoAttribute()
    {
        return config('milo.helps.status.'.$this->attributes['status_id']);
    }

}


