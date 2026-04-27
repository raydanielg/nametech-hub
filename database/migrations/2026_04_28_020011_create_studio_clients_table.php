<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudioClientsTable extends Migration
{
    public function up()
    {
        Schema::create('studio_clients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('type', 50); // startup, sme, corporate, government, ngo
            $table->text('logo_url')->nullable();
            $table->string('website')->nullable();
            $table->string('industry', 100)->nullable();
            $table->string('size', 50)->nullable(); // 1-10, 11-50, etc.
            $table->foreignUuid('primary_contact_user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->text('billing_address')->nullable();
            $table->string('tax_id', 100)->nullable();
            $table->string('status', 50)->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('studio_clients');
    }
}
