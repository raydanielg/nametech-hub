<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSynergyLogsTable extends Migration
{
    public function up()
    {
        Schema::create('synergy_logs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('type', 50); // revenue_split, talent_pipeline, idea_submission
            $table->string('source_entity_type', 100);
            $table->uuid('source_entity_id');
            $table->string('target_entity_type', 100);
            $table->uuid('target_entity_id')->nullable();
            $table->decimal('amount', 12, 2)->nullable();
            $table->decimal('percentage', 5, 2)->nullable();
            $table->string('status', 50)->default('pending'); // pending, completed, failed
            $table->timestamp('processed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('synergy_logs');
    }
}
