<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_people', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id')->default(0);
            $table->string('full_name', 255)->nullable();
            $table->string('mobile_number', 255)->nullable();
            $table->string('whatsapp_number', 255)->nullable();
            $table->string('official_email', 255)->nullable();
            $table->string('personal_email', 255)->nullable();
            $table->string('designation', 255)->nullable();
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
        Schema::dropIfExists('contact_people');
    }
}
