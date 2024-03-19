<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];

    public function matieres()
    {
        return $this->belongsToMany(Matiere::class)->withPivot('enseignante_id');
    }
}
