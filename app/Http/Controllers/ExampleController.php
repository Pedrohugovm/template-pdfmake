<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordens = Example::all();

        return view('welcome', compact('ordens'));
    }
}
