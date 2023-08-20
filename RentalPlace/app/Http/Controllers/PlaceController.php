<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Place;
use Illuminate\Http\Request;

class placeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = place::all();
        return view('places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('places.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        place::create($request->all());

        return redirect()->route('places.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $place = place::find($id);
        return view('places.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $place = place::find($id);
        return view('places.edit', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $place = place::find($id);
        $place->update($request->all());
        return redirect()->route('places.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $place = place::find($id);
        $place->delete();
        return redirect()->route('places.index');
    }
}