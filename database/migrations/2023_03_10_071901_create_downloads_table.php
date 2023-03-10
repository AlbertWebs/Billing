<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('id');
            $table->string('student');
            $table->integer('campus');
            $table->text('note');
            $table->integer('balance');
            $table->integer('balance_temp')->nullable();
            $table->integer('amount');
            $table->integer('agreed_amount')->nullable();
            $table->string('discount')->nullable();
            $table->integer('course_id');
            $table->string('group_id')->nullable();
            $table->string('group_role')->nullable();
            $table->string('original_payment')->nullable();
            $table->text('description')->nullable();
            $table->string('due')->nullable();
            $table->text('title')->nullable();
            $table->string('reference')->nullable();
            $table->string('transID')->nullable();
            $table->string('paid')->nullable();
            $table->tinyInteger('type')->default(1);
            $table->string('m_pesa')->nullable();
            $table->string('status')->default('open');
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
        Schema::dropIfExists('downloads');
    }
}
