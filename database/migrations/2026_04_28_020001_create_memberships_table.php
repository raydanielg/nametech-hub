<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users')->onDelete('cascade');
            $table->string('tier', 50); // free, day_pass, hot_desk, dedicated_desk, private_office, virtual
            $table->string('billing_cycle', 20); // monthly, annual
            $table->string('status', 50); // active, cancelled, expired, pending
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('auto_renew')->default(true);
            $table->string('stripe_subscription_id')->nullable();
            $table->string('stripe_customer_id')->nullable();
            $table->decimal('price_paid', 10, 2);
            $table->string('currency', 3)->default('USD');
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamps();

            $table->index('user_id');
            $table->index('status');
            $table->index('end_date');
            $table->index('tier');
        });
    }

    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
