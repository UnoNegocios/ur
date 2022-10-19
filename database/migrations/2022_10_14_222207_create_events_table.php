<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name')->nullable();
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->string('main_event_hall_name')->nullable();
            $table->string('main_event_title')->nullable();
            $table->string('main_event_address')->nullable();
            $table->string('ceremony_address')->nullable();
            $table->string('dresscode')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->datetime('datetime')->nullable();
            $table->string('last_day_for_confirmation_date')->nullable();
            $table->string('user_id')->nullable();
            $table->json('donations_bank_information')->nullable();
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
        Schema::dropIfExists('events');
    }
};
