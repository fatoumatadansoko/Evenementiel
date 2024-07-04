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
     // Relation avec l'utilisateur
     public function utilisateur()
     {
         return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
     }
    public function evenement()
    {
        return $this->belongsTo(Evenement::class,'evenement_id');
    }
}
