<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Characters;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
      public function cargar() {

        $charactersMarvel =[
          ['character'=>'Spiderman','likes'=> 5962,'position'=>'#1','pic'=>'/images/covers/characters/spiderman.jpg'],
          ['character'=>'Deadpool','likes'=> 5883,'position'=>'#2','pic'=>'/images/covers/characters/deadpool.jpg'],
          ['character'=>'Iron Man','likes'=> 5357,'position'=>'#3','pic'=>'/images/covers/characters/ironman.jpg'],
          ['character'=>'Capitan America','likes'=> 4578,'position'=>'#4','pic'=>'/images/covers/characters/captainamerica.jpg'],
          ['character'=>'Wolverine','likes'=> 4473, 'position'=>'#5','pic'=>'/images/covers/characters/wolverine.jpg'],
          ['character'=>'Hulk','likes'=> 3579,'position'=>'#6','pic'=>'/images/covers/characters/hulk.jpg'],
        ];

        $charactersDC =[
          ['character'=>'Batman','likes'=> 4568,'position'=>'#1','pic'=>'/images/covers/characters/batman.jpeg'],
          ['character'=>'Superman','likes'=> 3567,'position'=>'#2','pic'=>'/images/covers/characters/superman.jpg'],
          ['character'=>'Wonder Woman','likes'=> 3478,'position'=>'#3','pic'=>'/images/covers/characters/ww2.jpg'],
          ['character'=>'Flash','likes'=> 3290,'position'=>'#4','pic'=>'/images/covers/characters/flash.jpg'],
          ['character'=>'Linterna Verde','likes'=> 2676,'position'=>'#5','pic'=>'/images/covers/characters/greenlantern.jpg'],
          ['character'=>'Aquaman','likes'=> 1356,'position'=>'#6','pic'=>'/images/covers/characters/aquaman.jpg'],
        ];

        $comics = Comic::all();
        // return view( 'index', ['comics'=>$comics] );
        // dd($comics);
        return view( 'user_profile', compact(['charactersMarvel','charactersDC','comics']) );
      }

}
