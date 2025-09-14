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
        Schema::table('partners', function (Blueprint $table) {
            $table->longText('meta_title')->nullable()->after("address");
            $table->longText('meta_description')->nullable()->after("meta_title");
            $table->longText('meta_keywords')->nullable()->after("meta_description");
            $table->string('meta_image')->nullable()->after("meta_keywords");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partners', function (Blueprint $table) {
            //
        });
    }
};
