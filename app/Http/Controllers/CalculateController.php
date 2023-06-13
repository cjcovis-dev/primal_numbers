<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateNumberRequest;
use App\Calculate\Primal;

class CalculateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index ()
    {
        return view('primal_numbers.index');
    }

    public function getData (ValidateNumberRequest $request)
    {
        $numero = $request->input('number');

        $list = Primal::createList($numero);

        return $list;
        //return route('index', $list);
    }
}
