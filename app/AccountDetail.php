<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountDetail extends Model
{
	// protected $table = 'account_details';

    // Tetapkan fillable mass assignment (data - data yang boleh diisi oleh pengguna)
    protected $fillable = [
    	'daripada',
        'bayar_kepada',
        'keterangan',
        'bahagian_unit',
        'tarikh_memo',
        'rujukan_fail_memo',
        'peringkat',
        'jenis_bank',
        'no_akaun_bank',
        'debit',
        'kredit',
        'jenis_akaun',
        'no_baucar',
        'tarikh_baucar',
        'no_invois',
        'tarikh_invois'
    ];
}
