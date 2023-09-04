<?php

namespace App\Http\Controllers;

use App\Models\Tb_penyewa;
use App\Models\Tb_mobil;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class TbPenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyewa = Tb_penyewa::all();
        return view('admin.penyewa.index', compact('penyewa'));
    }

    public function sewa($id,Request $request)
    {

        if(auth()->check() == null){
            return redirect('/login');
        }else{
        $mobilid = Tb_mobil::find($id);
        $hargamobile = $mobilid->harga_sewa_perhari;
        $sewas = Tb_penyewa::find($id);
        $sewa = new  Tb_penyewa;
        $sewa->id_user = Auth::user()->id;
        $sewa->id_mobil = $id;
        $sewa->tanggal_mulai = $request->tanggal_mulai;
        $sewa->tanggal_selesai = $request->tanggal_selesai;
        $sewa->lama_sewa = $request->lama_sewa;
        $sewa->total_harga = $hargamobile * $sewa->lama_sewa; 
        $sewa->save();

        $mobil = Tb_mobil::find($id);
        $mobil ->status_sewa="sedang disewa";
        $mobil ->save();
        return redirect()->back();
        }
    }


    public function mobilyangdisewa(){
       
        if(auth()->check() == null){
            return redirect('/login');
        }else{
            $sewa = Tb_penyewa::all();
            $user = Auth::user()->id;
        }

        return view('mobilsewa' , compact('sewa','user'));
    }

    public function kembalikanmobil($id,Request $request){
        $id_mobil = $request->id_mobil;
        $mobil = Tb_mobil::find($id_mobil);
        $plat = $request->nomor_plat;
        
        if($mobil->nomor_plat == $plat){
        $mobil = Tb_mobil::find($id_mobil);
        $mobil->status_sewa = "Tersedia";
        $mobil->save();

        $sewa = Tb_penyewa::find($id);
        $sewa->status_pengembalian = 'Dikembalikan';
        $sewa->save();

        $mobil ->save();
        return redirect()->back();
        }else{
            return "plat nomor tidak ada";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tb_penyewa  $tb_penyewa
     * @return \Illuminate\Http\Response
     */
    public function show(Tb_penyewa $tb_penyewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tb_penyewa  $tb_penyewa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tb_penyewa $tb_penyewa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tb_penyewa  $tb_penyewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tb_penyewa $tb_penyewa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tb_penyewa  $tb_penyewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tb_penyewa $tb_penyewa)
    {
        //
    }
}
