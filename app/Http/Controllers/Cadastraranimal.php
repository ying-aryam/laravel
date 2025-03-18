<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastraranimal extends Controller
{
    //camelCase
    function Cadastraranimal(){
        return View('cadastrar-animal');
    }
}
