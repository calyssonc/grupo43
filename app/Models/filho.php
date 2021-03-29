<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filho extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'ra', 'id_escola', 'id_beneficiado'];

    public function escola()
    {
        return $this->belongsTo(Escola::class, "id_escola");
    }

    public function beneficiado()
    {
        return $this->belongsTo(Beneficiado::class, "id_beneficiado");
    }

}
