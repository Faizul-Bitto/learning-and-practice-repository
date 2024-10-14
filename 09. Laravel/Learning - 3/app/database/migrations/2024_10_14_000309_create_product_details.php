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
        Schema::create( 'product_details', function ( Blueprint $table )
        {
            $table->id();
            $table->string( 'img1', 200 );
            $table->string( 'img2', 200 );
            $table->string( 'img3', 200 );
            $table->string( 'img4', 200 );
            $table->longText( 'description' );
            $table->string( 'color', 50 );
            $table->string( 'size', 50 );

            // foreign key declare
            $table->unsignedBigInteger( 'product_id' )->unique();

            // relationship establish
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
        Schema::dropIfExists( 'product_details' );
    }
};
