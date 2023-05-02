<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObsTable extends Migration
{
    public function up()
    {
        Schema::create('obs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('payment_date')->nullable();
            $table->string('company');
            $table->string('remitter');
            $table->string('obs_name');
            $table->string('vessel');
            $table->string('purpose');
            $table->integer('inv_num');
            $table->string('memo_num');
            $table->decimal('inv_amount', 15, 2);
            $table->string('comp_ref');
            $table->string('bank_ref');
            $table->decimal('amount_rec', 15, 2);
            $table->decimal('b_charge', 15, 2);
            $table->decimal('l_amount', 15, 2);
            $table->decimal('accumulated', 15, 2);
            $table->longText('remarks');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
