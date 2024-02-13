<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkSheetController extends Controller
{
    public function index(int $r, int $c, int $t, int $s)
    {

        $mean = ($r + $c + $t + $s) / 4;
        return view("worksheet", ['data' => ['r'=>$r, 'c'=>$c, 't'=>$t, 's'=>$s, 'mean'=>$mean]]);
    }
}
