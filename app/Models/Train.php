<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    //devo dirgli che tabella si chiama treni_trenord, perché lui di base cercherebbe una tabella Trains, plurale del nome del model Train
    protected $table = 'treni_trenord';

    use HasFactory;
}
