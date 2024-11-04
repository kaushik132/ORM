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
        Schema::create('reject_products', function (Blueprint $table) {
            $table->id();
            $table->string('prname');
            $table->string('photo');
            $table->string('prprice');
            $table->string('prdiscount');
            $table->string('prdescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reject_products');
    }
};
