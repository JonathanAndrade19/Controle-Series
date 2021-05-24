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
    public function index (Request $request){
        $series = [
            'Marvel',
            'Lost',
            'Brookly nine nine'
        ];

        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }

        $html .= "</ul>";

        return $html;
    }
}