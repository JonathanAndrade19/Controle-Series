<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 25/05/21
 * Time: 10:19
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];
}