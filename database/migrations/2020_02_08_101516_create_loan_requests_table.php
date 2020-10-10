<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('loan_id');
            $table->integer('amount');
            $table->string('purpose')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_age')->nullable();
            $table->string('state');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->integer('status');
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
        Schema::dropIfExists('loan_requests');
    }
}
