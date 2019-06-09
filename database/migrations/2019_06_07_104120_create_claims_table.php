<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('country_id')->nullable();
            $table->integer('region_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('area_id')->nullable();
            $table->text('street')->nullable();
            $table->text('house')->nullable();
            $table->text('entrance')->nullable();
            $table->text('floor')->nullable();
            $table->text('apartment')->nullable();
            $table->text('place_description')->nullable();

            $table->integer('category_claim_id')->nullable();
            $table->integer('title')->nullable();
            $table->integer('text_claim')->nullable();

            $table->text('status')->nullable();
            $table->integer('system_status')->default(0);
            $table->integer('sender_id')->nullable();
            $table->integer('city_operator')->nullable();
            $table->integer('area_operator')->nullable();
            $table->integer('worker_id')->nullable();


            $table->text('user_email')->nullable();
            $table->text('user_phone')->nullable();
            $table->text('device_id')->nullable();
            $table->text('browser_hash')->nullable();

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
        Schema::dropIfExists('claims');
    }
}
