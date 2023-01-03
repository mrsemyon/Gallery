<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Services\ImageService;

class ImagesController extends Controller
{
    private $images;

    public function __construct(ImageService $imageService)
    {
        $this->images = $imageService;
    }

    function index()
    {
        return view('welcome', ['images' => $this->images->all()]);
    }

    function create()
    {
        return view('create');
    }

    function store(Request $request)
    {
        $this->images->add($request->file('image'));
    
        return redirect('/');
    }

    function show($id)
    {
        return view('show', ['image' => $this->images->one($id)]);
    }

    function edit($id)
    {
        return view('edit', ['image' => $this->images->one($id)]);
    }

    function update(Request $request, $id)
    {
        $this->images->update($id, $request->image);

        return redirect('/');
    }

    function delete($id)
    {
        $this->images->delete($id);
    
        return redirect('/');
    }
}
