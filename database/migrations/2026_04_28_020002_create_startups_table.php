<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupsTable extends Migration
{
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('logo_url')->nullable();
            $table->string('tagline')->nullable();
            $table->text('description')->nullable();
            $table->string('industry', 100)->nullable();
            $table->string('stage', 50)->nullable();
            $table->date('founding_date')->nullable();
            $table->integer('team_size')->nullable();
            $table->string('website')->nullable();
            $table->text('pitch_deck_url')->nullable();
            $table->decimal('mrr', 10, 2)->nullable();
            $table->decimal('total_funding_raised', 12, 2)->default(0);
            $table->foreignUuid('founder_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignUuid('cohort_id')->nullable()->constrained('cohorts')->onDelete('set null');
            $table->foreignUuid('primary_contact_user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('status', 50)->default('active');
            $table->timestamps();

            $table->index('slug');
            $table->index('industry');
            $table->index('stage');
            $table->index('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('startups');
    }
}
