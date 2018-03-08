<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountDetail;
use App\Account;

class AkaunController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        // Validasi data dari borang
        $request->validate([
            'tahun' => 'required',
            'jenis_akaun' => 'required',
            'no_bank_akaun' => 'required',
            'jenis_bank' => 'required',
            'baki_awal' => 'required'
        ]);
        // Dapatkan semua data daripada borang tambah akaun di dashboard
        $data = $request->all();
        // Simpan semua data ke dalam table accounts
        Account::create($data);
        // Beri response kembali ke halaman dashboard bersama mesej sukses
        return redirect()->route('dashboard')->with('mesej-sukses', 'Rekod berjaya ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($jenis_akaun)
    {
        // Dapatkan data dari table accounts
        $account = Account::where('jenis_akaun', '=', $jenis_akaun)->first();

        // Dapatkan detail maklumat akaun berdasarkan jenis akaun
        $account_details = AccountDetail::where('jenis_akaun', '=', $jenis_akaun)
        ->paginate(10);

        // Paparkan template detail bersama data account
        return view('akaun/detail', compact('account_details', 'jenis_akaun', 'account') );
    }

}
