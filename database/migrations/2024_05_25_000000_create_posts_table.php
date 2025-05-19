<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('main_heading')->nullable();
            $table->text('main_content')->nullable();
            $table->text('content')->nullable();
            $table->text('final_content')->nullable();
            
            // Subheadings and their content
            $table->string('subheading_1')->nullable();
            $table->text('subcontent_1')->nullable();
            $table->string('subheading_2')->nullable();
            $table->text('subcontent_2')->nullable();
            $table->string('subheading_3')->nullable();
            $table->text('subcontent_3')->nullable();
            $table->string('subheading_4')->nullable();
            $table->text('subcontent_4')->nullable();
            $table->string('subheading_5')->nullable();
            $table->text('subcontent_5')->nullable();
            $table->string('subheading_6')->nullable();
            $table->text('subcontent_6')->nullable();
            $table->string('subheading_7')->nullable();
            $table->text('subcontent_7')->nullable();
            
            // Images
            $table->string('featured_image')->nullable();
            $table->string('featured_image_md')->nullable();
            
            // Categorization
            $table->string('category');
            $table->json('tags')->nullable();
            $table->string('slug')->unique();
            
            // Author and stats
            $table->unsignedBigInteger('author_id');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            
            // Publishing
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}