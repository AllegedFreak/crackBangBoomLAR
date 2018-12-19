<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Characters;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function cargarIndex() {


      // -------------- Imagenes Index ---------------------- //

      // $novedades =[
      //   0 => ['id'=>'0','title'=>'Spider Man','edition'=>'ISSUE #310','price'=>'$45.50', 'cover'=>'/images/covers/spiderman-spectacular-310.jpg'],
      //   1 => ['id'=>'1','title'=>'Stranger Things','edition'=>'ISSUE #10','price'=>'$10.99', 'cover'=>'/images/covers/stranger-things-1.jpg'],
      //   2 => ['id'=>'2','title'=>'Saga','edition'=>'VOL.4','price'=>'$99.99', 'cover'=>'/images/covers/saga-vol8.jpg'],
      //   3 => ['id'=>'3','title'=>'Wonder Woman','edition'=>'ISSUE #1','price'=>'$443.40', 'cover'=>'/images/covers/wonder-woman-1.jpg']
      //             ];
      //
      // $mangas =[
      //   4 => ['id'=>'4','title'=>'Dragon Ball Z','edition'=>'VOL.1','price'=>'$200.00', 'cover'=>'/images/covers/dragonballz-1.jpg'],
      //   5 => ['id'=>'5','title'=>'Death Note','edition'=>'VOL.4','price'=>'$87.99', 'cover'=>'/images/covers/death-note-5.jpg'],
      //   6 => ['id'=>'6','title'=>'Sailor Moon','edition'=>'VOL.1','price'=>'$70.50', 'cover'=>'/images/covers/sailormoon-1.jpg'],
      //   7 => ['id'=>'7','title'=>'One Piece','edition'=>'VOL.2','price'=>'$10.99', 'cover'=>'/images/covers/onepiece-vol2.png']
      //           ];
      //
      
      // // -------------- Perfil del Usuario ---------------------- //
      //
      // $boughts =[
      //   ['title'=>'Spider Man','edition'=>'ISSUE #310','price'=>'$45.50', 'cover'=>'/images/covers/spiderman-spectacular-310.jpg'],
      //   ['title'=>'All Star Superman','edition'=>'Vol.10-15','price'=>'$199.99', 'cover'=>'/images/covers/all-star-superman-1.jpg'],
      //   ['title'=>'Wonder Woman','edition'=>'ISSUE #1','price'=>'$443.40', 'cover'=>'/images/covers/wonder-woman-1.jpg'],
      //   ['title'=>'Batman','edition'=>'ISSUE #9','price'=>'$350.99', 'cover'=>'/images/covers/batman-dkr-1.png'],
      //   ['title'=>'Spider Man','edition'=>'ISSUE #310','price'=>'$45.50', 'cover'=>'/images/covers/spiderman-spectacular-310.jpg'],
      //   ];
      //
      // $wishes =[
      //   ['title'=>'Civil War','edition'=>'ISSUE #1','price'=>'$35.50', 'cover'=>'/images/covers/civil-war-vol1.jpg'],
      //   ['title'=>'Born Again: Daredevil','edition'=>'Vol.1','price'=>'$499.99', 'cover'=>'/images/covers/daredevil-born-again-1.jpg'],
      //   ['title'=>'X-men','edition'=>'ISSUE #2','price'=>'$43.33', 'cover'=>'/images/covers/xmen-1.jpg'],
      //   ['title'=>'Randma 1/2','edition'=>'ISSUE #9','price'=>'$4.99', 'cover'=>'/images/covers/randma12-vol16.jpg'],
      //   ['title'=>'Born Again: Daredevil','edition'=>'Vol.1','price'=>'$499.99', 'cover'=>'/images/covers/daredevil-born-again-1.jpg'],
      //   ['title'=>'Civil War','edition'=>'ISSUE #1','price'=>'$35.50', 'cover'=>'/images/covers/civil-war-vol1.jpg'],
      //   ];
      //
      // $histories =[
      //   ['title'=>'All Star Superman','edition'=>'Vol.10-15','price'=>'$199.99', 'cover'=>'/images/covers/all-star-superman-1.jpg'],
      //   ['title'=>'Wonder Woman','edition'=>'ISSUE #1','price'=>'$443.40', 'cover'=>'/images/covers/wonder-woman-1.jpg'],
      //   ['title'=>'Dragon Ball Z','edition'=>'VOL.1','price'=>'$49.99', 'cover'=>'/images/covers/dragonballz-1.jpg'],
      //   ['title'=>'Black Panther','edition'=>'ISSUE #33','price'=>'$53.40', 'cover'=>'/images/covers/black-panther-4.jpg'],
      //   ['title'=>'All Star Superman','edition'=>'Vol.10-15','price'=>'$199.99', 'cover'=>'/images/covers/all-star-superman-1.jpg'],
      //   ['title'=>'Wonder Woman','edition'=>'ISSUE #1','price'=>'$443.40', 'cover'=>'/images/covers/wonder-woman-1.jpg'],
      //   ];
      //

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
      return view( 'index', compact(['charactersMarvel','charactersDC','comics']) );
    }


}
