<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('type', 50); // ebook, template, guide, checklist, whitepaper, video
            $table->string('category', 100); // startup, legal, finance, marketing, tech
            $table->text('file_url')->nullable();
            $table->text('thumbnail_url')->nullable();
            $table->boolean('is_premium')->default(false);
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('download_count')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resources');
    }
}
