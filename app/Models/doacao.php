<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    use HasFactory;

    protected $table = 'doacao';

    protected $fillable = [
        'id_doador',
        'id_necessita',
    ];

    public function doador()
    {
        return $this->belongsTo(Doador::class, "id_doador");
    }

    public function necessita()
    {
        return $this->belongsTo(Necessita::class, "id_necessita");
    }

}
