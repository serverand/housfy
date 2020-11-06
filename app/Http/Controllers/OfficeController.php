<?php

namespace App\Http\Controllers;
Use App\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{

    public function index()
    {
        return Office::all();
    }

    public function show(Office $office)
    {
        return $office;
    }

    public function store(Request $request)
    {
        $office = Office::create($request->all());

        return response()->json($office, 201);
    }

    public function update(Request $request, Office $office)
    {
        $office->update($request->all());

        return response()->json($office, 200);
    }

    public function delete(Office $office)
    {
        $office->delete();

        return response()->json(null, 204);
    }
}
