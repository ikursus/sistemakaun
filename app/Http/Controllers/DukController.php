<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Panggil Model AccountDetail
use App\AccountDetail;

class DukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('duk/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data dari borang
        $request->validate([
            'daripada' => 'required',
            'bayar_kepada' => 'required',
            'debit' => 'numeric',
            'kredit' => 'numeric'
        ]);

        // Dapatkan semua data dari borang
        $data = $request->all();

        // Simpan data ke dalam table account_details
        $account = AccountDetail::create($data);

        // Beri response kembali ke halaman detail akaun kewangan
        return redirect()->route('akaun.show', ['id' => $account->jenis_akaun])->with('mesej-sukses', 'Rekod berjaya ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Dapatkan rekod duk berdasarkan ID
        $duk = AccountDetail::find($id);

        // Beri respon papar template read.blade.php
        return view('duk/read', compact('duk') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // Dapatkan rekod duk berdasarkan ID
      $duk = AccountDetail::find($id);

      // Beri respon papar template read.blade.php
      return view('duk/edit', compact('duk') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // Validasi data dari borang
      $request->validate([
          'daripada' => 'required',
          'bayar_kepada' => 'required',
          'debit' => 'numeric',
          'kredit' => 'numeric'
      ]);

      // Dapatkan semua data dari borang jika tiada masalah dengan validasi
      $data = $request->all();

      // Kemaskini data ke dalam table account_details berdasarkan ID account
      $duk = AccountDetail::find($id);
      $duk->update($data);

      // Beri response kembali ke halaman detail akaun kewangan
      return redirect()
      ->route('duk.show', ['id' => $id])
      ->with('mesej-sukses', 'Rekod berjaya dikemaskini.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // Hapuskan data berdasarkan ID dari table account_details
      $duk = AccountDetail::find($id);
      $duk->delete();

      // Beri response kembali ke halaman dashboard bersama mesej berjaya
      return redirect()->route('dashboard')->with('mesej-sukses', 'Rekod berjaya dihapuskan');
    }
}
