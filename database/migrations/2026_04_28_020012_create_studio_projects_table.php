<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudioProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('studio_projects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('client_id')->constrained('studio_clients')->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('type', 50); // web_app, mobile_app, saas, ecommerce, enterprise, gov_platform
            $table->string('status', 50)->default('proposal'); // proposal, in_progress, review, completed, maintenance
            $table->decimal('total_price', 12, 2);
            $table->string('currency', 3)->default('USD');
            $table->date('start_date')->nullable();
            $table->date('target_completion_date')->nullable();
            $table->date('actual_completion_date')->nullable();
            $table->text('repository_url')->nullable();
            $table->text('deployment_url')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('studio_projects');
    }
}
