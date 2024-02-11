<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiControllerKeri extends Controller
{

    public $articoli = [
        0 =>['titolo'=> 'Articolo di Sport', 'descrizione'=>'descrizione di prova', 'nome'=> 'Luca', 'category'=> 'sport '],
        1=> ['titolo'=> 'Articolo sui film', 'descrizione'=>'descrizione di prova', 'nome'=> 'Marco', 'category'=> 'film'],
        2=> ['titolo'=> 'Articolo di elettronica', 'descrizione'=> 'descrizione di prova', 'nome'=> 'Pietro', 'category'=>'elettronica'],
        ];
    public function articoli()
    {
        return $this->articoli;
    }
}
