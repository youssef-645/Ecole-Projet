<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
    protected $fillable = ['groupe_id'];

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    public function parents()
    {
        return $this->belongsToMany(Parent::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
