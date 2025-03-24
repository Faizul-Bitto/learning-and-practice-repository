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
            $table->string( 'title', 200 );
            $table->string( 'shortDescription', 500 );
            $table->string( 'price' );
            $table->boolean( 'discount' );
            $table->string( 'discountPrice', 50 );
            $table->string( 'image', 200 );
            $table->boolean( 'stock' );
            $table->float( 'star' );
            $table->enum( 'remark', ['new', 'hot', 'sale', 'popular', 'top'] );

            // foreign key declare
            $table->unsignedBigInteger( 'category_id' );
            $table->unsignedBigInteger( 'brand_id' );

            // relationship establish
            $table->foreign( 'category_id' )
                ->references( 'id' )
                ->on( 'categories' )
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->foreign( 'brand_id' )
                ->references( 'id' )
                ->on( 'brands' )
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
        Schema::dropIfExists( 'products' );
    }
};
