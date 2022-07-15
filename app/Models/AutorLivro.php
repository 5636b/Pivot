<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AutorLivro extends Pivot
{
    protected $table = 'autores_livros';

    protected $fillable = [
        'autor_id',
        'livro_id'
    ];
}
