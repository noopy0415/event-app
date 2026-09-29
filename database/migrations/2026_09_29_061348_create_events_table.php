<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('title', 100)->comment('イベントタイトル');
            $table->text('description')->comment('イベント詳細');
            $table->string('venue', 100)->comment('イベント会場');
            $table->dateTime('starts_at')->comment('イベント開催日時');
            $table->dateTime('ends_at')->comment('イベンド終了日時');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
