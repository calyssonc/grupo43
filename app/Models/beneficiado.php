<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficiado extends Model
{
    use HasFactory;

    protected $fillable = [ 'nome', 'email','senha', 'endereço', 'uf','cpf'];
    protected $hidden = ['senha'];
};
