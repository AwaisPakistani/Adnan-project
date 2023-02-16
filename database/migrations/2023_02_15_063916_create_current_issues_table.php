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
        Schema::create('current_issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('frontuser_id')->constrained('frontusers')->nullable();
            $table->foreignId('journal_id')->constrained('journals')->nullable();
            $table->foreignId('journal_volume_id')->constrained('journal_volumes')->nullable();
            $table->foreignId('issue_id')->constrained('journal_issues')->nullable();
            $table->string('deleted_at')->nullable();
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
        Schema::dropIfExists('current_issues');
    }
};
