<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avoirs extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','id_items', 'date_debut', 'duree','id_planification'
    ];
}
