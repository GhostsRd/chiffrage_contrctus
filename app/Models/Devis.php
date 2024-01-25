<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','id_projet', 'id_client', 'objet_chiffrage','delai_mise_en_oeuvre','choix_planification',
        'etat_devis','montant_total','date_creation','created_at'
    ];
}
