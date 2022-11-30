<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_anuncio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function anuncios()
    {
        return $this->belongsTo(Anuncio::class);
    }
 
}