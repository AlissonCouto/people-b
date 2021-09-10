<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::get()->toJson();

        return response($people, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {

        if ($people->exists()) {
            return response($people, 200);
        } else {
            return response()->json([
                "message" => "Pessoa não encontrada!"
            ], 404);
        }
    }

}
