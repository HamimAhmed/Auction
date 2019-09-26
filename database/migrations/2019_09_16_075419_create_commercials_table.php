<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('first_name',155);
            $table->string('last_name',155);
            $table->string('Company_name',155)->unique();
            $table->text('address_line_1');
            $table->text('address_line_2');
            $table->string('country',25);
            $table->string('state',25);
            $table->string('phone_no',55)->unique();
            $table->string('zip_code',55);
            $table->text('license_paper')->nullable();
            $table->string('license_no')->unique();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commercials');
    }
}
