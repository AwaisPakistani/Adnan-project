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
        Schema::create('front_authors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('frontuser_id')->constrained('frontusers');
            $table->string('highest_qualification')->nullable();
            $table->string('phone')->nullable();
            $table->string('prefered_name')->nullable();
            $table->string('position')->nullable();
            $table->string('institution')->nullable();
            $table->string('department')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state_province')->nullable();
            $table->string('zip')->nullable();
            $table->string('reviewer')->nullable();
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
        Schema::dropIfExists('front_authors');
    }
};
