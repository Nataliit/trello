<?php

namespace App\Http\Controllers;

use App\Shelf;
use App\Desk;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function index($desk_id)
    {
        $this->data['desk'] = Desk::with('shelves')->find($desk_id);

        return response()->json($this->data, 201);
    }

    public function show($shelf)
    {
        return $shelf;
    }

//    public function create($desk_id)
//    {
//        $this->data['desk'] = Desk::find($desk_id);
//        return response()->json($this->data);
//    }

    public function store(Request $request, $desk_id)
    {
        $input = $request->all();
        $input['desk_id'] = $desk_id;

        $shelf = Shelf::create($input);

        return response()->json($shelf, $desk_id);
    }

    public function update(Request $request, Shelf $shelf, $desk_id)
    {
        $shelf->update($request->all());

        return response()->json($shelf, $desk_id);
    }

    public function delete(Shelf $shelf, $desk_id)
    {
        $shelf->delete();

        return response()->json(null, $desk_id);
    }
}
