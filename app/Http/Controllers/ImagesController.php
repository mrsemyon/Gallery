<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    function index() {
        $images = DB::table('images')
                ->select('*')
                ->get();
        $images = $images->all();
    
        return view('welcome', ['images' => $images]);
    }

    function create() {
        return view('create');
    }

    function store(Request $request) {
        $image = $request->file('image');
        $filename = $image->store('uploads');
    
        DB::table('images')->insert(
            ['image' => $filename]
        );
    
        return redirect('/');
    }

    function show($id) {
        $image = DB::table('images')
        ->select('*')
        ->where('id', $id)
        ->first();
    
        return view('show', ['image' => $image->image]);
    }

    function edit($id) {
        $image = DB::table('images')
        ->select('*')
        ->where('id', $id)
        ->first();
    
        return view('edit', ['image' => $image]);
    }

    function update(Request $request, $id) {
        $image = DB::table('images')
        ->select('*')
        ->where('id', $id)
        ->first();
    
        Storage::delete($image->image);
    
        $image = $request->file('image');
        $filename = $image->store('uploads');
    
        DB::table('images')
        ->where('id', $id)
        ->update(
            ['image' => $filename]
        );
    
        return redirect('/');
    }

    function delete($id) {
        $image = DB::table('images')
        ->select('*')
        ->where('id', $id)
        ->first();
    
        Storage::delete($image->image);
    
        DB::table('images')
        ->where('id', $id)
        ->delete();
    
        return redirect('/');
    }
}
