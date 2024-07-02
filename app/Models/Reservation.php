<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'statut',
        'evenement_id',
        'utilisateur_id',
       
    ];
    public function utilisateur()
    {
        return $this->hasMany(Utilisateur::class);
    }
}
