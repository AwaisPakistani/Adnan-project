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
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('frontuser_id')->constrained('frontusers')->nullable();
            $table->integer('subuser_id')->nullable();
            $table->foreignId('journal_id')->constrained('journals')->nullable();
            $table->string('article_type');
            $table->integer('ethical')->nullable();
            $table->integer('percentagePaper')->nullable();
            $table->longText('submission_title')->nullable();
            $table->longText('abstract')->nullable();
            $table->longText('keywords')->nullable();
            $table->longText('comments')->nullable();
            $table->integer('revision')->nullable();
            $table->integer('issue_id')->nullable();
            $table->integer('volume_id')->nullable();
            $table->string('pdf')->nullable();
            $table->string('submission_date')->nullable();
            $table->string('deleted_at')->nullable();
            $table->string('posting_status')->nullable();
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
        Schema::dropIfExists('papers');
    }
};
