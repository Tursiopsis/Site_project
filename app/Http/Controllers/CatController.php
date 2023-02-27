<?php

namespace App\Http\Controllers;
use Illuminate\View\View;


class CatController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function meowMethod ($idAfterSlash)
    {
        $meowNumber = $idAfterSlash*10;

        return view('cat.meow-view', [
            'someNumber' => 2222,
            'meowNumber' => $meowNumber 
        ]);
    }
    public function purrMethod ($idAfterSlash)
    {
        $meowNumber = $idAfterSlash*10;

        return view('cat.purr-view', [
            'someNumber' => 2222,
            'meowNumber' => $meowNumber 
        ]);
    }
}