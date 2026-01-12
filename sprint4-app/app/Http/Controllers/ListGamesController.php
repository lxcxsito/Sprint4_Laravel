<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ListGamesController extends Controller{
     public function index(){
        return view('listGames');
    }
}


?>