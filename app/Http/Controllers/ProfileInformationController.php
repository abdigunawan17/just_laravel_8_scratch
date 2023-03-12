<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $request, $identifier)
    {
        //$username = $request->username;  dimana ini sangat boros sekali karena cuma passing 1 data saja
        //return view('profile', compact('username'));
        //return view('profile', [
        //    'username' => $request->username
        //]);
        return view('profile', [ 'username' => $identifier ]);
    }
}
