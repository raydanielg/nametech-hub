<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('program_applications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('startup_id')->constrained('startups')->onDelete('cascade');
            $table->string('program_type', 50);
            $table->string('status', 50); // draft, submitted, under_review, accepted, rejected, waitlisted
            $table->decimal('ai_score', 5, 2)->nullable();
            $table->foreignUuid('reviewer_user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->text('review_notes')->nullable();
            $table->timestamp('applied_at')->useCurrent();
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamp('decision_at')->nullable();
            $table->foreignUuid('cohort_id')->nullable()->constrained('cohorts')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('program_applications');
    }
}
