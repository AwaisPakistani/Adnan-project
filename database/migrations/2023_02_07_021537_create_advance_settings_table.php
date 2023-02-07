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
        Schema::create('advance_settings', function (Blueprint $table) {
            $table->id();
            $table->string('main_color')->nullable();
            $table->string('basic_color')->nullable();
            $table->string('button_color')->nullable();
            $table->string('footer_copyright')->nullable();
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
        Schema::dropIfExists('advance_settings');
    }
};
