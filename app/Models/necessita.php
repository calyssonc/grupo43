<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Necessita extends Model
{
    use HasFactory;
    protected $fillable = ['status','material_Qty'];

    //FK Doacao
    public function doacao() {
        return $this->hasOne('App\Models\Doacao');
    }

    //FK Escola
    public function material() {
        return $this->belongsTo('App\Models\Material');
    }

    //FK Escola
    public function filho() {
        return $this->belongsTo('App\Models\Filho');
    }

}
