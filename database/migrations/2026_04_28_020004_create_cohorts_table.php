<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortsTable extends Migration
{
    public function up()
    {
        Schema::create('cohorts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 100);
            $table->string('program_type', 50); // launchpad, scale
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('max_startups')->nullable();
            $table->string('status', 50); // upcoming, active, completed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cohorts');
    }
}
