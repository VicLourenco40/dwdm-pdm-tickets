<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('event_id');
            $table->string('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
