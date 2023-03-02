<?php

namespace App\Http\Controllers;
use Illuminate\View\View;


class HomeNewController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function HomeNewMethod ($idAfterSlash)
    {
        $HomeNewNumber = $idAfterSlash*5;

        return view('HomeNew.HomeNew', [
            
            'HomeNewNumber' => $HomeNewNumber 
        ]);
    }
}