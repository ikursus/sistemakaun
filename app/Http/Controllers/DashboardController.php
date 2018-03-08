<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountDetail;
use App\Account;
use DataTables;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Dapatkan senarai tahun yang wujud dari table accounts
        $tahun = Account::groupBy('tahun')->select('tahun')->get();

        return view('dashboard', compact('account_details', 'tahun'));
    }

    /**
     * Datatables rekod account_details
     */
     public function datatables() {
        // Dapatkan senarai rekod account_details
        $account_details = AccountDetail::orderBy('id', 'desc');

        // Beri response papar maklumat account_details
        return DataTables::of($account_details)
        ->addColumn('action', function($duk) {

          return '

          <a href="'. route('duk.show', ['id' => $duk->id]) .'" class="btn btn-primary btn-sm"><i class="fa fa-folder-open"></i></a>
          <a href="'. route('duk.edit', ['id' => $duk->id]) .'" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

          <!-- Button trigger delete modal -->
          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-user-' . $duk->id . '">
              <i class="fa fa-trash"></i>
          </button>

          <form method="POST" action="' . route('duk.destroy', ['id' => $duk->id]) .'">

          <input type="hidden" name="_method" value="DELETE">

          '. csrf_field() .'

          <!-- Modal -->
          <div class="modal fade" id="modal-delete-user-'. $duk->id .'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">

          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">PENGESAHAN HAPUS DATA UNIT KEWANGAN ID: '. $duk->id .'</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>

          <div class="modal-body">

              <p>Adakah anda bersetuju untuk menghapuskan rekod berikut?</p>

              <ul>
                  <li>ID: '. $duk->id .'</li>
                  <li>DARIPADA: '. $duk->daripada .'</li>
                  <li>BAYAR KEPADA: '. $duk->bayar_kepada .'</li>
              </ul>

          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Delete</button>
          </div>
          </div>
          </div>
          </div>
          </div>
          </form>

          ';


        })
        ->make(true);
     }

}
