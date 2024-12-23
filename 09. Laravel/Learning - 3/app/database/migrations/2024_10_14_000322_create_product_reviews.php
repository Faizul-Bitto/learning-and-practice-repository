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
        Schema::create( 'product_reviews', function ( Blueprint $table )
        {
            $table->id();
            $table->string( 'description', 1000 );
            $table->string( 'email', 50 );

            // foreign key declare
            $table->unsignedBigInteger( 'product_id' );

            $table->foreign( 'email' )
                ->references( 'email' )
                ->on( 'profiles' )
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->foreign( 'product_id' )
                ->references( 'id' )
                ->on( 'products' )
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists( 'product_reviews' );
    }
};
