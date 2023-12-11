<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PagesController;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;





class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Gallery.index",[
            "galleries" => Gallery::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Gallery.create",);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request-> validate( [
            'foto'=> ['image'],
        ]);
        
        $foto = null;

        if ($request->hasFile("foto")) { 
            $foto = $request->file("foto")->store("foto");
        }
    


        
        $user = new Gallery;
        $user->judul = $request->judul;
        $user->deskripsi = $request->deskripsi;
        $user->foto = $foto;
        
        $user->save();

        return redirect()->route("Gallery.index")->with("success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        
        
        return view("Gallery.edit",[
            'gallery' =>$gallery,
            
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $user = Gallery::find($id);
        $validated = $request-> validate( [
            'foto'=> ['image'],
        ]);
        
        $foto = null;

        if ($request->hasFile("foto")) { 
            $foto = $request->file("foto")->store("foto");
        }
        
        $user->judul = $request->judul;
        $user->deskripsi = $request->deskripsi;
        $user->foto = $foto;
        
        $user->save();

        return redirect()->route("Gallery.index")->with("success");
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        
        $gallery->delete($id);
        return redirect()->route("Gallery.index")->with("success");
        
    }
}
