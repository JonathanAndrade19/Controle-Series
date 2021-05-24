<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 14/05/21
 * Time: 16:37
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index (Request $request)
    {
        $series = [
            'Brookly nine nine',
            'Marvel',
            'Lost'
        ];

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view( 'series.create');
    }
}