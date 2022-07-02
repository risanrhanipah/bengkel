<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $sql = DB::table('siswa')->get();
    	return view('siswa',['sql' => $sql]);
    }
    public function simpan(Request $req)
    {
        DB::table('siswa')->insert([
            'nis' => $req->nis,
            'nama' => $req->nama,
            'rombel' => $req->rombel,
            'rayon' => $req->rayon
        ]);
        return redirect('/siswa');
    }
    public function edit($data)
    {
        $sql = DB::table('siswa')->where('nis',$data)->get();
        return view('ubah',['sql' => $sql]);
    }
    public function update(Request $req)
    {
        DB::table('siswa')->where('nis',$req->nis)->update([
            'nama' => $req->nama,
            'rombel' => $req->rombel,
            'rayon' => $req->rayon
        ]);
        return redirect('/siswa');
    }
    public function delete($data)
    {
        DB::table('siswa')->where('nis',$data)->delete();
        return redirect('/siswa');
    }
}
?>  