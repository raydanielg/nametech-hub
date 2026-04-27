<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users')->onDelete('cascade');
            $table->text('bio')->nullable();
            $table->string('location')->nullable();
            $table->string('occupation')->nullable();
            $table->string('company')->nullable();
            $table->string('website')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('github_username')->nullable();
            $table->string('twitter_handle')->nullable();
            $table->jsonb('skills')->nullable(); // Using jsonb for PostgreSQL text[] equivalent in Laravel
            $table->jsonb('interests')->nullable();
            $table->integer('birth_year')->nullable();
            $table->string('gender', 20)->nullable();
            $table->string('preferred_language', 10)->default('en');
            $table->jsonb('notification_preferences')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
