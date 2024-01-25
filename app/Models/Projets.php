<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','id_devis', 'id_employer', 'titre','description','prerequis','contexte','commentaire','date_de_creation'
    ];
}
