<?php

namespace App\Http\Controllers;

use App\Models\Tb_mobil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TbMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Tb_mobil::all();
        return view('admin.mobil.index', compact('mobil'));
    }

    public function detailmobil($id) {

        $mobil = Tb_mobil::findOrFail($id);
        return view('detail', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobil.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobil = new Tb_mobil;
        $mobil->merek = $request->merek;
        $mobil->model = $request->model;
        $mobil->nomor_plat = $request->nomor_plat;
        $mobil->harga_sewa_perhari = $request->harga_sewa_perhari;
        $mobil->status_sewa = 'Tersedia';
        // upload image / foto
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->deskripsi= $request->deskripsi;
        $mobil->save();
        return redirect('admin/mobil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tb_mobil  $tb_mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Tb_mobil $tb_mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tb_mobil  $tb_mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = tb_mobil::findOrFail($id);
        return view('admin.mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tb_mobil  $tb_mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mobil = Tb_mobil::findOrFail($id);
        $mobil->merek = $request->merek;
        $mobil->model = $request->model;
        $mobil->nomor_plat = $request->nomor_plat;
        $mobil->harga_sewa_perhari = $request->harga_sewa_perhari;
        $mobil->status_sewa = 'Tersedia';
        $mobil->deskripsi = $request->deskripsi;
        // upload image / foto
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->save();
        return redirect('admin/mobil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tb_cars  $tb_cars
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (!Tb_mobil::destroy($id)) {
        //     return redirect()->back();}
        // return redirect()->route('mobil.index');
        $mobil = Tb_mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mobil.index');
    }
}
