<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Query ke table users dan dapatkan semua rekod
        // $users = DB::table('users')->get();

        // Query ke table users dan dapatkan semua rekod mengikut page
        // $users = DB::table('users')->paginate(2);

        // Query ke table users dan dapatkan semua rekod berdasarkan condition
        // $users = DB::table('users')
        // ->where('username', '=', 'admin')
        // ->paginate(2);

        // Query ke table users dan dapatkan semua rekod berdasarkan sorting
        $users = DB::table('users')
        ->orderBy('id', 'desc')
        ->paginate(2);

        // Query ke table users dan dapatkan semua rekod berdasarkan sorting
        // $users = DB::table('users')
        // ->select('username', 'no_badan')
        // ->paginate(2);

        // Die and Dump
        // dd($users);

        // Bagi response papar template senarai
        return view('users.senarai', compact('users') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Buat validasi data dari borang
        $request->validate([
            'nama_staff' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'no_staf' => 'required|unique:users,no_staf',
            'password' => 'required|min:3'
        ]);

        // Dapatkan semua rekod yang terpilih dari borang
        $data = $request->only([
            'nama_staff',
            'username',
            'email',
            'no_staf'
        ]);

        // Encrypt data password dan attach kepada array $data
        $data['password'] = bcrypt( $request->input('password') );

        // Simpan data ke dalam table users
        DB::table('users')->insert($data);

        // Beri response kembali ke halaman senarai users bersama mesej sukses
        return redirect()->route('users.index')->with('mesej-sukses', 'Rekod berjaya ditambah.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Dapatkan rekod user berdasarkan ID beliau
        $staff = DB::table('users')
        ->where('id', '=', $id)
        ->first();

        // Beri respon papar template profile dari folder users
        return view('users/profile', compact('staff') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Dapatkan rekod user berdasarkan ID yang dipilih
        $user = DB::table('users')->where('id', '=', $id)->first();

        // Beri response paparkan template edit user dan attachkan $user
        return view('users/edit', compact('user') );
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
        // Buat validasi data dari borang
        $request->validate([
            'nama_staff' => 'required',
            'username' => 'required|unique:users,username,' . $id,
            'email' => 'required|unique:users,email,' . $id,
            'no_staf' => 'required|unique:users,no_staf,' . $id
        ]);

        // Dapatkan semua rekod yang terpilih dari borang
        $data = $request->only([
            'nama_staff',
            'username',
            'email',
            'no_staf'
        ]);

        // Semak adakah ruangan password di isi atau tidak.
        // Jika di isi, encrypt dan attach kepada array $data
        if ( !empty( $request->input('password') ) )
        {
            // Encrypt data password dan attach kepada array $data
            $data['password'] = bcrypt( $request->input('password') );
        }


        // Simpan data ke dalam table users berdasarkan ID user
        DB::table('users')->where('id', '=', $id)->update($data);

        // Beri response kembali ke halaman senarai users bersama mesej berjaya
        return redirect()->back()->with('mesej-sukses', 'Rekod berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Hapus data dari table users berdasarkan ID user
        DB::table('users')->where('id', '=', $id)->delete();

        // Beri response kembali ke halaman senarai users bersama mesej berjaya
        return redirect()->route('users.index')->with('mesej-sukses', 'Rekod berjaya dihapuskan');
    }
}
