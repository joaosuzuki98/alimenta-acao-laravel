<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'titulo',
        'descricao',
        'num_donatarios',
        'num_donatarios_instituicoes',
        'concluido',
        'foto',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
