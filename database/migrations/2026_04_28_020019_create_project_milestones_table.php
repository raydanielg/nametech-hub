<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectMilestonesTable extends Migration
{
    public function up()
    {
        Schema::create('project_milestones', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('project_id')->constrained('studio_projects')->onDelete('cascade');
            $table->string('name');
            $table->integer('percentage'); // % of total project
            $table->date('due_date');
            $table->timestamp('completed_at')->nullable();
            $table->string('status', 50)->default('pending'); // pending, approved, rejected
            $table->foreignUuid('invoice_id')->nullable()->constrained('invoices')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_milestones');
    }
}
