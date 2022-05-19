<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountbalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountbalance', function (Blueprint $table) {
            $table->integer('accountBalID', true);
            $table->string('WorkingAccount', 20);
            $table->string('FloatAccount', 20);
            $table->string('UtilityAccount', 20);
            $table->string('ChargesPaidAccount', 20);
            $table->string('OrganizationSettlementAccount', 20);
            $table->string('BOCompletedTime', 50);
            $table->dateTime('updatedTime')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accountbalance');
    }
}
