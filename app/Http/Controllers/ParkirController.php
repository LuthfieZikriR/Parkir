<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parkir;
class ParkirController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$terparkir = Parkir::whereRaw("jam_keluar IS NULL AND DATE(created_at) = CURDATE()")->count();
    	$today = Parkir::whereRaw('DATE(created_at) = CURDATE()')->count();
    	return view('parkir.dashboard',compact('terparkir','today'));
    }
    public function create(){
    	return view('parkir.input_parkir');
    }
    public function save(Request $request){
    	$this->validasi($request);
    	Parkir::create($request->all());
    	return back()->withMessage('Berhasil');
    }
    public function validasi($request){
    	$this->validate($request,['nama_kendaraan'=>'required','plat_nomor'=>'required','jenis'=>'required']);
    }
    public function data(){
    	$data = Parkir::whereRaw("jam_keluar IS NULL")->get();
    	return view('parkir.index',compact('data'));
    }
    public function hapus($id){
    	Parkir::destroy($id);
    	return back()->withMessage("Berhasil Menghapus");
    }
    public function edit($id){
    	$data = Parkir::where('id',$id)->first();
    	return view('parkir.edit',compact('data'));
    }
    public function update(Request $request,$id){
    	$this->validasi($request);
    	Parkir::where('id',$id)->update([
    	'nama_kendaraan'=>$request->nama_kendaraan,
    	'jenis'=>$request->jenis,
    	'plat_nomor'=>$request->plat_nomor,
    	]);

    	return redirect('parkir/data')->withMessage('Berhasil Mengubah');
    }
}
