<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class produkcon extends Controller
{
    public function home()
    {
        $produk = DB::table('produks')->get();
        return view('produk', ['produk' => $produk]);
    }

    public function index()
    {
        $produk = DB::table('produks')->get();
        return view('produk', ['produk' => $produk]);
    }

    public function input()
    {
        return view('tambahproduk');
    }

    public function storeinput(Request $request)
    {
        // insert data ke table tbproduk
        $file = $request->file('foto');
        $filename = $request->id . "." . $file->getClientOriginalExtension();
        $file->move(public_path('assets/img'), $filename);
        DB::table('produks')->insert([
            'id' => $request->id,
            'novel' => $request->novel,
            'genre' => $request->genre,
            'deskripsi' => $request->deskripsi,
            'foto' => $filename
        ]);
        // alihkan halaman ke route produk
        Session::flash('message', 'Input Berhasil.');
        return redirect('/produk/tampil');
    }

    public function update($id)
    {
        // mengambil data produk berdasarkan id yang dipilih
        $produk = DB::table('produks')->where('id', $id)->get();
        // passing data produk yang didapat ke view edit.blade.php
        return redirect('/produk/tampil');
    }

    public function storeupdate(Request $request)
    {
        // update data produk

        DB::table('produks')->where('id', $request->id)->update([
            'novel' => $request->novel,
            'genre' => $request->genre,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto
        ]);

        // alihkan halaman ke halaman produk
        return redirect('/produk/tampil');
    }

    public function delete($id)
    {
        // mengambil data produk berdasarkan id yang dipilih
        DB::table('produks')->where('id', $id)->delete();
        // passing data produk yang didapat ke view edit.blade.php
        return redirect('/produk/tampil');
    }
}
