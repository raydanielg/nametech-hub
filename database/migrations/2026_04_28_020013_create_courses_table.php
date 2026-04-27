<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('category', 100); // web_dev, data_science, etc.
            $table->string('level', 50); // beginner, intermediate, advanced
            $table->integer('duration_weeks');
            $table->decimal('price', 10, 2);
            $table->string('currency', 3)->default('USD');
            $table->boolean('is_free')->default(false);
            $table->text('thumbnail_url')->nullable();
            $table->string('instructor_name')->nullable();
            $table->jsonb('learning_objectives')->nullable();
            $table->string('status', 50)->default('published'); // draft, published, archived
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
