<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MerkMukenah;
use DB;

class MerkMukenahController extends Controller
{
    public function index(){
        $mm= DB::table('merk_mukenah')->get();
        return view('merk_mukenah.mm', compact(['mm']));
    }

    public function tambah(){       
        return view('merk_mukenah.tambahMM');
    }

    public function store(Request $request){       
        MerkMukenah::create($request->except(['_token','submit']));
        $mm= DB::table('merk_mukenah')->get();
        return view('merk_mukenah.mm', compact(['mm']));
    }

    public function edit($id){     
        $mm=DB::table('merk_mukenah')->where('merk_id',$id)->get();
       return view('merk_mukenah.editMM', compact(['mm']));
    }

    public function update(Request $request){
        MerkMukenah::where('merk_id', $request->merk_id)
             ->update([
                    'merk_id' => $request->merk_id,
                    'merk_nama' => $request->merk_nama,
             ]);
             $mm= DB::table('merk_mukenah')->get();
             return view('merk_mukenah.mm', compact(['mm']));
    }

    public function hapus($id){     
        MerkMukenah::where('merk_id', $id)->delete();
        $mm= DB::table('merk_mukenah')->get();
        return view('merk_mukenah.hapusMM', compact(['mm']));
    }
}
