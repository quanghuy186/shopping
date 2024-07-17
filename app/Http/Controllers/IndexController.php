<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class IndexController extends Controller
{
    public function home(){
        return view('page.home');
    }

    
}