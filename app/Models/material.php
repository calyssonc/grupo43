<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = ['nome','escola_id'];

    //FK Escola
    public function escola() {
        return $this->belongsTo('App\Models\Escola');
    }

    //FK Necessita
    public function necessidades() {
        return $this->hasMany('App\Models\Necessita');
    }

}
