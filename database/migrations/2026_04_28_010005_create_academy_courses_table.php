<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademyCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academy_courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('duration'); // e.g., "4 weeks", "12 weeks"
            $table->string('format'); // online, in_person, hybrid, full_time, weekends
            $table->decimal('price', 10, 2);
            $table->boolean('includes_certificate')->default(true);
            $table->boolean('is_free')->default(false);
            $table->boolean('is_bootcamp')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
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
        Schema::dropIfExists('academy_courses');
    }
}
