<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RincianProduk;
use DB;

class RincianProdukController extends Controller
{
    public function index(){
        $rp= DB::table('rincian_produk')
            ->leftJoin('merk_mukenah','rincian_produk.merk_id', '=', 'merk_mukenah.merk_id')
            ->leftJoin('bahan_mukenah','rincian_produk.bahan_id', '=', 'bahan_mukenah.bahan_id')
            ->leftJoin('asal','rincian_produk.asal_id', '=', 'asal.asal_id')
            ->get();
        return view('rincian_produk.RP', compact(['rp']));
    }

    public function harga(){
        $rp= DB::table('rincian_produk')
            ->leftJoin('merk_mukenah','rincian_produk.merk_id', '=', 'merk_mukenah.merk_id')
            ->leftJoin('bahan_mukenah','rincian_produk.bahan_id', '=', 'bahan_mukenah.bahan_id')
            ->leftJoin('asal','rincian_produk.asal_id', '=', 'asal.asal_id')
            ->orderBy('harga','asc')
            ->get();
        return view('rincian_produk.RP', compact(['rp']));
    }

    public function populer(){
        $rp= DB::table('rincian_produk')
            ->leftJoin('merk_mukenah','rincian_produk.merk_id', '=', 'merk_mukenah.merk_id')
            ->leftJoin('bahan_mukenah','rincian_produk.bahan_id', '=', 'bahan_mukenah.bahan_id')
            ->leftJoin('asal','rincian_produk.asal_id', '=', 'asal.asal_id')
            ->orderBy('rating','desc')
            ->get();
        return view('rincian_produk.RP', compact(['rp']));
    }

    public function tambah(){       
        return view('rincian_produk.tambahRP');
    }

    public function store(Request $request){       
        RincianProduk::create($request->except(['_token','submit']));
        $rp= DB::table('rincian_produk')
            ->leftJoin('merk_mukenah','rincian_produk.merk_id', '=', 'merk_mukenah.merk_id')
            ->leftJoin('bahan_mukenah','rincian_produk.bahan_id', '=', 'bahan_mukenah.bahan_id')
            ->leftJoin('asal','rincian_produk.asal_id', '=', 'asal.asal_id')
            ->get();
        return view('rincian_produk.RP', compact(['rp']));
    }

    public function edit($id){     
        $rp= DB::table('rincian_produk')->where('produk_id', $id)->get();
        return view('rincian_produk.editRP', compact(['rp']));
    }

    public function update(Request $request){
        $file=$request->file('gambar_produk');
        $filename=$file->getClientOriginalName();
        $request->file('gambar_produk')->move("img/", $filename);
        RincianProduk::where('produk_id', $request->produk_id) 
             ->update([
                    'produk_id' => $request->produk_id,
                    'gambar_produk' => $filename,
                    'nama_produk' => $request->nama_produk,
                    'merk_id' => $request->merk_id,
                    'bahan_id' => $request->bahan_id,
                    'harga' => $request->harga,
                    'nama_toko' => $request->nama_toko,
                    'asal_id' => $request->asal_id,
                    'rating' => $request->rating,
                    'link' => $request->link,
                    'penjelasan' => $request->penjelasan,
                    ]);
            $rp= DB::table('rincian_produk')
                    ->leftJoin('merk_mukenah','rincian_produk.merk_id', '=', 'merk_mukenah.merk_id')
                    ->leftJoin('bahan_mukenah','rincian_produk.bahan_id', '=', 'bahan_mukenah.bahan_id')
                    ->leftJoin('asal','rincian_produk.asal_id', '=', 'asal.asal_id')
                    ->get();
             return view('rincian_produk.RP', compact(['rp']));
    }

    public function hapus($id){     
        RincianProduk::where('produk_id', $id)->delete();
        $rp= DB::table('rincian_produk')->get();
        return view('rincian_produk.hapusRP', compact(['rp']));
    }
}  
