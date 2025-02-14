<?php

namespace App\Http\Controllers;

use App\Models\panasz_model;
use Illuminate\Http\Request;

class panasz_controller_api extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $panaszok = panasz_model::all();

        return response()->json($panaszok);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $panaszok = panasz_model::find($id);

        if (!empty($panaszok)) {
            $panaszok->delete();
            return response()->json(["message"=>"panasz törölve"], status:202);
        }
        else{
            return response()->json(["message"=>"panasz nem találva"],status:404);
        }
    }
}
