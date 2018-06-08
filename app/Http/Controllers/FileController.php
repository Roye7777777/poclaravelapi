<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        return File::all();
    }
    public function show(File $file)
    {
        return $file;
    }

    public function store(Request $request)
    {
        $article = File::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, File $file)
    {
        $file->update($request->all());

        return response()->json($file, 200);
    }

    public function delete(File $file)
    {
        $file->delete();

        return response()->json(null, 204);
    }
}
