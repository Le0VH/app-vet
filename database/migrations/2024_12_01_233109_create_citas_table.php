<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('citas', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_user');
        $table->string('title');
        $table->text('description')->nullable();
        $table->boolean('allDay')->default(false);
        $table->string('className')->nullable();
        $table->datetime('start');
        $table->datetime('end');
        $table->tinyInteger('estado')->default(0);
        $table->string('location')->nullable();
        $table->timestamps();

        $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
