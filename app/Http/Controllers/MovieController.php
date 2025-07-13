<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'vj' => 'required|string|max:255',
            'release_date' => 'required|date',
        ]);
        // store
        Movie::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'vj' => $request->vj,
            'release_date' => $request->release_date,
        ]);
        // redirect
        return redirect('movies')->with('success', 'Movie created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'vj' => 'required|string|max:255',
            'release_date' => 'required|date',
        ]);

        $movie->update($request->all());

        return redirect('movies/' . $movie->id)->with('success', 'Movie updated successfully!');
    }

    /**
     * Remove the specified resource in storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect('movies')->with('danger','Movie Deleted Successfully');
    }
}
