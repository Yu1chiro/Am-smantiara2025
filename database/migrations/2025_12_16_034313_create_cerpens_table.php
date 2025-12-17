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
        Schema::create('cerpens', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('authors'); // RichEditor sesuai request
            $table->string('thumbnail_url')->nullable();
            $table->string('cerpen_url')->nullable(); // Link ke cerpen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cerpens');
    }
};
