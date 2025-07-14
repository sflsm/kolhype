<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('section_contents', function (Blueprint $table) {
            $table->id();
            $table->string('section'); // contoh: hero, header, portfolio
            $table->string('key');     // contoh: title, subtitle, image
            $table->text('value')->nullable(); // isi kontennya
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('section_contents');
    }
};

