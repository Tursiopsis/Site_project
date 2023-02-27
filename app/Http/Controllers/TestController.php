<?php

namespace App\Http\Controllers;
use Illuminate\View\View;


class TestController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function myFirstMethod($idAfterSlash)
    {
        $myNewBumber = $idAfterSlash*10;

        return view('test.my-test-view', [
            'someNumber' => 2222,
            'myId' => $myNewBumber 
        ]);
    }
}