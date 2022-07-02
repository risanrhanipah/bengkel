<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelController extends Controller
{
    public function index()
    {
        $sq = DB::table('distributor')->get();
    	$sql = DB::table('barang')
        ->join('distributor','barang.distributorID','=','distributor.distributorID')
        ->select('barang.barangID','barang.nama','distributor.distributorID','barang.keterangan')
        ->get();
     	return view('index',['sql' => $sql , 'sq' => $sq]);
    }
    public function tambah(Request $req)
    {
    	DB::table('barang')
        ->join('distributor','distributor.distributorID','=','barang.distributorID')
        ->select('barang.barangID','barang.nama','barang.distributorID','barang.keterangan')
        ->insert([
    		'barang.barangID' => $req->barangid,
    		'nama' => $req->nama,
    		'barang.distributorID' => $req->distributor,
    		'keterangan' => $req->keterangan
    	]);    
        return redirect('/index');
    }
    public function edit($data)
    {
        $sql = DB::table('distributor')
        ->join('barang','barang.distributorID','=','distributor.distributorID')
        ->select('barang.*','distributor.distributor')
        ->where('barangID',$data)->get();
    	return view('edit',['sql' => $sql]);
    }
    public function update(Request $req)
    {   
    	DB::table('barang')
        ->join('distributor','distributor.distributorID','=','barang.distributorID')
        ->select('barang.barangID','barang.nama','barang.distributorID','barang.keterangan')
        ->where('barangID',$req->id)->update([
    		'nama' => $req->nama,
    		'distributor.distributorID' => $req->distributorID,
    		'keterangan' => $req->keterangan
    	]);
        return redirect('/index');
        
    }
    public function hapus($id)
    {
    	DB::table('barang')
        ->join('distributor','distributor.distributorID','=','barang.distributorID')
        ->select('barang.barangID','barang.nama','barang.distributorID','barang.keterangan')
        ->where('barangID',$id)
        ->delete();
    	return redirect('/index');
    }
}
?>