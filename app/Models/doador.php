<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    use HasFactory;
    protected $fillable = ['nome','cpf'];


    //FK User
    public function user() {
        return $this->belongsTo('App\Models\Users');
    }

    //FK Doação
    public function doacoes() {
        return $this->hasMany('App\Models\Doacao');
    }
}
