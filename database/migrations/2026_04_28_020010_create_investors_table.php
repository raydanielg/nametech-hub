<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('type', 50); // angel, vc, corporate_vc, impact, government
            $table->text('logo_url')->nullable();
            $table->string('website')->nullable();
            $table->jsonb('investment_focus')->nullable();
            $table->decimal('min_check_size', 12, 2)->nullable();
            $table->decimal('max_check_size', 12, 2)->nullable();
            $table->jsonb('geographic_focus')->nullable();
            $table->jsonb('portfolio_companies')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('investors');
    }
}
