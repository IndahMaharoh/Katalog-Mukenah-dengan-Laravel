<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;
use DB;

class KotaController extends Controller
{
    
    public function index(){
        $kota= DB::table('asal')->get();
        return view('kota.kota', compact(['kota']));
    }
    public function tambah(){
        $kota= DB::table('asal')->get();
        return view('kota.tambahKota', compact(['kota']));
    }

    public function store(Request $request){       
        Kota::create($request->except(['_token','submit']));
        $kota= Kota::all();
        return view('kota.kota', compact(['kota']));
    }

    public function edit($id){     
        $kota= Kota::select('*')->where('asal_id', $id)->get();
        return view('kota.editkota', compact(['kota']));
    }

    public function update(Request $request){
    Kota::where('asal_id', $request->asal_id)
             ->update([
                    'asal_id' => $request->asal_id,
                    'kota_asal' => $request->kota_asal,
             ]);
             $kota= Kota::all();
             return view('kota.kota', compact(['kota']));
    }

    public function hapus($id){     
        Kota::where('asal_id', $id)->delete();
        $kota= DB::table('asal')->get();
        return view('kota.hapusKota', compact(['kota']));
    }
}
