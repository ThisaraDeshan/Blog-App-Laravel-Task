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
        Schema::create('blog_post_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id')->notNullable();
            $table->unsignedBigInteger('tag_id')->notNullable();
            $table->timestamps();

            // $table->foreign('post_id')->references('id')->on('blog_posts');
            // $table->foreign('tag_id')->references('id')->on('blog_tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post_tags');
    }
};
