<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "store a newly created resource in storage";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('users.show', ['userId' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('users.edit', ['userId' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Update the specified resource with id {$id}
        in storage.";
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       return "Remove the specified resource with id {$id}
       from storage.";
    }
}