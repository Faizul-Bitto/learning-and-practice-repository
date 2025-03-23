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
        Schema::create( 'product_sliders', function ( Blueprint $table )
        {
            $table->id();
            $table->string( 'title', 200 );
            $table->string( 'shortDescription', 500 );
            $table->string( 'image', 200 );

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
        Schema::dropIfExists( 'product_sliders' );
    }
};
