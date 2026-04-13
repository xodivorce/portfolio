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
            $table->string('post_link');
            $table->string('post_image')->nullable();
            $table->string('post_image_alt')->nullable();
            $table->string('post_category');
            $table->date('post_date');
            $table->string('post_title');
            $table->text('post_text');
            $table->enum('platform', ['YouTube', 'Instagram', 'Facebook', 'Pinterest', 'Other']);
            $table->text('post_iframe')->nullable();
            $table->timestamps();
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
