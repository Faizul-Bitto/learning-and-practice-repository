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
        Schema::create( 'profiles', function ( Blueprint $table )
        {
            $table->id();
            $table->string( 'firstName', 50 );
            $table->string( 'lastName', 50 );
            $table->string( 'mobile', 11 )->unique();
            $table->string( 'city', 10 );
            $table->string( 'shippingAddress', 1000 );
            $table->string( 'email', 50 )->unique();

            $table->foreign( 'email' )->references( 'email' )->on( 'users' )
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
        Schema::dropIfExists( 'profiles' );
    }
};
