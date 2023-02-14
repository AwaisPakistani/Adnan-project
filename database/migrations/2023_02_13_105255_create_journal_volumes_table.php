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
        Schema::create('journal_volumes', function (Blueprint $table) {
            $table->id();
            $table->string('journal_volume_name');
            $table->foreignId('journal_id')->constrained('journals');
            $table->string('journal_volume_status')->enum('Pending','Approved','Banned');
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
        Schema::dropIfExists('journal_volumes');
    }
};
