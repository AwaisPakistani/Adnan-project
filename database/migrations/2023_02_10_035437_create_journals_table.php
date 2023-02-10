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
        Schema::create('journals', function (Blueprint $table) {
           $table->id();
            $table->string('journal_name');
            $table->string('journal_slug');
            $table->string('issn');
            $table->string('scope_and_aim')->nullable();
            $table->foreignId('category_id')->constrained('categories');
            $table->integer('assign_chiefeditor')->nullable();
            $table->string('more_info')->nullable();
            $table->longText('information')->nullable();
            $table->longText('Indexing_or_abstracting')->nullable();
            $table->longText('author_guideline')->nullable();
            $table->integer('days_review')->nullable();
            $table->integer('days_decision')->nullable();
            $table->integer('days_submission')->nullable();
            $table->integer('days_accept')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->string('image')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('author_id')->nullable();
            $table->integer('last_volume')->nullable();
            $table->integer('last_issue')->nullable();
            $table->string('notification')->nullable();
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
        Schema::dropIfExists('journals');
    }
};
