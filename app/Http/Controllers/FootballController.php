<?php
namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class FootballController extends Controller
{

    public function index()
    {
        return view('result');
    }

    public function result()
    {


        $arr = [];

        $result = ['name' => 'Abigail', 'state' => 'CA'];

        return response()->json($result);
    }

    public function playbutton()
    {


    }

    public function playnext()
    {


    }

    public function getdatafromlink()
    {
        $link = 'https://www.premierleague.com/tables?team=FIRST';
        $data = file_get_contents($link);
    }

}
