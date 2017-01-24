<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Person;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index($letter = "A")
    {
        $person = Person::where('nickname', 'like', $letter.'%')->get();
        return view('agenda', compact('person'));
    }
}
