<?php

// database/migrations/2025_07_04_000002_create_pending_registrations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pending_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password'); // akan di-hash
            $table->string('whatsapp')->nullable();
            $table->foreignId('event_course_id')->constrained('event_courses')->onDelete('cascade');
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pending_registrations');
    }
};

