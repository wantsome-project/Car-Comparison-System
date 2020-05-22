<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['Brand','Model','Motorizare','Locuri','Consum','Transmisie','Putere','An_aparitie','Pret_de_baza',
    'Combustibil','Caroserie','Grad_de_poluare','Tractiune','Dotari_standard','iMAGE'];
}
