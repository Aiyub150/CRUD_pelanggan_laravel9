<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pelanggan
    	$pelanggan = DB::table('pelanggan')->get();

    	// mengirim data pelanggan ke view index
    	return view('pelanggan.index',['pelanggan' => $pelanggan]);

    }

    public function create()
    {

	// memanggil view tambah
	return view('pelanggan.create');

    }

    public function store(Request $request)
    {
	// insert data ke table pelanggan
	DB::table('pelanggan')->insert([
        'id' => $request->id,
		'nama_pelanggan' => $request->nama_pelanggan,
		'no_telepon' => $request->no_telepon,
		'alamat' => $request->alamat,
		'no_ktp' => $request->no_ktp
	]);
	// alihkan halaman ke halaman pelanggan
	return redirect('/pelanggan');

    }
public function ubah($id)
{
	// mengambil data pelanggan berdasarkan id yang dipilih
	$pelanggan = DB::table('pelanggan')->where('id',$id)->get();
	// passing data pelanggan yang didapat ke view edit.blade.php
	return view('pelanggan.ubah',['pelanggan' => $pelanggan]);

}
public function update(Request $request)
{
	// update data pelanggan
	DB::table('pelanggan')->where('id',$request->id)->update([
		'nama_pelanggan' => $request->nama_pelanggan,
		'no_telepon' => $request->no_telepon,
		'alamat' => $request->alamat,
		'no_ktp' => $request->no_ktp
	]);
	// alihkan halaman ke halaman pelanggan
	return redirect('/pelanggan');
}
public function hapus($id)
{
	// menghapus data pelanggan berdasarkan id yang dipilih
	DB::table('pelanggan')->where('id',$id)->delete();

	// alihkan halaman ke halaman pelanggan
	return redirect('/pelanggan');
}




}
