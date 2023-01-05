<?php

namespace App\Http\Controllers\Frontand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontandController extends Controller
{
    public function index(){

        return view('frontand.modules.index');
    }

    public function single(){

        return view('frontand.modules.single');
    }
}
