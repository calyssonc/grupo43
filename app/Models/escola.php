<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Escola extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory;

    protected $table = 'escolas';
	protected $guard = 'escola';

    protected $fillable = ['name','email','password',"tipo","localizacao","telefone"];

    //FK Material
    public function material() {
        return $this->hasMany(Material::class, 'id_escola');
    }
    //FK Filho
    public function filho() {
        return $this->hasMany(Filho::class, 'id_escola');
    }

};

