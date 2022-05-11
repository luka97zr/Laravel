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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->foreignId('post_id')->constrained()->cascadeOnDelete(); // Radi isto sto i dole!
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();

            // $table->unsignedBigInteger('post_id');
            // $table->foreign('post_id')->references('id')->on('posts')->cascadeOnDelete(); //Ako obrisemo post na koji je komentarisano, brise se i komentar iz baze(foreign contstraint)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
