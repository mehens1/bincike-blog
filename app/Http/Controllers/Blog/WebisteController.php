<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebisteController extends Controller
{
    //

    public function home()
    {
        $data = [
            'page_name' => 'Home'
        ];
        return view('home', compact('data'));
    }
}
