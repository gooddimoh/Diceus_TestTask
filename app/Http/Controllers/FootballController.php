<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    public function playall()
    {

    }

    public function nextweek()
    {

    }

    public function getdatafromlink()
    {
        $link = 'https://www.premierleague.com/tables?team=FIRST';
        $data = file_get_contents($link);
    }

}
