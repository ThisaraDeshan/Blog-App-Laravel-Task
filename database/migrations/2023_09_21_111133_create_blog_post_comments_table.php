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
        Schema::create('blog_post_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id')->notNullable();
            $table->unsignedBigInteger('parent_id')->notNullable();
            $table->string('title',255)->notNullable();
            $table->integer('published')->notNullable();
            $table->text('content')->notNullable();
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('blog_posts');
            $table->foreign('parent_id')->references('id')->on('blog_post_comments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post_comments');
    }
};
