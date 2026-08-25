<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ark_hims_shorts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 160);
            $table->string('youtube_url', 500);
            $table->string('youtube_id', 11)->index();
            $table->boolean('is_active')->default(true)->index();
            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->timestamps();
        });

        $now = now();

        DB::table('ark_hims_shorts')->insert([
            [
                'title' => 'Healthcare Technology in Action',
                'youtube_url' => 'https://www.youtube.com/shorts/3JFK_HlLvCg',
                'youtube_id' => '3JFK_HlLvCg',
                'is_active' => true,
                'sort_order' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'ARK HIMS — Smart Hospital Management, Simplified',
                'youtube_url' => 'https://www.youtube.com/shorts/4yZ1Cu2fkl4',
                'youtube_id' => '4yZ1Cu2fkl4',
                'is_active' => true,
                'sort_order' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('ark_hims_shorts');
    }
};
