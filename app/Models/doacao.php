<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    use HasFactory;
    

    public function doador() {
        return $this->belongsTo('App\Models\Escola');
    }

    public function necessita() {
        return $this->belongsTo('App\Models\Escola');
    }
}
