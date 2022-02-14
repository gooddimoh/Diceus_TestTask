<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class FootballController extends Controller
{

    public function index(){


    assert('');
    assert();
    assert();
    assert();
    }
    public function result(){

        $result = ['name' => 'Abigail', 'state' => 'CA'];

        return response()->json($result);
    }


    function getById(){ }

    function setById(){ }

    function GetDataFromLink(){
        $link = 'https://www.premierleague.com/tables?team=FIRST';
        file_get_contents($link);
    }

    function recursion2(){
        $this->recursion1();
    }
}
