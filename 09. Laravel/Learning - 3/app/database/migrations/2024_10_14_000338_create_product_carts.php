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
        Schema::create( 'product_carts', function ( Blueprint $table )
        {
            $table->id();

            $table->string( 'email', 50 );
            $table->unsignedBigInteger( 'product_id' );

            $table->string( 'color', 50 );
            $table->string( 'size', 50 );

            // Relationship establish
            $table->foreign( 'email' )
                ->references( 'email' )
                ->on( 'profiles' )
                ->restrictOnDelete()
                ->restrictOnUpdate();

            $table->foreign( 'product_id' )
                ->references( 'id' )
                ->on( 'products' )
                ->restrictOnDelete()
                ->restrictOnUpdate();

            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists( 'product_carts' );
    }
};
