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
        Schema::create('contributors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('frontusers');
            $table->foreignId('journal_id')->constrained('journals');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('degree')->nullable();
            $table->string('position')->nullable();
            $table->string('institution')->nullable();
            $table->string('department')->nullable();
            $table->string('country')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('contributors');
    }
};
