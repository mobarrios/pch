<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use App\Entities\Operativo;
use App\Entities\UsuarioOperativo;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname','username','name', 'email', 'password','sedes_id','is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getIsActiveAttribute()
    {
        if($this->attributes['is_active'] == 1)
            return 'Activo';

        if($this->attributes['is_active'] == 0)
            return 'Inactivo';
    }

    public function getRolesIdAttribute()
    {
        return $this->roles->pluck('id')->toArray();
    }

    public function setPasswordAttribute($val)
    {
        $this->attributes['password']  = bcrypt($val);
    }

    public function Operativo(){

        return $this->belongsToMany( Operativo::class , 'users_operativos', 'usuarios_id', 'operativos_id');

     }
}
