<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilestonesTable extends Migration
{
    public function up()
    {
        Schema::create('milestones', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('startup_id')->constrained('startups')->onDelete('cascade');
            $table->foreignUuid('cohort_id')->constrained('cohorts')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('due_date');
            $table->timestamp('completed_at')->nullable();
            $table->string('status', 50)->default('pending'); // pending, submitted, approved, rejected, overdue
            $table->text('submission_url')->nullable();
            $table->text('mentor_feedback')->nullable();
            $table->timestamps();

            $table->index('startup_id');
            $table->index('due_date');
            $table->index('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('milestones');
    }
}
