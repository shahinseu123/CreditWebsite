<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("lastname");
            $table->bigInteger("phone");
            $table->string("email");
            $table->string("streetaddress");
            $table->string("cityzip");
            $table->date("dob");
            $table->string("identitysign");
            $table->string("identityUsername");
            $table->string("identityPassword")->nullable();
            $table->integer("ssn");
            $table->string("consistentIncome");
            $table->string("finincialBint");
            $table->string("purchasePlan");
            $table->string("doyoudisput");
            $table->string("activeChepter7");
            $table->string("isAboveTure");
            $table->string("doUauthoriseMe");
            $table->string("appoinment");
            $table->string("preferedtime");
            $table->string("leavecomment");
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
        Schema::dropIfExists('contacts');
    }
}
