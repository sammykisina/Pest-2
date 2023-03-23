<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('posts', function (Blueprint $table): void {
            $table->id();

            $table->string(column: 'title');
            $table->string(column: 'content');

            $table->boolean(column: 'published')->default(value: true);

            $table->timestamps();
        });
    }
};
