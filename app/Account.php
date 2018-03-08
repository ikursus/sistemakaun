<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	// Tetapkan nama table yang perlu dihubungi
    protected $table = 'accounts';

    // Mass assignment
    protected $fillable = [
      'tahun',
      'jenis_akaun',
      'jenis_akaun',
      'jenis_bank',
      'baki_awal'
    ];
}
