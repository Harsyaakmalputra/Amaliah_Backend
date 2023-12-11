<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PagesController;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;





class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Berita.index",[
            "beritas" => Berita::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Berita.create",);
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
    


        
        $user = new Berita;
        $user->judul = $request->judul;
        $user->artikel = $request->artikel;
        $user->foto = $foto;
        
        $user->save();

        return redirect()->route("Berita.index")->with("success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        
        
        return view("Berita.edit",[
            'berita' =>$berita,
            
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $user = Berita::find($id);
        $validated = $request-> validate( [
            'foto'=> ['image'],
        ]);
        
        $foto = null;

        if ($request->hasFile("foto")) { 
            $foto = $request->file("foto")->store("foto");
        }
        
        $user->judul = $request->judul;
        $user->artikel = $request->artikel;
        $user->foto = $foto;
        
        $user->save();

        return redirect()->route("Berita.index")->with("success");
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        
        $berita->delete($id);
        return redirect()->route("Berita.index")->with("success");
        
    }
}
