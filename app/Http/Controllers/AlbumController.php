<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    // Method for creating a new album
    public function store(Request $request)
    {
        $album = new Album;

        $album->title = $request->input('title');
        $album->artist = $request->input('artist');
        $album->cover = $request->input('cover');
        $album->likes = $request->input('likes', 0);

        $album->save();

        return response()->json($album);
    }

    // Method for retrieving a single album by ID
    public function show($id)
    {
        $album = Album::findOrFail($id);

        return response()->json($album);
    }

    // Method for retrieving all albums
    public function index()
    {
        $albums = Album::all();

        return response()->json($albums);
    }

    // Method for updating an existing album by ID
    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);

        $album->title = $request->input('title');
        $album->artist = $request->input('artist');
        $album->cover = $request->input('cover');
        $album->likes = $request->input('likes', 0);

        $album->save();

        return response()->json($album);
    }

    // Method for deleting an existing album by ID
    public function destroy($id)
    {
        $album = Album::findOrFail($id);

        $album->delete();

        return response()->json(['message' => 'Album deleted successfully.']);
    }
}
