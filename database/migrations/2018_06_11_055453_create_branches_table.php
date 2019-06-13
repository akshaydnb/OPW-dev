<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owners_id', 11)->default(0);
            $table->string('owners_type', 255)->nullable();
            $table->string('shop_name', 255)->nullable();
            $table->string('branch_name', 255)->nullable();
            $table->string('landline_number', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('state', 255)->nullable();
            $table->string('gst_number', 255)->nullable();
            $table->tinyInteger('gst_type', 255)->comment('CGST/SGST [1], IGST [2]')->default(0);
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
        Schema::dropIfExists('branches');
    }
}
