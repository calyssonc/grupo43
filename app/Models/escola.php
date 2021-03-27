<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Escola extends Model
{
    use HasFactory;

    protected $fillable = ['nome','tipo','localizacao',"cnpj"];


    //FK User
    public function user() {
        return $this->belongsTo('App\Models\Users');
    }

    //FK Material
    public function materiais() {
        return $this->hasMany('App\Models\Material');
    }
    //FK Filho
    public function filhos() {
        return $this->hasMany('App\Models\Filho');
    }
};

