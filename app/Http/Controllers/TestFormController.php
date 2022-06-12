<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInfos()
    {
        return view('monFormulaire');
    }

    public function postInfos(Request $request){
        return 'Le message saisi est '.$request->input('message');
    }
    }
