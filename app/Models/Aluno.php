<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    //permite salvar os dados no banco de dados
    protected $fillable = ['nome','dtNascto','telefone','responsavel','turma'];
}
