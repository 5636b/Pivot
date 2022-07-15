<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'autor',
        'titulo',
        'genero',
        'edicao',
        'editora',
        'numero_de_paginas',
        'user_id'
    ];

    public function dono()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function autores()
    {
        return $this->belongsToMany(Autor::class, 'autores_livros', 'livro_id', 'autor_id');
    }
}
