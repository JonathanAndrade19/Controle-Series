<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 14/05/21
 * Time: 16:37
 */

namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index ()
    {
        $series = Serie::all();

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view( 'series.create');
    }

    public function store(Request $request)
    {
       $serie = Serie::create($request->all());

       echo "Série com id {$serie->id} criada: {$serie->nome}";
    }
}