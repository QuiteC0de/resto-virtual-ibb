<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

use Image;
use File;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return view('menu.index',['menu'=>$menu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $menu = new Menu;
        $menu->nama_menu = $request['nama_menu'];
        $menu->jenis = $request['jenis'];
        $menu->tgl_dibuat = date('Y-m-d');

        

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $lokasi     = public_path().'/img/'.$request['jenis'];
        $fileName   = str_random(6).'_'.$file->getClientOriginalName();
        $request->file('gambar')->move($lokasi, $fileName);

        $menu->gambar = $fileName;
        $menu->keterangan = $request['keterangan'];
        $menu->harga = $request['harga'];
        $menu->save();
        return redirect('/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Menu::find($id);
        return view('menu.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->nama_menu = $request['nama_menu'];
        $menu->jenis = $request['jenis'];
        $menu->tgl_dibuat = date('Y-m-d');

        

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $lokasi     = public_path().'/img/'.$request['jenis'];
        $fileName   = str_random(6).'_'.$file->getClientOriginalName();
        $request->file('gambar')->move($lokasi, $fileName);

        $menu->gambar = $fileName;
        $menu->keterangan = $request['keterangan'];
        $menu->harga = $request['harga'];
        $menu->save();
        return redirect('/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/menu');
    }
}
