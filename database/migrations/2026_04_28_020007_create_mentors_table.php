<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users')->onDelete('cascade');
            $table->jsonb('expertise_areas');
            $table->integer('years_of_experience')->nullable();
            $table->string('current_role')->nullable();
            $table->string('company')->nullable();
            $table->decimal('hourly_rate', 10, 2)->nullable();
            $table->jsonb('availability')->nullable();
            $table->integer('max_startups')->default(3);
            $table->boolean('is_active')->default(true);
            $table->text('bio')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentors');
    }
}
