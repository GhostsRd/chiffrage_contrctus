<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','id_items','id_profile', 'id_facture', 'tarif',
    ]; 
}
