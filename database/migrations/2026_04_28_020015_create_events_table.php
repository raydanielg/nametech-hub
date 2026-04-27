<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTableV2 extends Migration
{
    public function up()
    {
        // Renaming to avoid conflict with existing events table if it exists, or dropping the old one
        Schema::dropIfExists('events');
        
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('type', 50); // workshop, networking, demo_day, hackathon, summit
            $table->string('format', 20); // in_person, virtual, hybrid
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->string('venue')->nullable();
            $table->text('meeting_link')->nullable();
            $table->integer('capacity')->nullable();
            $table->decimal('price_member', 10, 2)->default(0);
            $table->decimal('price_non_member', 10, 2);
            $table->string('currency', 3)->default('USD');
            $table->string('status', 50)->default('upcoming'); // upcoming, ongoing, completed, cancelled
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
