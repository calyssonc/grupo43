<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doador extends Model
{
    use HasFactory;
    protected $fillable = ['nome','email','senha','endereco','uf','cpf'];
    protected $hidden = ['senha'];
}
