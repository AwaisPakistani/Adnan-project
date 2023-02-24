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
        Schema::create('attachment_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('frontuser_id')->constrained('frontusers')->nullable();
            $table->foreignId('journal_id')->constrained('journals')->nullable();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('attachment_items');
    }
};
