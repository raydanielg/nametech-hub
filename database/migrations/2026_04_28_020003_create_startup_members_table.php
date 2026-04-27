<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupMembersTable extends Migration
{
    public function up()
    {
        Schema::create('startup_members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('startup_id')->constrained('startups')->onDelete('cascade');
            $table->foreignUuid('user_id')->constrained('users')->onDelete('cascade');
            $table->string('role_in_startup', 100)->nullable();
            $table->boolean('is_primary_contact')->default(false);
            $table->decimal('equity_percentage', 5, 2)->nullable();
            $table->timestamp('joined_at')->useCurrent();
            $table->timestamp('left_at')->nullable();
            $table->timestamps();

            $table->unique(['startup_id', 'user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('startup_members');
    }
}
