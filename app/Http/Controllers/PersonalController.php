<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public $films = [
        [
            "id" => 1,
            "titolo" => "Il Cavaliere Oscuro",
            "anno" => "2008",
            "trama" => "trama",
            "regista" => "Christopher Nolan",
            "foto"=> "/img/Batman.jpg",
            "categoria" => 'hero',
        ],
    
        [
            "id" => 2,
            "titolo" => "The Flash",
            "anno" => "2023",
            "trama" => "trama",
            "regista" => "Andy Muschietti",
            "foto"=> "/img/theflash.webp",
            "categoria" => 'hero',
        ],
    
        [   "id"=>3,
            "titolo" => "Shutter Island",
            "anno" => "2010",
            "trama" => "trama",
            "regista" => "Martin Scorsese",
            "foto"=> "/img/Shutter Island.jpg",
            "categoria" => 'thriller',
        ],
    
        [
            "id" => 4,
            "titolo" => "Inception",
            "anno" => "2010",
            "trama" => "trama",
            "regista" => "Christopher Nolan",
            "foto"=> "/img/WOW.webp",
            "categoria" => 'thriller',
        ],
        
        ];


public function welcome() {
    return view('welcome', ['films'=> $this->films]);
} 

public function search(Request $request){
    $ricerca = $request->query('ricerca');

    $searchResult = [];
    foreach($this->films as $film)
    if (str_contains( strtolower( $film['titolo']),strtolower( $ricerca))){
        array_push($searchResult, $film);
    }
    
return view('ricerca',[
    'films' => $searchResult,
    'valoreRicercato'=> $ricerca
]);
}


}
