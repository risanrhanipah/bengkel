<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DistributorController extends Controller
{
    public function index()
    {
    	$sql = DB::table('distributor')->get();
    	return view('distributor',['sql' => $sql]);
    }
    public function tambah(Request $req)
    {
    	DB::table('distributor')->insert([
    		'distributorID' => $req->distributorID,
    		'distributor' => $req->distributor
    	]);
    	return redirect('/distributor');
    }

    public function hapus($id)
    {
        DB::table('distributor')->where('distributorID',$id)->delete();
        return redirect('/distributor');
    }
}