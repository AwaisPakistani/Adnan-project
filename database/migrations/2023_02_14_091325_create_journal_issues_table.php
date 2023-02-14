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
        Schema::create('journal_issues', function (Blueprint $table) { 
                $table->id();
                $table->string('journal_issue_name');
                $table->foreignId('journal_volume_id')->constrained('journal_volumes');
                $table->foreignId('journal_id')->constrained('journals');
                $table->string('journal_issue_status')->nullable();
                $table->string('year')->nullale();
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
        Schema::dropIfExists('journal_issues');
    }
};
