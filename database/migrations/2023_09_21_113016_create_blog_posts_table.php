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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('author_id')->notNullable();
            $table->unsignedBigInteger('parent_id')->notNullable();
            $table->string('title',255)->notNullable();
            $table->string('meta_title',255)->notNullable();
            $table->string('slug',255)->notNullable();
            $table->text('summery');
            $table->integer('published')->default(null);
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('blog_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
