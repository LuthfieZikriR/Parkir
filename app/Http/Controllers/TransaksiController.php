<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transaksi;
use App\Parkir;
class TransaksiController extends Controller
{
	public function __construct()
    {
    	$this->middleware('auth');
    }
    public function index($id)
    {
    	$data = Parkir::where('id',$id)->get();
    	foreach ($data as $value) {
    		if ($value->jenis == "mobil"){
    			$harga = 10000;
    		}else{
    			$harga = 5000;
    		}
    		$new = [
    			'id'=>$value->id,
    			'jenis'=>$value->jenis,
    			'nama_kendaraan'=>$value->nama_kendaraan,
    			'plat_nomor'=>$value->plat_nomor,
    			'jam_masuk'=>$value->created_at,
    			'harga'=>$harga
    		];
    	}

    	return view('transaksi.index',compact('new'));
    }

    public function bayar(Request $request)
    {
    	$this->validate($request,[
    	'parkir_id'=>'required',
    	'bayar'=>'required',
    	'kembalian'=>'required',
    	'harga'=>'required',

    	]);

    	$cek = Transaksi::create([
    		'parkir_id'=>$request->parkir_id,
    		'bayar'=>$request->bayar,
    		'kembalian'=>$request->kembalian,
    		'total'=>$request->harga,
    	]);

    	if($cek){
    		parkir::where('id',$request->parkir_id)->update([
    		'jam_keluar'=>date("Y-m-d H:i:s"),
    		]);
    	}

    	return redirect('parkir/data')->withMessage('Transaksi Berhasil');
    }

    public function struk($id){
    	$data = Transaksi::latest()->first();
    	$data_all = DB::table('parkirs')
    	->join('transaksis','parkirs.id','=','transaksis.parkir_id')
    	->select('parkirs.plat_nomor','transaksis.*')
    	->where('transaksis.id',$data->id)->get();
    	return view('transaksi.struk',compact('data_all'));
    }

    public function laporan(){
    	$data = DB::table('laporan_parkir')->get();
    	$no = 1;
    	return view('laporan.now',['data'=>$data,'no'=>$no]);
    }
}
