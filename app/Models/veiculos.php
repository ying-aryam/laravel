<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veiculos extends Model
{
    use HasFactory;
    protected $table ='veiculos';
    protected $filabe =['nome', 'placa', 'ano'];
}
