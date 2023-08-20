<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Admins = Admin::all();
        return view('Admins.index', compact('Admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('Admins.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Admin::create($request->all());

        return redirect()->route('Admins.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Admin = Admin::find($id);
        return view('Admins.show', compact('Admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Admin = Admin::find($id);
        return view('Admins.edit', compact('Admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Admin = Admin::find($id);
        $Admin->update($request->all());
        return redirect()->route('Admins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Admin = Admin::find($id);
        $Admin->delete();
        return redirect()->route('Admins.index');
    }
}