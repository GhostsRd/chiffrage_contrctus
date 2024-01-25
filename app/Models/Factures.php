<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factures extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','id_devis','nature_projet','date_edition', 'date_envoi','montant'
    ];
}
