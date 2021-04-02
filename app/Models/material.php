<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $table = "material";
    protected $fillable = ['name','id_escola'];

    //FK Escola
    public function escola() {
        return $this->belongsTo('App\Models\Escola');
    }

    //FK Necessita
    public function necessidades() {
        return $this->hasMany('App\Models\Necessita');
    }

}
