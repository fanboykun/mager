<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalizationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('personalization');
    }
}
