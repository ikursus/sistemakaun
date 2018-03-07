<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('daripada');
            $table->string('bayar_kepada');
            $table->string('keterangan');
            $table->string('bahagian_unit');
            $table->date('tarikh_memo');
            $table->string('rujukan_fail_memo');
            $table->string('peringkat');
            $table->string('jenis_bank');
            $table->string('no_akaun_bank');
            $table->decimal('debit', 8, 2);
            $table->decimal('kredit', 8, 2);
            $table->string('jenis_akaun');
            $table->string('no_baucar');
            $table->date('tarikh_baucar');
            $table->string('no_invois');
            $table->date('tarikh_invois');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_details');
    }
}
