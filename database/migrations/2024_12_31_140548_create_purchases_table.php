<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('ticket_id');
            $table->foreignUuid('customer_id');
            $table->ulid('ticket_code');
            $table->timestamp('purchased_at');
            $table->timestamp('checked_in_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
