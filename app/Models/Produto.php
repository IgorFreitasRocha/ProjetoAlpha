<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    public $table = 'PRODUTO';
    public $foreignKey = 'PRODUTO_ID';


    // Definir os campos que podem ser preenchidos
    protected $fillable = [
        'PRODUTO_NOME',
        'PRODUTO_ID',
        // Adicione outros campos conforme necessário
    ];

    // Definir a chave primária
    protected $primaryKey = 'PRODUTO_ID';

    // Desativar timestamps se não estiverem sendo usados
    public $timestamps = false;
}
