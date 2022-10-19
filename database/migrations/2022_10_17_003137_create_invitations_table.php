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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->string('receiver_name');
            $table->string('reciever_phone');
            $table->string('receiver_email');
            $table->string('guests_number');
            $table->boolean('is_confirmed')->default(0)->nullable();
            $table->datetime('confirmed_at')->nullable();
            $table->text('guest_additional_message')->nullable();
            $table->string('qr_code_path', 2048)->nullable();

            $table->bigInteger('event_id')->unsigned()->nullable();
            $table->foreign('event_id')->references('id')->on('events')
            ->onDelete('cascade')
            ->onUpdate('cascade');


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
        Schema::dropIfExists('invitations');
    }
};
