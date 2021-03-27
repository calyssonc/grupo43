<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = ['nome','escola_id'];

    public function escola() {
        return $this->belongsTo('App\Models\Escola');
    }
}
