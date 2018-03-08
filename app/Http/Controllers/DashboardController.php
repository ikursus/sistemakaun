<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountDetail;
use App\Account;

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

        // Dapatkan senarai rekod account_details
        $account_details = AccountDetail::orderBy('id', 'desc')
        ->paginate(2);

        return view('dashboard', compact('account_details', 'tahun'));
    }
}
