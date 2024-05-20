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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->notNull();
            $table->text('description')->nullable();
            $table->integer('price')->unsigned()->notNull();
            $table->string('image', 255)->nullable();
            $table->unsignedBigInteger('category_id')->notNull();
            $table->date('expired_at')->notNull();
            $table->string('modified_by', 255)->notNull()->comment('email user');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
