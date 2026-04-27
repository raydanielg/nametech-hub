<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('mentor_sessions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('assignment_id')->constrained('mentor_assignments')->onDelete('cascade');
            $table->timestamp('scheduled_at');
            $table->integer('duration_minutes')->default(60);
            $table->text('meeting_link')->nullable();
            $table->string('status', 50)->default('scheduled'); // scheduled, completed, cancelled, no_show
            $table->text('notes')->nullable();
            $table->text('feedback_from_startup')->nullable();
            $table->integer('rating_from_startup')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentor_sessions');
    }
}
