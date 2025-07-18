<?php

use Illuminate\Database\Eloquent\Concerns\HasUuids;
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
        Schema::create('cathegories', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->string('name')->unique();
            $table->timestampTz('created_at',0)->useCurrent(); // Creation date
            $table->timestampTz('updated_at',0)->useCurrent()->nullable(); // Update date
            $table->boolean('active')->default(true); // Default is active

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cathegories');
    }
};
