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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('post');
            $table->unsignedBigInteger('comment')->nullable();
            $table->timestamps();

            $table->index('user', 'user_idx');
            $table->index('post', 'post_idx');
            $table->index('comment', 'comment_idx');

            $table->foreign('user', 'user_comment_fgk')->references('id')->on('users');
            $table->foreign('post', 'post_comment_fgk')->references('id')->on('posts');
            $table->foreign('comment', 'comment_comment_fgk')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
