<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Necessita extends Model
{
    use HasFactory;
    protected $table = "necessita";
    protected $fillable = ['material_qty','status','id_material','id_filho'];

    public function filho()
    {
        return $this->belongsTo(Filho::class, "id_filho");
    }

    public function material()
    {
        return $this->belongsTo(Material::class, "id_material");
    }

}
