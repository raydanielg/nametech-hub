<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorAssignmentsTable extends Migration
{
    public function up()
    {
        Schema::create('mentor_assignments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('mentor_id')->constrained('mentors')->onDelete('cascade');
            $table->foreignUuid('startup_id')->constrained('startups')->onDelete('cascade');
            $table->string('program_type', 50);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('status', 50)->default('active'); // active, completed, terminated
            $table->decimal('match_score', 5, 2)->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentor_assignments');
    }
}
