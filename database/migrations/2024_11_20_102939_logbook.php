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
        // Table for authors
        Schema::create('author', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        Schema::create('UserProject', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
        

        // Table for prompt fragments
        Schema::create('prompt_fragment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('author')->onDelete('cascade');
            $table->text('content');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Table for tags
        Schema::create('tag', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        // Join table for many-to-many relationship between prompt fragments and tags
        Schema::create('prompt_fragment_tag', function (Blueprint $table) {
            $table->foreignId('prompt_fragment_id')->constrained('prompt_fragment')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tag')->onDelete('cascade');
            $table->primary(['prompt_fragment_id', 'tag_id']);
        });

        // Table for composite prompts
        Schema::create('composite_prompt', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('author')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Table for result examples
        Schema::create('result_example', function (Blueprint $table) {
            $table->id();
            $table->foreignId('composite_prompt_id')->constrained('composite_prompt')->onDelete('cascade');
            $table->text('result_content');
            $table->timestamps();
        });

        // Table for context files
        Schema::create('context_file', function (Blueprint $table) {
            $table->id();
            $table->foreignId('composite_prompt_id')->constrained('composite_prompt')->onDelete('cascade');
            $table->string('filename');
            $table->string('file_path');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Link table for 1-to-many relationship between composite prompts and prompt fragments
        Schema::create('composite_prompt_prompt_fragment', function (Blueprint $table) {
            $table->foreignId('composite_prompt_id')->constrained('composite_prompt')->onDelete('cascade');
            $table->foreignId('prompt_fragment_id')->constrained('prompt_fragment')->onDelete('cascade');
            $table->integer('order_index');
            $table->primary(['composite_prompt_id', 'prompt_fragment_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composite_prompt_prompt_fragment');
        Schema::dropIfExists('context_file');
        Schema::dropIfExists('result_example');
        Schema::dropIfExists('composite_prompt');
        Schema::dropIfExists('prompt_fragment_tag');
        Schema::dropIfExists('tag');
        Schema::dropIfExists('prompt_fragment');
        Schema::dropIfExists('author');
        Schema::dropIfExists('users');
    }
};