<?php

namespace App\Http\Controllers;

use App\Desk;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function index($desk_id)
    {
        $this->data['desk'] = Desk::with('shelves')->find($desk_id);

        return response()->json($this->data, 201);
    }

    public function show(Shelf $shelf)
    {
        return $shelf;
    }

    public function store(Request $request)
    {
        $shelf = Shelf::create($request->all());

        return response()->json($shelf, 201);
    }

    public function update(Request $request, Shelf $shelf)
    {
        $shelf->update($request->all());

        return response()->json($shelf, 200);
    }

    public function delete(Shelf $shelf)
    {
        $shelf->delete();

        return response()->json(null, 204);
    }
}
