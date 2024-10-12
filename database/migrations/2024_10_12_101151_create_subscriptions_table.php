<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('package_id')->index();
            $table->integer('organization_id')->index();
            $table->boolean('active')->default(true);
            $table->integer('enabled_modules')->default(31864);
            $table->string('plan_started');
            $table->string('plan_expires');
            $table->string('plan_paid');
            $table->string('trial_started');
            $table->string('account_key');
            $table->enum('plan_term', ['month', 'year'])->nullable();
            $table->enum('trial_plan', ['pro', 'enterprise'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
