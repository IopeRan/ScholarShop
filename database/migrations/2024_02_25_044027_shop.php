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
        Schema::create("shop", function (Blueprint $table) {
            $table->id();
            $table->string('shop');
            $table->string('bio')->default('Hi, this shop is connected to ScholarShop');
            $table->integer('user_id');
            $table->enum('status', [
                'unverified',
                'verified',
            ])->default('unverified');
            $table->string('image')->default('assets/auth/shop.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
