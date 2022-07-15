<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autores';
    
    protected $fillable = [
        'nome',
        'genero',
        'livros_publicados',
        'mais_vendidos'
    ];

    public function livros()
    {
        return $this->belongsToMany(Livro::class, 'autores_livros', 'autor_id', 'livro_id');
    }
}
