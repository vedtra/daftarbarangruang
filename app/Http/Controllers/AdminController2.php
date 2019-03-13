<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pindahbarang;
class AdminController2 extends Controller
{
    public function showreject($tolak)
    {
        $pemohons =pindahbarang::find($tolak);

        return view('admin.tolakmohon',compact('pemohons','tolak'));
    }

    public function rejectprocess(Request $request, $tolak)
    {
        $pemohon =pindahbarang::find($id_tolak);
        $pemohon->keterangan = $request->input('keterangan');
        $pemohon->kode_status_mohon = $request->input('kode_status_mohon');
        $pemohon->save();
        return redirect(url('/'));

    } 
}
