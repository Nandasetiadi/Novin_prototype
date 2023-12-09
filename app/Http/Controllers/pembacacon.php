<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PembacaCon extends Controller
{
    public function index()
    {
        if (Auth::user()->role != 'Guest') {
            $pembaca = DB::table('pembaca')->get();
            return view('pembaca', ['pembaca' => $pembaca]);
        } else {
            $pembaca = DB::table('pembaca')->where('kode', Auth::user()->id)->get();
            return view('pembaca', ['pembaca' => $pembaca]);
        }
    }

    public function input()
    {
        return view('tambahpembaca');
    }

    public function storeinput(Request $request)
    {   
        // insert data ke table tbpembelian
        DB::table('pembaca')->insert([
                'kode' => $request->kode,
                'nama_pembaca' => $request->nama_pembaca,
                'judul' => $request->judul,
                'tanggal_baca' => $request->tanggal_baca,
                'status' => 'verifikasi'
        ]);
        // alihkan halaman ke route pembelian
        Session::flash('message', 'Input Berhasil.');
        return redirect('/pembaca/tampil');
    }

    public function update($id)
    {
        // mengambil data pembelian berdasarkan id yang dipilih
        $pembaca = DB::table('pembaca')->where('kode', $id)->get();
        // passing data pembelian yang didapat ke view edit.blade.php
        return redirect('/pembaca/tampil');
    }

    public function storeupdate(Request $request)
    {
        // update data pembelian

        DB::table('pembaca')->where('kode', $request->kode)->update([
            'status' => $request->status
        ]);

        // alihkan halaman ke halaman pembelian
        return redirect('/pembaca/tampil');
    }

    public function delete($id)
    {
        // mengambil data pembelian berdasarkan id yang dipilih
        DB::table('pembaca')->where('kode', $id)->delete();
        // passing data pembelian yang didapat ke view edit.blade.php
        return redirect('/pembaca/tampil');
    }
}
