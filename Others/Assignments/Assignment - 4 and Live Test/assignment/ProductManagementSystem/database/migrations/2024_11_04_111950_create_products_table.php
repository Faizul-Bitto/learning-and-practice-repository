<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create( 'products', function ( Blueprint $table )
        {
            $table->id();
            $table->string( 'product_id' )->unique();
            $table->string( 'name' );
            $table->text( 'description' )->nullable();
            $table->decimal( 'price' );
            $table->unsignedInteger( 'stock' )->nullable();
            $table->string( 'image' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists( 'products' );
    }
};
