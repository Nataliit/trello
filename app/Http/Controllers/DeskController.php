<?php

namespace App\Http\Controllers;

use App\Desk;
use Illuminate\Http\Request;

class DeskController extends Controller
{
    public function index()
    {
        return Desk::all();
    }

    public function show(Desk $desc)
    {
        return $desc;
    }

    public function store(Request $request)
    {
        $desc = Desk::create($request->all());

        return response()->json($desc, 201);
    }

    public function update(Request $request, Desk $desc)
    {
        $desc->update($request->all());

        return response()->json($desc, 200);
    }

    public function delete(Desk $desc)
    {
        $desc->delete();

        return response()->json(null, 204);
    }
}
