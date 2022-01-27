<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['estado', 'cidade', 'instituicao', 'polo',
    'telefone', 'telefone2', 'site', 'email', 'endereco', 'facebook', 
    'instagram', 'linkedin', 'twitter', 'imagem', 'sobre', 'cursos', 'pagante'];
}
