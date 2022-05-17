<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('student');
            $table->text('note');
            $table->integer('balance');
            $table->integer('amount');
            $table->integer('course_id');
            $table->string('group_id')->nullable();
            $table->string('group_role')->nullable();
            $table->string('original_payment')->nullable();
            $table->text('description')->nullable();
            $table->string('due')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('title')->nullable();
            $table->string('reference')->nullable();
            $table->integer('paid');
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
        Schema::dropIfExists('billings');
    }
}
